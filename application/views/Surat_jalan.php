
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<body onload="window.print()">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Surat Jalan </title>
</head>
<link href="<?php echo base_url().'asset/cetak.css';?>" rel="stylesheet" type="text/css" /><body >
<br>
<br>
<?php 
    $b=$tampil->row_array();

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

			<font color="black" face="Times New Roman" size="5"><b><h3>PT. Harun Panduko Sati (HPS)</h3></b></font>
          	<h4>Jln. St. Syahrir No. 336,  Padang Telp.0751-61426  </h4> 

			<h5>Telp.0751-28984 / Email : www.pt._ratu_pasaman.ac.id</h5>
          </td>
           <td width="90" rowspan="3" align="center"><img src="<?php echo base_url().'assets/logo1.png'?>" style="width:90px;height:90px"></td>  
        </tr>
      </table>
   	<table align="center" width="97%" border="0">
		<tr><td colspan="5"><hr></td></tr>
		<tr>
			<td colspan="5" align="center"><h2>SURAT JALAN</h2></td>
		</tr>
		<!--
		<tr>
			<td colspan="5" align="center"><h2>Tahun  2019/2020</h2></td>
		</tr>-->

				 
			
		<table  align="center" width="1200px" style="border-collapse:collapse" border="1">
			<thead>
				<tr>
				

					<th bgcolor="#CCCCCC"  align="center" wight="10">No</th>
					<th bgcolor="#CCCCCC" wight="30">KODE</th>
					<th bgcolor="#CCCCCC"wight="50" >ID PENGIRIMAN</th>
					<th bgcolor="#CCCCCC"wight="50" >KODE TIKET</th>
					<th bgcolor="#CCCCCC"wight="30">JUMLAH PENUMPANG</th>
					<th bgcolor="#CCCCCC"wight="30">JUMLAH BARANG</th>
				
					
					
				</tr>
			</thead>
			<tbody>
				<tr>



					<?php
						
					
						$nomor=0;
					foreach ($tampil->result_array() as $a) {
						$nomor++;
						
						
					?>

					<td><center><?php echo $nomor; ?></center></td>
	 <td>&nbsp;<?php echo $a['kode']; ?></b></td>
      <td>&nbsp;<?php echo $a['nama_sopir']; ?></td>
       <td>&nbsp;<?php echo $a['tujuan']; ?></td>
        <td>&nbsp;<?php echo $a['jumlah_penumpang']; ?></td>
        <td>&nbsp;<?php echo $a['jumlah_barang']; ?></td>



           
      
				</tr>
				<?php } ?>
		
     
			</tbody>
			<table align="center" width="97%" style="border-collapse:collapse" border="0">
			<tr>
				<td colspan="3" align="right" width="75%">&nbsp;</td>
				<td align="left" colspan="2">Padang, <?php echo date('d M Y')?></td>
			</tr>
			<tr>
				<td colspan="3" rowspan="4" align="right"></td>
				<td colspan="2">admin ,</td>
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