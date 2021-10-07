<div align="right">
 <!-- <a href="#" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#smallModal">Tambah pengirim</a></div>&nbsp -->
 <a href="<?php echo base_url('Pengiriman_controller/form_input_pengirim_user')?>" class="btn btn-sm btn-primary" >Tambah pengirim</a></div>

<div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Tabel Data pengirim
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th style="text-align:center;width:3px;">No</th>
                                     
                                    <th>ID pengirim</th>
                                    <th>tanggal</th>
									<th>Nama Pengirim</th>
									<th>Nama Penerima</th>
                                    <th>Keterangan barang</th>
                                    
                                    <th>Tujuan</th>
                                    <th>Biaya</th>
                             
                                   
                                     <!-- <th>keterangan</th> -->
                                   

									<!-- <th style="width:100px;text-align:center;">Aksi</th> -->
                                    </tr>
                                </thead>
                                <tbody>
                                <?php 
                    $no=0;
            

                    foreach ($tampil->result_array() as $a):
                        $no++;
                      
                        $id_pengiriman=$a['id_pengiriman'];
                        $id_jadwal=$a['id_jadwal'];
                        $nama_pengirim=$a['nama_pengirim'];
                        $nama_penerima=$a['nama_penerima'];
                      
                     
                        // $jumlah=$a['jumlah'];
                        $tujuan=$a['tujuan'];
                        $tanggal=$a['tanggal'];
                   
                        $biaya=$a['biaya'];
                        $keterangan=$a['keterangan'];

                       
                        
                ?>
                    <tr>
                        <td style="text-align:center;"><?php echo $no;?></td>
						<td><?php echo $id_pengiriman;?></td>
                        <!-- <td><?php echo $id_jadwal;?></td> -->
                        <td><?php echo $tanggal;?></td>
                       
                        <td><?php echo $nama_pengirim;?></td>
                        <td><?php echo $nama_penerima;?></td>
                        <td><?php echo $keterangan;?></td>
                        <td><?php echo $tujuan;?></td>
                 
                        <td><?php echo $biaya;?></td>
                       
                            
                  
                     
                        
                        <!-- <td style="text-align:center;">
                        <a class="btn btn-xs btn-info" href="<?php echo site_url('Pengiriman_controller/form_edit_pengiriman/'.$id_pengiriman)?>" data-toggle="modal" title="Edit"><span class="fa fa-edit"></span> Edit</a>
                        <a class="btn btn-xs btn-info btn-circle" href="<?php echo base_url() .'index.php/Pengiriman_controller/faktur/'.$id_pengiriman;?>" data-toggle="modal" title="cetak" target="_blank" ><span class="fa fa-print"></span> </a>
                            <a class="btn btn-xs btn-danger" href="#modalHapuspengirim<?php echo $id_pengiriman?>" data-toggle="modal" title="Hapus"><span class="fa fa-close"></span> Hapus</a>
                        </td> -->

                    </tr>
                <?php endforeach;?>
                                </tbody>
                            </table>
                            
                </div>
                <!-- /.col-lg-12 -->
            </div>
          <!-- /.box -->        
        
          






     
        <!-- ============ MODAL HAPUS =============== -->
        <?php
                    foreach ($tampil->result_array() as $a) {
                        $id_pengiriman=$a['id_pengiriman'];
                        $id_jadwal=$a['id_jadwal'];
                    ?>
                <div id="modalHapuspengirim<?php echo $id_pengiriman?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">                        
                        <h3 class="modal-title" id="myModalLabel">Hapus pengirim</h3>
                    </div>
                    <form class="form-horizontal" method="post" action="<?php echo base_url().'index.php/Pengiriman_controller/hapus_pengiriman'?>">
                        <div class="modal-body">
                            <p>Apakah anda yakin akan menghapus data ini ?</p>
                                    <input name="id_pengiriman" type="hidden" value="<?php echo $id_pengiriman; ?>">
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
