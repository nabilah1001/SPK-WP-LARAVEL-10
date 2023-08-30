-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 30, 2023 at 06:10 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spk_wp_laravel_10`
--

-- --------------------------------------------------------

--
-- Table structure for table `alternatif`
--

CREATE TABLE `alternatif` (
  `id_alternatif` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `sanggar` varchar(50) NOT NULL,
  `daerah_tari` varchar(50) NOT NULL,
  `jumlah_pilihan` int(4) NOT NULL,
  `biaya` varchar(50) NOT NULL,
  `no_telp` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `alternatif`
--

INSERT INTO `alternatif` (`id_alternatif`, `nama`, `sanggar`, `daerah_tari`, `jumlah_pilihan`, `biaya`, `no_telp`) VALUES
(25, 'Sekar Wiraningrum', 'Sanggar Seni Kartika Depok', 'Seluruh daerah Indonesia', 11, '400000', '087873383035'),
(26, 'Denok Kartika Wulandari, S. Sn', 'Sanggar Seni Kartika Depok', 'Seluruh daerah Indonesia', 22, '500000', '082123014543'),
(27, 'Amadea Saraswati', 'Sanggar Tari Ayodya Pala (Depok)', 'Seluruh daerah Indonesia', 17, '1000000', '081806081001'),
(28, 'Farahnia Destanty Kusuma', 'Sanggar Tari Larasati', 'Seluruh daerah Indonesia, mayoritas Betawi', 23, '100000', '081514371370'),
(29, 'Fatimah Rizkyanti Kusuma', 'Sanggar Tari Larasati', 'Jawa, Jakarta, Sumatera, Aceh, Kalimantan, Papua', 9, '100000', '0895320192959'),
(30, 'Indah kusumawardani', 'Sanggar Tari Larasati', 'Jawa, DKI Jakarta, Sumatera, Aceh, Kalimantan', 18, '200000', '085884242010'),
(32, 'Essy Lusiana', 'Sanggar Seni Tari Essy', 'Jawa Barat, Jawa Tengah, Betawi', 21, '500000', '085880903692'),
(33, 'Alya Nur Ajie', 'Sanggar Tari Ayodya Pala (Depok)', 'Seluruh daerah Indonesia', 9, '100000', '089673285495'),
(34, 'Nadengan', 'Sanggar Tari Ayodya Pala (Depok)', 'Seluruh daerah Indonesia', 18, '300000', '082258454193'),
(35, 'Citra Cahyani Sumirat', 'Sanggar Tari Ayodya Pala (Depok)', 'Seluruh daerah Indonesia', 10, '300000', '081514371370'),
(42, 'Lia Afallia', 'Sanggar Tari Ayodya Pala (Depok)', 'Seluruh daerah Indonesia', 25, '150000', '089673285495'),
(43, 'Vemiana Utami', 'Sanggar Tari Ayodya Pala (Depok)', 'Seluruh daerah Indonesia', 23, '400000', '081806081001'),
(44, 'Adella Putri', 'Sanggar Tari Ayodya Pala (Depok)', 'Seluruh daerah Indonesia', 10, '100000', '081514371370'),
(45, 'Yuli Kumalasari', 'Sanggar Tari Wulandari', 'Jawa Barat', 10, '100000', '089673285495'),
(46, 'Siska Susanti', 'Sanggar Tari Wulandari', 'Jawa Barat', 18, '150000', '0895320192959'),
(47, 'Kemas Fauzan', 'Sanggar Tari Larasati', 'Seluruh daerah Indonesia', 10, '250000', '081514371370'),
(48, 'Bella Selviana', 'Sanggar Tari Ayodya Pala (Depok)', 'DKI Jakarta', 17, '250000', '085886595046'),
(49, 'Heni Novianty', 'Sanggar Tari Larasati', 'Jawa Barat, DKI Jakarta', 20, '150000', '081514371370'),
(50, 'Valda Haibah', 'Sanggar Tari Ayodya Pala (Depok)', 'Seluruh daerah Indonesia', 18, '150000', '087873383035'),
(52, 'Cahyani', 'Sanggar Tari Retno Puspita', 'Jawa, Kalimantan, Sumatera Barat', 10, '150000', '081806081001'),
(53, 'Luliana', 'Sanggar Tari Retno Puspita', 'Jawa Barat, Jawa Tengah, Sumatera Barat', 18, '250000', '0895320192959'),
(54, 'Norma Silvia', 'Sanggar Tari Ayodya Pala (Depok)', 'Seluruh daerah Indonesia', 16, '100000', '081806081001'),
(55, 'Jasmine Putri', 'Sanggar Tari Ayodya Pala (Depok)', 'Seluruh daerah Indonesia', 10, '100000', '089673285495'),
(56, 'Putri Amelia', 'Sanggar Tari Ayodya Pala (Depok)', 'Seluruh daerah Indonesia', 30, '500000', '082123014543'),
(57, 'Ayuna Langit', 'Sanggar Tari Retno Puspita', 'Seluruh daerah Indonesia', 150000, '10', '081806081001');

-- --------------------------------------------------------

--
-- Table structure for table `hasil`
--

CREATE TABLE `hasil` (
  `id_hasil` int(11) NOT NULL,
  `id_alternatif` int(11) NOT NULL,
  `nilai` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `hasil`
--

INSERT INTO `hasil` (`id_hasil`, `id_alternatif`, `nilai`) VALUES
(1, 25, 0.0397217),
(2, 26, 0.0491824),
(3, 27, 0.0442499),
(4, 28, 0.0409055),
(5, 29, 0.0361077),
(6, 30, 0.0457953),
(7, 32, 0.051408),
(8, 33, 0.0423341),
(9, 34, 0.0429694),
(10, 35, 0.0287559),
(11, 42, 0.0393777),
(12, 43, 0.0406106),
(13, 44, 0.0347828),
(14, 45, 0.0361077),
(15, 46, 0.0390598),
(16, 47, 0.0351731),
(17, 48, 0.0397217),
(18, 49, 0.0422533),
(19, 50, 0.040424),
(20, 52, 0.031107),
(21, 53, 0.0339861),
(22, 54, 0.0320925),
(23, 55, 0.033609),
(24, 56, 0.0560149),
(25, 57, 0.0442499);

-- --------------------------------------------------------

--
-- Table structure for table `kriteria`
--

CREATE TABLE `kriteria` (
  `id_kriteria` int(11) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `kode_kriteria` varchar(100) NOT NULL,
  `bobot` float NOT NULL,
  `jenis` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `kriteria`
--

INSERT INTO `kriteria` (`id_kriteria`, `keterangan`, `kode_kriteria`, `bobot`, `jenis`) VALUES
(25, 'Riwayat pendidikan tari', 'C1', 5, 'Benefit'),
(26, 'Lama pengalaman mengajar', 'C2', 4, 'Benefit'),
(27, 'Status pelatih', 'C3', 2, 'Benefit'),
(28, 'Usia', 'C4', 2, 'Cost');

-- --------------------------------------------------------

--
-- Table structure for table `penilaian`
--

CREATE TABLE `penilaian` (
  `id_penilaian` int(11) NOT NULL,
  `id_alternatif` int(11) NOT NULL,
  `id_kriteria` int(11) NOT NULL,
  `nilai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `penilaian`
