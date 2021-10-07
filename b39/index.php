<?php 
	include 'barcode.php';
	$kode=$_GET["kode"];
	barcode::code39($kode,30,1);
?>