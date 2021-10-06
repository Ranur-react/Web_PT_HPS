
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<body onload="window.print()">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Laporan Perbulan </title>
</head>
<link href="<?php echo base_url().'asset/cetak.css';?>" rel="stylesheet" type="text/css" /><body >
<br>
<br>
<?php 
    $b=$cth->row_array();

?>
<div id="page-SP">
<table align="center" width="70%" style="border-collapse:collapse" border="1">
<tr><td><br>


<table align="center" width="696" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td width="90" rowspan="3" align="center"><img src="<?php echo base_url().'assets/logo1.png'?>" style="width:90px;height:90px"></td>  
          
         
            </p>
          </div></td>
          <!--<td width="90" rowspan="3" align="center"><img src="<?php echo base_url().'assets/logo.'?>" style="width:90px;height:90px"></td>
        -->
        </tr>
        
        <tr>
          <td align="center">

			<font color="black" face="Times New Roman" size="5"><b><h3>PT. HPS (HARUN PANDUKO SAKTI)</h3></b></font>
          	<h4>Jln. St. Syahrir No. 336,  Padang Telp.0751-61426</h4> 
			<!-- <h5>Telp.0751-61426 / Email : www.pt._hps.ac.id</h5> -->

          </td>
           <!-- <td width="90" rowspan="3" align="center"><img src="<?php echo base_url().'assets/logo1.png'?>" style="width:90px;height:90px"></td>   -->
        </tr>
      </table>
   	<table align="center" width="97%" border="0">
		<tr><td colspan="5"><hr></td></tr>
		<tr>
			<td colspan="5" align="center"><u><h3>LAPORAN PERBULAN</h3></u></td>
		</tr>
		<!--
		<tr>
			<td colspan="5" align="center"><h2>Tahun  2019/2020</h2></td>
		</tr>-->

<tr>
<td> <b>

	  <?php if ($b == null){echo '<p>Tidak Ada Data</p>';}else{?>
								   <!-- <?php echo $b['tanggal']?> -->
								   <?php echo "Bulan: ".$newDate = date("F Y", strtotime($b['tanggal'])); ?>
                                <?php }?>
                                </b> </td>
				 </tr>
				 
			
		<table  align="center" width="1200px" style="border-collapse:collapse" border="1">
			<thead>
				<tr>
					<th bgcolor="#CCCCCC"  align="center" width="10">No</th>
					<th bgcolor="#CCCCCC" width="30">KODE TIKET</th>
					
					<th bgcolor="#CCCCCC"width="50" >TANGGAL</th>
					<th bgcolor="#CCCCCC"width="50" >NAMA</th>
					<th bgcolor="#CCCCCC"width="15">KATEGORI</th>
					
					<th bgcolor="#CCCCCC"width="30">JAM BERANGKAT</th>
					<th bgcolor="#CCCCCC" width="30">TUJUAN</th>
					<th bgcolor="#CCCCCC" width="30">NAMA BUS</th>
					<th bgcolor="#CCCCCC" width="30">NAMA SOPIR</th>
				
					<th bgcolor="#CCCCCC" width="30">HARGA</th>
					
				</tr>
			</thead>
			<tbody>
				<tr>



					<?php
						
						$jumlah = 0;
						$nomor=0;
					foreach ($cth->result_array() as $a) {
						$nomor++;
						$jumlah += $a['harga']
						
					?>

					<td><center><?php echo $nomor; ?></center></td>
				  <td>&nbsp;<?php echo $a['kode_tiket']; ?></b></td>

 	 
      <td>&nbsp;<?php echo $a['tanggal']; ?></td>
      <td>&nbsp;<?php echo $a['nama_penumpang']; ?></td>
      <td>&nbsp;<?php echo $a['nama']; ?></td>
      
      <td>&nbsp;<?php echo $a['jam']; ?></td>
      <td>&nbsp;<?php echo $a['tujuan']; ?></td>
        <td>&nbsp;<?php echo $a['nama_bus']; ?></td>
        <td>&nbsp;<?php echo $a['nama_sopir']; ?></td>
      <td>&nbsp;<?php echo $a['harga']; ?></td>

           
      
				</tr>
				<?php } ?>
				 <tr>
        <td colspan="9" style="text-align:center;"><b>Total</b></td>
        <td style="text-align:right;"><b><?php echo 'Rp '.number_format($jumlah);?></b></td>
    </tr>
     
			</tbody>
			<table align="center" width="97%" style="border-collapse:collapse" border="0">
			<tr>
				<td colspan="3" align="right" width="75%">&nbsp;</td>
				<td align="left" colspan="2">Padang, <?php echo date('d M Y')?></td>
			</tr>
			<tr>
				<td colspan="3" rowspan="4" align="right"></td>
				<td colspan="2">Admin ,</td>
			</tr>
			<tr><td colspan="5">&nbsp;</td></tr>
			<tr><td colspan="5">&nbsp;</td></tr>
			<tr><td colspan="5">&nbsp;</td></tr>
			<tr><td colspan="3" rowspan="5" align="right"></td>
				<td align="left" colspan="2"><b></b></td>
			</tr>
			<tr>
				<td align="left" colspan="2"><b><?php echo $this->session->userdata('ses_nama');?></b></td>
			</tr>
		</table>
		</table>
	</table>
</br>
</td>
</tr>
</table>
</div>
</body>
</html>