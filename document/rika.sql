-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 08, 2020 at 04:44 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rika`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_ket_umum`
--

CREATE TABLE `tb_ket_umum` (
  `id_umum` int(11) NOT NULL,
  `tinggi_pusat` varchar(20) NOT NULL,
  `suhu_max_min` varchar(20) NOT NULL,
  `jpp_desa` varchar(20) NOT NULL,
  `jpp_ibukota_kab` varchar(20) NOT NULL,
  `jpp_ibukota_prop` varchar(20) NOT NULL,
  `ch_jumlah_hari` varchar(10) NOT NULL,
  `ch_banyaknya` varchar(15) NOT NULL,
  `bw_datar_berombak` varchar(10) NOT NULL,
  `bw_berombak_berbukit` varchar(10) NOT NULL,
  `bw_berbukit_bergunung` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_luas_wilayah`
--

CREATE TABLE `tb_luas_wilayah` (
  `id_luas` int(11) NOT NULL,
  `tanah_sawah` varchar(10) NOT NULL,
  `ts_irigasi_t` varchar(10) NOT NULL,
  `ts_irigasi_st` varchar(10) NOT NULL,
  `ts_irigasi_s` varchar(10) NOT NULL,
  `sawah_rendengan` varchar(10) NOT NULL,
  `sawah_padang_s` varchar(10) NOT NULL,
  `tanah_kering` varchar(10) NOT NULL,
  `tk_pekarangan` varchar(10) NOT NULL,
  `tk_tegal` varchar(10) NOT NULL,
  `tk_ladang` varchar(10) NOT NULL,
  `tk_ladang_p` varchar(10) NOT NULL,
  `tanah_hutan` varchar(10) NOT NULL,
  `th_lebat` varchar(10) NOT NULL,
  `th_belukar` varchar(10) NOT NULL,
  `th_sejenis` varchar(10) NOT NULL,
  `th_rawa` varchar(10) NOT NULL,
  `tanah_perkebunan` varchar(10) NOT NULL,
  `tp_negara` varchar(10) NOT NULL,
  `tp_swasta` varchar(10) NOT NULL,
  `tkfu_lap_olga` varchar(10) NOT NULL,
  `tkfu_taman_r` varchar(10) NOT NULL,
  `tkfu_jalur_h` varchar(10) NOT NULL,
  `tkfu_kuburan` varchar(10) NOT NULL,
  `lainlain` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `paswword` varchar(25) NOT NULL,
  `nama` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_ket_umum`
--
ALTER TABLE `tb_ket_umum`
  ADD PRIMARY KEY (`id_umum`);

--
-- Indexes for table `tb_luas_wilayah`
--
ALTER TABLE `tb_luas_wilayah`
  ADD PRIMARY KEY (`id_luas`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_ket_umum`
--
ALTER TABLE `tb_ket_umum`
  MODIFY `id_umum` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_luas_wilayah`
--
ALTER TABLE `tb_luas_wilayah`
  MODIFY `id_luas` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
