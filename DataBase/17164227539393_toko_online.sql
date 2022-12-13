-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Nov 2022 pada 15.03
-- Versi server: 10.4.20-MariaDB
-- Versi PHP: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toko_online`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_admin`
--

CREATE TABLE `tb_admin` (
  `adminID` int(2) NOT NULL,
  `roleID` tinyint(1) NOT NULL,
  `nama_admin` varchar(300) NOT NULL,
  `email_admin` varchar(333) NOT NULL,
  `kontak_admin` varchar(333) NOT NULL,
  `password` varchar(300) NOT NULL,
  `nik` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_admin`
--

INSERT INTO `tb_admin` (`adminID`, `roleID`, `nama_admin`, `email_admin`, `kontak_admin`, `password`, `nik`) VALUES
(1, 1, 'bono', 'bono@gmail.com', '081928371', '1234', 102519001),
(2, 1, 'samyang', 'samyang@gmail.com', '0871261261', '122', 102520001);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_customer`
--

CREATE TABLE `tb_customer` (
  `custID` int(11) NOT NULL,
  `roleID` int(2) NOT NULL,
  `nama` varchar(333) NOT NULL,
  `email` varchar(333) NOT NULL,
  `alamat` varchar(333) NOT NULL,
  `telepon` varchar(20) NOT NULL,
  `username` varchar(333) NOT NULL,
  `password` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_customer`
--

INSERT INTO `tb_customer` (`custID`, `roleID`, `nama`, `email`, `alamat`, `telepon`, `username`, `password`) VALUES
(1, 3, 'Kevin', 'kevin@gmail.com', 'Jl.Matahari', '08218769319', 'kevin', '123'),
(2, 3, 'Dimas', 'dimas@gmail.com', 'Jl.Merpati', '08796119929', 'dimas', '123'),
(3, 3, 'Irfan', 'irfan@gmail.com', 'Jl.Baladewa', '08120968714', 'irfan', '123'),
(4, 3, 'Bagas', 'bagas@gmail.com', 'Jl.Flamboyan', '08876092381', 'bagas', '123'),
(5, 3, 'Nita', 'nita@gamil.com', 'Jl.Janur', '08527891104', 'nita', '123'),
(6, 3, 'Andre', 'andre@gamil.com', 'Jl.Mawar', '08519127653', 'andre', '123'),
(7, 3, 'Rio', 'rio@gmail.com', 'Jl.Merpati', '08581572835', 'rio', '123'),
(8, 3, 'Dela', 'dela@gmail.com', 'Jl.Matahari', '08521654320', 'dela', '123'),
(9, 3, 'Anggun', 'anggun@gmail.com', 'Jl.Kupa', '08876546765', 'anggun', '123'),
(10, 3, 'Putri', 'putri@gmail.com', 'Jl.pahlawan', '08525926936', 'putri', '123'),
(11, 3, 'Safa', 'safa@gmail.com', 'Jl.Mengkudu', '089910237842', 'safa', '123'),
(12, 3, 'Cika', 'cika@gmail.com', 'Jl.Melambai', '08967785524', 'cika', '123'),
(13, 3, 'Bilqis', 'bilqis@gmail.com', 'Jl.Kudalaut', '08990129734', 'bilqis', '123'),
(14, 3, 'Marjuki', 'marjuki@gmail.com', 'Jl.Bersama', '0855689210', 'marjuki', '123'),
(15, 3, 'Rafli', 'rafli@gmail.com', 'Jl.Layang', '08990658371', 'rafli', '123'),
(16, 3, 'Bintang', 'bintang@gmail.com', 'Jl.Kalibaru', '081232169823', 'bintang', '123'),
(17, 3, 'Jiun', 'jiun@gmail.com', 'Jl.Kosasi', '08127768541', 'jiun', '123'),
(18, 3, 'Cici', 'cici@gmail.com', 'Jl.Mustika', '08784512098', 'cici', '123'),
(19, 3, 'Stepen', 'stepen@gmail.com', 'Jl.Mangga', '08512739514', 'stepen', '123'),
(20, 3, 'Joni', 'joni@gmail.com', 'Jl.Sawahbaru', '08121829346', 'joni', '123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kategori`
--

CREATE TABLE `tb_kategori` (
  `kategoriID` int(2) NOT NULL,
  `nama_kategori` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_kategori`
--

INSERT INTO `tb_kategori` (`kategoriID`, `nama_kategori`) VALUES
(1, 'Elektronik'),
(2, 'Fashion Pria'),
(3, 'Fashion Wanita'),
(4, 'Fashion Anak'),
(5, 'Sport');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_order`
--

CREATE TABLE `tb_order` (
  `orderID` int(11) NOT NULL,
  `custID` int(100) NOT NULL,
  `nama_penerima` varchar(333) NOT NULL,
  `alamat_penerima` varchar(333) NOT NULL,
  `kontak_penerima` varchar(20) NOT NULL,
  `tgl_order` date NOT NULL,
  `metode_pembayaran` varchar(333) NOT NULL,
  `metode_pengiriman` varchar(333) NOT NULL,
  `subtotal` int(100) NOT NULL,
  `status_order` varchar(333) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_order`
--

INSERT INTO `tb_order` (`orderID`, `custID`, `nama_penerima`, `alamat_penerima`, `kontak_penerima`, `tgl_order`, `metode_pembayaran`, `metode_pengiriman`, `subtotal`, `status_order`) VALUES
(19, 2, 'dimas', 'jl. baru', '08211234562', '2017-06-02', 'BCA', 'JNE', 0, 'selesai'),
(20, 2, 'dimas', 'jl. baru', '021123456', '2017-06-03', 'BCA', 'JNE', 0, 'selesai'),
(21, 1, 'kevin', 'jl.raya', '021456789', '2017-06-08', 'BCA', 'JNE', 0, 'selesai'),
(22, 4, 'bagas', 'jl. kebagusan', '021722222', '2017-06-16', 'BCA', 'JNE', 0, 'selesai'),
(23, 3, 'irfan', 'jl.pasar', '087877899', '2017-07-13', 'BCA', 'JNE', 0, 'selesai'),
(24, 7, 'rio', 'jl.dilema', '0814562233', '2017-07-17', 'BCA', 'JNE', 0, 'selesai'),
(25, 5, 'nita', 'jl.limo', '08145566', '2017-07-20', 'BCA', 'JNE', 0, 'selesai'),
(26, 6, 'andre', 'jl.pengadegan', '0568999', '2017-07-22', 'BCA', 'JNE', 0, 'selesai'),
(27, 8, 'dela', 'jl. pegadaian', '011111', '2017-08-03', 'BCA', 'JNE', 0, 'selesai'),
(28, 10, 'putri', 'jl. gajah', '3255544', '2017-08-16', 'BCA', 'JNE', 0, 'selesai'),
(29, 9, 'anggun', 'jl.selatan', '024566', '2017-08-17', 'BCA', 'JNE', 0, 'selesai'),
(30, 13, 'bilqis', 'jl.apel', '0244655', '2017-08-24', 'BCA', 'TIKI', 0, 'selesai'),
(31, 11, 'cika', 'jl.indah', '0212121', '2017-09-09', 'BCA', 'JNE', 0, 'selesai'),
(32, 11, 'safa', 'jl.uswatun hasanah', '536789', '2017-09-22', 'SazanPay', 'JNE', 0, 'selesai'),
(33, 14, 'juki', 'jl.asem', '085654789', '2017-09-23', 'BCA', 'JNE', 0, 'selesai'),
(34, 16, 'bintang', 'jl.pelangi2', '088444565', '2017-09-25', 'BCA', 'JNE', 0, 'selesai'),
(35, 15, 'rafli', 'jl.asemjaya', '02987', '2017-10-05', 'BNI', 'POS', 0, 'selesai'),
(36, 20, 'joni', 'jl.pelangi', '02145666', '2017-10-10', 'BRI', 'JNT', 0, 'selesai'),
(37, 18, 'cici', 'jl.aku', '12345', '2017-11-10', 'MANDIRI', 'TIKI', 0, 'selesai'),
(38, 19, 'stepen', 'jl.diman', '325466', '2017-11-13', 'SazanPay', 'POS', 0, 'selesai'),
(39, 17, 'jiun', 'jl.angsa', '8888', '2017-12-22', 'MANDIRI', 'POS', 0, 'selesai'),
(40, 12, 'cika', 'jl.indah', '457798', '2018-01-03', 'MANDIRI', 'POS', 0, 'selesai'),
(41, 12, 'cika', 'jl.indah', '78954', '2018-01-22', 'BRI', 'TIKI', 0, 'selesai'),
(42, 13, 'bilqis', 'jl.apel', '78999', '2018-02-03', 'BNI', 'JNT', 0, 'selesai'),
(43, 4, 'bagas', 'jl.sawo', '123445', '2018-02-18', 'SazanPay', 'TIKI', 0, 'selesai'),
(44, 14, 'juki', 'jl.gagah', '556633', '2018-03-13', 'BNI', 'POS', 0, 'selesai'),
(45, 18, 'cici', 'jl.pasar', '1234', '2018-03-29', 'BNI', 'JNT', 0, 'selesai'),
(46, 16, 'bintang', 'jl. kebagusan', '08145566', '2018-04-22', 'BCA', 'TIKI', 0, 'selesai'),
(47, 6, 'andre', 'jl.apel', '85269', '2018-04-28', 'MANDIRI', 'JNT', 0, 'selesai'),
(48, 9, 'anggun', 'jl. kebagusan', '0244655', '2018-05-18', 'SazanPay', 'POS', 0, 'selesai'),
(49, 1, 'kevin\r\n', 'jl.Swadaya', '08997843213', '2018-05-26', 'BCA', 'JNE', 0, 'selesai'),
(50, 5, 'nita', 'jl. baru', '12356', '2018-06-23', 'BRI', 'POS', 0, 'selesai'),
(51, 6, 'andre', 'jl. blok g', '08145566', '2018-06-29', 'BCA', 'POS', 0, 'selesai'),
(52, 8, 'dela', 'jl.indah', '08145566', '2018-07-03', 'BRI', 'POS', 0, 'selesai'),
(53, 2, 'dimas', 'jl. kebagusan', '0814562233', '2018-07-23', 'SazanPay', 'JNT', 0, 'selesai'),
(54, 19, 'stepen', 'jl.indah', '343421', '2018-08-03', 'MANDIRI', 'TIKI', 0, 'selesai'),
(55, 11, 'safa', 'jl.indah', '0244655', '2018-08-23', 'BCA', 'POS', 0, 'selesai'),
(56, 18, 'cici', 'jl. baru', '024566', '2018-09-13', 'BCA', 'JNE', 0, 'selesai'),
(57, 15, 'rafli', 'jl.apel', '0814562233', '2018-09-25', 'MANDIRI', 'TIKI', 0, 'selesai'),
(58, 7, 'rio', 'jl. kebagusan', '024566', '2018-10-13', 'BCA', 'JNT', 0, 'selesai'),
(59, 10, 'putri', 'jl. baru', '0568999', '2018-10-22', 'BCA', 'TIKI', 0, 'selesai'),
(60, 2, 'dimas', 'jl.apel', '011111', '2018-11-23', 'BCA', 'JNE', 0, 'selesai'),
(61, 1, 'kevin', 'jl.angsa', '0244655', '2018-11-28', 'BCA', 'POS', 0, 'selesai'),
(62, 5, 'nita', 'jl.pasar', '0568999', '2018-12-11', 'SazanPay', 'TIKI', 0, 'selesai'),
(63, 8, 'dela', 'jl.apel', '0814562233', '2018-12-17', 'SazanPay', 'JNE', 0, 'selesai'),
(64, 1, 'kevin', 'jl. baru', '0814562233', '2019-01-12', 'MANDIRI', 'POS', 0, 'selesai'),
(65, 2, 'dimas', 'jl. kebagusan', '0244655', '2019-01-18', 'BCA', 'TIKI', 0, 'selesai'),
(66, 1, 'kevin', 'jl.raya', '0568999', '2019-02-12', 'SazanPay', 'TIKI', 0, 'selesai'),
(67, 8, 'dela', 'jl.apel', '0244655', '2019-02-15', 'SazanPay', 'TIKI', 0, 'selesai'),
(68, 1, 'kevin', 'jl. baru', '0568999', '2019-03-15', 'SazanPay', 'TIKI', 0, 'selesai'),
(69, 10, 'putri', 'jl.pasar', '024566', '2019-03-20', 'SazanPay', 'TIKI', 0, 'selesai'),
(70, 5, 'nita', 'jl.apel', '011111', '2019-04-10', 'SazanPay', 'JNT', 0, 'selesai'),
(71, 1, 'kevin', 'jl.raya', '0814562233', '2019-04-18', 'SazanPay', 'JNE', 0, 'selesai'),
(72, 7, 'rio', 'jl.pasar', '011111', '2019-05-02', 'BCA', 'JNE', 0, 'selesai'),
(73, 15, 'rafli', 'jl.angsa', '024566', '2019-05-22', 'BCA', 'JNE', 0, 'selesai'),
(74, 14, 'juki', 'jl. baru', '0244655', '2019-06-12', 'BCA', 'JNE', 0, 'selesai'),
(75, 1, 'kevin', 'jl.pasar', '011111', '2019-06-20', 'BCA', 'JNT', 0, 'selesai'),
(76, 1, 'kevin', 'jl.melambai', '08521723845', '2020-01-16', 'BNI', 'TIKI', 0, 'selesai'),
(77, 19, 'stepen', 'jl.cemara', '08215299812', '2020-01-18', 'BRI', 'JNT', 0, 'selesai'),
(78, 13, 'bilqis', 'jl.kedoya', '08781227511', '2020-01-22', 'MANDIRI', 'JNE', 0, 'selesai'),
(79, 5, 'nita', 'jl.panorama', '08991277804', '2020-02-10', 'BCA', 'JNT', 0, 'selesai'),
(80, 7, 'rio', 'jl.walang', '08211278964', '2020-02-11', 'BNI', 'POS', 0, 'selesai'),
(81, 7, 'rio', 'jl.joglo', '08781267398', '2020-02-20', 'MANDIRI', 'JNE', 0, 'selesai'),
(82, 10, 'putri', 'jl.bidara', '08581276386', '2020-03-06', 'BNI', 'JNT', 0, 'selesai'),
(83, 10, 'putri', 'jl.markisa', '08586671925', '2020-03-19', 'BCA', 'JNT', 0, 'selesai'),
(84, 9, 'anggun', 'jl.brigade', '08126712977', '2020-03-27', 'BRI', 'POS', 0, 'selesai'),
(85, 11, 'safa', 'jl.kenari', '08123560988', '2020-04-13', 'BRI', 'JNE', 0, 'selesai'),
(86, 8, 'dela', 'jl.kanal', '08126382216', '2020-04-16', 'BCA', 'POS', 0, 'proses'),
(87, 8, 'dela', 'jl.kuncoro', '08528891253', '2020-04-19', 'BNI', 'JNT', 0, 'proses'),
(88, 12, 'cika', 'jl.beruang', '08125367821', '2020-05-25', 'MANDIRI', 'TIKI', 0, 'selesai'),
(89, 17, 'jiun', 'jl.marakas', '08785672395', '2020-05-24', 'BRI', 'TIKI', 0, 'selesai'),
(90, 6, 'andre', 'jl.waru', '08136278235', '2020-05-29', 'BNI', 'POS', 0, 'selesai'),
(91, 6, 'andre', 'jl.kalong', '08581726348', '2021-01-07', 'MANDIRI', 'JNE', 0, 'selesai'),
(92, 15, 'rafli', 'jl.kupang', '08219982765', '2021-01-15', 'BNI', 'POS', 0, 'selesai'),
(93, 15, 'rafli', 'jl.bulgaria', '08589712382', '2021-01-28', 'BRI', 'JNT', 0, 'selesai'),
(94, 20, 'joni', 'jl.manggarai', '08581723641', '2022-04-13', 'MANDIRI', 'JNT', 0, 'proses'),
(95, 20, 'joni', 'jl.kuningan', '08128261276', '2022-04-21', 'BRI', 'JNT', 0, 'proses'),
(96, 14, 'marjuki', 'jl.serengseng', '08791276385', '2022-04-29', 'SazanPay', 'TIKI', 0, 'selesai'),
(97, 20, 'udin', 'jl. baladewa', '029314112', '2022-07-14', 'MANDIRI', 'TIKI', 0, 'selesai'),
(99, 2, '', '', '', '2022-07-18', 'BCA', 'JNE', 0, 'selesai'),
(100, 1, 'asdad', 'asdasad', 'asdasdasd', '2022-07-19', 'MANDIRI', 'TIKI', 30000000, 'selesai'),
(101, 13, 'dfs', 'sdfgs', 'sdfgsdg', '2022-07-19', 'BNI', 'JNT', 57500000, 'selesai'),
(102, 8, 'zczxcz', 'zczcx', '121313', '2022-07-20', 'BRI', 'POS', 6000000, 'selesai'),
(103, 8, 'sandi', 'jl baru', '012919130', '2022-07-20', 'BNI', 'JNT', 13500000, 'selesai'),
(104, 8, 'udin', 'jl ratu', '1293114211', '2022-07-20', 'BNI', 'JNT', 3000000, 'selesai'),
(105, 8, 'dsfaadf', 'dasasd', '121313', '2022-07-20', 'BNI', 'JNT', 2000000, 'dikirim'),
(106, 3, 'irfan jaya', 'jalan baladewa', '019241443', '2022-07-21', 'MANDIRI', 'JNT', 8000000, 'proses'),
(107, 3, 'ifanjaya', 'jalan baru', '012031923193', '2022-07-21', 'BNI', 'TIKI', 14000000, 'proses');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_orderdetail`
--

CREATE TABLE `tb_orderdetail` (
  `orderID` int(100) NOT NULL,
  `produkID` int(100) NOT NULL,
  `harga` int(100) NOT NULL,
  `kuantitas` int(100) NOT NULL,
  `diskon` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_orderdetail`
--

INSERT INTO `tb_orderdetail` (`orderID`, `produkID`, `harga`, `kuantitas`, `diskon`) VALUES
(19, 3, 12000000, 1, 0),
(19, 6, 3000000, 1, 0),
(20, 5, 2000000, 1, 0),
(21, 9, 17000, 1, 0),
(21, 17, 50000000, 1, 0),
(22, 12, 4000000, 1, 0),
(24, 16, 15000000, 1, 0),
(25, 13, 2500000, 1, 0),
(26, 15, 8000000, 1, 0),
(26, 14, 1500000, 1, 0),
(27, 20, 16000000, 1, 0),
(28, 22, 13500000, 1, 0),
(29, 28, 600000, 1, 0),
(29, 32, 800000, 1, 0),
(30, 37, 350000, 1, 0),
(31, 35, 170000, 1, 0),
(31, 48, 3800000, 1, 0),
(32, 30, 600000, 1, 0),
(33, 51, 16500000, 1, 0),
(34, 41, 160000, 1, 0),
(35, 49, 19400000, 1, 0),
(36, 45, 13000000, 1, 0),
(37, 14, 1500000, 1, 0),
(38, 41, 160000, 1, 0),
(39, 4, 14000000, 1, 0),
(39, 31, 700000, 1, 0),
(40, 29, 600000, 1, 0),
(41, 33, 200000, 1, 0),
(42, 9, 17000, 1, 0),
(43, 10, 19000, 1, 0),
(44, 22, 13500000, 1, 0),
(45, 13, 2500000, 1, 0),
(47, 26, 20000, 1, 0),
(48, 15, 8000000, 1, 0),
(49, 10, 19000, 1, 0),
(50, 37, 350000, 1, 0),
(51, 10, 19000, 1, 0),
(52, 5, 2000000, 1, 0),
(53, 6, 3000000, 1, 0),
(54, 17, 50000000, 1, 0),
(55, 9, 17000, 1, 0),
(56, 9, 17000, 1, 0),
(57, 10, 19000, 1, 0),
(58, 10, 19000, 1, 0),
(59, 9, 17000, 1, 0),
(60, 18, 12000000, 1, 0),
(61, 15, 8000000, 1, 0),
(62, 12, 4000000, 1, 0),
(63, 9, 17000, 1, 0),
(64, 10, 19000, 1, 0),
(65, 20, 16000000, 1, 0),
(66, 4, 14000000, 1, 0),
(67, 9, 17000, 1, 0),
(68, 10, 19000, 1, 0),
(69, 8, 10000000, 1, 0),
(70, 9, 17000, 1, 0),
(71, 10, 19000, 1, 0),
(72, 6, 3000000, 1, 0),
(73, 10, 19000, 1, 0),
(74, 52, 12000000, 1, 0),
(75, 10, 19000, 1, 0),
(76, 15, 8000000, 1, 0),
(77, 35, 170000, 1, 0),
(79, 22, 13500000, 1, 0),
(80, 16, 15000000, 1, 0),
(81, 31, 700000, 1, 0),
(82, 32, 800000, 1, 0),
(83, 45, 13000000, 1, 0),
(84, 6, 3000000, 1, 0),
(85, 36, 600000, 1, 0),
(86, 20, 16000000, 1, 0),
(87, 9, 17000, 1, 0),
(88, 14, 1500000, 1, 0),
(89, 15, 8000000, 1, 0),
(91, 30, 600000, 1, 0),
(92, 17, 50000000, 1, 0),
(93, 13, 2500000, 1, 0),
(95, 21, 15000000, 1, 0),
(97, 49, 19400000, 1, 0),
(97, 3, 12000000, 1, 0),
(99, 51, 16500000, 1, 0),
(100, 3, 12000000, 1, 0),
(100, 4, 14000000, 1, 0),
(100, 5, 2000000, 2, 0),
(101, 11, 6000000, 1, 0),
(101, 14, 1500000, 1, 0),
(101, 17, 50000000, 1, 0),
(102, 6, 3000000, 2, 0),
(103, 7, 3500000, 1, 50),
(103, 8, 10000000, 1, 0),
(104, 6, 3000000, 1, 0),
(105, 5, 2000000, 1, 0),
(106, 12, 4000000, 2, 0),
(107, 19, 14000000, 1, 0);

--
-- Trigger `tb_orderdetail`
--
DELIMITER $$
CREATE TRIGGER `pesanan_penjualan` AFTER INSERT ON `tb_orderdetail` FOR EACH ROW BEGIN
	UPDATE tb_produk SET stok = stok-NEW.kuantitas
    WHERE produkID = NEW.produkID;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_produk`
--

CREATE TABLE `tb_produk` (
  `produkID` int(11) NOT NULL,
  `kategoriID` int(10) NOT NULL,
  `tenantID` int(10) NOT NULL,
  `nama_produk` varchar(333) NOT NULL,
  `deskripsi` varchar(333) NOT NULL,
  `harga_produk` int(100) NOT NULL,
  `stok` int(100) NOT NULL,
  `diskon` int(100) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_produk`
--

INSERT INTO `tb_produk` (`produkID`, `kategoriID`, `tenantID`, `nama_produk`, `deskripsi`, `harga_produk`, `stok`, `diskon`, `gambar`) VALUES
(3, 1, 15, 'HP Laptop 14s-fq1036AU', 'HP Laptop 14s-fq1036AU, AMD Ryzen™ 7 5700U processor Windows 10 Home Single Language 64, 14\" diagonal, FHD (1920 x 1080), IPS, micro-edge, BrightView, 250 nits, 45% NTSC, AMD Radeon™ Graphics, 8 GB DDR4-3200 SDRAM (2 x 4 GB)', 12000000, 8, 0, 'hp1.jpg'),
(4, 1, 15, 'HP Pavilion Laptop 14-dv0516TX', '11th Generation Intel® Core™ i7 processor, Windows 11 Home, 14\" diagonal, FHD (1920 x 1080), IPS, micro-edge, anti-glare, 250 nits, 45% NTSC, NVIDIA® GeForce® MX450 (2 GB GDDR5 dedicated), 16 GB DDR4-3200 MHz RAM (1 x 16 GB), Starting at 1.41 kg', 14000000, 13, 0, 'hp2.jpg'),
(5, 2, 11, 'Adidas Matchbreak', 'Adidas Matchbreak Super Shoes - Black | unisex skateboarding | adidas US', 2000000, 12, 0, 'a1.jpg'),
(6, 2, 11, 'Adidas Forum', 'Adidas Forum Low Shoes - White | kids lifestyle | adidas US', 3000000, 11, 0, 'a2.jpg'),
(7, 2, 12, 'Nike Air Jordan 1', 'Nike Air Jordan 1 Retro High Og University Blue Unc 555088-134 Ds Free Shipping', 3500000, 13, 50, 'n1.jpg'),
(8, 2, 12, 'Nike Air More Uptempo', 'Nike Air More Uptempo 96 Size 12.5 Light Bone White 921948-001. Scottie Pippen', 10000000, 13, 0, 'n2.jpg'),
(9, 3, 16, 'Rexona roll on wmn shower clean', 'Rexona roll on wmn shower clean 45ml , Produk berkualitas & bermutu untuk mengurangi bau badan', 17000, 10, 0, 'r1.jpg'),
(10, 2, 16, 'Rexona Men Ro Ice Cool 50 Ml', 'Rexona Men merupakan deodoran khusus untuk pria dengan keharuman yangmampu menjaga kenyamanan untuk beraktivitas tanpa ada rasa bau badan yang mengganggu sepanjang hari.', 19000, 14, 0, 'r2.jpg'),
(11, 5, 12, 'Nike Air Max', 'Nike Air Max 270 Desert Sand Peach Cream', 6000000, 9, 0, 'n3.jpg'),
(12, 5, 11, 'Adidas Forum', 'Adidas Forum 84 Low Black White - 38 2/3', 4000000, 14, 0, 'a31.jpg'),
(13, 5, 11, 'Adidas Yeezy Boost', 'Adidas Yeezy Boost 350 V2 Sand Taupe FZ5240', 2500000, 13, 0, 'a41.jpg'),
(14, 3, 11, 'Adidas Adilette', 'Adidas Adilette Slides & NMD Sneakers - The House of Sequins', 1500000, 11, 0, 'a51.jpg'),
(15, 2, 12, 'Nike Air Max 1', 'Nike Air Max 1 Ultra Essential Light Bone/Bluecap // Available Now', 8000000, 14, 0, 'n41.jpg'),
(16, 5, 12, 'Nike ACG', 'Nike ACG Air Terra Antarktik Winter Boots | Cool Material', 15000000, 13, 0, 'n51.jpg'),
(17, 1, 14, 'ASUS ROG Zephyrus', 'ASUS ROG Zephyrus Duo Dual Screen Gaming Laptop', 50000000, 9, 0, 'as11.jpg'),
(18, 1, 14, 'ASUS VivoBook 15', 'ASUS VivoBook 15 K513 15.6in i3 8GB 256GB Laptop - Silver', 12000000, 12, 0, 'as21.jpg'),
(19, 1, 14, 'Notebook Asus', 'Notebook Asus N7600PC-L2010W 16\" I7-11370H 16 GB RAM 1 TB SSD RTX 3050', 14000000, 12, 0, 'as31.jpg'),
(20, 1, 14, 'ASUS VivoBook Flip 14', 'ASUS VivoBook Flip 14 Thin and Light 2-in-1 Laptop, 14” FHD Touch Display, AMD Ryzen 7 4700U, 8GB DDR4 RAM, 512GB SSD, Glossy, Stylus, Windows 10 Home, Fingerprint Reader, Bespoke Black, TM420IA-DB71T', 16000000, 14, 0, 'as41.jpg'),
(21, 1, 14, 'Asus ZenBook Flip 13.3', 'Asus ZenBook Flip 13.3\" Intel i7-1065G7 16GB/512GB 2-in-1 Touch Laptop', 15000000, 13, 0, 'as51.jpg'),
(22, 1, 15, 'HP Pavilion Aero Laptop 13', 'HP Pavilion Aero Laptop 13 Inch Silver 13-be0002AU AMD R7-5800U/512GB/2x8GB/Backlit/W10/OHS', 13500000, 12, 0, 'hp31.png'),
(23, 1, 15, 'HP 245 G8 Notebook PC+HP DeskJet 1216 Printer', 'AMD Ryzen™ 3 processor Windows 10 Home Single Language – HP recommends Windows 11 Pro for business 14\" diagonal, HD (1366 x 768), narrow bezel, anti-glare, 250 nits, 45% NTSC AMD Radeon™ Graphics 4 GB DDR4-3200 MHz RAM (1 x 4 GB) Starting at 1.47 kg', 7000000, 13, 0, 'hp41.jpg'),
(24, 1, 15, 'HP ProBook x360 435 G8 Notebook PC', 'AMD Ryzen™ 5 processor Windows 10 Home Single Language – HP recommends Windows 11 Pro for business 13.3\" diagonal, FHD (1920 x 1080), touch, IPS, BrightView, 250 nits, 45% NTSC AMD Radeon™ Graphics 8 GB DDR4-3200 MHz RAM (1 x 8 GB) Starting at 1.45 kg', 15000000, 14, 0, 'hp51.png'),
(25, 3, 16, 'Rexona Deodorant Dry Serum Fresh Lily [50 Ml]', 'Mengandung 10x bahan pencerah alami yang teruji secara klinis Mencerahkan kulit ketiak dalam 3 hari  Mengandung Vitamin E, ekstrak licorice, dan Vitamin B3 Cepat menyerap & bekerja hingga 20 lapisan untuk mencerahkan kulit.', 19000, 11, 0, 'r31.jpg'),
(26, 2, 16, 'Rexona Deodorant Roll On Men Ice Cool 45Ml', 'Rexona men dryness protectiom system sensasi keharuman dingin yang menyegarkan. Perlindungan untuk tetap kering sepanjang hari.', 20000, 12, 0, 'r41.jpg'),
(27, 2, 16, 'Rexona Men Invisible Dry 50 Ml', 'Rexona invisible dry black+white memberikan 3 aksi perlindungan terbaik dari rexona terhadap noda kuning, noda putih dan keringat.', 24000, 10, 0, 'r51.jpg'),
(28, 3, 17, 'KEMEJA OVERSIZE BERGARIS', 'Kemeja lebar berkerah lapel dan lengan panjang. Kantong depan model tempel. Bagian bawah asimetris dengan belahan samping. Penutup depan dengan kancing.', 600000, 12, 0, 'z11.jpg'),
(29, 2, 17, 'KEMEJA LAPISAN SATIN BERGARIS', 'Kemeja panjang berkerah lapel dan lengan panjang. Bagian bawah dengan berbagai belahan samping. Penutup depan berkancing.', 600000, 13, 0, 'z21.jpg'),
(30, 2, 17, 'KEMEJA BAHAN JATUH DENGAN KANTONG', 'Kemeja bahan jatuh berkerah lapel dan lengan panjang keliman manset. Aneka saku tempel dengan lapel dan kancing di depan. Detail berupa setik balik tebal kombinasi senada. Bagian bawah asimetris dengan berbagai belahan samping.', 600000, 12, 0, 'z31.jpg'),
(31, 2, 17, 'KEMEJA LUARAN BERKANTONG', 'Kemeja luaran regular fit berkerah lapel dan lengan panjang keliman manset dengan kancing. Aneka saku tempel dengan lapel di dada. Penutup bagian depan kancing deret.', 700000, 10, 0, 'z41.jpg'),
(32, 3, 17, 'GAUN KEMEJA SATIN', 'Gaun midi berkerah lapel dan lengan panjang keliman manset. Sabuk simpul kain berbahan sama. Detail setik balik tebal. Penutup depan berkancing.', 800000, 12, 0, 'z51.jpg'),
(33, 4, 18, '2-pack Jersey T-shirts', 'T-shirt dengan kaos kapas lembut dengan trim berusuk di sekitar leher.', 200000, 12, 0, 'an11.jpg'),
(34, 4, 18, '2 Pakaian Set Bermotif', 'Set yang terdiri dari kaus berbahan jersey katun lembut dan celana pendek berbahan terry lembut. Kaus dengan kancing tekan tersembunyi di belakang satu bahu (kecuali ukuran 2-4Th), lengan raglan dan motif gambar di bagian depan dan belakang. Celana pendek dengan pinggang karet bertali serut.', 400000, 14, 0, 'an21.jpg'),
(35, 2, 18, 'Cotton T-shirt', 'T-shirt lurus dengan kaos kapas lembut dengan garis leher bundar yang dipangkas dan bahu yang dijatuhkan dengan lembut.', 170000, 10, 0, 'an31.jpg'),
(36, 2, 18, 'Regular Fit 2 Pak Hoodie Ritsleting', 'Hoodie dengan ritsleting dari kain sweatshirt yang terbuat dari campuran katun. Tudung lapis jersey bertali serut, ritsleting di sepanjang bagian depan, kantong model kanguru, dan rib pada manset dan kelim. Permukaan berbulu lembut di bagian dalam.', 600000, 14, 0, 'an41.jpg'),
(37, 3, 18, 'Sleeveless Shirt Dress', 'Gaun tanpa lengan, selutut dalam kain tenun dengan kerah, kancing di bagian depan dan kuk dengan lipatan di belakang. Kantong dada terbuka dan ujung bundar dengan celah di samping.', 350000, 10, 0, 'an51.jpg'),
(38, 2, 19, 'REEBOK WOR MELANGE SS TEE MEN\'S T-SHIRT - NAVY', ' Kain jersey mélange ringan memberikan tampilan bertekstur. Weatwick Technology Wicks berkeringat dari kulit Anda sehingga Anda dapat fokus pada ikal Biceps.', 205000, 13, 0, 're11.jpg'),
(39, 5, 19, 'REEBOK ZIG KINETICA II MEN\'S RUNNING SHOES - BLACK/NEON CHERRY', 'Sepatu Reebok yang terinspirasi dari lari ini memiliki bagian atas mesh yang dapat bernapas dengan zona penyangga built-in untuk kenyamanan yang langgeng. Bantalan Bahan Bakar Floatride Ringan yang dibungkus dengan Zig Energy Shell melepaskan gelombang energi.', 1600000, 12, 0, 're21.jpg'),
(40, 2, 19, 'REEBOK RBK LOONEY TUNES HOODIE MEN\'S HOODIE - DYNAMIC RED', 'Nostalgia dengan koleksi spesial dari Reebok X Looney Tunes yang menampilkan desain klasik dan bahan yang adem', 1300000, 10, 0, 're31.jpg'),
(41, 2, 19, 'REEBOK UNISEX RUN CAP - NAVY', 'Reebok Unisex Run Cap - Navy  Dirancang untuk: Lari luar ruangan, olahraga yang cerah, hari yang panas', 160000, 10, 0, 're41.jpg'),
(42, 3, 19, 'REEBOK LM EPIC 2IN1 SHORTS WOMEN\'S SHORTS - BATIK BLUE', 'Celana pendek Reebok wanita ini dibuat untuk performa saat cuaca panas. Celana ketat bagian dalam memiliki kain Speedwick yang menyerap keringat dari tubuh untuk membuat Anda tetap sejuk dan kering. ', 395000, 10, 0, 're51.jpg'),
(43, 1, 20, 'Galaxy A53 5G', 'Dengan penyimpanan internal 128GB / 256GB ditambah dukungan untuk kartu microSD hingga 1TB,  memiliki sertifikat IP67. Berdasarkan kondisi pengujian untuk perendaman hingga 1 meter di air tawar hingga 30 menit.', 5800000, 12, 0, 's11.jpg'),
(44, 1, 20, 'Galaxy A73 5G', ' layar FHD+ Super AMOLED Plus. Dengan Layar Infinity-O 6,7, Koneksi 5G Hyperfast, Dengan penyimpanan internal 128GB / 256GB ditambah dukungan untuk kartu microSD hingga 1TB', 7800000, 13, 0, 's21.jpg'),
(45, 1, 20, 'Galaxy S22', 'Exynos 2200 Qualcomm SM8450 Snapdragon 8 Jaringan 5G Resolusi Kamera Utama 108MP Tipe Pengaman Layar Corning gorilla glass Victus+ Ukuran Layar 6.8inches ROM 512GB', 13000000, 10, 0, 's31.jpg'),
(46, 1, 20, 'Galaxy Tab A8 LTE', 'Chipset Unisoc Tiger T618 (12 nm) Os Android 11, One UI 3 Display 10.5 Ram / Internal 4 GB / 128 GB Simcard Dual nano Rear Camera 8 MP Front Camera 5 MP Usb Type Type-C 2.0 Battery Li-Po 7040 mAh, non-removable', 4500000, 10, 0, 's41.jpg'),
(47, 1, 20, 'Galaxy Tab S6 Lite (SM-P619)', 'CPU Speed  2.3GHz, 1.7GHz  Display Size (Main Display)  10.4\" (263.1mm)  Rear Camera - Resolution  8.0 MP Ukuran (Main Display)  10.4\" (263.1mm)  Resolusi (Main Display)  2000 x 1200 (WUXGA+) 128GB', 6300000, 11, 0, 's51.jpeg'),
(48, 1, 21, 'Apple Watch', 'Apple Watch Series 3 GPS 38MM Space Gray Aluminum Sport Band', 3800000, 10, 0, 'ap11.jpg'),
(49, 1, 21, 'MacBook Pro', 'MacBook Pro (13 inch, M1, 2020) 8GB RAM, 256GB SSD, Space Grey', 19400000, 9, 0, 'ap21.jpg'),
(50, 1, 21, 'iPad mini 6th Generation Wi-Fi + Cellular 64GB Space Gray', 'iPad mini baru. Menghadirkan desain layar sepenuhnya dengan layar Liquid Retina 8,3 inci. Chip A15 Bionic andal dengan Neural Engine. Kamera depan Ultra Wide 12 MP dengan Center Stage. Konektivitas USB-C. ', 12700000, 12, 0, 'ap31.jpg'),
(51, 1, 21, 'iPhone 13', 'Bagian depan Ceramic Shield Bagian belakang kaca dan desain aluminium, 128 GB /256 GB /512 GB,  Berat 173 g, Layar Super Retina XDR Layar OLED sepenuhnya 6,1 inci (diagonal) Resolusi 2532 x 1170 piksel pada 460 ppi', 16500000, 9, 0, 'ap41.jpg'),
(52, 1, 21, 'iPhone 12', 'Bagian depan Ceramic Shield Bagian belakang kaca dan desain aluminium, 64 GB /128 GB /256 GB,  Berat 162 g, Layar Super Retina XDR Layar OLED sepenuhnya 6,1 inci (diagonal) Resolusi 2532 x 1170 piksel pada 460 ppi', 12000000, 12, 0, 'ap51.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_role`
--

CREATE TABLE `tb_role` (
  `roleID` int(11) NOT NULL,
  `role` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_role`
--

INSERT INTO `tb_role` (`roleID`, `role`) VALUES
(1, 'admin'),
(2, 'tenant'),
(3, 'customer');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_tenant`
--

CREATE TABLE `tb_tenant` (
  `tenantID` int(2) NOT NULL,
  `roleID` int(10) NOT NULL,
  `nama_tenant` varchar(300) NOT NULL,
  `deskripsi_tenant` varchar(333) NOT NULL,
  `kontak_tenant` varchar(100) NOT NULL,
  `logo` text NOT NULL,
  `email` varchar(300) NOT NULL,
  `password` varchar(333) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_tenant`
--

INSERT INTO `tb_tenant` (`tenantID`, `roleID`, `nama_tenant`, `deskripsi_tenant`, `kontak_tenant`, `logo`, `email`, `password`) VALUES
(11, 2, 'Adidas', 'Adidas menyediakan semua kebutuhan olahraga Anda', '08912876539', '0', 'adidas@gmail.com', '123'),
(12, 2, 'Nike', 'Nike menyediakan semua kebutuhan olahraga Anda', '087829736458', '0', 'nike@gmail.com', '123'),
(14, 2, 'Asus', 'Asus menyediakan inovasi dan komitmen dalam menghadirkan produk berkualitas', '08995267835', '0', 'asus@gmail.com', '123'),
(15, 2, 'HP', 'HP menyediakan komputer pribadi, pencetak dan pasokan terkait, serta solusi percetakan 3D', '08782654421', '0', 'hp@gmail.com', '123'),
(16, 2, 'Rexona', 'Rexona deodoran antiperspiran', '08578954376', '0', 'rexona@gmail.com', '123'),
(17, 2, 'Zara', 'Zara menyediakan produk pakaian, aksesori, sepatu, pakaian renang, kecantikan, dan parfum', '08985674362', '0', 'zara@gmail.com', '123'),
(18, 2, 'H&M', 'H&M  memproduksi berbagai macam busana pakaian', '08587125573', '0', 'hm@gmail.com', '123'),
(19, 2, 'Rebook', 'Reebok menghasilkan dan mendistribusikan barang-barang fitness dan olahraga', '08593251189', '0', 'reebok@gmail.com', '123'),
(20, 2, 'Samsung', 'Samsung menyediakan produk elektronik terkini termasuk smartphone, tablet, TV, peralatan rumah tangga', '08798871567', '0', 'samsung@gmail.com', '123'),
(21, 2, 'Apple', 'Apple merancang, mengembangkan dan menjual barang elektronik konsumen, perangkat lunak komputer serta layanan daring', '08126467542', '0', 'apple@gmail.com', '123');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`adminID`);

--
-- Indeks untuk tabel `tb_customer`
--
ALTER TABLE `tb_customer`
  ADD PRIMARY KEY (`custID`);

--
-- Indeks untuk tabel `tb_kategori`
--
ALTER TABLE `tb_kategori`
  ADD PRIMARY KEY (`kategoriID`);

--
-- Indeks untuk tabel `tb_order`
--
ALTER TABLE `tb_order`
  ADD PRIMARY KEY (`orderID`);

--
-- Indeks untuk tabel `tb_produk`
--
ALTER TABLE `tb_produk`
  ADD PRIMARY KEY (`produkID`);

--
-- Indeks untuk tabel `tb_role`
--
ALTER TABLE `tb_role`
  ADD PRIMARY KEY (`roleID`);

--
-- Indeks untuk tabel `tb_tenant`
--
ALTER TABLE `tb_tenant`
  ADD PRIMARY KEY (`tenantID`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `adminID` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_customer`
--
ALTER TABLE `tb_customer`
  MODIFY `custID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `tb_kategori`
--
ALTER TABLE `tb_kategori`
  MODIFY `kategoriID` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_order`
--
ALTER TABLE `tb_order`
  MODIFY `orderID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT untuk tabel `tb_produk`
--
ALTER TABLE `tb_produk`
  MODIFY `produkID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT untuk tabel `tb_role`
--
ALTER TABLE `tb_role`
  MODIFY `roleID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_tenant`
--
ALTER TABLE `tb_tenant`
  MODIFY `tenantID` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
