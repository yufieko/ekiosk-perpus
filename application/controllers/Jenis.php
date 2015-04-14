<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Jenis extends MY_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->model('buku_model');
    }

	public function getjenis() {
        $this->load->library('Datatables');

        $select = "j.jenis_id,j.jenis_teks, IFNULL(SUM(b.buku_jumlah), '0') AS Jumlah";
        $opsi = '<button class="btn btn-xs btn-flat btn-primary" data-toggle="modal" data-target="#modal-edit" data-id="'.sha1('$1').'" data-title="Jenis" title="Edit Data"><i class="fa fa-pencil"></i></button>'
        		. ' <button class="btn btn-xs btn-flat btn-danger" data-toggle="modal" data-target="#modal-hapus" data-id="'.sha1('$1').'" data-title="Jenis" title="Hapus Data"><i class="fa fa-close"></i></button>';
        $this->datatables->select($select)
        	->add_column('Jopsi', $opsi, 'jenis_id')
        	->from('tb_jenis j')
        	->join('tb_buku b', 'j.jenis_id = b.jenis_id','LEFT')
        	->group_by('j.jenis_id,j.jenis_teks');
 
        echo $this->datatables->generate();
	}
}