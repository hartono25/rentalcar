-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Nov 2020 pada 00.50
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbrentcar`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `rc_customer`
--

CREATE TABLE `rc_customer` (
  `customer_id` int(11) NOT NULL,
  `kode_customer` varchar(5) NOT NULL,
  `nama_customer` varchar(50) NOT NULL,
  `email_customer` varchar(128) NOT NULL,
  `ktp_or_sim` varchar(25) NOT NULL,
  `npwp` varchar(25) NOT NULL,
  `no_telp_customer1` varchar(20) NOT NULL,
  `no_telp_customer2` varchar(20) NOT NULL,
  `alamat_customer` varchar(200) NOT NULL,
  `nama_perusahaan` varchar(50) NOT NULL,
  `posisi_jabatan` varchar(50) NOT NULL,
  `keterangan` text NOT NULL,
  `is_active` enum('0','1') NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `rc_customer`
--

INSERT INTO `rc_customer` (`customer_id`, `kode_customer`, `nama_customer`, `email_customer`, `ktp_or_sim`, `npwp`, `no_telp_customer1`, `no_telp_customer2`, `alamat_customer`, `nama_perusahaan`, `posisi_jabatan`, `keterangan`, `is_active`, `date_created`) VALUES
(1, 'A1', 'AGUS WICAKSONO, ST., MT', '3175-0726-0672-0016', '3175-0726-0672-0016', '-', '0877-8815-8900', '-', 'JL. PALAKA KM 3,5 SINDANG SARI, SERANG BANTEN. PROYEK UNTIRTA ADHI-HK-JV', 'PT ADHI KARYA TBK', 'MANAJER OPERASIONAL', '', '1', 1604510799),
(6, 'M1', 'MUCHAMAT HARTONO', 'HARTONO2511@GMAIL.COM', '3733', '3733', '0857', '0857', 'JL. KETAPANG', 'PT. UNISAT', 'MANAGER OPERATIONAL', '', '1', 1604964765);

-- --------------------------------------------------------

--
-- Struktur dari tabel `rc_denda`
--

CREATE TABLE `rc_denda` (
  `denda_id` int(11) NOT NULL,
  `kode_so` varchar(15) NOT NULL,
  `denda_jam` int(11) NOT NULL,
  `denda_hari` int(11) NOT NULL,
  `denda_bulan` int(11) NOT NULL,
  `keterangan_denda` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `rc_denda`
--

INSERT INTO `rc_denda` (`denda_id`, `kode_so`, `denda_jam`, `denda_hari`, `denda_bulan`, `keterangan_denda`) VALUES
(3, 'SO/00001/112020', 1150000, 0, 0, ''),
(4, 'SO/00002/112020', 300000, 0, 0, ''),
(5, 'SO/00003/112020', 0, 0, 0, ''),
(6, 'SO/00004/112020', 7920000, 0, 0, ''),
(7, 'SO/00005/112020', 7865000, 0, 0, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rc_dokumen`
--

