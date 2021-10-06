<div align="right">
 <a href="#" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#smallModal">Tambah Pelanggan</a></div>&nbsp
<div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Tabel Data Pelanggan
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th style="text-align:center;width:3px;">No</th>
									<th>ID Pelanggan</th>
									<th>Nama Pelanggan</th>
                                    <th>alamat</th>
                                    <th>jenis kelamin</th>
                                    <th>nohp</th>
                                    <th>tanggal berangkat</th>
                                    <th>tanggal pesan</th>
                                    <!--
                                    <th>kode mobil</th>
                                    <th>kode jadwal</th>
                                    <th>kode sopir</th>-->
                                     <th>harga</th>
                                     <th>keterangan</th>
                                   

									<th style="width:100px;text-align:center;">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                    $no=0;
                    foreach ($tampil->result_array() as $a):
                        $no++;
                        $kodepelanggan=$a['kodepelanggan'];
                        $namapelanggan=$a['namapelanggan'];
                        $alamat=$a['alamat'];
                        $jeniskelamin=$a['jeniskelamin'];
                        $nohp=$a['nohp'];
                        $tanggalberangkat=$a['tanggalberangkat'];
                        $tanggalpesan=$a['tanggalpesan'];
                        /*
                        $id_jadwal=$a['id_jadwal'];
                        $kodejadwal=$a['kodejadwal'];
                        $id_kategori=$a['id_kategori'];*/
                        $harga=$a['harga'];
                        $keterangan=$a['keterangan'];
                       
                        
                ?>
                    <tr>
                        <td style="text-align:center;"><?php echo $no;?></td>
						<td><?php echo $kodepelanggan;?></td>
                        <td><?php echo $namapelanggan;?></td>
                        <td><?php echo $alamat;?></td>
                        <td><?php echo $jeniskelamin;?></td>
                        <td><?php echo $nohp;?></td>
                        <td><?php echo $tanggalberangkat;?></td>
                        <td><?php echo $tanggalpesan;?></td>
                        <!--
                        <td><?php echo $id_jadwal;?></td>
                        <td><?php echo $kodejadwal;?></td>
                        <td><?php echo $id_kategori;?></td>-->
                        <td><?php echo $harga;?></td>
                             <td>
                                     <?php  if ( $a['keterangan']=='1'){
   
        echo '
       <a class="btn btn-primary"  title="Berangkat" 
       href="#modalEditPelanggan(\''.$kodepelanggan.'\');">
       <i class="icon-check icon-white"> </i>  Boking</a>
';

       }elseif ( $a['keterangan']=='2'){
           
       


 echo '
       <button class="btn btn-success" title="Batal Berangkat" onclick="return modalEditPelanggan(\''.$kodepelanggan.'\');">
      </i>  Berangkat</button>
  
      ';
       }


       else{

 echo '
       <button class="btn btn-danger" title="Batal Berangkat" onclick="return modalEditPelanggan(\''.$kodepelanggan.'\');">
      </i>  Batal berangkat</button>
  
      ';
       }
    ?>

                  </td>
                  
                     
                        
                        <td style="text-align:center;">
                            <a class="btn btn-xs btn-info" href="#modalEditPelanggan<?php echo $kodepelanggan?>" data-toggle="modal" title="Edit"><span class="fa fa-edit"></span> Edit</a>
                            <a class="btn btn-xs btn-danger" href="#modalHapusPelanggan<?php echo $kodepelanggan?>" data-toggle="modal" title="Hapus"><span class="fa fa-close"></span> Hapus</a>
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
                            <h4 class="modal-title" id="defaultModalLabel">Tambah Pelanggan</h4>
                        </div>
				<form class="form-horizontal" method="post" action="<?php echo base_url().'index.php/Pelanggan_controller/tambah_Pelanggan'?>">
                <div class="modal-body">
