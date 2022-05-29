-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2022 at 12:55 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aplikasi_pengajuan_kartu_kuning`
--

-- --------------------------------------------------------

--
-- Table structure for table `loker`
--

CREATE TABLE `loker` (
  `id_loker` varchar(256) NOT NULL,
  `id_perusahaan` varchar(256) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `posisi` varchar(50) NOT NULL,
  `jumlah_rekrut` int(30) NOT NULL,
  `salary` varchar(50) NOT NULL,
  `batas_akhir` date NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `loker`
--

INSERT INTO `loker` (`id_loker`, `id_perusahaan`, `judul`, `deskripsi`, `posisi`, `jumlah_rekrut`, `salary`, `batas_akhir`, `created_at`) VALUES
('348a0d5b41d65a58773ce738b7ab77c8', 'd509166e5f7601075b91b2de69f13471', 'Loker', 'Sepatu', 'SE', 100, '10000000', '2022-05-25', '2022-05-25'),
('4d45b9f2bd25b7188b111468e516b831', '98a4894d22df7219156f948e7dfcb1e3', 'as', 'posisi', 'SE', 100, '10000000', '2022-06-02', '2022-05-21'),
('f714d4497183f871a62b5c9b293e770d', '98a4894d22df7219156f948e7dfcb1e3', 'judul', 'hash', 'has', 100, '10000', '2022-12-12', '2022-05-21');

-- --------------------------------------------------------

--
-- Table structure for table `perusahaan_detail`
--

CREATE TABLE `perusahaan_detail` (
  `id_perusahaan_detail` varchar(256) NOT NULL,
  `nama_perusahaan` varchar(50) DEFAULT NULL,
  `jenis_perusahaan` varchar(50) DEFAULT NULL,
  `npwp_perusahaan` varchar(30) DEFAULT NULL,
  `provinsi` varchar(50) DEFAULT NULL,
  `kota` varchar(50) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `kode_pos` varchar(20) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `nomor_telepon` varchar(50) DEFAULT NULL,
  `date_registered` date NOT NULL,
  `logo` varchar(256) DEFAULT NULL,
  `id_status_verifikasi` int(11) NOT NULL,
  `id_status_aktif` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `perusahaan_detail`
--

INSERT INTO `perusahaan_detail` (`id_perusahaan_detail`, `nama_perusahaan`, `jenis_perusahaan`, `npwp_perusahaan`, `provinsi`, `kota`, `alamat`, `kode_pos`, `deskripsi`, `nomor_telepon`, `date_registered`, `logo`, `id_status_verifikasi`, `id_status_aktif`) VALUES
('98a4894d22df7219156f948e7dfcb1e3', 'PT Pusri', 'PT Pusri', '1021092109021', 'Palembang', 'Prabumulih', 'Jl.Bealnti', '8128912', 'Yes', '0182128172', '2022-05-17', '08da084e6098d66d8e91ba6601947807_logo1.png', 2, 2),
('d509166e5f7601075b91b2de69f13471', 'PT Pusri ', 'Persero', '910920192', 'Sumatera Selatan', 'test', 'Jl. Sekip', '30661', 'Bagus', '+62812781728', '2022-05-25', 'f9c37483c1c51ecb622b3b6d4975c6e4_logo.png', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `status_aktif`
--

CREATE TABLE `status_aktif` (
  `id_status_aktif` int(11) NOT NULL,
  `status_aktif` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `status_aktif`
--

INSERT INTO `status_aktif` (`id_status_aktif`, `status_aktif`) VALUES
(1, 'Belum Aktif'),
(2, 'Telah Aktif');

-- --------------------------------------------------------

--
-- Table structure for table `status_perpanjangan`
--

CREATE TABLE `status_perpanjangan` (
  `id_status_perpanjangan` int(11) NOT NULL,
  `status_perpanjangan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `status_perpanjangan`
--

INSERT INTO `status_perpanjangan` (`id_status_perpanjangan`, `status_perpanjangan`) VALUES
(1, 'Belum Membutuhkan Perpanjang'),
(2, 'Membutuhkan Perpanjangan');

-- --------------------------------------------------------

--
-- Table structure for table `status_verifikasi`
--

