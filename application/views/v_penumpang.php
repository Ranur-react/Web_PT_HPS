<div align="right">
 <a href="#" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#smallModal">Tambah penumpang</a></div>&nbsp
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
									<th>Id Penumpang</th>
									<th>Nama</th>
									<th>Alamat</th>
									<th>Jenis Kelamin</th>
									<th>Telepon</th>
								
                                
                                   
                                  
                                   
                                

									<th style="width:100px;text-align:center;">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                    $no=0;
                    foreach ($tampil->result_array() as $a):
                        $no++;
                        $id_penumpang=$a['id_penumpang'];
                       
                 
                      
                        $nama=$a['nama'];
                        $alamat=$a['alamat'];
                        $jenis_kelamin=$a['jenis_kelamin'];
                        $telepon=$a['telepon'];
                        $username=$a['username'];
                       
                ?>
                    <tr>
                        <td style="text-align:center;"><?php echo $no;?></td>
						<td><?php echo $id_penumpang;?></td>
                        <td><?php echo $nama;?></td>
						<td><?php echo $alamat;?></td>
						<td><?php echo $jenis_kelamin;?></td>
						<td><?php echo $telepon;?></td>
					
                       
                     
                       
                      
                 
                     
                        
                        <td style="text-align:center;">
                            <a class="btn btn-xs btn-info btn-circle" href="#modalEditpenumpang<?php echo $id_penumpang?>" data-toggle="modal" title="Edit"><span class="fa fa-edit"></span> </a>
                            <a class="btn btn-xs btn-danger btn-circle" href="#modalHapuspenumpang<?php echo $id_penumpang?>" data-toggle="modal" title="Hapus"><span class="fa fa-trash"></span></a>

                          
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
                            <h4 class="modal-title" id="defaultModalLabel">Tambah penumpang</h4>
                        </div>
				<form class="form-horizontal" method="post" action="<?php echo base_url().'index.php/penumpang_controller/tambah_penumpang_admin'?>">
                <div class="modal-body">

					<div class="form-group">
                        <label class="control-label col-xs-3" >Nama Lengkap</label>
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
                        <label class="control-label col-xs-3" >Jenis Kelmin</label>
                        <div class="col-xs-9">
                        <div class="form-line">
                        <label><input type="radio" name="jenis_kelamin" value="Laki-Laki" > Laki-Laki </label>
                         <label><input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan</label>
              
                          
                 
                        </div>
                        </div>
                        </div>

                        <div class="form-group">
                        <label class="control-label col-xs-3" >Telepon</label>
                        <div class="col-xs-9">
						<div class="form-line">
                            <input name="telepon" class="form-control" type="text" required>
                        </div>
						</div>
                    </div>

                        <div class="form-group">
                        <label class="control-label col-xs-3" >Username</label>
                        <div class="col-xs-9">
						<div class="form-line">
                            <input name="username" class="form-control" type="text" required>
                        </div>
						</div>
                    </div>

                        <div class="form-group">
                        <label class="control-label col-xs-3" >Password</label>
                        <div class="col-xs-9">
						<div class="form-line">
                            <input name="password" class="form-control" type="text" required>
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
                        $id_penumpang=$a['id_penumpang'];
                        $alamat=$a['alamat'];
                        $jenis_kelamin=$a['jenis_kelamin'];
                        $telepon=$a['telepon'];
                        $username=$a['username'];
                        $nama=$a['nama'];
                        $password=$a['password'];
                       
                  
                   
                   
                    ?>
                <div id="modalEditpenumpang<?php echo $id_penumpang?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title" id="myModalLabel">Edit penumpang</h3>
                    </div>
                    <form class="form-horizontal" method="post" action="<?php echo base_url().'index.php/penumpang_controller/update_penumpang'?>">
                        <div class="modal-body">
                            <input name="id_penumpang" type="hidden" value="<?php echo $id_penumpang;?>">
                            <div class="form-group">
                        <label class="control-label col-xs-3" >Nama Lengkap</label>
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
                        <label><input type="radio" name="jenis_kelamin" value="Laki-Laki" <?php if($jenis_kelamin=='Laki-Laki') echo 'checked'?>> Laki-Laki </label>
                         <label><input type="radio" name="jenis_kelamin" value="Perempuan" <?php if($jenis_kelamin=='Perempuan') echo 'checked'?>> Perempuan</label>
              
                        </div>
                        </div>
                        </div>

                        <div class="form-group">
                        <label class="control-label col-xs-3" >Telepon</label>
                        <div class="col-xs-9">
						<div class="form-line">
                            <input name="telepon" class="form-control" type="text" value="<?php echo $telepon?>" required>
                        </div>
						</div>
                    </div>

                        <div class="form-group">
                        <label class="control-label col-xs-3" >Username</label>
                        <div class="col-xs-9">
						<div class="form-line">
                            <input name="username" class="form-control" type="text"value="<?php echo $username?>" required>
                        </div>
						</div>
                    </div>

                        <div class="form-group">
                        <label class="control-label col-xs-3" >Password</label>
                        <div class="col-xs-9">
						<div class="form-line">
                            <input name="password" class="form-control" type="text"value="<?php echo $password?>" required>
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
                        $id_penumpang=$a['id_penumpang'];
                       
                    ?>
                <div id="modalHapuspenumpang<?php echo $id_penumpang?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">                        
                        <h3 class="modal-title" id="myModalLabel">Hapus penumpang</h3>
                    </div>
                    <form class="form-horizontal" method="post" action="<?php echo base_url().'index.php/penumpang_controller/hapus_penumpang'?>">
                        <div class="modal-body">
                            <p>Apakah anda yakin akan menghapus data ini ?</p>
                                    <input name="id_penumpang" type="hidden" value="<?php echo $id_penumpang; ?>">
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

   

    <!-- /.container -->
	
           
</script>
    </section>
