<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    

    <title>  WEB PT. HPS </title>

<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css'); ?>"></link>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/sweetalert/sweetalert.css'); ?>"></link>

<script type="text/javascript" src="<?php echo base_url('assets/jquery.js'); ?>"></script>
<!--<script type="text/javascript" src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js'); ?>"></script>-->
<script type="text/javascript" src="<?php echo base_url('assets/sweetalert/sweetalert.min.js'); ?>"></script>


	<link href="<?php echo base_url().'asset/'?>vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">
	<link href="<?php echo base_url().'asset/'?>vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url().'asset/'?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo base_url().'asset/'?>vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url().'asset/'?>dist/css/sb-admin-2.css" rel="stylesheet">
    <!-- sweetalert CSS -->
    <link rel="stylesheet" href="alert/css/sweetalert.css">

    <!-- Morris Charts CSS -->
    <link href="<?php echo base_url().'asset/'?>vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url().'asset/'?>vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

<link href="<?php echo base_url().'assets/dist/css/bootstrap-select.css'?>" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
             
                </button>
 
                <a class="navbar-brand" href=""><b>PT. HPS (HARUN PANDUKO SATI)  </b></a>

            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                
                <!-- /.dropdown -->
               
                <!-- /.dropdown -->
   

        

         <div class="pull-left">
                        <img src="<?php echo base_url('images/'.$this->session->userdata('img')); ?>" class="img-circle" alt="User Image" width="50" height="50"/>
                      </div>
               <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>

                   
                    <ul class="dropdown-menu dropdown-user">
                        <a href="#">
                     

                        <!-- <img class="nav-user-photo" src="<?php echo base_url('images/'.$this->session->userdata('img')); ?>"class="img-circle" alt="Gambar malas ngoding" width="80" height="60"  />-->
                           <?php if($this->session->userdata('akses')=='1'):?>
                       
                        <li><a href="<?php echo base_url().'index.php/user/detail_admin/'?>"><i class="fa fa-user fa-fw"></i> <?php echo $this->session->userdata('ses_nama');?></a>
                        </li> 
                         <?php endif;?>  

                         <?php if($this->session->userdata('akses')=='2'):?>
                       
                        <li><a href="<?php echo base_url().'index.php/user/detail_kabag/'?>"><i class="fa fa-user fa-fw"></i> <?php echo $this->session->userdata('ses_nama');?></a>
                        </li> 
                         <?php endif;?>  

                              <?php if($this->session->userdata('akses')=='3'):?>
                       
                        <li><a href="<?php echo base_url().'index.php/alumnicontroler/detail_alumni_user/'?>"><i class="fa fa-user fa-fw"></i> <?php echo $this->session->userdata('ses_nama');?></a>
                        </li> 
                         <?php endif;?>  

                          <?php if($this->session->userdata('akses')=='4'):?>
                       
                        <li><a href="<?php echo base_url().'index.php/user/detail_PKIII/'?>"><i class="fa fa-user fa-fw"></i> <?php echo $this->session->userdata('ses_nama');?></a>
                        </li> 
                         <?php endif;?>  
                                         
                                             
                        <li class="divider"></li>
                        <li><a href="<?php echo base_url().'index.php/Login/logout'?>"><i class="fa fa-sign-out fa-fw"></i> Keluar</a>
                        </li>
                    </ul>
                  
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->
            




                        
       
           

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <!--<input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>

					
  -->
								 <a href="<?php echo base_url().'index.php/HOME/Utama'?>"><img class="" src="<?php echo base_url().'assets/'?>logo1.png" class="" width="120" height="100"></a>
                                <br>
                              <center> <h5><b>PT. HPS</b></h5></center>
								
                            </div>
                            <!-- /input-group -->
                        </li>

                       
						<?php
							if($this->session->userdata('masuk')==false) 
						{ ?>

                      
						<li>
                            <a href="<?php echo base_url().'index.php/alumnicontroler/form_Registrasi'?>"><i class="fa fa-list fa-fw"></i> Registrasi alumni</a>
                        </li>
						<?php		
						} ?>

						<?php if($this->session->userdata('akses')=='1'):?>
                        

                         <li>
                            <a href="<?php echo base_url().'index.php/HOME/Utama'?>"><i class="fa fa-dashboard fa-fw"></i> Halaman Utama</a>
                        </li>

                      <!--  <li>
                            <a href="<?php echo base_url().'index.php/Posting/lists'?>"><i class="fa fa-dashboard fa-fw"></i> Lihat Postingan</a>
                        </li>-->
                        
						
                        <li>
                            <a href="#"><i class="fa fa-table fa-fw"></i> Data Master<span class="fa arrow"></span></a>

                            <ul class="nav nav-second-level">

                                
                              
                                <!-- <li>
                                    <a href="<?php echo base_url().'index.php/sopir_controller/'?>">Data Pegawai</a>
                                </li> -->


                                 <li>
                                    <a href="<?php echo base_url().'index.php/mobil_controler/'?>">Data Bus</a>
                                </li>


                                 <li>
                                    <a href="<?php echo base_url().'index.php/jadwal_controller/'?>">Data Jadwal</a>
                                </li>

                                 <li>
                                    <a href="<?php echo base_url().'index.php/Kategori_controler/'?>">Data Kategori</a>
                                </li>


                                
                                

                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                      
						
                            <li>
                            <a href="<?php echo base_url().'index.php/Penumpang_controller/'?>"><i class="fa fa-user fa-fw"></i> Data  Pelanggan</a>
                        </li>
						
                            <li>
                            <a href="<?php echo base_url().'index.php/Tiket_controller/'?>"><i class="fa fa-user fa-fw"></i> Transaksi Tiket</a>
                        </li>


                            <li>
                            <a href="<?php echo base_url().'index.php/pembayaran_controller/'?>"><i class="fa fa-user fa-fw"></i> Pembayaran</a>
                        </li>


                        <li>
                            <a href="<?php echo base_url().'index.php/Pengiriman_controller/'?>"><i class="fa fa-user fa-fw"></i> Pengirirman</a>
                        </li>

                        <li>
                            <a href="<?php echo base_url().'index.php/Surat_jalan_controller/'?>"><i class="fa fa-user fa-fw"></i> Surat Jalan</a>
                        </li>
                     
                     
                       
				
                        <li>
                            <a href="<?php echo base_url().'index.php/Laporan/FORM_LAPORAN'?>"><i class="fa fa-book fa-fw"></i> Laporan</a>

                        </li>

                        

                         <!-- <li>
                            <a href="<?php echo base_url().'index.php/Grafik'?>"><i class="fa fa-line-chart"></i> GRAFIK</a>

                        </li> -->

                        <li>
                            <a href="<?php echo base_url().'index.php/user/'?>"><i class="fa fa-key fa-fw"></i> Manajemen Administrator</a>
                        </li>
                        
                        <li>
                            <a href="<?php echo base_url().'index.php/user/formubahpassword'?>"><i class="fa fa-key fa-fw"></i> Ganti Password</a>
                        </li>
                        <?php endif;?>
                      

                      
						






                        <!-- BATAS USER DUA (2)-->
						<?php if($this->session->userdata('akses')=='2'):?>
                          <li>
                            <a href="<?php echo base_url().'index.php/HOME/Utama'?>"><i class="fa fa-dashboard fa-fw"></i> Halaman Utama</a>
                        </li>

                      <!--  <li>
                            <a href="<?php echo base_url().'index.php/Posting/lists'?>"><i class="fa fa-dashboard fa-fw"></i> Lihat Postingan</a>
                        </li>-->
                        
                        <!--
                        <li>
                            <a href="#"><i class="fa fa-table fa-fw"></i> Data Master<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                
                                <li>
                                    <a href="<?php echo base_url().'index.php/Barang_controler/'?>">Data Barang</a>
                                </li>
                            
                                <li>
                                    <a href="<?php echo base_url().'index.php/instansi_controller/'?>">Data Instansi</a>
                                </li>
                            
                                
                                
                                
                            </ul>-->
                            <!-- /.nav-second-level -->
                        </li>
                      
                       


                        <li>
                            <a href="<?php echo base_url().'index.php/Laporan/FORM_LAPORAN'?>"><i class="fa fa-book fa-fw"></i> Laporan</a>
                        </li>
                     
                     
                        <!--
                        <li>
                            <a href="<?php echo base_url().'index.php/Detail_Barang_controller/'?>"><i class="fa fa-user fa-fw"></i> Detail Barang</a>
                        </li>
                  
                        
                        <li>
                            <a href="<?php echo base_url().'index.php/user/'?>"><i class="fa fa-key fa-fw"></i> Manajemen Administrator</a>
                        </li>
                    
                      -->
						<?php endif;?>
						<?php if($this->session->userdata('akses')=='3'):?>
                         <li>
                            <a href="<?php echo base_url().'index.php/HOME/Utama'?>"><i class="fa fa-dashboard fa-fw"></i> Halaman Utama</a>
                        </li>

                      
                        <li>
                            <a href="<?php echo base_url().'index.php/Tiket_controller/tampil_data_peruser'?>"><i class="fa fa-user fa-fw"></i> Transaksi Tiket</a>
                        </li>


                    

                        <li>
                            <a href="<?php echo base_url().'index.php/Jadwal_controller/v_jadwal_user'?>"><i class="fa fa-user fa-fw"></i> Lihat Jadwal</a>
                        </li>
						
						  <!-- <li>
                            <a href="<?php echo base_url().'index.php/Laporan/FORM_LAPORAN'?>"><i class="fa fa-book fa-fw"></i> Laporan</a>
                        </li> -->

                        <li>
                            <a href="<?php echo base_url().'index.php/user/formubahpassword_USER'?>"><i class="fa fa-key fa-fw"></i> Ganti Password</a>
                        </li>
    
                    


						<?php endif;?>
						<?php if($this->session->userdata('akses')=='4'):?>
                        <li>
                            <a href="<?php echo base_url().'index.php/posting/Utama'?>"><i class="fa fa-dashboard fa-fw"></i> Halaman Utama</a>
                        </li>

                        
                        <li>
                            <a href="<?php echo base_url().'index.php/Posting/formposting/'?>"><i class="fa fa-table fa-fw"></i>Input Posting</a>
                        </li>

                         <li>
                            <a href="<?php echo base_url().'index.php/alumnicontroler/form_lapalumnipertahunlulus'?>"><i class="fa fa-book fa-fw"></i> Laporan</a>
                        </li>
						

                        <li>
                            <a href="<?php echo base_url().'index.php/user/formubahpassword'?>"><i class="fa fa-key fa-fw"></i> Ganti Password</a>
                        </li>
						<?php endif;?>
						<?php
							if($this->session->userdata('masuk')==true) 
						{ ?>
						<li>
                           <a href="<?php echo base_url().'index.php/Login/logout'?>"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li> 
						<?php 
						}
							else
   						{ 
						?>
						<li>
                           <a href="<?php echo base_url().'index.php/Login'?>"><i class="fa fa-sign-in fa-fw"></i> Login</a>
                        </li>
						<?php		
						} 
						?>	
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
           &nbsp
            <!-- /.row -->
            

              <?php if (isset($isi)) echo $isi; else echo"";?>

           
            <!-- /.row -->
       
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="<?php echo base_url().'assets/dist/js/bootstrap-select.min.js'?>"></script> 
    <script src="<?php echo base_url().'asset/'?>vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url().'asset/'?>vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url().'asset/'?>vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="<?php echo base_url().'asset/'?>vendor/raphael/raphael.min.js"></script>
    <script src="<?php echo base_url().'asset/'?>vendor/morrisjs/morris.min.js"></script>
    <script src="<?php echo base_url().'asset/'?>data/morris-data.js"></script>

	<script src="<?php echo base_url().'asset/'?>vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url().'asset/'?>vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="<?php echo base_url().'asset/'?>vendor/datatables-responsive/dataTables.responsive.js"></script>


    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url().'asset/'?>dist/js/sb-admin-2.js"></script>


 <div id="footer">
        <div class="content-footer">
            <div class="left-footer"></div>
            <div class="middle-footer">
                &copy; Copyright by al. All right reserved. Powered by <a href="http://nuri.com" target="_blank">Nuri</a>.
            </div>
            <div class="right-footer"></div>
        </div>
        <div class="clear"></div>
    </div>
