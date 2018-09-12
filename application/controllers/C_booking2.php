<?php
/*
 * Porkes v 1.0.0
 * Portal Kesehatan
 * @package		: master
 * @datecreate	: 11 september 2018
 * @desc		: Controller untuk booking
 * @author		: Rosyid			rosyidaja21@gmail.com
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class C_booking extends CI_Controller {
	function __construct(){
		parent::__construct();
	}

	public function index()
	{
		$data['head_top_resource'] = 'v_head_top_resource';
		$data['maps'] = 'v_maps';
		$data['navbar'] = 'v_navbar';
		$data['content'] = 'v_booking';
		$data['footer'] = 'v_footer';
		$data['bottom_resource'] = 'v_bottom_resource';
        $this->load->view('v_page',$data);
	}
}
