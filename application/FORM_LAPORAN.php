
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
        <div class="panel panel-default">
          <div class="panel-body">
            <legend>Laporan</legend>
            <div class="row">
              

                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="tile">
                  <img src="<?php echo base_url().'/resources/images/lap1.png';?>" alt="Clipboard" class="tile-image big-illustration">
                  
                  <h3 class="tile-title">Laporan Barang</h3>
                  <p>Proses cetak laporan Barang.</p>
              
                  <form method="POST" action="<?php echo base_url();?>index.php/laporan/lap_barang_keseluruhan" id="fsemua" class="form-horizontal" role="form" target="_blank">
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
                  
                  <h3 class="tile-title">Laporan Instansi</h3>
                  <p>Proses cetak laporan Instansi.</p>
              
                  <form method="POST" action="<?php echo base_url();?>index.php/laporan/lap_instansi_keseluruhan" id="fsemua" class="form-horizontal" role="form" target="_blank">
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
                  <img src="<?php echo base_url().'/resources/images/file-sharing.png';?>" alt="Book" class="tile-image big-illustration">
                  <h3 class="tile-title">Laporan perkecamatan</h3>
                  <p>Proses cetak laporan Instansi perkecamatan.</p>
<form method="POST" action="<?php echo base_url();?>index.php/laporan/lap_Instansi_perkecamatan" id="fsemua" class="form-horizontal" role="form" target="_blank">
                 <div class="form-group">
                    <select data-toggle="select" name="th" id="th" class="form-control select select-primary mrs mbm" onchange="angkatan_report_url(this.value)">
                      <option value="">- Pilih Kecamtan -</option>

        <?php
        $alumni=$this->db->query("select* from instansi");
        foreach($alumni->result_array() as $i){
        $ID_Instansi=$i['ID_Instansi'];
        $Kecamatan=$i['Kecamatan'];
        
        ?>
        <option value="<?php echo $Kecamatan;?>"><?php echo $Kecamatan;?></option>
        <?php
        }
        ?>
        </select>
              <button 
              class="btn btn-primary btn-large btn-block" type="submit" id="th">Cetak</a>
             </button>      
                  </div>
                </div>
              </div>
              
  </form>



              <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="tile">
                  <img src="<?php echo base_url().'/assets/img/icons/svg/map.svg';?>" alt="Clipboard" class="tile-image big-illustration">
                  
                  <h3 class="tile-title">Laporan Detail Barang</h3>
                  <p>Proses cetak laporan Detail Barang.</p>
              
                  <form method="POST" action="<?php echo base_url();?>index.php/laporan/lap_Detail_barang_keseluruhan" id="fsemua" class="form-horizontal" role="form" target="_blank">
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
                  <img src="<?php echo base_url().'/assets/img/icons/svg/clipboard.svg';?>" alt="Book" class="tile-image big-illustration">
                  <h3 class="tile-title">Laporan PerBarang</h3>
                  <p>Proses cetak laporan berdasarkan Barang.</p>
<form method="POST" action="<?php echo base_url();?>index.php/laporan/lap_perbarang" id="fsemua" class="form-horizontal" role="form" target="_blank">
                 <div class="form-group">
                    <select data-toggle="select" name="th" id="th" class="form-control select select-primary mrs mbm" onchange="angkatan_report_url(this.value)">
                      <option value="">- Pilih Barang -</option>

        <?php
        $alumni=$this->db->query("select * from barang");
        foreach($alumni->result_array() as $i){
        $Kode_Barang=$i['Kode_Barang'];
        $Nama_Barang=$i['Nama_Barang'];
        
        ?>
        <option value="<?php echo $Nama_Barang;?>"><?php echo $Nama_Barang;?></option>
        <?php
        }
        ?>
        </select>
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
                  <h3 class="tile-title">Laporan Per Tahun </h3>
                  <p>Proses cetak laporan per Tahun .</p>
<form method="POST" action="<?php echo base_url();?>index.php/laporan/lap_pertahun" id="fsemua" class="form-horizontal" role="form" target="_blank">
                 <div class="form-group">
                    <select data-toggle="select" name="th" id="th" class="form-control select select-primary mrs mbm" onchange="angkatan_report_url(this.value)">
                      <option value="">- Pilih Tahun -</option>
                <option value="2010">2010</option>
                  <option value="2011">2011</option>
                  <option value="2012">2012</option>
                  <option value="2013">2013</option>
                  <option value="2014">2014</option>
                  <option value="2015">2015</option>
                  <option value="2016">2016</option>
                  <option value="2017">2017</option>
                  <option value="2018">2018</option>
                  <option value="2019">2019</option>
                  <option value="2020">2020</option>
                    </select>
              <button 
              class="btn btn-primary btn-large btn-block" type="submit" id="th">Cetak</a>
             </button>      
                  </div>
                </div>
              </div>
              
  </form>

              <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="tile">
                  <img src="<?php echo base_url().'/resources/images/files.png';?>" alt="Book" class="tile-image big-illustration">
                  <h3 class="tile-title">Laporan Per Status</h3>
                  <p>Proses cetak laporan berdasarkan Status.</p>
