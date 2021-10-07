<div align="right">
 <a href="#" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#smallModal">Tambah mobil</a></div>&nbsp
<div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Tabel Data Bus
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th style="text-align:center;width:3px;">No</th>
									<th>Kode Bus</th>
									<th>Platnomor Bus</th>
                                    <th>Merk Bus</th>
                                 

                                   
                                   <!-- <th>kode qr</th>-->
									<th style="width:100px;text-align:center;">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>

                             
                                    <?php 
                    $no=0;
                    foreach ($tampil->result_array() as $a):
                        $no++;
                        $id_bus=$a['id_bus'];
                        $nomor_bus=$a['nomor_bus'];
                        $merk=$a['merk'];
                        // $warnamobil=$a['warnamobil'];
                        // $jumlahkursi=$a['jumlahkursi'];
                        
                ?>
                    <tr>
                        <td style="text-align:center;"><?php echo $no;?></td>
						<td><?php echo $id_bus;?></td>
                        <td><?php echo $nomor_bus;?></td>
                        <td><?php echo $merk;?></td>
                
                        
                        <td style="text-align:center;">
                            <a class="btn btn-xs btn-info" href="#modalEditPelanggan<?php echo $id_bus?>" data-toggle="modal" title="Edit"><span class="fa fa-edit"></span> Edit</a>
                            <a class="btn btn-xs btn-danger" href="#modalHapusPelanggan<?php echo $id_bus?>" data-toggle="modal" title="Hapus"><span class="fa fa-close"></span> Hapus</a>
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
                            <h4 class="modal-title" id="defaultModalLabel">Tambah Bus</h4>
                        </div>
				<form class="form-horizontal" method="post" action="<?php echo base_url().'index.php/mobil_controler/tambah_mobil'?>">
                <div class="modal-body">

					<!-- <div class="form-group">
                        <label class="control-label col-xs-3" >Kode Bus</label>
                        <div class="col-xs-9">
						<div class="form-line">
                            <input name="id_mobil" class="form-control" type="text" required>
                        </div>
						</div>
                    </div> -->

					<div class="form-group">
                        <label class="control-label col-xs-3" >Nama Bus</label>
                        <div class="col-xs-9">
						<div class="form-line">
                            <input name="nama" class="form-control" type="text" required>
                        </div>
						</div>
                    </div>
				
                    <div class="form-group">
                        <label class="control-label col-xs-3" >Plat No Bus</label>
                        <div class="col-xs-9">
						<div class="form-line">
                            <input name="nomor_bus" class="form-control" type="text" required>
                        </div>
                        </div>
                        </div>
                            <div class="form-group">
                        <label class="control-label col-xs-3" >Merk Bus</label>
                        <div class="col-xs-9">
                        <div class="form-line">
                            <input name="merk" class="form-control" type="text" required>
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
                        $id_bus=$a['id_bus'];
                        $nomor_bus=$a['nomor_bus'];
                        $merk=$a['merk'];
                        $nama=$a['nama'];
                     
                    ?>
                <div id="modalEditPelanggan<?php echo $id_bus?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title" id="myModalLabel">Edit Bus</h3>
                    </div>
                    <form class="form-horizontal" method="post" action="<?php echo base_url().'index.php/mobil_controler/update_mobil'?>">
                        <div class="modal-body">
                            <input name="id_bus" type="hidden" value="<?php echo $id_bus;?>">
						
                    <div class="form-group">
                    <label class="control-label col-xs-3" >Nama Bus</label>
                        <div class="col-xs-9"><div class="form-line">
                            <input name="nama" class="form-control" type="text" placeholder="Nama mobil..." value="<?php echo $nama;?>"  required>
                        </div></div>
                    </div> 
                    <div class="form-group">
                    <label class="control-label col-xs-3" >Plat No Bus</label>
                        <div class="col-xs-9"><div class="form-line">
                            <input name="nomor_bus" class="form-control" type="text" placeholder="Nama mobil..." value="<?php echo $nomor_bus;?>"  required>
                        </div></div>
                    </div> 

                     <div class="form-group">
                        <label class="control-label col-xs-3" >merk</label>
                        <div class="col-xs-9"><div class="form-line">
                            <input name="merk" class="form-control" type="text" placeholder="merk..." value="<?php echo $merk;?>"  required>
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
                        $id_bus=$a['id_bus'];
                        $nomor_bus=$a['nomor_bus'];
                    ?>
                <div id="modalHapusPelanggan<?php echo $id_bus?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">                        
                        <h3 class="modal-title" id="myModalLabel">Hapus mobil</h3>
                    </div>
                    <form class="form-horizontal" method="post" action="<?php echo base_url().'index.php/mobil_controler/hapus_mobil'?>">
                        <div class="modal-body">
                            <p>Apakah anda yakin akan menghapus data ini ?</p>
                                    <input name="id_bus" type="hidden" value="<?php echo $id_bus; ?>">
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
