<?php if(! defined('BASEPATH')) exit('Not Found.');

/**
 * Function helpNumeric
 * Fungsi ini digunakan untuk mengecek apakah sebuah variabel berisi nilai
   yang bersifat numeric (int, float, double).
 * @access public
 * @param (any) $var
 * @param (int) $res
 * @return (int) {0}
 */
function helpNumeric($var, $res = 0)
{
	$var = str_replace('.', '', $var);
	return is_numeric($var) ? $var : $res;
}

/**
 * Function helpRoman
 * Fungsi ini digunakan untuk merubah angka menjadi bilangan romawi
 * @access public
 * @param (int) $var
 * @return (string) {''}
 */
function helpRoman($var)
{
	$n = intval($var);
	$result = '';
	$lookup = array('M' => 1000, 'CM' => 900, 'D' => 500, 'CD' => 400,
		'C' => 100, 'XC' => 90, 'L' => 50, 'XL' => 40,
		'X' => 10, 'IX' => 9, 'V' => 5, 'IV' => 4, 'I' => 1);
	foreach ($lookup as $roman => $value) {
		$matches = intval($n / $value);
		$result .= str_repeat($roman, $matches);
		$n = $n % $value;
	}
	return $result;
}

/**
 * Function helpIndoDay
 * Fungsi ini digunakan untuk mencari nama hari dalam bahasa Indonesia
 * @access public
 * @param (int) $var Nomor urut hari yang dimulai dari angka 0 untuk hari senin
 * @return (string) {'Undefined'}
 */
function helpIndoDay($var)
{
	$dayArray = array("Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu");
	if(array_key_exists($var, $dayArray )){
		return $dayArray[$var];
	}else{
		return 'Undefined';
	}
}

/**
 * Function helpIndoMonth
 * Fungsi ini digunakan untuk mencari nama bulan dalam bahasa Indonesia
 * @access public
 * @param (int) $var Nomor urut bulan yang dimulai dari angka 0 untuk bulan januari
 * @return (string) {'Undefined'}
 */
function helpIndoMonth($num)
{
	$monthArray = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
	if(array_key_exists($num, $monthArray)){
		return $monthArray[$num];
	}else{
		return 'Undefined';
	}
}

/**
 * Function helpDate
 * Fungsi ini digunakan untuk melakukan konversi format tanggal
 * @access public
 * @param (date) $var Tanggal yang akan dikonversi
 * @param (string) $mode Kode untuk model format yang baru
   - se (short English)		: (Y-m-d) 2015-31-01
   - si (short Indonesia)	: (d-m-Y) 31-01-2015
   - me (medium English)	: (F d, Y) January 31, 2015
   - mi (medium Indonesia)	: (d F Y) 31 Januari 2015
   - le (long English)		: (l F d, Y) Sunday January 31, 2015
   - li (long Indonesia)	: (l, d F Y) Senin, 31 Januari 2015
 * @return (string) {'Undefined'}
 */
function helpDate($var, $mode = 'se')
{
	switch($mode){
		case 'se':
			return date('Y-m-d', strtotime($var));
		break;
		case 'si':
			return date('d-m-Y', strtotime($var));
		break;
		case 'me':
			return date('F d, Y', strtotime($var));
		break;
		case 'mi':
			$day = date('d', strtotime($var));
			$month = date('n', strtotime($var));
			$year = date('Y', strtotime($var));
			
			$month = helpIndoMonth($month - 1);
			return $day.' '.$month.' '.$year;
		break;
		case 'le':
			return date('l F d, Y', strtotime($var));
		break;
		case 'li':
			$dow = date('w', strtotime($var));
			$day = date('d', strtotime($var));
			$month = date('n', strtotime($var));
			$year = date('Y', strtotime($var));
			
			$hari = helpIndoDay($dow);
			$month = helpIndoMonth($month - 1);
			return $hari .', '. $day.' '.$month.' '.$year;
		break;
		default:
			return 'Undefined';
		break;
	}
}

/**
 * Function helpSecSql
 * Fungsi ini digunakan untuk merubah variabel menjadi aman sebelum dimasukkan ke dalam database
 * @access public
 * @param (string) $var
 * @return (string)
 */
function helpSecSql($var)
{
	return addslashes(strtolower($var));
}

function cek_auth(){
    $CI =& get_instance();
    $data = $CI->session->userdata('user');
    if(empty($data))
    {
        return FALSE;
    }
    else
    {
        return TRUE;
    }
}

function cek_fitur($nama_fitur){
    if(cek_auth())
    {
        $CI =& get_instance();
        $CI->load->model('M_public_function');

        $data = $CI->session->userdata('user');
        $allowed = explode('|', $CI->M_public_function->get_level($data->user_level));

        if(in_array($nama_fitur, $allowed))
        {
            return TRUE;
        }
        else
        {
            return FALSE;
        }
    }
    else
    {
        return FALSE;
    }
}

