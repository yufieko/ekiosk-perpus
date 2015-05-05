<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('web_model');
        $this->load->model('buku_model');
        $this->load->model('berkas_model');
	}
	
	public function index() {
        $this->load->view('Frontend/frontend_view');
	}

	public function daftar() {
		$data['web'] = $this->web_model->select();
        $this->load->view('Frontend/daftar_view', $data);
	}

	public function getbuku() {
        $this->load->library('Datatables');

        $select = "b.buku_id,b.buku_judul,b.buku_penulis,j.jenis_teks,b.buku_tahun,"
        		. "b.buku_jumlah,b.buku_pinjam,REPLACE(REPLACE(`b`.`buku_status`,'0','Tidak Ada'),'1','Ada') AS Bstatus";
        $opsi = '<button class="btn btn-xs btn-flat btn-primary" data-toggle="modal" data-target="#modal-lihat-buku" data-id="'.utf8_encode('$1').'" data-title="Buku" title="Lihat Data"><i class="fa fa-eye"></i> Lihat</button>';
        $this->datatables->select($select)
        	->add_column('Bopsi', $opsi, 'buku_id')
        	->from('tb_buku b')
        	->join('tb_jenis j', 'b.jenis_id = j.jenis_id')
        	->join('tb_koleksi k', 'b.koleksi_id = k.koleksi_id')
            ->unset_column('Bopsi');
 
        echo $this->datatables->generate();
	}

	public function getkoran() {
        $this->load->library('Datatables');

        $select = "b.berkas_id,b.berkas_pesan,b.berkas_waktu";
        $opsi = ' <button class="btn btn-xs btn-flat btn-success" data-toggle="modal" data-target="#modal-download-koran" data-id="'.utf8_encode('$1').'" data-title="Koran" title="Download Data"><i class="fa fa-download"></i> Download</button>';
        $this->datatables->select($select)
        	->add_column('Bopsi', $opsi, 'berkas_id')
        	->from('tb_berkas b')
            ->where('berkas_status',1)
            ->unset_column('Bopsi');
 
        echo $this->datatables->generate();
	}

    public function getbukuwith($id) {
        $data = $this->buku_model->select(array('buku_id' => utf8_decode($id)));
        $result = array();
        foreach ($data->result() as $key => $value) {
            $result = $value;
        }
        echo json_encode($result);
    }

    public function koran($id){
        $this->load->helper('download');
        $data = $this->berkas_model->select(array("berkas_id" => utf8_decode($id)))->row();
        $path = $_SERVER['DOCUMENT_ROOT'].'/public/koran/' . $data->berkas_nama;
        $this->increment_download($id, $data->berkas_download);
        force_download($path, NULL);
    }

    public function increment_download($id, $count = 0) {
        $this->berkas_model->update('tb_berkas', $id, array('berkas_download' => $count + 1));
    }

    public function logout() {
		$this->user_model->logout();
		$this->session->set_userdata('perpus_pesan_sukses', "Session Anda berhasil diakhiri");
		redirect('home');
	}
}
