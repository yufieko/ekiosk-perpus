<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Jenis extends MY_Controller {

    protected $tabel = 'tb_jenis';

	public function __construct() {
        parent::__construct();
        $this->load->model('buku_model');
    }

	public function getjenis() {
        $this->load->library('Datatables');

        $select = "j.jenis_id,j.jenis_teks, IFNULL(SUM(b.buku_jumlah), '0') AS Jumlah";
        $opsi = '<button class="btn btn-xs btn-flat btn-primary" data-toggle="modal" data-target="#modal-edit-jenis" data-id="'.utf8_encode('$1').'" data-title="Jenis" title="Edit Data"><i class="fa fa-pencil"></i></button>'
        		. ' <button class="btn btn-xs btn-flat btn-danger" data-toggle="modal" data-target="#modal-hapus-jenis" data-id="'.utf8_encode('$1').'" data-title="Jenis" title="Hapus Data"><i class="fa fa-close"></i></button>';
        $this->datatables->select($select)
        	->add_column('Jopsi', $opsi, 'jenis_id')
        	->from('tb_jenis j')
        	->join('tb_buku b', 'j.jenis_id = b.jenis_id','LEFT')
        	->group_by('j.jenis_id,j.jenis_teks');
 
        echo $this->datatables->generate();
	}

    public function getjeniswith($id) {
        $data = $this->buku_model->selectJenis(array('jenis_id' => utf8_decode($id)));
        $result = array();
        foreach ($data as $key => $value) {
            $result = $value;
        }
        echo json_encode($result);
    }

    public function tambah() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('tambah-jenis', 'Jenis','trim|required|strip_tags|min_length[3]');

        if($this->form_validation->run() == TRUE){
            $data = array(
                'jenis_teks' => addslashes($this->input->post('tambah-jenis', TRUE))
            );

            $this->buku_model->insert($this->tabel, $data);
            $status['status'] = 1;
            $status['pesan'] = 'Jenis baru berhasil ditambahkan';
        }else{
            $status['status'] = 0;
            $status['pesan'] = validation_errors();
        }

        echo json_encode($status);
    }

    public function edit() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('edit-jenis', 'Jenis','trim|required|strip_tags|min_length[3]');
        $this->form_validation->set_rules('edit-id', 'ID Jenis','trim|required|strip_tags|is_natural_no_zero');

        if($this->form_validation->run() == TRUE){
            $id = addslashes($this->input->post('edit-id', TRUE));
            $data = array(
                'jenis_teks' => addslashes($this->input->post('tambah-jenis', TRUE))
            );

            $this->buku_model->update($this->tabel, $id, $data);
            $status['status'] = 1;
            $status['pesan'] = 'Data jenis berhasil diperbarui';
        }else{
            $status['status'] = 0;
            $status['pesan'] = validation_errors();
        }

        echo json_encode($status);
    }

    public function hapus() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('hapus-id', 'ID Jenis','trim|required|strip_tags|is_natural_no_zero');
        $this->form_validation->set_rules('hapus-jenis', 'Jenis','trim|required|strip_tags');

        if($this->form_validation->run() == TRUE){
            $id = addslashes($this->input->post('hapus-id', TRUE));
            $jenis = addslashes($this->input->post('hapus-jenis', TRUE));

            //$this->buku_model->delete($this->tabel, $id);
            $status['status'] = 1;
            $status['pesan'] = 'Jenis "' . $jenis . '" berhasil dihapus';
        }else{
            $status['status'] = 0;
            $status['pesan'] = validation_errors();
        }

        echo json_encode($status);
    }
}