-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 21, 2014 at 10:38 
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
