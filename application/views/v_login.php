


<?php $pesan = $this->session->flashdata('pesan');
if (!empty($pesan)) {
  echo $pesan;
}
?>           
<!DOCTYPE html>
<html lang="en">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>|| Login Page</title>
  <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo_putih.png">

  <link href="<?php echo base_url().'asset/'?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'asset_login/'?>css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'asset_login/'?>css/fontawesome/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'asset_login/'?>css/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'asset_login/'?>css/bootstrap-select.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'asset_login/'?>css/magnific-popup.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'asset_login/'?>css/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'asset_login/'?>plugins/scroll/scrollbar.css">
    <link class="skin" rel="stylesheet" type="text/css" href="<?php echo base_url().'asset_login/'?>css/skin/skin-9.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'asset_login/'?>css/templete.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'asset_login/'?>css/switcher.css" />
    <!--<link rel="icon" href="img/.png">-->
</head>


<body id="bg">
<div class="page-wrapers">
        <!-- Content -->
        <div id="particles-js" class="page-content dez-login bg-primary-dark">
            <div class="relative z-index3">
                <div class="top-head text-center p-a40">
                    <a href="index.php"></a>

                </div>
                <br>
                <div class="login-form style-2">
                    <div class="tab-content">
                        <div id="login" class="tab-pane active text-center">
                            <form class="p-a30 dez-form" method="post" action="<?php echo base_url().'index.php/Login/auth'?>">                       
                                <img src="<?php echo base_url().'assets/'?>logo1.png" alt="logo"  width="100">
                                <div class="panel-heading">
                        <h3 class="panel-title"><center>WEB PT. HPS <br>(HARUN PANDUKO SATI) </h3>
                    </div>
                                <p>Masukkan Username Dan Password. </p>
                                <?php echo $this->session->flashdata('msg');?>
                                <div class="dez-separator-outer m-b5">
                                    <div class="dez-separator bg-primary style-liner"></div>
                                </div>
                                <div class="form-group">
                                <i class="icon-unlock"></i> <input type="text" name="username"  class="form-control" class="col-xs-12" placeholder="Username">
                                </div>
                                <div class="form-group">
                              <input type="password" name="password"  class="form-control" placeholder="Password">
                                </div>
                                <div class="form-group text-left">
                                    <input name="login" type="submit" value="Login" class="site-button pull-right">
                                    <!-- <a href="<?php echo base_url().'index.php/user/form_regist'?>" class="btn btn-md btn-info btn-block" >Register</a> -->
                                    
                                </div>
                                <br>
                            </form>
                            <div class="bg-primary p-a15 bottom">
						<a data-toggle="tab" href="#developement-1" class="text-white">Register</a>
					</div> 
                        </div>
                        <div id="developement-1" class="tab-pane fade ">
                
                            <form class="p-a30 dez-form text-center" method="POST" action="<?php echo base_url().'index.php/Penumpang_controller/tambah_penumpang'?>">
                            
                                <h3 class="form-title m-t0">REGISTER</h3>
                                <div class="dez-separator-outer m-b5">
                                    <div class="dez-separator bg-primary style-liner"></div>
                                </div>
                                <p>Enter your data. </p>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Name:(Exp. Mehong Oren)" name="nama" type="text" autofocus>
                                    <p align="left"><i> <font color="red">*Nama tidak boleh tanda kutip (''"")</font></i> </p>
                                </div>

                                <div class="form-group">
                                    <input class="form-control" placeholder="Alamat" name="alamat" type="text">
                                    <!-- <p align="left"><i> <font color="red">*Nama tidak boleh tanda kutip (''"")</font></i> </p> -->
                                </div>


                                <div class="form-group">
								<select name="jenis_kelamin" widht="50" class="form-control" placeholder="Pilih...">
								<option selected="selected">-Pilih Jenis Kelmin-</option>
								<option value="Laki-Laki">Laki-Laki</option>
								<option value="Perempuan">Perempuan</option>
							
                                </select>
                         
                                </div>

                                <div class="form-group">
                                    <input class="form-control" placeholder="Telpon" name="telepon" type="text">
                                    <!-- <p align="left"><i> <font color="red">*Nama tidak boleh tanda kutip (''"")</font></i> </p> -->
                                </div>

                                <div class="form-group">
                                   <input class="form-control" placeholder="Username:(Exp.PEB2190474 )" id="pw1" name="username" type="text" value="">
								</div>				

								<div class="form-group">
                                   <input class="form-control" placeholder="Password" id="pw1" name="password" type="password" value="">
								</div>
								
                                
                                <div class="form-group text-left"> <a class="site-button outline gray" data-toggle="tab" href="#login">Back</a>
                                    <button class="site-button pull-right">Register</button>
                                </div>
                            </form>
                        </div>
                        <div id="developement-" class="tab-pane fade">
                            <form class="p-a30 dez-form text-center text-center">
                                <h3 class="form-title m-t0">Silakan Melapor Ke Admin</h3>

                                <div class="form-group text-left ">
                                    <a class="site-button outline gray" data-toggle="tab" href="#login">Back</a>
                                    <!-- <button class="site-button pull-right">Submit</button> -->
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="bottom-footer text-center text-white">
                    <p>Copyright   &copy;  2011 - <?php echo date('Y'); ?> &nbsp; nuri </p>
                </div>
            </div>
        </div>
        <!-- Content END-->
    </div>



    
    
  <script src="assets/libs/jquery/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url().'asset_login/'?>js/jquery.min.js"></script>
    <!-- jquery.min js -->
    <script type="text/javascript" src="<?php echo base_url().'asset_login/'?>js/bootstrap.min.js"></script>
    <!-- bootstrap.min js -->
    <script type="text/javascript" src="<?php echo base_url().'asset_login/'?>js/bootstrap-select.min.js"></script>
    <!-- Form js -->
    <script type="text/javascript" src="<?php echo base_url().'asset_login/'?>js/jquery.bootstrap-touchspin.js"></script>
    <!-- Form js -->
    <script type="text/javascript" src="<?php echo base_url().'asset_login/'?>js/magnific-popup.js"></script>
    <!-- magnific-popup js -->
    <script type="text/javascript" src="<?php echo base_url().'asset_login/'?>js/waypoints-min.js"></script>
    <!-- waypoints js -->
    <script type="text/javascript" src="<?php echo base_url().'asset_login/'?>js/counterup.min.js"></script>
    <!-- counterup js -->
    <script type="text/javascript" src="<?php echo base_url().'asset_login/'?>js/jquery.countdown.js"></script>
    <!-- jquery countdown -->
    <script type="text/javascript" src="<?php echo base_url().'asset_login/'?>js/imagesloaded.js"></script>
    <!-- masonry  -->
    <script type="text/javascript" src="<?php echo base_url().'asset_login/'?>js/masonry-3.1.4.js"></script>
    <!-- masonry  -->
    <script type="text/javascript" src="<?php echo base_url().'asset_login/'?>js/masonry.filter.js"></script>
    <!-- masonry  -->
    <script type="text/javascript" src="<?php echo base_url().'asset_login/'?>js/owl.carousel.js"></script>
    <!-- OWL  Slider  -->
    <script type="text/javascript" src="<?php echo base_url().'asset_login/'?>js/custom.min.js"></script>
    <!-- custom fuctions  -->
    <script type="text/javascript" src="<?php echo base_url().'asset_login/'?>js/dz.carousel.js"></script>
    <!-- sortcode fuctions  -->
    <!-- switcher fuctions -->
    <script type="text/javascript" src="j<?php echo base_url().'asset_login/'?>s/switcher.min.js"></script>
    <!-- particles  -->
    <script src="<?php echo base_url().'asset_login/'?>js/particles.js"></script>
    <script src="<?php echo base_url().'asset_login/'?>js/particles.app.js"></script>
</body>

</html>

