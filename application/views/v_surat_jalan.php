<div align="right">
 <!-- <a href="#" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#smallModal">Tambah Pembayaran</a></div>&nbsp -->


 <a href="<?php echo site_url('Surat_jalan_controller/form_surat_jalan')?>" class="btn btn-sm btn-primary" >Tambah Surat_jalan</a></div>
<div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Tabel Data Surat Jalan
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>

                                  
                                        <th style="text-align:center;width:3px;">No</th>
									<th>Kode</th>
									<th>Tanggal</th>
                                    <th>Id Pengriman</th>
                                    <th>Kode Tiket</th>
                                    <!-- <th>Tanggal pemesanan</th> -->
                                    <th>Jumlah penumpang</th>
                                    <th>Jumlah barang</th>
                                   
                                   

									<th style="width:100px;text-align:center;">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                    $no=0;
                    foreach ($tampil->result_array() as $a):
                        $no++;
                  
                        $kode=$a['kode'];
                        $tanggal=$a['tanggal'];
                        
                        $nama_sopir=$a['nama_sopir'];
                        // $jadwalpemesanan=$a['jadwalpemesanan'];
                        $tujuan=$a['tujuan'];
                        $jumlah_penumpang=$a['jumlah_penumpang'];
                        $jumlah_barang=$a['jumlah_barang'];
                       
                      
                ?>
                    <tr>
                        <td style="text-align:center;"><?php echo $no;?></td>
						<td><?php echo $kode;?></td>
                        <td><?php echo $tanggal;?></td>
                     
                        <td><?php echo $nama_sopir;?></td>
                      
                        <td><?php echo $tujuan;?></td>
                        <td><?php echo $jumlah_penumpang;?></td>
                        <td><?php echo $jumlah_barang?></td>
                      

                       
                     
                        
                        <td style="text-align:center;">
                   

            <a class="btn btn-success btn-xs btn-circle" href="<?php echo base_url() .'index.php/Surat_jalan_controller/form_surat_edit/'.$kode;?>"  title="Edit"><span class="fa fa-edit"></span> </a>

                           <a class="btn btn-xs btn-info btn-circle" href="<?php echo base_url() .'index.php/Surat_jalan_controller/faktur/'.$kode;?>" data-toggle="modal" title="cetak" tab_blank ><span class="fa fa-print"></span> </a>

                            <a class="btn btn-xs btn-danger btn-circle" href="#modalHapusPelanggan<?php echo $kode?>" data-toggle="modal" title="Hapus"><span class="fa fa-trash"></span> </a>
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
    one=document.formD.jumlah_barang.value;
two=document.formD.jumlah_penumpang.value;
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

                            <input name="kode"  class="form-control" type="text" value="<?php echo $kode; ?>"  required>
                           
                        </div>
						</div>
                    </div>-->
            
				
                    <div class="form-group">
                        <label class="control-label col-xs-3" >kode Pelanggan</label>
                        <div class="col-xs-9">
						<div class="form-line">
                              <select  class="form-control" name="tanggal" id="tanggal" onclick="change(this.value)">
  <option selected="selected">-Pilih-</option>
  <p class="help-block"></p> 

</select>


    <script type="text/javascript">   
    <?php echo $js; ?> 
    function change(tanggal){ 
        document.getElementById('namapelanggan').value = B[tanggal].namapelanggan; 
    document.getElementById('namasopir').value = B[tanggal].namasopir; 
     document.getElementById('nomobil').value = B[tanggal].nomobil; 
    
      document.getElementById('tanggalberangkat').value = B[tanggal].tanggalberangkat; 
      document.getElementById('jam').value = B[tanggal].jam; 
      document.getElementById('harga').value = B[tanggal].harga; 

    }; 
    </script>
                        </div>
                        </div>
                        </div>


                         <div class="form-group">
                        <label class="control-label col-xs-3" >tanggaln</label>
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
                        <label class="control-label col-xs-3" >tujuan</label>
                        <div class="col-xs-9">
                        <div class="form-line">
                            <input name="nama_sopir" class="form-control" type="text" id="nomobil" readonly required>
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
                            <input name="tujuan" id="tanggalberangkat"class="form-control" readonly type="date" required>
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
                            <input name="jumlah_barang"   id="harga" onFocus="startCalc();" readonly onBlur="stopCalc();" class="form-control" type="number" required >
                        </div>
                        </div>
                        </div> 

                        <div class="form-group">
                        <label class="control-label col-xs-3" >jumlah Bayar (Rp)</label>
                        <div class="col-xs-9">
                        <div class="form-line">
                            <input name="jumlah_penumpang" id="currency" onFocus="startCalc();" onBlur="stopCalc();" onBlur="stopCalc();" class="form-control" type="number" required >
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
                        $kode=$a['kode'];
                        //  $keterangan=$a['keterangan'];
                     
                     
                    ?>
                <div id="modalEditPelanggan<?php echo $kode?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title" id="myModalLabel"> Update Keterangan</h3>
                    </div>
                    <form class="form-horizontal" method="post" action="<?php echo base_url().'index.php/Pembayaran_controller/update_Pembayaran'?>">
                        <div class="modal-body">
                             <p>Apakah waktu tunggu lebih dari 1x24 Jam ?</p>
                            <input name="kode" type="hidden" value="<?php echo $kode;?>">
						
<!-- <select name="keterangan" widht="50" class="form-control" data-placeholder="Pilih...">
                      <option selected="selected">-Pilih-</option>
                       <option value="1" <?php if ($keterangan == '1'){echo "selected";}?>>Boking</option>
                        <option value="2" <?php if ($keterangan == '2'){echo "selected";}?>>Berangkat</option>
                        <option value="0" <?php if($keterangan == '0'){echo "selected";}?>>Batal Berangkat</option>
                        
                                  
                     </select>
                    -->

                    
                    
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
                        $kode=$a['kode'];
                        
                    ?>
                <div id="modalHapusPelanggan<?php echo $kode?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">                        
                        <h3 class="modal-title" id="myModalLabel">Hapus Pembayaran</h3>
                    </div>
                    <form class="form-horizontal" method="post" action="<?php echo base_url().'index.php/Surat_jalan_controller/hapus_Surat_jalan'?>">
                        <div class="modal-body">
                            <p>Apakah anda yakin akan menghapus data ini ?</p>
                                    <input name="kode" type="hidden" value="<?php echo $kode; ?>">
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
