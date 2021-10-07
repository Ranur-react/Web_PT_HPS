<div align="right">
 <!-- <a href="#" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#smallModal">Tambah Tiket</a></div>&nbsp -->
 <a href="<?php echo base_url('Tiket_controller/form_tiket_user')?>" class="btn btn-sm btn-primary" >Tambah Tiket</a></div>

<div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Tabel Data Tiket
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th style="text-align:center;width:3px;">No</th>
                                      
									<th>ID Tiket</th>
									<th>Tanggal</th>
									<th>Nama</th>
                                    <th>Kategori</th>
                                    <th>Jadwal</th>
                                    <th>Tujuan</th>
                             
                                     <th>Harga</th>
                                     <th>Status</th>
                                   

									<!-- <th style="width:100px;text-align:center;">Aksi</th> -->
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                    <?php 
                    $no=0;
             
                    foreach ($tampil->result_array() as $a):
                        $no++;
                        $kode_tiket=$a['kode_tiket'];
                        $tanggal=$a['tanggal'];
                        $nama_kategori=$a['nama_penumpang'];
                        $nama=$a['nama'];
                      
                        $jam=$a['jam'];
                        $tujuan=$a['tujuan'];
                   
                        $harga=$a['harga'];
                        $status=$a['status'];
                      
                        
                ?>
                    <tr>
                        <td style="text-align:center;"><?php echo $no;?></td>
						<td><?php echo $kode_tiket;?></td>
                        <td><?php echo $tanggal;?></td>
                       
                        <td><?php echo $nama_kategori;?></td>
                        <td><?php echo $nama;?></td>
                        <td><?php echo $jam;?></td>
                        <td><?php echo $tujuan;?></td>
                 
                        <td><?php echo $harga;?></td>
                        <!-- <td><?php echo $status;?></td> -->
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
                  
                     
                        
                        <!-- <td style="text-align:center;">
                        <a class="btn btn-xs btn-info" href="<?php echo site_url('Tiket_controller/form_edit_tiket/'.$kode_tiket)?>" data-toggle="modal" title="Edit"><span class="fa fa-edit"></span> Edit</a>
                            <a class="btn btn-xs btn-danger" href="#modalHapusTiket<?php echo $kode_tiket?>" data-toggle="modal" title="Hapus"><span class="fa fa-close"></span> Hapus</a>
                        </td> -->
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
                            <h4 class="modal-title" id="defaultModalLabel">Tambah Tiket</h4>
                        </div>
				<form class="form-horizontal" method="post" action="<?php echo base_url().'index.php/Tiket_controller/tambah_Tiket'?>">
                <div class="modal-body">
<!--
					<div class="form-group">
                        <label class="control-label col-xs-3" >Kode Tiket</label>
                        <div class="col-xs-9">
						<div class="form-line">
                            <input name="kode_tiket" class="form-control" type="text" required>
                        </div>
						</div>
                    </div>
				-->

                   
                            
            
                            <div class="form-group">
                        <label class="control-label col-xs-3" >nama</label>
                        <div class="col-xs-9">
                        <div class="form-line">
                            <input name="nama" class="form-control" type="text" required>
                        </div>
                        </div>
                        </div>

                            <div class="form-group">
                        <label class="control-label col-xs-3" >Alamat</label>
                        <div class="col-xs-9">
                        <div class="form-line">
                            <input name="alamat" class="form-control" type="text" required>
                        </div>
                        </div>
                        </div>

                            <div class="form-group">
                        <label class="control-label col-xs-3" >Jenis Kelamin</label>
                        <div class="col-xs-9">
                        <div class="form-line">
                           

                     
                     <label>
                          <input type='radio' name='jenis_kelamin' id='modallevel' value='Laki-laki' class='ace' checked/>
                          <span class='lbl'> Laki-Laki</span>
                        </label>&nbsp;
                        <label>
                          <input type='radio' name='jenis_kelamin' id='modallevel' class='ace' value='Perempuan' />
                          <span class='lbl'> Perempuan</span>
                        </label>

                     </table>
                        </div>
                        </div>
                        </div>
                            <div class="form-group">
                        <label class="control-label col-xs-3" >Nohp</label>
                        <div class="col-xs-9">
                        <div class="form-line">
                            <input name="nohp" class="form-control" type="text" required>
                        </div>
                        </div>
                        </div>
                      
                         <div class="form-group">
                        <label class="control-label col-xs-3" >Tanggal berangkat</label>
                        <div class="col-xs-9">
                        <div class="form-line">
                            <input name="tanggal" class="form-control" type="date" required>
                        </div>
                        </div>
                        </div>

                          
                        <div class="form-group">
                        <label class="control-label col-xs-3" >Kategori</label>
                        <div class="col-xs-9">
                        <div class="form-line">
                              <select  class="form-control" name="kategori" id="id_kategori" onclick="change1(this.value)">
  <option selected="selected">-Pilih-</option>
  <p class="help-block"></p> 
  <?php

