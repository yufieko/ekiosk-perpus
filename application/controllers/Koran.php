<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Koran extends MY_Controller {

    protected $tabel = 'tb_berkas';

	public function __construct() {
        parent::__construct();
        $this->load->model('berkas_model');
    }

	public function getkoran() {
        $this->load->library('Datatables');

        $select = "b.berkas_id,u.user_login,b.berkas_pesan,b.berkas_waktu,b.berkas_download,"
        		. "REPLACE(REPLACE(`b`.`berkas_status`,'0','Draft'),'1','Publish') AS Bstatus";
        $opsi = ' <button class="btn btn-xs btn-flat btn-success" data-toggle="modal" data-target="#modal-download-koran" data-id="'.utf8_encode('$1').'" data-title="Koran" title="Download Data"><i class="fa fa-download"></i></button>'
                . ' <button class="btn btn-xs btn-flat btn-primary" data-toggle="modal" data-target="#modal-edit-koran" data-id="'.utf8_encode('$1').'" data-title="Koran" title="Edit Data"><i class="fa fa-pencil"></i></button>'
        		. ' <button class="btn btn-xs btn-flat btn-danger" data-toggle="modal" data-target="#modal-hapus-koran" data-id="'.utf8_encode('$1').'" data-title="Koran" title="Hapus Data"><i class="fa fa-close"></i></button>';
        $this->datatables->select($select)
        	->add_column('Bopsi', $opsi, 'berkas_id')
        	->from('tb_berkas b')
        	->join('tb_user u', 'b.user_id = u.user_id')
            ->unset_column('Bopsi');
 
        echo $this->datatables->generate();
	}

    public function getkoranwith($id) {
        $data = $this->berkas_model->select(array('berkas_id' => utf8_decode($id)));
        $result = array();
        foreach ($data->result() as $key => $value) {
            $result = $value;
        }
        echo json_encode($result);
    }

    public function download($id){
        $this->load->helper('download');
        $data = $this->berkas_model->select(array("berkas_id" => utf8_decode($id)))->row();
        $path = $_SERVER['DOCUMENT_ROOT'].'/public/koran/' . $data->berkas_nama;
        $this->increment_download($id, $data->berkas_download);
        //force_download($path, NULL);
    }

    public function increment_download($id, $count = 0) {
        $this->berkas_model->update($this->tabel, $id, array('berkas_download' => $count + 1));
    }

    public function get_databox() {
        // data buat box
        $data['boxtotal'] = $this->berkas_model->get_total();
        $data['boxpublish'] = $this->berkas_model->get_total(array('berkas_status' => 1));
        $data['boxdraft'] = $this->berkas_model->get_total(array('berkas_status' => 0));
        $data['boxdownload'] = $this->berkas_model->get_totaldownload();

        echo json_encode($data);
    }

    public function tambah() {
        $config['upload_path']          = './public/koran/';
        $config['allowed_types']        = 'pdf';
        $config['max_size']             = 50000;
        $config['file_ext_tolower']     = TRUE;

        $status['status'] = 1;
        $status['pesan'] = 'Koran baru berhasil ditambahkan';

        $this->load->library('upload', $config);
        $this->load->library('form_validation');
        $this->form_validation->set_rules('tambah-judul', 'Judul','trim|required|strip_tags|min_length[5]');
        $this->form_validation->set_rules('tambah-status', 'Status','trim|required|strip_tags');

        if($this->form_validation->run() == TRUE){
            //$stringURL = str_replace(' ', '-', strtolower(addslashes($this->input->post('tambah-judul', TRUE)))); // Converts spaces to dashes
            if($_FILES['tambah-koran']['size'] == 0) {
                $this->form_validation->set_rules('tambah-koran', 'Koran','required');
            } else {
                if (!$this->upload->do_upload('tambah-koran')) {
                    $status['status'] = 0;
                    $status['pesan'] = $this->upload->display_errors();
                } else {
                    $data = array(
                        'user_id' => $this->user_model->user_id(),
                        //'berkas_pesan' => htmlentities($this->input->post('tambah-judul', TRUE)),
                        'berkas_pesan' => $this->upload->data('raw_name'),
                        'berkas_status' => addslashes($this->input->post('tambah-status', TRUE)),
                        'berkas_nama' => $this->upload->data('file_name')
                    );

                    $this->berkas_model->insert($this->tabel, $data);
                }
                @unlink($_FILES['tambah-koran']);
            }

        }else{
            $status['status'] = 0;
            $status['pesan'] = validation_errors();
        }

        if($status['status'] == 1) {
            $this->logpush->insert($this->router->class, "menambahkan koran baru '" . $data['berkas_pesan'] . "'");
        }

        echo json_encode($status);
    }

    public function edit() {
        $config['upload_path']          = './public/koran/';
        $config['allowed_types']        = 'pdf';
        $config['max_size']             = 50000;
        $config['file_ext_tolower']     = TRUE;

        $status['status'] = 1;
        $status['pesan'] = 'Data koran berhasil diperbarui';

        $this->load->library('upload', $config);
        $this->load->library('form_validation');
        $this->form_validation->set_rules('edit-judul', 'Judul','trim|required|strip_tags|min_length[5]');
        $this->form_validation->set_rules('edit-status', 'Status','trim|required|strip_tags');
        $this->form_validation->set_rules('edit-id', 'ID Koran','trim|required|strip_tags|is_natural_no_zero');

        if($this->form_validation->run() == TRUE){
            $id = addslashes($this->input->post('edit-id', TRUE));
            
            if($_FILES['edit-koran']['size'] == 0) {
                $data = array(
                    'berkas_pesan' => htmlentities($this->input->post('edit-judul', TRUE)),
                    'berkas_status' => addslashes($this->input->post('edit-status', TRUE))
                );

                $this->berkas_model->update($this->tabel, $id, $data);
            } else {
                if (!$this->upload->do_upload('edit-gambar')) {
                    $status['status'] = 0;
                    $status['pesan'] = $this->upload->display_errors();
                } else {
                    $data = array(
                        'berkas_pesan' => htmlentities($this->input->post('edit-judul', TRUE)),
                        'berkas_status' => addslashes($this->input->post('edit-status', TRUE)),
                        'berkas_nama' => $this->upload->data('file_name')
                    );

                    $this->berkas_model->update($this->tabel, $id, $data);
                }
                @unlink($_FILES['edit-koran']);
            }

        }else{
            $status['status'] = 0;
            $status['pesan'] = validation_errors();
        }

        if($status['status'] == 1) {
            $this->logpush->insert($this->router->class, "mengubah data koran '" . $data['berkas_pesan'] . "'");
        }

        echo json_encode($status);
    }

    public function hapus() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('hapus-id', 'ID Buku','trim|required|strip_tags|is_natural_no_zero');
        $this->form_validation->set_rules('hapus-judul', 'Judul','trim|required|strip_tags');

        if($this->form_validation->run() == TRUE){
            $id = addslashes($this->input->post('hapus-id', TRUE));
            $judul = htmlentities($this->input->post('hapus-judul', TRUE));
            $path = $_SERVER['DOCUMENT_ROOT'].'/public/koran/';

            $data = $this->berkas_model->select(array("berkas_id" => $id))->row();
            $dpath = $path . $data->berkas_nama;
            $this->deleteFiles($dpath);

            $this->berkas_model->delete($this->tabel, $id);
            $this->logpush->insert($this->router->class, "menghapus data koran '" . $judul . "'");
            $status['status'] = 1;
            $status['pesan'] = 'Koran "' . $judul . '" berhasil dihapus';
        }else{
            $status['status'] = 0;
            $status['pesan'] = validation_errors();
        }

        echo json_encode($status);
    }

    function deleteFiles($path){
        $files = glob($path); // get all file names
        foreach($files as $file){ // iterate files
            if(file_exists($file)) {
                unlink($file) or die('Gagal menghapus: ' . $path); // delete file
                //echo $file.'file deleted';
            }
        }   
    }

}