-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 25, 2020 at 04:49 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_konseparsitek`
--

-- --------------------------------------------------------

--
-- Table structure for table `bidang`
--

CREATE TABLE `bidang` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bidang`
--

INSERT INTO `bidang` (`id`, `judul`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 'Pengawasan', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.', NULL, '2020-09-20 21:58:46'),
(7, 'Perencanaan', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.', '2020-09-20 21:57:42', '2020-09-20 21:58:28');

-- --------------------------------------------------------

--
-- Table structure for table `carousel`
--

CREATE TABLE `carousel` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `video` varchar(255) NOT NULL,
  `halaman` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `carousel`
--

INSERT INTO `carousel` (`id`, `judul`, `keterangan`, `gambar`, `video`, `halaman`, `created_at`, `updated_at`) VALUES
(1, 'Concept Design', 'Menangani proyek proyek pembangunan mulai dari perencanaan sampai selesai pembangunan', 'hero_3.jpg', 'https://www.youtube.com/watch?v=CP2ttyGVzRU', 'beranda', NULL, '2020-09-21 03:18:20'),
(2, '', '', 'hero_1.jpg', 'https://www.youtube.com/watch?v=MdPc9MxNRhQ&list=PLFIM0718LjIUkkIq1Ub6B5dYNb6IlMvtc&index=13', 'beranda', '2020-09-18 21:31:14', '2020-09-20 22:15:00'),
(10, '', '', 'hero_2.jpg', '', 'beranda', '2020-09-20 23:05:35', '2020-09-20 23:05:35'),
(12, 'ABOUT US', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', 'hero_1.jpg', '', 'tentang', '2020-09-20 23:19:52', '2020-09-20 23:19:52'),
(15, 'CONTACT US', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', 'hero_2.jpg', '', 'kontak', '2020-09-21 01:57:16', '2020-09-21 01:57:25'),
(16, 'OUR PROJECTS', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', 'hero_3.jpg', '', 'proyek', '2020-09-21 01:57:16', '2020-09-21 01:57:25');

-- --------------------------------------------------------

--
-- Table structure for table `datadiri`
--

CREATE TABLE `datadiri` (
  `id` int(11) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `nomor` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `about_us` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `datadiri`
--

INSERT INTO `datadiri` (`id`, `alamat`, `nomor`, `email`, `about_us`, `created_at`, `updated_at`) VALUES
(1, 'Genteng, Banyuwangi - Jawa Timur. Jln. Merpati No. 00 Genteng', '+62 (0333) 465 756 Senin s/d Jumat Jam 09.00 s/d 15.00', 'concept_designmuda@yahoo.com', 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.', NULL, '2020-09-21 01:59:10');

-- --------------------------------------------------------

--
-- Table structure for table `keluarga`
--

CREATE TABLE `keluarga` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `sosmed` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `keluarga`
--

INSERT INTO `keluarga` (`id`, `nama`, `sosmed`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 'Mas Andi', 'https://github.com/mtomyis', 'person_1.jpg', NULL, NULL),
(3, 'Mas Hadi', 'https://github.com/mtomyis', 'person_2.jpg', NULL, NULL),
(4, 'Mas Jovy', 'https://github.com/mtomyis', 'person_3.jpg', NULL, NULL),
(5, 'Mas Ajes', 'https://github.com/mtomyis', 'person_4.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pekerjaan`
--

CREATE TABLE `pekerjaan` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `keterangan` varchar(555) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `gambar2` varchar(255) NOT NULL,
  `gambar3` varchar(255) NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `tanggal_awal` date DEFAULT NULL,
  `tanggal_akhir` date DEFAULT NULL,
  `klien` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pekerjaan`
--

INSERT INTO `pekerjaan` (`id`, `judul`, `lokasi`, `keterangan`, `gambar`, `gambar2`, `gambar3`, `kategori`, `tanggal_awal`, `tanggal_akhir`, `klien`, `created_at`, `updated_at`) VALUES
(1, 'Pengawasan Perencanaan Tata Kota Jakarta Pusat', 'Jakarta', 'Pekerjaan Pengawasan Perencanaan Tata Kota Jakarta Pusat adalah kerjasama antara pemerintah kota jakarta pusat dengan pemerintah pusat. yang bertujuan untuk memberikan pelayanan terbaik dalam hal infrastruktur sistem pelayanan masyarakat dalam wilayah jak', 'img_3.jpg', 'img_2.jpg', 'img_1.jpg', 'Pengawasan', '2019-08-23', '0000-00-00', 'Pemkot Jakarta Pusat', '2020-09-23 09:58:33', '2020-09-23 09:58:33'),
(3, 'Perencanaan Pembangunan Gedung Supermarket Hero', 'Jakarta', 'Supermarket Hero adalah perusahaan ritel yang memiliki banyak cabang di Indonesia. Hero Supermarket Group adalah perusahaan ritel modern pertama di Indonesia, didirikan tanggal 23 Agustus 1971 oleh almarhum Muhammad Saleh Kurnia di Jalan Falatehan.', 'img_1.jpg', 'img_2.jpg', 'img_2.jpg', 'Pengawasan', '2019-11-23', '0000-00-00', 'Hero Group', '2020-09-21 07:37:40', '2020-09-21 07:37:40'),
(4, 'Pengawasan Pembangunan Kantor Pusat Pertamina', 'Jakarta', 'Pertamina (dahulu bernama Perusahaan Pertambangan Minyak dan Gas Bumi Negara) atau nama resminya PT. PERTAMINA (Persero) adalah sebuah BUMN yang bertugas mengelola penambangan minyak dan gas bumi di Indonesia.', 'img_2.jpg', 'img_3.jpg', 'img_1.jpg', 'Pengawasan', '2019-02-12', '0000-00-00', 'Pertamina', '2020-09-21 07:37:56', '2020-09-21 07:37:56'),
(5, 'Pengawasan Pembangunan Gedung Man 5 Jombang', 'Jombang', 'Pengawasan pembangunan gedung di Madrasah Aliyah Negeri 5 Jombang', 'img_4.jpg', 'img_2.jpg', 'img_1.jpg', 'Pengawasan', '2020-08-03', '2020-12-20', 'MAN 4 Jombang', '2020-09-21 07:38:09', '2020-09-21 07:38:09');

-- --------------------------------------------------------

--
-- Table structure for table `ringkasan`
--

CREATE TABLE `ringkasan` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ringkasan`
--

INSERT INTO `ringkasan` (`id`, `judul`, `keterangan`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 'Concept Design', 'Menangani proyek proyek pembangunan mulai dari perencanaan sampai selesai pembangunan', 'about_2.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `testimoni`
--

CREATE TABLE `testimoni` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `asal` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testimoni`
--

INSERT INTO `testimoni` (`id`, `nama`, `asal`, `gambar`, `keterangan`, `created_at`, `updated_at`) VALUES
(15, 'Nama Testimoni', 'Asal daerah / perusahaan', 'person_1.jpg', 'Keterangan testimoni', '2020-09-21 01:57:16', '2020-09-21 02:44:35'),
(17, 'Nama Testimoni 2', 'Asal daerah / perusahaan 2', 'person_2.jpg', 'Keterangan testimoni 2', '2020-09-21 01:57:16', '2020-09-21 02:44:35'),
(18, 'Nama Testimoni 3', 'Asal daerah / perusahaan 3', 'person_3.jpg', 'Keterangan testimoni 3', '2020-09-21 01:57:16', '2020-09-21 02:44:35');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(12) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(20) NOT NULL,
  `level` int(11) NOT NULL,
  `keterangan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `name`, `username`, `password`, `level`, `keterangan`) VALUES
(2, 'Admin', 'admin', '1', 2, 'Administrator');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bidang`
--
ALTER TABLE `bidang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carousel`
--
ALTER TABLE `carousel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `datadiri`
--
ALTER TABLE `datadiri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `keluarga`
--
ALTER TABLE `keluarga`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pekerjaan`
--
ALTER TABLE `pekerjaan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ringkasan`
--
ALTER TABLE `ringkasan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimoni`
--
ALTER TABLE `testimoni`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bidang`
--
ALTER TABLE `bidang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `carousel`
--
ALTER TABLE `carousel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `datadiri`
--
ALTER TABLE `datadiri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `keluarga`
--
ALTER TABLE `keluarga`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pekerjaan`
--
ALTER TABLE `pekerjaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `ringkasan`
--
ALTER TABLE `ringkasan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `testimoni`
--
ALTER TABLE `testimoni`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
