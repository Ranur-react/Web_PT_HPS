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
              Edit Surat Jalan
            </h3>
          </div>
          <hr>
<br><br>
 


  
 



      <?php 
                    $no=0;
            

                    foreach ($tampil_surat->result_array() as $a):
                        $no++;
                     
                        $kode=$a['kode'];
                        $tanggal=$a['tanggal'];
                        $nama_sopir=$a['nama_sopir'];
                        $tujuan=$a['tujuan'];
                      
                     
                        // $jumlah=$a['jumlah'];
                        $jumlah_penumpang=$a['jumlah_penumpang'];
                        $jumlah_barang=$a['jumlah_barang'];
               

                       
                        
                ?>






      <form class="form-horizontal" method="post" action="<?php echo base_url().'index.php/Surat_jalan_controller/update_surat_jalan'?>">
       
                <div class="card-body">
               
                <!-- <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Tanggal</label>
                    <div class="col-sm-10">
                      <table>
                        <tr>
                          <td width="1000">
                          <input class="form-control" type="date" name="tanggal" id="tanggal" placholder/>
                      <input class="form-control" type="hidden" name="kode" id="kode_tiket" placholder/>
                          </td>
                          <td>
                        <a class="btn  btn-primary btnTambah" data-toggle="modal"data-target="#modal_jadwal_kategori"><i class="fa fa-search"></i></a> 
                          </td>
                        </tr>

                      </table>
                      
                    </div>
                  </div> -->


                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Tanggal</label>
                    <div class="col-sm-10">
                      <input class="form-control" type="date" name="tanggal" id="tanggal" value="<?php echo $tanggal?>" placholder/>
                      <input class="form-control" type="hidden" name="kode" value="<?php echo $a['kode']?>" placholder/>
                    </div>
                  </div>

                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Kode Tiket</label>
                    <div class="col-sm-10">
                      <!-- <input class="form-control" type="text" name="Kode_tiket" id="kode_tiket" value="<?php echo $nama_sopir?>"placholder/> -->
                      <table>
                        <tr>
                          <td width="1000">
                          <input class="form-control" type="text" name="kode_tiket" id="kode_tiket" value="<?php echo $nama_sopir?>"placholder/>
                           
                          </td>
                          <td>
                        <!-- <a class="btn  btn-primary btnTambah" data-toggle="modal"data-target="#"><i class="fa fa-plus"></i></a>  -->
                        <a class="btn  btn-primary btnTambah" data-toggle="modal"data-target="#model_tiket"><i class="fa fa-search"></i></a> 
                          </td>
                        </tr>
                      </table>
   
 


                    </div>
                  </div>


                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Id Pengriman</label>
                    <div class="col-sm-10">
                      <table>
                        <tr>
                          <td width="1000">
                          <input name="id_pengiriman" value="<?php echo $tujuan?>" onkeyup="convertToRupiah(this);" id="id_pengiriman" onFocus="startCalc();"  onBlur="stopCalc();"style="" class="form-control" type="text"  >
                            <input name="status"value="0" class="form-control" type="hidden" >
                          </td>
                          <td>
                        <!-- <a class="btn  btn-primary btnTambah" data-toggle="modal"data-target="#"><i class="fa fa-plus"></i></a>  -->
                        <a class="btn  btn-primary btnTambah" data-toggle="modal"data-target="#model_barang"><i class="fa fa-search"></i></a> 
                          </td>
                        </tr>
                      </table>
                    </div>
                  </div>

                  <!-- <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Tujuan</label>
                    <div class="col-sm-10">
                    <input class="form-control" type="text" name="tujuan" id="tujuan"value="<?php echo $tujuan?>" placholder/>
                    <select name="tujuan" widht="50" class="form-control" data-placeholder="Pilih..." required>
                      <option selected="selected">-Pilih-</option>
                       <option value="Padang-Painan" <?php if ($tujuan == 'Padang-Painan'){echo "selected";}?>>Padang-Painan</option>
                        <option value="Painan-Padang" <?php if ($tujuan == 'Painan-Padang'){echo "selected";}?>>Painan-Padang</option>
                     </select>
                    </div>
                  </div>
         -->

                         <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Jumlah Penumpang</label>
                    <div class="col-sm-10">
                      <table>
                        <tr>
                          <td width="">
                      <input class="form-control" type="number" name="jumlah_penumpang" id="jumlah_penumpang" value="<?php echo $jumlah_penumpang?>" style="width:80px;"  placholder/>
                          </td>
                        
                        </tr>

                      </table>
                      
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Jumlah Barang</label>
                    <div class="col-sm-10">
                      <input class="form-control" type="number" name="jumlah_barang" id="jumlah_barang"value="<?php echo $jumlah_barang?>" style="width:80px;" placholder/>
                    </div>
                  </div>

                <!-- /.col-lg-12 -->
            </div>
            </div>
            <?php endforeach?>

              
                   <!-- /.card-body -->
          <div class="card-footer">
             <button type="submit" class="btn btn-primary btnSimpan"  > <span class="glyphicon  
