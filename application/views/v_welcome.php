<h4></h4><hr/>
<div class="form-group">
 <div class="alert alert-success alert-dismissable">
   <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    Selamat datang di website PT. HPS (HARUN PADOKO SAKTI) . Anda Login Sebagai <b><?php echo $this->session->userdata('ses_nama');?> <a href="#" class="alert-link"></a>.</b>

 </div>


  <?php if($this->session->userdata('akses')=='3'):?>             

<div class="row">
 <div class="alert alert-success alert-dismissable">
   <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
   <h3 class="panel-title"></i> <b>Petunjuk Pemesanan Tiket</b></h3> 
    <p>1.Plih Menu Lihat Jadwal Keberangkatan untuk melihat jadwal keberangkatan bus</p>    
     <p>2.Pilih Menu Pesan Tiket</p>
                                <p>3.Isi Data Tiket</p>
                                <p>Keterangan kategori</p>
                                <p>Anak-anak: 5-12 Tahun Harga : 20000</p> 
                                <p>Dewasa: 12 > harga:30000 </p>
                                <p>4.Setelah anda mengisi data tiket dan mendapatkan kode silahkan kunjungi loket untuk melakukan pembayaran</p>

 </div>

   
 <div class="col-lg-3 col-md-6">
        <div class="panel panel-green">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <img src="<?php echo base_url().'/assets/img/icons/svg/clipboard.svg';?>" alt="Clipboard" class="tile-image big-illustration">
                    </div>
                    <div class="col-xs-9 text-right">
                        <!--<div class="huge"><?php echo $data["total"]["posting"]; ?></div>-->
                        <div><b>PESAN TIKET</b></div>
                    </div>
                </div>
            </div>
            <a href="<?php echo base_url().'index.php/Tiket_controller/form_tiket_user'?>">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
 
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-red">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                         <img src="<?php echo base_url().'/assets/img/icons/svg/Book.svg';?>" alt="Book" class="tile-image big-illustration">
             
                    </div>
                    <div class="col-xs-9 text-right">
                        <!--<div class="huge"><?php echo $data["total"]["kontak"]; ?></div>-->
                        <div><B>JADWAL KEBERANGKATAN</B></div>
                    </div>
                </div>
            </div>
            <a href="<?php echo base_url().'index.php/Jadwal_controller/v_jadwal_user'?>">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>

   

 
   
                  
<?php endif;?>
   

   <?php if($this->session->userdata('akses')=='2'):?>             

<div class="row">
   


       <div class="col-lg-3 col-md-6">
        <div class="panel panel-green">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <img src="<?php echo base_url().'/assets/img/icons/svg/clipboard.svg';?>" alt="Clipboard" class="tile-image big-illustration">
                    </div>
                    <div class="col-xs-9 text-right">
                        <!--<div class="huge"><?php echo $data["total"]["posting"]; ?></div>-->
                        <div><b>LAPORAN</b></div>
                    </div>
                </div>
            </div>
            <a href="<?php echo base_url().'index.php/Laporan/FORM_LAPORAN'?>">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>

   
                  
<?php endif;?>
   
                      
                        <?php if($this->session->userdata('akses')=='1'):?>             