CREATE TABLE `status_verifikasi` (
  `id_status_verifikasi` int(11) NOT NULL,
  `status_verifikasi` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `status_verifikasi`
--

INSERT INTO `status_verifikasi` (`id_status_verifikasi`, `status_verifikasi`) VALUES
(1, 'Belum Diverifikasi'),
(2, 'Sudah Diverifikasi');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` varchar(256) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(256) NOT NULL,
  `email` varchar(30) NOT NULL,
  `id_user_level` varchar(256) NOT NULL,
  `id_user_detail` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `email`, `id_user_level`, `id_user_detail`) VALUES
('afb5ab01c26d047a96d48a108ac33216', 'pegawai', 'pegawai', 'taufiiqul.hakim@binus.ac.id', '3', 'afb5ab01c26d047a96d48a108ac33216'),
('d509166e5f7601075b91b2de69f13471', 'perusahaan', 'perusahaan', 'taufiiqulhakim23@gmail.com', '2', 'd509166e5f7601075b91b2de69f13471'),
('ef6e295b553be6143f5179fd1955515f', 'admin', 'admin', 'admin@gmail.com', '1', 'ef6e295b553be6143f5179fd1955515f');

-- --------------------------------------------------------

--
-- Table structure for table `user_detail`
--

CREATE TABLE `user_detail` (
  `id_user_detail` varchar(256) NOT NULL,
  `no_pendaftaran` varchar(20) DEFAULT NULL,
  `nik` varchar(50) DEFAULT NULL,
  `nama_lengkap` varchar(50) DEFAULT NULL,
  `tempat_lahir` varchar(50) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `jenis_kelamin` enum('L','P') DEFAULT NULL,
  `agama` varchar(30) DEFAULT NULL,
  `status_perkawinan` varchar(30) DEFAULT NULL,
  `tinggi_badan` int(12) DEFAULT NULL,
  `berat_badan` int(12) DEFAULT NULL,
  `pendidikan_terakhir` varchar(100) DEFAULT NULL,
  `jurusan` varchar(50) DEFAULT NULL,
  `pengalaman_kerja` text DEFAULT NULL,
  `no_hp` varchar(20) DEFAULT NULL,
  `provinsi` varchar(30) DEFAULT NULL,
  `kota` varchar(30) DEFAULT NULL,
  `kode_pos` varchar(20) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `foto_saya` varchar(256) DEFAULT NULL,
  `foto_ktp` varchar(256) DEFAULT NULL,
  `foto_ijazah` varchar(256) DEFAULT NULL,
  `date_registered` date NOT NULL,
  `id_status_verifikasi` int(12) NOT NULL,
  `id_status_perpanjangan` int(12) NOT NULL,
  `id_status_aktif` int(11) NOT NULL,
  `mulai_berlaku` date DEFAULT NULL,
  `akhir_berlaku` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_detail`
--

INSERT INTO `user_detail` (`id_user_detail`, `no_pendaftaran`, `nik`, `nama_lengkap`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `agama`, `status_perkawinan`, `tinggi_badan`, `berat_badan`, `pendidikan_terakhir`, `jurusan`, `pengalaman_kerja`, `no_hp`, `provinsi`, `kota`, `kode_pos`, `alamat`, `foto_saya`, `foto_ktp`, `foto_ijazah`, `date_registered`, `id_status_verifikasi`, `id_status_perpanjangan`, `id_status_aktif`, `mulai_berlaku`, `akhir_berlaku`) VALUES
('afb5ab01c26d047a96d48a108ac33216', '52458251', '061827182871812', 'Taufiiqul Hakim', 'Palembang', '2022-05-25', 'L', 'Islam', 'Kawin', 170, 59, 'SD', 'Teknik komputer', 'CV Digital Creative', '+62812781728', 'Sumatera Selatan', 'test', '30661', 'Jl. Sekip', 'd51f9ef4e86463aafe7d35e228a75034_saya.png', 'd51f9ef4e86463aafe7d35e228a75034_ktp.png', 'd51f9ef4e86463aafe7d35e228a75034_ijazah.png', '2022-05-22', 2, 1, 2, '2022-05-18', '2022-05-31'),
('ef6e295b553be6143f5179fd1955515f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-18', 1, 1, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_level`
--

CREATE TABLE `user_level` (
  `id_user_level` int(11) NOT NULL,
  `user_level` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_level`
--

INSERT INTO `user_level` (`id_user_level`, `user_level`) VALUES
(1, 'Admin'),
(2, 'Perusahaan'),
(3, 'User');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `loker`
--
ALTER TABLE `loker`
  ADD PRIMARY KEY (`id_loker`);

--
-- Indexes for table `perusahaan_detail`
--
ALTER TABLE `perusahaan_detail`
  ADD PRIMARY KEY (`id_perusahaan_detail`);

--
-- Indexes for table `status_aktif`
--
ALTER TABLE `status_aktif`
  ADD PRIMARY KEY (`id_status_aktif`);

--
-- Indexes for table `status_perpanjangan`
--
ALTER TABLE `status_perpanjangan`
  ADD PRIMARY KEY (`id_status_perpanjangan`);

--
-- Indexes for table `status_verifikasi`
--
ALTER TABLE `status_verifikasi`
  ADD PRIMARY KEY (`id_status_verifikasi`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `user_detail`
--
ALTER TABLE `user_detail`
  ADD PRIMARY KEY (`id_user_detail`);

--
-- Indexes for table `user_level`
--
ALTER TABLE `user_level`
  ADD PRIMARY KEY (`id_user_level`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `status_aktif`
--
ALTER TABLE `status_aktif`
  MODIFY `id_status_aktif` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `status_perpanjangan`
--
ALTER TABLE `status_perpanjangan`
  MODIFY `id_status_perpanjangan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `status_verifikasi`
--
ALTER TABLE `status_verifikasi`
  MODIFY `id_status_verifikasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_level`
--
ALTER TABLE `user_level`
  MODIFY `id_user_level` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
