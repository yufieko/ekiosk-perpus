<?php  defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {
	//private $datah;

	function __construct() {
		parent::__construct();
		if(!$this->user_model->is_logged_in()) {
			// di redirect ke bagian login
			$newdata = array(
                'perpus_pesan_error' => "Anda harus login untuk mengakses halaman: " . $this->router->class . "",
                'perpus_urlke' => current_url()
            );
            $this->session->set_userdata($newdata);
			redirect('login');
		}

		if(!$this->user_model->is_admin()) {
			// di redirect ke bagian login
			$newdata = array(
                'perpus_pesan_error' => "Anda tidak punya hak untuk mengakses: " . $this->router->class . "",
                'perpus_urlke' => current_url()
            );
            $this->session->set_userdata($newdata);
			redirect('login');
		}

		// generate menu list
		// $datah['menu'] = $this->user_model->get_menu($this->user_model->get_roleid());
	}
}