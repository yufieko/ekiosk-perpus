<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Koleksi extends MY_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->model('buku_model');
    }

	public function getkoleksi() {
        $this->load->library('Datatables');

        $select = "k.koleksi_id,k.koleksi_nama, IFNULL(COUNT(b.buku_id), '0') AS Jumlah";
        $opsi = '<button class="btn btn-xs btn-flat btn-primary" data-toggle="modal" data-target="#modal-edit" data-id="'.sha1('$1').'" data-title="Jenis" title="Edit Data"><i class="fa fa-pencil"></i></button>'
                . ' <button class="btn btn-xs btn-flat btn-danger" data-toggle="modal" data-target="#modal-hapus" data-id="'.sha1('$1').'" data-title="Jenis" title="Hapus Data"><i class="fa fa-close"></i></button>';
        $this->datatables->select($select)
            ->add_column('Jopsi', $opsi, 'koleksi_id')
            ->from('tb_koleksi k')
            ->join('tb_buku b', 'k.koleksi_id = b.koleksi_id','LEFT')
            ->group_by('k.koleksi_id,k.koleksi_nama');
 
        echo $this->datatables->generate();
	}
}