<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_faskes extends CI_Controller {

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
		$this->load->model('M_faskes','a');
	}

	public function index()
	{
		$data['tabel'] = $this->a->tampildata();
		$data['tabel_poli'] = $this->a->tampildata_poli();
		$data['head_top_resource'] = 'v_head_top_resource';
		$data['maps'] = 'v_maps';
		$data['navbar'] = 'v_navbar';
		$data['content'] = 'v_list_faskes';
		$data['footer'] = 'v_footer';
		$data['bottom_resource'] = 'v_bottom_resource';
        $this->load->view('v_page',$data);
	}

	public function detail_faskes($id='')
	{
		if($id != ''){
			$data['head_top_resource'] = 'v_head_top_resource';
			$data['maps'] = 'v_maps';
			$data['navbar'] = 'v_navbar';
			$data['detail'] = $this->a->tampildataDetail_faskes($id);
			$data['content'] = 'v_detail_faskes';
			$data['footer'] = 'v_footer';
			$data['bottom_resource'] = 'v_bottom_resource';
	        $this->load->view('v_page',$data);
		}
		
	}

	public function list_faskes()
	{
		$data['head_top_resource'] = 'v_head_top_resource';
		$data['navbar'] = 'v_navbar';
		$data['content'] = 'v_list_faskes';
		$data['footer'] = 'v_footer';
		$data['bottom_resource'] = 'v_bottom_resource';
        $this->load->view('v_page',$data);
	}
}
