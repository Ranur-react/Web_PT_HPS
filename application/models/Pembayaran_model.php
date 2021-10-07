<?php
class Pembayaran_model extends CI_Model
{
	function tampil_pembayaran()
	{
		$hsl=$this->db->query("SELECT * FROM pembayaran ORDER BY `kodebayar` ASC;");
		return $hsl;
	}


	function tampil_notin()
	{
		$hsl=$this->db->query(" SELECT  `tb_tiket`.*, 
		`tb_jadwal`.`jam`,
		`tb_jadwal`.`tujuan`,
		`tb_jadwal`.`nama_sopir`,
		`tb_kategori`.`nama`,
		`tb_kategori`.`harga`
		FROM tb_jadwal, tb_kategori,tb_tiket
		WHERE tb_tiket.id_jadwal = tb_jadwal.id_jadwal
		AND tb_tiket.`kategori` = tb_kategori.`id_kategori`
		AND tb_tiket.kode_tiket
		  NOT IN(SELECT pembayaran.`kodetiket` FROM `pembayaran`)
		ORDER BY `tanggal` ASC");
		return $hsl;
	}



	function simpan_pembayaran($kodebayar,$kodetiket,$namapelanggan,$namasopir,$nomormobil,$jadwalkeberangkatan,$jam,$jumlahbayar,$totalbayar,$kembalian,$keterangan)
	{
		$hsl=$this->db->query("INSERT INTO pembayaran VALUES ('$kodebayar','$kodetiket','$namapelanggan','$namasopir','$nomormobil','$jadwalkeberangkatan','$jam','$jumlahbayar','$totalbayar','$kembalian','2')");
		return $hsl;
	}
	function hapus_pembayaran($kodebayar){
		$hsl=$this->db->query("DELETE FROM pembayaran where kodebayar='$kodebayar'");
		return $hsl;
	}
	function update_pembayaran($kodebayar,$keterangan){
		$hsl=$this->db->query("UPDATE pembayaran set keterangan='$keterangan' where kodebayar='$kodebayar'");
		return $hsl;
	}

	


	function faktur($faktur)
	{
		$hsl=$this->db->query("	SELECT *,
DATE_FORMAT(`jadwalkeberangkatan`, '%d %M %Y') AS tanggalberangkat,jam,
`jumlahbayar`,`totalbayar`,kembalian  FROM pembayaran JOIN `tb_tiket` ON kodetiket=`kode_tiket` WHERE `kodebayar`='$faktur'");
		return $hsl;
	}
	

function get_no_invoice(){
		$q = $this->db->query("SELECT MAX(RIGHT(kodebayar,4)) AS kd_max FROM pembayaran");
        $kd = "";
        if($q->num_rows()>0){
            foreach($q->result() as $k){
                $tmp = ((int)$k->kd_max)+1;
                $kd = sprintf("%04s", $tmp);
            }
        }else{
            $kd = "0001";
        }
        date_default_timezone_set('Asia/Jakarta');
        return date('dmy').$kd;
	}

  
 
   

}
?>