//$result = mysqli_query("select * from No_Register"); 
 $result=$this->db->query("SELECT * FROM tb_kategori");
 $jx = "var B = new Array();\n";  
    foreach($result->result_array() as $row){  
      $id_kategori=$row['id_kategori'];   
      
echo '<option value="' . $row['id_kategori'] . '">' . $row['id_kategori'] . '</option>';    
         

           
        $jx .= "B['" . $row['id_kategori'] . "'] = {harga:'".addslashes($row['harga']). "'};\n";   
    }      

   ?>
</select>


    <script type="text/javascript">   
    <?php echo $jx; ?> 
    function change1(id_kategori){ 
    document.getElementById('harga').value = B[id_kategori].harga; 
    
      

    }; 
    </script>
</div>
</div>
</div>
               

                          <div class="form-group">
                        <label class="control-label col-xs-3" >ID Jadwal</label>
                        <div class="col-xs-9">
                        <div class="form-line">
                              <select  class="form-control" name="id_jadwal" id="id_jadwal" onclick="change(this.value)">
  <option selected="selected">-Pilih-</option>
  <p class="help-block"></p> 
  <?php


//$result = mysqli_query("select * from No_Register"); 
 $result=$this->db->query("SELECT * FROM tb_jadwal");
 $js = "var A = new Array();\n";  
    foreach($result->result_array() as $row){  
      $id_jadwal=$row['id_jadwal'];   
      
echo '<option value="' . $row['id_jadwal'] . '">' . $row['id_jadwal'] . '</option>';    
         

           
        $js .= "A['" . $row['id_jadwal'] . "'] = {jam:'".addslashes($row['jam']). "',tujuan:'".addslashes($row['tujuan']). "',id_bus:'".addslashes($row['id_bus']). "',nama_sopir:'".addslashes($row['nama_sopir']). "'};\n";   
    }      

   ?>
</select>


    <script type="text/javascript">   
    <?php echo $js; ?> 
    function change(id_jadwal){ 
    document.getElementById('jam').value = A[id_jadwal].jam; 
     document.getElementById('tujuan').value = A[id_jadwal].tujuan; 
    
      document.getElementById('id_bus').value = A[id_jadwal].id_bus; 
      document.getElementById('nama_sopir').value = A[id_jadwal].nama_sopir; 
      

    }; 
    </script>
