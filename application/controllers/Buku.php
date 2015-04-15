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
        $opsi = '<button class="btn btn-xs btn-flat btn-primary" data-toggle="modal" data-target="#modal-edit" data-id="'.sha1('$1').'" data-title="Buku" title="Edit Data"><i class="fa fa-pencil"></i></button>'
        		. ' <button class="btn btn-xs btn-flat btn-danger" data-toggle="modal" data-target="#modal-hapus" data-id="'.sha1('$1').'" data-title="Buku" title="Hapus Data"><i class="fa fa-close"></i></button>';
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
}