--

INSERT INTO `penilaian` (`id_penilaian`, `id_alternatif`, `id_kriteria`, `nilai`) VALUES
(150, 25, 25, 106),
(152, 25, 27, 114),
(155, 26, 25, 105),
(156, 26, 26, 109),
(157, 26, 27, 114),
(161, 27, 26, 111),
(162, 27, 27, 114),
(163, 27, 28, 119),
(165, 28, 25, 104),
(167, 28, 27, 115),
(170, 29, 25, 104),
(172, 29, 27, 115),
(175, 30, 25, 104),
(177, 30, 27, 114),
(180, 25, 26, 110),
(181, 25, 28, 119),
(182, 26, 28, 120),
(183, 27, 25, 104),
(184, 28, 26, 111),
(185, 28, 28, 119),
(186, 32, 25, 105),
(187, 32, 26, 109),
(188, 32, 27, 114),
(189, 32, 28, 121),
(190, 30, 26, 111),
(191, 30, 28, 120),
(192, 33, 25, 104),
(193, 33, 26, 111),
(194, 33, 27, 115),
(195, 33, 28, 120),
(196, 34, 25, 106),
(197, 34, 26, 110),
(198, 34, 27, 114),
(199, 34, 28, 121),
(200, 35, 25, 107),
(201, 35, 26, 111),
(202, 35, 27, 115),
(203, 35, 28, 119),
(204, 29, 26, 112),
(205, 29, 28, 119),
(206, 42, 25, 107),
(207, 42, 26, 109),
(208, 42, 27, 114),
(209, 42, 28, 121),
(210, 43, 25, 105),
(211, 43, 26, 111),
(212, 43, 27, 114),
(213, 43, 28, 119),
(214, 44, 25, 106),
(215, 44, 26, 111),
(216, 44, 27, 115),
(217, 44, 28, 120),
(218, 45, 25, 104),
(219, 45, 26, 112),
(220, 45, 27, 115),
(221, 45, 28, 119),
(222, 46, 25, 104),
(223, 46, 26, 112),
(224, 46, 27, 114),
(225, 46, 28, 119),
(226, 47, 25, 107),
(227, 47, 26, 110),
(228, 47, 27, 114),
(229, 47, 28, 120),
(230, 48, 25, 106),
(231, 48, 26, 110),
(232, 48, 27, 114),
(233, 48, 28, 119),
(234, 49, 25, 104),
(235, 49, 26, 112),
(236, 49, 27, 114),
(237, 49, 28, 121),
(238, 50, 25, 104),
(239, 50, 26, 112),
(240, 50, 27, 114),
(241, 50, 28, 120),
(242, 52, 25, 107),
(243, 52, 26, 111),
(244, 52, 27, 114),
(245, 52, 28, 119),
(246, 53, 25, 107),
(247, 53, 26, 110),
(248, 53, 27, 114),
(249, 53, 28, 119),
(250, 54, 25, 106),
(251, 54, 26, 110),
(252, 54, 27, 116),
(253, 54, 28, 120),
(254, 55, 25, 106),
(255, 55, 26, 111),
(256, 55, 27, 115),
(257, 55, 28, 119),
(258, 56, 25, 104),
(259, 56, 26, 109),
(260, 56, 27, 114),
(261, 56, 28, 121),
(262, 57, 25, 104),
(263, 57, 26, 111),
(264, 57, 27, 114),
(265, 57, 28, 119);