</div>
</div>
</div>


                        <div class="form-group">
                        <label class="control-label col-xs-3" >Jam Berangkat</label>
                        <div class="col-xs-9">
                        <div class="form-line">
                            <input name="jam" id="jam" class="form-control" type="text" readonly required>
                        </div>
                        </div>
                        </div>

                         <div class="form-group">
                        <label class="control-label col-xs-3" >Tujuan</label>
                        <div class="col-xs-9">
                        <div class="form-line">
                            <input name="tujuan" id="tujuan" class="form-control" type="text" readonly required>
                        </div>
                        </div>
                        </div>


                         <div class="form-group">
                        <label class="control-label col-xs-3" >Id Bus</label>
                        <div class="col-xs-9">
                        <div class="form-line">
                            <input name="id_bus" id="id_bus" class="form-control" type="text" readonly required>
                        </div>
                        </div>
                        </div>

                         <div class="form-group">
                        <label class="control-label col-xs-3" >Nama Sopir</label>
                        <div class="col-xs-9">
                        <div class="form-line">
                            <input name="nama_sopir" id="nama_sopir" class="form-control" type="text" readonly required>
                        </div>
                        </div>
                        </div>





                        <!-- <div class="form-group">
                        <label class="control-label col-xs-3" >Bangku</label>
                        <div class="col-xs-9">
                        <div class="form-line">
                            <input name="bangku" id="bangku" class="form-control" type="text" readonly required>
                        </div>
                        </div>
                        </div> -->

                        
                     


                        <div class="form-group">
                        <label class="control-label col-xs-3" >Keterangan Barang Bawaan</label>
                        <div class="col-xs-9">
                        <div class="form-line">
                            <textarea name="keterangan" id="" class="form-control" cols="30" rows="3"></textarea>
                        </div>
                        </div>
                        </div>

                          

                           <div class="form-group">
                        <label class="control-label col-xs-3" >harga</label>
                        <div class="col-xs-9">
                        <div class="form-line">
                            <input name="harga" onkeyup="convertToRupiah(this);" id="harga" style="width:335px;" class="form-control" type="text" required >
                            <input name="status"value="0" class="form-control" type="hidden" >
                      
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
                        $kode_tiket=$a['kode_tiket'];
                        $tanggal=$a['tanggal'];
                        $nama=$a['nama'];
                        $alamat=$a['alamat'];
                        $nama_kategori=$a['nama'];
                        $jam=$a['jam'];
                        $tujuan=$a['tujuan'];
                   
                        $harga=$a['harga'];
                        $status=$a['status'];
                        $kategori=$a['kategori'];
                        $id_jadwal=$a['id_jadwal'];
                       
                   
                    ?>
                <div id="modalEditTiket<?php echo $kode_tiket?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title" id="myModalLabel">Edit Tiket</h3>
                    </div>
                    <form class="form-horizontal" method="post" action="<?php echo base_url().'index.php/Tiket_controller/update_Tiket'?>">
                        <div class="modal-body">
                            <input name="kode_tiket" type="hidden" value="<?php echo $kode_tiket;?>">
						
                   
            
                            <div class="form-group">
                        <label class="control-label col-xs-3" >nama</label>
                        <div class="col-xs-9">
                        <div class="form-line">
                            <input name="nama" class="form-control" type="text" value="<?php echo $nama?>" required>
                        </div>
                        </div>
                        </div>

                            <div class="form-group">
                        <label class="control-label col-xs-3" >Alamat</label>
                        <div class="col-xs-9">
                        <div class="form-line">
                            <input name="alamat" class="form-control" type="text" value="<?php echo $alamat?>" required>
                        </div>
                        </div>
                        </div>

                            <div class="form-group">
                        <label class="control-label col-xs-3" >Jenis Kelamin</label>
                        <div class="col-xs-9">
                        <div class="form-line">
                           

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
                        </div>
                            <div class="form-group">
                        <label class="control-label col-xs-3" >Nohp</label>
                        <div class="col-xs-9">
                        <div class="form-line">
                            <input name="nohp" class="form-control" type="text" value="<?php echo $a['nohp']?>" required>
                        </div>
                        </div>
                        </div>
                      
                         <div class="form-group">
                        <label class="control-label col-xs-3" >Tanggal berangkat</label>
                        <div class="col-xs-9">
                        <div class="form-line">
                            <input name="tanggal" class="form-control" type="date" value="<?php echo $a['tanggal']?>" required>
                        </div>
                        </div>
                        </div>

                          
                        <div class="form-group">
                        <label class="control-label col-xs-3" >Kategori</label>
                        <div class="col-xs-9">
                        <div class="form-line">
                              <select  class="form-control" name="kategori" id="id_kategori" onclick="change5(this.value)">
  <option >-Pilih-</option>
  <p class="help-block"></p> 
<?php

//$result = mysqli_query("select * from No_Register"); 
 $result=$this->db->query("SELECT * FROM tb_kategori");
 $jx = "var kategori = new Array();\n";  
    foreach($result->result_array() as $row){  
      $id_kategori=$row['id_kategori']; 
      
      if ($a['kategori']==$row['id_kategori']) {
        $select="selected";
       }else{
        $select="";
       }
      
// echo '<option  $select value="' . $row['id_kategori'] . '">' . $row['id_kategori'] . '</option>'; 

echo "<option  $select value=".$row['id_kategori'].">".$row['id_kategori']."</option>";
         

           
        $jx .= "kategori['" . $row['id_kategori'] . "'] = {harga:'".addslashes($row['harga']). "'};\n";   
    }      

   ?>

   

</select>


    <script type="text/javascript">   
    <?php echo $jx; ?> 
    function change5(id_kategori){ 
    document.getElementById('harga1').value = B[id_kategori].harga; 
    
      

    }; 
    </script>
</div>
</div>
</div>
               

                          <div class="form-group">
                        <label class="control-label col-xs-3" >ID Jadwal</label>
                        <div class="col-xs-9">
                        <div class="form-line">
                              <select  class="form-control" name="id_jadwal" id="id_jadwal" onclick="changejadwal(this.value)">
  <option >-Pilih-</option>
  <p class="help-block"></p> 
  <?php


