<div align="right">
 <!-- <a href="#" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#smallModal">Tambah Pembayaran</a></div>&nbsp -->


 <a href="<?php echo site_url('Tiket_controller/form_pembayaran')?>" class="btn btn-sm btn-primary" >Tambah Tiket</a></div>
<div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Tabel Data Pembayaran
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th style="text-align:center;width:3px;">No</th>
									<th>Faktur</th>
									<th>Nama Pelanggan</th>
                                    <th>nama sopir</th>
                                    <th>nomor mobil</th>
                                    <!-- <th>Tanggal pemesanan</th> -->
                                    <th>Tanggal keberangkatan</th>
                                    <th>jumlahbayar</th>
                                    <th>totalbayar</th>
                                     <th>kembalian</th>
                                     <th>keterangan</th>
                                   

									<th style="width:100px;text-align:center;">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                    $no=0;
                    foreach ($tampil->result_array() as $a):
                        $no++;
                        $kodebayar=$a['kodebayar'];
                        $kodetiket=$a['kodetiket'];
                        $namasopir=$a['namasopir'];
                        $nomormobil=$a['nomormobil'];
                        // $jadwalpemesanan=$a['jadwalpemesanan'];
                        $jadwalkeberangkatan=$a['jadwalkeberangkatan'];
                        $jumlahbayar=$a['jumlahbayar'];
                        $totalbayar=$a['totalbayar'];
                        $kembalian=$a['kembalian'];
                        $namapelanggan=$a['namapelanggan'];
                      
                ?>
                    <tr>
                        <td style="text-align:center;"><?php echo $no;?></td>
						<td><?php echo $kodebayar;?></td>
                        <td><?php echo $namapelanggan;?></td>
                        <td><?php echo $namasopir;?></td>
                        <td><?php echo $nomormobil;?></td>
                        <!-- <td><?php echo $jadwalpemesanan;?></td> -->
                        <td><?php echo $jadwalkeberangkatan;?></td>
                        <td><?php echo 'Rp '.number_format($jumlahbayar);?></td>
                        <td><?php echo 'Rp '.number_format($totalbayar);?></td>
                        <td><?php echo 'Rp '.number_format($kembalian);?></td>

                         <td>
                                     <?php  if ( $a['keterangan']=='1'){
   
        echo "
       <a class='btn btn-primary'  title='Berangkat'
       href='#modalEditPelanggan(\''.$kodebayar.'\');'>
       <i class='icon-check icon-white'> </i>  Boking</a>

       
";

       }elseif ( $a['keterangan']=='2'){
           
       


 echo "
       <button class='btn btn-success' title='Batal Berangkat' onclick='return modalEditPelanggan(\''.$kodebayar.'\');'>
      </i>  Berangkat</button>
  
      ";
       }


       else{

 echo "
       <button class='btn btn-danger' title='Batal Berangkat' onclick='eturn modalEditPelanggan(\''.$kodebayar.'\');''>
      </i>  Batal berangkat</button>
  
      ";
       }
    ?>

                  </td>
                     
                        
                        <td style="text-align:center;">
                   

            <a class="btn btn-success btn-xs btn-circle" href="#modalEditPelanggan<?php echo $kodebayar?>"data-toggle="modal"  title="Edit"><span class="fa fa-edit"></span> </a>

                           <a class="btn btn-xs btn-info btn-circle" href="<?php echo base_url() .'index.php/Pembayaran_controller/faktur/'.$kodebayar;?>" data-toggle="modal" title="cetak" tab_blank ><span class="fa fa-print"></span> </a>

                            <a class="btn btn-xs btn-danger btn-circle" href="#modalHapusPelanggan<?php echo $kodebayar?>" data-toggle="modal" title="Hapus"><span class="fa fa-trash"></span> </a>
                        </td>
                    </tr>
                <?php endforeach;?>
                                </tbody>
                            </table>
                            
                </div>
                <!-- /.col-lg-12 -->
            </div>
          <!-- /.box -->        
		
        <!-- ============ MODAL ADD =============== -->
        <div class="modal fade" id="smallModal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="defaultModalLabel">Tambah Pembayaran</h4>
                        </div>
    <script>


 function startCalc()
{interval=setInterval("calc()",1)}
function calc()
{
    one=document.formD.totalbayar.value;
two=document.formD.jumlahbayar.value;
document.formD.kembalian.value= (two*1)-(one*1)
}
function stopCalc(){clearInterval(interval)}

