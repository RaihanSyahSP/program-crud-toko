-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2021 at 06:05 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `belajar`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('bangjul', 'bangjul123'),
('raihan', 'raihan123');

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `kodebarang` varchar(5) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `harga` int(10) NOT NULL,
  `stok` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`kodebarang`, `nama`, `harga`, `stok`) VALUES
('B001', 'Terigu', 10000, 15),
('B002', 'Gula Pasir', 5000, 25),
('B003', 'Beras', 13000, 25),
('B004', 'Susu', 8000, 25),
('B005', 'Kopi', 3000, 15),
('B006', 'Gula Merah', 4000, 30);

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `KODE` varchar(5) NOT NULL,
  `JUDUL` varchar(50) NOT NULL,
  `PENULIS` varchar(30) NOT NULL,
  `TAHUN` varchar(5) NOT NULL,
  `HARGA` int(11) NOT NULL,
  `PENERBIT` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`KODE`, `JUDUL`, `PENULIS`, `TAHUN`, `HARGA`, `PENERBIT`) VALUES
('B001', 'PEMROGRAMAN HTML', 'AHMAD AMARULLAH', '2015', 45000, 'GRAMEDIA'),
('B002', 'PEMROGRAMAN PHP & MYSQL', 'TARYANA SURYANA', '2020', 70000, 'GRAMEDIA'),
('B003', 'MYOB ACCOUNTING', 'JOGIYANTO', '2010', 65000, 'GRAHA ILMU'),
('B004', 'JAVA DAN MYSQL', 'TARYANA SURYANA', '2018', 45000, 'GRAMEDIA'),
('B005', 'PEMROGAMAN E-GOVERNMENT', 'TARYANA RX', '2019', 60000, 'GRAHA ILMU');

-- --------------------------------------------------------

--
-- Table structure for table `penjualan`
--

CREATE TABLE `penjualan` (
  `id` int(10) NOT NULL,
  `kodebarang` varchar(10) NOT NULL,
  `jumlah` int(5) NOT NULL,
  `nama_pembeli` varchar(20) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `kota` varchar(20) NOT NULL,
  `kode_pos` varchar(5) NOT NULL,
  `telp` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penjualan`
--

INSERT INTO `penjualan` (`id`, `kodebarang`, `jumlah`, `nama_pembeli`, `alamat`, `kota`, `kode_pos`, `telp`, `email`) VALUES
(2, 'B001', 1, 'erik', 'JALAN KUNINGAN', 'GARUT', '40432', '08943242423424', 'erik@gmail.com'),
(3, 'B002', 1, 'Raihan', 'efwf', 'TASIKMALAYA', '40432', '089224838434', 'hantu@gmail.com'),
(6, 'B003', 1, 'Gina', 'Jalan Sukajadi', 'Bandung', '40161', '0812223232323', 'ginaull@gmail.com'),
(7, 'B002', 7, 'sofia', 'Jalan Baleendah', 'Bandung', '17020', '085232345353', 'sofia45@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `NIM` varchar(10) NOT NULL,
  `NAMA` varchar(30) NOT NULL,
  `ALAMAT` varchar(50) NOT NULL,
  `KOTA` varchar(20) NOT NULL,
  `HP` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`NIM`, `NAMA`, `ALAMAT`, `KOTA`, `HP`) VALUES
('10120001', 'GUNADI', 'JLN.MERDEKA 12', 'BANDUNG', '081111111111'),
('10120002', 'SARI KARTIKA', 'JLN.SETIABUDI 89', 'BANDUNG', '082222222222'),
('10120003', 'DEWI PURNAMA', 'JLN.SARIJADI 76', 'BANDUNG', '083333333333'),
('10120004', 'SONYA ERMINA', 'JLN.HEGARMANAH 23', 'TASIKMALAYA', '084444444444'),
('10120177', 'DODDY', 'JALAN KUNINGAN', 'CIREBON', '081324884884'),
('10120186', 'RAIHAN SYAH SUKANA PUTRA', 'JLN.KOPO 104', 'BANDUNG', '089526754667'),
('101204323', 'UJANG', 'JALAN KALIMANTAN', 'GARUT', '082382837447'),
('10120983', 'NAKULA P', 'JALAN ARCAMANIK N0 23', 'GARUT', '089347576886');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`kodebarang`);

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`KODE`);

--
-- Indexes for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`NIM`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `penjualan`
--
ALTER TABLE `penjualan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