-- --------------------------------------------------------

--
-- Table structure for table `sub_kriteria`
--

CREATE TABLE `sub_kriteria` (
  `id_sub_kriteria` int(11) NOT NULL,
  `id_kriteria` int(11) NOT NULL,
  `deskripsi` varchar(200) NOT NULL,
  `nilai` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `sub_kriteria`
--

INSERT INTO `sub_kriteria` (`id_sub_kriteria`, `id_kriteria`, `deskripsi`, `nilai`) VALUES
(104, 25, 'Lulusan sanggar tari', 5),
(105, 25, 'Lulusan D3/D4/S1 Seni Tari', 4),
(106, 25, 'Lulusan sanggar luar', 3),
(107, 25, 'Estrakulikuler atau organisasi seni', 2),
(109, 26, '> 10 tahun', 5),
(110, 26, '6 - 10 tahun', 4),
(111, 26, '2 - 5 tahun', 3),
(112, 26, '< 2 tahun', 2),
(114, 27, 'Pelatih', 5),
(115, 27, 'Asisten Pelatih', 3),
(116, 27, 'Magang', 1),
(119, 28, '< 25 tahun', 5),
(120, 28, '25 - 35 tahun', 4),
(121, 28, '> 35 tahun', 3);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `id_user_level` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `id_user_level`, `nama`, `email`, `username`, `password`) VALUES
(1, 1, 'Admin', 'admin@gmail.com', 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(7, 2, 'User', 'user@gmail.com', 'user', 'ee11cbb19052e40b07aac0ca060c23ee'),
(10, 1, 'Nabilah Azzahra Nasution', 'nabilah.azzahra@gmail.com', 'nabilahazz', '63f773dc3b1c5ef5c1e16a095f8d57ee');

-- --------------------------------------------------------

--
-- Table structure for table `user_level`
--

CREATE TABLE `user_level` (
  `id_user_level` int(11) NOT NULL,
  `user_level` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user_level`
--

INSERT INTO `user_level` (`id_user_level`, `user_level`) VALUES
(1, 'Administrator'),
(2, 'User');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alternatif`
--
ALTER TABLE `alternatif`
  ADD PRIMARY KEY (`id_alternatif`);

--
-- Indexes for table `hasil`
--
ALTER TABLE `hasil`
  ADD PRIMARY KEY (`id_hasil`),
  ADD KEY `id_alternatif` (`id_alternatif`);

--
-- Indexes for table `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indexes for table `penilaian`
--
ALTER TABLE `penilaian`
  ADD PRIMARY KEY (`id_penilaian`),
  ADD KEY `id_alternatif` (`id_alternatif`),
  ADD KEY `id_kriteria` (`id_kriteria`),
  ADD KEY `nilai` (`nilai`);

--
-- Indexes for table `sub_kriteria`
--
ALTER TABLE `sub_kriteria`
  ADD PRIMARY KEY (`id_sub_kriteria`),
  ADD KEY `id_kriteria` (`id_kriteria`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_user_level` (`id_user_level`);

--
-- Indexes for table `user_level`
--
ALTER TABLE `user_level`
  ADD PRIMARY KEY (`id_user_level`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alternatif`
--
ALTER TABLE `alternatif`
  MODIFY `id_alternatif` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `hasil`
--
ALTER TABLE `hasil`
  MODIFY `id_hasil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `kriteria`
--
ALTER TABLE `kriteria`
  MODIFY `id_kriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `penilaian`
--
ALTER TABLE `penilaian`
  MODIFY `id_penilaian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=266;

--
-- AUTO_INCREMENT for table `sub_kriteria`
--
ALTER TABLE `sub_kriteria`
  MODIFY `id_sub_kriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=130;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user_level`
--
ALTER TABLE `user_level`
  MODIFY `id_user_level` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `hasil`
--
ALTER TABLE `hasil`
  ADD CONSTRAINT `hasil_ibfk_1` FOREIGN KEY (`id_alternatif`) REFERENCES `alternatif` (`id_alternatif`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `penilaian`
--
ALTER TABLE `penilaian`
  ADD CONSTRAINT `penilaian_ibfk_1` FOREIGN KEY (`id_alternatif`) REFERENCES `alternatif` (`id_alternatif`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `penilaian_ibfk_2` FOREIGN KEY (`id_kriteria`) REFERENCES `kriteria` (`id_kriteria`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `penilaian_ibfk_3` FOREIGN KEY (`nilai`) REFERENCES `sub_kriteria` (`id_sub_kriteria`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sub_kriteria`
--
ALTER TABLE `sub_kriteria`
  ADD CONSTRAINT `sub_kriteria_ibfk_1` FOREIGN KEY (`id_kriteria`) REFERENCES `kriteria` (`id_kriteria`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`id_user_level`) REFERENCES `user_level` (`id_user_level`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
