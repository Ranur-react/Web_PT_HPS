/*
SQLyog Ultimate v12.4.3 (64 bit)
MySQL - 10.1.26-MariaDB : Database - db_travel
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_travel` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `db_travel`;

/*Table structure for table `pelanggan` */

DROP TABLE IF EXISTS `pelanggan`;

CREATE TABLE `pelanggan` (
  `kodepelanggan` char(7) NOT NULL,
  `namapelanggan` varchar(20) DEFAULT NULL,
  `alamat` varchar(20) DEFAULT NULL,
  `jeniskelamin` varchar(20) DEFAULT NULL,
  `nohp` varchar(12) DEFAULT NULL,
  `tanggalberangkat` date DEFAULT NULL,
  `tanggalpesan` date DEFAULT NULL,
  `kodemobil` char(7) DEFAULT NULL,
  `kodejadwal` char(7) DEFAULT NULL,
  `kodesopir` char(7) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `keterangan` char(30) DEFAULT NULL,
  `f` char(3) DEFAULT NULL,
  PRIMARY KEY (`kodepelanggan`),
  KEY `fk1` (`kodemobil`),
  KEY `fk2` (`kodejadwal`),
  KEY `fk3` (`kodesopir`),
  CONSTRAINT `fk1` FOREIGN KEY (`kodemobil`) REFERENCES `mobil` (`kodemobil`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk2` FOREIGN KEY (`kodejadwal`) REFERENCES `jadwal` (`kodejadwal`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk3` FOREIGN KEY (`kodesopir`) REFERENCES `sopir` (`kodesopir`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `pelanggan` */

/*Table structure for table `pembayaran` */

DROP TABLE IF EXISTS `pembayaran`;

CREATE TABLE `pembayaran` (
  `kodebayar` char(20) NOT NULL,
  `kodetiket` char(15) DEFAULT NULL,
  `namapelanggan` varchar(50) DEFAULT NULL,
  `namasopir` char(100) DEFAULT NULL,
  `nomormobil` char(100) DEFAULT NULL,
  `jadwalkeberangkatan` date DEFAULT NULL,
  `jam` char(15) DEFAULT NULL,
  `jumlahbayar` int(11) DEFAULT NULL,
  `totalbayar` int(11) DEFAULT NULL,
  `kembalian` int(11) DEFAULT NULL,
  `keterangan` int(1) DEFAULT NULL,
  PRIMARY KEY (`kodebayar`),
  KEY `kodetiket` (`kodetiket`),
  CONSTRAINT `pembayaran_ibfk_1` FOREIGN KEY (`kodetiket`) REFERENCES `tb_tiket` (`kode_tiket`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `pembayaran` */

insert  into `pembayaran`(`kodebayar`,`kodetiket`,`namapelanggan`,`namasopir`,`nomormobil`,`jadwalkeberangkatan`,`jam`,`jumlahbayar`,`totalbayar`,`kembalian`,`keterangan`) values 
('202107270001','TK-0045','fitri','Andi','BS-0002','2021-07-25','10:00',50000,20000,30000,2),
('202107270002','TK-0042','nuri yulfiami','Andi','BS-0002','2021-07-21','10:00',30000,30000,0,2);

/*Table structure for table `tb_bus` */

DROP TABLE IF EXISTS `tb_bus`;

CREATE TABLE `tb_bus` (
  `id_bus` char(15) NOT NULL,
  `nama` varchar(225) DEFAULT NULL,
  `nomor_bus` varchar(50) DEFAULT NULL,
  `merk` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_bus`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tb_bus` */

insert  into `tb_bus`(`id_bus`,`nama`,`nomor_bus`,`merk`) values 
('BS-0001','Sriwijaya Air','BA  3434 CU','Mistsubishi'),
('BS-0002','cinta damai','BA  1234 BU','Inova Streat');

/*Table structure for table `tb_jadwal` */

DROP TABLE IF EXISTS `tb_jadwal`;

CREATE TABLE `tb_jadwal` (
  `id_jadwal` char(15) NOT NULL,
  `jam` char(20) DEFAULT NULL,
  `tujuan` char(225) DEFAULT NULL,
  `id_bus` char(15) DEFAULT NULL,
  `nama_sopir` varchar(225) DEFAULT NULL,
  PRIMARY KEY (`id_jadwal`),
  KEY `id_bus` (`id_bus`),
  CONSTRAINT `tb_jadwal_ibfk_1` FOREIGN KEY (`id_bus`) REFERENCES `tb_bus` (`id_bus`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tb_jadwal` */

insert  into `tb_jadwal`(`id_jadwal`,`jam`,`tujuan`,`id_bus`,`nama_sopir`) values 
('JD-0001','07:00','Padang-Painan','BS-0001','BOY'),
('JD-0002','10:00','Painan-Padang','BS-0002','Andi'),
('JD-0003','12:00','Padang-Painan','BS-0001','Doni ilham');

/*Table structure for table `tb_jumlah_tiket` */

DROP TABLE IF EXISTS `tb_jumlah_tiket`;

CREATE TABLE `tb_jumlah_tiket` (
  `id_temp` int(11) NOT NULL AUTO_INCREMENT,
  `tiket` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_temp`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `tb_jumlah_tiket` */

insert  into `tb_jumlah_tiket`(`id_temp`,`tiket`) values 
(1,1),
(2,2),
(3,3),
(4,4),
(5,5);

/*Table structure for table `tb_kategori` */

DROP TABLE IF EXISTS `tb_kategori`;

CREATE TABLE `tb_kategori` (
  `id_kategori` char(15) NOT NULL,
  `nama` varchar(225) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_kategori`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tb_kategori` */

insert  into `tb_kategori`(`id_kategori`,`nama`,`harga`) values 
('KT-0003','Anak-anak',20000),
('KT-0004','Dewasa',30000);

/*Table structure for table `tb_kursi_penumpang` */

DROP TABLE IF EXISTS `tb_kursi_penumpang`;

CREATE TABLE `tb_kursi_penumpang` (
  `id_kursi` int(11) NOT NULL AUTO_INCREMENT,
  `kursi` char(15) DEFAULT NULL,
  PRIMARY KEY (`id_kursi`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

/*Data for the table `tb_kursi_penumpang` */

insert  into `tb_kursi_penumpang`(`id_kursi`,`kursi`) values 
(1,'1'),
(2,'2'),
(3,'3'),
(4,'4'),
(5,'5'),
(6,'6'),
(7,'7'),
(8,'8'),
(9,'9'),
(10,'10'),
(11,'11'),
(12,'12'),
(13,'13'),
(14,'14'),
(15,'15');

/*Table structure for table `tb_pegawai` */

DROP TABLE IF EXISTS `tb_pegawai`;

CREATE TABLE `tb_pegawai` (
  `id_pegawai` char(15) NOT NULL,
  `nama` varchar(225) DEFAULT NULL,
  `jenis_kelamin` char(20) DEFAULT NULL,
  `alamat` varchar(225) DEFAULT NULL,
  `telepon` varchar(15) DEFAULT NULL,
  `jabatan` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_pegawai`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tb_pegawai` */

/*Table structure for table `tb_pengiriman_barang` */

DROP TABLE IF EXISTS `tb_pengiriman_barang`;

CREATE TABLE `tb_pengiriman_barang` (
  `id_pengiriman` char(15) NOT NULL,
  `id_jadwal` char(15) DEFAULT NULL,
  `nama_pengirim` varchar(225) DEFAULT NULL,
  `nama_penerima` varchar(225) DEFAULT NULL,
  `alamat` varchar(225) DEFAULT NULL,
  `nohp` char(15) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `keterangan` varchar(225) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `tujuan` varchar(225) DEFAULT NULL,
  `biaya` int(11) DEFAULT NULL,
  `bayar` int(11) DEFAULT NULL,
  `kembalian` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_pengiriman`),
  KEY `id_jadwal` (`id_jadwal`),
  CONSTRAINT `tb_pengiriman_barang_ibfk_1` FOREIGN KEY (`id_jadwal`) REFERENCES `tb_jadwal` (`id_jadwal`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tb_pengiriman_barang` */

insert  into `tb_pengiriman_barang`(`id_pengiriman`,`id_jadwal`,`nama_pengirim`,`nama_penerima`,`alamat`,`nohp`,`tanggal`,`keterangan`,`jumlah`,`tujuan`,`biaya`,`bayar`,`kembalian`) values 
('PM-0003','JD-0003','dan','atau','jln. Kesehatan 2 no 11','023423','2021-06-20','1 kg iakn cupang',1,'Padang-Painan',350000,400000,50000),
('PM-0005','JD-0003','boy','ampristi','jln. Kesehatan 2 no 11','0823423','2021-06-20','50 ton sagu goreng\"',3,'Padang-Painan',50000,50000,0),
('PM-0006','JD-0003','boy','dani','jln gurita','081231','2021-06-20','23 bungkus nasi\"',4,'Padang-Painan',10000,60000,50000),
('PM-0007','JD-0003','danis','noy','jn jakarta','082342342','2021-06-20','minta',1,'Padang-Painan',1000,20000,19000),
('PM-0008','JD-0003','DANI','BOY','jln keseshant no 11','081372881528','2021-06-20','1 KG CABE GORENG',1,'Painan-Padang',50000,100000,50000),
('PM-0009','JD-0002','nuri','septi','jl.damar1 no.5','2','2021-07-22','kardus mie',0,'Painan-Padang',20000,30000,10000),
('PM-0010','JD-0001','septi','yani','dslsls','7493003','2021-07-26','fhgjk',2,'Padang-Painan',20000,30000,10000);

/*Table structure for table `tb_penumpang` */

DROP TABLE IF EXISTS `tb_penumpang`;

CREATE TABLE `tb_penumpang` (
  `id_penumpang` char(15) NOT NULL,
  `nama` varchar(225) DEFAULT NULL,
  `alamat` varchar(225) DEFAULT NULL,
  `jenis_kelamin` varchar(225) DEFAULT NULL,
  `telepon` varchar(15) DEFAULT NULL,
  `username` char(225) DEFAULT NULL,
  `password` char(225) DEFAULT NULL,
  PRIMARY KEY (`id_penumpang`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tb_penumpang` */

insert  into `tb_penumpang`(`id_penumpang`,`nama`,`alamat`,`jenis_kelamin`,`telepon`,`username`,`password`) values 
('PN-0001','danis','silatin','Laki-Laki','00234234','penumpang','123456'),
('PN-0002','fitriani','jln gurita no 175 d','Perempuan','023423','123','boy'),
('PN-0003','dani ilham','08234324','Laki-Laki','088345','dani','123'),
('PN-0004','anna','jln raya','Perempuan','08342343','anna','123'),
('PN-0005','BOY','jln gurita','Laki-Laki','08123213','BOY','123'),
('PN-0006','fitriani','jln gurita no 175 d','Laki-Laki','023423','fitriani','123'),
('PN-0007','nuri yulfiami','jl.damar 1 no.5','Perempuan','62002','nuri','123456'),
('PN-0008','','','-Pilih Jenis Kelmin-','','','');

/*Table structure for table `tb_surat_jalan` */

DROP TABLE IF EXISTS `tb_surat_jalan`;

CREATE TABLE `tb_surat_jalan` (
  `kode` char(15) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `nama_sopir` varchar(225) DEFAULT NULL,
  `tujuan` char(50) DEFAULT NULL,
  `jumlah_penumpang` int(11) DEFAULT NULL,
  `jumlah_barang` int(11) DEFAULT NULL,
  PRIMARY KEY (`kode`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tb_surat_jalan` */

insert  into `tb_surat_jalan`(`kode`,`tanggal`,`nama_sopir`,`tujuan`,`jumlah_penumpang`,`jumlah_barang`) values 
('SJ-0001','2021-07-21','PM-0003','TK-0001',1,9),
('SJ-0002','2021-07-22','PM-0008','TK-0018',1,1),
('SJ-0003','2021-07-22','PM-0003','TK-0018',2,9),
('SJ-0004','2021-07-21','PM-0010','TK-0018',4,2);

/*Table structure for table `tb_tiket` */

DROP TABLE IF EXISTS `tb_tiket`;

CREATE TABLE `tb_tiket` (
  `kode_tiket` char(15) NOT NULL,
  `id_kursi` int(11) DEFAULT NULL,
  `nama_penumpang` varchar(100) DEFAULT NULL,
  `alamat` char(100) DEFAULT NULL,
  `jenis_kelamin` char(50) DEFAULT NULL,
  `nohp` char(15) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `kategori` char(15) DEFAULT NULL,
  `id_jadwal` char(15) DEFAULT NULL,
  `keterangan` text,
  `status` int(11) DEFAULT NULL,
  `id_bus` char(15) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  PRIMARY KEY (`kode_tiket`),
  KEY `id_jadwal` (`id_jadwal`),
  KEY `kategori` (`kategori`),
  KEY `id_bus` (`id_bus`),
  KEY `id_kursi` (`id_kursi`),
  CONSTRAINT `tb_tiket_ibfk_1` FOREIGN KEY (`id_jadwal`) REFERENCES `tb_jadwal` (`id_jadwal`) ON UPDATE CASCADE,
  CONSTRAINT `tb_tiket_ibfk_2` FOREIGN KEY (`kategori`) REFERENCES `tb_kategori` (`id_kategori`) ON UPDATE CASCADE,
  CONSTRAINT `tb_tiket_ibfk_3` FOREIGN KEY (`id_bus`) REFERENCES `tb_bus` (`id_bus`) ON UPDATE CASCADE,
  CONSTRAINT `tb_tiket_ibfk_4` FOREIGN KEY (`id_kursi`) REFERENCES `tb_kursi_penumpang` (`id_kursi`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tb_tiket` */

insert  into `tb_tiket`(`kode_tiket`,`id_kursi`,`nama_penumpang`,`alamat`,`jenis_kelamin`,`nohp`,`tanggal`,`kategori`,`id_jadwal`,`keterangan`,`status`,`id_bus`,`harga`,`jumlah`,`total`) values 
('TK-0001',1,'NISA','jl.damar 1 no.5','Perempuan','9774040','2021-07-21','KT-0003','JD-0001','-',1,'BS-0001',20000,0,0),
('TK-0002',1,'NISA','jl.damar 1 no.5','Perempuan','9774040','2021-07-21','KT-0003','JD-0001','-',1,'BS-0001',20000,0,0),
('TK-0003',2,'fitri','lubuk buaya','Perempuan','9774040','2021-07-21','KT-0003','JD-0001','-',1,'BS-0001',20000,0,0),
('TK-0004',5,'kurrota akyun','padang','Perempuan','9350','2021-07-23','KT-0003','JD-0001','-',1,'BS-0001',20000,0,0),
('TK-0005',1,'NISA','jl.damar 1 no.5','Perempuan','9774040','2021-07-21','KT-0003','JD-0001','-',1,'BS-0001',20000,0,0),
('TK-0006',2,'fitri','lubuk buaya','Perempuan','9774040','2021-07-21','KT-0003','JD-0001','-',1,'BS-0001',20000,0,0),
('TK-0007',5,'kurrota akyun','padang','Perempuan','9350','2021-07-23','KT-0003','JD-0001','-',1,'BS-0001',20000,0,0),
('TK-0008',5,'NISA','padang','Perempuan','9350','2021-07-23','KT-0004','JD-0002','-',1,'BS-0002',30000,0,0),
('TK-0009',1,'NISA','jl.damar 1 no.5','Perempuan','9774040','2021-07-21','KT-0003','JD-0001','-',1,'BS-0001',20000,0,0),
('TK-0010',2,'fitri','lubuk buaya','Perempuan','9774040','2021-07-21','KT-0003','JD-0001','-',1,'BS-0001',20000,0,0),
('TK-0011',5,'kurrota akyun','padang','Perempuan','9350','2021-07-23','KT-0003','JD-0001','-',1,'BS-0001',20000,0,0),
('TK-0012',5,'NISA','padang','Perempuan','9350','2021-07-23','KT-0004','JD-0002','-',1,'BS-0002',30000,0,0),
('TK-0013',1,'NISA','jl.damar 1 no.5','Perempuan','9774040','2021-07-21','KT-0003','JD-0001','-',1,'BS-0001',20000,0,0),
('TK-0014',2,'fitri','lubuk buaya','Perempuan','9774040','2021-07-21','KT-0003','JD-0001','-',1,'BS-0001',20000,0,0),
('TK-0015',5,'kurrota akyun','padang','Perempuan','9350','2021-07-23','KT-0003','JD-0001','-',1,'BS-0001',20000,0,0),
('TK-0016',5,'NISA','padang','Perempuan','9350','2021-07-23','KT-0004','JD-0002','-',1,'BS-0002',30000,0,0),
('TK-0017',6,'nuri yulfiami','lubuk buaya','Perempuan','9350','2021-07-23','KT-0003','JD-0002','-',1,'BS-0002',20000,0,0),
('TK-0018',5,'nuri yulfiami','jl.damar 1 no.5','Perempuan','62002','2021-07-21','KT-0004','JD-0002','-',1,'BS-0002',30000,0,0),
('TK-0019',1,'NISA','jl.damar 1 no.5','Perempuan','9774040','2021-07-21','KT-0003','JD-0001','-',1,'BS-0001',20000,0,0),
('TK-0020',2,'fitri','lubuk buaya','Perempuan','9774040','2021-07-21','KT-0003','JD-0001','-',1,'BS-0001',20000,0,0),
('TK-0021',5,'kurrota akyun','padang','Perempuan','9350','2021-07-23','KT-0003','JD-0001','-',1,'BS-0001',20000,0,0),
('TK-0022',5,'NISA','padang','Perempuan','9350','2021-07-23','KT-0004','JD-0002','-',1,'BS-0002',30000,0,0),
('TK-0023',6,'nuri yulfiami','lubuk buaya','Perempuan','9350','2021-07-23','KT-0003','JD-0002','-',1,'BS-0002',20000,0,0),
('TK-0024',5,'nuri yulfiami','jl.damar 1 no.5','Perempuan','62002','2021-07-21','KT-0004','JD-0002','-',1,'BS-0002',30000,0,0),
('TK-0025',5,'nuri yulfiami','jl.damar 1 no.5','Perempuan','62002','2021-07-22','KT-0004','JD-0002','-',1,'BS-0002',30000,0,0),
('TK-0026',6,'nuri yulfiami','jl.damar 1 no.5','Perempuan','62002','2021-07-22','KT-0003','JD-0002','-',1,'BS-0002',20000,0,0),
('TK-0027',1,'NISA','jl.damar 1 no.5','Perempuan','9774040','2021-07-21','KT-0003','JD-0001','-',1,'BS-0001',20000,0,0),
('TK-0028',2,'fitri','lubuk buaya','Perempuan','9774040','2021-07-21','KT-0003','JD-0001','-',1,'BS-0001',20000,0,0),
('TK-0029',5,'kurrota akyun','padang','Perempuan','9350','2021-07-23','KT-0003','JD-0001','-',1,'BS-0001',20000,0,0),
('TK-0030',5,'NISA','padang','Perempuan','9350','2021-07-23','KT-0004','JD-0002','-',1,'BS-0002',30000,0,0),
('TK-0031',6,'nuri yulfiami','lubuk buaya','Perempuan','9350','2021-07-23','KT-0003','JD-0002','-',1,'BS-0002',20000,0,0),
('TK-0032',5,'nuri yulfiami','jl.damar 1 no.5','Perempuan','62002','2021-07-21','KT-0004','JD-0002','-',1,'BS-0002',30000,0,0),
('TK-0033',5,'nuri yulfiami','jl.damar 1 no.5','Perempuan','62002','2021-07-22','KT-0004','JD-0002','-',1,'BS-0002',30000,0,0),
('TK-0034',6,'nuri yulfiami','jl.damar 1 no.5','Perempuan','62002','2021-07-22','KT-0003','JD-0002','-',1,'BS-0002',20000,0,0),
('TK-0035',5,'fitri','jl.damar 1 no.5','Perempuan','699859','2021-07-25','KT-0003','JD-0002','-',1,'BS-0002',20000,0,0),
('TK-0036',3,'NISA','padang','Perempuan','74033','2021-07-25','KT-0003','JD-0002','-',1,'BS-0002',20000,0,0),
('TK-0037',1,'NISA','jl.damar 1 no.5','Perempuan','9774040','2021-07-21','KT-0003','JD-0001','-',1,'BS-0001',20000,0,0),
('TK-0038',2,'fitri','lubuk buaya','Perempuan','9774040','2021-07-21','KT-0003','JD-0001','-',1,'BS-0001',20000,0,0),
('TK-0039',5,'kurrota akyun','padang','Perempuan','9350','2021-07-23','KT-0003','JD-0001','-',1,'BS-0001',20000,0,0),
('TK-0040',5,'NISA','padang','Perempuan','9350','2021-07-23','KT-0004','JD-0002','-',1,'BS-0002',30000,0,0),
('TK-0041',6,'nuri yulfiami','lubuk buaya','Perempuan','9350','2021-07-23','KT-0003','JD-0002','-',1,'BS-0002',20000,0,0),
('TK-0042',5,'nuri yulfiami','jl.damar 1 no.5','Perempuan','62002','2021-07-21','KT-0004','JD-0002','-',2,'BS-0002',30000,0,0),
('TK-0043',5,'nuri yulfiami','jl.damar 1 no.5','Perempuan','62002','2021-07-22','KT-0004','JD-0002','-',1,'BS-0002',30000,0,0),
('TK-0044',6,'nuri yulfiami','jl.damar 1 no.5','Perempuan','62002','2021-07-22','KT-0003','JD-0002','-',1,'BS-0002',20000,0,0),
('TK-0045',5,'fitri','jl.damar 1 no.5','Perempuan','699859','2021-07-25','KT-0003','JD-0002','-',2,'BS-0002',20000,0,0),
('TK-0046',3,'NISA','padang','Perempuan','74033','2021-07-25','KT-0003','JD-0002','-',0,'BS-0002',20000,0,0);

/*Table structure for table `tb_tiket_temp` */

DROP TABLE IF EXISTS `tb_tiket_temp`;

CREATE TABLE `tb_tiket_temp` (
  `kode_tiket` int(15) NOT NULL AUTO_INCREMENT,
  `id_kursi` int(11) DEFAULT NULL,
  `nama_penumpang` varchar(100) DEFAULT NULL,
  `alamat` char(100) DEFAULT NULL,
  `jenis_kelamin` char(50) DEFAULT NULL,
  `nohp` char(15) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `kategori` char(15) DEFAULT NULL,
  `id_jadwal` char(15) DEFAULT NULL,
  `keterangan` text,
  `status` int(11) DEFAULT NULL,
  `id_bus` char(15) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  PRIMARY KEY (`kode_tiket`),
  KEY `id_jadwal` (`id_jadwal`),
  KEY `kategori` (`kategori`),
  KEY `id_bus` (`id_bus`),
  KEY `id_kursi` (`id_kursi`),
  CONSTRAINT `tb_tiket_temp_ibfk_1` FOREIGN KEY (`id_jadwal`) REFERENCES `tb_jadwal` (`id_jadwal`) ON UPDATE CASCADE,
  CONSTRAINT `tb_tiket_temp_ibfk_2` FOREIGN KEY (`kategori`) REFERENCES `tb_kategori` (`id_kategori`) ON UPDATE CASCADE,
  CONSTRAINT `tb_tiket_temp_ibfk_3` FOREIGN KEY (`id_bus`) REFERENCES `tb_bus` (`id_bus`) ON UPDATE CASCADE,
  CONSTRAINT `tb_tiket_temp_ibfk_4` FOREIGN KEY (`id_kursi`) REFERENCES `tb_kursi_penumpang` (`id_kursi`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;

/*Data for the table `tb_tiket_temp` */

insert  into `tb_tiket_temp`(`kode_tiket`,`id_kursi`,`nama_penumpang`,`alamat`,`jenis_kelamin`,`nohp`,`tanggal`,`kategori`,`id_jadwal`,`keterangan`,`status`,`id_bus`,`harga`,`jumlah`,`total`) values 
(26,1,'NISA','jl.damar 1 no.5','Perempuan','9774040','2021-07-21','KT-0003','JD-0001','-',1,'BS-0001',20000,0,0),
(27,2,'fitri','lubuk buaya','Perempuan','9774040','2021-07-21','KT-0003','JD-0001','-',1,'BS-0001',20000,0,0),
(28,5,'kurrota akyun','padang','Perempuan','9350','2021-07-23','KT-0003','JD-0001','-',1,'BS-0001',20000,0,0),
(29,5,'NISA','padang','Perempuan','9350','2021-07-23','KT-0004','JD-0002','-',1,'BS-0002',30000,0,0),
(30,6,'nuri yulfiami','lubuk buaya','Perempuan','9350','2021-07-23','KT-0003','JD-0002','-',1,'BS-0002',20000,0,0),
(31,5,'nuri yulfiami','jl.damar 1 no.5','Perempuan','62002','2021-07-21','KT-0004','JD-0002','-',1,'BS-0002',30000,0,0),
(32,5,'nuri yulfiami','jl.damar 1 no.5','Perempuan','62002','2021-07-22','KT-0004','JD-0002','-',1,'BS-0002',30000,0,0),
(33,6,'nuri yulfiami','jl.damar 1 no.5','Perempuan','62002','2021-07-22','KT-0003','JD-0002','-',1,'BS-0002',20000,0,0),
(34,5,'fitri','jl.damar 1 no.5','Perempuan','699859','2021-07-25','KT-0003','JD-0002','-',1,'BS-0002',20000,0,0),
(35,3,'NISA','padang','Perempuan','74033','2021-07-25','KT-0003','JD-0002','-',1,'BS-0002',20000,0,0),
(36,4,'nuri yulfiami','jl.damar 1 no.5','Perempuan','62002','2021-07-25','KT-0003','JD-0002','-',1,'BS-0002',20000,0,0);

/*Table structure for table `tb_tiket_temp1` */

DROP TABLE IF EXISTS `tb_tiket_temp1`;

CREATE TABLE `tb_tiket_temp1` (
  `kode_tiket` int(15) NOT NULL AUTO_INCREMENT,
  `id_kursi` int(11) DEFAULT NULL,
  `kategori` char(15) DEFAULT NULL,
  `id_jadwal` char(15) DEFAULT NULL,
  `keterangan` text,
  `harga` int(11) DEFAULT NULL,
  PRIMARY KEY (`kode_tiket`),
  KEY `kategori` (`kategori`),
  KEY `id_kursi` (`id_kursi`),
  CONSTRAINT `tb_tiket_temp1_ibfk_2` FOREIGN KEY (`kategori`) REFERENCES `tb_kategori` (`id_kategori`) ON UPDATE CASCADE,
  CONSTRAINT `tb_tiket_temp1_ibfk_4` FOREIGN KEY (`id_kursi`) REFERENCES `tb_kursi_penumpang` (`id_kursi`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tb_tiket_temp1` */

/*Table structure for table `tb_user` */

DROP TABLE IF EXISTS `tb_user`;

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `pass` varchar(100) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `level` char(5) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=147 DEFAULT CHARSET=latin1;

/*Data for the table `tb_user` */

insert  into `tb_user`(`id`,`nama`,`email`,`username`,`pass`,`image`,`level`) values 
(141,'Admin','admin@gmail.com','admin','202cb962ac59075b964b07152d234b70','data.PNG','1'),
(146,'harun','harunpanduko@gmail.com','pemilik','e10adc3949ba59abbe56e057f20f883e','','2');

/* Trigger structure for table `pembayaran` */

DELIMITER $$

/*!50003 DROP TRIGGER*//*!50032 IF EXISTS */ /*!50003 `id_faktur` */$$

/*!50003 CREATE */ /*!50017 DEFINER = 'root'@'localhost' */ /*!50003 TRIGGER `id_faktur` BEFORE INSERT ON `pembayaran` FOR EACH ROW BEGIN
	SET @urut=(SELECT  IFNULL(MAX(RIGHT(kodebayar,4)),0) FROM pembayaran);
	SET @urut= @urut + 1;
	SET new.`kodebayar`=CONCAT(CURDATE() + 0,LPAD(@urut,4,0));
	
    END */$$


DELIMITER ;

/* Trigger structure for table `tb_bus` */

DELIMITER $$

/*!50003 DROP TRIGGER*//*!50032 IF EXISTS */ /*!50003 `id_bus` */$$

/*!50003 CREATE */ /*!50017 DEFINER = 'root'@'localhost' */ /*!50003 TRIGGER `id_bus` BEFORE INSERT ON `tb_bus` FOR EACH ROW BEGIN
	SET @urut=(SELECT IFNULL(MAX(RIGHT(`id_bus`,4)),0) FROM `tb_bus`);
	SET @urut= @urut + 1;
	SET new.`id_bus`=CONCAT('BS-',LPAD(@urut,4,0));
    END */$$


DELIMITER ;

/* Trigger structure for table `tb_jadwal` */

DELIMITER $$

/*!50003 DROP TRIGGER*//*!50032 IF EXISTS */ /*!50003 `id_jadwal` */$$

/*!50003 CREATE */ /*!50017 DEFINER = 'root'@'localhost' */ /*!50003 TRIGGER `id_jadwal` BEFORE INSERT ON `tb_jadwal` FOR EACH ROW BEGIN
	SET @urut=(SELECT IFNULL(MAX(RIGHT(`id_jadwal`,4)),0) FROM `tb_jadwal`);
	SET @urut= @urut + 1;
	SET new.`id_jadwal`=CONCAT('JD-',LPAD(@urut,4,0));
    END */$$


DELIMITER ;

/* Trigger structure for table `tb_kategori` */

DELIMITER $$

/*!50003 DROP TRIGGER*//*!50032 IF EXISTS */ /*!50003 `id_kategori` */$$

/*!50003 CREATE */ /*!50017 DEFINER = 'root'@'localhost' */ /*!50003 TRIGGER `id_kategori` BEFORE INSERT ON `tb_kategori` FOR EACH ROW BEGIN
	SET @urut=(SELECT IFNULL(MAX(RIGHT(`id_kategori`,4)),0) FROM `tb_kategori`);
	SET @urut= @urut + 1;
	SET new.`id_kategori`=CONCAT('KT-',LPAD(@urut,4,0));
    END */$$


DELIMITER ;

/* Trigger structure for table `tb_pengiriman_barang` */

DELIMITER $$

/*!50003 DROP TRIGGER*//*!50032 IF EXISTS */ /*!50003 `id_pengiriman` */$$

/*!50003 CREATE */ /*!50017 DEFINER = 'root'@'localhost' */ /*!50003 TRIGGER `id_pengiriman` BEFORE INSERT ON `tb_pengiriman_barang` FOR EACH ROW BEGIN
	SET @urut=(SELECT IFNULL(MAX(RIGHT(`id_pengiriman`,4)),0) FROM `tb_pengiriman_barang`);
	SET @urut= @urut + 1;
	SET new.`id_pengiriman`=CONCAT('PM-',LPAD(@urut,4,0));
    END */$$


DELIMITER ;

/* Trigger structure for table `tb_penumpang` */

DELIMITER $$

/*!50003 DROP TRIGGER*//*!50032 IF EXISTS */ /*!50003 `id_penumpang` */$$

/*!50003 CREATE */ /*!50017 DEFINER = 'root'@'localhost' */ /*!50003 TRIGGER `id_penumpang` BEFORE INSERT ON `tb_penumpang` FOR EACH ROW BEGIN
	SET @urut=(SELECT IFNULL(MAX(RIGHT(`id_penumpang`,4)),0) FROM `tb_penumpang`);
	SET @urut= @urut + 1;
	SET new.`id_penumpang`=CONCAT('PN-',LPAD(@urut,4,0));
    END */$$


DELIMITER ;

/* Trigger structure for table `tb_surat_jalan` */

DELIMITER $$

/*!50003 DROP TRIGGER*//*!50032 IF EXISTS */ /*!50003 `kode` */$$

/*!50003 CREATE */ /*!50017 DEFINER = 'root'@'localhost' */ /*!50003 TRIGGER `kode` BEFORE INSERT ON `tb_surat_jalan` FOR EACH ROW BEGIN
	SET @urut=(SELECT IFNULL(MAX(RIGHT(`kode`,4)),0) FROM `tb_surat_jalan`);
	SET @urut= @urut + 1;
	SET new.`kode`=CONCAT('SJ-',LPAD(@urut,4,0));
    END */$$


DELIMITER ;

/* Trigger structure for table `tb_tiket` */

DELIMITER $$

/*!50003 DROP TRIGGER*//*!50032 IF EXISTS */ /*!50003 `kode_tiket` */$$

/*!50003 CREATE */ /*!50017 DEFINER = 'root'@'localhost' */ /*!50003 TRIGGER `kode_tiket` BEFORE INSERT ON `tb_tiket` FOR EACH ROW BEGIN
	SET @urut=(SELECT IFNULL(MAX(RIGHT(`kode_tiket`,4)),0) FROM `tb_tiket`);
	SET @urut= @urut + 1;
	SET new.`kode_tiket`=CONCAT('TK-',LPAD(@urut,4,0));
    END */$$


DELIMITER ;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
