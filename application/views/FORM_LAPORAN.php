
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
        <div class="panel panel-default">
          <div class="panel-body">
            <legend>Laporan</legend>
            <div class="row">
              

            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="tile">
                  <img src="<?php echo base_url().'/resources/images/lap.png';?>" alt="Clipboard" class="tile-image big-illustration">
                  
                  <h3 class="tile-title">Laporan  tiket pertahun</h3>
                  <p>Proses cetak laporan tiket pertahun.</p>
              
                  <form method="POST" action="<?php echo base_url();?>index.php/laporan/lap_tiket_pertahun" id="fsemua" class="form-horizontal" role="form" target="_blank">
                 <div class="form-group">
               
                      <select data-toggle="select" name="th" class="form-control select select-primary mrs mbm" onchange="angkatan_report_url(this.value)">
                      <option value="">- Pilih Tahun -</option>
                      <?php
                      $now = date('Y');
                      for($a=2016;$a<=$now;$a++)
                      {
                        echo "<option value='$a'>$a</option>";
                      }
                      ?>
                    </select>
                   
                  <button 
              class="btn btn-primary btn-large btn-block" type="submit"  id="th">Cetak</a>
             </button> 

              </div>
              </div>
              </div>
             </form>


             



 <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="tile">
                  <img src="<?php echo base_url().'assets/img/icons/svg/map.svg';?>" alt="Book" class="tile-image big-illustration">
                  <h3 class="tile-title">Laporan Tiket Per Bulan </h3>
                  <p>Proses cetak laporan tiket per Bulan .</p>
<form method="POST" action="<?php echo base_url();?>index.php/laporan/lap_tiket_perbulan" id="fsemua" class="form-horizontal" role="form" target="_blank">
                 <div class="form-group">

                 <input type="month" class="form-control" name="th">
                    <!-- <div class="col-lg-6">
                      <select data-toggle="select" name="bulan" class="form-control select select-primary mrs mbm" onchange="angkatan_report_url(this.value)">
                              <option value="">- Pilih Bulan -</option>
                        <option value="01">Januari</option>
                          <option value="02">Februari</option>
                          <option value="03">Maret</option>
                          <option value="04">April</option>
                          <option value="05">Mai</option>
                          <option value="06">Juni</option>
                          <option value="07">Juli</option>
                          <option value="08">Agustus</option>
                          <option value="09">September</option>
                          <option value="10">Oktober</option>
                          <option value="11">November</option>
                          <option value="12">Desember</option>
                    </select>
                    </div>
                    <div class="col-lg-6">
                      <select data-toggle="select" name="tahun" class="form-control select select-primary mrs mbm" onchange="angkatan_report_url(this.value)">
                      <option value="">- Pilih Tahun -</option>
                      <?php
                      $now = date('Y');
                      for($a=2016;$a<=$now;$a++)
                      {
                        echo "<option value='$a'>$a</option>";
                      }
                      ?>
                    </select>
                    </div> -->
              <button 
              class="btn btn-primary btn-large btn-block" type="submit" id="th">Cetak</a>
             </button>      
                  </div>
                </div>
              </div>
              
  </form>


  <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="tile">
                  <img src="<?php echo base_url().'/assets/img/icons/svg/Book.svg';?>" alt="Book" class="tile-image big-illustration">
                  <h3 class="tile-title">Laporan Tiket Per tanggal </h3>
                  <p>Proses cetak laporan tiket per tanggal .</p>
<form method="POST" action="<?php echo base_url();?>index.php/laporan/lap_tiket_pertanggal" id="fsemua" class="form-horizontal" role="form" target="_blank">
                 <div class="form-group">
                   <input type="date" class="form-control" name="th">
                  
              <button 
              class="btn btn-primary btn-large btn-block" type="submit" id="th">Cetak</a>
             </button>      
                  </div>
                </div>
              </div>
              
  </form>



  
  <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="tile">
                  <img src="<?php echo base_url().'/resources/images/lap.png';?>" alt="Clipboard" class="tile-image big-illustration">
                  
                  <h3 class="tile-title">Laporan perngiriman perbulan</h3>
                  <p>Proses cetak perngiriman perbulan.</p>
              
                  <form method="POST" action="<?php echo base_url();?>index.php/laporan/lap_pengiriman_perbulan" id="fsemua" class="form-horizontal" role="form" target="_blank">
                 <div class="form-group">
                   <input type="month" class="form-control" name="th">
                  <button 
              class="btn btn-primary btn-large btn-block" type="submit"  id="th">Cetak</a>
             </button> 

              </div>
              </div>
              </div>
             </form>

              <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="tile">
                  <img src="<?php echo base_url().'/resources/images/lap.png';?>" alt="Clipboard" class="tile-image big-illustration">
                  
                  <h3 class="tile-title">Laporan perngiriman pertanggal</h3>
                  <p>Proses cetak perngiriman pertanggal.</p>
              
                  <form method="POST" action="<?php echo base_url();?>index.php/laporan/Lap_pengiriman_pertanggal" id="fsemua" class="form-horizontal" role="form" target="_blank">
                 <div class="form-group">
                   <input type="date" class="form-control" name="th">
                  <button 
              class="btn btn-primary btn-large btn-block" type="submit"  id="th">Cetak</a>
             </button> 

              </div>
              </div>
              </div>
             </form>

              <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="tile">
                  <img src="<?php echo base_url().'/resources/images/lap.png';?>" alt="Clipboard" class="tile-image big-illustration">
                  
                  <h3 class="tile-title">Laporan  pengiriman pertahun</h3>
                  <p>Proses cetak laporan pengiriman pertahun.</p>
              
                  <form method="POST" action="<?php echo base_url();?>index.php/laporan/lap_pengiriman_pertahun" id="fsemua" class="form-horizontal" role="form" target="_blank">
                 <div class="form-group">
                  
                      <select data-toggle="select" name="tahun" class="form-control " onchange="angkatan_report_url(this.value)">
                      <option value="">- Pilih Tahun -</option>
                      <?php
                      $now = date('Y');
                      for($a=2016;$a<=$now;$a++)
                      {
                        echo "<option value='$a'>$a</option>";
                      }
                      ?>
                    </select>
                   
                  <button 
              class="btn btn-primary btn-large btn-block" type="submit"  id="th">Cetak</a>
             </button> 

              </div>
              </div>
              </div>
             </form>



  <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="tile">
                  <img src="<?php echo base_url().'/assets/img/icons/svg/clipboard.svg';?>" alt="Book" class="tile-image big-illustration">
                  <h3 class="tile-title">Laporan pelanggan</h3>
                  <p>Proses cetak laporan pelanggan.</p>