</script>

				<form class="form-horizontal" id="formD"  name="formD" method="post" action="<?php echo base_url().'index.php/Pembayaran_controller/tambah_Pembayaran'?>">
                <div class="modal-body">
<!--
                    <?php 
    $b=$tampil->row_array();
?>
                       
					<div class="form-group">
                       <label class="control-label col-xs-3" ></label>
                        <div class="col-xs-9">
						<div class="form-line">

                            <input name="kodebayar"  class="form-control" type="text" value="<?php echo $kodebayar; ?>"  required>
                           
                        </div>
						</div>
                    </div>-->
            
				
                    <div class="form-group">
                        <label class="control-label col-xs-3" >kode Pelanggan</label>
                        <div class="col-xs-9">
						<div class="form-line">
                              <select  class="form-control" name="kodetiket" id="kodetiket" onclick="change(this.value)">
  <option selected="selected">-Pilih-</option>
  <p class="help-block"></p> 

</select>


    <script type="text/javascript">   
    <?php echo $js; ?> 
    function change(kodetiket){ 
        document.getElementById('namapelanggan').value = B[kodetiket].namapelanggan; 
    document.getElementById('namasopir').value = B[kodetiket].namasopir; 
     document.getElementById('nomobil').value = B[kodetiket].nomobil; 
    
      document.getElementById('tanggalberangkat').value = B[kodetiket].tanggalberangkat; 
      document.getElementById('jam').value = B[kodetiket].jam; 
      document.getElementById('harga').value = B[kodetiket].harga; 

    }; 
    </script>
                        </div>
                        </div>
                        </div>


                         <div class="form-group">
                        <label class="control-label col-xs-3" >nama pelanggan</label>
                        <div class="col-xs-9">
                        <div class="form-line">
                            <input name="namapelanggan" id="namapelanggan" class="form-control" type="text" id="namasopir" readonly required>
                        </div>
                        </div>
                        </div>
                            <div class="form-group">
                        <label class="control-label col-xs-3" >nama sopir</label>
                        <div class="col-xs-9">
                        <div class="form-line">
                            <input name="namasopir" class="form-control" type="text" id="namasopir" readonly required>
                        </div>
                        </div>
                        </div>

                           <div class="form-group">
                        <label class="control-label col-xs-3" >nomor mobil</label>
                        <div class="col-xs-9">
                        <div class="form-line">
                            <input name="nomormobil" class="form-control" type="text" id="nomobil" readonly required>
                        </div>
                        </div>
                        </div>


                            <div class="form-group">
                        <label class="control-label col-xs-3" >jadwal pemesanan</label>
                        <div class="col-xs-9">
                        <div class="form-line">
                            <input name="jadwalpemesanan" id="tanggalpesan"class="form-control" readonly type="date" required>
                        </div>
                        </div>
                        </div>



                          <div class="form-group">
                        <label class="control-label col-xs-3" >jadwal keberangkatan</label>
                        <div class="col-xs-9">
                        <div class="form-line">
                            <input name="jadwalkeberangkatan" id="tanggalberangkat"class="form-control" readonly type="date" required>
                        </div>
                        </div>
                        </div>


                         <div class="form-group">
                        <label class="control-label col-xs-3" >jam</label>
                        <div class="col-xs-9">
                        <div class="form-line">
                            <input name="jam" id="jam"class="form-control" type="text" readonly required>
                        </div>
                        </div>
                        </div>

<!--
 <script src="<?php echo base_url().'assets/dist/js/jquery.maskMoney.min.js'?>"></script>
 <script src="<?php echo base_url().'assets/dist/js/jquery.maskMoney.js'?>"></script>  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
  <script src="dist/jquery.maskMoney.min.js" type="text/javascript"></script>
</head>
<body>
  <input type="text" id="currency" />
</body>
<script>
  $(function() {
    $('#currency').maskMoney();
  })