//$result = mysqli_query("select * from No_Register"); 
 $result=$this->db->query("SELECT * FROM tb_jadwal");
 $js = "var jadwal = new Array();\n";  
    foreach($result->result_array() as $row){  
      $id_jadwal=$row['id_jadwal'];   
      if ($a['id_jadwal']==$row['id_jadwal']) {
        $select="selected";
       }else{
        $select="";
       }

//  echo '<option selected value="' . $row['id_jadwal'] . '">' . $row['id_jadwal'] . '</option>';  
echo "<option  $select value=".$row['id_jadwal'].">".$row['id_jadwal']."</option>";  
         

           
        $js .= "jadwal['" . $row['id_jadwal'] . "'] = {jam:'".addslashes($row['jam']). "',tujuan:'".addslashes($row['tujuan']). "',id_bus:'".addslashes($row['id_bus']). "',nama_sopir:'".addslashes($row['nama_sopir']). "'};\n";   
    }      

   ?>
</select>


    <script type="text/javascript">   
    <?php echo $js; ?> 
    function changejadwal(id_jadwal){ 
    document.getElementById('jam1').value = A[id_jadwal].jam; 
     document.getElementById('tujuan1').value = A[id_jadwal].tujuan; 
    
      document.getElementById('id_bus1').value = A[id_jadwal].id_bus; 
      document.getElementById('nama_sopir1').value = A[id_jadwal].nama_sopir; 
      

    }; 
    </script>
</div>
</div>
</div>


                        <div class="form-group">
                        <label class="control-label col-xs-3" >Jam Berangkat</label>
                        <div class="col-xs-9">
                        <div class="form-line">
                            <input name="jam" id="jam1" class="form-control" type="text"value="<?php echo $a['jam']?>" readonly required>
                        </div>
                        </div>
                        </div>

                         <div class="form-group">
                        <label class="control-label col-xs-3" >Tujuan</label>
                        <div class="col-xs-9">
                        <div class="form-line">
                            <input name="tujuan" id="tujuan1" class="form-control"value="<?php echo $a['tujuan']?>" type="text" readonly required>
                        </div>
                        </div>
                        </div>


                         <div class="form-group">
                        <label class="control-label col-xs-3" >Id Bus</label>
                        <div class="col-xs-9">
                        <div class="form-line">
                            <input name="id_bus" id="id_bus1" class="form-control"value="<?php echo $a['id_bus']?>" type="text" readonly required>
                        </div>
                        </div>
                        </div>

                         <div class="form-group">
                        <label class="control-label col-xs-3" >Nama Sopir</label>
                        <div class="col-xs-9">
                        <div class="form-line">
                            <input name="nama_sopir" id="nama_sopir1"value="<?php echo $a['nama_sopir']?>" class="form-control" type="text" readonly required>
                        </div>
                        </div>
                        </div>





                        <!-- <div class="form-group">
                        <label class="control-label col-xs-3" >Bangku</label>
                        <div class="col-xs-9">
                        <div class="form-line">
                            <input name="bangku" id="bangku" class="form-control" type="text" readonly required>
                        </div>
                        </div>
                        </div> -->

                        
                     


                        <div class="form-group">
                        <label class="control-label col-xs-3" >Keterangan Barang Bawaan</label>
                        <div class="col-xs-9">
                        <div class="form-line">
                            <textarea name="keterangan" id="" class="form-control" cols="30" rows="3"><?php echo $a['keterangan']?></textarea>
                        </div>
                        </div>
                        </div>

                          

                           <div class="form-group">
                        <label class="control-label col-xs-3" >harga</label>
                        <div class="col-xs-9">
                        <div class="form-line">
                            <input name="harga" onkeyup="convertToRupiah(this);" value="<?php echo $a['harga']?>" id="harga1" style="width:335px;" class="form-control" type="text" required >
                            <input name="status"value="0" class="form-control" type="hidden" >
                      
                        </div>
                        </div>
                        </div> 


                    
                    
                </div>
                        <div class="modal-footer">
                            <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                            <button type="submit" class="btn btn-info">Update</button>
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
                        $kode_tiket=$a['kode_tiket'];
                        $tanggal=$a['tanggal'];
                    ?>
                <div id="modalHapusTiket<?php echo $kode_tiket?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">                        
                        <h3 class="modal-title" id="myModalLabel">Hapus Tiket</h3>
                    </div>
                    <form class="form-horizontal" method="post" action="<?php echo base_url().'index.php/Tiket_controller/hapus_Tiket'?>">
                        <div class="modal-body">
                            <p>Apakah anda yakin akan menghapus data ini ?</p>
                                    <input name="kode_tiket" type="hidden" value="<?php echo $kode_tiket; ?>">
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

        <!--END MODAL-->

     <script src="<?php echo base_url().'assets/js/jquery.js'?>"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url().'assets/js/rupiah.js'?>"></script>
 
  



    <!-- /.container -->
	
           
</script>
    </section>
