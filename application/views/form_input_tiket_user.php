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
              Input Data Pribadi
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




      <div id="modal_kursi" class="modal modal fade modal-xl" role="dialog" > 
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
									<th>Kursi</th>
							
                                   
                                  
                  <th style="width:100px;text-align:center;">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                    $no=0;
                    foreach ($notin_kursi_bayangan->result_array() as $a):
                        $no++;

                        
                        $id_kursi=$a['id_kursi'];
                        $kursi=$a['kursi'];
                   

                        
                ?>
                    <tr>
                        <td style="text-align:center;"><?php echo $no;?></td>
                        
                        <td><?php echo $id_kursi;?></td>
						<td><?php echo $kursi;?></td>
				
                       

<td><span class="btn btn-info btn-sm" type="button" onClick="
 

  document.getElementById('kursi').value = '<?php echo $kursi ?>';
 
  
 $('#modal_kursi').modal('hide');"></button><i class="glyphicon glyphicon-ok-sign"  
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




      <form class="form-horizontal" method="post" action="<?php echo base_url().'index.php/Tiket_controller/tambah_tiket_user'?>">
       
       <div class="card-body">
      


       <div class="form-group row">
           <label for="inputPassword3" class="col-sm-2 col-form-label">Nama</label>
           <div class="col-sm-10">
             <input class="form-control" type="text" name="nama_penumpang" value="<?php echo $this->session->userdata('ses_nama');?>"  placholder/>
           </div>
         </div>

       <div class="form-group row">
           <label for="inputPassword3" class="col-sm-2 col-form-label">Alamat</label>
           <div class="col-sm-10">
             <input class="form-control" type="text" name="alamat" id="alamat" value="<?php echo $this->session->userdata('alamat');?>" placholder/>
           </div>
         </div>

       <div class="form-group row">
           <label for="inputPassword3" class="col-sm-2 col-form-label">Jenis Kelamin</label>
           <div class="col-sm-10">
           <!-- <label>
                 <input type='radio' name='jenis_kelamin' id='modallevel' value='Laki-laki' class='ace' checked/>
                 <span class='lbl'> Laki-Laki</span>
               </label>&nbsp;
               <label>
                 <input type='radio' name='jenis_kelamin' id='modallevel' class='ace' value='Perempuan' />
                 <span class='lbl'> Perempuan</span>
               </label> -->


               <?php
           if ($this->session->userdata('jenis_kelamin') == 'Laki-Laki') {
             echo "
               <label>
                 <input type='radio' name='jenis_kelamin' id='modaljenis_kelamin' value='Laki-Laki' class='ace' checked/>
                 <span class='lbl'> Laki-Laki</span>
               </label>&nbsp;
               <label>
                 <input type='radio' name='jenis_kelamin' id='modaljenis_kelamin' class='ace' value='Perempuan' />
                 <span class='lbl'> Perempuan</span>
               </label>
               ";
           } elseif ($this->session->userdata('jenis_kelamin') == 'Perempuan') {
             echo "
               <label>
                 <input type='radio' name='jenis_kelamin' id='modaljenis_kelamin' value='Laki-Laki' class='ace' />
                 <span class='lbl'> Laki-Laki</span>
               </label>&nbsp;
               <label>
                 <input type='radio' name='jenis_kelamin' id='modaljenis_kelamin' class='ace' value='Perempuan' checked/>
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
             <input class="form-control" type="text" name="nohp" id="nohp" value="<?php echo $this->session->userdata('telepon');?>" placholder/>
           </div>
         </div>
         
         <div class="form-group row">
           <label for="inputPassword3" class="col-sm-2 col-form-label">Tanggal</label>
           <div class="col-sm-10">
             <input class="form-control" type="date" name="tanggal" id="tanggal" placholder/>
           </div>
         </div>



                  <div class="card-header">
            <h3 class="card-title">
              Input Data Tiket
            </h3>
          </div>
          <hr>
<br><br>

                         <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Id Kategori</label>
                    <div class="col-sm-10">
                      <table>
                        <tr>
                          <td width="1000">
                      <input class="form-control" type="text" name="kategori" id="id_kategori" placholder/>
                          </td>
                          <td>
                        <a class="btn  btn-primary btnTambah" data-toggle="modal"data-target="#modal_jadwal_kategori"><i class="fa fa-search"></i></a> 
                          </td>
                        </tr>

                      </table>
                      
                    </div>
                  </div>


                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Id kursi</label>
                    <div class="col-sm-10">
                      <table>
                        <tr>
                          <td width="1000">
                      <input class="form-control" type="text" name="kursi" id="kursi" placholder/>
                          </td>
                          <td>
                        <a class="btn  btn-primary btnTambah" data-toggle="modal"data-target="#modal_kursi"><i class="fa fa-search"></i></a> 
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
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Keterangan Barang Bawaan</label>
                    <div class="col-sm-10">
                      <textarea name="keterangan" id="" class="form-control" cols="30" rows="3"></textarea>
                    </div>
                  </div>


                  

<script>
function startCalc()
{interval=setInterval("calc()",1)}
function calc()
{
   one=document.formD.harga.value;
two=document.formD.jumlah_tiket.value;
document.formD.total.value= (two*1)*(one*1)
}
function stopCalc(){clearInterval(interval)}
</script>
        

             
<!-- <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Jumlah Barang</label>
                    <div class="col-sm-10">
                    <input name="jumlah" onkeyup="convertToRupiah(this);" id="jumlah" onFocus="startCalc();"  onBlur="stopCalc();"style="width:335px;" class="form-control" type="text" required >
                            <input name="status"value="0" class="form-control" type="hidden" >
                    </div>
                  </div> -->
                  

                  <!-- <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Harga</label>
                    <div class="col-sm-10">
                    <input name="harga" onkeyup="convertToRupiah(this);" id="harga" onFocus="startCalc();"  onBlur="stopCalc();"style="width:335px;" class="form-control" type="text" required >
                            <input name="status"value="0" class="form-control" type="hidden" >
                    </div>
                  </div> -->




                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Harga</label>
                    <div class="col-sm-10">
                      <table>
                        <tr>
                          <td width="1000">
                          <input name="harga" onkeyup="convertToRupiah(this);" id="harga" onFocus="startCalc();"  onBlur="stopCalc();"style="width:335px;" class="form-control" type="text"  >
                            <input name="status"value="0" class="form-control" type="hidden" >
                          </td>
                          <td>
                        <!-- <a class="btn  btn-primary btnTambah" data-toggle="modal"data-target="#"><i class="fa fa-plus"></i></a>  -->
                        <input type="submit" class="btn  btn-primary btnTambah fa fa-plus" name="ok"value="ADD" >
                          </td>
                        </tr>
                      </table>
                    </div>
                  </div>



                  <div class="panel-heading">
                            Tabel Data Temp
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th style="text-align:center;width:3px;">No</th>
              
                                     <th>KODE TIKET</th>
                                    <th>KATEGORI</th>
                                    <th>KURSI</th>
                               
                                    <th>HARGA</th>
                                  
                  <th style="width:100px;text-align:center;">AKSI</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                    $no=0;
                    $jumlah=0;
                    foreach ($tampil_temp->result_array() as $a):
                        $no++;
                        $jumlah+= $a['harga'];
                      
                        $kode_tiket=$a['kode_tiket'];
                        $kategori=$a['nama'];
                        $id_kursi=$a['kursi'];
                        $harga=$a['harga'];
                        // $total=$a['total'];

                ?>
                    <tr>
                        <td style="text-align:center;"><?php echo $no;?></td>
                      
                        <td><?php echo $kode_tiket;?></td>
                        <td><?php echo $kategori;?></td>
                        <td><?php echo $id_kursi;?></td>
                        <td><?php echo $harga;?></td>
                        <!-- <td><?php echo $total;?></td> -->
                        <td style="text-align:center;">
                            
                            <a class="btn btn-xs btn-danger" href="<?php echo site_url('Tiket_controller/hapus_tiket_temp/'.$a['kode_tiket'])?>" data-toggle="modal" title="Hapus"><span class="fa fa-close"></span> Hapus</a>
                        </td>
                    </tr>
                    
                <?php endforeach;?>
                <tr>
        <td colspan="4" style="text-align:center;"><b>Total</b></td>
        <td style="text-align:right;"><b><?php echo 'Rp '.number_format($jumlah);?></b></td>
    </tr>
                                </tbody>
                            </table>
                            
                </div>
                <!-- /.col-lg-12 -->
            </div>



                <!-- /.col-lg-12 -->
            </div>
            </div>





            

              
                   <!-- /.card-body -->
          <div class="card-footer">
             <button type="submit" class="btn btn-primary btnSimpan" name="simpan" > <span class="glyphicon  
glyphicon-floppy-saved"></span> Simpan</button> 
            <a href="<?php echo base_url().'Home/Utama'?>" class="btn btn-default float-right">Cancel</a>
           
          </div>
          <!-- /.card-footer -->

          </form>
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