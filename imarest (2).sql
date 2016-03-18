-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2016 at 01:19 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `imarest`
--

-- --------------------------------------------------------

--
-- Table structure for table `careers`
--

CREATE TABLE `careers` (
  `id_careers` int(11) NOT NULL,
  `judul_careers` varchar(100) NOT NULL,
  `isi_careers` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `careers`
--

INSERT INTO `careers` (`id_careers`, `judul_careers`, `isi_careers`) VALUES
(1, 'mencoba', '<p>nikah?</p>\r\n\r\n<p>&nbsp;</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id_contact` int(11) NOT NULL,
  `nama_contact` varchar(100) NOT NULL,
  `telp_contact` varchar(100) NOT NULL,
  `email_contact` varchar(100) NOT NULL,
  `type_contact` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id_event` int(11) NOT NULL,
  `nama_event` varchar(100) NOT NULL,
  `lat_event` varchar(100) NOT NULL,
  `lang_event` varchar(100) NOT NULL,
  `id_kota_event` int(11) NOT NULL,
  `id_negara_event` int(11) NOT NULL,
  `tanggal_mulai_event` date NOT NULL,
  `tanggal_akhir_event` date NOT NULL,
  `jam_mulai_event` varchar(20) NOT NULL,
  `jam_akhir_event` varchar(20) DEFAULT NULL,
  `tipe_event` varchar(30) NOT NULL,
  `pic_event` varchar(100) NOT NULL,
  `register_event` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id_event`, `nama_event`, `lat_event`, `lang_event`, `id_kota_event`, `id_negara_event`, `tanggal_mulai_event`, `tanggal_akhir_event`, `jam_mulai_event`, `jam_akhir_event`, `tipe_event`, `pic_event`, `register_event`) VALUES
(1, '', '', '', 0, 0, '0000-00-00', '0000-00-00', '', '', 'Course', './assets/gambar/event/', ''),
(2, '', '', '', 0, 0, '0000-00-00', '0000-00-00', '', '', 'Course', './assets/gambar/event/', ''),
(3, '', '', '', 0, 0, '0000-00-00', '0000-00-00', '', '', 'Course', './assets/gambar/event/', ''),
(4, '', '', '', 0, 0, '0000-00-00', '0000-00-00', '', '', 'Course', './assets/gambar/event/', ''),
(5, '', '', '', 0, 0, '0000-00-00', '0000-00-00', '', '', 'Course', './assets/gambar/event/', ''),
(6, '', '', '', 0, 0, '0000-00-00', '0000-00-00', '', '', 'Course', './assets/gambar/event/', ''),
(7, '', '', '', 0, 0, '0000-00-00', '0000-00-00', '', '', 'Course', './assets/gambar/event/', ''),
(8, '', '', '', 0, 0, '0000-00-00', '0000-00-00', '', '', 'Course', './assets/gambar/event/', ''),
(9, '', '', '', 0, 0, '0000-00-00', '0000-00-00', '', '', 'Course', './assets/gambar/event/', ''),
(10, '', '', '', 0, 0, '0000-00-00', '0000-00-00', '', '', 'Course', './assets/gambar/event/', ''),
(11, '', '', '', 0, 0, '0000-00-00', '0000-00-00', '', '', 'Course', './assets/gambar/event/', ''),
(12, '', '', '', 0, 0, '0000-00-00', '0000-00-00', '', '', 'Course', './assets/gambar/event/', ''),
(13, '', '', '', 0, 0, '0000-00-00', '0000-00-00', '', '', 'Course', './assets/gambar/event/', ''),
(14, '', '', '', 0, 0, '0000-00-00', '0000-00-00', '', '', 'Course', './assets/gambar/event/', ''),
(15, 'asd', '-7.44962,110.90424', '', 0, 0, '2016-03-13', '2016-03-13', '00:00', '23:59', 'Course', './assets/gambar/event/a.png', 'asd'),
(16, 'asdadsasd', '-7.30139,112.71521', '', 5, 2, '2016-03-13', '0000-00-00', '', '', 'Course', './assets/gambar/event/bridge.gif', 'adaadsad'),
(17, 'asdadsasd', '-7.2426,112.39941', '', 5, 2, '2016-03-13', '0000-00-00', '', '', 'Course', './assets/gambar/event/bridge.gif', 'adaadsad'),
(18, 'adsadsadsadsadsad', '-5.09094', '114.23035', 1, 1, '2016-03-13', '0000-00-00', '', '', 'Course', './assets/gambar/event/bridge.gif', 'adsasdad'),
(19, 'adsadsadsadsadsadasadasd', 'LatLng(-2.94304', ' 115.12985)', 1, 1, '2016-03-13', '2016-03-13', '00:00', '23:59', 'Course', './assets/gambar/event/bridge.gif', 'adsasdad'),
(20, 'adsadsadsadsadsadasadasdadsadsaaad123', '', '', 0, 0, '2016-03-15', '2016-03-17', '00:00', '00:00', 'Training', './assets/gambar/event/no.png', 'adsadsadasd123'),
(21, 'menikah', '-1.01069', '114.51462', 3, 1, '2016-03-13', '2016-03-13', '00:00', '23:59', 'Course', './assets/gambar/event/a.png', 'asdasd'),
(22, 'menikah', '-1.01069', '114.51462', 1, 1, '2016-03-13', '2016-03-13', '00:00', '23:59', 'Course', './assets/gambar/event/a.png', 'asdasd'),
(23, 'adsadsadsadsadsadasadasd', '-2.19673', '114.91013', 1, 1, '0000-00-00', '0000-00-00', 'date', '', 'Course', './assets/gambar/event/a.png', 'asdad'),
(24, 'adsadsadsadsadsadasadasd', '-2.19673', '114.91013', 1, 1, '2016-03-24', '2016-03-24', '00:00', '00:00', 'Course', './assets/gambar/event/a.png', 'asdad'),
(25, 'qqqqqq', '-2.81137', '114.77829', 1, 1, '2016-03-13', '2016-03-13', '00:00', '23:59', 'Course', '/assets/gambar/event/a.png', 'qqqq'),
(26, 'qqqqqq', '-2.81137', '114.77829', 1, 1, '2016-03-13', '2016-03-13', '00:00', '23:59', 'Course', '/assets/gambar/event/a.png', 'qqqq'),
(27, 'adsadadssadsadasdawdwqeqdWF', '-0.08789', '112.18552', 1, 1, '2016-03-13', '2016-03-13', '00:00', '23:59', 'Course', './assets/gambar/event/a.png', 'adsad'),
(28, 'adsadadasdsadsad', '-1.62576', '114.29489', 1, 1, '2016-03-13', '2016-03-13', '00:00', '23:59', 'Course', 'assets/gambar/event/a.png', 'adsad'),
(29, 'adsadadasdsadsad', '-1.62576', '114.29489', 1, 1, '2016-03-13', '2016-03-13', '00:00', '23:59', 'Course', 'assets/gambar/event/a.png', 'adsad'),
(30, 's', '-1.66969', '111.83395', 1, 1, '2016-03-13', '2016-03-13', '00:00', '23:59', 'Course', 'assets/gambar/event/a.png', 'sad'),
(31, 's', '-1.66969', '111.83395', 1, 1, '2016-03-13', '2016-03-13', '00:00', '23:59', 'Course', 'assets/gambar/event/a.png', 'sad'),
(32, '', '', '', 1, 1, '2016-03-13', '2016-03-13', '00:00', '00:00', 'Course', './assets/gambar/a.png', 'asdad'),
(33, 'sadsad', '', '', 1, 1, '2016-03-13', '2016-03-13', '00:00', '23:59', 'Course', './assets/gambar/bridge.gif', 'asdad'),
(34, 'adsaddsdadsad', '', '', 1, 1, '2016-03-13', '2016-03-13', '00:00', '23:59', 'Course', './assets/gambar/icon18_wrench_allbkg.png', 'adasdds'),
(35, '', '', '', 1, 1, '2016-03-13', '2016-03-13', '00:00', '23:59', 'Course', './assets/gambar/LogoPartaiGerindra.png', 'adsad'),
(36, 'qqqqqq', '3.95194', '109.81247', 1, 1, '2016-03-13', '2016-03-13', '00:00', '23:59', 'Course', './assets/gambar/event/a.png', 'qew'),
(37, 'k', '-3.09664', '122.05639', 1, 1, '2016-03-13', '2016-03-13', '00:00', '23:59', 'Course', './assets/gambar/galeri/OSOS-SMA.png', 'hhhh'),
(38, 'adasdad', '-2.76748', '113.15231', 1, 1, '2016-03-13', '2016-03-13', '00:00', '23:59', 'Course', 'assets/gambar/galeri/a.png', 'adsadsad'),
(39, 'adasdad', '-2.76748', '113.15231', 1, 1, '2016-03-13', '2016-03-13', '00:00', '23:59', 'Course', 'assets/gambar/galeri/s.gif', 'adsadsad'),
(40, 'zdassd', '-2.41628', '113.37204', 1, 1, '2016-03-13', '2016-03-13', '00:00', '23:59', 'Course', 'assets/gambar/event/icon18_edit_allbkg.gif', 'adsad'),
(41, 'zdassd', '-2.41628', '113.37204', 1, 1, '2016-03-13', '2016-03-13', '00:00', '23:59', 'Course', 'assets/gambar/event/icon18_edit_allbkg.gif', 'adsad'),
(42, 'zdassd', '-2.41628', '113.37204', 1, 1, '2016-03-13', '2016-03-13', '00:00', '23:59', 'Course', './assets/gambar/event/icon18_edit_allbkg.gif', 'adsad'),
(43, 'zdassd', '-2.41628', '113.37204', 1, 1, '2016-03-13', '2016-03-13', '00:00', '23:59', 'Course', '../assets/gambar/event/icon18_edit_allbkg.gif', 'adsad'),
(44, 'zdassd', '-2.41628', '113.37204', 1, 1, '2016-03-13', '2016-03-13', '00:00', '23:59', 'Course', '../assets/gambar/icon18_edit_allbkg.gif', 'adsad'),
(45, 'zdassd', '-2.41628', '113.37204', 1, 1, '2016-03-13', '2016-03-13', '00:00', '23:59', 'Course', './assets/gambar/event/icon18_edit_allbkg.gif', 'adsad'),
(46, 'asdadasdadsad', '-7.2317', '111.8779', 1, 1, '2016-03-15', '2016-03-15', '00:00', '23:59', 'Course', './assets/gambar/event/no.png', 'asd'),
(47, '', '', '', 1, 1, '0000-00-00', '0000-00-00', '', '', 'Training', './assets/gambar/event/', ''),
(48, 'coba compres 1', '-0.83493', '114.60251', 3, 1, '2016-03-25', '2016-03-26', '00:00', '23:59', 'Training', './assets/gambar/event/Intel_Atom_Z2580_827301.jpg', 'asdaaaaa'),
(49, 'cek confrence', '-2.19673', '112.44919', 1, 1, '2016-03-15', '2016-03-15', '00:00', '23:59', 'Confrence', './assets/gambar/event/s.gif', 'asd'),
(50, 'mencoba', '-2.24064', '113.89938', 1, 1, '2016-03-15', '2016-03-16', '00:00', '23:59', 'Training', './assets/gambar/event/_2513915.jpg', 'asdad'),
(51, 'asdsad', '-27.9944', '122.84363', 1, 1, '2016-03-15', '2016-03-15', '00:00', '23:59', 'Training', './assets/gambar/event/_2578677.png', 'adsad'),
(52, 'asdadsasd', '-0.74705', '114.6904', 1, 1, '2016-03-17', '2016-03-17', '00:00', '23:59', 'Training', './assets/gambar/event/', 'adsa'),
(53, 'asdad', '-0.13184', '114.91013', 1, 1, '2016-03-17', '2016-03-17', '00:00', '23:59', 'Training', './assets/gambar/event/', 'adsad'),
(54, 'mencon=ba test adsad', '2.15281', '116.14059', 2, 4, '2016-03-21', '2016-03-21', '00:00', '23:59', 'Course', './assets/gambar/event/picture_002.jpg', 'asdasdasdadsdad123');

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `id_faq` int(11) NOT NULL,
  `question` text NOT NULL,
  `answer` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `id_galeri` int(11) NOT NULL,
  `nama_galeri` varchar(100) NOT NULL,
  `tanggal_buat_galeri` date NOT NULL,
  `letak_folder` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id_galeri`, `nama_galeri`, `tanggal_buat_galeri`, `letak_folder`) VALUES
(1, 'coba', '2016-03-15', '2016-03-15coba');

-- --------------------------------------------------------

--
-- Table structure for table `halaman`
--

CREATE TABLE `halaman` (
  `id_halaman` int(11) NOT NULL,
  `judul_halaman` varchar(100) NOT NULL,
  `isi_halaman` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `halaman`
--

INSERT INTO `halaman` (`id_halaman`, `judul_halaman`, `isi_halaman`) VALUES
(1, 'Privacy Policy', ''),
(2, 'All About Us', '');

-- --------------------------------------------------------

--
-- Table structure for table `kota`
--

CREATE TABLE `kota` (
  `id_kota` int(11) NOT NULL,
  `nama_kota` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kota`
--

INSERT INTO `kota` (`id_kota`, `nama_kota`) VALUES
(1, 'qqqqqq'),
(2, 'wwwwww'),
(3, 'eeeeee'),
(4, 'rrrrrrrr'),
(5, 'ttttttt');

-- --------------------------------------------------------

--
-- Table structure for table `negara`
--

CREATE TABLE `negara` (
  `id_negara` int(11) NOT NULL,
  `nama_negara` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `negara`
--

INSERT INTO `negara` (`id_negara`, `nama_negara`) VALUES
(1, 'asdad'),
(2, 'adsadadsadadsad'),
(3, 'ssssss'),
(4, 'qqqqqqq');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id_news` int(11) NOT NULL,
  `judul_news` varchar(100) NOT NULL,
  `isi_news` text NOT NULL,
  `pic_news` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id_news`, `judul_news`, `isi_news`, `pic_news`) VALUES
(1, '', '', './assets/gambar/resource/'),
(2, '', '', './assets/gambar/resource/'),
(3, '', '', './assets/gambar/resource/'),
(4, 'mencoba', '<p>sfsfdsf<strong>&nbsp;efrwrwerw&nbsp;<em>ewrwerwerwer&nbsp;<s>rewrewrwrewrwerweradsadsadadsfsfsdfsdfsdfdsf</s></em></strong></p>\r\n', './assets/gambar/news/photo.jpg'),
(5, 'mencoba', '', './assets/gambar/resource/s.gif'),
(6, '', '', './assets/gambar/resource/'),
(7, 'asd', '<p>asdasd</p>', './assets/gambar/news/_2578677.png');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id_register` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `id_event` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rekening`
--

CREATE TABLE `rekening` (
  `id_rekening` int(11) NOT NULL,
  `id_kontak` varchar(100) NOT NULL,
  `nomer_rekening` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `id_video` int(11) NOT NULL,
  `nama_video` varchar(100) NOT NULL,
  `link_video` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`id_video`, `nama_video`, `link_video`) VALUES
(1, '', ''),
(2, 'Ada Band, Surga Cinta', 'https://www.youtube.com/watch?v=hKscd5JXLNs');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `careers`
--
ALTER TABLE `careers`
  ADD PRIMARY KEY (`id_careers`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id_contact`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id_event`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id_faq`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id_galeri`);

--
-- Indexes for table `halaman`
--
ALTER TABLE `halaman`
  ADD PRIMARY KEY (`id_halaman`);

--
-- Indexes for table `kota`
--
ALTER TABLE `kota`
  ADD PRIMARY KEY (`id_kota`);

--
-- Indexes for table `negara`
--
ALTER TABLE `negara`
  ADD PRIMARY KEY (`id_negara`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id_news`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id_register`);

--
-- Indexes for table `rekening`
--
ALTER TABLE `rekening`
  ADD PRIMARY KEY (`id_rekening`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id_video`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `careers`
--
ALTER TABLE `careers`
  MODIFY `id_careers` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id_contact` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id_event` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `id_faq` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id_galeri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `halaman`
--
ALTER TABLE `halaman`
  MODIFY `id_halaman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `kota`
--
ALTER TABLE `kota`
  MODIFY `id_kota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `negara`
--
ALTER TABLE `negara`
  MODIFY `id_negara` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id_news` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id_register` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `rekening`
--
ALTER TABLE `rekening`
  MODIFY `id_rekening` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `id_video` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