CREATE TABLE `rc_dokumen` (
  `dokumen_id` int(11) NOT NULL,
  `dokumen` varchar(150) NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `kode_foreign` varchar(5) NOT NULL,
  `keterangan` varchar(150) NOT NULL,
  `user_by` varchar(50) NOT NULL,
  `date_create` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `rc_dokumen`
--

INSERT INTO `rc_dokumen` (`dokumen_id`, `dokumen`, `jenis`, `kode_foreign`, `keterangan`, `user_by`, `date_create`) VALUES
(1, 'ktp_1606002310.jpg', 'ktp', 'A1', 'driver', 'Muchamat Hartono', 1606002310),
(2, 'sim_1606002336.jpg', 'sim', 'A1', 'driver', 'Muchamat Hartono', 1606002336);

-- --------------------------------------------------------

--
-- Struktur dari tabel `rc_driver`
--

CREATE TABLE `rc_driver` (
  `driver_id` int(11) NOT NULL,
  `kode_driver` varchar(5) NOT NULL,
  `nama_driver` varchar(50) NOT NULL,
  `no_ktp` varchar(25) NOT NULL,
  `no_sim` varchar(25) NOT NULL,
  `no_telp_driver` varchar(20) NOT NULL,
  `alamat_ktp` varchar(200) NOT NULL,
  `alamat_domisili` varchar(200) NOT NULL,
  `nama_saudara` varchar(50) NOT NULL,
  `no_telp_saudara` varchar(20) NOT NULL,
  `is_active` enum('0','1') NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `rc_driver`
--

INSERT INTO `rc_driver` (`driver_id`, `kode_driver`, `nama_driver`, `no_ktp`, `no_sim`, `no_telp_driver`, `alamat_ktp`, `alamat_domisili`, `nama_saudara`, `no_telp_saudara`, `is_active`, `date_created`) VALUES
(3, 'A1', 'ALDI', '-', '-', '0895-3736-86988', '-', '-', '-', '-', '1', 1604623808),
(4, 'B1', 'BUDI DOREMI', '3733', '3733', '0857', '-', '-', '-', '-', '1', 1604964719);

-- --------------------------------------------------------

--
-- Struktur dari tabel `rc_merk_mobil`
--

CREATE TABLE `rc_merk_mobil` (
  `merk_id` int(11) NOT NULL,
  `kode_merk` varchar(5) NOT NULL,
  `merk_mobil` varchar(50) NOT NULL,
  `tipe_mobil` varchar(50) NOT NULL,
  `produksi_by` varchar(50) NOT NULL,
  `is_active` enum('0','1') NOT NULL,
  `date_created` int(11) NOT NULL,
  `user_by` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `rc_merk_mobil`
--

INSERT INTO `rc_merk_mobil` (`merk_id`, `kode_merk`, `merk_mobil`, `tipe_mobil`, `produksi_by`, `is_active`, `date_created`, `user_by`) VALUES
(6, 'A1', 'TOYOTA', 'ALPHARD', 'JAPAN', '1', 1604623311, 'Muchamat Hartono'),
(7, 'C1', 'TOYOTA', 'CAMRY', 'JAPAN', '1', 1604623339, 'Muchamat Hartono'),
(8, 'H1', 'TOYOTA', 'HIACE', 'JAPAN', '1', 1604623362, 'Muchamat Hartono'),
(10, 'F1', 'TOYOTA', 'FORTUNER', 'JAPAN', '1', 1604686806, 'Muchamat Hartono');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rc_mobil`
--

CREATE TABLE `rc_mobil` (
  `mobil_id` int(11) NOT NULL,
  `kode_mobil` varchar(5) NOT NULL,
  `nama_mobil` varchar(50) NOT NULL,
  `merk_id` varchar(5) NOT NULL,
  `no_polisi` varchar(20) NOT NULL,
  `warna` varchar(20) NOT NULL,
  `tahun` int(11) NOT NULL,
  `no_rangka` varchar(30) NOT NULL,
  `no_mesin` varchar(30) NOT NULL,
  `nama_stnk` varchar(50) NOT NULL,
  `nama_pemilik` varchar(50) NOT NULL,
  `alamat_stnk` varchar(200) NOT NULL,
  `alamat_domisili` varchar(200) NOT NULL,
  `exp_date` date NOT NULL,
  `keterangan` text NOT NULL,
  `is_active` enum('0','1') NOT NULL,
  `date_created` int(11) NOT NULL,
  `user_by` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `rc_mobil`
--

INSERT INTO `rc_mobil` (`mobil_id`, `kode_mobil`, `nama_mobil`, `merk_id`, `no_polisi`, `warna`, `tahun`, `no_rangka`, `no_mesin`, `nama_stnk`, `nama_pemilik`, `alamat_stnk`, `alamat_domisili`, `exp_date`, `keterangan`, `is_active`, `date_created`, `user_by`) VALUES
(3, 'B1', 'TOYOTA ALPHARD', '6', 'B 38 EBB', 'HITAM', 2016, 'JTNGF3DH6F8000542', '2ARH542943', 'RONALDO TUANI FRANSISCUS', 'CV INDORENZ UTAMA TRANSPORTASI', 'JL. P BERHALA C5/8 RT.01/10 JATIMAKMUR PD GEDE BEKASI', 'JL. KALIMALANG RAYA BLOK N NO. 12G', '2020-12-06', '', '1', 1604623647, 'Muchamat Hartono'),
(6, 'B2', 'TOYOTA FORTUNER', '10', 'B 1539 SGL', 'HITAM', 2017, 'MHFGB8GS2H0836780', '2GDC164620', 'PT.SETIAJAYA', 'CV INDORENZ UTAMA TRANSPORTASI', 'JL. ALTERNATIF CIBUBUR NO.42\r\nJATISAMPURNA BEKASI\r\nJAWA BARAT', 'JL. KALIMALANG RAYA BLOK N NO.12G KALIMALANG\r\nJAKARTA TIMUR', '2020-12-01', '', '1', 1604691284, 'Muchamat Hartono');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rc_pembayaran`
--

CREATE TABLE `rc_pembayaran` (
  `payment_id` int(11) NOT NULL,
  `kode_so` varchar(15) NOT NULL,
  `kode_customer` varchar(5) NOT NULL,
  `no_polisi` varchar(20) NOT NULL,
  `nilai_sewa` int(11) NOT NULL,
  `nilai_dp` int(11) NOT NULL,
  `overtime` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `nilai_bayar` int(11) NOT NULL,
  `tgl_bayar` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `rc_pembayaran`
--

INSERT INTO `rc_pembayaran` (`payment_id`, `kode_so`, `kode_customer`, `no_polisi`, `nilai_sewa`, `nilai_dp`, `overtime`, `total`, `nilai_bayar`, `tgl_bayar`) VALUES
(2, 'SO/00001/112020', 'M1', 'B 38 EBB', 250000, 100000, 1150000, 1300000, 1300000, '2020-11-15 00:00:00'),
(4, 'SO/00003/112020', 'M1', 'B 38 EBB', 350000, 0, 0, 350000, 350000, '2020-11-19 00:00:00'),
(5, 'SO/00004/112020', 'M1', 'B 1539 SGL', 550000, 0, 7920000, 8470000, 8470000, '2020-11-19 00:00:00'),
(6, 'SO/00005/112020', 'A1', 'B 1539 SGL', 550000, 0, 7865000, 8415000, 8415000, '2020-11-19 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rc_pengeluaran`
--

CREATE TABLE `rc_pengeluaran` (
  `pengeluaran_id` int(11) NOT NULL,
  `kode_kas` varchar(16) NOT NULL,
  `jenis` varchar(150) NOT NULL,
  `debet` int(11) NOT NULL,
  `kredit` int(11) NOT NULL,
  `memo` varchar(250) NOT NULL,
  `keterangan` varchar(250) NOT NULL,
  `p_tanggal` date NOT NULL,
  `closing` enum('close','unclose') NOT NULL,
  `user_by` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `rc_pengeluaran`
--

INSERT INTO `rc_pengeluaran` (`pengeluaran_id`, `kode_kas`, `jenis`, `debet`, `kredit`, `memo`, `keterangan`, `p_tanggal`, `closing`, `user_by`) VALUES
(3, 'KAS/00002/112020', 'Pendapatan', 350000, 0, '', 'Sales Order B 10 NED', '2020-11-21', 'unclose', 'Muchamat Hartono'),
(4, 'KAS/00003/112020', 'Pendapatan', 250000, 0, '', 'Sales Order B 10 NED', '2020-11-20', 'unclose', 'Muchamat Hartono'),
(5, 'KAS/00004/112020', 'Pendapatan', 250000, 0, '', 'Sales Order B 10 NED', '2020-11-20', 'unclose', 'Muchamat Hartono'),
(6, 'KAS/00005/112020', 'Pendapatan', 500000, 0, '', 'Sales Order B 10 NED', '2020-11-21', 'unclose', 'Muchamat Hartono');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rc_so`
--

CREATE TABLE `rc_so` (
  `so_id` int(11) NOT NULL,
  `kode_so` varchar(15) NOT NULL,
  `tgl_start` datetime NOT NULL,
  `tgl_end` datetime NOT NULL,
  `kode_customer` varchar(5) NOT NULL,
  `alamat_jemput` varchar(250) NOT NULL,
  `alamat_finish` varchar(250) NOT NULL,
  `tipe_order` varchar(50) NOT NULL,
  `tipe_sewa` varchar(50) NOT NULL,
  `payment` varchar(50) NOT NULL,
  `harga_sewa` int(11) NOT NULL,
  `kode_driver` varchar(5) NOT NULL,
  `kode_mobil` varchar(5) NOT NULL,
  `pembayaran_dp` int(11) NOT NULL,
  `pembayaran_kasbon` int(11) NOT NULL,
  `keterangan` varchar(250) NOT NULL,
  `denda_jam` int(11) NOT NULL,
  `denda_hari` int(11) NOT NULL,
  `denda_bulan` int(11) NOT NULL,
  `tagihan_for` varchar(50) NOT NULL,
  `status_order` enum('order','finish','void') NOT NULL,
  `user_by` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `rc_so`
--

INSERT INTO `rc_so` (`so_id`, `kode_so`, `tgl_start`, `tgl_end`, `kode_customer`, `alamat_jemput`, `alamat_finish`, `tipe_order`, `tipe_sewa`, `payment`, `harga_sewa`, `kode_driver`, `kode_mobil`, `pembayaran_dp`, `pembayaran_kasbon`, `keterangan`, `denda_jam`, `denda_hari`, `denda_bulan`, `tagihan_for`, `status_order`, `user_by`) VALUES
(8, 'SO/00001/112020', '2020-11-13 07:00:00', '2020-11-13 13:10:00', 'M1', '', '', 'Dengan Driver', '12 Jam Mobil + Supir', 'transfer', 250000, 'A1', 'B1', 100000, 0, '', 25000, 0, 0, 'Perorangan', 'finish', 'MUCHAMAT HARTONO'),
(9, 'SO/00002/112020', '2020-11-13 06:45:00', '2020-11-13 18:45:00', 'A1', 'JL. KERAMAT', '', 'Lepas Kunci', '12 Jam All In Dalam Kota', 'transfer', 250000, '', 'B2', 100000, 0, 'Tidak ada perjanjian DP', 25000, 0, 0, 'Perorangan', 'void', 'MUCHAMAT HARTONO'),
(10, 'SO/00003/112020', '2020-11-20 07:00:00', '2020-11-20 19:00:00', 'M1', 'JL. KETAPANG UTARA I', '', 'Lepas Kunci', '12 Jam All In Dalam Kota', 'transfer', 350000, '', 'B1', 0, 0, '', 35000, 175000, 0, 'Perorangan', 'finish', 'MUCHAMAT HARTONO'),
(11, 'SO/00004/112020', '2020-11-13 07:00:00', '2020-11-13 19:00:00', 'M1', 'JL. KETAPANG UTARA I', 'JL. KETAPANG UTARA I', 'Dengan Driver', '12 Jam Mobil + Supir', 'transfer', 550000, 'B1', 'B2', 0, 0, '', 55000, 0, 0, 'Perorangan', 'finish', 'MUCHAMAT HARTONO'),
(12, 'SO/00005/112020', '2020-11-13 07:30:00', '2020-11-13 19:30:00', 'A1', '', '', 'Rent To Rent', '12 Jam All In Luar Kota', 'transfer', 550000, 'A1', 'B2', 0, 0, '', 55000, 0, 0, 'Perorangan', 'finish', 'MUCHAMAT HARTONO');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rc_tipe_order`
--

CREATE TABLE `rc_tipe_order` (
  `order_tipe_id` int(11) NOT NULL,
  `nama_tipe` varchar(50) NOT NULL,
  `is_active` enum('0','1') NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `rc_tipe_order`
--

INSERT INTO `rc_tipe_order` (`order_tipe_id`, `nama_tipe`, `is_active`, `date_created`) VALUES
(1, 'Lepas Kunci', '1', 1604954098),
(2, 'Dengan Driver', '1', 1604947753),
(3, 'Rent To Rent', '1', 1604947787);

-- --------------------------------------------------------

--
-- Struktur dari tabel `rc_tipe_sewa`
--

CREATE TABLE `rc_tipe_sewa` (
  `sewa_tipe_id` int(11) NOT NULL,
  `nama_tipe` varchar(50) NOT NULL,
  `is_active` enum('0','1') NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `rc_tipe_sewa`
--

INSERT INTO `rc_tipe_sewa` (`sewa_tipe_id`, `nama_tipe`, `is_active`, `date_created`) VALUES
(1, '12 Jam Mobil + Supir', '1', 1604949252),
(2, '12 Jam All In Dalam Kota', '1', 1604949423),
(3, '12 Jam All In Luar Kota', '1', 1604949441),
(4, 'Full Day Mobil + Supir', '1', 1604949461),
(5, 'Full Day All In Dalam Kota', '1', 1604949678),
(6, 'Full Day All In Luar Kota', '1', 1604949694),
(7, 'Menginap Luar Kota', '1', 1604949713),
(8, 'Wedding', '1', 1604949723);

-- --------------------------------------------------------

--
-- Struktur dari tabel `rc_user`
--

CREATE TABLE `rc_user` (
  `id` int(11) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `username` varchar(15) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `rc_user`
--

INSERT INTO `rc_user` (`id`, `nama`, `username`, `email`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(22, 'Muchamat Hartono', 'hartha070610', 'hartono2511@gmail.com', '$2y$10$6zPEfPA6pjHinh2su4ExhuIacH/CNGxOj6UdnrRKV7t0lcl5cxG.y', 1, 1, 1604755719),
(23, 'Administrator', 'admin', 'admin@gmail.com', '$2y$10$pQbbzUBeHLEdYs4rQlN2zeWGcvwSRJYMA47J9CBaZzDBj2KN2OLBu', 2, 1, 1604377955),
(24, 'Muchamat Hartono', 'hartono', 'juwita@gmail.com', '$2y$10$7zvzPS9H2S6qBkmmkBYbXOatI0QGJe7W8gKfKQYOUZBBsfBjf33eu', 5, 1, 1604384263);

-- --------------------------------------------------------

--
-- Struktur dari tabel `rc_user_akses`
--

CREATE TABLE `rc_user_akses` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `akses` enum('0','1') NOT NULL,
  `tambah` enum('0','1') NOT NULL,
  `edit` enum('0','1') NOT NULL,
  `hapus` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `rc_user_akses`
--

INSERT INTO `rc_user_akses` (`id`, `menu_id`, `role_id`, `akses`, `tambah`, `edit`, `hapus`) VALUES
(1, 2, 1, '1', '0', '0', '0'),
(2, 3, 1, '1', '1', '1', '1'),
(5, 16, 1, '1', '0', '0', '0'),
(6, 17, 1, '1', '1', '1', '1'),
(7, 2, 2, '1', '0', '0', '0'),
(8, 3, 2, '0', '0', '0', '0'),
(9, 16, 2, '1', '0', '0', '0'),
(10, 17, 2, '1', '1', '1', '1'),
(29, 19, 1, '1', '0', '0', '0'),
(30, 20, 1, '1', '1', '1', '1'),
(31, 19, 2, '1', '0', '0', '0'),
(32, 20, 2, '1', '1', '1', '1'),
(33, 2, 5, '0', '0', '0', '0'),
(34, 3, 5, '0', '0', '0', '0'),
(35, 16, 5, '0', '0', '0', '0'),
(36, 17, 5, '0', '0', '0', '0'),
(38, 19, 5, '0', '0', '0', '0'),
(39, 20, 5, '0', '0', '0', '0'),
(40, 21, 1, '1', '1', '1', '1'),
(41, 22, 1, '1', '1', '1', '1'),
(42, 23, 1, '1', '1', '1', '1'),
(43, 24, 1, '1', '0', '0', '0'),
(44, 25, 1, '1', '1', '1', '1'),
(45, 26, 1, '1', '1', '1', '1'),
(46, 21, 2, '1', '1', '1', '1'),
(47, 22, 2, '1', '1', '1', '1'),
(48, 23, 2, '1', '1', '1', '1'),
(49, 24, 2, '0', '0', '0', '0'),
(50, 25, 2, '0', '0', '0', '0'),
(51, 26, 2, '0', '0', '0', '0'),
(52, 2, 0, '0', '0', '0', '0'),
(53, 3, 0, '0', '0', '0', '0'),
(54, 16, 0, '0', '0', '0', '0'),
(55, 17, 0, '0', '0', '0', '0'),
(57, 19, 0, '0', '0', '0', '0'),
(58, 20, 0, '0', '0', '0', '0'),
(59, 21, 0, '0', '0', '0', '0'),
(60, 22, 0, '0', '0', '0', '0'),
(61, 23, 0, '0', '0', '0', '0'),
(62, 24, 0, '0', '0', '0', '0'),
(63, 25, 0, '0', '0', '0', '0'),
(64, 26, 0, '0', '0', '0', '0'),
(65, 2, 0, '0', '0', '0', '0'),
(66, 3, 0, '0', '0', '0', '0'),
(67, 16, 0, '0', '0', '0', '0'),
(68, 17, 0, '0', '0', '0', '0'),
(70, 19, 0, '0', '0', '0', '0'),
(71, 20, 0, '0', '0', '0', '0'),
(72, 21, 0, '0', '0', '0', '0'),
(73, 22, 0, '0', '0', '0', '0'),
(74, 23, 0, '0', '0', '0', '0'),
(75, 24, 0, '0', '0', '0', '0'),
(76, 25, 0, '0', '0', '0', '0'),
(77, 26, 0, '0', '0', '0', '0'),
(78, 2, 0, '0', '0', '0', '0'),
(79, 3, 0, '0', '0', '0', '0'),
(80, 16, 0, '0', '0', '0', '0'),
(81, 17, 0, '0', '0', '0', '0'),
(83, 19, 0, '0', '0', '0', '0'),
(84, 20, 0, '0', '0', '0', '0'),
(85, 21, 0, '0', '0', '0', '0'),
(86, 22, 0, '0', '0', '0', '0'),
(87, 23, 0, '0', '0', '0', '0'),
(88, 24, 0, '0', '0', '0', '0'),
(89, 25, 0, '0', '0', '0', '0'),
(90, 26, 0, '0', '0', '0', '0'),
(91, 2, 0, '0', '0', '0', '0'),
(92, 3, 0, '0', '0', '0', '0'),
(93, 16, 0, '0', '0', '0', '0'),
(94, 17, 0, '0', '0', '0', '0'),
(96, 19, 0, '0', '0', '0', '0'),
(97, 20, 0, '0', '0', '0', '0'),
(98, 21, 0, '0', '0', '0', '0'),
(99, 22, 0, '0', '0', '0', '0'),
(100, 23, 0, '0', '0', '0', '0'),
(101, 24, 0, '0', '0', '0', '0'),
(102, 25, 0, '0', '0', '0', '0'),
(103, 26, 0, '0', '0', '0', '0'),
(104, 2, 0, '0', '0', '0', '0'),
(105, 3, 0, '0', '0', '0', '0'),
(106, 16, 0, '0', '0', '0', '0'),
(107, 17, 0, '0', '0', '0', '0'),
(109, 19, 0, '0', '0', '0', '0'),
(110, 20, 0, '0', '0', '0', '0'),
(111, 21, 0, '0', '0', '0', '0'),
(112, 22, 0, '0', '0', '0', '0'),
(113, 23, 0, '0', '0', '0', '0'),
(114, 24, 0, '0', '0', '0', '0'),
(115, 25, 0, '0', '0', '0', '0'),
(116, 26, 0, '0', '0', '0', '0'),
(117, 27, 1, '1', '1', '1', '1'),
(118, 28, 1, '1', '1', '1', '1'),
(119, 29, 1, '1', '0', '0', '0'),
(120, 30, 1, '1', '1', '1', '1'),
(121, 31, 1, '1', '1', '1', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rc_user_menu`
--

CREATE TABLE `rc_user_menu` (
  `menu_id` int(11) NOT NULL,
  `nama_menu` varchar(50) NOT NULL,
  `url` varchar(100) NOT NULL,
  `icon` varchar(50) NOT NULL,
  `level_menu` enum('main','sub') NOT NULL,
  `main_menu` varchar(50) NOT NULL,
  `is_active` enum('0','1') NOT NULL,
  `no_urut` int(11) NOT NULL,
  `date_created` int(11) NOT NULL,
  `user` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `rc_user_menu`
--

INSERT INTO `rc_user_menu` (`menu_id`, `nama_menu`, `url`, `icon`, `level_menu`, `main_menu`, `is_active`, `no_urut`, `date_created`, `user`) VALUES
(2, 'Setting', 'menu', 'fas fa-fw fa-cogs', 'main', '', '1', 16, 1605945786, 'root'),
(3, 'Menu Management', 'menu/menu-management', '', 'sub', 'Setting', '1', 17, 1605945777, 'root'),
(16, 'Home', 'home', 'fas fa-fw fa-home', 'main', '', '1', 2, 1604359030, 'root'),
(17, 'Access Management', 'menu/access-management', '', 'sub', 'Setting', '1', 18, 1605945767, 'root'),
(19, 'Master', 'master', 'fas fa-fw fa-database', 'main', '', '1', 3, 1604361426, 'root'),
(20, 'User', 'master/user', 'fas fa-fw fa-user', 'sub', 'Master', '1', 4, 1604378261, 'root'),
(21, 'Mobil', 'master/mobil', 'fas fa-fw fa-car', 'sub', 'Master', '1', 5, 1604385125, 'root'),
(22, 'Driver', 'master/driver', 'fas fa-fw fa-wheelchair', 'sub', 'Master', '1', 6, 1604442483, 'root'),
(23, 'Customer', 'master/customer', 'fas fa-fw fa-user-friends', 'sub', 'Master', '1', 7, 1604493307, 'root'),
(24, 'Transaksi', 'transaksi', 'fab fa-fw fa-opencart', 'main', '', '1', 10, 1604948036, 'root'),
(25, 'Sales Order', 'transaksi/sales-order', 'far fa-fw fa-list-alt', 'sub', 'Transaksi', '1', 11, 1604948045, 'root'),
(26, 'Payment', 'transaksi/payment', 'fas fa-fw fa-dollar-sign', 'sub', 'Transaksi', '1', 12, 1605311783, 'root'),
(27, 'Tipe Order', 'master/tipe-order', 'fas fa-fw fa-folder-plus', 'sub', 'Master', '1', 8, 1604944897, 'root'),
(28, 'Tipe Sewa', 'master/tipe-sewa', 'fas fa-fw fa-folder-plus', 'sub', 'Master', '1', 9, 1604948028, 'root'),
(29, 'Report', 'report', 'far fa-fw fa-chart-bar', 'main', '', '1', 14, 1605945751, 'root'),
(30, 'Order Report', 'report/report-order', 'far fa-fw fa-list-alt', 'sub', 'Report', '1', 15, 1605945794, 'root'),
(31, 'Pengeluaran', 'transaksi/pengeluaran', 'fas fa-fw fa-paste', 'sub', 'Transaksi', '1', 13, 1605946561, 'root');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rc_user_role`
--

CREATE TABLE `rc_user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `rc_user_role`
--

INSERT INTO `rc_user_role` (`id`, `role`) VALUES
(1, 'root'),
(2, 'administrator'),
(5, 'karyawan');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `rc_customer`
--
ALTER TABLE `rc_customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indeks untuk tabel `rc_denda`
--
ALTER TABLE `rc_denda`
  ADD PRIMARY KEY (`denda_id`);

--
-- Indeks untuk tabel `rc_dokumen`
--
ALTER TABLE `rc_dokumen`
  ADD PRIMARY KEY (`dokumen_id`);

--
-- Indeks untuk tabel `rc_driver`
--
ALTER TABLE `rc_driver`
  ADD PRIMARY KEY (`driver_id`);

--
-- Indeks untuk tabel `rc_merk_mobil`
--
ALTER TABLE `rc_merk_mobil`
  ADD PRIMARY KEY (`merk_id`);

--
-- Indeks untuk tabel `rc_mobil`
--
ALTER TABLE `rc_mobil`
  ADD PRIMARY KEY (`mobil_id`);

--
-- Indeks untuk tabel `rc_pembayaran`
--
ALTER TABLE `rc_pembayaran`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indeks untuk tabel `rc_pengeluaran`
--
ALTER TABLE `rc_pengeluaran`
  ADD PRIMARY KEY (`pengeluaran_id`);

--
-- Indeks untuk tabel `rc_so`
--
ALTER TABLE `rc_so`
  ADD PRIMARY KEY (`so_id`);

--
-- Indeks untuk tabel `rc_tipe_order`
--
ALTER TABLE `rc_tipe_order`
  ADD PRIMARY KEY (`order_tipe_id`);

--
-- Indeks untuk tabel `rc_tipe_sewa`
--
ALTER TABLE `rc_tipe_sewa`
  ADD PRIMARY KEY (`sewa_tipe_id`);

--
-- Indeks untuk tabel `rc_user`
--
ALTER TABLE `rc_user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `rc_user_akses`
--
ALTER TABLE `rc_user_akses`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `rc_user_menu`
--
ALTER TABLE `rc_user_menu`
  ADD PRIMARY KEY (`menu_id`);

--
-- Indeks untuk tabel `rc_user_role`
--
ALTER TABLE `rc_user_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `rc_customer`
--
ALTER TABLE `rc_customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `rc_denda`
--
ALTER TABLE `rc_denda`
  MODIFY `denda_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `rc_dokumen`
--
ALTER TABLE `rc_dokumen`
  MODIFY `dokumen_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `rc_driver`
--
ALTER TABLE `rc_driver`
  MODIFY `driver_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `rc_merk_mobil`
--
ALTER TABLE `rc_merk_mobil`
  MODIFY `merk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `rc_mobil`
--
ALTER TABLE `rc_mobil`
  MODIFY `mobil_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `rc_pembayaran`
--
ALTER TABLE `rc_pembayaran`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `rc_pengeluaran`
--
ALTER TABLE `rc_pengeluaran`
  MODIFY `pengeluaran_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `rc_so`
--
ALTER TABLE `rc_so`
  MODIFY `so_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `rc_tipe_order`
--
ALTER TABLE `rc_tipe_order`
  MODIFY `order_tipe_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `rc_tipe_sewa`
--
ALTER TABLE `rc_tipe_sewa`
  MODIFY `sewa_tipe_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `rc_user`
--
ALTER TABLE `rc_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `rc_user_akses`
--
ALTER TABLE `rc_user_akses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122;

--
-- AUTO_INCREMENT untuk tabel `rc_user_menu`
--
ALTER TABLE `rc_user_menu`
  MODIFY `menu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT untuk tabel `rc_user_role`
--
ALTER TABLE `rc_user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
