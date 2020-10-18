-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 14, 2020 at 02:47 PM
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
-- Database: `skr_nita2`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(7, '2020_09_29_171141_tbl_kurikulum', 1),
(15, '2020_09_29_171729_tbl_tahun_akademik', 1),
(22, '2020_10_08_201021_modify_to_tbl_guru_table', 2),
(23, '2020_10_10_054211_add_tingkatan_to_table_tingkatan', 3),
(26, '2020_10_10_194731_add_column_to_table_tbl_user', 6),
(27, '2020_10_10_195648_add_foto_to_users', 7),
(30, '2014_10_12_000000_create_users_table', 8),
(31, '2014_10_12_100000_create_password_resets_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tabel_menu`
--

CREATE TABLE `tabel_menu` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_menu` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_main_menu` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tabel_menu`
--

INSERT INTO `tabel_menu` (`id`, `nama_menu`, `link`, `icon`, `is_main_menu`, `created_at`, `updated_at`) VALUES
(1, 'Siswa', 'siswa', 'fa fa-users', 0, NULL, NULL),
(2, 'Data Guru', 'guru', 'fa fa-user-circle', 0, NULL, NULL),
(3, 'Data Master', '#', 'fa fa-bars', 0, NULL, NULL),
(4, 'Mata Pelajara', 'mapel', 'fa fa-book', 3, NULL, NULL),
(5, 'Ruangan Kelas', 'ruangan', 'fa fa-building', 3, NULL, NULL),
(6, 'Tingkat Kelas', 'tingkatan', 'fa fa-sitemap', 3, NULL, NULL),
(7, 'Jurusan', 'jurusan', 'fa fa-large', 3, NULL, NULL),
(8, 'Tahun Akademik', 'tahunakademik', 'fa fa-calender-check-o', 3, NULL, NULL),
(9, 'Kelas', 'kelas', 'fa fa-cubes', 3, NULL, NULL),
(10, 'Kurikulum', 'kurikulum', 'fa fa-list', 3, NULL, NULL),
(11, 'Jadwal Pelajaran', 'jadwal', 'fa fa-calendar-plus-o', 0, NULL, NULL),
(12, 'Peserta Didik', 'siswa/aktif', 'fa fa-users', 0, NULL, NULL),
(13, 'Wali Kelas', 'walikelas', 'fa fa-user-plus', 0, NULL, NULL),
(14, 'Pengguna Sistem', 'user', 'fa fa-id-badge', 0, NULL, NULL),
(15, 'Menu', 'menu', 'fa fa-list', 0, NULL, NULL),
(16, 'Form Pembayaran', 'pembayaran', 'fa fa-dollar', 0, NULL, NULL),
(17, 'Nilai Akhir', 'nilai', 'fa fa-archive', 0, NULL, NULL),
(18, 'Laporan Nilai', 'laporan_nilai', 'fa fa-pdf-o', 0, NULL, NULL),
(19, 'Lihat Rapot', 'siswa/nilai_siswa_lihat', 'fa fa-pdf-o', 0, NULL, NULL),
(20, 'Profile', 'siswa/loginSiswa', 'fa fa-circle', 0, NULL, NULL),
(21, 'Approve Nilai', 'laporan_nilai/kepsek_lihat', 'fa fa-square-o', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_agama`
--

CREATE TABLE `tbl_agama` (
  `kd_agama` bigint(20) UNSIGNED NOT NULL,
  `nama_agama` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_agama`
--

INSERT INTO `tbl_agama` (`kd_agama`, `nama_agama`, `created_at`, `updated_at`) VALUES
(1, 'ISLAM', NULL, NULL),
(2, 'KRISTEN / PROTESTAN', NULL, NULL),
(3, 'KATHOLIK', NULL, NULL),
(4, 'HINDU', NULL, NULL),
(5, 'BUDHA', NULL, NULL),
(6, 'KONG HU CHU', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_guru`
--

CREATE TABLE `tbl_guru` (
  `id_guru` bigint(20) UNSIGNED NOT NULL,
  `nuptk` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_guru` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` enum('P','W') COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_lahir` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat_guru` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pendidikan_terakhir` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun` int(11) NOT NULL,
  `no_telp` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jadwal`
--

CREATE TABLE `tbl_jadwal` (
  `id_jadwal` bigint(20) UNSIGNED NOT NULL,
  `id_tahun_akademik` int(11) NOT NULL,
  `semester` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kd_jurusan` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kd_tingkatan` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kd_kelas` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kd_mapel` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_guru` int(11) NOT NULL,
  `jam` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kd_ruangan` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hari` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jurusan`
--

CREATE TABLE `tbl_jurusan` (
  `kd_jurusan` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_jurusan` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_jurusan`
--

INSERT INTO `tbl_jurusan` (`kd_jurusan`, `nama_jurusan`, `created_at`, `updated_at`) VALUES
('IPA', 'Ilmu Pengetahuan Alam', '2020-10-09 23:29:58', '2020-10-09 23:29:58'),
('IPS', 'Ilmu Pengetahuan Sosial', '2020-10-09 23:31:21', '2020-10-09 23:31:21');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kelas`
--

CREATE TABLE `tbl_kelas` (
  `kd_kelas` varchar(10) NOT NULL,
  `nama_kelas` varchar(30) NOT NULL,
  `kd_tingkatan` varchar(5) NOT NULL,
  `kd_jurusan` varchar(5) NOT NULL,
  `id_kurikulum` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_kelas`
--

INSERT INTO `tbl_kelas` (`kd_kelas`, `nama_kelas`, `kd_tingkatan`, `kd_jurusan`, `id_kurikulum`, `created_at`, `updated_at`) VALUES
('IPAX1', 'X IPA 1', '001', 'IPA', 1, NULL, NULL),
('IPAX2', 'X IPA 2', '001', 'IPA', 1, NULL, NULL),
('IPAXI1', 'XI IPA 1', '002', 'IPA', 2, NULL, NULL),
('IPAXI2', 'XI IPA 2', '002', 'IPA', 2, NULL, NULL),
('IPAXII', 'XII IPA', '003', 'IPA', 2, NULL, NULL),
('IPSX1', 'X IPS 1', '001', 'IPS', 1, NULL, NULL),
('IPSX2', 'X IPS 2', '001', 'IPS', 1, NULL, NULL),
('IPSXI', 'XI IPS', '002', 'IPS', 2, NULL, NULL),
('IPSXII', 'XII IPS', '003', 'IPS', 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kurikulum`
--

CREATE TABLE `tbl_kurikulum` (
  `id_kurikulum` bigint(20) UNSIGNED NOT NULL,
  `nama_kurikulum` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_aktif` enum('Aktif','Tidak Aktif') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_kurikulum`
--

INSERT INTO `tbl_kurikulum` (`id_kurikulum`, `nama_kurikulum`, `is_aktif`, `created_at`, `updated_at`) VALUES
(1, 'Kurikulum 2013 (KTSP)', 'Aktif', '2020-10-10 10:13:26', '2020-10-10 10:28:12'),
(2, 'Kurikulum 2006 (KTSP)', 'Tidak Aktif', '2020-10-10 10:28:31', '2020-10-10 10:28:31');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kurikulum_detail`
--

CREATE TABLE `tbl_kurikulum_detail` (
  `id_kurikulum_detail` bigint(20) UNSIGNED NOT NULL,
  `id_kurikulum` int(11) NOT NULL,
  `kd_mapel` varchar(8) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kd_jurusan` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kd_tingkatan` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_kurikulum_detail`
--

INSERT INTO `tbl_kurikulum_detail` (`id_kurikulum_detail`, `id_kurikulum`, `kd_mapel`, `kd_jurusan`, `kd_tingkatan`, `created_at`, `updated_at`) VALUES
(1, 1, 'AGM', 'IPA', '001', NULL, NULL),
(2, 1, 'B.IND', 'IPA', '001', NULL, NULL),
(3, 2, 'B.ING', 'IPA', '001', '2020-10-11 21:02:47', '2020-10-11 21:02:47');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_level_user`
--

CREATE TABLE `tbl_level_user` (
  `id_level_user` bigint(20) UNSIGNED NOT NULL,
  `nama_level` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_level_user`
--

INSERT INTO `tbl_level_user` (`id_level_user`, `nama_level`, `created_at`, `updated_at`) VALUES
(1, 'Admin', NULL, NULL),
(2, 'Walikelas', NULL, NULL),
(3, 'Guru', NULL, NULL),
(4, 'Keuangan', NULL, NULL),
(5, 'Siswa', NULL, NULL),
(6, 'Kepala Sekolah', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mapel`
--

CREATE TABLE `tbl_mapel` (
  `kd_mapel` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_mapel` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_mapel`
--

INSERT INTO `tbl_mapel` (`kd_mapel`, `nama_mapel`, `created_at`, `updated_at`) VALUES
('AGM', 'Agama Siswa', '2020-10-08 15:53:15', '2020-10-09 21:38:50'),
('B.IND', 'Bahasa Indonesia', '2020-10-09 18:49:59', '2020-10-09 18:49:59'),
('B.ING', 'Bahasa Inggris', '2020-10-09 18:50:23', '2020-10-09 18:50:23');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_nilai`
--

CREATE TABLE `tbl_nilai` (
  `id_nilai` bigint(20) UNSIGNED NOT NULL,
  `id_jadwal` int(11) NOT NULL,
  `nilai_tugas` int(11) NOT NULL,
  `nilai_uts` int(11) NOT NULL,
  `nilai_uas` int(11) NOT NULL,
  `nis` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nilai` double(8,2) NOT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_riwayat_kelas`
--

CREATE TABLE `tbl_riwayat_kelas` (
  `id_riwayat` bigint(20) UNSIGNED NOT NULL,
  `kd_kelas` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nis` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_tahun_akademik` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ruangan`
--

CREATE TABLE `tbl_ruangan` (
  `kd_ruangan` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_ruangan` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kapasitas` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_ruangan`
--

INSERT INTO `tbl_ruangan` (`kd_ruangan`, `nama_ruangan`, `kapasitas`, `created_at`, `updated_at`) VALUES
('R.IPAX1', 'X IPA 1', '20', '2020-10-09 21:55:26', '2020-10-09 22:03:59');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_siswa`
--

CREATE TABLE `tbl_siswa` (
  `nis` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_siswa` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `tempat_lahir` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_ayah` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_ibu` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_ortu` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telp_ortu` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telp_siswa` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_ijazah` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sekolah_asal` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kd_agama` int(11) NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kd_kelas` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_siswa` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_siswa`
--

INSERT INTO `tbl_siswa` (`nis`, `nama`, `jenis_kelamin`, `alamat_siswa`, `tanggal_lahir`, `tempat_lahir`, `nama_ayah`, `nama_ibu`, `alamat_ortu`, `no_telp_ortu`, `no_telp_siswa`, `no_ijazah`, `sekolah_asal`, `kd_agama`, `foto`, `kd_kelas`, `status_siswa`, `email`, `password`, `created_at`, `updated_at`) VALUES
(24521, 'Jeeeen', 'Laki-laki', 'Alamat Siswa', '2006-12-04', 'Tempat', 'Ayah', 'Ibu', 'Alamat Ortu', '0979080990', '098098098', '009-908', 'Sekolah', 1, 'Siswa/h1VZ2v0evoWJMm575VbMqgcC25eUV4CHIGetY6Cp.jpeg', 'IPAX1', 'Aktif', 'siswa@gmail.com', '123123', '2020-10-06 23:57:25', '2020-10-09 21:21:02'),
(24522, 'Jen', 'Laki-laki', 'Jl. Dewi Sartika', '2006-12-11', 'Jakarta', 'Bapak', 'Emak', 'Alamat', '09822129452', '089976897688', '666', 'Sekolahan', 1, '1', 'IPAXII', 'Aktif', 'jend@gmail.com', '123123', '2020-10-07 00:26:28', '2020-10-07 00:26:28'),
(24523, 'Ale', 'Perempuan', 'a', '2006-12-19', 'Jakarta', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 3, '1', 'IPSX2', 'Keluar', 'ale@gmail.com', 'ale', '2020-10-07 05:06:34', '2020-10-07 05:06:34'),
(24524, 'Jenii', 'Laki-laki', 'Jl. Dewi Sartika', '2006-12-11', 'Jakarta', 'Bapak', 'Emak', 'Alamat', '09822129452', '089976897688', '666', 'Sekolahan', 5, 'Siswa/3ozb9WSg99wOcjC0fVohiRloQcOvRsgHRWR2EsLM.jpeg', 'IPAXII', 'Aktif', 'jend@gmail.com', '123123', '2020-10-07 22:32:51', '2020-10-08 02:13:38'),
(24525, 'Nama', 'Laki-laki', 'Alamat Siswa', '2006-12-18', 'Tempat', 'Ayah', 'Ibu', 'Alamat Ortu', '123123123123123', '123123123', '8099800090', 'Asal', 5, 'Siswa/TmZ9GyMcVzvrepPfRdg0BSUs2FozZTuASCiADyU1.png', 'IPSXII', 'Lulus', 'jenjenjend@gmail.com', 'gwganteng01', '2020-10-08 00:29:22', '2020-10-08 00:29:22');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tahun_akademik`
--

CREATE TABLE `tbl_tahun_akademik` (
  `id_tahun_akademik` bigint(20) UNSIGNED NOT NULL,
  `tahun_akademik` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_aktif` enum('Y','N') COLLATE utf8mb4_unicode_ci NOT NULL,
  `semester` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_tahun_akademik`
--

INSERT INTO `tbl_tahun_akademik` (`id_tahun_akademik`, `tahun_akademik`, `is_aktif`, `semester`, `created_at`, `updated_at`) VALUES
(1, '2022', 'N', NULL, '2020-10-12 17:48:58', '2020-10-12 17:48:58'),
(2, '2001/2002', 'Y', 'Genap', '2020-10-12 17:56:36', '2020-10-13 20:38:37'),
(4, '2012', 'N', NULL, '2020-10-13 03:17:41', '2020-10-13 03:17:41');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tingkatan_kelas`
--

CREATE TABLE `tbl_tingkatan_kelas` (
  `kd_tingkatan` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_tingkatan` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_tingkatan_kelas`
--

INSERT INTO `tbl_tingkatan_kelas` (`kd_tingkatan`, `nama_tingkatan`, `created_at`, `updated_at`) VALUES
('001', 'X', '2020-10-09 22:55:39', '2020-10-09 22:55:39'),
('002', 'XI', '2020-10-09 22:55:53', '2020-10-09 22:55:53'),
('003', 'XII', '2020-10-09 22:56:24', '2020-10-09 22:56:24');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `nama_lengkap` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_level_user` int(11) NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_rules`
--

CREATE TABLE `tbl_user_rules` (
  `id_rule` bigint(20) UNSIGNED NOT NULL,
  `id_menu` int(11) NOT NULL,
  `id_level_user` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_user_rules`
--

INSERT INTO `tbl_user_rules` (`id_rule`, `id_menu`, `id_level_user`, `created_at`, `updated_at`) VALUES
(1, 16, 4, NULL, NULL),
(2, 1, 1, NULL, NULL),
(3, 2, 1, NULL, NULL),
(4, 3, 1, NULL, NULL),
(5, 4, 1, NULL, NULL),
(6, 5, 1, NULL, NULL),
(7, 7, 1, NULL, NULL),
(8, 8, 1, NULL, NULL),
(9, 11, 1, NULL, NULL),
(10, 6, 1, NULL, NULL),
(11, 14, 1, NULL, NULL),
(13, 13, 1, NULL, NULL),
(14, 12, 1, NULL, NULL),
(15, 10, 1, NULL, NULL),
(16, 9, 1, NULL, NULL),
(17, 11, 3, NULL, NULL),
(19, 17, 3, NULL, NULL),
(30, 15, 1, NULL, NULL),
(34, 18, 3, NULL, NULL),
(37, 12, 3, NULL, NULL),
(38, 12, 6, NULL, NULL),
(41, 11, 5, NULL, NULL),
(42, 19, 5, NULL, NULL),
(44, 20, 5, NULL, NULL),
(45, 21, 6, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_walikelas`
--

CREATE TABLE `tbl_walikelas` (
  `id_walikelas` bigint(20) UNSIGNED NOT NULL,
  `id_guru` int(11) NOT NULL,
  `id_tahun_akademik` int(11) NOT NULL,
  `kd_kelas` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_lengkap` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_level_user` int(11) NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama_lengkap`, `email`, `email_verified_at`, `password`, `id_level_user`, `foto`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin1@gmail.com', NULL, '$2y$10$PU5HUOqZ36swLIYRwzXLWeGV506DD5EK1J3YFmXAJ3/SgaMVRn.sm', 1, NULL, NULL, NULL, NULL),
(2, 'Siswa', 'siswa@gmail.com', NULL, '$2y$10$NNPwx7/3JXufdYgjHlNYruXNldzNQv2JNYUAciDHO3JAhaYPbWzJi', 5, NULL, NULL, NULL, NULL),
(3, 'Guru', 'guru@gmail.com', NULL, '$2y$10$AM3TqSEJ5cb8vIYHBNutGuYtlnsdB330d0W3xtHIhmBxHzJ4So4y2', 3, NULL, NULL, NULL, NULL),
(4, 'Walikelas', 'walikelas@gmail.com', NULL, '$2y$10$xaQCPNNXatJGrL4ElwctU.SO4KG5a0mDSoTU/E4D9THP268u.2bMC', 2, NULL, NULL, NULL, NULL),
(5, 'Kepala Sekolah', 'kepsek@gmail.com', NULL, '$2y$10$vcM49YRfDo75LAYk7tmpFOWUFoxBTkl4AJzt0nNYQhlUIF0WM13im', 6, NULL, NULL, NULL, NULL),
(6, 'Keuangan', 'keuangan@gmail.com', NULL, '$2y$10$kKtWKi1tUmdUBw/mSiAQLOTppcEftAhjLv6zX9DmNb.6lHVURDqRK', 4, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_kelas`
-- (See below for the actual view)
--
CREATE TABLE `view_kelas` (
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_user`
-- (See below for the actual view)
--
CREATE TABLE `view_user` (
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_walikelas`
-- (See below for the actual view)
--
CREATE TABLE `view_walikelas` (
);

-- --------------------------------------------------------

--
-- Structure for view `view_kelas`
--
DROP TABLE IF EXISTS `view_kelas`;
-- Error reading structure for table skr_nita2.view_kelas: #1267 - Illegal mix of collations (utf8mb4_general_ci,IMPLICIT) and (utf8mb4_unicode_ci,IMPLICIT) for operation '='

-- --------------------------------------------------------

--
-- Structure for view `view_user`
--
DROP TABLE IF EXISTS `view_user`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_user`  AS  select `tu`.`id_user` AS `id_user`,`tu`.`nama_lengkap` AS `nama_lengkap`,`tu`.`username` AS `username`,`tu`.`password` AS `password`,`tu`.`id_level_user` AS `id_level_user`,`tu`.`foto` AS `foto`,`tlu`.`nama_level` AS `nama_level` from (`tbl_user` `tu` join `tbl_level_user` `tlu`) where `tu`.`id_level_user` = `tlu`.`id_level_user` ;

-- --------------------------------------------------------

--
-- Structure for view `view_walikelas`
--
DROP TABLE IF EXISTS `view_walikelas`;
-- Error reading structure for table skr_nita2.view_walikelas: #1267 - Illegal mix of collations (utf8mb4_unicode_ci,IMPLICIT) and (utf8mb4_general_ci,IMPLICIT) for operation '='

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `tabel_menu`
--
ALTER TABLE `tabel_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_agama`
--
ALTER TABLE `tbl_agama`
  ADD PRIMARY KEY (`kd_agama`);

--
-- Indexes for table `tbl_guru`
--
ALTER TABLE `tbl_guru`
  ADD PRIMARY KEY (`id_guru`);

--
-- Indexes for table `tbl_jadwal`
--
ALTER TABLE `tbl_jadwal`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indexes for table `tbl_jurusan`
--
ALTER TABLE `tbl_jurusan`
  ADD PRIMARY KEY (`kd_jurusan`);

--
-- Indexes for table `tbl_kelas`
--
ALTER TABLE `tbl_kelas`
  ADD PRIMARY KEY (`kd_kelas`);

--
-- Indexes for table `tbl_kurikulum`
--
ALTER TABLE `tbl_kurikulum`
  ADD PRIMARY KEY (`id_kurikulum`);

--
-- Indexes for table `tbl_kurikulum_detail`
--
ALTER TABLE `tbl_kurikulum_detail`
  ADD PRIMARY KEY (`id_kurikulum_detail`);

--
-- Indexes for table `tbl_level_user`
--
ALTER TABLE `tbl_level_user`
  ADD PRIMARY KEY (`id_level_user`);

--
-- Indexes for table `tbl_mapel`
--
ALTER TABLE `tbl_mapel`
  ADD PRIMARY KEY (`kd_mapel`);

--
-- Indexes for table `tbl_nilai`
--
ALTER TABLE `tbl_nilai`
  ADD PRIMARY KEY (`id_nilai`);

--
-- Indexes for table `tbl_riwayat_kelas`
--
ALTER TABLE `tbl_riwayat_kelas`
  ADD PRIMARY KEY (`id_riwayat`);

--
-- Indexes for table `tbl_siswa`
--
ALTER TABLE `tbl_siswa`
  ADD PRIMARY KEY (`nis`);

--
-- Indexes for table `tbl_tahun_akademik`
--
ALTER TABLE `tbl_tahun_akademik`
  ADD PRIMARY KEY (`id_tahun_akademik`);

--
-- Indexes for table `tbl_tingkatan_kelas`
--
ALTER TABLE `tbl_tingkatan_kelas`
  ADD PRIMARY KEY (`kd_tingkatan`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `tbl_user_rules`
--
ALTER TABLE `tbl_user_rules`
  ADD PRIMARY KEY (`id_rule`);

--
-- Indexes for table `tbl_walikelas`
--
ALTER TABLE `tbl_walikelas`
  ADD PRIMARY KEY (`id_walikelas`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `tabel_menu`
--
ALTER TABLE `tabel_menu`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tbl_agama`
--
ALTER TABLE `tbl_agama`
  MODIFY `kd_agama` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_guru`
--
ALTER TABLE `tbl_guru`
  MODIFY `id_guru` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_jadwal`
--
ALTER TABLE `tbl_jadwal`
  MODIFY `id_jadwal` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_kurikulum`
--
ALTER TABLE `tbl_kurikulum`
  MODIFY `id_kurikulum` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_kurikulum_detail`
--
ALTER TABLE `tbl_kurikulum_detail`
  MODIFY `id_kurikulum_detail` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_level_user`
--
ALTER TABLE `tbl_level_user`
  MODIFY `id_level_user` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_nilai`
--
ALTER TABLE `tbl_nilai`
  MODIFY `id_nilai` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_riwayat_kelas`
--
ALTER TABLE `tbl_riwayat_kelas`
  MODIFY `id_riwayat` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_siswa`
--
ALTER TABLE `tbl_siswa`
  MODIFY `nis` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24526;

--
-- AUTO_INCREMENT for table `tbl_tahun_akademik`
--
ALTER TABLE `tbl_tahun_akademik`
  MODIFY `id_tahun_akademik` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_user_rules`
--
ALTER TABLE `tbl_user_rules`
  MODIFY `id_rule` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `tbl_walikelas`
--
ALTER TABLE `tbl_walikelas`
  MODIFY `id_walikelas` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
