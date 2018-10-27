<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_master_user extends CI_Controller {

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
		$this->load->model('M_login');
	}

	public function index()
	{
        $data['content'] = 'v_a_tambah_user';
        $this->load->view('v_a_template',$data);
	}
	public function detail()
	{
		$data['tabel'] = $this->M_login->tampildata();
        $data['content'] = 'v_a_user_detail';
        $this->load->view('v_a_template',$data);
	}

	public function add(){
		// $data['tabel'] = $this->m_login->tampildata_pwd();
		// $data['karyawan'] = $this->m_login->get_karyawan_not_user();
		// $data['ket'] = 'Tambah Data';
		$data['content'] = 'v_a_tambah_user';
		$data['aksi'] = 'create';
		$this->load->view('v_a_template', $data);
		// $this->load->view('v-tambah_user', $data);
	}

	public function create(){
		$post = $this->input->post();
		$user_id = $post['user_id'];
		$user_name = $post['user_name'];
		$user_password = $post['user_password'];
		$user_level = $post['user_level'];

		$a = $this->form_validation->set_rules('user_name','user_name','trim|is_unique[s_user.user_name]|xss_clean|required');
		$b = $this->form_validation->set_rules('user_password','Password','required|matches[user_repassword]');
		$c = $this->form_validation->set_rules('user_repassword','Password Confirmation','required');

		if($this->form_validation->run() == FALSE)
		{
			// $data['karyawan'] = $this->m_login->get_karyawan_not_user();
			$data['aksi'] = 'create';
			$data['ket'] = 'Tambah Data';
			$this->load->view('v_a_tambah_user', $data);
		}
		else
		{
			unset($data['user_repassword']);
			$data = array(
				'user_name' => $post['user_name'],
				'user_password' => $post['user_password'],
				'user_level' => $post['user_level'],
				'user_id' => $user_id
			);
			if(!empty($data))$result = $this->M_login->insert($data);

			if($result)
			{
				$this->session->set_flashdata('pesan','Berhasil menambah data user !');
			}
			else
			{
				$this->session->set_flashdata('pesan','Gagal menambah user !');
			}
	
			redirect(base_url('C_master_user/add'));
		}
	}

	public function update_pwd($id=''){
		$data['aksi'] = 'aksi_update_pwd';
		$data['ket'] = 'Ganti Password';
		$data['detail'] = $this->M_login->tampildata($id);
		// $this->load->view('v-ganti', $data);
		$data['content'] = 'v_a_tambah_user';
		$this->load->view('v_a_template', $data);

	}

	public function aksi_update_pwd(){
		$post = $this->input->post();
		$id_user = $post['id_user'];

		$username = $post['username'];
		$username_baru = $post['username_baru']; 

		$password = $post['password'];
		$pwd_konfirmasi = $post['repassword'];

		if ($username == $username_baru) {
			$this->session->set_flashdata('pesan','Username sama dengan yang lama !');
			redirect(base_url('c_m_user/update_pwd'));
		}
		else{
			$data = array(
				'username' => $post['username_baru']
			);
			$hasil = $this->m_login->update_pwd($post['id_user'],$data);
			// print_r($post['id_user']);exit();
		}


		if($password != $pwd_konfirmasi) {
			$this->session->set_flashdata('pesan','Password konfirmasi tidak sama !');
			redirect(base_url('c_m_user/update_pwd'));
		}
		else{
			$pwd_lama=$post['pwd_lama'];
			$pwd_baru=$post['password'];

			if($pwd_lama == $pwd_baru)
			{
				$this->session->set_flashdata('pesan','Password sama dengan password lama !');
				redirect(base_url('c_m_user/update_pwd'));				
			}
			// if(empty($post['password']))unset($post['password']);
			else{
				$data = array(
					'password' => $post['password']
				);
				$result = $this->m_login->update_pwd($post['id_user'],$data);
			}
		}

		if($result){
			$bebas = $this->m_login->get_user($post['id_user']);
			$this->session->set_userdata('user',$bebas);
			redirect(base_url('c_m_user/index'));
		}
		else{
			$this->session->set_flashdata('pesan','Gagal ubah password !');
			redirect(base_url('C_master_user/detail'));
		}
	}

	public function delete($id){
		// $data = $this->a->delete_detail($id);
		$data = $this->M_login->delete($id);
		redirect(base_url('C_master_user/detail'));
	}
}
