<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_beranda extends CI_Controller {

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

	public function __construct()
	{
		parent::__construct();
		if(!cek_auth())//cek jika tidak ada login
        {
            redirect(base_url('C_login/index'));  //redirect ke halaman login
        }
	}

	public function index()
	{
		if(!$this->session->userdata('user')){
			redirect(base_url('C_login/index'));
		}
		$data['title'] = 'Beranda';
        $data['content'] = 'v_a_beranda';
        $this->load->view('v_a_template',$data);
	}
}