/**
 * Function helpTerbilang
 * Fungsi ini digunakan untuk merubah angka yang dimasukkan menjadi ejaan
 * @access public
 * @param (int) $var
 * @return (string)
 */
function helpTerbilang($var)
{
	$digits = array(
		0 => "nol",
		1 => "satu",
		2 => "dua",
		3 => "tiga",
		4 => "empat",
		5 => "lima",
		6 => "enam",
		7 => "tujuh",
		8 => "delapan",
		9 => "sembilan");
	$orders = array(
		0 => "",
		1 => "puluh",
		2 => "ratus",
		3 => "ribu",
		6 => "juta",
		9 => "miliar",
		12 => "triliun",
		15 => "kuadriliun");

	$is_neg = $var < 0; $var = "$var";

	$int = ""; if (preg_match("/^[+-]?(\d+)/", $var, $m)) $int = $m[1];
	$mult = 0; $wint = "";

	while (preg_match('/(\d{1,3})$/', $int, $m)) {

		$s = $m[1] % 10;
		$p = ($m[1] % 100 - $s)/10;
		$r = ($m[1] - $p*10 - $s)/100;

		if ($r==0) $g = "";
		elseif ($r==1) $g = "se$orders[2]";
		else $g = $digits[$r]." $orders[2]";

		if ($p==0) {
			if ($s==0);
			elseif ($s==1) $g = ($g ? "$g ".$digits[$s] :
			($mult==0 ? $digits[1] : "se"));
			else $g = ($g ? "$g ":"") . $digits[$s];
		} elseif ($p==1) {
			if ($s==0) $g = ($g ? "$g ":"") . "se$orders[1]";
			elseif ($s==1) $g = ($g ? "$g ":"") . "sebelas";
			else $g = ($g ? "$g ":"") . $digits[$s] . " belas";
		} else {
			$g = ($g ? "$g ":"").$digits[$p]." puluh".
			($s > 0 ? " ".$digits[$s] : "");
		}

		$wint = ($g ? $g.($g=="se" ? "":" ").$orders[$mult]:"").
		($wint ? " $wint":"");

		$int = preg_replace('/\d{1,3}$/', '', $int);
		$mult+=3;
	}
	if (!$wint) $wint = $digits[0];
	$frac = ""; if (preg_match("/\.(\d+)/", $var, $m)) $frac = $m[1];
	$wfrac = "";
	for ($i=0; $i<strlen($frac); $i++) {
		$wfrac .= ($wfrac ? " ":"").$digits[substr($frac,$i,1)];
	}
	$hasil= ($is_neg ? "minus ":"").$wint.($wfrac ? " koma $wfrac":"");
	$hasil=str_replace("sejuta","satu juta",$hasil);
	return $hasil;
}

/**
 * Function helpResponse
 * Fungsi ini digunakan untuk mengambil response restful
 * @access public
 * @param (string) $code
 * @param (array) $data
 * @param (string) $msg
 * @param (string) $status
 * @return (array)
 */
function helpResponse($code, $data = NULL, $msg = '', $status = '')
{
	switch($code){
		case '200':
			$s = 'OK';
			$m = 'Sukses';
		break;
		case '201':
			$s = 'Created';
			$m = 'Data berhasil disimpan';
		break;
		case '202':
			$s = 'Accepted';
			$m = 'Data berhasil disimpan';
		break;
		case '204':
			$s = 'No Content';
			$m = 'Data tidak ditemukan';
		break;
		case '304':
			$s = 'Not Modified';
			$m = 'Data gagal disimpan';
		break;
		case '400':
			$s = 'Bad Request';
			$m = 'Fungsi tidak ditemukan';
		break;
		case '401':
			$s = 'Unauthorized';
			$mm = 'Silahkan login terlebih dahulu';
		break;
		case '403':
			$s = 'Forbidden';
			$m = 'Sesi anda telah berakhir';
		break;
		case '404':
			$s = 'Not Found';
			$m = 'Halaman tidak ditemukan';
		break;
		case '414':
			$s = 'Request URI Too Long';
			$m = 'Data yang dikirim terlalu panjang';
		break;
		case '500':
			$s = 'Internal Server Error';
			$m = 'Maaf, terjadi kesalahan dalam mengolah data';
		break;
		case '502':
			$s = 'Bad Gateway';
			$m = 'Tidak dapat terhubung ke server';
		break;
		case '503':
			$s = 'Service Unavailable';
			$m = 'Server tidak dapat diakses';
		break;
		default:
			$s = 'Undefined';
			$m = 'Undefined';
		break;
	}
	
	$status = ($status != '') ? $status : $s;
	$msg = ($msg != '') ? $msg : $m;
	$result=array(
		"status"=>$status,
		"code"=>$code,
		"message"=>$msg,
		"data"=>$data
	);
	return $result;
}
function helpResponseFound($data){
	return helpResponse('200', $data);
}
function helpResponseNotFound(){
	return helpResponse('204');
}

function sendMail($nama,$to_email,$judul,$isi_email){
	$Nama = 'Porkes';
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