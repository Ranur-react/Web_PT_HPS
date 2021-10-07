<?php
class M_grafik extends CI_Model{
	function statistik_stok(){
        $query = $this->db->query("SELECT  DATE_FORMAT(jadwalkeberangkatan,'%Y') AS tanggal,SUM(`totalbayar`)
 AS total FROM `pembayaran`  GROUP BY DATE_FORMAT(jadwalkeberangkatan,'%Y')");
         
        if($query->num_rows() > 0){
            foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }

    function graf_penjualan_perbulan($bulan){
        $query = $this->db->query(" SELECT DATE_FORMAT(jadwalkeberangkatan,'%d') AS tanggal,SUM(`totalbayar`) as total FROM `pembayaran`
  WHERE DATE_FORMAT(jadwalkeberangkatan,'%M %Y')='$bulan' GROUP BY DAY(jadwalkeberangkatan)");
         
        if($query->num_rows() > 0){
            foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }

    function graf_penjualan_pertahun($tahun){
        $query = $this->db->query("SELECT DATE_FORMAT(`jadwalkeberangkatan`,'%M') AS bulan,SUM(`totalbayar`)
 total FROM `pembayaran` WHERE YEAR(`jadwalkeberangkatan`)='$tahun' GROUP BY MONTH(`jadwalkeberangkatan`)");
         
        if($query->num_rows() > 0){
            foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }
}