</div>


</body>

</html>

<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
<script src="alert/js/sweetalert.min.js"></script>
<script src="alert/js/qunit-1.18.0.js"></script>

<script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script>

     <script>
        jQuery(document).ready(function($){
            $('.delete-link').on('click',function(){
                var getLink = $(this).attr('href');
                swal({
                        title: 'Peringatan',
                        text: 'Yakin Data Ini Dihapus?',
                        type: "warning",
                        html: true,
                        confirmButtonColor: '#d9534f',
                        showCancelButton: true,
                        confirmButtonText: "Hapus",
                        closeOnConfirm: true,
                      cancelButtonClass: 'btn btn-danger',
                        },function(){
                        window.location.href = getLink
                    });
                return false;
            });
        });
    </script>

    <script>
        jQuery(document).ready(function($){
            $('.edit-link').on('click',function(){
               var getLink = $(this).attr('href');
                swal({
                        title: ' Alert',
                        text: 'Apakah Data ini akan anda update ?',
                        type:'info',
                        html: true,
                        confirmButtonColor: '#00ffff',
                        showCancelButton: true,
                        confirmButtonClass: 'btn btn-success',
                        },function(){
                        window.location.href = getLink
                    });
                return false;
            });
        });
    </script>
 <script>
        jQuery(document).ready(function($){
            $('.sukses-link').on('click',function(){
               var getLink = $(this).attr('href');
                swal({
                        title: ' Alert',
                        text: 'Data berhasil Di simpan',
                        type:'success',
                        html: true,
                        confirmButtonColor: '#00ffff',
                        showCancelButton: true,
                       confirmButtonClass: 'btn btn-success',
                      
                        },function(){
                        window.location.href = getLink
                    });
                return false;
            });
        });
    </script>
