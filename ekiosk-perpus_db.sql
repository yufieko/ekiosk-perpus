-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2015 at 12:29 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ekiosk-perpus_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `id` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) unsigned NOT NULL DEFAULT '0',
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_berkas`
--

CREATE TABLE IF NOT EXISTS `tb_berkas` (
`berkas_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `berkas_download` int(11) DEFAULT '0',
  `berkas_nama` varchar(50) DEFAULT NULL,
  `berkas_pesan` varchar(100) DEFAULT NULL,
  `berkas_waktu` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `berkas_status` smallint(6) DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_berkas`
--

INSERT INTO `tb_berkas` (`berkas_id`, `user_id`, `berkas_download`, `berkas_nama`, `berkas_pesan`, `berkas_waktu`, `berkas_status`) VALUES
(2, 3, 0, 'jawapos20150313.pdf', 'jawapos20150313', '2015-04-20 10:23:19', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_buku`
--

CREATE TABLE IF NOT EXISTS `tb_buku` (
`buku_id` int(11) NOT NULL,
  `buku_judul` varchar(100) NOT NULL,
  `buku_penulis` varchar(50) NOT NULL,
  `jenis_id` int(11) NOT NULL,
  `koleksi_id` int(11) NOT NULL,
  `buku_tahun` varchar(10) NOT NULL,
  `buku_masuk` datetime NOT NULL,
  `buku_letak` varchar(10) NOT NULL,
  `buku_deskripsi` text NOT NULL,
  `buku_penerbit` varchar(50) NOT NULL,
  `buku_gambar` varchar(100) NOT NULL DEFAULT 'no_book_image.gif',
  `buku_jumlah` int(11) NOT NULL,
  `buku_pinjam` int(11) NOT NULL DEFAULT '0',
  `buku_status` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_buku`
--

INSERT INTO `tb_buku` (`buku_id`, `buku_judul`, `buku_penulis`, `jenis_id`, `koleksi_id`, `buku_tahun`, `buku_masuk`, `buku_letak`, `buku_deskripsi`, `buku_penerbit`, `buku_gambar`, `buku_jumlah`, `buku_pinjam`, `buku_status`) VALUES
(1, 'Fundamentals Of Electronic Circuit Design', 'David Comer, Donald Comer', 18, 6, '2005', '2015-04-13 00:00:00', 'L.S30', 'blablablabla', 'A', 'no_book_image.gif', 4, 2, 1),
(2, 'Basic Electrical Engineering Second Edition', 'Jimmie J. Cothney,  Syed A. Nasar', 18, 6, '2005', '2015-04-13 00:00:00', 'L.S30', 'Jimmie J. Cothney,  Syed A. Nasar', 'A', 'no_book_image.gif', 2, 0, 1),
(3, 'Fundamentals Of Electric Circuit Fourth Edition', 'Charles K. Alexander and Matthew N.O. Sadiku', 18, 6, '2001', '2002-06-12 00:00:00', 'L.S30', '-', 'a', 'no_book_image.gif', 4, 2, 1),
(6, 'Materials and Process In Manufacturing', 'J T. Black, Ronald A. Kohser', 8, 6, '2000', '0000-00-00 00:00:00', 'L.S30', '-', 'A', 'no_book_image.gif', 2, 0, 1),
(7, 'Mechanics Of Materials ', 'Ferdinand P. Beer, E. Russel Johnstan,Jr', 8, 6, '2003', '2004-10-27 00:00:00', 'L.S30', '-', 'A', 'no_book_image.gif', 3, 2, 1),
(8, 'Thermodynamics an Engineering Approach', 'Yunus A. Cengel, Michael A. Boles', 8, 6, '2010', '2011-05-20 00:00:00', 'L.S30', '-', 'A', 'no_book_image.gif', 4, 0, 1),
(9, 'Kamus Inggis-Indonesia', 'John M. Echols, Hassan Shadily', 6, 6, '2000', '2000-04-21 00:00:00', 'L.S30', '-', 'A', 'no_book_image.gif', 5, 0, 1),
(10, 'Terjemahan Alfiyyah', 'Syarah Ibnu ‘Aqikl', 6, 6, '2012', '2012-08-09 00:00:00', 'L.S30', '-', 'A', 'no_book_image.gif', 3, 2, 1),
(11, 'Testing Second Language Speaking', 'Glenn Fulcher', 6, 6, '2003', '2004-12-03 00:00:00', 'L.S30', '-', 'A', 'no_book_image.gif', 3, 0, 1),
(14, 'International Edition Alghorithm', 'Richard Johnsonbaugh, Marchus Schoefe', 3, 6, '2001', '2002-04-25 00:00:00', 'L.S30', '-', 'A', 'no_book_image.gif', 5, 2, 1),
(15, 'Metematika Diskrit', 'Rinaldi Munir', 3, 6, '2010', '2010-12-20 00:00:00', 'L.S30', '-', 'A', 'no_book_image.gif', 3, 1, 1),
(16, 'Pattern Recognition Machine Learning', 'Christoper M. Bishop', 3, 6, '2002', '2002-10-02 00:00:00', 'L.S30', '-', 'A', 'no_book_image.gif', 4, 2, 1),
(17, 'Mahkota Pokok-Pokok Hadis Rasulullah', 'Syekh Manshur Ali Nashif', 10, 6, '2001', '2002-03-23 00:00:00', 'L.S30', '-', 'A', 'no_book_image.gif', 2, 0, 1),
(18, 'Shahih Fiqih Sunnah Jilid 1', 'Syaikh Muhammad Nashiruddin Al-Albani', 10, 6, '2001', '2002-09-26 00:00:00', 'L.S30', '-', 'A', 'no_book_image.gif', 3, 2, 1),
(19, 'Syarah Mukhtaarul Ahaadits', 'Sayyid Ahmad Al Hasymi', 10, 6, '2003', '2002-04-12 00:00:00', 'L.S30', '-', 'A', 'no_book_image.gif', 3, 2, 1),
(20, '99 Cahaya Di Langit Eropa', 'Hanum Salsabiela Rais, Rangga Almahendra', 9, 10, '2014', '2014-08-24 00:00:00', 'L.S30', '-', 'A', 'no_book_image.gif', 3, 1, 1),
(21, 'The Mark Of Athena', 'Rick Riodan', 9, 6, '2010', '2011-05-27 00:00:00', 'L.S30', '-', 'A', 'no_book_image.gif', 4, 1, 1),
(22, 'Laskar Pelangi', 'Andrea Hirata', 9, 6, '2009', '2010-06-20 00:00:00', 'L.S30', '-', 'A', 'no_book_image.gif', 3, 2, 1),
(23, 'Microsoft ASP.NET step by step ', 'G. Andrew Duthie', 7, 6, '2009', '2010-04-25 00:00:00', 'L.S30', '-', 'A', 'no_book_image.gif', 5, 1, 1),
(24, 'The executive guide to information', 'Mark Egan with tim mather', 7, 6, '2010', '2010-08-09 00:00:00', 'L.S30', '-', 'A', 'no_book_image.gif', 4, 2, 1),
(25, 'Human – computer interaction ', 'Alan Dix, Jaret Finlay, Gregori D', 7, 6, '2003', '2004-07-05 00:00:00', 'L.S30', '-', 'A', 'no_book_image.gif', 3, 0, 1),
(26, 'Essential of circuit and analysis', 'Robert L Boylestad', 1, 6, '2006', '2007-09-24 00:00:00', 'L.S30', '-', 'A', 'no_book_image.gif', 3, 1, 1),
(27, 'Introduction to instrumentation and measurement ', 'Robert B Northrop', 1, 6, '2004', '2005-09-09 00:00:00', 'L.S30', '-', 'A', 'no_book_image.gif', 5, 1, 1),
(28, 'Electronics for dummies ', 'Gordon Mecomb . Earl Boysen', 1, 6, '2005', '2005-08-02 00:00:00', 'L.S30', '-', 'A', 'no_book_image.gif', 4, 1, 1),
(29, 'Radar cross section ', 'Eugene F krot, john F shaeffer, Michael t tuley', 2, 6, '2009', '2009-06-20 00:00:00', 'L.S30', '-', 'A', 'no_book_image.gif', 4, 2, 1),
(30, 'Pengolahan sinyal digital dengan pemrograman matlab', 'Dadang gunawan, filbert hilman juwono', 2, 6, '2008', '2009-03-09 00:00:00', 'L.S30', '-', 'A', 'no_book_image.gif', 3, 2, 1),
(31, 'RFID field guidy', 'Manish bhuptani, shahram moradpour', 2, 6, '2012', '2013-08-09 00:00:00', 'L.S30', '-', 'A', 'no_book_image.gif', 5, 0, 1),
(32, 'Industrial robotics', 'Harry colestock', 4, 6, '2011', '2012-03-09 00:00:00', 'L.S30', '-', 'A', 'no_book_image.gif', 3, 0, 1),
(33, 'Robotics control. Sensing, vision, intellegences', 'K. S FU, R. C gonzalez, C . S. G lee', 4, 6, '2010', '2011-06-06 00:00:00', 'L.S30', '-', 'A', 'no_book_image.gif', 4, 2, 1),
(34, 'Analaog and digital circuits of electronics control system applications', 'Jerry luecke', 4, 6, '2010', '2011-09-09 00:00:00', 'L.S30', '-', 'A', 'no_book_image.gif', 4, 2, 1),
(35, 'Project management one track from start to finish ', 'Joseph Philips', 5, 6, '2003', '2004-04-09 00:00:00', 'L.S30', '-', 'A', 'no_book_image.gif', 2, 1, 1),
(36, 'Grow your own leader', 'Wiliam c byham , matthem  j paese, Audrey b smith', 5, 6, '2012', '2013-09-08 00:00:00', 'L.S30', '-', 'A', 'no_book_image.gif', 3, 2, 1),
(37, 'Customer relationship manajement', 'Francis buttle', 5, 6, '2009', '2010-09-05 00:00:00', 'L.S30', '-', 'A', 'no_book_image.gif', 3, 0, 0),
(38, 'Project management one track from start to finish ', 'Joseph Philips', 5, 6, '2003', '2004-04-09 00:00:00', 'L.S30', '-', 'A', 'no_book_image.gif', 2, 1, 1),
(39, 'Grow your own leader', 'Wiliam c byham , matthem  j paese, Audrey b smith', 5, 6, '2012', '2013-09-08 00:00:00', 'L.S30', '-', 'A', 'no_book_image.gif', 3, 2, 1),
(40, 'Customer relationship manajement', 'Francis buttle', 5, 6, '2009', '2010-09-05 00:00:00', 'L.S30', '-', 'A', 'no_book_image.gif', 3, 0, 1),
(41, 'Aku anak sehat', 'ueki', 13, 8, '2015', '2015-04-18 02:43:26', 'A302', 'oke gitu aja', 'upress', 'no_book_image.gif', 5, 0, 1),
(43, 'Biografi Imam Syafi''i', 'Dr.', 10, 8, '2015', '2015-04-19 16:16:58', 'B.3012', 'biografi imam syafi''i, mujtahid', 'Zaman', 'no_book_image.gif', 5, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_hakakses`
--

CREATE TABLE IF NOT EXISTS `tb_hakakses` (
`akses_id` int(10) unsigned NOT NULL,
  `akses_nama` varchar(40) NOT NULL,
  `akses_deskripsi` tinytext NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=68 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_hakakses`
--

INSERT INTO `tb_hakakses` (`akses_id`, `akses_nama`, `akses_deskripsi`) VALUES
(1, 'dashboard', 'overview informasi pada backend'),
(9, 'manajemen', 'untuk manajemen data lain'),
(14, 'buku', 'berisi daftar buku dan tentunya fitur CRUD'),
(18, 'koran', 'berisi daftar koran dan tentunya fitur CRUD'),
(22, 'koleksi', 'koleksi'),
(30, 'menu', 'manajemen menu'),
(34, 'user', 'manajemen user'),
(42, 'hakakses', 'manajemen hak akses'),
(46, 'role', 'manajemen role'),
(50, 'frontend', 'untuk kustomisasi frontend'),
(54, 'notifikasi', 'untuk melihat notifikasi'),
(58, 'berkas', 'manajemen berkas'),
(62, 'log', 'untuk melihat log'),
(67, 'berita', 'berisi daftar berita dan tentunya fitur CRUD');

-- --------------------------------------------------------

--
-- Table structure for table `tb_ip_attempts`
--

CREATE TABLE IF NOT EXISTS `tb_ip_attempts` (
  `ip` varchar(15) NOT NULL DEFAULT '0.0.0.0',
  `last_failed_attempt` datetime NOT NULL,
  `number_of_attempts` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_ip_attempts`
--

INSERT INTO `tb_ip_attempts` (`ip`, `last_failed_attempt`, `number_of_attempts`) VALUES
('127.0.0.1', '2015-03-29 10:30:48', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_jenis`
--

CREATE TABLE IF NOT EXISTS `tb_jenis` (
`jenis_id` int(11) NOT NULL,
  `jenis_teks` varchar(20) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_jenis`
--

INSERT INTO `tb_jenis` (`jenis_id`, `jenis_teks`) VALUES
(1, 'Elektronika'),
(2, 'Telekomunikasi'),
(3, 'MIPA'),
(4, 'Kontrol Otomatis'),
(5, 'Manajemen'),
(6, 'Bahasa'),
(7, 'Komputer'),
(8, 'Teknologi'),
(9, 'Sosial'),
(10, 'Agama'),
(11, 'Umum'),
(12, 'Majalah'),
(13, 'Lain-Lain'),
(14, 'Seni Hiburan'),
(15, 'Geografi Sejarah'),
(16, 'Sastra'),
(17, 'Fiksi'),
(18, 'Listrik'),
(19, 'Novel'),
(20, 'Manga');

-- --------------------------------------------------------

--
-- Table structure for table `tb_koleksi`
--

CREATE TABLE IF NOT EXISTS `tb_koleksi` (
`koleksi_id` int(11) NOT NULL,
  `koleksi_nama` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_koleksi`
--

INSERT INTO `tb_koleksi` (`koleksi_id`, `koleksi_nama`) VALUES
(1, 'Diktat D3'),
(2, 'Diktat D4'),
(3, 'Majalah D3'),
(4, 'Majalah D4'),
(5, 'Buku Teks D3'),
(6, 'Buku Teks D4'),
(7, 'Buku D3'),
(8, 'Buku D4'),
(9, 'Tugas Akhir D3'),
(10, 'Tugas Akhir D4'),
(11, 'Jurnal D3'),
(12, 'Jurnal D4'),
(13, 'Majalah D3'),
(14, 'Majalah D4'),
(15, 'Non-cetak D3'),
(16, 'Non-cetak D4'),
(17, 'Buletin D3'),
(18, 'Buletin D4');

-- --------------------------------------------------------

--
-- Table structure for table `tb_log`
--

CREATE TABLE IF NOT EXISTS `tb_log` (
`log_id` int(11) NOT NULL,
  `menu_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `log_isi` text,
  `log_dibuat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `log_status` smallint(6) DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_log`
--

INSERT INTO `tb_log` (`log_id`, `menu_id`, `user_id`, `log_isi`, `log_dibuat`, `log_status`) VALUES
(1, 38, 3, 'User yufieko menambahkan jenis baru ''Komik''', '2015-04-20 07:36:10', 1),
(5, 38, 3, 'User yufieko mengganti jenis ''Komik add''', '2015-04-20 07:36:10', 1),
(7, 38, 3, 'User yufieko mengganti jenis ''Manga''', '2015-04-20 07:36:10', 1),
(9, 38, 3, 'User yufieko mengubah data buku ''Biografi Imam Syafi''i''', '2015-04-20 07:33:22', 1),
(11, 36, 3, 'User yufieko menandai semua Log telah dibaca', '2015-04-20 07:36:12', 1),
(12, 36, 3, 'User yufieko menandai semua Log telah dibaca', '2015-04-20 07:37:13', 1),
(13, 36, 3, 'User yufieko menandai semua Log telah dibaca', '2015-04-20 07:37:13', 0),
(14, 39, 3, 'User yufieko menambahkan koran baru ''jawapos20140201''', '2015-04-20 08:56:32', 0),
(15, 39, 3, 'User yufieko mengubah data koran ''jawapos20140201-asdasd''', '2015-04-20 09:58:17', 0),
(16, 39, 3, 'User yufieko mengubah data koran ''jawapos20140201''', '2015-04-20 09:58:43', 0),
(17, 39, 3, 'User yufieko menghapus data koran ''jawapos20140201''', '2015-04-20 10:11:18', 0),
(18, 39, 3, 'User yufieko menambahkan koran baru ''jawapos20150313''', '2015-04-20 10:23:19', 0),
(19, 39, 3, 'User yufieko mengubah data koran ''jawapos20150313''', '2015-04-20 10:23:29', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_menu`
--

CREATE TABLE IF NOT EXISTS `tb_menu` (
`menu_id` int(11) NOT NULL,
  `menu_tipe` smallint(6) DEFAULT NULL COMMENT '0=parent;1=child;2=inside',
  `menu_parent` varchar(10) DEFAULT NULL,
  `menu_nama` varchar(20) DEFAULT NULL,
  `menu_akses` varchar(20) DEFAULT NULL,
  `menu_url` varchar(50) DEFAULT NULL,
  `menu_icon` varchar(20) DEFAULT NULL,
  `menu_urutan` int(11) DEFAULT NULL,
  `menu_aktif` smallint(6) DEFAULT NULL COMMENT '0=nonaktif;1=aktif'
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_menu`
--

INSERT INTO `tb_menu` (`menu_id`, `menu_tipe`, `menu_parent`, `menu_nama`, `menu_akses`, `menu_url`, `menu_icon`, `menu_urutan`, `menu_aktif`) VALUES
(35, 0, NULL, 'Dashboard', 'dashboard', '/', 'fa fa-dashboard', 1, 1),
(36, 0, NULL, 'Log', 'log', '/log', 'fa fa-warning', 2, 1),
(37, 0, NULL, 'Notifikasi', 'notifikasi', '/notifikasi', 'fa fa-warning', 3, 0),
(38, 0, NULL, 'Buku', 'buku', '/buku', 'fa fa-book', 4, 1),
(39, 0, NULL, 'Koran', 'koran', '/koran', 'fa fa-newspaper-o', 5, 1),
(40, 0, NULL, 'Berita', 'berita', '/berita', 'fa fa-rss', 6, 1),
(41, 0, NULL, 'Frontend', 'frontend', '/frontend', 'fa fa-desktop', 7, 1),
(42, 0, NULL, 'Penelitian', 'penelitian', '/penelitian', 'fa fa-flask', 8, 1),
(49, 0, NULL, 'Manajemen', 'manajemen', '/manajemen', 'fa fa-gears', 10, 1),
(50, 1, 'manajemen', 'Menu', 'menu', '/manajemen/menu', 'fa fa-bars', 10, 1),
(51, 1, 'manajemen', 'User', 'user', '/manajemen/user', 'fa fa-users', 10, 1),
(54, 1, 'manajemen', 'Hak Akses', 'hakakses', '/manajemen/hakakses', 'fa fa-filter', 10, 1),
(55, 1, 'manajemen', 'Role', 'role', '/manajemen/role', 'fa fa-key', 10, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_remembered_users`
--

CREATE TABLE IF NOT EXISTS `tb_remembered_users` (
`connection_id` int(11) unsigned NOT NULL,
  `user_id` int(11) NOT NULL,
  `token` varchar(65) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tb_role`
--

CREATE TABLE IF NOT EXISTS `tb_role` (
`role_id` int(11) NOT NULL,
  `role_nama` varchar(20) DEFAULT NULL,
  `role_dibuat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `role_deskripsi` tinytext NOT NULL,
  `role_admin` tinyint(4) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=72 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_role`
--

INSERT INTO `tb_role` (`role_id`, `role_nama`, `role_dibuat`, `role_deskripsi`, `role_admin`) VALUES
(70, 'Administrator', '2015-03-21 09:07:26', 'Role Administrator', 1),
(71, 'Operator', '2015-03-21 09:07:09', 'Role Operator', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_roleakses`
--

CREATE TABLE IF NOT EXISTS `tb_roleakses` (
`conn_id` int(10) unsigned NOT NULL,
  `role_id` int(11) NOT NULL,
  `akses_id` int(11) unsigned NOT NULL,
  `do_create` tinyint(1) NOT NULL DEFAULT '0',
  `do_read` tinyint(1) NOT NULL DEFAULT '0',
  `do_update` tinyint(1) NOT NULL DEFAULT '0',
  `do_delete` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_roleakses`
--

INSERT INTO `tb_roleakses` (`conn_id`, `role_id`, `akses_id`, `do_create`, `do_read`, `do_update`, `do_delete`) VALUES
(4, 70, 1, 0, 0, 0, 0),
(5, 70, 9, 0, 0, 0, 0),
(6, 70, 14, 0, 0, 0, 0),
(7, 70, 18, 0, 0, 0, 0),
(8, 70, 22, 0, 0, 0, 0),
(9, 70, 30, 0, 0, 0, 0),
(10, 70, 34, 0, 0, 0, 0),
(11, 70, 42, 0, 0, 0, 0),
(12, 70, 46, 0, 0, 0, 0),
(13, 70, 50, 0, 0, 0, 0),
(14, 70, 54, 0, 0, 0, 0),
(15, 70, 58, 0, 0, 0, 0),
(16, 70, 62, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE IF NOT EXISTS `tb_user` (
`user_id` int(11) NOT NULL,
  `role_id` int(11) DEFAULT NULL,
  `user_login` varchar(20) DEFAULT NULL,
  `user_email` varchar(50) DEFAULT NULL,
  `user_pass` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_cs DEFAULT NULL,
  `user_status` tinyint(4) DEFAULT '0',
  `user_dibuat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_lastlogin` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `user_loginattempts` tinyint(4) NOT NULL DEFAULT '0',
  `user_loginban` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `user_resetpass` varchar(65) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `user_resetpass_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `user_emailverf` varchar(65) NOT NULL,
  `user_emailverf_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`user_id`, `role_id`, `user_login`, `user_email`, `user_pass`, `user_status`, `user_dibuat`, `user_lastlogin`, `user_loginattempts`, `user_loginban`, `user_resetpass`, `user_resetpass_date`, `user_emailverf`, `user_emailverf_date`) VALUES
(3, 70, 'yufieko', 'yufieko@it.student.pens.ac.id', '$2a$08$9dnkL3RE0/.8t1056rnAEOLCOOPNy.S.A2chvr1uvpuzltVRzKLL2', 3, '2015-03-28 05:13:05', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', '$2a$08$zX5LE6puV5/g7q2o3I841eUYl3WT6I7Ah59eFaS3BdRgJ0AKdbNYK', '2015-03-30 17:32:54', '', '0000-00-00 00:00:00'),
(4, 70, 'admin', 'admin@pens.ac.id', '$2a$08$IBXEyJ39PA/7e1ASDvSK6eFT9XjkZCjSammP2xHLL5zKQCueGUR8W', 0, '2015-03-28 05:26:50', '0000-00-00 00:00:00', 0, '2015-03-29 08:16:30', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(5, 71, 'dosen', 'dosen@pens.ac.id', '$2a$08$XU/l6G7Hf7/mKhpvbp771OnhScyb8AeuNAGb/AsxgKBZcN0kVX28u', 0, '2015-03-28 05:29:12', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tb_web`
--

CREATE TABLE IF NOT EXISTS `tb_web` (
  `web_domain` varchar(20) NOT NULL,
  `web_nama` varchar(20) NOT NULL,
  `web_favicon` varchar(50) NOT NULL,
  `web_deskripsi` varchar(100) NOT NULL,
  `web_keyword` varchar(50) NOT NULL,
  `web_footer` varchar(50) NOT NULL,
  `web_tagline` varchar(50) NOT NULL,
  `web_logo` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_web`
--

INSERT INTO `tb_web` (`web_domain`, `web_nama`, `web_favicon`, `web_deskripsi`, `web_keyword`, `web_footer`, `web_tagline`, `web_logo`) VALUES
('http://eperpus.yu.de', 'E-Kiosk Perpustakaan', 'http://eperpus.yu.dev/public/dist/img/favicon.ico', 'E-Kiosk Perpustakaan PENS', 'e-kiosk, perpus, perpustakaan, PENS', 'Copyright © 2015 E-Kiosk Perpustakaan PENS', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `ci_sessions_id_ip` (`id`,`ip_address`), ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- Indexes for table `tb_berkas`
--
ALTER TABLE `tb_berkas`
 ADD PRIMARY KEY (`berkas_id`), ADD KEY `fk_relasi_userberkas` (`user_id`), ADD KEY `fk_relasi_berkastipe` (`berkas_download`);

--
-- Indexes for table `tb_buku`
--
ALTER TABLE `tb_buku`
 ADD PRIMARY KEY (`buku_id`);

--
-- Indexes for table `tb_hakakses`
--
ALTER TABLE `tb_hakakses`
 ADD PRIMARY KEY (`akses_id`);

--
-- Indexes for table `tb_ip_attempts`
--
ALTER TABLE `tb_ip_attempts`
 ADD PRIMARY KEY (`ip`), ADD KEY `last_failed_attempt` (`last_failed_attempt`), ADD KEY `number_of_attempts` (`number_of_attempts`);

--
-- Indexes for table `tb_jenis`
--
ALTER TABLE `tb_jenis`
 ADD PRIMARY KEY (`jenis_id`);

--
-- Indexes for table `tb_koleksi`
--
ALTER TABLE `tb_koleksi`
 ADD PRIMARY KEY (`koleksi_id`);

--
-- Indexes for table `tb_log`
--
ALTER TABLE `tb_log`
 ADD PRIMARY KEY (`log_id`), ADD KEY `fk_relasi_tipelog` (`menu_id`), ADD KEY `fk_relasi_userlog` (`user_id`);

--
-- Indexes for table `tb_menu`
--
ALTER TABLE `tb_menu`
 ADD PRIMARY KEY (`menu_id`);

--
-- Indexes for table `tb_remembered_users`
--
ALTER TABLE `tb_remembered_users`
 ADD PRIMARY KEY (`connection_id`), ADD UNIQUE KEY `token` (`token`), ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `tb_role`
--
ALTER TABLE `tb_role`
 ADD PRIMARY KEY (`role_id`), ADD UNIQUE KEY `role_nama` (`role_nama`);

--
-- Indexes for table `tb_roleakses`
--
ALTER TABLE `tb_roleakses`
 ADD PRIMARY KEY (`conn_id`), ADD KEY `akses_id` (`akses_id`), ADD KEY `role_id` (`role_id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
 ADD PRIMARY KEY (`user_id`), ADD KEY `fk_relasi_userrole` (`role_id`);

--
-- Indexes for table `tb_web`
--
ALTER TABLE `tb_web`
 ADD PRIMARY KEY (`web_domain`), ADD UNIQUE KEY `web_domain` (`web_domain`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_berkas`
--
ALTER TABLE `tb_berkas`
MODIFY `berkas_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_buku`
--
ALTER TABLE `tb_buku`
MODIFY `buku_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT for table `tb_hakakses`
--
ALTER TABLE `tb_hakakses`
MODIFY `akses_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=68;
--
-- AUTO_INCREMENT for table `tb_jenis`
--
ALTER TABLE `tb_jenis`
MODIFY `jenis_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `tb_koleksi`
--
ALTER TABLE `tb_koleksi`
MODIFY `koleksi_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `tb_log`
--
ALTER TABLE `tb_log`
MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `tb_menu`
--
ALTER TABLE `tb_menu`
MODIFY `menu_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=56;
--
-- AUTO_INCREMENT for table `tb_remembered_users`
--
ALTER TABLE `tb_remembered_users`
MODIFY `connection_id` int(11) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_role`
--
ALTER TABLE `tb_role`
MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=72;
--
-- AUTO_INCREMENT for table `tb_roleakses`
--
ALTER TABLE `tb_roleakses`
MODIFY `conn_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_berkas`
--
ALTER TABLE `tb_berkas`
ADD CONSTRAINT `fk_relasi_userberkas` FOREIGN KEY (`user_id`) REFERENCES `tb_user` (`user_id`);

--
-- Constraints for table `tb_log`
--
ALTER TABLE `tb_log`
ADD CONSTRAINT `fk_relasi_userlog` FOREIGN KEY (`user_id`) REFERENCES `tb_user` (`user_id`);

--
-- Constraints for table `tb_roleakses`
--
ALTER TABLE `tb_roleakses`
ADD CONSTRAINT `roleakses_aksesid` FOREIGN KEY (`akses_id`) REFERENCES `tb_hakakses` (`akses_id`) ON UPDATE CASCADE,
ADD CONSTRAINT `roleakses_roleid` FOREIGN KEY (`role_id`) REFERENCES `tb_role` (`role_id`) ON UPDATE CASCADE;

--
-- Constraints for table `tb_user`
--
ALTER TABLE `tb_user`
ADD CONSTRAINT `fk_relasi_userrole` FOREIGN KEY (`role_id`) REFERENCES `tb_role` (`role_id`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
