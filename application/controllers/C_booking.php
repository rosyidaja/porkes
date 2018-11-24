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
	var $API ="";
	function __construct(){
		parent::__construct();
		$this->load->model('M_public_function');
		$this->load->model('M_booking');
		$this->API="http://localhost/altair/altair/ehealth/ehealth/antrian";
	}

	public function index()
	{
		
		$post = $this->input->post();
		//if(isset($post['submit']) && ($this->session->flashdata('notification') == null)){
			$data['head_top_resource'] = 'v_head_top_resource';
			$data['faskes'] = $post['faskes'];
			$data['list_poli'] = $post['list_poli'];
			$data['navbar'] = 'v_navbar';
			$data['content'] = 'v_booking';
			$data['footer'] = 'v_footer';
			$data['bottom_resource'] = 'v_bottom_resource';
			$this->load->view('v_page',$data);
		// }else{
		// 	redirect(base_url());
		// }
	}

	function booking(){
		date_default_timezone_set("Asia/Bangkok");
		$post = $this->input->post();
		$query = $post['param'];
		$poli = $post['poli'];
		$faskes = $post['faskes'];
		$poli_kode = $this->M_public_function->getPoli($poli)->faskesdetpoli_kode;
		// Get Data Pasien dengan API
		$param = array(
			'nik'       =>  $query,
			'norm'       =>  $query);
		$pasien = json_decode($this->curl->simple_post($this->API.'/pasien',$param));
		
		if($pasien->code === '200'){
			$data = $pasien->data;
			
			//API Booking Antrian
			$param_request = array(
				'norm'		=> $data->pasien_norm,
				'nik'		=> $data->pasien_nik,
				'poli'		=> strtoupper($poli_kode),
				'tanggal'	=> date('Y-m-d'),
				'nama'		=> htmlentities($data->pasien_nama,ENT_QUOTES)
			);
			
			$booking = json_decode($this->curl->simple_post($this->API.'/get',$param_request, array(CURLOPT_BUFFERSIZE => 10)));
			if($booking->code === '200'){
				$data_book = $booking->data;

				$this->sendMail($data_book->pasien_nama,$data_book->pasien_email,'Informasi Pemesanan',$data_book->noantrian_kode);

				$data_booking = array(
					'booking_faskes_id'						=> $faskes,
					'booking_faskespoli_id'					=> $poli,
					'booking_urut'							=> $data_book->pendaftaran_nourut,
					'booking_pasien_norm'					=> $data_book->pasien_norm,
					'booking_email'							=> $data_book->pasien_email,
					'booking_notelpon'						=> $data_book->pasien_nohp,
					'booking_kode'							=> $data_book->noantrian_kode,
					'booking_status'						=> $data_book->noantrian_status,
					'booking_tanggal'						=> $data_book->pendaftaran_mrs,
					'booking_pendaftaran_id'				=> $data_book->pendaftaran_id,
					'booking_tipe'							=> 1,
					'booking_pasien_nama'					=> htmlentities($data_book->pasien_nama,ENT_QUOTES)
				);

				$result = $this->M_booking->insert($data_booking);
				if($result > 0){
					$message = array(
						'status' => 'success',
						'header' => 'success',
						'message'=> 'Kode Booking nya Adalah '.$data_book->noantrian_kode
					  );
				}else{
					$message = array(
						'status' => 'error',
						'header' => 'error', 
						'message' => $booking->message
					  );
				}

				$this->session->set_flashdata('notification', $message);
				redirect(base_url('C_faskes/detail_faskes/'.$faskes));
				//redirect(base_url('C_booking'));
			}else{
				$message = array(
					'status' => 'error',
					'header' => 'error', 
					'message' => $booking->message
				  );

				$this->session->set_flashdata('notification', $message);
				redirect(base_url('C_faskes/detail_faskes/'.$faskes));
				//redirect(base_url('C_booking'));
			}
		}else{
			$message = array(
				'status' => 'error',
				'header' => 'error', 
				'message' => $pasien->message
			  );
			$this->session->set_flashdata('notification', $message);
				redirect(base_url('C_faskes/detail_faskes/'.$faskes));
				//redirect(base_url('C_booking'));
		}
	}

	function sendMail($nama,$to_email,$judul,$isi_email){
		$Nama = 'Porkes';
		$isi_email = "Kode Booking nya adalah ".$isi_email;
		$from_email = "admin@porkes.rosyidaja.com"; 
		$to_email = array($to_email);
		$judul = $judul;
		$isi_email = $isi_email;
		//Inisialisasi Setting SMTP
		$ci = get_instance();
		$ci->load->library('email');
		$config['protocol'] = "smtp";
		$config['smtp_host'] = "ssl://smtp.gmail.com";
		$config['smtp_port'] = "465";
		$config['smtp_user'] = "tomimishbahul12@gmail.com";
		$config['smtp_pass'] = "karunia^_^";
		$config['charset'] = "utf-8";
		$config['mailtype'] = "html";
		$config['newline'] = "\r\n";
		
		
		//Konfigurasi Pesan
		$ci->email->initialize($config);
		$ci->email->from($from_email, $judul);
		
		$ci->email->to($to_email);
		$ci->email->subject($judul);
		$ci->email->message($isi_email);
		if ($this->email->send()) {
		return 'sukses';
		} else {
		show_error($this->email->print_debugger());
		}
	}
}
