<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_home extends CI_Controller {

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
		$this->load->model('M_layanan','b');
		$this->load->model('M_faskes','c');
	}

	public function index()
	{
		$data['tabel'] = $this->a->tampildata_h_artikel();
		$data['tabel1'] = $this->b->tampildata();
		$data['tabel2'] = $this->c->tampildata();
		$data['head_top_resource'] = 'v_head_top_resource';
		$data['maps'] = 'v_maps';
		$data['navbar'] = 'v_navbar';
		$data['artikel'] = 'v_artikel';
		$data['layanan'] = 'v_layanan';
		$data['faskes'] = 'v_faskes';
		$data['footer'] = 'v_footer';
		$data['bottom_resource'] = 'v_bottom_resource';
        $this->load->view('v_home',$data);
	}
}
