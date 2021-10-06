<div align="right">
 <a href="#" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#smallModal">Tambah mobil</a></div>&nbsp
<div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Tabel Data mobil
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th style="text-align:center;width:3px;">No</th>
                  <th>Kode Mobil</th>
                  <th>Platnomor Mobil</th>
                                    <th>Merk Mobil</th>
                                    <th>Warna Mobil</th>
                                    <th>Jumlah Kursi</th>
                                   <!-- <th>kode qr</th>-->
                  <th style="width:100px;text-align:center;">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                    $no=0;
                    foreach ($tampil->result_array() as $a):
                        $no++;
                        $nopemesanan=$a['nopemesanan'];
                        $kodepelanggan=$a['kodepelanggan'];
                        $kodesopir=$a['kodesopir'];
                        $kodemobil=$a['kodemobil'];
                        $kodejadwal=$a['kodejadwal'];
                        $harga=$a['harga'];
                        $kodejadwal=$a['keterangan'];
                        
                ?>
                    <tr>
                        <td style="text-align:center;"><?php echo $no;?></td>
            <td><?php echo $nopemesanan;?></td>
                        <td><?php echo $kodepelanggan;?></td>
                        <td><?php echo $kodesopir;?></td>
                        <td><?php echo $kodemobil;?></td>
                        <td><?php echo $kodejadwal;?></td>
                        <!--<td><img style="width: 100px;" src="<?php echo base_url().'assets/img/'.$a->barcode;?>"></td>-->
                        
                       <!-- <td  style="width: 100px;"class="text-center"><a href="javascript:void(0)" onclick="foto('<?php echo $a['nopemesanan']?>')"><img width="100" height="70" src="<?php echo base_url();?>assets/img/<?php echo $a['barcode']?>" class="img-thumbnail" alt="kode qr"></a> </td>  
                        -->
                        
                        <td style="text-align:center;">
                            <a class="btn btn-xs btn-info" href="#modalEditPelanggan<?php echo $nopemesanan?>" data-toggle="modal" title="Edit"><span class="fa fa-edit"></span> Edit</a>
                            <a class="btn btn-xs btn-danger" href="#modalHapusPelanggan<?php echo $nopemesanan?>" data-toggle="modal" title="Hapus"><span class="fa fa-close"></span> Hapus</a>
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
                            <h4 class="modal-title" id="defaultModalLabel">Tambah mobil</h4>
                        </div>
        <form class="form-horizontal" method="post" action="<?php echo base_url().'index.php/mobil_controler/tambah_mobil'?>">
                <div class="modal-body">

          <div class="form-group">
                        <label class="control-label col-xs-3" >Kode Mobil</label>
                        <div class="col-xs-9">
            <div class="form-line">
                            <input name="nopemesanan" class="form-control" type="text" required>
                        </div>
            </div>
                    </div>
        
                    <div class="form-group">
                        <label class="control-label col-xs-3" >No Mobil</label>
                        <div class="col-xs-9">
            <div class="form-line">
                            <input name="kodepelanggan" class="form-control" type="text" required>
                        </div>
                        </div>
                        </div>
                            <div class="form-group">
                        <label class="control-label col-xs-3" >Merk Mobil</label>
                        <div class="col-xs-9">
                        <div class="form-line">
                            <input name="kodesopir" class="form-control" type="text" required>
                        </div>
                        </div>
                        </div>
                            <div class="form-group">
                        <label class="control-label col-xs-3" >Warna Mobil</label>
                        <div class="col-xs-9">
                        <div class="form-line">
                            <input name="kodemobil" class="form-control" type="text" required>
                        </div>
                        </div>
                        </div>
                            <div class="form-group">
                        <label class="control-label col-xs-3" >Jumlah Kursi</label>
                        <div class="col-xs-9">
                        <div class="form-line">
                            <input name="kodejadwal" class="form-control" type="text" required>
                        </div>
                        </div>
                        </div>

                           <!-- <select name="kodepelanggan"class="form-control show-tick" required>
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
                        $nopemesanan=$a['nopemesanan'];
                        $kodepelanggan=$a['kodepelanggan'];
                        $kodesopir=$a['kodesopir'];
                        $kodemobil=$a['kodemobil'];
                        $kodejadwal=$a['kodejadwal'];
                    ?>
                <div id="modalEditPelanggan<?php echo $nopemesanan?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title" id="myModalLabel">Edit mobil</h3>
                    </div>
                    <form class="form-horizontal" method="post" action="<?php echo base_url().'index.php/mobil_controler/update_mobil'?>">
                        <div class="modal-body">
                            <input name="nopemesanan" type="hidden" value="<?php echo $nopemesanan;?>">
            
                    <div class="form-group">
                        <label class="control-label col-xs-3" >Nama mobil</label>
                        <div class="col-xs-9"><div class="form-line">
                            <input name="kodepelanggan" class="form-control" type="text" placeholder="Nama mobil..." value="<?php echo $kodepelanggan;?>"  required>
                        </div></div>
                    </div> 

                     <div class="form-group">
                        <label class="control-label col-xs-3" >kodesopir</label>
                        <div class="col-xs-9"><div class="form-line">
                            <input name="kodesopir" class="form-control" type="text" placeholder="kodesopir..." value="<?php echo $kodesopir;?>"  required>
                        </div></div>
                    </div> 

                     <div class="form-group">
                        <label class="control-label col-xs-3" >kodemobil</label>
                        <div class="col-xs-9"><div class="form-line">
                            <input name="kodemobil" class="form-control" type="text" placeholder="kodemobil..." value="<?php echo $kodemobil;?>"  required>
                        </div></div>
                    </div> 

                     <div class="form-group">
                        <label class="control-label col-xs-3" >kodejadwal</label>
                        <div class="col-xs-9"><div class="form-line">
                            <input name="kodejadwal" class="form-control" type="text" placeholder="kodejadwal..." value="<?php echo $kodejadwal;?>"  required>
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
                        $nopemesanan=$a['nopemesanan'];
                        $kodepelanggan=$a['kodepelanggan'];
                    ?>
                <div id="modalHapusPelanggan<?php echo $nopemesanan?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">                        
                        <h3 class="modal-title" id="myModalLabel">Hapus mobil</h3>
                    </div>
                    <form class="form-horizontal" method="post" action="<?php echo base_url().'index.php/mobil_controler/hapus_mobil'?>">
                        <div class="modal-body">
                            <p>Apakah anda yakin akan menghapus data ini ?</p>
                                    <input name="nopemesanan" type="hidden" value="<?php echo $nopemesanan; ?>">
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
