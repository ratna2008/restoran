-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2025 at 07:18 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `absensi`
--

-- --------------------------------------------------------

--
-- Table structure for table `absen`
--

CREATE TABLE `absen` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `status` varchar(20) NOT NULL,
  `tanggal` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `absen`
--

INSERT INTO `absen` (`id`, `nama`, `status`, `tanggal`) VALUES
(1, 'budi', 'Hadir', '2025-02-10 09:15:33'),
(2, 'siti', 'Sakit', '2025-02-10 09:17:25');

-- --------------------------------------------------------

--
-- Table structure for table `kelola_user`
--

CREATE TABLE `kelola_user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `level` enum('admin','user','karyawan') NOT NULL,
  `status` enum('aktif','nonaktif') DEFAULT 'aktif'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kelola_user`
--

INSERT INTO `kelola_user` (`id`, `username`, `level`, `status`) VALUES
(1, 'admin', 'admin', 'aktif'),
(2, 'budi', 'user', 'aktif'),
(3, 'sinta', 'karyawan', 'nonaktif');

-- --------------------------------------------------------

--
-- Table structure for table `laporan`
--

CREATE TABLE `laporan` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `pengirim` varchar(100) NOT NULL,
  `tanggal` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `laporan`
--

INSERT INTO `laporan` (`id`, `judul`, `deskripsi`, `pengirim`, `tanggal`) VALUES
(1, 'Laporan A', 'Isi laporan A', 'budi', '2025-11-27 10:15:00'),
(2, 'Laporan B', 'Isi laporan B', 'siti', '2025-11-27 10:20:00'),
(3, '2025-11-27 10:15:(', 'Isi laporan A', '', '2025-12-03 07:45:08'),
(4, '2025-12-01', 'Staf dapur dan kasir bekerja sesuai jadwal, persia...', '', '2025-12-03 08:00:58');

-- --------------------------------------------------------

--
-- Table structure for table `laporan_kerja_restoran`
--

CREATE TABLE `laporan_kerja_restoran` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `pengirim` varchar(100) DEFAULT NULL,
  `tanggal` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `laporan_kerja_restoran`
--

INSERT INTO `laporan_kerja_restoran` (`id`, `judul`, `deskripsi`, `pengirim`, `tanggal`) VALUES
(1, 'Shift Pagi', 'Staf dapur dan kasir bekerja sesuai jadwal, persiapan sarapan', 'Rudi Santoso', '2025-12-01'),
(2, 'Persiapan Bahan Makanan', 'Memeriksa stok bahan, menyiapkan bumbu', 'Siti Rahmawati', '2025-12-01'),
(3, 'Shift Siang', 'Melayani pelanggan, memastikan kebersihan meja & area', 'Budi Hartono', '2025-12-02'),
(4, 'Pengecekan Inventaris', 'Menghitung stok makanan, dan perlengkapan dapur', 'Lestari Dewi', '2025-12-02'),
(5, 'Shift Malam', 'Membersihkan dapur, menutup kasir, laporan harian selesai', 'Andi Wijaya', '2025-12-03');

-- --------------------------------------------------------

--
-- Table structure for table `laporan_pegawai`
--

CREATE TABLE `laporan_pegawai` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `jam_kerja` decimal(4,2) NOT NULL,
  `keterangan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `laporan_pegawai`
--

INSERT INTO `laporan_pegawai` (`id`, `nama`, `jabatan`, `judul`, `tanggal`, `jam_kerja`, `keterangan`) VALUES
(1, 'Rudi Santoso', 'Koki', 'Shift Pagi Persiapan Sarapan', '2025-12-01', 8.00, 'Menyiapkan sarapan dan bahan makanan'),
(2, 'Siti Rahmawati', 'Kasir', 'Shift Pagi Melayani Pelanggan', '2025-12-01', 8.00, 'Melayani pelanggan dan transaksi kasir'),
(3, 'Budi Hartono', 'Waiter', 'Shift Siang Pelayanan Meja', '2025-12-02', 7.50, 'Melayani pelanggan di meja'),
(5, 'Andi Wijaya', 'Kasir', 'Izin Sakit', '2025-12-03', 0.00, 'Tidak masuk kerja karena sakit');

-- --------------------------------------------------------

--
-- Table structure for table `laporan_penjualan`
--

CREATE TABLE `laporan_penjualan` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `pengirim` varchar(100) DEFAULT NULL,
  `tanggal` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `laporan_penjualan`
--

INSERT INTO `laporan_penjualan` (`id`, `judul`, `deskripsi`, `pengirim`, `tanggal`) VALUES
(1, 'Penjualan Spesial', 'Terjual 10 porsi Ayam Tuscan Panggang', 'Rudi Santoso', '2025-12-01'),
(2, 'Penjualan Salad', 'Terjual 30 Porsi Caesar Salad', 'Siti Rahmawati', '2025-12-01'),
(3, 'Penjualan Pembuka', 'Terjual 20 porsi Mozzarella Goreng', 'Budi Hartono', '2025-12-02'),
(4, 'Penjualan Pembuka', 'Terjual 10 Sup Lobster', 'Lestari Dewi', '2025-12-02'),
(5, 'Penjualan Salad', 'Terjual 12 porsiSpinach Salad', 'Andi Wijaya', '2025-12-03');

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `no_telp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id`, `nama`, `jabatan`, `no_telp`) VALUES
(7, 'ratna', 'owner', '083849535189'),
(8, 'ira', 'pelayan', '086798765432');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` enum('admin','pegawai') NOT NULL DEFAULT 'pegawai',
  `status` enum('aktif','nonaktif') NOT NULL DEFAULT 'aktif'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `level`, `status`) VALUES
(3, 'admin123', '', 'admin', 'aktif'),
(4, 'pegawai1', '', 'pegawai', 'aktif'),
(5, 'pegawai2', '', 'pegawai', 'aktif');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absen`
--
ALTER TABLE `absen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kelola_user`
--
ALTER TABLE `kelola_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `laporan_kerja_restoran`
--
ALTER TABLE `laporan_kerja_restoran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `laporan_pegawai`
--
ALTER TABLE `laporan_pegawai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `laporan_penjualan`
--
ALTER TABLE `laporan_penjualan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absen`
--
ALTER TABLE `absen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kelola_user`
--
ALTER TABLE `kelola_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `laporan`
--
ALTER TABLE `laporan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `laporan_pegawai`
--
ALTER TABLE `laporan_pegawai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
