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
              Input Surat Jalan
            </h3>
          </div>
          <hr>
<br><br>
 


  
                          








      <form class="form-horizontal" method="post" action="<?php echo base_url().'index.php/Surat_jalan_controller/tambah_surat_jalan'?>">
       
                <div class="card-body">
               
                <!-- <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Tanggal</label>
                    <div class="col-sm-10">
                      <table>
                        <tr>
                          <td width="1000">
                          <input class="form-control" type="date" name="tanggal" id="tanggal" placholder/>
                      <input class="form-control" type="hidden" name="kode" id="kode_tiket" placholder/>
                          </td>
                          <td>
                        <a class="btn  btn-primary btnTambah" data-toggle="modal"data-target="#modal_jadwal_kategori"><i class="fa fa-search"></i></a> 
                          </td>
                        </tr>

                      </table>
                      
                    </div>
                  </div> -->


                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Tanggal</label>
                    <div class="col-sm-10">
                      <input class="form-control" type="date" name="tanggal" id="tanggal" placholder/>
                    </div>
                  </div>

                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Id Pengiriman</label>
                    <div class="col-sm-10">
  

        <select  class="form-control" name="id_pengiriman" id="id_pengiriman" onclick="change(this.value)">
  <option selected="selected">-Pilih-</option>
  <p class="help-block"></p> 
  <?php


//$result = mysqli_query("select * from No_Register"); 
 $result=$this->db->query("SELECT  `tb_pengiriman_barang`.*, 
 `tb_jadwal`.`jam`,
 
 `tb_jadwal`.`nama_sopir`,
 `tb_jadwal`.`id_bus`,
 SUM(tb_pengiriman_barang.jumlah)AS jumlah_barang
 FROM tb_jadwal,tb_pengiriman_barang
 WHERE `tb_pengiriman_barang`.id_jadwal = tb_jadwal.id_jadwal
 GROUP BY (tb_jadwal.jam),(tb_pengiriman_barang.tanggal),(tb_pengiriman_barang.tujuan)
  ORDER BY (tb_pengiriman_barang.tanggal) ASC 
  ");
 $js = "var A = new Array();\n";  
    foreach($result->result_array() as $row){  
      $id_pengiriman=$row['id_pengiriman'];   
      
echo '<option value="' . $row['id_pengiriman'] . '">' . $row['id_pengiriman'] . '</option>';    
         

           
        $js .= "A['" . $row['id_pengiriman'] . "'] = {jumlah_barang:'".addslashes($row['jumlah_barang']). "',id_pengiriman:'".addslashes($row['id_pengiriman']). "'};\n";   
    }      

   ?>
</select>


    <script type="text/javascript">   
    <?php echo $js; ?> 
    function change(id_pengiriman){ 
    document.getElementById('id_pengiriman').value = A[id_pengiriman].id_pengiriman; 
     document.getElementById('jumlah_barang').value = A[id_pengiriman].jumlah_barang; 
    


    }; 
    </script>
                      
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Kode Tiket</label>
                    <div class="col-sm-10">
                    <!-- <input class="form-control" type="text" name="tujuan" id="tujuan" placholder/> -->

                    <!-- <select name="tujuan" widht="50" class="form-control" data-placeholder="Pilih..." required>
                      <option >-Pilih-</option>
                       <option value="Padang-Painan" >Padang-Painan</option>
                        <option value="Painan-Padang" >Painan-Padang</option>
                     </select> -->


                     <select  class="form-control" name="kode_tiket" id="kode_tiket" onclick="change1(this.value)">
  <option selected="selected">-Pilih-</option>
  <p class="help-block"></p> 
  <?php


//$result = mysqli_query("select * from No_Register"); 
 $result=$this->db->query("SELECT  `tb_tiket`.*, 
 `tb_jadwal`.`jam`,
 `tb_jadwal`.`tujuan`,
 `tb_jadwal`.`nama_sopir`,
 `tb_kategori`.`nama`,
 `tb_kategori`.`harga`,
 COUNT(tb_tiket.kode_tiket) AS jumlah_penumpang,
 COUNT(tb_jadwal.jam) AS jam
 FROM tb_jadwal, tb_kategori,tb_tiket
 WHERE tb_tiket.id_jadwal = tb_jadwal.id_jadwal
 AND tb_tiket.`kategori` = tb_kategori.`id_kategori`
 GROUP BY tanggal,jam, `tb_jadwal`.`tujuan`,STATUS DESC 
  ");
 $js1 = "var B = new Array();\n";  
    foreach($result->result_array() as $row){  
      $kode_tiket=$row['kode_tiket'];   
      
echo '<option value="' . $row['kode_tiket'] . '">' . $row['kode_tiket'] . '</option>';    
         

           
        $js1 .= "B['" . $row['kode_tiket'] . "'] = {jumlah_penumpang:'".addslashes($row['jumlah_penumpang']). "',kode_tiket:'".addslashes($row['kode_tiket']). "'};\n";   
    }      

   ?>
</select>


    <script type="text/javascript">   
    <?php echo $js1; ?> 
    function change1(kode_tiket){ 
    document.getElementById('kode_tiket').value = B[kode_tiket].kode_tiket; 
     document.getElementById('jumlah_penumpang').value = B[kode_tiket].jumlah_penumpang; 
    


    }; 
    </script>
                    </div>
                  </div>
        

                         <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Jumlah Penumpang</label>
                    <div class="col-sm-10">
                      <table>
                        <tr>
                          <td width="">
                      <input class="form-control" type="number" name="jumlah_penumpang" id="jumlah_penumpang"  style="width:80px;"  placholder/>
                          </td>
                        
                        </tr>

                      </table>
                      
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Jumlah Barang</label>
                    <div class="col-sm-10">
                      <input class="form-control" type="number" name="jumlah_barang" id="jumlah_barang" style="width:80px;" placholder/>
                    </div>
                  </div>

                <!-- /.col-lg-12 -->
            </div>
            </div>
            

              
                   <!-- /.card-body -->
          <div class="card-footer">
             <button type="submit" class="btn btn-primary btnSimpan" name="simpan" > <span class="glyphicon  
glyphicon-floppy-saved"></span> Simpan</button> 
            <a href="<?php echo base_url().'index.php/Surat_jalan_controller'?>" class="btn btn-default float-right">Cancel</a>
          </div>
          <!-- /.card-footer -->

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