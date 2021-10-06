<div align="right">
 <a href="#" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#smallModal">Tambah kategori</a></div>&nbsp
<div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Tabel Data kategori
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th style="text-align:center;width:3px;">No</th>
									<th>Id kategori</th>
									<th>Nama Kategori</th>
                                    <th>harga</th>
                               
                                   
                                   <!-- <th>kode qr</th>-->
									<th style="width:100px;text-align:center;">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                    $no=0;
                    foreach ($tampil->result_array() as $a):
                        $no++;
                        $id_kategori=$a['id_kategori'];
                        $nama=$a['nama'];
                        $harga=$a['harga'];
                        // $warnakategori=$a['warnakategori'];
                        // $jumlahkursi=$a['jumlahkursi'];
                        
                ?>
                    <tr>
                        <td style="text-align:center;"><?php echo $no;?></td>
						<td><?php echo $id_kategori;?></td>
                        <td><?php echo $nama;?></td>
                        <td><?php echo $harga;?></td>
                
                        <!--<td><img style="width: 100px;" src="<?php echo base_url().'assets/img/'.$a->barcode;?>"></td>-->
                        
                       <!-- <td  style="width: 100px;"class="text-center"><a href="javascript:void(0)" onclick="foto('<?php echo $a['id_kategori']?>')"><img width="100" height="70" src="<?php echo base_url();?>assets/img/<?php echo $a['barcode']?>" class="img-thumbnail" alt="kode qr"></a> </td>  
                        -->
                        
                        <td style="text-align:center;">
                            <a class="btn btn-xs btn-info" href="#modalEditPelanggan<?php echo $id_kategori?>" data-toggle="modal" title="Edit"><span class="fa fa-edit"></span> Edit</a>
                            <a class="btn btn-xs btn-danger" href="#modalHapusPelanggan<?php echo $id_kategori?>" data-toggle="modal" title="Hapus"><span class="fa fa-close"></span> Hapus</a>
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
                            <h4 class="modal-title" id="defaultModalLabel">Tambah kategori</h4>
                        </div>
				<form class="form-horizontal" method="post" action="<?php echo base_url().'index.php/kategori_controler/tambah_kategori'?>">
                <div class="modal-body">

					<!-- <div class="form-group">
                        <label class="control-label col-xs-3" >Kode kategori</label>
                        <div class="col-xs-9">
						<div class="form-line">
                            <input name="id_kategori" class="form-control" type="text" required>
                        </div>
						</div>
                    </div> -->

					<div class="form-group">
                        <label class="control-label col-xs-3" >Nama Kategori</label>
                        <div class="col-xs-9">
						<div class="form-line">
                          
                            <select name="nama"  class="form-control" id=""required>
                                <option value="">=Pilih Kategori=</option>
                                <option value="Anak-anak">Anak-anak</option>
                                <option value="Dewasa">Dewasa</option>
                            </select>
                        </div>
						</div>
                    </div>
				
                   
                       

                            <div class="form-group">
                        <label class="control-label col-xs-3" >Harga</label>
                        <div class="col-xs-9">
                        <div class="form-line">
                            <input name="harga" class="form-control" type="text" required>
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
                        $id_kategori=$a['id_kategori'];
                        $nama=$a['nama'];
                        $harga=$a['harga'];
                      
                    ?>
                <div id="modalEditPelanggan<?php echo $id_kategori?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title" id="myModalLabel">Edit kategori</h3>
                    </div>
                    <form class="form-horizontal" method="post" action="<?php echo base_url().'index.php/kategori_controler/update_kategori'?>">
                        <div class="modal-body">
                            <input name="id_kategori" type="hidden" value="<?php echo $id_kategori;?>">
						
                    <div class="form-group">
                        <label class="control-label col-xs-3" >kategori</label>
                        <div class="col-xs-9"><div class="form-line">
                        <select name="nama" class="form-control">
                                    <option>= Pilih Kategori =</option>
                                    <option value="Anak-anak" <?php if (  $nama=$a['nama'] == 'Anak-anak'){echo "selected";}?>>Anak-anak</option>
                                     <option value="Dewasa" <?php if (  $nama=$a['nama'] == 'Dewasa'){echo "selected";}?>>Dewasa</option>
                                </select>
                        </div></div>
                    </div> 

                     <div class="form-group">
                        <label class="control-label col-xs-3" >harga</label>
                        <div class="col-xs-9"><div class="form-line">
                            <input name="harga" class="form-control" type="text" placeholder="harga..." value="<?php echo $harga;?>"  required>
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
                        $id_kategori=$a['id_kategori'];
                        $nama=$a['nama'];
                    ?>
                <div id="modalHapusPelanggan<?php echo $id_kategori?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">                        
                        <h3 class="modal-title" id="myModalLabel">Hapus kategori</h3>
                    </div>
                    <form class="form-horizontal" method="post" action="<?php echo base_url().'index.php/kategori_controler/hapus_kategori'?>">
                        <div class="modal-body">
                            <p>Apakah anda yakin akan menghapus data ini ?</p>
                                    <input name="id_kategori" type="hidden" value="<?php echo $id_kategori; ?>">
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
