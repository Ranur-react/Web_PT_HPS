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
              Input tiket
            </h3>
          </div>
          <hr>
<br><br>
 


                          
<div id="modal_jadwal_kategori" class="modal modal fade modal-xl" role="dialog" > 
<div class="modal-dialog modal-lg"> 
<!-- konten modal--> 
<div class="modal-content modal-xl"> 
<!-- heading modal --> 
<div class="modal-header"> 
<button type="button" class="close" data-dismiss="modal">&times;</button> 
<h4 class="modal-title">Cari Data Kategori</h4> 
</div> 
<!-- body modal --> 
<div class="modal-body modal-xl" > 

<table width="100%" class="table table-striped table-bordered table-hover" >

<thead> 
                <tr>
                                        <th style="text-align:center;width:3px;">No</th>
                                        <th>Id kategori</th>
							                  		<th>Nama Kategori</th>
                                    <th>harga</th>
                                  
                  <th style="width:100px;text-align:center;">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                    $no=0;
                    foreach ($tampil_kategori->result_array() as $a):
                        $no++;

                        $id_kategori=$a['id_kategori'];
                        $nama=$a['nama'];
                        $harga=$a['harga'];
                   

                        
                ?>
                    <tr>
                        <td style="text-align:center;"><?php echo $no;?></td>
                        <td><?php echo $id_kategori;?></td>
                        <td><?php echo $nama;?></td>
                        <td><?php echo $harga;?></td>
                       

<td><span class="btn btn-info btn-sm" type="button" onClick="
  document.getElementById('id_kategori').value ='<?php echo $id_kategori ?>';

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
                    foreach ($tampil_jadwal->result_array() as $a):
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

      <?php
                    foreach ($tampil->result_array() as $a) {
                        $kode_tiket=$a['kode_tiket'];
                        $tanggal=$a['tanggal'];
                        $nama=$a['nama_penumpang'];
                        $alamat=$a['alamat'];
                        $nama_kategori=$a['nama'];
                        $jam=$a['jam'];
                        $tujuan=$a['tujuan'];
                        $harga=$a['harga'];
                        $status=$a['status'];
                        $kategori=$a['kategori'];
                        $id_jadwal=$a['id_jadwal'];
                       
                   
                    ?>


<form class="form-horizontal" method="post" action="<?php echo base_url().'index.php/Tiket_controller/update_Tiket'?>">
       
                <div class="card-body">
               


                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                    <input name="nama_penumpang" class="form-control" type="text" value="<?php echo $nama?>" required>
                    <input name="kode_tiket" class="form-control" type="hidden" value="<?php echo $kode_tiket?>">
                    </div>
                  </div>

                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                    <input name="alamat" class="form-control" type="text" value="<?php echo $alamat?>" required>
                    </div>
                  </div>

                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                    <div class="col-sm-10">
                  
                    <?php
                    if ($a['jenis_kelamin'] == 'Laki-laki') {
                      echo "
                        <label>
                          <input type='radio' name='jenis_kelamin' id='modallevel' value='Laki-laki' class='ace' checked/>
                          <span class='lbl'> Laki- Laki</span>
                        </label>&nbsp;
                        <label>
                          <input type='radio' name='jenis_kelamin' id='modallevel' class='ace' value='Perempuan' />
                          <span class='lbl'> Perempuan</span>
                        </label>
                        ";
                    } elseif ($a['jenis_kelamin'] == 'Perempuan') {
                      echo "
                        <label>
                          <input type='radio' name='jenis_kelamin' id='modallevel' value='Laki-laki' class='ace' />
                          <span class='lbl'> Laki- Laki</span>
                        </label>&nbsp;
                        <label>
                          <input type='radio' name='jenis_kelamin' id='modallevel' class='ace' value='Perempuan' checked/>
                          <span class='lbl'> Perempuan</span>
                        </label>
                        ";
                    }
                    ?>



                    </div>
                  </div>


                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">No.Hp/Telp</label>
                    <div class="col-sm-10">
                    <input name="nohp" class="form-control" type="text" value="<?php echo $a['nohp']?>" required>
                    </div>
                  </div>
                  
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Tanggal</label>
                    <div class="col-sm-10">
                    <input name="tanggal" class="form-control" type="date" value="<?php echo $a['tanggal']?>" required>
                    </div>
                  </div>



                         <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Id Kategori</label>
                    <div class="col-sm-10">
                      <table>
                        <tr>
                          <td width="1000">
                      <input class="form-control" type="text" name="kategori" id="id_kategori" value="<?php echo $a['kategori']?>" placholder/>
                          </td>
                          <td>
                        <a class="btn  btn-primary btnTambah" data-toggle="modal"data-target="#modal_jadwal_kategori"><i class="fa fa-search"></i></a> 
                          </td>
                        </tr>

                      </table>
                      
                    </div>
                  </div>


                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Id Jadwal</label>
                    <div class="col-sm-10">
                      <table>
                        <tr>
                          <td width="1000">
                      <input class="form-control" type="text" name="id_jadwal" id="id_jadwal" value="<?php echo $a['id_jadwal']?>" placholder/>
                          </td>
                          <td>
                        <a class="btn  btn-primary btnTambah" data-toggle="modal"data-target="#modal_jadwal"><i class="fa fa-search"></i></a> 
                          </td>
                        </tr>

                      </table>
                      
                    </div>
                  </div>




                  

        


                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Jam Berangkat</label>
                    <div class="col-sm-10">
                      <input class="form-control" type="text" name="jam" id="jam"  value="<?php echo $a['jam']?>"placholder/>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Tujuan</label>
                    <div class="col-sm-10">
                      <input class="form-control" type="text" name="tujuan" id="tujuan" value="<?php echo $a['tujuan']?>" placholder/>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Id Bus</label>
                    <div class="col-sm-10">
                      <input class="form-control" type="text" name="id_bus" id="id_bus" value="<?php echo $a['id_bus']?>" placholder/>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Nama Sopir</label>
                    <div class="col-sm-10">
                      <input class="form-control" type="text" name="nama_sopir" id="nama_sopir" value="<?php echo $a['nama_sopir']?>" placholder/>
                    </div>
                  </div>


                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Keterangan Barang Bawaan</label>
                    <div class="col-sm-10">
                      <textarea name="keterangan" id="" class="form-control" cols="30" rows="3"><?php echo $a['keterangan']?></textarea>
                    </div>
                  </div>
                  
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Harga</label>
                    <div class="col-sm-10">
                    <input name="harga" onkeyup="convertToRupiah(this);" id="harga" value="<?php echo $a['harga']?>" style="width:335px;" class="form-control" type="text" required >
                            <input name="status"value="1" class="form-control" type="hidden" >
                    </div>
                  </div>


                  <?php }?>

                <!-- /.col-lg-12 -->
            </div>
            </div>
            

              
                   <!-- /.card-body -->
          <div class="card-footer">
             <button type="submit" class="btn btn-primary"  > <span class="glyphicon  
glyphicon-floppy-saved"></span> Update</button> 
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