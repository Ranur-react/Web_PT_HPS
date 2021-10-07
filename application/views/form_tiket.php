<!-- <h4><font f="Verdana">Form Kepala Keluarga </font></h4><hr/>

 -->
          
 <section class="content">
  <div class="container-fluid">
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-lg-12">
        <div class="card card-info">
          <div class="card-header">
            <h3 class="card-title">
              Input Kepala Keluarga
            </h3>
          </div>
          <hr>
<br><br>
 


                          
<div id="modalCarikk_kepala" class="modal modal fade modal-xl" role="dialog" > 
<div class="modal-dialog modal-lg"> 
<!-- konten modal--> 
<div class="modal-content modal-xl"> 
<!-- heading modal --> 
<div class="modal-header"> 
<button type="button" class="close" data-dismiss="modal">&times;</button> 
<h4 class="modal-title">Cari Data Kepala Keluarga</h4> 
</div> 
<!-- body modal --> 
<div class="modal-body modal-xl" > 

<table width="100%" class="table table-striped table-bordered table-hover" >

<thead> 
                <tr>
                                        <th style="text-align:center;width:3px;">No</th>
                                      <th>NOKK</th>
                                     <th>NIK</th>
                                    <th>NAMA</th>
                                   
                                  
                  <th style="width:100px;text-align:center;">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                    $no=0;
                    foreach ($tampil_kk->result_array() as $a):
                        $no++;

                        $nokk=$a['nokk'];
                        $nik=$a['nik'];
                        $nama=$a['nama'];
                   

                        
                ?>
                    <tr>
                        <td style="text-align:center;"><?php echo $no;?></td>
                        <td><?php echo $nokk;?></td>
                        <td><?php echo $nik;?></td>
                        <td><?php echo $nama;?></td>
                       

<td><span class="btn btn-info btn-sm" type="button" onClick="
  document.getElementById('nokk').value ='<?php echo $nokk ?>';
  document.getElementById('nik_kk').value = '<?php echo $nik ?>';
  document.getElementById('nama_kk').value = '<?php echo $nama ?>';
 $('#modalCarikk_kepala').modal('hide');"></button><i class="glyphicon glyphicon-ok-sign"  
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




<div id="modalCarikk" class="modal modal fade modal-xl" role="dialog" > 
<div class="modal-dialog modal-lg"> 
<!-- konten modal--> 
<div class="modal-content modal-xl"> 
<!-- heading modal --> 
<div class="modal-header"> 
<button type="button" class="close" data-dismiss="modal">&times;</button> 
<h4 class="modal-title">Cari Data Anggota Keluarga</h4> 
</div> 
<!-- body modal --> 
<div class="modal-body modal-xl" > 

<table width="100%" class="table table-striped table-bordered table-hover" >

<thead> 
                <tr>
                                        <th style="text-align:center;width:3px;">No</th>
                                      <th>NOKK</th>
                                     <th>NIK</th>
                                    <th>NAMA</th>
                                    <th>STATUS</th>
                                    <th>PEKERJAAN</th>
                                   
                                  
                  <th style="width:100px;text-align:center;">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                    $no=0;
                    foreach ($tampil_keluarga->result_array() as $a):
                        $no++;

                        
                        $nik=$a['nik'];
                        $nama=$a['nama'];
                        $jenkel=$a['jenkel'];
                        $status=$a['status_keluarga'];
                        $pekerjaan=$a['pekerjaan'];
                   

                        
                ?>
                    <tr>
                        <td style="text-align:center;"><?php echo $no;?></td>
                        
                        <td><?php echo $nik;?></td>
                        <td><?php echo $nama;?></td>
                        <td><?php echo $jenkel;?></td>
                        <td><?php echo $status;?></td>
                        <td><?php echo $pekerjaan;?></td>
                       

<td><span class="btn btn-info btn-sm" type="button" onClick="
 
  document.getElementById('nik').value = '<?php echo $nik ?>';
  document.getElementById('nama').value = '<?php echo $nama ?>';
   document.getElementById('jenkel').value = '<?php echo $jenkel ?>';
    document.getElementById('status').value = '<?php echo $status ?>';
     document.getElementById('pekerjaan').value ='<?php echo $pekerjaan ?>';
 $('#modalCarikk').modal('hide');"></button><i class="glyphicon glyphicon-ok-sign"  
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




          <form class="form-horizontal" method="post" action="<?php echo base_url().'index.php/Data_keluarga_kontroler/tambah'?>">
       
                <div class="card-body">
               

                         <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">NO KK</label>
                    <div class="col-sm-10">
                      <table>
                        <tr>
                          <td width="1000">
                      <input class="form-control" type="text" name="nokk" id="nokk" placholder/>
                          </td>
                          <td>
                        <a class="btn  btn-primary btnTambah" data-toggle="modal"data-target="#modalCarikk_kepala"><i class="fa fa-search"></i></a> 
                          </td>
                        </tr>

                      </table>
                      
                    </div>
                  </div>




                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">NIK Kepala Keluarga</label>
                    <div class="col-sm-10">
                      <input class="form-control" type="text" name="nik_kk" id="nik_kk" placholder/>
                    </div>
                  </div>

        


                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Nama Kepala Keluarga</label>
                    <div class="col-sm-10">
                      <input class="form-control" type="text" name="nama_kk" id="nama_kk" placholder/>
                    </div>
                  </div>