<!--
					<div class="form-group">
                        <label class="control-label col-xs-3" >Kode Pelanggan</label>
                        <div class="col-xs-9">
						<div class="form-line">
                            <input name="kodepelanggan" class="form-control" type="text" required>
                        </div>
						</div>
                    </div>
				-->
                    <div class="form-group">
                        <label class="control-label col-xs-3" >Nama Pelanggan</label>
                        <div class="col-xs-9">
						<div class="form-line">
                            <input name="namapelanggan" class="form-control" type="text" required>
                        </div>
                        </div>
                        </div>
                            <div class="form-group">
                        <label class="control-label col-xs-3" >alamat</label>
                        <div class="col-xs-9">
                        <div class="form-line">
                            <input name="alamat" class="form-control" type="text" required>
                        </div>
                        </div>
                        </div>
                            <div class="form-group">
                        <label class="control-label col-xs-3" >jeniskelamin</label>
                        <div class="col-xs-9">
                        <div class="form-line">
                           

                             <select name="jeniskelamin" widht="50" class="selectpicker show-tick form-control" data-live-search="true" data-placeholder="Pilih...">
                      <option selected="selected">-Pilih-</option>
                      <option value="Laki-laki">Laki-laki</option>
                      <option value="Perempuan">Perempuan</option>
                     
                     </select>
                        </div>
                        </div>
                        </div>
                            <div class="form-group">
                        <label class="control-label col-xs-3" >nohp</label>
                        <div class="col-xs-9">
                        <div class="form-line">
                            <input name="nohp" class="form-control" type="text" required>
                        </div>
                        </div>
                        </div>
 
                         <div class="form-group">
                        <label class="control-label col-xs-3" >tanggal berangkat</label>
                        <div class="col-xs-9">
                        <div class="form-line">
                            <input name="tanggalberangkat" class="form-control" type="date" required>
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




                          <div class="form-group">
                        <label class="control-label col-xs-3" >Kategori</label>
                        <div class="col-xs-9">
                        <div class="form-line">
                              <select  class="form-control" name="id_kategori" id="id_kategori" onclick="change1(this.value)">
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
                        <label class="control-label col-xs-3" >nama sopir</label>
                        <div class="col-xs-9">
                        <div class="form-line">
                            <input name="harga" id="harga" class="form-control" type="text" readonly required>
                        </div>
                        </div>
                        </div>

                        



                        <div class="form-group">
                        <label class="control-label col-xs-3" >Jam</label>
                        <div class="col-xs-9">
                        <div class="form-line">
                            <input name="jam" id="jam" class="form-control" type="text" readonly required>
                        </div>
                        </div>
                        </div>

                          

                           <div class="form-group">
                        <label class="control-label col-xs-3" >harga</label>
                        <div class="col-xs-9">
                        <div class="form-line">
                            <input name="harga" onkeyup="convertToRupiah(this);" style="width:335px;" class="form-control" type="text" required >
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
                        $kodepelanggan=$a['kodepelanggan'];
                        $namapelanggan=$a['namapelanggan'];
                        $alamat=$a['alamat'];
                        $jeniskelamin=$a['jeniskelamin'];
                        $nohp=$a['nohp'];
                        $tanggalberangkat=$a['tanggalberangkat'];
                        $tanggalpesan=$a['tanggalpesan'];
                        $id_jadwal=$a['id_jadwal'];
                        $kodejadwal=$a['kodejadwal'];
                        $id_kategori=$a['id_kategori'];
                        $harga=$a['harga'];
                       
                   
                    ?>
                <div id="modalEditPelanggan<?php echo $kodepelanggan?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title" id="myModalLabel">Edit Pelanggan</h3>
                    </div>
                    <form class="form-horizontal" method="post" action="<?php echo base_url().'index.php/Pelanggan_controller/update_Pelanggan'?>">
                        <div class="modal-body">
                            <input name="kodepelanggan" type="hidden" value="<?php echo $kodepelanggan;?>">
						
                    <div class="form-group">
                        <label class="control-label col-xs-3" >Nama Pelanggan</label>
                        <div class="col-xs-9"><div class="form-line">
                            <input name="namapelanggan" class="form-control" type="text" placeholder="Nama Pelanggan..." value="<?php echo $namapelanggan;?>"  required>
                        </div></div>
                    </div> 

                     <div class="form-group">
                        <label class="control-label col-xs-3" >alamat</label>
                        <div class="col-xs-9"><div class="form-line">
                            <input name="alamat" class="form-control" type="text" placeholder="alamat..." value="<?php echo $alamat;?>"  required>
                        </div></div>
                    </div> 

                     <div class="form-group">
                        <label class="control-label col-xs-3" >jeniskelamin</label>
                        <div class="col-xs-9"><div class="form-line">
                           
                                               <?php
                  if($a['jeniskelamin']=='Laki-laki'){
                    echo "
                        <label>
                          <input type='radio' name='jeniskelamin' id='modaljeniskelamin' value='Laki-laki' class='ace' checked/>
                          <span class='lbl'> Laki-laki</span>
                        </label>&nbsp;
                        <label>
                          <input type='radio' name='jeniskelamin' id='modaljeniskelamin' class='ace' value='Perempuan' />
                          <span class='lbl'> Perempuan</span>
                        </label>
                        "
                        ;

                  }
                  elseif($a['jeniskelamin']=='Perempuan')
                  {
                    echo "
                        <label>
                          <input type='radio' name='jeniskelamin' id='modaljeniskelamin' value='Laki-laki' class='ace' />
                          <span class='lbl'> Laki-laki</span>
                        </label>&nbsp;
                        <label>
                          <input type='radio' name='jeniskelamin' id='modaljeniskelamin' class='ace' value='Perempuan' checked/>
                          <span class='lbl'> Perempuan</span>
                        </label>
                        ";
                  }
                  ?>

                        </div></div>
                    </div> 

                     <div class="form-group">
                        <label class="control-label col-xs-3" >nohp</label>
                        <div class="col-xs-9"><div class="form-line">
                            <input name="nohp" class="form-control" type="text" placeholder="nohp..." value="<?php echo $nohp;?>"  required>
                        </div></div>
                    </div> 

                    <div class="form-group">
                        <label class="control-label col-xs-3" >tanggal berangkat</label>
                        <div class="col-xs-9"><div class="form-line">
                            <input name="tanggalberangkat" class="form-control" type="text" placeholder="tanggalberangkat..." value="<?php echo $tanggalberangkat;?>"  required>
                        </div></div>
                    </div>


                    <div class="form-group">
                        <label class="control-label col-xs-3" >tanggal pesan</label>
                        <div class="col-xs-9"><div class="form-line">
                            <input name="tanggalpesan" class="form-control" type="text" placeholder="tanggalpesan..." value="<?php echo $tanggalpesan;?>"  required>
                        </div></div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Kode mobil</label>
                        <div class="col-xs-9"><div class="form-line">
                            <input name="id_jadwal" class="form-control" type="text" placeholder="id_jadwal..." value="<?php echo $id_jadwal;?>"  required>
                        </div></div>
                    </div>


                      <div class="form-group">
                        <label class="control-label col-xs-3" >Kode jadwal</label>
                        <div class="col-xs-9"><div class="form-line">
                            <input name="kodejadwal" class="form-control" type="text" placeholder="kodejadwal..." value="<?php echo $kodejadwal;?>"  required>
                        </div></div>
                    </div>



                    <div class="form-group">
                        <label class="control-label col-xs-3" >kode sopir</label>
                        <div class="col-xs-9"><div class="form-line">
                            <input name="id_kategori" class="form-control" type="text" placeholder="id_kategori..." value="<?php echo $id_kategori;?>"  required>
                        </div></div>
                    </div>


                    <div class="form-group">
                        <label class="control-label col-xs-3" >harga</label>
                        <div class="col-xs-9"><div class="form-line">
                            <input name="harga" onkeyup="convertToRupiah(this);"  class="form-control" type="text"  placeholder="harga..." value="<?php echo $harga;?>"  required>
                        </div></div>
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
                        $kodepelanggan=$a['kodepelanggan'];
                        $namapelanggan=$a['namapelanggan'];
                    ?>
                <div id="modalHapusPelanggan<?php echo $kodepelanggan?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">                        
                        <h3 class="modal-title" id="myModalLabel">Hapus Pelanggan</h3>
                    </div>
                    <form class="form-horizontal" method="post" action="<?php echo base_url().'index.php/Pelanggan_controller/hapus_Pelanggan'?>">
                        <div class="modal-body">
                            <p>Apakah anda yakin akan menghapus data ini ?</p>
                                    <input name="kodepelanggan" type="hidden" value="<?php echo $kodepelanggan; ?>">
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
