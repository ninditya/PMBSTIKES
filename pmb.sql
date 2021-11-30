-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2019 at 04:36 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pmb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `id_role` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `id_role`) VALUES
(1, 'admin', '2efbba576a07ab50bbae0a8b4c67f4c5', 1);

-- --------------------------------------------------------

--
-- Table structure for table `berkas`
--

CREATE TABLE `berkas` (
  `id` int(3) NOT NULL,
  `pmbid` varchar(255) NOT NULL,
  `namalengkap` varchar(255) NOT NULL,
  `pilihanprodi` varchar(255) NOT NULL,
  `jalur` varchar(255) NOT NULL,
  `kk` varchar(255) NOT NULL,
  `ijazah` varchar(255) NOT NULL,
  `skck` varchar(255) NOT NULL,
  `pernyataan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `calonmahasiswa`
--

CREATE TABLE `calonmahasiswa` (
  `id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `pmbid` varchar(50) NOT NULL,
  `pilihanprodi` varchar(50) NOT NULL,
  `jalur` varchar(255) NOT NULL,
  `gelombang` varchar(50) NOT NULL,
  `tahap` varchar(50) NOT NULL,
  `tahunmasuk` varchar(100) NOT NULL,
  `sumbangan` varchar(100) NOT NULL,
  `namalengkap` varchar(100) NOT NULL,
  `foto` varchar(500) NOT NULL,
  `tempatlahir` varchar(20) NOT NULL,
  `tanggallahir` date NOT NULL,
  `jeniskelamin` varchar(10) NOT NULL,
  `tinggi` int(11) NOT NULL,
  `berat` int(11) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `kewarganegaraan` varchar(20) NOT NULL,
  `jalan` varchar(100) NOT NULL,
  `provinsi` varchar(100) NOT NULL,
  `kabupaten` varchar(100) NOT NULL,
  `kodepos` varchar(10) NOT NULL,
  `notelpon` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `asalsekolah` varchar(100) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `jalansekolah` varchar(100) NOT NULL,
  `provinsisekolah` varchar(100) NOT NULL,
  `kabupatensekolah` varchar(100) NOT NULL,
  `tahunlulus` varchar(100) NOT NULL,
  `namawali` varchar(100) NOT NULL,
  `namaibukandung` varchar(100) NOT NULL,
  `jalanwali` varchar(100) NOT NULL,
  `provinsiwali` varchar(100) NOT NULL,
  `kabupatenwali` varchar(100) NOT NULL,
  `pekerjaanwali` varchar(100) NOT NULL,
  `notelponwali` varchar(20) NOT NULL,
  `ujikes` varchar(255) NOT NULL,
  `tpa` varchar(255) NOT NULL,
  `wawancara` varchar(255) NOT NULL,
  `pewawancara` varchar(255) NOT NULL,
  `hasil` varchar(255) NOT NULL,
  `kk` varchar(255) NOT NULL,
  `ijazah` varchar(255) NOT NULL,
  `skck` varchar(255) NOT NULL,
  `pernyataan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `calonmahasiswa`
--

INSERT INTO `calonmahasiswa` (`id`, `tanggal`, `pmbid`, `pilihanprodi`, `jalur`, `gelombang`, `tahap`, `tahunmasuk`, `sumbangan`, `namalengkap`, `foto`, `tempatlahir`, `tanggallahir`, `jeniskelamin`, `tinggi`, `berat`, `agama`, `kewarganegaraan`, `jalan`, `provinsi`, `kabupaten`, `kodepos`, `notelpon`, `email`, `asalsekolah`, `jurusan`, `jalansekolah`, `provinsisekolah`, `kabupatensekolah`, `tahunlulus`, `namawali`, `namaibukandung`, `jalanwali`, `provinsiwali`, `kabupatenwali`, `pekerjaanwali`, `notelponwali`, `ujikes`, `tpa`, `wawancara`, `pewawancara`, `hasil`, `kk`, `ijazah`, `skck`, `pernyataan`) VALUES
(36, '2018-10-17', ' 194-0001 ', 'Sarjana Keperawatan', 'PMDP', '0', '1', '2019/2020', '6000000', ' Yohana Wahyu Pertiwi ', 'default.jpg', 'Sleman', '2001-09-25', 'Wanita', 157, 40, 'Kristen', 'WNI', ' Gancahan VIII Sidomulyo Godean \r\n', '34', 'KABUPATEN SLEMAN', '', '085647446562', '', ' SMA Pangudi Luhur Sedayu ', 'IPA', 'Kulon Progo', '34', 'KABUPATEN KULON PROGO', '2019', '', ' Sarjiati ', 'Kulon Progo', '34', 'KABUPATEN KULON PROGO', 'PNS', '', 'DS', 'MDS', ' Ya, Minat sendiri  ', 'Priyani H', '', '', '', '', ''),
(37, '2018-10-17', ' 194-0002 ', 'Sarjana Keperawatan', 'PMDP', '0', '10', '2019/2020', '6000000', ' Budiawan Adi Prakoso ', 'default.jpg', 'Jepara', '2001-03-13', 'Pria', 172, 68, 'Kristen', 'WNI', 'Dk. Paluan, Ds. Karanggondang ', '33', 'KABUPATEN JEPARA', '', '089538599787', '', ' SMAN 1 Mlonggo ', 'IPA', 'Jepara', '33', 'KABUPATEN JEPARA', '2019', '', ' Sutarmi ', 'Jepara', '33', 'KABUPATEN JEPARA', 'Guru', '', 'DS', 'KDS', ' Minat sendiri ', 'Priyani H', '', '', '', '', ''),
(38, '2018-10-15', ' 192-0001 ', 'Sarjana Keperawatan', 'Reguler', '0', '1', '2019/2020', '9000000', ' Berliana Aurelvia SS ', 'default.jpg', 'Purworejo', '2000-11-29', 'Wanita', 154, 85, 'Kristen', 'WNI', ' Jl. Sawunggalih No.63 Kutoarjo ', '33', '0', '', '082135830355', '', ' SMA Stella Duce 2 ', 'IPA', ' Yogyakarta ', '34', '0', '2019', '', ' Warsiyah ', 'Porworejo', '33', '0', ' Wiraswasta', '', 'DS', 'MDS', ' Motivasi Tinggi ', 'Priyani H', 'L', '', '', '', ''),
(39, '2018-10-17', '192-0002', 'Sarjana Keperawatan', 'Reguler', '0', '1', '2019/2020', '9000000', ' Galuh Novita Sari ', 'default.jpg', 'Gunung Kidul', '2000-11-19', 'Wanita', 153, 86, 'Kristen', 'WNI', ' Ngipak, Karangmojo RT.1/RW.1', '34', 'KABUPATEN GUNUNG KIDUL', '', '082114249618', '', 'SMA', 'IPS', 'Gunung Kidul', '34', 'KABUPATEN GUNUNG KIDUL', '2019', '', '', '', '', '0', '', '', 'DS', '', ' Baik dalam menjawab dan mudah menjawab pertanyaan, punya jiwa panggilan pelayanan ', 'Nurlia Ikaningtyas', 'L', '', '', '', ''),
(40, '2018-08-27', ' 191-0001 ', 'Diploma 3 Keperawatan', 'Reguler', '0', '2', '2019/2020', '7000000', ' Shintiaga Dewi Prastyaningrum ', 'default.jpg', ' Kulon Progo ', '1999-08-13', 'Wanita', 147, 55, 'Kristen', 'WNI', ' Metobayan Salamrejo, Sentolo \r\n', '34', 'KABUPATEN KULON PROGO', '', '085640617899', '', ' SMK Bopkri Wates ', 'KEPERAWATAN', ' Kulon Progo ', '34', 'KABUPATEN KULON PROGO', '2019', '', '', '', '', '0', '', '', 'DS', 'MDS', ' Ya, Niat kuat ', 'Ch. Yeni K', 'L', '', '', '', ''),
(42, '2018-10-23', '192-0004', 'Sarjana Keperawatan', 'Reguler', '0', '2', '2019/2020', '9000000', 'Lenthi Kristiani', 'default.jpg', 'Bengkulu', '1999-05-15', 'Wanita', 149, 48, 'Kristen', 'WNI', 'DS-11 Bukit Indah', '17', 'KABUPATEN BENGKULU UTARA', '', '082381191611', '', 'SMK Bopkri Wates', 'KEPERAWATAN', 'Wates', '34', 'KABUPATEN KULON PROGO', '2019', '', 'Lenthi Kristiani', 'Bengkulu Utara', '17', 'KABUPATEN BENGKULU UTARA', 'Wiraswasta', '', 'DS', '', 'Ya, Perfomance baik Niat tinggi', 'CH. Hatri I', 'L', '', '', '', ''),
(43, '2018-10-17', '192-0003', 'Sarjana Keperawatan', 'Reguler', '0', '1', '2019/2020', '9000000', 'Ricardo Nunes Dos Santos', 'default.jpg', 'Dili', '1998-01-22', 'Pria', 165, 52, 'Katolik', 'WNA', 'Dili, Timor Leste', '', '0', '', '082114249618', '', 'SMK Rencana Sakti', 'KEPERAWATAN', 'Kupang', '53', 'KABUPATEN KUPANG', '2019', '', 'Fernanda Nunes', 'Dili, Timor Leste', '', '0', 'Wiraswasta', '', 'DS', 'MDS', ' Ya, Motivasi Tinggi ', 'Nurlia Ikaningtyas', 'L', '', '', '', ''),
(44, '2018-10-27', '192-0005', 'Sarjana Keperawatan', 'Reguler', '0', '2', '2019/2020', '9000000', 'Mutiara Putri Kinnasih', 'default.jpg', 'Yogyakarta', '2000-11-22', 'Wanita', 159, 58, 'Kristen', 'WNI', 'Pringgonkusuman GT 11/463 Gedongtengen', '34', 'KOTA YOGYAKARTA', '', '082223139503', '', 'SMA Budya Wacana', 'IPS', 'Yogyakarta', '34', 'KOTA YOGYAKARTA', '2019', '', 'Eny Indriastuti', 'Yogyakarta', '34', 'KOTA YOGYAKARTA', 'Karyawan Swasta', '', 'DS', '', 'Ya, Motivasi ok', 'Ch. Yeni K', 'L', '', '', '', ''),
(45, '2018-10-27', '192-0006', 'Sarjana Keperawatan', 'Reguler', '0', '2', '2019/2020', '9000000', 'Maria Doane Fiorensa', 'default.jpg', 'Bogor', '2000-09-26', 'Wanita', 160, 70, 'Kristen', 'WNI', 'Joho Blok III Condongcatur Depok', '34', 'KABUPATEN SLEMAN', '', '0895363508259', '', 'SMA Budya Wacana', 'IPS', 'Yogyakarta', '34', 'KOTA YOGYAKARTA', '2019', '', 'Titin Kartikawati', 'Yogyakarta', '34', 'KABUPATEN SLEMAN', 'Wiraswasta', '', 'DS', '', 'Ya, Ingin jadi perawat', 'Ch. Yeni K', 'L', '', '', '', ''),
(46, '2018-10-31', '192-0007', 'Sarjana Keperawatan', 'Reguler', '0', '4', '2019/2020', '9000000', 'Bernadus Aldo William Nugraha', 'default.jpg', 'Bandar Lampung', '2001-10-01', 'Pria', 167, 62, 'Kristen', 'WNI', 'Prasanti Blok A2 No. 26 Kel. Metro Kec. Metro Pusat', '18', 'KOTA METRO', '', '082387324146', '', 'SMA Kristen 1 Metro', 'IPS', 'Metro', '18', 'KOTA METRO', '2019', '', 'Th. Eko Setiawati', 'Metro', '18', 'KOTA METRO', 'Perawat', '', 'DS', '', 'Motivasi tinggi', 'Yusup ES', 'L', '', '', '', ''),
(47, '2018-10-31', '191-0002', 'Diploma 3 Keperawatan', 'Reguler', '0', '4', '2019/2020', '7000000', 'Theresia Anggrita Christy', 'default.jpg', 'Banjar Sari', '1999-06-22', 'Wanita', 0, 52, 'Kristen', 'WNI', 'Sedangayu Padang Ratu', '18', 'KABUPATEN LAMPUNG TENGAH', '', '08117222061', '', 'SMA Xaverius Pringsewu', 'IPA', 'Pringsewu', '18', 'KABUPATEN PRINGSEWU', '2019', '', 'Rut Marta', 'Sedangayu Padang Ratu', '18', 'KABUPATEN LAMPUNG TENGAH', 'Bidan', '', 'DS', 'MDS', 'Motivasi perawat profesional', 'Antonius Yogi', 'L', '', '', '', ''),
(48, '2018-11-09', '191-0003', 'Diploma 3 Keperawatan', 'Reguler', '0', '4', '2019/2020', '7000000', 'Leavinka Christabita', 'default.jpg', 'Gunungkidul', '2001-02-08', 'Wanita', 152, 44, 'Kristen', 'WNI', 'Logandeng Playen', '34', 'KABUPATEN GUNUNG KIDUL', '', '081328556365', '', 'SMAN 2 Wonosari', 'IPS', 'Gunungkidul', '34', 'KABUPATEN GUNUNG KIDUL', '2019', '', 'Andika Wahyu Widiastuti', 'Logandeng Playen', '34', 'KABUPATEN GUNUNG KIDUL', 'Karyawan Swasta', '', 'DS', 'MDS', 'Bisa diterima', 'Wayan S', 'L', '', '', '', ''),
(49, '2018-11-17', '191-0004', 'Diploma 3 Keperawatan', 'Reguler', '0', '6', '2019/2020', '7000000', 'Mentari Cahyaningtyas', 'default.jpg', 'Banyuwangi', '2001-11-19', 'Wanita', 149, 47, 'Kristen', 'WNI', 'Magersari I Bendan Manisrenggo', '33', 'KABUPATEN KLATEN', '', '082241682993', '', 'SMAN 1 Jogonalan', 'IPS', 'Klaten', '33', 'KABUPATEN KLATEN', '2019', '', 'Suratmi', 'Magersari I Bendan Manisrenggo', '33', 'KABUPATEN KLATEN', 'Guru', '', 'DS', 'MDS', 'Motivasi sendiri', 'Priyani H', '', '', '', '', ''),
(50, '2018-11-23', '191-0005', 'Diploma 3 Keperawatan', 'Reguler', '0', '6', '2019/2020', '7000000', 'Resa Oktaviani Nur Irawan', 'default.jpg', 'Gunung Kidul', '2000-10-18', 'Wanita', 163, 53, 'Islam', 'WNI', 'Karang Tengah Sumberwungu Baron', '34', 'KABUPATEN GUNUNG KIDUL', '', '082242481032', '', 'SMK Kesehatan Wonosari', 'KEPERAWATAN', 'Gunung Kidul', '34', 'KABUPATEN GUNUNG KIDUL', '2019', 'Agung Subekti', '', 'Karang Tengah Sumberwungu Baron', '34', 'KABUPATEN GUNUNG KIDUL', 'Wiraswasta', '', '', '', '', '', '', '', '', '', ''),
(51, '2018-11-26', '193-0001', 'Sarjana Keperawatan', 'RPL', '0', '6', '2019/2020', '9000000', 'Aprilia Raraswari', 'default.jpg', 'Liquisa', '1994-04-11', 'Wanita', 157, 47, 'Kristen', 'WNI', 'Jl. Jendral Sudirman No 71 Kec. Sorong Manoi', '91', 'KOTA SORONG', '', '08114882210', '', 'POLTEKKES Kemenkes Sorong', 'KEPERAWATAN', 'Sorong', '91', 'KABUPATEN SORONG', '2015', '', 'Neni Lemanawati', 'Jl. Jendral Sudirman No 71 Kec. Sorong Manoi', '91', 'KOTA SORONG', 'PNS', '', 'DS', 'MDS', 'Dapat Diterima', 'Niken WN Palupi', '', '', '', '', ''),
(52, '2018-11-26', '193-0002', 'Sarjana Keperawatan', 'RPL', '0', '12', '2019/2020', '9000000', 'Agnes Raijuvin', 'default.jpg', 'Sukoharjo', '1997-07-11', 'Wanita', 153, 46, 'Kristen', 'WNI', 'Brontowiryan, Ds. Ngabeyan', '33', 'KABUPATEN SUKOHARJO', '', '085799548086', '', 'STIKES BETHESDA YAKKUM', 'D3 Keperawatan', 'Yogyakarta', '34', 'KOTA YOGYAKARTA', '2018', 'Drs. Mulyata', '', 'Brontowiryan, Ds. Ngabeyan', '33', 'KABUPATEN SUKOHARJO', 'Karyawan Swasta', '', 'DS', 'MDS', '', '', '', '', '', '', ''),
(53, '2019-01-19', '193-0003', 'Sarjana Keperawatan', 'RPL', '0', '12', '2019/2020', '9000000', 'Rivan Reinaldi Mangiwa', 'default.jpg', 'Parepare', '1996-03-19', 'Pria', 168, 64, 'Kristen', 'WNI', 'Jl. A. Makkulau No. 110, Bukit Indah', '73', 'KOTA PAREPARE', '', '081338737613', '', 'AKPER FATIMA PAREPARE', 'D3 Keperawatan', 'Parepare', '73', 'KOTA PAREPARE', '2018', '', 'Lince Mangiwa', 'Parepare', '73', 'KOTA PAREPARE', 'IRT', '', 'DS', 'MDS', 'Ya, minat baik', 'Ch. Yeni K', '', '', '', '', ''),
(54, '2019-01-10', '194-0003', 'Sarjana Keperawatan', 'PMDP', '0', '10', '2019/2020', '6000000', 'Diah Isnawati', 'default.jpg', 'Gunung Kidul', '2001-08-05', 'Wanita', 150, 50, 'Islam', 'WNI', '-', '34', 'KABUPATEN GUNUNG KIDUL', '', '0', '', 'SMAN 1 Rongkop', 'IPA', 'Gunung Kidul', '34', 'KABUPATEN GUNUNG KIDUL', '2019', '', 'Sirin', 'Gunung Kidul', '34', 'KABUPATEN GUNUNG KIDUL', 'Petani', '', 'DS', 'MDS', 'Minat Kuat', 'Nurlia Ikaningtyas', '', '', '', '', ''),
(55, '0009-11-15', '194-0004', 'Sarjana Keperawatan', 'PMDP', '0', '11', '2019/2020', '6000000', 'Fernandes Agus Setia Putra', 'default.jpg', 'Ketapang', '2001-08-01', 'Pria', 175, 56, 'Katolik', 'WNI', 'Ds. Awatan Marau', '61', 'KABUPATEN KETAPANG', '', '082351190776', '', 'SMA PL. St. Yohanes', 'IPA', 'Ketapang', '61', 'KABUPATEN KETAPANG', '2019', '', 'Yohana', 'Ds. Awatan Marau', '61', 'KABUPATEN KETAPANG', 'PNS', '', 'DS', 'MDS', 'Motivasi tinggi', 'Isnanto', '', '', '', '', ''),
(56, '2018-11-23', '191-0006', 'Diploma 3 Keperawatan', 'Reguler', '0', '6', '2019/2020', '7000000', 'Nur Indah Sutayanti', 'default.jpg', 'Wonosobo', '2000-12-05', 'Wanita', 163, 43, 'Islam', 'WNI', 'Purbosari', '34', 'KABUPATEN GUNUNG KIDUL', '', '083106895652', '', 'SMK Kesehatan Wonosari', 'KEPERAWATAN', 'Gunung Kidul', '34', 'KABUPATEN GUNUNG KIDUL', '2019', '', 'Nurhidayati', 'Purbosari', '34', 'KABUPATEN GUNUNG KIDUL', 'TNI', '', '', '', 'Sopan Mau Belajar', 'Priyani H', 'L', '', '', '', ''),
(57, '2018-11-24', '191-0007', 'Diploma 3 Keperawatan', 'Reguler', '0', '6', '2019/2020', '7000000', 'Dita Oktavia', 'default.jpg', 'Gunungkidul', '2000-10-14', 'Wanita', 159, 50, 'Islam', 'WNI', 'Bulu Bejiharjo Karangmojo', '34', 'KABUPATEN GUNUNG KIDUL', '', '082313009700', '', 'SMK Kesehatan Wonosari', 'KEPERAWATAN', 'Gunung Kidul', '34', 'KABUPATEN GUNUNG KIDUL', '2019', '', 'Sumarsih', 'Bulu Bejiharjo Karangmojo', '34', 'KABUPATEN GUNUNG KIDUL', 'Wiraswasta', '', '', '', 'Dapat Diterima', 'Niken WN Palupi', 'L', '', '', '', ''),
(58, '2019-12-12', '123', 'Sarjana Keperawatan Alih Jenjang', 'PMDP', '1', '1', '2018/2019', '1234', 'Ninin', 'Ninin.jpg', 'SLEMAN', '2019-12-13', 'Pria', 14, 21, 'Kristen', 'WNI', 'qwertyuiop', '34', 'KABUPATEN KULON PROGO', '123', '123', 'ulala@yahoo.com', 'asc', 'dda', 'adcf', '61', 'KABUPATEN SANGGAU', '2009', 'asd', 'sd,mn', 'ms', '62', 'KABUPATEN PULANG PISAU', 'aas', 'sk', 'KDS', 'KDS', 'xsm', 'Ruthy Ng', 'lll', 'Ninin.pdf', 'Ninin.pdf', 'Ninin.pdf', 'Ninin.pdf'),
(59, '2019-12-20', 'asdfghjklmn', 'Pendidikan Profesi Ners', 'Reguler', '1', '6', '2019/2020', '1', 'asdfghjkl', 'default.jpg', 'wewe', '2020-01-03', 'Wanita', 0, 0, 'Kristen', 'WNI', 'qwertyuiop', '63', 'KABUPATEN KOTA BARU', '123', '987654', 'ulala@yahoo.com', '', '', '', '', '0', '', '', '', '', '', '0', '', '', '', '', '', '', '', 'asdfghjkl.pdf', 'asdfghjkl.pdf', 'asdfghjkl.pdf', 'asdfghjkl.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `gelombang`
--

CREATE TABLE `gelombang` (
  `id` int(11) NOT NULL,
  `gelombang` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gelombang`
--

INSERT INTO `gelombang` (`id`, `gelombang`) VALUES
(1, '0'),
(2, '1'),
(3, '2'),
(4, '3'),
(5, '4'),
(6, '5');

-- --------------------------------------------------------

--
-- Table structure for table `jalur`
--

CREATE TABLE `jalur` (
  `id` int(11) NOT NULL,
  `jalur` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jalur`
--

INSERT INTO `jalur` (`id`, `jalur`) VALUES
(1, 'Reguler'),
(2, 'PMDP'),
(3, 'RPL');

-- --------------------------------------------------------

--
-- Table structure for table `list_pengumuman`
--

CREATE TABLE `list_pengumuman` (
  `id` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `admin` varchar(30) NOT NULL,
  `berkas` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `list_pengumuman`
--

INSERT INTO `list_pengumuman` (`id`, `judul`, `admin`, `berkas`) VALUES
(1, 'Pengumuman Penerimaan Mahasiswa Baru', 'Ninditya', 'panduan-pmb-20191-ns_XI21.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `pewawancara`
--

CREATE TABLE `pewawancara` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pewawancara`
--

INSERT INTO `pewawancara` (`id`, `nama`) VALUES
(1, 'Vivi Retno I'),
(2, 'Priyani H'),
(3, 'Nurlia Ikaningtyas'),
(4, 'CH. Hatri I'),
(5, 'Ch. Yeni K'),
(6, 'Yusup ES'),
(7, 'Isnanto'),
(8, 'Antonius Yogi'),
(9, 'Hadi Wahyono'),
(10, 'Nimsi Melati'),
(11, 'Enik L'),
(12, 'Ruthy Ng'),
(13, 'Niken WN Palupi'),
(14, 'Wayan S');

-- --------------------------------------------------------

--
-- Table structure for table `prodi`
--

CREATE TABLE `prodi` (
  `id` int(11) NOT NULL,
  `prodi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prodi`
--

INSERT INTO `prodi` (`id`, `prodi`) VALUES
(1, 'Sarjana Keperawatan'),
(2, 'Diploma 3 Keperawatan'),
(3, 'Sarjana Keperawatan Alih Jenjang'),
(4, 'Pendidikan Profesi Ners');

-- --------------------------------------------------------

--
-- Table structure for table `provinces`
--

CREATE TABLE `provinces` (
  `id` char(2) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `provinces`
--

INSERT INTO `provinces` (`id`, `name`) VALUES
('11', 'ACEH'),
('12', 'SUMATERA UTARA'),
('13', 'SUMATERA BARAT'),
('14', 'RIAU'),
('15', 'JAMBI'),
('16', 'SUMATERA SELATAN'),
('17', 'BENGKULU'),
('18', 'LAMPUNG'),
('19', 'KEPULAUAN BANGKA BELITUNG'),
('21', 'KEPULAUAN RIAU'),
('31', 'DKI JAKARTA'),
('32', 'JAWA BARAT'),
('33', 'JAWA TENGAH'),
('34', 'DI YOGYAKARTA'),
('35', 'JAWA TIMUR'),
('36', 'BANTEN'),
('51', 'BALI'),
('52', 'NUSA TENGGARA BARAT'),
('53', 'NUSA TENGGARA TIMUR'),
('61', 'KALIMANTAN BARAT'),
('62', 'KALIMANTAN TENGAH'),
('63', 'KALIMANTAN SELATAN'),
('64', 'KALIMANTAN TIMUR'),
('65', 'KALIMANTAN UTARA'),
('71', 'SULAWESI UTARA'),
('72', 'SULAWESI TENGAH'),
('73', 'SULAWESI SELATAN'),
('74', 'SULAWESI TENGGARA'),
('75', 'GORONTALO'),
('76', 'SULAWESI BARAT'),
('81', 'MALUKU'),
('82', 'MALUKU UTARA'),
('91', 'PAPUA BARAT'),
('94', 'PAPUA');

-- --------------------------------------------------------

--
-- Table structure for table `regencies`
--

CREATE TABLE `regencies` (
  `id` char(4) COLLATE utf8_unicode_ci NOT NULL,
  `province_id` char(2) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `regencies`
--

INSERT INTO `regencies` (`id`, `province_id`, `name`) VALUES
('1101', '11', 'KABUPATEN SIMEULUE'),
('1102', '11', 'KABUPATEN ACEH SINGKIL'),
('1103', '11', 'KABUPATEN ACEH SELATAN'),
('1104', '11', 'KABUPATEN ACEH TENGGARA'),
('1105', '11', 'KABUPATEN ACEH TIMUR'),
('1106', '11', 'KABUPATEN ACEH TENGAH'),
('1107', '11', 'KABUPATEN ACEH BARAT'),
('1108', '11', 'KABUPATEN ACEH BESAR'),
('1109', '11', 'KABUPATEN PIDIE'),
('1110', '11', 'KABUPATEN BIREUEN'),
('1111', '11', 'KABUPATEN ACEH UTARA'),
('1112', '11', 'KABUPATEN ACEH BARAT DAYA'),
('1113', '11', 'KABUPATEN GAYO LUES'),
('1114', '11', 'KABUPATEN ACEH TAMIANG'),
('1115', '11', 'KABUPATEN NAGAN RAYA'),
('1116', '11', 'KABUPATEN ACEH JAYA'),
('1117', '11', 'KABUPATEN BENER MERIAH'),
('1118', '11', 'KABUPATEN PIDIE JAYA'),
('1171', '11', 'KOTA BANDA ACEH'),
('1172', '11', 'KOTA SABANG'),
('1173', '11', 'KOTA LANGSA'),
('1174', '11', 'KOTA LHOKSEUMAWE'),
('1175', '11', 'KOTA SUBULUSSALAM'),
('1201', '12', 'KABUPATEN NIAS'),
('1202', '12', 'KABUPATEN MANDAILING NATAL'),
('1203', '12', 'KABUPATEN TAPANULI SELATAN'),
('1204', '12', 'KABUPATEN TAPANULI TENGAH'),
('1205', '12', 'KABUPATEN TAPANULI UTARA'),
('1206', '12', 'KABUPATEN TOBA SAMOSIR'),
('1207', '12', 'KABUPATEN LABUHAN BATU'),
('1208', '12', 'KABUPATEN ASAHAN'),
('1209', '12', 'KABUPATEN SIMALUNGUN'),
('1210', '12', 'KABUPATEN DAIRI'),
('1211', '12', 'KABUPATEN KARO'),
('1212', '12', 'KABUPATEN DELI SERDANG'),
('1213', '12', 'KABUPATEN LANGKAT'),
('1214', '12', 'KABUPATEN NIAS SELATAN'),
('1215', '12', 'KABUPATEN HUMBANG HASUNDUTAN'),
('1216', '12', 'KABUPATEN PAKPAK BHARAT'),
('1217', '12', 'KABUPATEN SAMOSIR'),
('1218', '12', 'KABUPATEN SERDANG BEDAGAI'),
('1219', '12', 'KABUPATEN BATU BARA'),
('1220', '12', 'KABUPATEN PADANG LAWAS UTARA'),
('1221', '12', 'KABUPATEN PADANG LAWAS'),
('1222', '12', 'KABUPATEN LABUHAN BATU SELATAN'),
('1223', '12', 'KABUPATEN LABUHAN BATU UTARA'),
('1224', '12', 'KABUPATEN NIAS UTARA'),
('1225', '12', 'KABUPATEN NIAS BARAT'),
('1271', '12', 'KOTA SIBOLGA'),
('1272', '12', 'KOTA TANJUNG BALAI'),
('1273', '12', 'KOTA PEMATANG SIANTAR'),
('1274', '12', 'KOTA TEBING TINGGI'),
('1275', '12', 'KOTA MEDAN'),
('1276', '12', 'KOTA BINJAI'),
('1277', '12', 'KOTA PADANGSIDIMPUAN'),
('1278', '12', 'KOTA GUNUNGSITOLI'),
('1301', '13', 'KABUPATEN KEPULAUAN MENTAWAI'),
('1302', '13', 'KABUPATEN PESISIR SELATAN'),
('1303', '13', 'KABUPATEN SOLOK'),
('1304', '13', 'KABUPATEN SIJUNJUNG'),
('1305', '13', 'KABUPATEN TANAH DATAR'),
('1306', '13', 'KABUPATEN PADANG PARIAMAN'),
('1307', '13', 'KABUPATEN AGAM'),
('1308', '13', 'KABUPATEN LIMA PULUH KOTA'),
('1309', '13', 'KABUPATEN PASAMAN'),
('1310', '13', 'KABUPATEN SOLOK SELATAN'),
('1311', '13', 'KABUPATEN DHARMASRAYA'),
('1312', '13', 'KABUPATEN PASAMAN BARAT'),
('1371', '13', 'KOTA PADANG'),
('1372', '13', 'KOTA SOLOK'),
('1373', '13', 'KOTA SAWAH LUNTO'),
('1374', '13', 'KOTA PADANG PANJANG'),
('1375', '13', 'KOTA BUKITTINGGI'),
('1376', '13', 'KOTA PAYAKUMBUH'),
('1377', '13', 'KOTA PARIAMAN'),
('1401', '14', 'KABUPATEN KUANTAN SINGINGI'),
('1402', '14', 'KABUPATEN INDRAGIRI HULU'),
('1403', '14', 'KABUPATEN INDRAGIRI HILIR'),
('1404', '14', 'KABUPATEN PELALAWAN'),
('1405', '14', 'KABUPATEN S I A K'),
('1406', '14', 'KABUPATEN KAMPAR'),
('1407', '14', 'KABUPATEN ROKAN HULU'),
('1408', '14', 'KABUPATEN BENGKALIS'),
('1409', '14', 'KABUPATEN ROKAN HILIR'),
('1410', '14', 'KABUPATEN KEPULAUAN MERANTI'),
('1471', '14', 'KOTA PEKANBARU'),
('1473', '14', 'KOTA D U M A I'),
('1501', '15', 'KABUPATEN KERINCI'),
('1502', '15', 'KABUPATEN MERANGIN'),
('1503', '15', 'KABUPATEN SAROLANGUN'),
('1504', '15', 'KABUPATEN BATANG HARI'),
('1505', '15', 'KABUPATEN MUARO JAMBI'),
('1506', '15', 'KABUPATEN TANJUNG JABUNG TIMUR'),
('1507', '15', 'KABUPATEN TANJUNG JABUNG BARAT'),
('1508', '15', 'KABUPATEN TEBO'),
('1509', '15', 'KABUPATEN BUNGO'),
('1571', '15', 'KOTA JAMBI'),
('1572', '15', 'KOTA SUNGAI PENUH'),
('1601', '16', 'KABUPATEN OGAN KOMERING ULU'),
('1602', '16', 'KABUPATEN OGAN KOMERING ILIR'),
('1603', '16', 'KABUPATEN MUARA ENIM'),
('1604', '16', 'KABUPATEN LAHAT'),
('1605', '16', 'KABUPATEN MUSI RAWAS'),
('1606', '16', 'KABUPATEN MUSI BANYUASIN'),
('1607', '16', 'KABUPATEN BANYU ASIN'),
('1608', '16', 'KABUPATEN OGAN KOMERING ULU SELATAN'),
('1609', '16', 'KABUPATEN OGAN KOMERING ULU TIMUR'),
('1610', '16', 'KABUPATEN OGAN ILIR'),
('1611', '16', 'KABUPATEN EMPAT LAWANG'),
('1612', '16', 'KABUPATEN PENUKAL ABAB LEMATANG ILIR'),
('1613', '16', 'KABUPATEN MUSI RAWAS UTARA'),
('1671', '16', 'KOTA PALEMBANG'),
('1672', '16', 'KOTA PRABUMULIH'),
('1673', '16', 'KOTA PAGAR ALAM'),
('1674', '16', 'KOTA LUBUKLINGGAU'),
('1701', '17', 'KABUPATEN BENGKULU SELATAN'),
('1702', '17', 'KABUPATEN REJANG LEBONG'),
('1703', '17', 'KABUPATEN BENGKULU UTARA'),
('1704', '17', 'KABUPATEN KAUR'),
('1705', '17', 'KABUPATEN SELUMA'),
('1706', '17', 'KABUPATEN MUKOMUKO'),
('1707', '17', 'KABUPATEN LEBONG'),
('1708', '17', 'KABUPATEN KEPAHIANG'),
('1709', '17', 'KABUPATEN BENGKULU TENGAH'),
('1771', '17', 'KOTA BENGKULU'),
('1801', '18', 'KABUPATEN LAMPUNG BARAT'),
('1802', '18', 'KABUPATEN TANGGAMUS'),
('1803', '18', 'KABUPATEN LAMPUNG SELATAN'),
('1804', '18', 'KABUPATEN LAMPUNG TIMUR'),
('1805', '18', 'KABUPATEN LAMPUNG TENGAH'),
('1806', '18', 'KABUPATEN LAMPUNG UTARA'),
('1807', '18', 'KABUPATEN WAY KANAN'),
('1808', '18', 'KABUPATEN TULANGBAWANG'),
('1809', '18', 'KABUPATEN PESAWARAN'),
('1810', '18', 'KABUPATEN PRINGSEWU'),
('1811', '18', 'KABUPATEN MESUJI'),
('1812', '18', 'KABUPATEN TULANG BAWANG BARAT'),
('1813', '18', 'KABUPATEN PESISIR BARAT'),
('1871', '18', 'KOTA BANDAR LAMPUNG'),
('1872', '18', 'KOTA METRO'),
('1901', '19', 'KABUPATEN BANGKA'),
('1902', '19', 'KABUPATEN BELITUNG'),
('1903', '19', 'KABUPATEN BANGKA BARAT'),
('1904', '19', 'KABUPATEN BANGKA TENGAH'),
('1905', '19', 'KABUPATEN BANGKA SELATAN'),
('1906', '19', 'KABUPATEN BELITUNG TIMUR'),
('1971', '19', 'KOTA PANGKAL PINANG'),
('2101', '21', 'KABUPATEN KARIMUN'),
('2102', '21', 'KABUPATEN BINTAN'),
('2103', '21', 'KABUPATEN NATUNA'),
('2104', '21', 'KABUPATEN LINGGA'),
('2105', '21', 'KABUPATEN KEPULAUAN ANAMBAS'),
('2171', '21', 'KOTA B A T A M'),
('2172', '21', 'KOTA TANJUNG PINANG'),
('3101', '31', 'KABUPATEN KEPULAUAN SERIBU'),
('3171', '31', 'KOTA JAKARTA SELATAN'),
('3172', '31', 'KOTA JAKARTA TIMUR'),
('3173', '31', 'KOTA JAKARTA PUSAT'),
('3174', '31', 'KOTA JAKARTA BARAT'),
('3175', '31', 'KOTA JAKARTA UTARA'),
('3201', '32', 'KABUPATEN BOGOR'),
('3202', '32', 'KABUPATEN SUKABUMI'),
('3203', '32', 'KABUPATEN CIANJUR'),
('3204', '32', 'KABUPATEN BANDUNG'),
('3205', '32', 'KABUPATEN GARUT'),
('3206', '32', 'KABUPATEN TASIKMALAYA'),
('3207', '32', 'KABUPATEN CIAMIS'),
('3208', '32', 'KABUPATEN KUNINGAN'),
('3209', '32', 'KABUPATEN CIREBON'),
('3210', '32', 'KABUPATEN MAJALENGKA'),
('3211', '32', 'KABUPATEN SUMEDANG'),
('3212', '32', 'KABUPATEN INDRAMAYU'),
('3213', '32', 'KABUPATEN SUBANG'),
('3214', '32', 'KABUPATEN PURWAKARTA'),
('3215', '32', 'KABUPATEN KARAWANG'),
('3216', '32', 'KABUPATEN BEKASI'),
('3217', '32', 'KABUPATEN BANDUNG BARAT'),
('3218', '32', 'KABUPATEN PANGANDARAN'),
('3271', '32', 'KOTA BOGOR'),
('3272', '32', 'KOTA SUKABUMI'),
('3273', '32', 'KOTA BANDUNG'),
('3274', '32', 'KOTA CIREBON'),
('3275', '32', 'KOTA BEKASI'),
('3276', '32', 'KOTA DEPOK'),
('3277', '32', 'KOTA CIMAHI'),
('3278', '32', 'KOTA TASIKMALAYA'),
('3279', '32', 'KOTA BANJAR'),
('3301', '33', 'KABUPATEN CILACAP'),
('3302', '33', 'KABUPATEN BANYUMAS'),
('3303', '33', 'KABUPATEN PURBALINGGA'),
('3304', '33', 'KABUPATEN BANJARNEGARA'),
('3305', '33', 'KABUPATEN KEBUMEN'),
('3306', '33', 'KABUPATEN PURWOREJO'),
('3307', '33', 'KABUPATEN WONOSOBO'),
('3308', '33', 'KABUPATEN MAGELANG'),
('3309', '33', 'KABUPATEN BOYOLALI'),
('3310', '33', 'KABUPATEN KLATEN'),
('3311', '33', 'KABUPATEN SUKOHARJO'),
('3312', '33', 'KABUPATEN WONOGIRI'),
('3313', '33', 'KABUPATEN KARANGANYAR'),
('3314', '33', 'KABUPATEN SRAGEN'),
('3315', '33', 'KABUPATEN GROBOGAN'),
('3316', '33', 'KABUPATEN BLORA'),
('3317', '33', 'KABUPATEN REMBANG'),
('3318', '33', 'KABUPATEN PATI'),
('3319', '33', 'KABUPATEN KUDUS'),
('3320', '33', 'KABUPATEN JEPARA'),
('3321', '33', 'KABUPATEN DEMAK'),
('3322', '33', 'KABUPATEN SEMARANG'),
('3323', '33', 'KABUPATEN TEMANGGUNG'),
('3324', '33', 'KABUPATEN KENDAL'),
('3325', '33', 'KABUPATEN BATANG'),
('3326', '33', 'KABUPATEN PEKALONGAN'),
('3327', '33', 'KABUPATEN PEMALANG'),
('3328', '33', 'KABUPATEN TEGAL'),
('3329', '33', 'KABUPATEN BREBES'),
('3371', '33', 'KOTA MAGELANG'),
('3372', '33', 'KOTA SURAKARTA'),
('3373', '33', 'KOTA SALATIGA'),
('3374', '33', 'KOTA SEMARANG'),
('3375', '33', 'KOTA PEKALONGAN'),
('3376', '33', 'KOTA TEGAL'),
('3401', '34', 'KABUPATEN KULON PROGO'),
('3402', '34', 'KABUPATEN BANTUL'),
('3403', '34', 'KABUPATEN GUNUNG KIDUL'),
('3404', '34', 'KABUPATEN SLEMAN'),
('3471', '34', 'KOTA YOGYAKARTA'),
('3501', '35', 'KABUPATEN PACITAN'),
('3502', '35', 'KABUPATEN PONOROGO'),
('3503', '35', 'KABUPATEN TRENGGALEK'),
('3504', '35', 'KABUPATEN TULUNGAGUNG'),
('3505', '35', 'KABUPATEN BLITAR'),
('3506', '35', 'KABUPATEN KEDIRI'),
('3507', '35', 'KABUPATEN MALANG'),
('3508', '35', 'KABUPATEN LUMAJANG'),
('3509', '35', 'KABUPATEN JEMBER'),
('3510', '35', 'KABUPATEN BANYUWANGI'),
('3511', '35', 'KABUPATEN BONDOWOSO'),
('3512', '35', 'KABUPATEN SITUBONDO'),
('3513', '35', 'KABUPATEN PROBOLINGGO'),
('3514', '35', 'KABUPATEN PASURUAN'),
('3515', '35', 'KABUPATEN SIDOARJO'),
('3516', '35', 'KABUPATEN MOJOKERTO'),
('3517', '35', 'KABUPATEN JOMBANG'),
('3518', '35', 'KABUPATEN NGANJUK'),
('3519', '35', 'KABUPATEN MADIUN'),
('3520', '35', 'KABUPATEN MAGETAN'),
('3521', '35', 'KABUPATEN NGAWI'),
('3522', '35', 'KABUPATEN BOJONEGORO'),
('3523', '35', 'KABUPATEN TUBAN'),
('3524', '35', 'KABUPATEN LAMONGAN'),
('3525', '35', 'KABUPATEN GRESIK'),
('3526', '35', 'KABUPATEN BANGKALAN'),
('3527', '35', 'KABUPATEN SAMPANG'),
('3528', '35', 'KABUPATEN PAMEKASAN'),
('3529', '35', 'KABUPATEN SUMENEP'),
('3571', '35', 'KOTA KEDIRI'),
('3572', '35', 'KOTA BLITAR'),
('3573', '35', 'KOTA MALANG'),
('3574', '35', 'KOTA PROBOLINGGO'),
('3575', '35', 'KOTA PASURUAN'),
('3576', '35', 'KOTA MOJOKERTO'),
('3577', '35', 'KOTA MADIUN'),
('3578', '35', 'KOTA SURABAYA'),
('3579', '35', 'KOTA BATU'),
('3601', '36', 'KABUPATEN PANDEGLANG'),
('3602', '36', 'KABUPATEN LEBAK'),
('3603', '36', 'KABUPATEN TANGERANG'),
('3604', '36', 'KABUPATEN SERANG'),
('3671', '36', 'KOTA TANGERANG'),
('3672', '36', 'KOTA CILEGON'),
('3673', '36', 'KOTA SERANG'),
('3674', '36', 'KOTA TANGERANG SELATAN'),
('5101', '51', 'KABUPATEN JEMBRANA'),
('5102', '51', 'KABUPATEN TABANAN'),
('5103', '51', 'KABUPATEN BADUNG'),
('5104', '51', 'KABUPATEN GIANYAR'),
('5105', '51', 'KABUPATEN KLUNGKUNG'),
('5106', '51', 'KABUPATEN BANGLI'),
('5107', '51', 'KABUPATEN KARANG ASEM'),
('5108', '51', 'KABUPATEN BULELENG'),
('5171', '51', 'KOTA DENPASAR'),
('5201', '52', 'KABUPATEN LOMBOK BARAT'),
('5202', '52', 'KABUPATEN LOMBOK TENGAH'),
('5203', '52', 'KABUPATEN LOMBOK TIMUR'),
('5204', '52', 'KABUPATEN SUMBAWA'),
('5205', '52', 'KABUPATEN DOMPU'),
('5206', '52', 'KABUPATEN BIMA'),
('5207', '52', 'KABUPATEN SUMBAWA BARAT'),
('5208', '52', 'KABUPATEN LOMBOK UTARA'),
('5271', '52', 'KOTA MATARAM'),
('5272', '52', 'KOTA BIMA'),
('5301', '53', 'KABUPATEN SUMBA BARAT'),
('5302', '53', 'KABUPATEN SUMBA TIMUR'),
('5303', '53', 'KABUPATEN KUPANG'),
('5304', '53', 'KABUPATEN TIMOR TENGAH SELATAN'),
('5305', '53', 'KABUPATEN TIMOR TENGAH UTARA'),
('5306', '53', 'KABUPATEN BELU'),
('5307', '53', 'KABUPATEN ALOR'),
('5308', '53', 'KABUPATEN LEMBATA'),
('5309', '53', 'KABUPATEN FLORES TIMUR'),
('5310', '53', 'KABUPATEN SIKKA'),
('5311', '53', 'KABUPATEN ENDE'),
('5312', '53', 'KABUPATEN NGADA'),
('5313', '53', 'KABUPATEN MANGGARAI'),
('5314', '53', 'KABUPATEN ROTE NDAO'),
('5315', '53', 'KABUPATEN MANGGARAI BARAT'),
('5316', '53', 'KABUPATEN SUMBA TENGAH'),
('5317', '53', 'KABUPATEN SUMBA BARAT DAYA'),
('5318', '53', 'KABUPATEN NAGEKEO'),
('5319', '53', 'KABUPATEN MANGGARAI TIMUR'),
('5320', '53', 'KABUPATEN SABU RAIJUA'),
('5321', '53', 'KABUPATEN MALAKA'),
('5371', '53', 'KOTA KUPANG'),
('6101', '61', 'KABUPATEN SAMBAS'),
('6102', '61', 'KABUPATEN BENGKAYANG'),
('6103', '61', 'KABUPATEN LANDAK'),
('6104', '61', 'KABUPATEN MEMPAWAH'),
('6105', '61', 'KABUPATEN SANGGAU'),
('6106', '61', 'KABUPATEN KETAPANG'),
('6107', '61', 'KABUPATEN SINTANG'),
('6108', '61', 'KABUPATEN KAPUAS HULU'),
('6109', '61', 'KABUPATEN SEKADAU'),
('6110', '61', 'KABUPATEN MELAWI'),
('6111', '61', 'KABUPATEN KAYONG UTARA'),
('6112', '61', 'KABUPATEN KUBU RAYA'),
('6171', '61', 'KOTA PONTIANAK'),
('6172', '61', 'KOTA SINGKAWANG'),
('6201', '62', 'KABUPATEN KOTAWARINGIN BARAT'),
('6202', '62', 'KABUPATEN KOTAWARINGIN TIMUR'),
('6203', '62', 'KABUPATEN KAPUAS'),
('6204', '62', 'KABUPATEN BARITO SELATAN'),
('6205', '62', 'KABUPATEN BARITO UTARA'),
('6206', '62', 'KABUPATEN SUKAMARA'),
('6207', '62', 'KABUPATEN LAMANDAU'),
('6208', '62', 'KABUPATEN SERUYAN'),
('6209', '62', 'KABUPATEN KATINGAN'),
('6210', '62', 'KABUPATEN PULANG PISAU'),
('6211', '62', 'KABUPATEN GUNUNG MAS'),
('6212', '62', 'KABUPATEN BARITO TIMUR'),
('6213', '62', 'KABUPATEN MURUNG RAYA'),
('6271', '62', 'KOTA PALANGKA RAYA'),
('6301', '63', 'KABUPATEN TANAH LAUT'),
('6302', '63', 'KABUPATEN KOTA BARU'),
('6303', '63', 'KABUPATEN BANJAR'),
('6304', '63', 'KABUPATEN BARITO KUALA'),
('6305', '63', 'KABUPATEN TAPIN'),
('6306', '63', 'KABUPATEN HULU SUNGAI SELATAN'),
('6307', '63', 'KABUPATEN HULU SUNGAI TENGAH'),
('6308', '63', 'KABUPATEN HULU SUNGAI UTARA'),
('6309', '63', 'KABUPATEN TABALONG'),
('6310', '63', 'KABUPATEN TANAH BUMBU'),
('6311', '63', 'KABUPATEN BALANGAN'),
('6371', '63', 'KOTA BANJARMASIN'),
('6372', '63', 'KOTA BANJAR BARU'),
('6401', '64', 'KABUPATEN PASER'),
('6402', '64', 'KABUPATEN KUTAI BARAT'),
('6403', '64', 'KABUPATEN KUTAI KARTANEGARA'),
('6404', '64', 'KABUPATEN KUTAI TIMUR'),
('6405', '64', 'KABUPATEN BERAU'),
('6409', '64', 'KABUPATEN PENAJAM PASER UTARA'),
('6411', '64', 'KABUPATEN MAHAKAM HULU'),
('6471', '64', 'KOTA BALIKPAPAN'),
('6472', '64', 'KOTA SAMARINDA'),
('6474', '64', 'KOTA BONTANG'),
('6501', '65', 'KABUPATEN MALINAU'),
('6502', '65', 'KABUPATEN BULUNGAN'),
('6503', '65', 'KABUPATEN TANA TIDUNG'),
('6504', '65', 'KABUPATEN NUNUKAN'),
('6571', '65', 'KOTA TARAKAN'),
('7101', '71', 'KABUPATEN BOLAANG MONGONDOW'),
('7102', '71', 'KABUPATEN MINAHASA'),
('7103', '71', 'KABUPATEN KEPULAUAN SANGIHE'),
('7104', '71', 'KABUPATEN KEPULAUAN TALAUD'),
('7105', '71', 'KABUPATEN MINAHASA SELATAN'),
('7106', '71', 'KABUPATEN MINAHASA UTARA'),
('7107', '71', 'KABUPATEN BOLAANG MONGONDOW UTARA'),
('7108', '71', 'KABUPATEN SIAU TAGULANDANG BIARO'),
('7109', '71', 'KABUPATEN MINAHASA TENGGARA'),
('7110', '71', 'KABUPATEN BOLAANG MONGONDOW SELATAN'),
('7111', '71', 'KABUPATEN BOLAANG MONGONDOW TIMUR'),
('7171', '71', 'KOTA MANADO'),
('7172', '71', 'KOTA BITUNG'),
('7173', '71', 'KOTA TOMOHON'),
('7174', '71', 'KOTA KOTAMOBAGU'),
('7201', '72', 'KABUPATEN BANGGAI KEPULAUAN'),
('7202', '72', 'KABUPATEN BANGGAI'),
('7203', '72', 'KABUPATEN MOROWALI'),
('7204', '72', 'KABUPATEN POSO'),
('7205', '72', 'KABUPATEN DONGGALA'),
('7206', '72', 'KABUPATEN TOLI-TOLI'),
('7207', '72', 'KABUPATEN BUOL'),
('7208', '72', 'KABUPATEN PARIGI MOUTONG'),
('7209', '72', 'KABUPATEN TOJO UNA-UNA'),
('7210', '72', 'KABUPATEN SIGI'),
('7211', '72', 'KABUPATEN BANGGAI LAUT'),
('7212', '72', 'KABUPATEN MOROWALI UTARA'),
('7271', '72', 'KOTA PALU'),
('7301', '73', 'KABUPATEN KEPULAUAN SELAYAR'),
('7302', '73', 'KABUPATEN BULUKUMBA'),
('7303', '73', 'KABUPATEN BANTAENG'),
('7304', '73', 'KABUPATEN JENEPONTO'),
('7305', '73', 'KABUPATEN TAKALAR'),
('7306', '73', 'KABUPATEN GOWA'),
('7307', '73', 'KABUPATEN SINJAI'),
('7308', '73', 'KABUPATEN MAROS'),
('7309', '73', 'KABUPATEN PANGKAJENE DAN KEPULAUAN'),
('7310', '73', 'KABUPATEN BARRU'),
('7311', '73', 'KABUPATEN BONE'),
('7312', '73', 'KABUPATEN SOPPENG'),
('7313', '73', 'KABUPATEN WAJO'),
('7314', '73', 'KABUPATEN SIDENRENG RAPPANG'),
('7315', '73', 'KABUPATEN PINRANG'),
('7316', '73', 'KABUPATEN ENREKANG'),
('7317', '73', 'KABUPATEN LUWU'),
('7318', '73', 'KABUPATEN TANA TORAJA'),
('7322', '73', 'KABUPATEN LUWU UTARA'),
('7325', '73', 'KABUPATEN LUWU TIMUR'),
('7326', '73', 'KABUPATEN TORAJA UTARA'),
('7371', '73', 'KOTA MAKASSAR'),
('7372', '73', 'KOTA PAREPARE'),
('7373', '73', 'KOTA PALOPO'),
('7401', '74', 'KABUPATEN BUTON'),
('7402', '74', 'KABUPATEN MUNA'),
('7403', '74', 'KABUPATEN KONAWE'),
('7404', '74', 'KABUPATEN KOLAKA'),
('7405', '74', 'KABUPATEN KONAWE SELATAN'),
('7406', '74', 'KABUPATEN BOMBANA'),
('7407', '74', 'KABUPATEN WAKATOBI'),
('7408', '74', 'KABUPATEN KOLAKA UTARA'),
('7409', '74', 'KABUPATEN BUTON UTARA'),
('7410', '74', 'KABUPATEN KONAWE UTARA'),
('7411', '74', 'KABUPATEN KOLAKA TIMUR'),
('7412', '74', 'KABUPATEN KONAWE KEPULAUAN'),
('7413', '74', 'KABUPATEN MUNA BARAT'),
('7414', '74', 'KABUPATEN BUTON TENGAH'),
('7415', '74', 'KABUPATEN BUTON SELATAN'),
('7471', '74', 'KOTA KENDARI'),
('7472', '74', 'KOTA BAUBAU'),
('7501', '75', 'KABUPATEN BOALEMO'),
('7502', '75', 'KABUPATEN GORONTALO'),
('7503', '75', 'KABUPATEN POHUWATO'),
('7504', '75', 'KABUPATEN BONE BOLANGO'),
('7505', '75', 'KABUPATEN GORONTALO UTARA'),
('7571', '75', 'KOTA GORONTALO'),
('7601', '76', 'KABUPATEN MAJENE'),
('7602', '76', 'KABUPATEN POLEWALI MANDAR'),
('7603', '76', 'KABUPATEN MAMASA'),
('7604', '76', 'KABUPATEN MAMUJU'),
('7605', '76', 'KABUPATEN MAMUJU UTARA'),
('7606', '76', 'KABUPATEN MAMUJU TENGAH'),
('8101', '81', 'KABUPATEN MALUKU TENGGARA BARAT'),
('8102', '81', 'KABUPATEN MALUKU TENGGARA'),
('8103', '81', 'KABUPATEN MALUKU TENGAH'),
('8104', '81', 'KABUPATEN BURU'),
('8105', '81', 'KABUPATEN KEPULAUAN ARU'),
('8106', '81', 'KABUPATEN SERAM BAGIAN BARAT'),
('8107', '81', 'KABUPATEN SERAM BAGIAN TIMUR'),
('8108', '81', 'KABUPATEN MALUKU BARAT DAYA'),
('8109', '81', 'KABUPATEN BURU SELATAN'),
('8171', '81', 'KOTA AMBON'),
('8172', '81', 'KOTA TUAL'),
('8201', '82', 'KABUPATEN HALMAHERA BARAT'),
('8202', '82', 'KABUPATEN HALMAHERA TENGAH'),
('8203', '82', 'KABUPATEN KEPULAUAN SULA'),
('8204', '82', 'KABUPATEN HALMAHERA SELATAN'),
('8205', '82', 'KABUPATEN HALMAHERA UTARA'),
('8206', '82', 'KABUPATEN HALMAHERA TIMUR'),
('8207', '82', 'KABUPATEN PULAU MOROTAI'),
('8208', '82', 'KABUPATEN PULAU TALIABU'),
('8271', '82', 'KOTA TERNATE'),
('8272', '82', 'KOTA TIDORE KEPULAUAN'),
('9101', '91', 'KABUPATEN FAKFAK'),
('9102', '91', 'KABUPATEN KAIMANA'),
('9103', '91', 'KABUPATEN TELUK WONDAMA'),
('9104', '91', 'KABUPATEN TELUK BINTUNI'),
('9105', '91', 'KABUPATEN MANOKWARI'),
('9106', '91', 'KABUPATEN SORONG SELATAN'),
('9107', '91', 'KABUPATEN SORONG'),
('9108', '91', 'KABUPATEN RAJA AMPAT'),
('9109', '91', 'KABUPATEN TAMBRAUW'),
('9110', '91', 'KABUPATEN MAYBRAT'),
('9111', '91', 'KABUPATEN MANOKWARI SELATAN'),
('9112', '91', 'KABUPATEN PEGUNUNGAN ARFAK'),
('9171', '91', 'KOTA SORONG'),
('9401', '94', 'KABUPATEN MERAUKE'),
('9402', '94', 'KABUPATEN JAYAWIJAYA'),
('9403', '94', 'KABUPATEN JAYAPURA'),
('9404', '94', 'KABUPATEN NABIRE'),
('9408', '94', 'KABUPATEN KEPULAUAN YAPEN'),
('9409', '94', 'KABUPATEN BIAK NUMFOR'),
('9410', '94', 'KABUPATEN PANIAI'),
('9411', '94', 'KABUPATEN PUNCAK JAYA'),
('9412', '94', 'KABUPATEN MIMIKA'),
('9413', '94', 'KABUPATEN BOVEN DIGOEL'),
('9414', '94', 'KABUPATEN MAPPI'),
('9415', '94', 'KABUPATEN ASMAT'),
('9416', '94', 'KABUPATEN YAHUKIMO'),
('9417', '94', 'KABUPATEN PEGUNUNGAN BINTANG'),
('9418', '94', 'KABUPATEN TOLIKARA'),
('9419', '94', 'KABUPATEN SARMI'),
('9420', '94', 'KABUPATEN KEEROM'),
('9426', '94', 'KABUPATEN WAROPEN'),
('9427', '94', 'KABUPATEN SUPIORI'),
('9428', '94', 'KABUPATEN MAMBERAMO RAYA'),
('9429', '94', 'KABUPATEN NDUGA'),
('9430', '94', 'KABUPATEN LANNY JAYA'),
('9431', '94', 'KABUPATEN MAMBERAMO TENGAH'),
('9432', '94', 'KABUPATEN YALIMO'),
('9433', '94', 'KABUPATEN PUNCAK'),
('9434', '94', 'KABUPATEN DOGIYAI'),
('9435', '94', 'KABUPATEN INTAN JAYA'),
('9436', '94', 'KABUPATEN DEIYAI'),
('9471', '94', 'KOTA JAYAPURA');

-- --------------------------------------------------------

--
-- Table structure for table `seleksi`
--

CREATE TABLE `seleksi` (
  `id` int(11) NOT NULL,
  `seleksi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seleksi`
--

INSERT INTO `seleksi` (`id`, `seleksi`) VALUES
(1, 'DS'),
(2, 'MDS'),
(3, 'KDS'),
(4, 'TDS');

-- --------------------------------------------------------

--
-- Table structure for table `tahunlulus`
--

CREATE TABLE `tahunlulus` (
  `id` int(11) NOT NULL,
  `tahunlulus` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tahunlulus`
--

INSERT INTO `tahunlulus` (`id`, `tahunlulus`) VALUES
(1, '1990'),
(2, '1991'),
(3, '1992'),
(4, '1993'),
(5, '1994'),
(6, '1995'),
(7, '1996'),
(8, '1997'),
(9, '1998'),
(10, '1999'),
(11, '2000'),
(12, '2001'),
(13, '2002'),
(14, '2003'),
(15, '2004'),
(16, '2005'),
(17, '2006'),
(18, '2007'),
(19, '2008'),
(20, '2009'),
(21, '2010'),
(22, '2011'),
(23, '2012'),
(24, '2013'),
(25, '2014'),
(26, '2015'),
(27, '2016'),
(28, '2017'),
(29, '2018'),
(30, '2019');

-- --------------------------------------------------------

--
-- Table structure for table `tahunmasuk`
--

CREATE TABLE `tahunmasuk` (
  `id` int(11) NOT NULL,
  `tahunmasuk` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tahunmasuk`
--

INSERT INTO `tahunmasuk` (`id`, `tahunmasuk`) VALUES
(1, '2018/2019'),
(2, '2019/2020');

-- --------------------------------------------------------

--
-- Table structure for table `ujikes`
--

CREATE TABLE `ujikes` (
  `id` int(11) NOT NULL,
  `pmbid` varchar(255) NOT NULL,
  `namalengkap` varchar(255) NOT NULL,
  `jeniskelamin` varchar(255) NOT NULL,
  `umur` int(11) NOT NULL,
  `tanggaltest` date NOT NULL,
  `sakitlama` varchar(255) NOT NULL,
  `ketsakitlama` varchar(255) NOT NULL,
  `batuklama` varchar(255) NOT NULL,
  `ketbatuklama` varchar(255) NOT NULL,
  `sakitkuning` varchar(255) NOT NULL,
  `ketsakitkuning` varchar(255) NOT NULL,
  `kecelakaan` varchar(255) NOT NULL,
  `ketkecelakaan` varchar(255) NOT NULL,
  `masukrs` varchar(255) NOT NULL,
  `ketmasukrs` varchar(255) NOT NULL,
  `tinggi` varchar(255) NOT NULL,
  `kettinggi` varchar(255) NOT NULL,
  `berat` varchar(255) NOT NULL,
  `ketberat` varchar(255) NOT NULL,
  `tekanandarah` varchar(255) NOT NULL,
  `kettekanandarah` varchar(255) NOT NULL,
  `nadi` varchar(255) NOT NULL,
  `ketnadi` varchar(255) NOT NULL,
  `kulit` varchar(255) NOT NULL,
  `ketkulit` varchar(255) NOT NULL,
  `fisikmata` varchar(255) NOT NULL,
  `ketfisikmata` varchar(255) NOT NULL,
  `visus` varchar(255) NOT NULL,
  `ketvisus` varchar(255) NOT NULL,
  `butawarna` varchar(255) NOT NULL,
  `ketbutawarna` varchar(255) NOT NULL,
  `telingakanan` varchar(255) NOT NULL,
  `kettelingakanan` varchar(255) NOT NULL,
  `telingakiri` varchar(255) NOT NULL,
  `kettelingakiri` varchar(255) NOT NULL,
  `hidung` varchar(255) NOT NULL,
  `kethidung` varchar(255) NOT NULL,
  `lidah` varchar(255) NOT NULL,
  `ketlidah` varchar(255) NOT NULL,
  `pharynx` varchar(255) NOT NULL,
  `ketpharynx` varchar(255) NOT NULL,
  `tonsil` varchar(255) NOT NULL,
  `kettonsil` varchar(255) NOT NULL,
  `gigi` varchar(255) NOT NULL,
  `ketgigi` varchar(255) NOT NULL,
  `thyroid` varchar(255) NOT NULL,
  `ketthyroid` varchar(255) NOT NULL,
  `jantung` varchar(255) NOT NULL,
  `ketjantung` varchar(255) NOT NULL,
  `paruparu` varchar(255) NOT NULL,
  `ketparuparu` varchar(255) NOT NULL,
  `abdoman` varchar(255) NOT NULL,
  `ketabdoman` varchar(255) NOT NULL,
  `pupil` varchar(255) NOT NULL,
  `ketpupil` varchar(255) NOT NULL,
  `patella` varchar(255) NOT NULL,
  `ketpatella` varchar(255) NOT NULL,
  `achiles` varchar(255) NOT NULL,
  `ketachiles` varchar(255) NOT NULL,
  `darahlengkap` varchar(255) NOT NULL,
  `ketdarahlengkap` varchar(255) NOT NULL,
  `hbsag` varchar(255) NOT NULL,
  `kethbsag` varchar(255) NOT NULL,
  `tato` varchar(255) NOT NULL,
  `tindik` varchar(255) NOT NULL,
  `thorakfoto` varchar(255) NOT NULL,
  `kesimpulan` varchar(255) NOT NULL,
  `ketkesimpulan` varchar(255) NOT NULL,
  `rekomendasi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ujikes`
--

INSERT INTO `ujikes` (`id`, `pmbid`, `namalengkap`, `jeniskelamin`, `umur`, `tanggaltest`, `sakitlama`, `ketsakitlama`, `batuklama`, `ketbatuklama`, `sakitkuning`, `ketsakitkuning`, `kecelakaan`, `ketkecelakaan`, `masukrs`, `ketmasukrs`, `tinggi`, `kettinggi`, `berat`, `ketberat`, `tekanandarah`, `kettekanandarah`, `nadi`, `ketnadi`, `kulit`, `ketkulit`, `fisikmata`, `ketfisikmata`, `visus`, `ketvisus`, `butawarna`, `ketbutawarna`, `telingakanan`, `kettelingakanan`, `telingakiri`, `kettelingakiri`, `hidung`, `kethidung`, `lidah`, `ketlidah`, `pharynx`, `ketpharynx`, `tonsil`, `kettonsil`, `gigi`, `ketgigi`, `thyroid`, `ketthyroid`, `jantung`, `ketjantung`, `paruparu`, `ketparuparu`, `abdoman`, `ketabdoman`, `pupil`, `ketpupil`, `patella`, `ketpatella`, `achiles`, `ketachiles`, `darahlengkap`, `ketdarahlengkap`, `hbsag`, `kethbsag`, `tato`, `tindik`, `thorakfoto`, `kesimpulan`, `ketkesimpulan`, `rekomendasi`) VALUES
(1, '192-0001 ', 'Berliana Aurelvia SS ', 'Wanita', 20, '2019-04-01', 'Negatif', '', 'Negatif', '', 'Negatif', '', 'Negatif', '', 'Negatif', '', 'Normal', '', 'Normal', '', 'Normal', '', 'Normal', '', 'Normal', '', 'Normal', '', 'Normal', '', 'Normal', '', 'Normal', '', 'Normal', '', 'Normal', '', 'Normal', '', 'Normal', '', 'Normal', '', 'Normal', '', 'Normal', '', 'Normal', '', 'Normal', '', 'Normal', '', 'Normal', '', 'Normal', '', 'Normal', '', 'Normal', '', 'Normal', '', '', '', '', 'Baik', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(5) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'user', ' ee11cbb19052e40b07aac0ca060c23ee');

-- --------------------------------------------------------

--
-- Table structure for table `wawancara`
--

CREATE TABLE `wawancara` (
  `id` int(11) NOT NULL,
  `pmbid` varchar(255) NOT NULL,
  `namalengkap` varchar(255) NOT NULL,
  `pilihanprodi` varchar(255) NOT NULL,
  `jalur` varchar(255) NOT NULL,
  `jalan` varchar(255) NOT NULL,
  `notelpon` varchar(255) NOT NULL,
  `agama` varchar(255) NOT NULL,
  `anakke` int(11) NOT NULL,
  `jmlsaudara` int(11) NOT NULL,
  `wargagereja` varchar(255) NOT NULL,
  `baptis` varchar(255) NOT NULL,
  `asalsekolah` varchar(255) NOT NULL,
  `tahunlulus` varchar(255) NOT NULL,
  `jurusan` varchar(255) NOT NULL,
  `berhentisekolah` varchar(255) NOT NULL,
  `kapanbhtsklh` varchar(255) NOT NULL,
  `alasanbrhtsklh` varchar(255) NOT NULL,
  `dimanadaftar` varchar(255) NOT NULL,
  `alternatif` varchar(255) NOT NULL,
  `prestasi` varchar(255) NOT NULL,
  `organisasi` varchar(255) NOT NULL,
  `ayah` varchar(255) NOT NULL,
  `namaayah` varchar(255) NOT NULL,
  `alamatayah` varchar(255) NOT NULL,
  `notelponayah` varchar(255) NOT NULL,
  `kerjaayah` varchar(255) NOT NULL,
  `agamaayah` varchar(255) NOT NULL,
  `baptisayah` varchar(255) NOT NULL,
  `ibu` varchar(255) NOT NULL,
  `namaibu` varchar(255) NOT NULL,
  `alamatibu` varchar(255) NOT NULL,
  `notelponibu` varchar(255) NOT NULL,
  `kerjaibu` varchar(255) NOT NULL,
  `agamaibu` varchar(255) NOT NULL,
  `baptisibu` varchar(255) NOT NULL,
  `namawali` varchar(255) NOT NULL,
  `alamatwali` varchar(255) NOT NULL,
  `kerjawali` varchar(255) NOT NULL,
  `carajalan` varchar(255) NOT NULL,
  `rapipakaian` varchar(255) NOT NULL,
  `tubuh` varchar(255) NOT NULL,
  `sopan` varchar(255) NOT NULL,
  `bicara` varchar(255) NOT NULL,
  `lain` varchar(255) NOT NULL,
  `alasanstikes` varchar(255) NOT NULL,
  `pendapatstikes` varchar(255) NOT NULL,
  `pendapatperawat` varchar(255) NOT NULL,
  `infostikes` varchar(255) NOT NULL,
  `dukung` varchar(255) NOT NULL,
  `alasandukung` varchar(255) NOT NULL,
  `larang` varchar(255) NOT NULL,
  `alasanlarang` varchar(255) NOT NULL,
  `saudarastikes` varchar(255) NOT NULL,
  `namasaudara` varchar(255) NOT NULL,
  `prodisaudara` varchar(255) NOT NULL,
  `kandungsaudara` varchar(255) NOT NULL,
  `semestersaudara` varchar(255) NOT NULL,
  `hobi` varchar(255) NOT NULL,
  `sanggupaturan` varchar(255) NOT NULL,
  `sanggupbiaya` varchar(255) NOT NULL,
  `alasantdkbiaya` varchar(255) NOT NULL,
  `siapabayar` varchar(255) NOT NULL,
  `penyakit` varchar(255) NOT NULL,
  `tahunsakit` varchar(255) NOT NULL,
  `napza` varchar(255) NOT NULL,
  `kapannapza` varchar(255) NOT NULL,
  `diterima` varchar(255) NOT NULL,
  `alasanterima` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wawancara`
--

INSERT INTO `wawancara` (`id`, `pmbid`, `namalengkap`, `pilihanprodi`, `jalur`, `jalan`, `notelpon`, `agama`, `anakke`, `jmlsaudara`, `wargagereja`, `baptis`, `asalsekolah`, `tahunlulus`, `jurusan`, `berhentisekolah`, `kapanbhtsklh`, `alasanbrhtsklh`, `dimanadaftar`, `alternatif`, `prestasi`, `organisasi`, `ayah`, `namaayah`, `alamatayah`, `notelponayah`, `kerjaayah`, `agamaayah`, `baptisayah`, `ibu`, `namaibu`, `alamatibu`, `notelponibu`, `kerjaibu`, `agamaibu`, `baptisibu`, `namawali`, `alamatwali`, `kerjawali`, `carajalan`, `rapipakaian`, `tubuh`, `sopan`, `bicara`, `lain`, `alasanstikes`, `pendapatstikes`, `pendapatperawat`, `infostikes`, `dukung`, `alasandukung`, `larang`, `alasanlarang`, `saudarastikes`, `namasaudara`, `prodisaudara`, `kandungsaudara`, `semestersaudara`, `hobi`, `sanggupaturan`, `sanggupbiaya`, `alasantdkbiaya`, `siapabayar`, `penyakit`, `tahunsakit`, `napza`, `kapannapza`, `diterima`, `alasanterima`) VALUES
(1, '192-0001 ', 'Berliana Aurelvia SS ', 'Sarjana Keperawatan', 'Reguler', ' Jl. Sawunggalih No.63 Kutoarjo ', '082135830355', 'Kristen', 1, 5, 'GKI', 'Sudah', 'SMA', '2018', 'Akuntansi', 'Ya', '2000', 'Sakit', 'UPN', 'UGM', 'LCC', 'OSIS', 'Kandung', 'PRABOWO', 'Jl. Sawunggalih No.63 Kutoarjo ', '082135830355', 'Swasta', 'Kristen', 'Belum', 'Tiri', 'SANDI', 'Jl. Sawunggalih No.63 Kutoarjo ', '082135830355', 'Guru', 'Kristen', 'Tidak', '', '', '', 'Normal', 'Rapi serasi', 'Gempal', 'Sopan', 'Pandai', 'Berwibawa', 'Passion', 'Baik', 'Bermanfaat', 'Instgram', 'Ayah', '', '', '', 'Tidak', '', '', 'Ya', '', 'Berenang', '', 'Ya', '', 'Ayah', 'Tipus', '2000', 'Tidak', '', 'Ya', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `berkas`
--
ALTER TABLE `berkas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `calonmahasiswa`
--
ALTER TABLE `calonmahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gelombang`
--
ALTER TABLE `gelombang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jalur`
--
ALTER TABLE `jalur`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `list_pengumuman`
--
ALTER TABLE `list_pengumuman`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pewawancara`
--
ALTER TABLE `pewawancara`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prodi`
--
ALTER TABLE `prodi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `provinces`
--
ALTER TABLE `provinces`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `regencies`
--
ALTER TABLE `regencies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `regencies_province_id_index` (`province_id`);

--
-- Indexes for table `seleksi`
--
ALTER TABLE `seleksi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tahunlulus`
--
ALTER TABLE `tahunlulus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tahunmasuk`
--
ALTER TABLE `tahunmasuk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ujikes`
--
ALTER TABLE `ujikes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wawancara`
--
ALTER TABLE `wawancara`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `berkas`
--
ALTER TABLE `berkas`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `calonmahasiswa`
--
ALTER TABLE `calonmahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `gelombang`
--
ALTER TABLE `gelombang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `jalur`
--
ALTER TABLE `jalur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `list_pengumuman`
--
ALTER TABLE `list_pengumuman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pewawancara`
--
ALTER TABLE `pewawancara`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `prodi`
--
ALTER TABLE `prodi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `seleksi`
--
ALTER TABLE `seleksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tahunlulus`
--
ALTER TABLE `tahunlulus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `tahunmasuk`
--
ALTER TABLE `tahunmasuk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ujikes`
--
ALTER TABLE `ujikes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `wawancara`
--
ALTER TABLE `wawancara`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `regencies`
--
ALTER TABLE `regencies`
  ADD CONSTRAINT `regencies_province_id_foreign` FOREIGN KEY (`province_id`) REFERENCES `provinces` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
