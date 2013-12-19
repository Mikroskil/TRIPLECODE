/*
SQLyog Ultimate v8.61 
MySQL - 5.5.8 : Database - goldenbee2
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`goldenbee2` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `kado`;

/*Table structure for table `bukutamu` */

DROP TABLE IF EXISTS `bukutamu`;

CREATE TABLE `bukutamu` (
  `no` int(3) NOT NULL AUTO_INCREMENT,
  `nama` varchar(30) NOT NULL,
  `url` varchar(30) NOT NULL,
  `pesan` varchar(200) NOT NULL,
  `tanggal` datetime NOT NULL,
  PRIMARY KEY (`no`),
  KEY `no` (`no`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

/*Data for the table `bukutamu` */

insert  into `bukutamu`(`no`,`nama`,`url`,`pesan`,`tanggal`) values (9,'Admin ','goldenbee.com','Anda bisa memberikan komentar, kritik dan saran melalui buku tamu ini Dilarang : Junk, Flood, SARA, Spam dan tindak tidak menyenangkan lainya ','2012-03-28 11:06:10'),(10,'Guest','google.com','saya pengunjung pertama ','2012-03-28 11:06:34'),(13,'Ardianto','ardianto.blogspot.com','apakah situs ini terpercaya ?','2012-04-02 18:21:28'),(14,'sukidi','sukidi.com','hmmm websitena banyak lebahnya, hati2 ntar kesengat :)','2012-04-02 23:25:55'),(20,'sumitro','asdasdsad','Buku Tamu  Anda bisa memberikan komentar, kritik dan saran melalui buku tamu ini Demi kenyamanan kita bersama diminta agar jangan melakukan Junk, Flood, SARA, Spam dan tindak tidak menyenangkan lainya','2012-04-03 10:06:37'),(22,'siganteng','makan','selamat bermadu ria','2012-04-03 16:26:00'),(23,'guest','h','halo apa kabar','2012-04-03 11:27:08'),(24,'rqwe','sdfsdf','Home Produk Cart (2) Kontak Tantang Kami Cara Pesan Buku Tamu Log Out Buku Tamu  Anda bisa memberikan komentar, kritik dan saran melalui buku tamu ini Demi kenyamanan kita bersama diminta agar jangan ','2012-04-03 21:45:52');

/*Table structure for table `cart` */

DROP TABLE IF EXISTS `cart`;

CREATE TABLE `cart` (
  `no` smallint(3) NOT NULL AUTO_INCREMENT,
  `id_pembeli` smallint(6) NOT NULL,
  `id_produk` smallint(6) NOT NULL,
  `namaproduk` varchar(30) NOT NULL,
  `harga` mediumint(10) NOT NULL,
  `jumlah` smallint(3) NOT NULL,
  `subtotal` int(10) NOT NULL,
  `gbr` tinytext NOT NULL,
  `stok` tinyint(4) NOT NULL,
  `status` smallint(1) NOT NULL,
  `idfaktur` int(11) NOT NULL,
  `tgl` datetime NOT NULL,
  PRIMARY KEY (`no`),
  KEY `no` (`no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `cart` */

/*Table structure for table `history_belanja` */

DROP TABLE IF EXISTS `history_belanja`;

CREATE TABLE `history_belanja` (
  `no` mediumint(9) NOT NULL AUTO_INCREMENT,
  `id_pembeli` smallint(6) NOT NULL,
  `id_produk` mediumint(9) NOT NULL,
  `jumlah` tinyint(4) NOT NULL,
  `total` int(10) NOT NULL,
  `tgl` datetime NOT NULL,
  PRIMARY KEY (`no`),
  KEY `no` (`no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `history_belanja` */

/*Table structure for table `hitung_total_harga_cart` */

DROP TABLE IF EXISTS `hitung_total_harga_cart`;

CREATE TABLE `hitung_total_harga_cart` (
  `idfaktur` tinyint(5) NOT NULL,
  `id_pembeli` mediumint(9) NOT NULL,
  `total_bayar` mediumint(9) NOT NULL,
  `tgl` datetime NOT NULL,
  `dibayar` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `hitung_total_harga_cart` */

/*Table structure for table `pesanan` */

DROP TABLE IF EXISTS `pesanan`;

CREATE TABLE `pesanan` (
  `no` smallint(6) NOT NULL AUTO_INCREMENT,
  `idfaktur` smallint(6) NOT NULL,
  `tgl` datetime NOT NULL,
  PRIMARY KEY (`no`),
  KEY `no` (`no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `pesanan` */

/*Table structure for table `produk` */

DROP TABLE IF EXISTS `produk`;

CREATE TABLE `produk` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `namaproduk` varchar(30) NOT NULL,
  `harga` bigint(10) NOT NULL,
  `stok` int(3) NOT NULL,
  `keterangan` varchar(2000) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `ditambahkan` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=latin1;

/*Data for the table `produk` */

insert  into `produk`(`id`,`namaproduk`,`harga`,`stok`,`keterangan`,`gambar`,`ditambahkan`) values (53,'Madu Pertamax',100000,100,'seharusnya disini keterangan dari produknya  seharusnya disini keterangan dari produknya  seharusnya disini keterangan dari produknya  seharusnya disini keterangan dari produknya  seharusnya disini keterangan dari produknya  seharusnya disini keterangan dari produknya  seharusnya disini keterangan dari produknya  seharusnya disini keterangan dari produknya  seharusnya disini keterangan dari produknya  seharusnya disini keterangan dari produknya  seharusnya disini keterangan dari produknya  seharusnya disini keterangan dari produknya  ','madu (1).jpg','2012-03-28 09:55:34'),(54,'madu keduax',90000,90,'seharusnya disini keterangan dari produknya  seharusnya disini keterangan dari produknya  seharusnya disini keterangan dari produknya  seharusnya disini keterangan dari produknya  seharusnya disini keterangan dari produknya  seharusnya disini keterangan dari produknya  seharusnya disini keterangan dari produknya  seharusnya disini keterangan dari produknya  seharusnya disini keterangan dari produknya  seharusnya disini keterangan dari produknya  seharusnya disini keterangan dari produknya  ','madu (2).jpg','2012-03-28 09:55:55'),(55,'madu ketigax',80000,79,'seharusnya disini keterangan dari produknya  seharusnya disini keterangan dari produknya  seharusnya disini keterangan dari produknya  seharusnya disini keterangan dari produknya  seharusnya disini keterangan dari produknya  seharusnya disini keterangan dari produknya  seharusnya disini keterangan dari produknya  seharusnya disini keterangan dari produknya  seharusnya disini keterangan dari produknya  seharusnya disini keterangan dari produknya  seharusnya disini keterangan dari produknya  seharusnya disini keterangan dari produknya  ','madu (3).jpg','2012-03-28 09:56:20'),(56,'madu keempatx',70000,70,'seharusnya disini keterangan dari produknya  seharusnya disini keterangan dari produknya  seharusnya disini keterangan dari produknya  seharusnya disini keterangan dari produknya  seharusnya disini keterangan dari produknya  seharusnya disini keterangan dari produknya  seharusnya disini keterangan dari produknya  seharusnya disini keterangan dari produknya  seharusnya disini keterangan dari produknya  seharusnya disini keterangan dari produknya  seharusnya disini keterangan dari produknya  seharusnya disini keterangan dari produknya  seharusnya disini keterangan dari produknya  ','madu (4).jpg','2012-03-28 09:56:48'),(57,'madu limax',60000,59,'© Copyright GoldenBee.Com 2011-2090. All Rights Reserved\r\nDesigned By Ricky Orlando© Copyright GoldenBee.Com 2011-2090. All Rights Reserved\r\nDesigned By Ricky Orlando\r\nSponsored By Mikroskil | Dikti | Microsoft | Sari Roti\r\nSponsored By Mikroskil | Dikti | Microsoft | Sari Roti© Copyright GoldenBee.Com 2011-2090. All Rights Reserved\r\nDesigned By Ricky Orlando\r\nSponsored By Mikroskil | Dikti | Microsoft | Sari Roti© Copyright GoldenBee.Com 2011-2090. All Rights Reserved\r\nDesigned By Ricky Orlando\r\nSponsored By Mikroskil | Dikti | Microsoft | Sari Roti','madu (5).jpg','2012-03-28 09:57:09'),(58,'enamx',50000,45,'seharusnya disini keterangan dari produknya seharusnya disini seharusnya disini keterangan dari produknya  seharusnya disini keterangan dari produknya   keterangan dari produknya  seharusnya disini keterangan dari produknya  seharusnya disini keterangan dari produknya  seharusnya disini keterangan dari produknya  seharusnya disini keterangan dari produknya  seharusnya disini keterangan dari produknya  seharusnya disini keterangan dari produknya  seharusnya disini keterangan dari produknya   ','madu (6).jpg','2012-03-28 09:57:55'),(59,'madu tujuhx',40000,97,'© Copyright GoldenBee.Com 2011-2090. All Rights Reserved\r\nDesigned By Ricky Orlando\r\nSponsored By Mikroskil | Dikti | Microsoft | Sari Roti© Copyright GoldenBee.Com 2011-2090. All Rights Reserved\r\nDesigned By Ricky Orlando\r\nSponsored By Mikroskil | Dikti | Microsoft | Sari Roti© Copyright GoldenBee.Com 2011-2090. All Rights Reserved\r\nDesigned By Ricky Orlando\r\nSponsored By Mikroskil | Dikti | Microsoft | Sari Roti','madu (7).jpg','2012-03-28 09:58:18'),(60,'Madu Pollen',30000,97,'madu ini sangat berkhasiat sekali , jangan dibuang atau dimakan, terlebih lagi cintanya padanya, monitor komputer nya lcd disini ada 2 speaker sambil dengerin musik avenged sevenfold sambil sesekali menatap lampu keyboard yang berkelap kelip , sambil mengetik menikmati itu semua madu ini sangat berkhasiat sekali , jangan dibuang atau dimakan, terlebih lagi cintanya padanya, monitor komputer nya lcd disini ada 2 speaker sambil dengerin musik avenged sevenfold sambil sesekali menatap lampu keyboard yang berkelap kelip , sambil mengetik menikmati itu semua madu ini sangat berkhasiat sekali , jangan dibuang atau dimakan, terlebih lagi cintanya padanya, monitor komputer nya lcd disini ada 2 speaker sambil dengerin musik avenged sevenfold sambil sesekali menatap lampu keyboard yang berkelap kelip , sambil mengetik menikmati itu semua madu ini sangat berkhasiat sekali , jangan dibuang atau dimakan, terlebih lagi cintanya padanya, monitor komputer nya lcd disini ada 2 speaker sambil dengerin musik avenged sevenfold sambil sesekali menatap lampu keyboard yang berkelap kelip , sambil mengetik menikmati itu semua','madu (8).jpg','2012-03-28 09:58:45');

/*Table structure for table `psnkpdadm` */

DROP TABLE IF EXISTS `psnkpdadm`;

CREATE TABLE `psnkpdadm` (
  `no` int(2) NOT NULL AUTO_INCREMENT,
  `nama` varchar(25) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pesan` varchar(500) NOT NULL,
  `tanggal` date NOT NULL,
  PRIMARY KEY (`no`),
  KEY `no` (`no`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `psnkpdadm` */

insert  into `psnkpdadm`(`no`,`nama`,`email`,`pesan`,`tanggal`) values (2,'Tukul','tukul@yahooooo.com','wow eak eak eak eak mantap ni madu ne, tak sobek2 ntar madunya boleh ?D','2012-01-05'),(4,'Ricky','raniveronica46@yahoo.com','© Copyright GoldenBee.Com 2011-2090. All Rights Reserved\r\nDesigned By Ricky Orlando\r\nSponsored By Mikroskil | Dikti | Microsoft | Sari Roti ','2012-02-21'),(5,'Sekjen PBB','raniveronica@46@yahoo.com','saya suka anda','2012-02-26'),(6,'Mutiara Seleketep','r1cky_0rl4nd0@yahoo.comt','kuhajar kau','2012-04-05');

/*Table structure for table `review` */

DROP TABLE IF EXISTS `review`;

CREATE TABLE `review` (
  `no` smallint(6) NOT NULL AUTO_INCREMENT,
  `id_user` smallint(6) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `id_produk` smallint(6) NOT NULL,
  `comment` mediumtext NOT NULL,
  PRIMARY KEY (`no`),
  KEY `no` (`no`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

/*Data for the table `review` */

insert  into `review`(`no`,`id_user`,`nama_user`,`id_produk`,`comment`) values (13,27,'q q',58,'super sekali coy'),(14,25,'ricky orlando',60,'sesekali engkau datng menjemputku'),(15,26,'ayu  sarah',60,'mantap sekali'),(18,25,'ricky orlando',59,'ini adalah madu tujuhx'),(19,25,'ricky orlando',57,'kucucuk matamu'),(20,26,'ayu  sarah',55,'madu ini bungkusnya warna hikjau'),(22,27,'q q',56,'wow super banget'),(23,26,'ayu  sarah',60,'saya sudah coba dan hasilnya mantep cuy'),(24,27,'Mutiara Seleketep xxx',55,'kayaknya bagus ni'),(25,27,'ricky orlando',57,'sesuatu ya'),(26,7,'ombud',53,'saya yang pertama kali review produk ini');

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `no` int(3) NOT NULL AUTO_INCREMENT,
  `nama` varchar(25) NOT NULL,
  `password` varchar(20) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `telp` varchar(15) NOT NULL,
  `akses` int(2) NOT NULL,
  `lastlogin` datetime NOT NULL,
  `jk` tinyint(1) NOT NULL,
  `lahir` date NOT NULL,
  `provinsi` varchar(30) NOT NULL,
  `kota` varchar(30) NOT NULL,
  `pos` smallint(5) NOT NULL,
  `fax` int(15) NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

/*Data for the table `user` */

insert  into `user`(`no`,`nama`,`password`,`alamat`,`email`,`telp`,`akses`,`lastlogin`,`jk`,`lahir`,`provinsi`,`kota`,`pos`,`fax`) values (7,'ombud','3863','asd','orlandolabz@gmail.comx','43',0,'2012-04-14 23:34:18',0,'0000-00-00','papua selatan','koteka',9866,6467496),(8,'Sutewo terjo','admin','Jln. Diponegoro Helvetia Kuning','admin@goldenbee.com','213',1,'2012-04-26 23:30:34',0,'1992-01-11','sumatera utara','Binjai',20256,456588),(18,'ricky orlando','napitupulu','medan marelan ','orlandolabz@gmail.com','087869872067',0,'2012-04-08 21:41:30',0,'0000-00-00','Jawa','Madura',32767,75868),(25,'ricky orlando','napitupulu','perumahan kpum  blok 12 no 90','r1cky_0rl4nd0@yahoo.com','087869872067',1,'2012-04-26 23:30:34',0,'1992-01-11','sumatera utara','medan',20256,12345),(26,'ayu  sarah','a','kebayoran lama','ayu@gmail.com','876611665165',0,'2012-04-26 23:28:14',0,'1981-04-18','jakarta utara','jakarta',23423,0),(27,'ricky orlando','t','Medan marelan','r1cky_0rl4nd0@yahoo.comt','087869872067',0,'2012-04-21 07:39:08',0,'1980-05-19','sumatera utara','Medan',20256,0);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
