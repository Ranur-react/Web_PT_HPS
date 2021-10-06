<html lang="en" moznomarginboxes mozdisallowselectionprint>
<head>
    <title>Faktur </title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <body onload="window.print()">
    <link rel="stylesheet" href="<?php echo base_url('asset/cetak.css')?>"/>
</head>
<body onload="window.print()">
<div id="laporan">
<table align="center" style="width:700px; border-bottom:3px double;border-top:none;border-right:none;border-left:none;margin-top:5px;margin-bottom:20px;">
<!--<tr>
    <td><img src="<?php// echo base_url().'assets/img/kop_surat.png'?>"/></td>
</tr>-->
</table>

<table border="0" class="table table-striped table-bordered table-hover" align="center" style="width:700px; border:none;margin-top:5px;margin-bottom:0px;">
<tr>
    
</tr>
                       
</table>
<?php 
    $b=$tampil->row_array();
?>
<table border="0" align="center" style="width:700px;border:none;">
        <tr>
            <th style="text-align:left;">No Faktur</th>
            <th style="text-align:left;">: <?php echo $b['kodebayar'];?></th>
            <th style="text-align:left;">Harga</th>
            <th style="text-align:left;">: <?php echo 'Rp '.number_format($b['totalbayar']).',-';?></th>
        </tr>
        <tr>
            <th style="text-align:left;">Nama Pelanggan</th>
            <th style="text-align:left;">: <?php echo $b['namapelanggan'];?></th>
            <th style="text-align:left;">Tunai</th>
            <th style="text-align:left;">: <?php echo 'Rp '.number_format($b['jumlahbayar']).',-';?></th>
        </tr>
        <tr>
            <th style="text-align:left;">Jadwal Keberangkatan</th>
            <th style="text-align:left;">: <?php echo $b['jam'];?></th>
            <th style="text-align:left;">Kembalian</th>
            <th style="text-align:left;">: <?php echo 'Rp '.number_format($b['kembalian']).',-';?></th>
        </tr>
</table>

<table border="1" align="center" style="width:700px;margin-bottom:20px;">
<thead>

    <tr>
        <th style="width:50px;">No</th>
        <th>Faktur</th>
        <th>jadwal keberangkatan</th>
        <th>jam</th>
        
        <th>jumlah bayar</th>
        <th>kembalian</th>
        <th>Subtotal</th>
    </tr>
</thead>
<tbody>
<?php 
$jumlah = 0;
$no=0;
    foreach ($tampil->result_array() as $i) {
        $no++;
        $jumlah += $i['totalbayar'];
        
        $kodebayar=$i['kodebayar'];
        $jadwalkeberangkatan=$i['tanggalberangkat'];
        
        $jam=$i['jam'];
       $totalbayar=$i['totalbayar'];
        $jumlahbayar=$i['jumlahbayar'];
        $kembalian=$i['kembalian'];
?>
    <tr>
        <td style="text-align:center;"><?php echo $no;?></td>
        <td style="text-align:center;"><?php echo $kodebayar;?></td>
        <td style="text-align:center;"><?php echo $jadwalkeberangkatan;?></td>
        <td style="text-align:center;"><?php echo $jam;?></td>
     
      
        <td style="text-align:center;"><?php echo 'Rp '.number_format($jumlahbayar);?></td>
        <td style="text-align:center;"><?php echo 'Rp '.number_format($kembalian);?></td>
           <td style="text-align:center;"><?php echo 'Rp '.number_format($totalbayar);?></td>
    </tr>
<?php }?>
</tbody>
<tfoot>

    <tr>
        <td colspan="6" style="text-align:center;"><b>Total</b></td>
        <td style="text-align:center;"><b><?php echo 'Rp '.number_format($jumlah);?></b></td>
    </tr>
</tfoot>
</table>
<table align="center" style="width:700px; border:none;margin-top:5px;margin-bottom:20px;">
    <tr>
        <td></td>
</table>
<table align="center" style="width:700px; border:none;margin-top:5px;margin-bottom:20px;">
    <tr>
        <td align="right">Padang, <?php echo date('d-M-Y')?></td>
    </tr>
    <tr>
        <td align="right"></td>
    </tr>
   
    <tr>
    <td><br/><br/><br/><br/></td>
    </tr>    
    <tr>
        <td align="right">( <?php echo $this->session->userdata('ses_nama');?> )</td>
    </tr>
    <tr>
        <td align="center"></td>
    </tr>
</table>
<table align="center" style="width:700px; border:none;margin-top:5px;margin-bottom:20px;">
    <tr>
        <th><br/><br/></th>
    </tr>
    <tr>
        <th align="left"></th>
    </tr>
</table>
</div>
</body>
</html>