<form method="POST" action="<?php echo base_url();?>index.php/laporan/lap_D_Perstatus" id="fsemua" class="form-horizontal" role="form" target="_blank">
                 <div class="form-group">
                    <select data-toggle="select" name="th" id="th" class="form-control select select-primary mrs mbm" onchange="angkatan_report_url(this.value)">
                      <option value="">- Pilih Status -</option>
                  <option value="BAIK">BAIK</option>
                  <option value="RUSAK">RUSAK</option>
        </select>
              <button 
              class="btn btn-primary btn-large btn-block" type="submit" id="th">Cetak</a>
             </button>      
                  </div>
                </div>
              </div>
              
  </form>
                



              <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="tile">
                  <img src="<?php echo base_url().'/assets/img/icons/svg/map.svg';?>" alt="Book" class="tile-image big-illustration">
                  <h3 class="tile-title">Laporan Per Instansi</h3>
                  <p>Proses cetak laporan berdasarkan Instansi.</p>
<form method="POST" action="<?php echo base_url();?>index.php/laporan/lap_d_perinstansi" id="fsemua" class="form-horizontal" role="form" target="_blank">
                 <div class="form-group">
                    <select data-toggle="select" name="th" id="th" class="form-control select select-primary mrs mbm" onchange="angkatan_report_url(this.value)">
                      <option value="">- Pilih Instansi -</option>

        <?php
        $alumni=$this->db->query("select* from distribusi_barang");
        foreach($alumni->result_array() as $i){
        $No_Distribusi=$i['No_Distribusi'];
        $instansi=$i['instansi'];
        
        ?>
        <option value="<?php echo $instansi;?>"><?php echo $instansi;?></option>
        <?php
        }
        ?>
        </select>
              <button 
              class="btn btn-primary btn-large btn-block" type="submit" id="th">Cetak</a>
             </button>      
                  </div>
                </div>
              </div>
              
  </form>

             </div>
               
                
               
      

             </div>

          <!--
            <div class="row">
       <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="tile">
                  <img src="<?php echo base_url().'/resources/images/lap.png';?>" alt="Clipboard" class="tile-image big-illustration">
                  
                  <h3 class="tile-title">Laporan Pekerjaan</h3>
                  <p>Proses cetak laporan pakerjaan.</p>
              
                  <form method="POST" action="<?php echo base_url();?>index.php/laporan/lap_pekerjaan" id="fsemua" class="form-horizontal" role="form" target="_blank">
                 <div class="form-group">

                   <select data-toggle="select" name="th" id="th" class="form-control select select-primary mrs mbm" onchange="angkatan_report_url(this.value)">
                      <option value="">- Pilih Pekerjaan -</option>
                   
                  <option value="Manager">Manager</option>
                  <option value="Supervisor">Supervisor</option>
                  <option value="Staf admin">Staf admin</option>
               
                    </select>
                  <button 
              class="btn btn-primary btn-large btn-block" type="submit" id="th">Cetak</a>
             </button> 

              </div>
              </div>
              </div>
             </form>
            
             

     

               


              <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="tile">
                  <img src="<?php echo base_url().'/assets/img/icons/svg/map.svg';?>" alt="Clipboard" class="tile-image big-illustration">
                  
                  <h3 class="tile-title">Laporan lama mencari kerja</h3>
                  <p>Proses cetak laporan lama mencari kerja.</p>
              
                  <form method="POST" action="<?php echo base_url();?>index.php/laporan/lap_pekerjaan_lama" id="fsemua" class="form-horizontal" role="form" target="_blank">
                 <div class="form-group">

                   <select data-toggle="select" name="th" id="th" class="form-control select select-primary mrs mbm" onchange="angkatan_report_url(this.value)">
                      <option value="">- Pilih Rentang Waktu -</option>
                  <option value="telah bekerja sebelum lulus">Telah bekerja sebelum lulus</option>
                  <option value="< 3 bulan">< 3 bulan</option>
                  <option value="3 - 6 bulan">3 - 6 bulan</option>
                  <option value="7 - 12 bulan">7 - 12 bulan</option>
                  <option value="> 1 tahun">7 - 12 bulan</option>
                 
               
                    </select>
                  <button 
              class="btn btn-primary btn-large btn-block" type="submit" id="th">Cetak</a>
             </button> 

              </div>
              </div>
              </div>
             </form>

               
              

                 <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="tile">
                  <img src="<?php echo base_url().'/resources/images/files.png';?>" alt="Clipboard" class="tile-image big-illustration">
                  
                  <h3 class="tile-title">Laporan Detail alumni</h3>
                  <p>Proses cetak laporan detail alumni.</p>
      
                  <form method="POST" action="<?php echo base_url() .'index.php/Laporan/Detail_lap_alumni_admin/'?>" id="fsemua" class="form-horizontal" role="form" target="_blank">
                <div class="form-group">

      
    <input class="form-control" name="th" placeholder="Masukan Nobp">
                                      <button 
              class="btn btn-primary btn-large btn-block" type="submit"  id="th">Cetak</a>
             </button> 

              </div>
              </div>
              </div>
             </form>


     <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="tile">
                  <img src="<?php echo base_url().'/resources/images/file-sharing.png';?>" alt="Clipboard" class="tile-image big-illustration">
                  
                  <h3 class="tile-title">Laporan Kuisioner</h3>
                  <p>Proses cetak laporan kuisioner.</p>
      
                  <form method="POST" action="<?php echo base_url() .'index.php/Laporan/Lap_Kusioner_admin/'?>" id="fsemua" class="form-horizontal" role="form" target="_blank">
                
       <div class="form-group">
    <input class="form-control" name="th" placeholder="Masukan nobp">
                                      <button 
              class="btn btn-primary btn-large btn-block" type="submit"  id="th">Cetak</a>
             </button> 

              </div>
              </div>
              </div>
             </form>
                

  <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="tile">
                  <img src="<?php echo base_url().'/assets/img/icons/svg/map.svg';?>" alt="Book" class="tile-image big-illustration">
                  <h3 class="tile-title">Laporan Kuisioner LLS</h3>
                  <p>Proses cetak laporan Tahun LLs Kuisioner.</p>
