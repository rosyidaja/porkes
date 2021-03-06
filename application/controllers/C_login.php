<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_login extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct(){
		parent::__construct();
		$this->load->model('M_login');
	}

	public function index()
	{
         $this->login();
	}

	public function login(){

		if(cek_auth())//cek masih ada data login atau tidak
        {
            redirect(base_url('C_beranda/index')); 
        }
        $this->load->view('v_login');        
	}

	public function aksi_login(){
		$post = $this->input->post();

		$user_name = $post['user_name'];
		$user_nama = $post['user_nama'];
		$user_password = md5($post['user_password']);
		$user_foto = $post['user_foto'];
		$user_level = $post['user_level'];


		$cek_login = $this->M_login->get_login($user_name,$user_password,$user_nama,$user_foto,$user_level);

		if ($cek_login) {
			$this->session->set_userdata('user',$cek_login);
			redirect(base_url('C_beranda/index'));
		}else{
			$this->session->set_flashdata('pesan','Username dan Password salah');
			redirect(base_url('C_login/index'));
		}
	}

	public function logout(){
		$this->session->userdata('user');
		$this->session->sess_destroy();
		redirect(base_url('C_login/index'));
	}
}
