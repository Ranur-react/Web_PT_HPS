<!-- <h4><font f="Verdana">Form kategori Keluarga </font></h4><hr/>

 -->
          
 <section class="content">
  <div class="container-fluid">
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-lg-12">
        <div class="card card-info">
          <div class="card-header">
            <h3 class="card-title">
              Input pembayaran
            </h3>
          </div>
          <hr>
<br><br>
 


                          
<div id="modal_jadwal_kategori" class="modal modal fade modal-xl" role="dialog" > 

<!-- konten modal--> 
<div class="modal-dialog modal-lg">
<div class="modal-content modal-lg"> 
<!-- heading modal --> 
<div class="modal-header"> 
<button type="button" class="close" data-dismiss="modal">&times;</button> 
<h4 class="modal-title">Cari Data Pelanggan</h4> 
</div> 
<!-- body modal --> 
<div class="modal-body modal-xl" > 

<table width="100%" class="table table-striped table-bordered table-hover"  id="dataTables-example" >


<thead> 
                <tr>
                                        <th style="text-align:center;width:3px;">No</th>
                                        <th>ID Tiket</th>
                                    <th>Tanggal</th>
                                    <th>Nama</th>
                                    <!-- <th>Kategori</th> -->
                                    <th>Jadwal</th>
                                    <th>Tujuan</th>
                                    <th>Nomor Kursi</th>
                                     <th>Harga</th>
                                     
                                     <th>Status</th>
                                  
                  <th style="width:100px;text-align:center;">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                    $no=0;
                    foreach ($tampil_notin->result_array() as $a):
                        $no++;

                       


                        $kode_tiket=$a['kode_tiket'];
                        $nama_penumpang=$a['nama_penumpang'];
                        $alamat=$a['alamat'];
                        $jenis_kelamin=$a['jenis_kelamin'];
                        $nohp=$a['nohp'];
                        $tanggal=$a['tanggal'];
                        // $kategori=$a['kategori'];
                        $id_jadwal=$a['id_jadwal'];
                        $keterangan=$a['keterangan'];
                        $id_bus=$a['id_bus'];
                        $id_kursi=$a['id_kursi'];
                        $harga=$a['harga'];
                        $jam=$a['jam'];
                        $nama_sopir=$a['nama_sopir'];
                      
                        
                        $tujuan=$a['tujuan'];
                    
                   
                      
                        $status=$a['status'];
                   

                        
                ?>
                    <tr>
                        <td style="text-align:center;"><?php echo $no;?></td>
                        <td><?php echo $kode_tiket;?></td>
                        <td><?php echo $tanggal;?></td>
                       
                        <!-- <td><?php echo $kategori;?></td> -->
                        <td><?php echo $nama_penumpang;?></td>
                        <td><?php echo $jam;?></td>
                        <td><?php echo $tujuan;?></td>
                        <td><?php echo $a['id_kursi'];?></td>
                 
                        <td><?php echo $harga;?></td>
                   
                             <td>
                                     <?php  if ( $a['status']=='1'){
   
        echo '
       <a class="btn btn-primary"  title="Berangkat" 
       href="#modalEditTiket(\''.$kode_tiket.'\');">
       <i class="icon-check icon-white"> </i>  Boking</a>
';

       }elseif ( $a['status']=='2'){
           
       


 echo '
       <button class="btn btn-success" title="Batal Berangkat" onclick="return modalEditTiket(\''.$kode_tiket.'\');">
      </i>  Berangkat</button>
  
      ';
       }


       else{

 echo '
       <button class="btn btn-danger" title="Batal Berangkat" onclick="return modalEditTiket(\''.$kode_tiket.'\');">
      </i>  Batal berangkat</button>
  
      ';
       }
    ?>

                  </td>
                           

                 
                


<td><span class="btn btn-info btn-sm" type="button" onClick="
  document.getElementById('kode_tiket').value ='<?php echo $kode_tiket ?>';
  document.getElementById('nama_penumpang').value ='<?php echo $nama_penumpang ?>';
  document.getElementById('alamat').value ='<?php echo $alamat ?>';
  <!-- document.getElementById('jenis_kelamin').value ='<?php echo $jenis_kelamin ?>'; -->
  document.getElementById('nohp').value ='<?php echo $nohp ?>';

  document.getElementById('tanggal').value ='<?php echo $tanggal ?>';
 
  document.getElementById('jam').value ='<?php echo $jam ?>';
  document.getElementById('tujuan').value ='<?php echo $tujuan ?>';
  document.getElementById('id_bus').value ='<?php echo $id_bus ?>';
  document.getElementById('id_kursi').value ='<?php echo $id_kursi ?>';
  document.getElementById('nama_sopir').value ='<?php echo $nama_sopir ?>';
  
  document.getElementById('keterangan').value ='<?php echo $keterangan ?>';

  document.getElementById('harga').value = '<?php echo $harga ?>';
 $('#modal_jadwal_kategori').modal('hide');"></button><i class="glyphicon glyphicon-ok-sign"  
aria- hidden="true"></i>PILIH</span> 
</td> 
</tr> 
   <?php endforeach;?>
