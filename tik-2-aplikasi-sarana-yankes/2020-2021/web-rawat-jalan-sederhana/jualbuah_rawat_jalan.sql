-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 03, 2021 at 05:48 PM
-- Server version: 10.3.27-MariaDB-cll-lve
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jualbuah_rawat_jalan`
--

-- --------------------------------------------------------

--
-- Table structure for table `mst_dokter`
--

CREATE TABLE `mst_dokter` (
  `id_user` int(11) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `nomor_praktek` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mst_pasien`
--

CREATE TABLE `mst_pasien` (
  `rkm` varchar(20) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `nama` varchar(80) NOT NULL,
  `tempat_lahir` varchar(40) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` tinyint(4) NOT NULL COMMENT '1 = pria, 2 = wanita',
  `alamat` varchar(240) NOT NULL,
  `nomor_telepon` varchar(20) NOT NULL,
  `waktu_input` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mst_pasien`
--

INSERT INTO `mst_pasien` (`rkm`, `nik`, `nama`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `alamat`, `nomor_telepon`, `waktu_input`) VALUES
('1611712257001', '', 'Husaimin Bin Naga', 'Islamabad', '1998-01-07', 1, 'Komplek Kulit Manggis II Blok C No. 19 Islamabad Pakistan', '0345340543', '2021-01-27 01:50:57'),
('1611714471471', '', 'Burohim Alaihim', 'Garut', '2000-05-16', 1, 'Jalan Kesepakatan Agung No. 188 Cilampeni', '0326423864', '2021-01-27 02:27:51'),
('1611742946509', '', 'Lisa Balpoint', 'Gitega Burundi', '1998-05-20', 2, 'Jalan Sirnalekas No. 117 Gitega Burundi', '0236489324328', '2021-01-27 10:22:26'),
('1611743066042', '', 'Printi Lanbaso', 'Monrovia Liberia', '2002-07-22', 2, 'Jalan Karnalupa No. 28 A, Monrovia, Liberia', '0326492364', '2021-01-27 10:24:26'),
('1611743237154', '', 'Alkanci Lahjungle', 'ChiÅŸinÄƒu Moldova', '1996-12-15', 1, 'Jalan Situsaelani No. 68 Gang Karnilya 5, ChiÅŸinÄƒu, Moldova', '93204026324', '2021-01-27 10:27:17'),
('1611743443965', '', 'Alisa Sultoni Firda', 'Higuey, Republik Dominika', '1998-10-08', 2, 'Komplek Persami II Blok C5 No. 44, El Seibo, Republik Dominika', '0364032697', '2021-01-27 10:30:43'),
('1611743825368', '', 'Wiwin Feremfat Anlima', 'Bel Ombre, Seychelles', '2005-02-17', 2, 'RT 006 RW 01 Desa Dans Gallas, Bel Ombre, Seychelles', '03648936483', '2021-01-27 10:37:05'),
('1611756533856', '', 'Limbadurbuzier', 'Sidi Bel Abbes, Algeria', '1986-11-26', 1, 'Komplek Kencana Abbes Blok U No. 17A, Sidi Bel Abbes, Algeria', '04362598234', '2021-01-27 14:08:53'),
('1612339133963', '', 'Bahsun Salim', 'Muscat, Oman', '1978-05-19', 1, 'Jalan Persepsi Hidup No. 394 Muscat, Oman', '034650434', '2021-02-03 07:58:53');

-- --------------------------------------------------------

--
-- Table structure for table `mst_tindakan`
--

CREATE TABLE `mst_tindakan` (
  `kode` varchar(20) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `tarif` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mst_user`
--

CREATE TABLE `mst_user` (
  `id` int(11) NOT NULL,
  `username` varchar(80) NOT NULL,
  `password` varchar(80) NOT NULL,
  `nama` varchar(80) NOT NULL,
  `alamat` varchar(80) NOT NULL,
  `nomor_telepon` varchar(20) NOT NULL,
  `tipe_user` tinyint(4) NOT NULL COMMENT '1 = admin, 2 = dokter, 3 = manajemen'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mst_user`
--

INSERT INTO `mst_user` (`id`, `username`, `password`, `nama`, `alamat`, `nomor_telepon`, `tipe_user`) VALUES
(1, 'insan', '8a0fdb4177eb928d01ee7705b4ef24007ce42c75cd7acf439f89d03d945a0a4a', 'Insan', 'Kota Bandung', '0813', 1);

-- --------------------------------------------------------

--
-- Table structure for table `trs_rawat_jalan`
--

CREATE TABLE `trs_rawat_jalan` (
  `id` int(11) NOT NULL,
  `rkm` varchar(20) NOT NULL,
  `tanggal` date NOT NULL,
  `keluhan` text NOT NULL,
  `diagnosa` text NOT NULL,
  `nip_dokter` varchar(20) NOT NULL,
  `resep` text NOT NULL,
  `kode_tindakan` varchar(20) NOT NULL,
  `total_pembayaran` int(11) NOT NULL,
  `is_lunas` tinyint(4) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `waktu_input` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mst_dokter`
--
ALTER TABLE `mst_dokter`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `mst_pasien`
--
ALTER TABLE `mst_pasien`
  ADD PRIMARY KEY (`rkm`);

--
-- Indexes for table `mst_tindakan`
--
ALTER TABLE `mst_tindakan`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `mst_user`
--
ALTER TABLE `mst_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trs_rawat_jalan`
--
ALTER TABLE `trs_rawat_jalan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mst_user`
--
ALTER TABLE `mst_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `trs_rawat_jalan`
--
ALTER TABLE `trs_rawat_jalan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
