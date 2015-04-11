<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MY_Controller {
	public $datah = array();

	public function __construct() {
        parent::__construct();
        // generate menu list
		$this->datah['menu'] = $this->user_model->get_menu($this->user_model->get_roleid());
		$this->datah['title'] = ucfirst( $this->router->method == 'index' ? $this->router->class : $this->router->method );
		$this->datah['aktif'] = array(
			'parent' => '#parent-' . ( $this->router->method == 'index' ? $this->router->class : $this->router->method ),
			'child' => '');
    }

	public function index() {
		$this->load->view('Backend/header_view', $this->datah);
		$this->load->view('Backend/dashboard_view');
	}

	public function log() {
		$this->load->view('Backend/header_view', $this->datah);
		$this->load->view('Backend/dashboard_view');
	}

	public function notifikasi() {
		$this->load->view('Backend/header_view', $this->datah);
		$this->load->view('Backend/dashboard_view');
	}

	public function laporan() {
		$this->load->view('Backend/header_view', $this->datah);
		$this->load->view('Backend/dashboard_view');
	}

	public function reminder() {
		$this->load->view('Backend/header_view', $this->datah);
		$this->load->view('Backend/dashboard_view');
	}

	public function berita() {
		$this->load->view('Backend/header_view', $this->datah);
		$this->load->view('Backend/dashboard_view');
	}

	public function agenda() {
		$this->load->view('Backend/header_view', $this->datah);
		$this->load->view('Backend/dashboard_view');
	}

	public function penelitian($param) {
		$this->datah['aktif']['child'] = '#child-' . $param;
		//echo "<script>alert('" . $param . "')</script>";
		$this->load->view('Backend/header_view', $this->datah);
		$this->load->view('Backend/dashboard_view');
	}

	public function manajemen($param) {
		$this->datah['aktif']['child'] = '#child-' . $param;
		$this->load->view('Backend/header_view', $this->datah);
		$this->load->view('Backend/dashboard_view');
	}

	public function berkas() {
		$this->load->view('Backend/header_view', $this->datah);
		$this->load->view('Backend/dashboard_view');
	}

	public function logout() {
		$this->user_model->logout();
		$this->session->set_userdata('p3m_pesan_sukses', "Session Anda berhasil diakhiri");
		redirect('login');
	}

}
