<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Produk By almepal">
    <meta name="author" content="almepal">

    <title>Transaksi Penjualan</title>

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
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap-datetimepicker.min.css'?>">
</head>

<body>

    <!-- Navigation -->
   
    <!-- Page Content -->
    <div class="container">
        <!--
<?php 
    $b=$tampil->row_array();
?>-->
        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <div class="alert alert-success">
                    <strong>Transaksi Berhasil Silahkan Cetak Faktur !</strong>
                    <a class="btn btn-default" href="<?php echo base_url().'index.php/Pembayaran_controller/'?>"><span class="fa fa-backward"></span>Kembali</a>

                    <?php foreach ($tampil->result_array()as $a){
                  
                     $ikodebayard=$b['kodebayar'];
                    ?>
                 
                    <input type="hidden"  value="<?php echo $a['kodebayar'];?>" name="">
                <?php }?>
                    <a class="btn btn-info" href="<?php echo base_url().'index.php/Pembayaran_controller/faktur/'.$a['kodebayar'];?>" target="_blank"><span class="fa fa-print"></span>Cetak</a>

                   
                </div>
            </div>
        </div>
        <!-- /.row -->
        <!-- Projects Row -->
       
        

        <!--END MODAL-->

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p style="text-align:center;">Copyright &copy; <?php echo date('Y');?> by m lamepal wanda</p>
                </div>
            </div>
            <!-- /.row -->
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="<?php echo base_url().'assets/js/jquery.js'?>"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url().'assets/dist/js/bootstrap-select.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/js/bootstrap.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/js/dataTables.bootstrap.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/js/jquery.dataTables.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/js/jquery.price_format.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/js/moment.js'?>"></script>
    <script src="<?php echo base_url().'assets/js/bootstrap-datetimepicker.min.js'?>"></script>
    
    
    
</body>

</html>