</tbody> 
</table> 
</div> 
<!-- footer modal --> 
<div class="modal-footer"> 
</div> 
</form> 
</div>


        </div>
      </div>




      <script>


function startCalc()
{interval=setInterval("calc()",1)}
function calc()
{
   one=document.formD.totalbayar.value;
two=document.formD.jumlah_bayar.value;
document.formD.kembalian.value= (two*1)-(one*1)
}
function stopCalc(){clearInterval(interval)}

</script>


      <form class="form-horizontal" method="post" name="formD" action="<?php echo base_url().'index.php/Pembayaran_controller/tambah_Pembayaran'?>">
       
                <div class="card-body">
               
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Id Tiket</label>
                    <div class="col-sm-10">
                      <table>
                        <tr>
                          <td width="1000">
                      <input class="form-control" type="text" name="kode_tiket" id="kode_tiket" placholder/>
                          </td>
                          <td>
                        <a class="btn  btn-primary btnTambah" data-toggle="modal"data-target="#modal_jadwal_kategori"><i class="fa fa-search"></i></a> 
                          </td>
                        </tr>

                      </table>
                      
                    </div>
                  </div>

                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                      <input class="form-control" type="text" name="nama_penumpang" id="nama_penumpang"  placholder/>
                    </div>
                  </div>

                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                      <input class="form-control" type="text" name="alamat" id="alamat" placholder/>
                    </div>
                  </div>

                <!-- <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                    <div class="col-sm-10">
                    <label>
                          <input type='radio' name='jenis_kelamin' id='jenis_kelamin' value='Laki-laki' class='ace' checked/>
                          <span class='lbl'> Laki-Laki</span>
                        </label>&nbsp;
                        <label>
                          <input type='radio' name='jenis_kelamin' id='jenis_kelamin' class='ace' value='Perempuan' />
                          <span class='lbl'> Perempuan</span>
                        </label>
                    </div>
                  </div> -->


                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">No.Hp/Telp</label>
                    <div class="col-sm-10">
                      <input class="form-control" type="text" name="nohp" id="nohp" placholder/>
                    </div>
                  </div>
                  
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Tanggal</label>
                    <div class="col-sm-10">
                      <input class="form-control" type="date" name="tanggal" id="tanggal" placholder/>
                    </div>
                  </div>



                     

                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Jam Berangkat</label>
                    <div class="col-sm-10">
                      <input class="form-control" type="text" name="jam" id="jam" placholder/>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Tujuan</label>
                    <div class="col-sm-10">
                      <input class="form-control" type="text" name="tujuan" id="tujuan" placholder/>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Id Bus</label>
                    <div class="col-sm-10">
                      <input class="form-control" type="text" name="id_bus" id="id_bus" placholder/>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Kursi</label>
                    <div class="col-sm-10">
                      <input class="form-control" type="text" name="id_kursi" id="id_kursi" placholder/>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Nama Sopir</label>
                    <div class="col-sm-10">
                      <input class="form-control" type="text" name="nama_sopir" id="nama_sopir" placholder/>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Keterangan Barang Bawaan</label>
                    <div class="col-sm-10">
                      <textarea name="" id="keterangan" class="form-control" cols="30" rows="3"></textarea>
                    </div>
                  </div>
                  
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Total Bayar  (Rp)</label>
                    <div class="col-sm-10">
                    <input name="totalbayar"   id="harga" onFocus="startCalc();" readonly onBlur="stopCalc();" style="width:335px;"class="form-control" type="number" required >
                            
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Jumlah Bayar  (Rp)</label>
                    <div class="col-sm-10">
                  
                    <input name="jumlah_bayar" id="jumlah_bayar" onFocus="startCalc();" onBlur="stopCalc();" onBlur="stopCalc();"style="width:335px;" class="form-control" type="number" required >
                           
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Kembalian  (Rp)</label>
                    <div class="col-sm-10">
                    <input name="kembalian" onkeyup="convertToRupiah(this);" id="kembalian" style="width:335px;" class="form-control" type="text" required >
                            <input name="keterangan"value="2" class="form-control" type="hidden" >
                    </div>
                  </div>




                <!-- /.col-lg-12 -->
            </div>
            </div>
            

              
                   <!-- /.card-body -->
          <div class="card-footer">
             <button type="submit" class="btn btn-primary btnSimpan" name="simpan" > <span class="glyphicon  
glyphicon-floppy-saved"></span> Simpan</button> 
            <a href="<?php echo base_url().'index.php/Tiket_controller'?>" class="btn btn-default float-right">Cancel</a>
          </div>
          <!-- /.card-footer -->

        </div>
      </div>
    </div>
    <!-- /.row -->
  </div><!-- /.container-fluid -->
</section>
                    </form>
  <script src="<?php echo base_url().'asset/jquery/jquery-2.2.3.min.js'?>"></script>
  <script type="text/javascript" src="<?php echo base_url().'asset/js/bootstrap.js'?>"></script>
  <script src="<?php echo base_url().'asset/ckeditor/ckeditor.js'?>"></script>
  <script type="text/javascript">
    $(function () {
      CKEDITOR.replace('ckeditor');
    });
  </script>
</body>
</html>