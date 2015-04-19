<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Buku extends MY_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->model('buku_model');
    }

	public function getbuku() {
		/*$this->load->library('Datatable', array('model' => 'buku_model', 'rowIdCol' => 'b.buku_id'));
		
		$jsonArray = $this->datatable->datatableJson();
		$this->output->set_header("Pragma: no-cache");
        $this->output->set_header("Cache-Control: no-store, no-cache");
        $this->output->set_content_type('application/json')->set_output(json_encode($jsonArray));*/

        $this->load->library('Datatables');

        $select = "b.buku_id,b.buku_judul,b.buku_penulis,j.jenis_teks,b.buku_tahun,"
        		. "b.buku_jumlah,b.buku_pinjam,REPLACE(REPLACE(`b`.`buku_status`,'0','Tidak Ada'),'1','Ada') AS Bstatus";
        $opsi = '<button class="btn btn-xs btn-flat btn-primary" data-toggle="modal" data-target="#modal-edit-buku" data-id="'.base64_encode('$1').'" data-title="Buku" title="Edit Data"><i class="fa fa-pencil"></i></button>'
        		. ' <button class="btn btn-xs btn-flat btn-danger" data-toggle="modal" data-target="#modal-hapus-buku" data-id="'.base64_encode('$1').'" data-title="Buku" title="Hapus Data"><i class="fa fa-close"></i></button>';
        $this->datatables->select($select)
        	->add_column('Bopsi', $opsi, 'buku_id')
        	->from('tb_buku b')
        	->join('tb_jenis j', 'b.jenis_id = j.jenis_id')
        	->join('tb_koleksi k', 'b.koleksi_id = k.koleksi_id')
            ->unset_column('Bopsi');
 
        echo $this->datatables->generate();
	}

    public function get_databox() {
        // data buat box
        $data['boxtotal'] = $this->buku_model->get_totalbuku();
        $data['boxpinjam'] = $this->buku_model->get_pinjam();
        $data['boxbpinjam'] = $this->buku_model->get_bpinjam();
        $data['boxjenis'] = $this->buku_model->get_total('tb_jenis');

        echo json_encode($data);
    }

    public function tambah() {
        $config['upload_path']          = './public/buku/';
        $config['allowed_types']        = 'png|jpg|jpeg|gif';
        $config['max_size']             = 1000;
        $config['file_ext_tolower']     = TRUE;

        $status['status'] = 1;
        $status['pesan'] = 'Data buku baru berhasil ditambahkan';

        $this->load->library('upload', $config);
        $this->load->library('form_validation');
        $this->form_validation->set_rules('tambah-judul', 'Judul','trim|required|strip_tags|min_length[5]');
        $this->form_validation->set_rules('tambah-penulis', 'Penulis','trim|required|strip_tags');
        $this->form_validation->set_rules('tambah-penerbit', 'Penulis','trim|required|strip_tags');
        $this->form_validation->set_rules('tambah-teks', 'Deskripsi Singkat Buku','trim|required|strip_tags');
        $this->form_validation->set_rules('tambah-masuk', 'Buku Masuk','trim|required|strip_tags');
        $this->form_validation->set_rules('tambah-jenis', 'Jenis','trim|required|strip_tags');
        $this->form_validation->set_rules('tambah-koleksi', 'Koleksi','trim|required|strip_tags');
        $this->form_validation->set_rules('tambah-tahun', 'Tahun','trim|required|strip_tags|is_natural_no_zero');
        $this->form_validation->set_rules('tambah-letak', 'Letak','trim|required|strip_tags');
        $this->form_validation->set_rules('tambah-jumlah', 'Jumlah','trim|required|strip_tags|is_natural');
        $this->form_validation->set_rules('tambah-status', 'Status','trim|required|strip_tags');

        if($this->form_validation->run() == TRUE){
            //$stringURL = str_replace(' ', '-', strtolower(addslashes($this->input->post('tambah-judul', TRUE)))); // Converts spaces to dashes
            if($_FILES['tambah-gambar']['size'] == 0) {
                $data = array(
                    'buku_judul' => addslashes($this->input->post('tambah-judul', TRUE)),
                    'buku_penulis' => addslashes($this->input->post('tambah-penulis', TRUE)),
                    'buku_penerbit' => addslashes($this->input->post('tambah-penerbit', TRUE)),
                    'buku_tahun' => addslashes($this->input->post('tambah-tahun', TRUE)),
                    'buku_masuk' => addslashes($this->input->post('tambah-masuk', TRUE)),
                    'jenis_id' => addslashes($this->input->post('tambah-jenis', TRUE)),
                    'koleksi_id' => addslashes($this->input->post('tambah-koleksi', TRUE)),
                    'buku_letak' => addslashes($this->input->post('tambah-letak', TRUE)),
                    'buku_deskripsi' => addslashes($this->input->post('tambah-teks', TRUE)),
                    'buku_jumlah' => addslashes($this->input->post('tambah-jumlah', TRUE)),
                    'buku_status' => addslashes($this->input->post('tambah-status', TRUE))
                );

                $this->buku_model->insert($data);
            } else {
                if (!$this->upload->do_upload('tambah-gambar')) {
                    $status['status'] = 0;
                    $status['pesan'] = $this->upload->display_errors();
                } else {
                    $data = array(
                        'buku_judul' => addslashes($this->input->post('tambah-judul', TRUE)),
                        'buku_penulis' => addslashes($this->input->post('tambah-penulis', TRUE)),
                        'buku_penerbit' => addslashes($this->input->post('tambah-penerbit', TRUE)),
                        'buku_tahun' => addslashes($this->input->post('tambah-tahun', TRUE)),
                        'buku_masuk' => addslashes($this->input->post('tambah-masuk', TRUE)),
                        'jenis_id' => addslashes($this->input->post('tambah-jenis', TRUE)),
                        'koleksi_id' => addslashes($this->input->post('tambah-koleksi', TRUE)),
                        'buku_letak' => addslashes($this->input->post('tambah-letak', TRUE)),
                        'buku_deskripsi' => addslashes($this->input->post('tambah-teks', TRUE)),
                        'buku_jumlah' => addslashes($this->input->post('tambah-jumlah', TRUE)),
                        'buku_status' => addslashes($this->input->post('tambah-status', TRUE)),
                        'buku_gambar' => $this->upload->data('file_name')
                    );

                    $this->buku_model->insert($data);
                }
                @unlink($_FILES['tambah-gambar']);
            }

        }else{
            $status['status'] = 0;
            $status['pesan'] = validation_errors();
        }

        echo json_encode($status);
    }
}