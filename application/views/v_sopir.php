<div align="right">
 <a href="#" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#smallModal">Tambah Sopir</a></div>&nbsp
<div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Tabel Data Sopir
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th style="text-align:center;width:3px;">No</th>
									<th>ID Sopir</th>
									<th>Nama Sopir</th>
                                    <th>alamat sopir</th>
                                   
                                    <th>nohp</th>
                                   

									<th style="width:100px;text-align:center;">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                    $no=0;
                    foreach ($tampil->result_array() as $a):
                        $no++;
                        $kodesopir=$a['kodesopir'];
                        $namasopir=$a['namasopir'];
                        $alamatsopir=$a['alamatsopir'];
                        
                        $nohp=$a['nohp'];
                        
                ?>
                    <tr>
                        <td style="text-align:center;"><?php echo $no;?></td>
						<td><?php echo $kodesopir;?></td>
                        <td><?php echo $namasopir;?></td>
                        <td><?php echo $alamatsopir;?></td>
                   
                        <td><?php echo $nohp;?></td>
                     
                        
                        <td style="text-align:center;">
                            <a class="btn btn-xs btn-info" href="#modalEditSopir<?php echo $kodesopir?>" data-toggle="modal" title="Edit"><span class="fa fa-edit"></span> Edit</a>
                            <a class="btn btn-xs btn-danger" href="#modalHapusSopir<?php echo $kodesopir?>" data-toggle="modal" title="Hapus"><span class="fa fa-close"></span> Hapus</a>
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
                            <h4 class="modal-title" id="defaultModalLabel">Tambah Sopir</h4>
                        </div>
				<form class="form-horizontal" method="post" action="<?php echo base_url().'index.php/Sopir_controller/tambah_Sopir'?>">
                <div class="modal-body">

					<div class="form-group">
                        <label class="control-label col-xs-3" >Kode Sopir</label>
                        <div class="col-xs-9">
						<div class="form-line">
                            <input name="kodesopir" class="form-control" type="text" required>
                        </div>
						</div>
                    </div>
				
                    <div class="form-group">
                        <label class="control-label col-xs-3" >Nama Sopir</label>
                        <div class="col-xs-9">
						<div class="form-line">
                            <input name="namasopir" class="form-control" type="text" required>
                        </div>
                        </div>
                        </div>
                            <div class="form-group">
                        <label class="control-label col-xs-3" >alamat sopir</label>
                        <div class="col-xs-9">
                        <div class="form-line">
                            <input name="alamatsopir" class="form-control" type="text" required>
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
                         

                           <!-- <select name="namasopir"class="form-control show-tick" required>
                 <option value="">-- Pilih Progaram Studi --</option>
                 <option value="Manajemen Informatika">Manajemen Informatika</option>
                 <option value="Sistem Komputer">Sistem Komputer</option>
                 <option value="Sistem Informasi">Sistem Informasi</option>
                 
              
    </select>-->
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
                        $kodesopir=$a['kodesopir'];
                        $namasopir=$a['namasopir'];
                        $alamatsopir=$a['alamatsopir'];
                  
                        $nohp=$a['nohp'];
                   
                    ?>
                <div id="modalEditSopir<?php echo $kodesopir?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title" id="myModalLabel">Edit Sopir</h3>
                    </div>
                    <form class="form-horizontal" method="post" action="<?php echo base_url().'index.php/Sopir_controller/update_Sopir'?>">
                        <div class="modal-body">
                            <input name="kodesopir" type="hidden" value="<?php echo $kodesopir;?>">
						
                    <div class="form-group">
                        <label class="control-label col-xs-3" >Nama Sopir</label>
                        <div class="col-xs-9"><div class="form-line">
                            <input name="namasopir" class="form-control" type="text" placeholder="Nama Sopir..." value="<?php echo $namasopir;?>"  required>
                        </div></div>
                    </div> 

                     <div class="form-group">
                        <label class="control-label col-xs-3" >alamatsopir</label>
                        <div class="col-xs-9"><div class="form-line">
                            <input name="alamatsopir" class="form-control" type="text" placeholder="alamatsopir..." value="<?php echo $alamatsopir;?>"  required>
                        </div></div>
                    </div> 

                   

                     <div class="form-group">
                        <label class="control-label col-xs-3" >nohp</label>
                        <div class="col-xs-9"><div class="form-line">
                            <input name="nohp" class="form-control" type="text" placeholder="nohp..." value="<?php echo $nohp;?>"  required>
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
                        $kodesopir=$a['kodesopir'];
                        $namasopir=$a['namasopir'];
                    ?>
                <div id="modalHapusSopir<?php echo $kodesopir?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">                        
                        <h3 class="modal-title" id="myModalLabel">Hapus Sopir</h3>
                    </div>
                    <form class="form-horizontal" method="post" action="<?php echo base_url().'index.php/Sopir_controller/hapus_Sopir'?>">
                        <div class="modal-body">
                            <p>Apakah anda yakin akan menghapus data ini ?</p>
                                    <input name="kodesopir" type="hidden" value="<?php echo $kodesopir; ?>">
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
