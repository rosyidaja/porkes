<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Bukti Pesanan</title>
	<style>
		body{
			width : 346px;
			font-size : 14px;
		}
		table, tr, td{
			border : none;
		}
		td{
			height : 16px;
		}
		.bordered_table, .bordered_table tr, .bordered_table td{
			border : 1px solid black;
			border-collapse : collapse;
		}
		@media print {
			.header, .hide { visibility: hidden }
		}
	</style>
</head>
<?php foreach($data_faskes as $print){} 
$tgl2 = str_replace(':','.',substr($data_print->pendaftaran_mrs,11,-3));;
$tgl3 = substr($data_print->pendaftaran_mrs,0,-8);
$tahun = substr($tgl3,0,-7);
$bulan = substr($tgl3,5,-4);
$tanggal = substr($tgl3,8,-1);	
?>
<body onload="window.print();">
	<table width="324"  border="0">
		<tr>
			<td colspan="4" align="center">
            <table width="100%" id="kopjudul">
                <tbody>
                    <tr>
                        <td width="10%" align="right">
                            <img src="<?php echo base_url().'assets/upload/faskes/'.$print->faskes_foto; ?>" alt="" height="70" width="70" > 
                        </td>
                        <td colspan="3">
                                <table>
                                    <tbody><tr>
                                            <td align="center">
                                            <b><?php echo $print->faskes_nama; ?></b><br><?php echo $print->faskes_alamat; ?>&nbsp;<font size="2">&nbsp;<?php echo $print->kota_nama; ?></font><br>
                                            </td>
                                    </tr>
                                </tbody></table>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3">&nbsp;</td>
                    </tr>
                </tbody>
                </table>
            </td>
		</tr>
		<tr>
			<td colspan="4" align="center">Tanda Bukti Antrian
			</td>
		</tr>
		<tr>
			<td width="30%">&nbsp;</td>
			<td width="2%">&nbsp;</td>
			<td width="20%">&nbsp;</td>
			<td width="48%">&nbsp;</td>
		</tr>
		<tr>
			<td valign="top" nowrap="nowrap">No. Booking</td>
			<td valign="top"> : </td>
			<td valign="top" colspan="2"><?php echo $data_print->noantrian_kode; ?></td>
		</tr>
		<tr>
			<td valign="top">No. RM</td>
			<td valign="top"> : </td>
			<td valign="top" nowrap="true" width="20%" colspan="2"><?php echo $data_print->pasien_norm; ?></td>
		</tr>
		<tr>
			<td valign="top">Nama</td>
			<td valign="top"> : </td>
			<td valign="top" colspan="2"><?php echo $data_print->pasien_nama; ?></td>
		</tr>
		<tr>
			<td valign="top">Email</td>
			<td valign="top"> : </td>
			<td valign="top" colspan="2"><?php echo $data_print->pasien_email; ?></td>
		</tr>
		<tr>
			<td colspan="4" align="center">&nbsp;</td>
		</tr>
		<tr>
			<td align="center" colspan="3"><?php echo $tgl2; ?></td>
			<td align="center"><?php echo $tanggal. helpIndoMonth($bulan-1). $tahun ?> </td>
		</tr>
		<tr>
			<td align="center" colspan="3" style="border : 1px solid black ;font-size:11px;">No. Antrian</td>
			<td align="center" rowspan="3"><img src="<?php echo base_url().'assets/qrcode/'.$data_print->noantrian_kode.'.png'; ?>" alt="" height="130" width="130" ></td>
		</tr>
		<tr>
			<td align="center" colspan="3" style="border : 1px solid black ;font-size:15px;"><?php echo $data_poli->faskesdetpoli_nama; ?></td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td height="60" colspan="3" align="center" style="border : 1px solid black; font-size : 32px;"><?php echo $data_print->pendaftaran_nourut; ?></td>
			<td align="center">&nbsp;</td>
		</tr>
	</table>
</body>
</html>