<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
* library untuk input pencacatan log
*/
class Logpush {

	function __construct() {
		// get instance
		$this->CI = & get_instance();
        // load model 
        $this->CI->load->model('log_model');
        $this->CI->load->model('user_model');
        $this->log_model = & $this->CI->log_model;
        $this->user_model = & $this->CI->user_model;
	}

	/*
	* fungsi insert
	*/
	function insert($menu, $isi) {
		$userid = $this->CI->session->userdata('user_id');
		$user = $this->CI->session->userdata('user_login');
		$role = $this->CI->session->userdata('role_id');
		$result = $this->user_model->list_menu($role);
		$menuid = 0;

		switch ($menu) {
			case 'jenis': $menu = 'buku'; break;
			case 'koleksi': $menu = 'buku'; break;
		}

		foreach ($result->result() as $key) {
			if(strtolower($menu) === $key->menu_akses) {
				$menuid = $key->menu_id;
				break;
			}
		}

		$this->log_model->insert(array(
			'menu_id' => $menuid, 
			'user_id' => $userid, 
			'log_isi' => htmlentities("User " . $user . " " . $isi)
			));
	}
}

?>