<form method="POST" action="<?php echo base_url();?>index.php/laporan/lap_penumpang" id="fsemua" class="form-horizontal" role="form" target="_blank">
                 <div class="form-group">
                 <!--  <input type="date" name="th" class="form-control">
                    <select data-toggle="select" name="th" id="th" class="form-control select select-primary mrs mbm" onchange="angkatan_report_url(this.value)">
                      <option value="">- Pilih hari -</option>
                  <option value="Sunday">Minggu</option>
                  <option value="Mondey">Senin</option>
                  <option value="Tuesday">Selasa</option>
                  <option value="Wednesday">Rabu</option>
                  <option value="Thursday">Kamis</option>
                  <option value="Friday">Jum'at</option>
                  <option value="Saturday">Sabtu</option>
           </select> -->
              <button 
              class="btn btn-primary btn-large btn-block" type="submit" id="th">Cetak</a>
             </button>      
                  </div>
                </div>
              </div>
              
  </form>



                <!-- <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="tile">
                  <img src="<?php echo base_url().'/resources/images/file-sharing.png';?>" alt="Clipboard" class="tile-image big-illustration">
                  
                  <h3 class="tile-title">Laporan pegewai</h3>
                  <p>Proses cetak laporan pegewai.</p>
              
                  <form method="POST" action="<?php echo base_url();?>index.php/Laporan/lap_pegawai" id="fsemua" class="form-horizontal" role="form" target="_blank">
                 <div class="form-group">
                  <button 
              class="btn btn-primary btn-large btn-block" type="submit"  id="th">Cetak</a>
             </button> 

              </div>
              </div>
              </div>
             </form> -->


              <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="tile">
                  <img src="<?php echo base_url().'/resources/images/lap1.png';?>" alt="Clipboard" class="tile-image big-illustration">
                  
                  <h3 class="tile-title">Laporan Bus</h3>
                  <p>Proses cetak laporan Bus.</p>
              
                  <form method="POST" action="<?php echo base_url();?>index.php/laporan/lap_mobil" id="fsemua" class="form-horizontal" role="form" target="_blank">
                 <div class="form-group">
                  <button 
              class="btn btn-primary btn-large btn-block" type="submit"  id="th">Cetak</a>
             </button> 

              </div>
              </div>
              </div>
             </form>


              <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="tile">
                  <img src="<?php echo base_url().'/resources/images/lap.png';?>" alt="Clipboard" class="tile-image big-illustration">
                  
                  <h3 class="tile-title">Laporan jadwal</h3>
                  <p>Proses cetak laporan jadwal.</p>
              
                  <form method="POST" action="<?php echo base_url();?>index.php/laporan/lap_jadwal" id="fsemua" class="form-horizontal" role="form" target="_blank">
                 <div class="form-group">
                  <button 
              class="btn btn-primary btn-large btn-block" type="submit"  id="th">Cetak</a>
             </button> 

              </div>
              </div>
              </div>
             </form>
<!-- 
              <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="tile">
                  <img src="<?php echo base_url().'/resources/images/lap.png';?>" alt="Clipboard" class="tile-image big-illustration">
                  
                  <h3 class="tile-title">Laporan Kategori</h3>
                  <p>Proses cetak kategori.</p>
              
                  <form method="POST" action="<?php echo base_url();?>index.php/laporan/lap_kategori" id="fsemua" class="form-horizontal" role="form" target="_blank">
                 <div class="form-group">
                  <button 
              class="btn btn-primary btn-large btn-block" type="submit"  id="th">Cetak</a>
             </button> 

              </div>
              </div>
              </div>
             </form> -->

             
          

     




          






             
            
           

              

  