<div class="row">
    
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <img src="<?php echo base_url().'/resources/images/gamabrposting.png';?>" alt="Clipboard" class="tile-image big-illustration">
                 
                    </div>
                    <div class="col-xs-9 text-right">
                       <!-- <div class="huge"><?php echo $data["total"]["alumni"]; ?></div>-->
                        <div> <b>PEMBAYARAN</b></div>
                    </div>
                </div>
            </div>
            <a href="<?php echo base_url().'index.php/pembayaran_controller'?>">
                <div class="panel-footer">
                    <span class="pull-left">Tampilkan Semua</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
  
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-green">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <img src="<?php echo base_url().'/assets/img/icons/svg/clipboard.svg';?>" alt="Clipboard" class="tile-image big-illustration">
                    </div>
                    <div class="col-xs-9 text-right">
                        <!--<div class="huge"><?php echo $data["total"]["posting"]; ?></div>-->
                        <div><b>LAPORAN</b></div>
                    </div>
                </div>
            </div>
            <a href="<?php echo base_url().'index.php/Laporan/FORM_LAPORAN'?>">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
 

    <div class="col-lg-3 col-md-6">
        <div class="panel panel-yellow">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <img src="<?php echo base_url().'/resources/images/kuesioner.png';?>" alt="Clipboard" class="tile-image big-illustration">
                 
                    </div>
                    <div class="col-xs-9 text-right">
                       <!-- <div class="huge"><?php echo $data["total"]["Kuisioner"]; ?></div>-->
                        <div><B>PELANGGAN</B></div>
                    </div>
                </div>
            </div>
            <a href="<?php echo base_url().'index.php/Penumpang_controller/'?>">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    

    <div class="col-lg-3 col-md-6">
        <div class="panel panel-red">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                         <img src="<?php echo base_url().'/assets/img/icons/svg/Book.svg';?>" alt="Book" class="tile-image big-illustration">
             
                    </div>
                    <div class="col-xs-9 text-right">
                        <!--<div class="huge"><?php echo $data["total"]["kontak"]; ?></div>-->
                        <div><B>PENGIRIMAN</B></div>
                    </div>
                </div>
            </div>
            <a href="<?php echo base_url().'index.php/Pengiriman_controller/'?>">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>


     <div class="col-lg-3 col-md-6">
        <div class="panel panel-red">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                       <img src="<?php echo base_url().'/resources/images/mbjb.JPG';?>" alt="Clipboard" class="tile-image big-illustration">
                 
                    </div>
                    <div class="col-xs-9 text-right">
                       <!-- <div class="huge"><?php echo $data["total"]["Kuisioner"]; ?></div>-->
                        <div><B>MANAGE USER</B></div>
                    </div>
                </div>
            </div>
            <a href="<?php echo base_url().'index.php/user/'?>">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>

     <div class="col-lg-3 col-md-6">
        <div class="panel panel-yellow">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <img src="<?php echo base_url().'/resources/images/imagesjb.jpg';?>" alt="Clipboard" class="tile-image big-illustration">
                 
                    </div>
                    <div class="col-xs-9 text-right">
                       <!-- <div class="huge"><?php echo $data["total"]["Kuisioner"]; ?></div>-->
                        <div><B>TIKET</B></div>
                    </div>
                </div>
            </div>
            <a href="<?php echo base_url().'index.php/Tiket_controller'?>">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
<?php endif;?>
    



                   
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-bar-chart-o fa-fw"></i> Info User</h3>
            </div>
            <div class="panel-body">

                <div class="row">
                    <div class="col-md-6">

                        <table class="table">
                            <tbody>
                            <tr>
                                <th>Nama Lengkap</th>
                                <th>:</th>
                                <td><?php echo $this->session->userdata('ses_nama');?></td>
                            </tr>
                            <tr>
                                <th>Username</th>
                                <th>:</th>
                                <td><?php echo $this->session->userdata('ses_id');?></td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <th>:</th>
                                <td><?php echo $this->session->userdata('email');?></td>
                            </tr>
      
                            </tbody>
                        </table>

                    </div>

                     <div class="col-md-6">


  <!-- INFO USER -->
            <div class="right-panel">
               <u> <B><div class="top-right-panel"></div></B></u>
                <div class="bottom-right-panel">

                    <table class="table" style="margin-bottom: 0;">
                        <tbody>
                        <tr>
                            <td style="border-top:0;">IP User</td>
                            <td style="border-top:0;">:</td>
                            <td style="border-top:0;">
                                <b>
                                    <?php echo $_SERVER["REMOTE_ADDR"]; ?>
                                </b>

                            </td>
                        </tr>
                        <tr>
                            <td>Waktu</td>
                            <td>:</td>
                            <td>
                                <b>
                                    <?php

                                    date_default_timezone_set('Asia/Jakarta');

                                    echo date('h : i : s');
                                    ?>
                                </b>
                            </td>
                        </tr>
                        <tr>
                            <td>Tanggal</td>
                            <td>:</td>
                            <td>
                                <b>
                                    <?php echo date('d F Y'); ?>
                                </b>
                            </td>
                        </tr>
                        <tr>
                            <td>Browser</td>
                            <td>:</td>
                            <td>
                                <b>
                                    <?php echo $_SERVER['HTTP_USER_AGENT']; ?>
                                </b>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
      

        </div>
        <!-- END OF RIGHT CONTENT WEBSITE -->