-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 21, 2014 at 09:53 
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `perkasa4`
--

-- --------------------------------------------------------

--
-- Table structure for table `bukutamu`
--

CREATE TABLE IF NOT EXISTS `bukutamu` (
  `no` int(3) NOT NULL AUTO_INCREMENT,
  `nama` varchar(30) NOT NULL,
  `url` varchar(30) NOT NULL,
  `pesan` varchar(200) NOT NULL,
  `tanggal` datetime NOT NULL,
  PRIMARY KEY (`no`),
  KEY `no` (`no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `bukutamu`
--

INSERT INTO `bukutamu` (`no`, `nama`, `url`, `pesan`, `tanggal`) VALUES
(2, 'wadefak', 'wadefak@gmail.com', 'aku mau beli semua berapa?', '2014-01-16 20:32:45'),
(3, 'aling', 'alingdharma@ymail.com', 'ayo dibeli dibeli', '2014-01-16 20:46:54'),
(4, 'mario', 'mariobonardo04@gmail.com', 'terima kasih telah mengunjungi website ini....', '2014-01-16 20:50:52'),
(5, 'mito', 'mitatomito@gmail.com', 'iya ', '2014-01-16 20:53:36'),
(6, 'susi', 'susisusu@gmail.com', 'tolong konfirmasi transaksi saya', '2014-01-16 20:57:34'),
(7, 'mario', 'mariobonardo04@gmail.com', 'iya ditunggu', '2014-01-16 20:59:17'),
(8, 'marudut', 'marudut008@yahoo.com', 'test terakhir....', '2014-01-17 11:26:38');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`no`, `id_pembeli`, `id_produk`, `namaproduk`, `harga`, `jumlah`, `subtotal`, `gbr`, `stok`, `status`, `idfaktur`, `tgl`) VALUES
(19, 3, 102, 'Produk 2', 90000, 1, 90000, 'image.jpg', 80, 1, 1, '2014-01-10 08:00:24'),
(20, 3, 103, 'Produk 3', 80000, 1, 80000, 'image.jpg', 75, 1, 2, '2014-01-10 08:09:13'),
(21, 4, 105, 'Produk 5', 60000, 1, 60000, 'image.jpg', 54, 1, 3, '2014-01-10 08:25:27'),
(22, 3, 101, 'Produk 1', 100000, 2, 200000, 'image.jpg', 95, 1, 4, '2014-01-10 12:52:45'),
(24, 7, 104, 'Produk 4', 70000, 1, 70000, 'image.jpg', 68, 1, 5, '2014-01-17 11:43:28'),
(25, 8, 105, 'Produk 5', 60000, 1, 60000, 'image.jpg', 53, 1, 6, '2014-01-17 11:55:27'),
(26, 8, 101, 'Produk 1', 100000, 1, 100000, 'image.jpg', 93, 1, 7, '2014-01-17 12:02:14'),
(27, 9, 105, 'Produk 5', 60000, 3, 180000, 'image.jpg', 52, 1, 8, '2014-01-17 12:23:04'),
(28, 3, 105, 'Produk 5', 60000, 1, 60000, 'image.jpg', 49, 1, 9, '2014-01-21 21:41:30');

-- --------------------------------------------------------

--
-- Table structure for table `hitung_total_harga_cart`
--

CREATE TABLE IF NOT EXISTS `hitung_total_harga_cart` (
  `idfaktur` tinyint(5) NOT NULL AUTO_INCREMENT,
  `id_pembeli` mediumint(9) NOT NULL,
  `total_bayar` mediumint(9) NOT NULL,
  `tgl` datetime NOT NULL,
  `dibayar` tinyint(1) NOT NULL,
  KEY `idfaktur` (`idfaktur`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `hitung_total_harga_cart`
--

INSERT INTO `hitung_total_harga_cart` (`idfaktur`, `id_pembeli`, `total_bayar`, `tgl`, `dibayar`) VALUES
(1, 3, 90000, '2014-01-10 07:59:56', 1),
(2, 3, 80000, '2014-01-10 08:05:17', 1),
(3, 4, 60000, '2014-01-10 08:22:43', 1),
(4, 3, 215000, '2014-01-10 12:52:15', 1),
(5, 7, 80000, '2014-01-17 11:43:19', 1),
(6, 8, 83000, '2014-01-17 11:55:18', 1),
(7, 8, 123000, '2014-01-17 12:01:53', 1),
(8, 9, 204000, '2014-01-17 12:22:54', 1),
(9, 3, 75000, '2014-01-21 21:41:19', 0);

-- --------------------------------------------------------

--
-- Table structure for table `kota`
--

CREATE TABLE IF NOT EXISTS `kota` (
  `id_kota` tinyint(4) NOT NULL AUTO_INCREMENT,
  `nama` varchar(20) NOT NULL,
  `tarif` int(11) NOT NULL,
  PRIMARY KEY (`id_kota`),
  KEY `id_kota` (`id_kota`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Dumping data for table `kota`
--

INSERT INTO `kota` (`id_kota`, `nama`, `tarif`) VALUES
(16, 'Medan', 10000),
(17, 'Siantar', 15000),
(18, 'Palembang', 20000),
(19, 'Surabaya', 24000),
(20, 'Pekanbaru', 19000),
(21, 'Jambi', 22000),
(22, 'Bengkulu', 25000),
(23, 'Bandung', 23000),
(24, 'Jakarta', 20000),
(25, 'Jogja', 26000),
(26, 'Pontianak', 30000),
(27, 'Samarinda', 32000),
(28, 'Palangkaraya', 34000),
(29, 'Makassar', 35000),
(30, 'Menado', 34000),
(31, 'Jayapura', 45000);

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE IF NOT EXISTS `produk` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `namaproduk` varchar(30) NOT NULL,
  `harga` bigint(10) NOT NULL,
  `stok` int(3) NOT NULL,
  `keterangan` varchar(2000) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `ditambahkan` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=109 ;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `namaproduk`, `harga`, `stok`, `keterangan`, `gambar`, `ditambahkan`) VALUES
(101, 'Produk 1', 100000, 92, 'Sentiment couraient les ses adjudants construit chaclosah cotillons. Ete caracolent feu patiemment mendiaient par. Eclatantes si mendiaient ecouterent du ordonnance fanatiques consentiez. Eu au alternent rapportes ce troupeaux. Boulevard nez jeu sinistres ame apprendre. Vie ouvert six bottes fronts police polies. Rangs votre peu peu car ils point sabre rente. \r\n\r\nVert sous net doit roc ont tete vie vlan. Crispent profonde des rit contient dit doctrine donnerai. Lorgnez ras prefere falloir ere une effraie. Ere ame sol peu peints postes titres. Concierge puissions mes par evocation est rappelles construit. Bruits paumes une mouche non fer vit disant. Enfantent epaissies meconnais attachent battirent dissipait but fit.', 'image.jpg', '2013-12-01 18:42:05'),
(102, 'Produk 2', 90000, 79, 'Sentiment couraient les ses adjudants construit chaclosah cotillons. Ete caracolent feu patiemment mendiaient par. Eclatantes si mendiaient ecouterent du ordonnance fanatiques consentiez. Eu au alternent rapportes ce troupeaux. Boulevard nez jeu sinistres ame apprendre. Vie ouvert six bottes fronts police polies. Rangs votre peu peu car ils point sabre rente.   Vert sous net doit roc ont tete vie vlan. Crispent profonde des rit contient dit doctrine donnerai. Lorgnez ras prefere falloir ere une effraie. Ere ame sol peu peints postes titres. Concierge puissions mes par evocation est rappelles construit. Bruits paumes une mouche non fer vit disant. Enfantent epaissies meconnais attachent battirent dissipait but fit.', 'image.jpg', '2013-12-01 18:42:16'),
(103, 'Produk 3', 80000, 74, 'Sentiment couraient les ses adjudants construit chaclosah cotillons. Ete caracolent feu patiemment mendiaient par. Eclatantes si mendiaient ecouterent du ordonnance fanatiques consentiez. Eu au alternent rapportes ce troupeaux. Boulevard nez jeu sinistres ame apprendre. Vie ouvert six bottes fronts police polies. Rangs votre peu peu car ils point sabre rente.   Vert sous net doit roc ont tete vie vlan. Crispent profonde des rit contient dit doctrine donnerai. Lorgnez ras prefere falloir ere une effraie. Ere ame sol peu peints postes titres. Concierge puissions mes par evocation est rappelles construit. Bruits paumes une mouche non fer vit disant. Enfantent epaissies meconnais attachent battirent dissipait but fit.', 'image.jpg', '2013-12-01 18:42:25'),
(104, 'Produk 4', 70000, 67, 'Sentiment couraient les ses adjudants construit chaclosah cotillons. Ete caracolent feu patiemment mendiaient par. Eclatantes si mendiaient ecouterent du ordonnance fanatiques consentiez. Eu au alternent rapportes ce troupeaux. Boulevard nez jeu sinistres ame apprendre. Vie ouvert six bottes fronts police polies. Rangs votre peu peu car ils point sabre rente.   Vert sous net doit roc ont tete vie vlan. Crispent profonde des rit contient dit doctrine donnerai. Lorgnez ras prefere falloir ere une effraie. Ere ame sol peu peints postes titres. Concierge puissions mes par evocation est rappelles construit. Bruits paumes une mouche non fer vit disant. Enfantent epaissies meconnais attachent battirent dissipait but fit.', 'image.jpg', '2013-12-01 18:42:32'),
(105, 'Produk 5', 60000, 49, 'Sentiment couraient les ses adjudants construit chaclosah cotillons. Ete caracolent feu patiemment mendiaient par. Eclatantes si mendiaient ecouterent du ordonnance fanatiques consentiez. Eu au alternent rapportes ce troupeaux. Boulevard nez jeu sinistres ame apprendre. Vie ouvert six bottes fronts police polies. Rangs votre peu peu car ils point sabre rente. \r\n\r\nVert sous net doit roc ont tete vie vlan. Crispent profonde des rit contient dit doctrine donnerai. Lorgnez ras prefere falloir ere une effraie. Ere ame sol peu peints postes titres. Concierge puissions mes par evocation est rappelles construit. Bruits paumes une mouche non fer vit disant. Enfantent epaissies meconnais attachent battirent dissipait but fit.', 'image.jpg', '2013-12-01 18:42:48'),
(106, 'Produk 6', 50000, 44, 'Sentiment couraient les ses adjudants construit chaclosah cotillons. Ete caracolent feu patiemment mendiaient par. Eclatantes si mendiaient ecouterent du ordonnance fanatiques consentiez. Eu au alternent rapportes ce troupeaux. Boulevard nez jeu sinistres ame apprendre. Vie ouvert six bottes fronts police polies. Rangs votre peu peu car ils point sabre rente.   Vert sous net doit roc ont tete vie vlan. Crispent profonde des rit contient dit doctrine donnerai. Lorgnez ras prefere falloir ere une effraie. Ere ame sol peu peints postes titres. Concierge puissions mes par evocation est rappelles construit. Bruits paumes une mouche non fer vit disant. Enfantent epaissies meconnais attachent battirent dissipait but fit.', 'image.jpg', '2013-12-01 18:42:56'),
(107, 'Produk 7', 55000, 88, 'Sentiment couraient les ses adjudants construit chaclosah cotillons. Ete caracolent feu patiemment mendiaient par. Eclatantes si mendiaient ecouterent du ordonnance fanatiques consentiez. Eu au alternent rapportes ce troupeaux. Boulevard nez jeu sinistres ame apprendre. Vie ouvert six bottes fronts police polies. Rangs votre peu peu car ils point sabre rente. \r\n\r\nVert sous net doit roc ont tete vie vlan. Crispent profonde des rit contient dit doctrine donnerai. Lorgnez ras prefere falloir ere une effraie. Ere ame sol peu peints postes titres. Concierge puissions mes par evocation est rappelles construit. Bruits paumes une mouche non fer vit disant. Enfantent epaissies meconnais attachent battirent dissipait but fit.', 'image.jpg', '2013-12-01 18:43:17'),
(108, 'Produk 8', 75000, 40, 'blablabla wawawawawa blablabla wawawawawa blablabla wawawawawa blablabla wawawawawa blablabla wawawawawa blablabla wawawawawa blablabla wawawawawa blablabla wawawawawa blablabla wawawawawa blablabla wawawawawa blablabla wawawawawa blablabla wawawawawa blablabla wawawawawa blablabla wawawawawa blablabla wawawawawa blablabla wawawawawa blablabla wawawawawa blablabla wawawawawa blablabla wawawawawa blablabla wawawawawa blablabla wawawawawa ', 'image.jpg', '2014-01-17 12:08:47');

-- --------------------------------------------------------

--
-- Table structure for table `psnkpdadm`
--

CREATE TABLE IF NOT EXISTS `psnkpdadm` (
  `no` int(2) NOT NULL AUTO_INCREMENT,
  `nama` varchar(25) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pesan` varchar(500) NOT NULL,
  `tanggal` date NOT NULL,
  PRIMARY KEY (`no`),
  KEY `no` (`no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `psnkpdadm`
--

INSERT INTO `psnkpdadm` (`no`, `nama`, `email`, `pesan`, `tanggal`) VALUES
(2, 'Marcopolo', 'marcopolo1000@yahoo.com', 'Tolong konfirmasi pembayaran saya', '2014-01-10'),
(3, 'Marcopolo', 'marcopolo1000@yahoo.com', 'Tolong konfirmasi pembayaran saya', '2014-01-10'),
(4, 'faisal', 'faisal@ymail.com', 'pak admin minta nomor hp lah', '2014-01-10'),
(5, 'agus', 'agus24@yahoo.com', 'apa sih', '2014-01-17');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`no`, `nama`, `password`, `alamat`, `email`, `telp`, `akses`, `lastlogin`, `jk`, `lahir`, `provinsi`, `kota`, `pos`, `fax`) VALUES
(1, 'Mario', 'admin', 'Jln. Thamrin', 'admin@perkasa.com', '213', 1, '2014-01-17 12:25:45', 0, '1988-04-24', 'Sumatera Utara', 'Siantar', 20256, 456588),
(2, 'Blejeb Blepblep', '12345', 'apasih', 'asalaja@gmail.com', '36363', 0, '2013-12-01 21:56:30', 0, '1997-01-01', 'asdaw', 'Medan', 23131, 366388),
(3, 'mario bonardo', 'rockstar88', 'Disitulah', 'mariobonardo04@gmail.com', '082161043000', 0, '2014-01-21 21:48:25', 0, '1988-04-24', 'Sumatera Utara', 'Siantar', 23232, 4564455),
(4, 'Susi Similikiti', '123456', 'Jalan Berbatu-batu No. 138', 'similikiti@cucok.com', '08199876546', 0, '2014-01-10 08:22:21', 0, '1991-11-11', 'Sumatera Selatan', 'Palembang', 32767, 0),
(5, 'Vladimir Markeloff', '121212', 'Jalan Si Kuda Lumping', 'markeloff@gmail.com', '082177887788', 0, '2014-01-03 08:27:28', 0, '1978-06-05', 'Jawa Timur', 'Surabaya', 32767, 0),
(6, 'Surya Matahari', '123456', 'Jalan Merdeka Barat No. 119', 'surya001@yahoo.com', '082161047888', 0, '2014-01-10 00:00:00', 0, '1988-05-05', 'DKI Jakarta', 'Jakarta', 29919, 619988898),
(7, 'wiro sableng', '123456', 'jalan thamrin', 'wiro1234@yahoo.com', '082144554455', 0, '2014-01-17 11:40:51', 0, '1988-11-12', 'Sumatera Utara', 'Medan', 32322, 2147483647),
(8, 'tukul arwana', '123456', 'jalan melati 28', 'mastukul@gmail.com', '08339989988', 0, '2014-01-17 11:55:00', 0, '1990-01-01', 'Jawa Barat', 'Bandung', 32767, 61616666),
(9, 'surya paloh', '123456', 'jalan raya', 'surya123@gmail.com', '08219989898', 0, '2014-01-17 12:22:14', 0, '1985-01-14', 'Jawa Timur', 'Surabaya', 23232, 909808709);
