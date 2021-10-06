<div align="right">
 <!-- <a href="#" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#smallModal">Tambah Jadwal</a></div>&nbsp -->
<div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Tabel Data Jadwal
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th style="text-align:center;width:3px;">No</th>
									<th>ID Jadwal</th>
									<th>Tujuan</th>
									<th>Nama Sopir</th>
                                    <th>Jam</th>
                                   
                                
<!-- 
									<th style="width:100px;text-align:center;">Aksi</th> -->
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                    $no=0;
                    foreach ($tampil->result_array() as $a):
                        $no++;
                        $id_jadwal=$a['id_jadwal'];
                        $tujuan=$a['tujuan'];
                        $nama_sopir=$a['nama_sopir'];
                        $jam=$a['jam'];
                       
                ?>
                    <tr>
                        <td style="text-align:center;"><?php echo $no;?></td>
						<td><?php echo $id_jadwal;?></td>
						<td><?php echo $tujuan;?></td>
						<td><?php echo $nama_sopir;?></td>
                        <td><?php echo $jam;?></td>
                 
                     
<!--                         
                        <td style="text-align:center;">
                            <a class="btn btn-xs btn-info btn-circle" href="#modalEditJadwal<?php echo $id_jadwal?>" data-toggle="modal" title="Edit"><span class="fa fa-edit"></span> </a>
                            <a class="btn btn-xs btn-danger btn-circle" href="#modalHapusJadwal<?php echo $id_jadwal?>" data-toggle="modal" title="Hapus"><span class="fa fa-trash"></span></a>

                          
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
                            <h4 class="modal-title" id="defaultModalLabel">Tambah Jadwal</h4>
                        </div>
				<form class="form-horizontal" method="post" action="<?php echo base_url().'index.php/Jadwal_controller/tambah_Jadwal'?>">
                <div class="modal-body">

					<div class="form-group">
                        <label class="control-label col-xs-3" >Jam Berangkat</label>
                        <div class="col-xs-9">
						<div class="form-line">
                        <select name="jam"  class="form-control" id=""required>
                                <option value="">=Pilih Jam=</option>
                                <option value="07:00">07:00</option>
                                <option value="10:00">10:00</option>
                                <option value="12:00">12:00</option>
                            </select>
                        </div>
						</div>
                    </div>

					<div class="form-group">
                        <label class="control-label col-xs-3" >Tujuan</label>
                        <div class="col-xs-9">
						<div class="form-line">
                        <select name="tujuan"  class="form-control" id=""required>
                                <option value="">=Pilih Tujuan=</option>
                                <option value="Padang-Painan">Padang-Painan</option>
                                <option value="Painan-Padang">Painan-Padang</option>
                               
                            </select>
                        </div>
						</div>
                    </div>

					<div class="form-group">
                        <label class="control-label col-xs-3" >Id Bus</label>
                        <div class="col-xs-9">
						<div class="form-line">
                        <select name="id_bus" class="form-control show-tick" required>
		<option value="">-- Pilih --</option>
		<?php
		$alumni=$this->db->query("select* from tb_bus");
		foreach($alumni->result_array() as $i){
		$id_bus=$i['id_bus'];
		$nama_bus=$i['nama'];
		?>
		<option value="<?php echo $id_bus;?>"><?php echo $id_bus;?></option>
		<?php
		}
		?>
		</select>
                        </div>
						</div>
                    </div>


                        <div class="form-group">
                        <label class="control-label col-xs-3" >Nama Sopir</label>
                        <div class="col-xs-9">
                        <div class="form-line">
                           
                     <input type="text" name="nama_sopir" class="form-control" required>
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
                        $id_jadwal=$a['id_jadwal'];
                        $tujuan=$a['tujuan'];
                        $nama_sopir=$a['nama_sopir'];
                        $jam=$a['jam'];
                   
                    ?>
                <div id="modalEditJadwal<?php echo $id_jadwal?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title" id="myModalLabel">Edit Jadwal</h3>
                    </div>
                    <form class="form-horizontal" method="post" action="<?php echo base_url().'index.php/Jadwal_controller/update_Jadwal'?>">
                        <div class="modal-body">
                            <input name="id_jadwal" type="hidden" value="<?php echo $id_jadwal;?>">
						
                     <div class="form-group">
                        <label class="control-label col-xs-3" >Jam Berangkat</label>
                        <div class="col-xs-9"><div class="form-line">
                             <select name="jam" widht="50" class="form-control" data-placeholder="Pilih...">
                      <option selected="selected">-Pilih-</option>
                       <option value="07:00" <?php if ($jam == '07:00'){echo "selected";}?>>07:00</option>
                        <option value="10:00" <?php if($jam == '10:00'){echo "selected";}?>>10:00</option>
                         <option value="12:00" <?php if($jam == '12:00'){echo "selected";}?>>12:00</option>
                                 
                                  
                     </select>
                        </div></div>
                    </div> 

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Tujuan</label>
                        <div class="col-xs-9">
						<div class="form-line">
                        <select name="tujuan"  class="form-control" id=""required>
                                <option value="">=Pilih Tujuan=</option>
                                <option value="Padang-Painan" <?php if($tujuan == 'Padang-Painan'){echo "selected";}?>>Padang-Painan</option>
                                <option value="Painan-Padang" <?php if($tujuan == 'Painan-Padang'){echo "selected";}?>>Painan-Padang</option>
                               
                            </select>
                        </div>
						</div>
                    </div>



                    <div class="form-group">
                        <label class="control-label col-xs-3" >Id Bus</label>
                        <div class="col-xs-9">
						<div class="form-line">
                                          <select name="id_bus" class="form-control" id="id_bus">
  



<?php
     
     $Program=$this->db->query("select* from tb_bus");
           foreach($Program->result_array() as $i){
        
           if ($a['id_bus']==$i['id_bus']) {
            $select="selected";
           }else{
            $select="";
           }
           echo "<option  $select value=".$i['id_bus'].">".$i['id_bus']."</option>";
   
   
          }
   
         ?>
     </select>
 
                        </div>
						</div>
                    </div>


                    <div class="form-group">
                        <label class="control-label col-xs-3" >Nama Sopir</label>
                        <div class="col-xs-9">
                        <div class="form-line">
                           
                     <input type="text" name="nama_sopir" value="<?php echo $nama_sopir?>" class="form-control" required>
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
                        $id_jadwal=$a['id_jadwal'];
                       
                    ?>
                <div id="modalHapusJadwal<?php echo $id_jadwal?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">                        
                        <h3 class="modal-title" id="myModalLabel">Hapus Jadwal</h3>
                    </div>
                    <form class="form-horizontal" method="post" action="<?php echo base_url().'index.php/Jadwal_controller/hapus_Jadwal'?>">
                        <div class="modal-body">
                            <p>Apakah anda yakin akan menghapus data ini ?</p>
                                    <input name="id_jadwal" type="hidden" value="<?php echo $id_jadwal; ?>">
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