glyphicon-floppy-saved"></span> Edit</button> 
            <a href="<?php echo base_url().'index.php/Surat_jalan_controller'?>" class="btn btn-default float-right">Cancel</a>
          </div>
          <!-- /.card-footer -->

        </div>
      </div>
    </div>
    <!-- /.row -->
  </div><!-- /.container-fluid -->
</section>


<div id="model_tiket" class="modal modal fade modal-xl" role="dialog" > 
<div class="modal-dialog modal-lg"> 
<!-- konten modal--> 
<div class="modal-content modal-xl"> 
<!-- heading modal --> 
<div class="modal-header"> 
<button type="button" class="close" data-dismiss="modal">&times;</button> 
<h4 class="modal-title">Cari Penumoang</h4> 
</div> 
<!-- body modal --> 
<div class="modal-body modal-xl" > 

<table width="100%" class="table table-striped table-bordered table-hover" >

<thead> 
                <tr>
                                        <th style="text-align:center;width:3px;">No</th>
                                        <th>ID Tiket</th>
									<th>Jumlah Penumpang</th>
							
                                   
                                  
                  <th style="width:100px;text-align:center;">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                    $no=0;
                    foreach ($tampil_jumlah_penumpang->result_array() as $a):
                        $no++;

                        
                        $kode_tiket=$a['kode_tiket'];
                        $jumlah_penumpang=$a['jumlah_penumpang'];
                   

                        
                ?>
                    <tr>
                        <td style="text-align:center;"><?php echo $no;?></td>
                        
                        <td><?php echo $kode_tiket;?></td>
						<td><?php echo $jumlah_penumpang;?></td>
				
                       

<td><span class="btn btn-info btn-sm" type="button" onClick="
 

  document.getElementById('kode_tiket').value = '<?php echo $kode_tiket ?>';
  document.getElementById('jumlah_penumpang').value = '<?php echo $jumlah_penumpang ?>';
 
  
 $('#model_tiket').modal('hide');"></button><i class="glyphicon glyphicon-ok-sign"  
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



<div id="model_barang" class="modal modal fade modal-xl" role="dialog" > 
<div class="modal-dialog modal-lg"> 
<!-- konten modal--> 
<div class="modal-content modal-xl"> 
<!-- heading modal --> 
<div class="modal-header"> 
<button type="button" class="close" data-dismiss="modal">&times;</button> 
<h4 class="modal-title">Cari Barang</h4> 
</div> 
<!-- body modal --> 
<div class="modal-body modal-xl" > 

<table width="100%" class="table table-striped table-bordered table-hover" >

<thead> 
                <tr>
                                        <th style="text-align:center;width:3px;">No</th>
                                        <th>ID Pengiriman</th>
									<th>JUmlah Barang</th>
							
                                   
                                  
                  <th style="width:100px;text-align:center;">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                    $no=0;
                    foreach ($tampil_jumlah_barang->result_array() as $a):
                        $no++;

                        
                        $id_pengiriman=$a['id_pengiriman'];
                        $jumlah_barang=$a['jumlah_barang'];
                   

                        
                ?>
                    <tr>
                        <td style="text-align:center;"><?php echo $no;?></td>
                        
                        <td><?php echo $id_pengiriman;?></td>
						<td><?php echo $jumlah_barang;?></td>
				
                       

<td><span class="btn btn-info btn-sm" type="button" onClick="
 

  document.getElementById('id_pengiriman').value = '<?php echo $id_pengiriman ?>';
  document.getElementById('jumlah_barang').value = '<?php echo $jumlah_barang ?>';
 
  
 $('#model_barang').modal('hide');"></button><i class="glyphicon glyphicon-ok-sign"  
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