<form method="POST" action="<?php echo base_url();?>index.php/laporan/cetak_kuisioner_al" id="fsemua" class="form-horizontal" role="form" target="_blank">
                 <div class="form-group">
                    <select data-toggle="select" name="th" id="th" class="form-control select select-primary mrs mbm" onchange="angkatan_report_url(this.value)">
                      <option value="">- Pilih Tahun Lulus -</option>
                   
                  <option value="2010">2010</option>
                  <option value="2011">2011</option>
                  <option value="2012">2012</option>
                  <option value="2013">2013</option>
                  <option value="2014">2014</option>
                  <option value="2015">2015</option>
                  <option value="2016">2016</option>
                  <option value="2017">2017</option>
                  <option value="2018">2018</option>
                  <option value="2019">2019</option>
                  <option value="2020">2020</option>
                    </select>
              <button 
              class="btn btn-primary btn-large btn-block" type="submit" id="th">Cetak</a>
             </button>      
                  </div>
                </div>
              </div>
              
  </form>
 <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="tile">
                  <img src="<?php echo base_url().'/resources/images/Excel3.png';?>" alt="Book" class="tile-image big-illustration">
                  <h3 class="tile-title">Laporan Kuisioner excel</h3>
                  <p>Proses cetak laporan Tahun LLs Kuisioner.</p>
<form method="POST" action="<?php echo base_url();?>index.php/laporan/cetak_kuisioner_excel" id="fsemua" class="form-horizontal" role="form" target="_blank">
                 <div class="form-group">
                    <select data-toggle="select" name="th" id="th" class="form-control select select-primary mrs mbm" onchange="angkatan_report_url(this.value)">
                      <option value="">- Pilih Tahun Lulus -</option>
                   
                  <option value="2010">2010</option>
                  <option value="2011">2011</option>
                  <option value="2012">2012</option>
                  <option value="2013">2013</option>
                  <option value="2014">2014</option>
                  <option value="2015">2015</option>
                  <option value="2016">2016</option>
                  <option value="2017">2017</option>
                  <option value="2018">2018</option>
                  <option value="2019">2019</option>
                  <option value="2020">2020</option>
                    </select>
              <button 
              class="btn btn-primary btn-large btn-block" type="submit" id="th">Cetak</a>
             </button>      
                  </div>
                </div>
              </div>
              
  </form>

             <!-- <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="tile">
                  <img src="<?php echo base_url().'/assets/img/icons/svg/clipboard.svg';?>" alt="Clipboard" class="tile-image big-illustration">
                  <h3 class="tile-title">Download Kusioner Excel</h3>
                  <p>Proses cetak keseluruhan kusioner.</p>
                  <form method="POST" action="<?php echo base_url();?>index.php/laporan/Lapkuesionerexcel" id="fsemua" class="form-horizontal" role="form" target="_blank">
                 <div class="form-group">
                  <button 
              class="btn btn-primary btn-large btn-block" type="submit" id="th">Cetak</a>
             </button> 

              </div>
              </div>
              </div>
             </form>  -->

        

              </div>
              </div>



             
            
           

              

  