<h4 class="card-title">
              Tambah Anggota Keluarga
            </h4>
<hr>

             <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">NIK</label>
                    <div class="col-sm-10">
                      <table>
                        <tr>
                          <td width="1000">
                      <input class="form-control" type="text" name="nik" id="nik" placholder/>
                          </td>
                          <td>
                        <a class="btn  btn-primary btnTambah" data-toggle="modal"data-target="#modalCarikk"><i class="fa fa-search"></i></a> 
                          </td>
                        </tr>

                      </table>
                      
                    </div>
                  </div>



                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                      <input class="form-control" type="text" name="nama" id="nama" placholder/>
                    </div>
                  </div>



                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                    <div class="col-sm-10">
                      <!-- <input class="form-control" type="text" name="jenkel" id="jenkel" placholder/> -->
                      <select name="jenkel" id="jenkel" class="form-control">
                      <option value="">-Pilih-</option>
                      <option value="Laki-Laki">Laki-Laki</option>
                      <option value="Perempuan">Perempuan</option>
                      </select>
           
                    </div>
                  </div>



                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Status Keluarga</label>
                    <div class="col-sm-10">
                      <!-- <input class="form-control" type="text" name="status" id="status" placholder/> -->
                      <select name="status" id="status" class="form-control">
                      <option value="">-Pilih-</option>
                      <option value="Ibu">Ibu</option>
                      <option value="Anak">Anak</option>
                      </select>
                    </div>
                  </div>


                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Pekerjaan</label>
                    <div class="col-sm-10">

                      <table>
                        <tr>
                          <td width="1000">
                                          <!-- <input class="form-control" type="text" name="pekerjaan" id="pekerjaan" placholder/> -->
                                          <select name="pekerjaan" id="pekerjaan" class="form-control">
                      <option value="">-Pilih-</option>
                      <option value="PNS">PNS</option>
                      <option value="Petani">Petani</option>
                      <option value="Wiraswasta">Wiraswasta</option>
                      <option value="Mahasiswa">Mahasiswa</option>
                      <option value="Pelajar">Pelajar</option>
                      <option value="Lain-lain">Lain-lain</option>
                      </select>
                          </td>
                          <td>
                         <button type="submit" class="btn btn-primary btnSimpan" name="ok" > <span class="fa  
                    fa-floppy-saved"></span> Oke</button>  </td> 
                          </td>
                        </tr>

                      </table>

                    </div>
                  </div>

  <div class="panel-heading">
                            Tabel Data Keluarga
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th style="text-align:center;width:3px;">No</th>
              
                                     <th>NIK</th>
                                    <th>NAMA</th>
                                    <th>JENIS KELAMIN</th>
                                    <th>STATUS</th>
                                    <th>PEKERJAAN</th>
                                  
                  <th style="width:100px;text-align:center;">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                    $no=0;
                    foreach ($tampil_bantu->result_array() as $a):
                        $no++;

                      
                        $nik=$a['nik'];
                        $nama=$a['nama'];
                        $jenkel=$a['jenkel'];
                        $status=$a['status'];
                        $pekerjaan=$a['pekerjaan'];
                      
                        
                ?>
                    <tr>
                        <td style="text-align:center;"><?php echo $no;?></td>
                      
                        <td><?php echo $nik;?></td>
                        <td><?php echo $nama;?></td>
                        <td><?php echo $jenkel;?></td>
                        <td><?php echo $status;?></td>
                        <td><?php echo $pekerjaan;?></td>
                    
                
                    
                        
                        <td style="text-align:center;">
                            
                            <a class="btn btn-xs btn-danger" href="<?php echo site_url('Data_keluarga_kontroler/hapus_data_bantu/'.$a['id_bantu'])?>" data-toggle="modal" title="Hapus"><span class="fa fa-close"></span> Hapus</a>
                        </td>
                    </tr>
                <?php endforeach;?>
                                </tbody>
                            </table>
                            
                </div>
                <!-- /.col-lg-12 -->
            </div>

              
                   <!-- /.card-body -->
          <div class="card-footer">
             <button type="submit" class="btn btn-primary btnSimpan" name="simpan" > <span class="glyphicon  
glyphicon-floppy-saved"></span> Simpan</button> 
            <a href="<?php echo base_url().'index.php/Data_keluarga_kontroler'?>" class="btn btn-default float-right">Cancel</a>
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