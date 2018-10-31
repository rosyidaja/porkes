<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_artikel extends CI_Controller {

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
		$this->load->model('M_artikel','a');
	}

	public function index()
	{

	}

	public function list_artikel()
	{
		$data['tabel'] = $this->a->tampildata();
		$data['head_top_resource'] = 'v_head_top_resource';
		$data['maps'] = 'v_maps';
		$data['navbar'] = 'v_navbar';
		$data['content'] = 'v_list_artikel';
		$data['footer'] = 'v_footer';
		$data['bottom_resource'] = 'v_bottom_resource';
        $this->load->view('v_page',$data);
	}

	public function detail_artikel($id)
	{	
		// $data['tabel'] = $this->a->tampildata();
		$data['head_top_resource'] = 'v_head_top_resource';
		$data['navbar'] = 'v_navbar';
		$data['detail'] = $this->a->tampildataDetail($id);
		$data['content'] = 'v_detail_artikel';
		$data['footer'] = 'v_footer';
		$data['bottom_resource'] = 'v_bottom_resource';
        $this->load->view('v_page',$data);
	}

}
