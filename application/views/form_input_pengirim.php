

 
          
 <section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <div class="card card-info">
          <div class="card-header">
            <h3 class="card-title">
              Input tiket
            </h3>
          </div>
          <hr>
<br><br>
 






<div id="modal_jadwal" class="modal modal fade modal-xl" role="dialog" > 
<div class="modal-dialog modal-lg"> 
<!-- konten modal--> 
<div class="modal-content modal-xl"> 
<!-- heading modal --> 
<div class="modal-header"> 
<button type="button" class="close" data-dismiss="modal">&times;</button> 
<h4 class="modal-title">Cari Jadwal</h4> 
</div> 
<!-- body modal --> 
<div class="modal-body modal-xl" > 

<table width="100%" class="table table-striped table-bordered table-hover" >

<thead> 
                <tr>
                                        <th style="text-align:center;width:3px;">No</th>
                                        <th>ID Jadwal</th>
									<th>Tujuan</th>
									<th>Nama Sopir</th>
                                    <th>Jam</th>
                                   
                                  
                  <th style="width:100px;text-align:center;">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                    $no=0;
                    foreach ($tampil->result_array() as $a):
                        $no++;

                        
                        $id_jadwal=$a['id_jadwal'];
                        $tujuan=$a['tujuan'];
                        $nama_sopir=$a['nama_sopir'];
                        $jam=$a['jam'];
                        $id_bus=$a['id_bus'];
                   

                        
                ?>
                    <tr>
                        <td style="text-align:center;"><?php echo $no;?></td>
                        
                        <td><?php echo $id_jadwal;?></td>
						<td><?php echo $tujuan;?></td>
						<td><?php echo $nama_sopir;?></td>
                        <td><?php echo $jam;?></td>
                       

<td><span class="btn btn-info btn-sm" type="button" onClick="
 
  document.getElementById('id_jadwal').value = '<?php echo $id_jadwal ?>';
  document.getElementById('tujuan').value = '<?php echo $tujuan ?>';
  document.getElementById('id_bus').value = '<?php echo $id_bus ?>';
   document.getElementById('nama_sopir').value = '<?php echo $nama_sopir ?>';
    document.getElementById('jam').value = '<?php echo $jam ?>';
  
 $('#modal_jadwal').modal('hide');"></button><i class="glyphicon glyphicon-ok-sign"  
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




      <form class="form-horizontal" name="formD" method="post" action="<?php echo base_url().'index.php/Pengiriman_controller/tambah_pengiriman'?>">
       
                <div class="card-body">
               
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Id Jadwal</label>
                    <div class="col-sm-10">
                      <table>
                        <tr>
                          <td width="1000">
                      <input class="form-control" type="text" name="id_jadwal" id="id_jadwal" placholder/>
                          </td>
                          <td>
                        <a class="btn  btn-primary btnTambah" data-toggle="modal"data-target="#modal_jadwal"><i class="fa fa-search"></i></a> 
                          </td>
                        </tr>

                      </table>
                      
                    </div>
                  </div>



                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Nama Pengirim</label>
                    <div class="col-sm-10">
                      <input class="form-control" type="text" name="nama_pengirim"  placholder/>
                    </div>
                  </div>
                 
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Nama Penerima</label>
                    <div class="col-sm-10">
                      <input class="form-control" type="text" name="nama_penerima" id="nama_penerima" placholder/>
                    </div>
                  </div>

                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Alamat Pengirim</label>
                    <div class="col-sm-10">
                      <input class="form-control" type="text" name="alamat" id="alamat" placholder/>
                    </div>
                  </div>

             


                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">No.Hp/Telp Penerima</label>
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
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Nama Sopir</label>
                    <div class="col-sm-10">
                      <input class="form-control" type="text" name="nama_sopir" id="nama_sopir" placholder/>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Keterangan Barang</label>
                    <div class="col-sm-10">
                      <textarea name="keterangan" id="" class="form-control" cols="30" rows="3"></textarea>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Jumlah</label>
                    <div class="col-sm-10">
                      <input class="form-control" type="text" name="jumlah" id="jumlah" placholder/>
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



               
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Total Bayar  (Rp)</label>
                    <div class="col-sm-10">
                    <input name="totalbayar"   id="harga" onFocus="startCalc();"  onBlur="stopCalc();" style="width:335px;"class="form-control" type="number" required >
                            
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
                            <!-- <input name="keterangan"value="2" class="form-control" type="hidden" > -->
                    </div>
                  </div>



                <!-- /.col-lg-12 -->
            </div>
            </div>
            

              
                   <!-- /.card-body -->
          <div class="card-footer">
             <button type="submit" class="btn btn-primary btnSimpan" name="simpan" > <span class="glyphicon  
glyphicon-floppy-saved"></span> Simpan</button> 
            <a href="<?php echo base_url().'index.php/Pengiriman_controller'?>" class="btn btn-default float-right">Cancel</a>
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