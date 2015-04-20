<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Koleksi extends MY_Controller {

    protected $tabel = 'tb_koleksi';

	public function __construct() {
        parent::__construct();
        $this->load->model('buku_model');
    }

	public function getkoleksi() {
        $this->load->library('Datatables');

        $select = "k.koleksi_id,k.koleksi_nama, IFNULL(COUNT(b.buku_id), '0') AS Jumlah";
        $opsi = '<button class="btn btn-xs btn-flat btn-primary" data-toggle="modal" data-target="#modal-edit-koleksi" data-id="'.utf8_encode('$1').'" data-title="Koleksi" title="Edit Data"><i class="fa fa-pencil"></i></button>'
                . ' <button class="btn btn-xs btn-flat btn-danger" data-toggle="modal" data-target="#modal-hapus-koleksi" data-id="'.utf8_encode('$1').'" data-title="Koleksi" title="Hapus Data"><i class="fa fa-close"></i></button>';
        $this->datatables->select($select)
            ->add_column('Jopsi', $opsi, 'koleksi_id')
            ->from('tb_koleksi k')
            ->join('tb_buku b', 'k.koleksi_id = b.koleksi_id','LEFT')
            ->group_by('k.koleksi_id,k.koleksi_nama');
 
        echo $this->datatables->generate();
	}

    public function getkoleksiwith($id) {
        $data = $this->buku_model->selectKoleksi(array('koleksi_id' => utf8_decode($id)));
        $result = array();
        foreach ($data as $key => $value) {
            $result = $value;
        }
        echo json_encode($result);
    }

    public function tambah() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('tambah-koleksi', 'Koleksi','trim|required|strip_tags|min_length[3]');

        if($this->form_validation->run() == TRUE){
            $data = array(
                'koleksi_nama' => addslashes($this->input->post('tambah-koleksi', TRUE))
            );

            $this->buku_model->insert($this->tabel, $data);
            $this->logpush->insert($this->router->class, "menambahkan koleksi baru '" . $data['koleksi_nama'] . "'");
            $status['status'] = 1;
            $status['pesan'] = 'Koleksi baru berhasil ditambahkan';
        }else{
            $status['status'] = 0;
            $status['pesan'] = validation_errors();
        }

        echo json_encode($status);
    }

    public function edit() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('edit-koleksi', 'Koleksi','trim|required|strip_tags|min_length[3]');
        $this->form_validation->set_rules('edit-id', 'ID Koleksi','trim|required|strip_tags|is_natural_no_zero');

        if($this->form_validation->run() == TRUE){
            $id = addslashes($this->input->post('edit-id', TRUE));
            $data = array(
                'koleksi_nama' => addslashes($this->input->post('edit-koleksi', TRUE))
            );

            $this->buku_model->update($this->tabel, $id, $data);
            $this->logpush->insert($this->router->class, "mengganti koleksi '" . $data['koleksi_nama'] . "'");
            $status['status'] = 1;
            $status['pesan'] = 'Data Koleksi berhasil diperbarui';
        }else{
            $status['status'] = 0;
            $status['pesan'] = validation_errors();
        }

        echo json_encode($status);
    }

    public function hapus() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('hapus-id', 'ID Koleksi','trim|required|strip_tags|is_natural_no_zero');
        $this->form_validation->set_rules('hapus-koleksi', 'Koleksi','trim|required|strip_tags');

        if($this->form_validation->run() == TRUE){
            $id = addslashes($this->input->post('hapus-id', TRUE));
            $koleksi = addslashes($this->input->post('hapus-koleksi', TRUE));

            $this->buku_model->delete($this->tabel, $id);
            $this->logpush->insert($this->router->class, "menghapus koleksi '" . $koleksi . "'");
            $status['status'] = 1;
            $status['pesan'] = 'Koleksi "' . $koleksi . '" berhasil dihapus';
        }else{
            $status['status'] = 0;
            $status['pesan'] = validation_errors();
        }

        echo json_encode($status);
    }
}