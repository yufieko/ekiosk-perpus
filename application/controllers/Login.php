<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct(){
		parent::__construct();
	}
	
	public function index() {
		if(!$this->user_model->is_logged_in()){
            if($this->session->userdata('p3m_pesan_error')) {
                $data['error'] = $this->session->userdata('p3m_pesan_error');
                $this->session->unset_userdata('p3m_pesan_error');
                $this->load->view('Backend/login_view',$data);
            } else if($this->session->userdata('p3m_pesan_sukses')) {
                $data['sukses'] = $this->session->userdata('p3m_pesan_sukses');
                $this->session->unset_userdata('p3m_pesan_sukses');
                $this->load->view('Backend/login_view',$data);
            } else {
                $this->load->view('Backend/login_view');
            }
		}else{
            redirect('dashboard');
		}
	}

	public function lupa() {
		if($this->session->userdata('p3m_pesan_error')) {
            $data['error'] = $this->session->userdata('p3m_pesan_error');
            $this->session->unset_userdata('p3m_pesan_error');
            $this->load->view('Backend/lupa_view',$data);
        } else if($this->session->userdata('p3m_pesan_sukses')) {
        	$data['sukses'] = $this->session->userdata('p3m_pesan_sukses');
            $this->session->unset_userdata('p3m_pesan_sukses');
            $this->load->view('Backend/lupa_view',$data);
        } else {
            $this->load->view('Backend/lupa_view');
        }
	}

	public function dologin() {
		$this->load->library('form_validation');
        // mengambil input dari form daftar dan menetapkan rule
        $this->form_validation->set_rules('l_username', 'Username','trim|required|strip_tags');
        $this->form_validation->set_rules('l_password', 'Password','trim|required|strip_tags');
        
        if ($this->form_validation->run() == TRUE) {
            //Jika sukses
            $username = addslashes($this->input->post('l_username', TRUE));
          	$password = addslashes($this->input->post('l_password', TRUE));
          	$ingat = addslashes($this->input->post('l_ingat', TRUE)) == "ingat" ? TRUE : FALSE;
            
            $flag = $this->user_model->login($username, $password, $ingat);

            if(!$flag) {
            	$this->session->set_userdata('p3m_pesan_error', $this->user_model->error_messages());
            	redirect('login');
            } else {
                $urlke = $this->session->userdata('p3m_urlke') == NULL ? 'dashboard' : $this->session->userdata('p3m_urlke');
            	//echo "<script>alert('" . $urlke . "');</script>";
                redirect($urlke);
            }
            //redirect('daftar');

        } else {
        	$this->session->set_userdata('p3m_pesan_error', validation_errors());
            redirect('login');
        	// $this->load->view('Backend/daftar_view');
        }
	}

    public function dolupa() {
        $this->load->library('form_validation');
        // mengambil input dari form daftar dan menetapkan rule
        $this->form_validation->set_rules('l_email', 'Email','trim|required|strip_tags|valid_email');
        
        if ($this->form_validation->run() == TRUE) {
            //Jika sukses
            $email = addslashes($this->input->post('l_email', TRUE));

            // kasih flag
            $flag = $this->user_model->send_reset_password_email($email);

            // pengecekan flag
            if(!$flag) {
            	$this->session->set_userdata('p3m_pesan_error', $this->user_model->error_messages());
            	redirect('login/lupa');
            } else {
            	$this->session->set_userdata('p3m_pesan_sukses', "Link Ganti Password telah dikirim ke email Anda");
            	redirect('login/lupa');
            }
            //redirect('daftar');

        } else {
        	$this->session->set_userdata('p3m_pesan_error', validation_errors());
            redirect('login/lupa');
        }
    }

}