</script>-->


                     <div class="form-group">
                        <label class="control-label col-xs-3" > Total Bayar (Rp)</label>
                        <div class="col-xs-9">
                        <div class="form-line">
                            <input name="totalbayar"   id="harga" onFocus="startCalc();" readonly onBlur="stopCalc();" class="form-control" type="number" required >
                        </div>
                        </div>
                        </div> 

                        <div class="form-group">
                        <label class="control-label col-xs-3" >jumlah Bayar (Rp)</label>
                        <div class="col-xs-9">
                        <div class="form-line">
                            <input name="jumlahbayar" id="currency" onFocus="startCalc();" onBlur="stopCalc();" onBlur="stopCalc();" class="form-control" type="number" required >
                        </div>
                        </div>
                        </div> 


                        <div class="form-group">
                        <label class="control-label col-xs-3">kembalian (Rp)</label>
                        <div class="col-xs-9">
                        <div class="form-line">
                            <input name="kembalian"   class="form-control" type="number" readonly required >
                        </div>
                        </div>
                        </div> 





                        </div>
						

                    
					
					
                

                <div class="modal-footer">
                   <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                    <button class="btn btn-info">Simpan</button>
                
                </div>
            </form>
            </div>
            </div>
        </div>

        <!-- ============ MODAL EDIT =============== -->
					<?php
                    foreach ($tampil->result_array() as $a) {
                        $kodebayar=$a['kodebayar'];
                         $keterangan=$a['keterangan'];
                     
                     
                    ?>
                <div id="modalEditPelanggan<?php echo $kodebayar?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title" id="myModalLabel"> Update Keterangan</h3>
                    </div>
                    <form class="form-horizontal" method="post" action="<?php echo base_url().'index.php/Pembayaran_controller/update_Pembayaran'?>">
                        <div class="modal-body">
                             <p>Apakah waktu tunggu lebih dari 1x24 Jam ?</p>
                            <input name="kodebayar" type="hidden" value="<?php echo $kodebayar;?>">
						
<select name="keterangan" widht="50" class="form-control" data-placeholder="Pilih...">
                      <option selected="selected">-Pilih-</option>
                       <option value="1" <?php if ($keterangan == '1'){echo "selected";}?>>Boking</option>
                        <option value="2" <?php if ($keterangan == '2'){echo "selected";}?>>Berangkat</option>
                        <option value="0" <?php if($keterangan == '0'){echo "selected";}?>>Batal Berangkat</option>
                        
                                  
                     </select>
                   

                    
                    
                </div>
                        <div class="modal-footer">
                            <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                            <button type="submit" class="btn btn-info" id="th">Update Keterangan</button>
                        </div>
                    </form>
                </div>
                </div>
                </div>
            <?php
        }
        ?>


        <!-- ============ MODAL HAPUS =============== -->
        <?php
                    foreach ($tampil->result_array() as $a) {
                        $kodebayar=$a['kodebayar'];
                        
                    ?>
                <div id="modalHapusPelanggan<?php echo $kodebayar?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">                        
                        <h3 class="modal-title" id="myModalLabel">Hapus Pembayaran</h3>
                    </div>
                    <form class="form-horizontal" method="post" action="<?php echo base_url().'index.php/Pembayaran_controller/hapus_Pembayaran'?>">
                        <div class="modal-body">
                            <p>Apakah anda yakin akan menghapus data ini ?</p>
                                    <input name="kodebayar" type="hidden" value="<?php echo $kodebayar; ?>">
                        </div>
                        <div class="modal-footer">
                            <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </div>
                    </form>
                </div>
                </div>
                </div>
            <?php
        }
        ?>

     
    <script src="<?php echo base_url().'assets/js/jquery.price_format.min.js'?>"></script>
  <script src="<?php echo base_url().'assets/js/moment.js'?>"></script>
    <!-- /.container -->
     <script type="text/javascript">
        $(function(){
            $('#harga').on("input",function(){
                var total=$('#total').val();
                var jumuang=$('#jml_uang').val();
                var hsl=jumuang.replace(/[^\d]/g,"");
                $('#jml_uang2').val(hsl);
                $('#kembalian').val(hsl-total);
            })
            
        });
    </script>
        <script type="text/javascript">
        $(function(){
            $('.jml_uang').priceFormat({
                    prefix: '',
                    //centsSeparator: '',
                    centsLimit: 0,
                    thousandsSeparator: ','
            });
            $('#jml_uang2').priceFormat({
                    prefix: '',
                    //centsSeparator: '',
                    centsLimit: 0,
                    thousandsSeparator: ''
            });
            $('#kembalian').priceFormat({
                    prefix: '',
                    //centsSeparator: '',
                    centsLimit: 0,
                    thousandsSeparator: ','
            });
            $('.harga').priceFormat({
                    prefix: '',
                    //centsSeparator: '',
                    centsLimit: 0,
                    thousandsSeparator: ','
            });
        });
    </script>    
</script>
    </section>
