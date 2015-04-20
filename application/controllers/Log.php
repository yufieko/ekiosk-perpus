<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Log extends MY_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->model('log_model');
    }

	public function getlog() {
        $this->load->library('Datatables');

        $select = "l.log_id,m.menu_nama,l.log_isi,l.log_dibuat, REPLACE(REPLACE(`l`.`log_status`,'0','Belum Dibaca'),'1','Sudah Dibaca') AS Bstatus";
        $opsi = '<button class="btn btn-xs btn-flat btn-primary" data-toggle="modal" data-target="#modal-baca-log" data-id="'.utf8_encode('$1').'" data-title="Log" title="Baca Data"><i class="fa fa-eye"></i></button>'
        		. ' <button class="btn btn-xs btn-flat btn-danger" data-toggle="modal" data-target="#modal-hapus-log" data-id="'.utf8_encode('$1').'" data-title="Log" title="Hapus Data"><i class="fa fa-close"></i></button>';
        $this->datatables->select($select)
        	->add_column('Bopsi', $opsi, 'log_id')
        	->from('tb_log l')
        	->join('tb_menu m', 'l.menu_id = m.menu_id')
            ->unset_column('Bopsi');
 
        echo $this->datatables->generate();
	}

    public function getlogwith($id) {
        $data = $this->log_model->select(array('log_id' => utf8_decode($id)));
        $result = array();
        foreach ($data->result() as $key => $value) {
            $result = $value;
        }
        echo json_encode($result);
    }

    public function get_databox() {
        // data buat box
        $data['boxbelum'] = $this->log_model->get_total(array('log_status' => 0));
        $data['boxbaca'] = $this->log_model->get_total(array('log_status' => 1));
        $data['boxlog'] = $this->log_model->get_total();

        echo json_encode($data);
    }

    public function baca() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('baca-id', 'ID Log','trim|required|strip_tags|is_natural_no_zero');

        if($this->form_validation->run() == TRUE){
            $id = addslashes($this->input->post('baca-id', TRUE));
            $this->log_model->update($id, array('log_status' => 1));

            $status['status'] = 1;
            $status['pesan'] = 'Log berhasil ditandai telah dibaca';
        }else{
            $status['status'] = 0;
            $status['pesan'] = validation_errors();
        }

        echo json_encode($status);
    }

    public function bacasemua() {
        $this->log_model->updateAll(array('log_status' => 1));
        $this->logpush->insert($this->router->class, "menandai semua Log telah dibaca");

        $status['status'] = 1;
        $status['pesan'] = 'Semua Log berhasil ditandai telah dibaca';

        echo json_encode($status);
    }

    public function hapus() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('hapus-id', 'ID Log','trim|required|strip_tags|is_natural_no_zero');

        if($this->form_validation->run() == TRUE){
            $id = addslashes($this->input->post('hapus-id', TRUE));
        
            $this->log_model->delete($id);
            $status['status'] = 1;
            $status['pesan'] = 'Log berhasil dihapus';
        }else{
            $status['status'] = 0;
            $status['pesan'] = validation_errors();
        }

        echo json_encode($status);
    }

    public function hapusemua() {
        $this->log_model->deleteAll();
        $this->logpush->insert($this->router->class, "menghapus semua Log");
        $status['status'] = 1;
        $status['pesan'] = 'Semua Log berhasil dihapus';

        echo json_encode($status);
    }

}