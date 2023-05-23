-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2023 at 08:33 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_esport`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_news`
--

CREATE TABLE `tb_news` (
  `id` int(13) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_news`
--

INSERT INTO `tb_news` (`id`, `nama`, `deskripsi`, `image`) VALUES
(1, 'imam', 'asdfghjkl', '1f9a4e2430c0dce1034933b2602173841.jpg'),
(2, 'aa', 'aa', '1f9a4e2430c0dce1034933b2602173842.jpg'),
(7, 'adadadada', 'dadsadadadada', 'e51eb24336ab7370d8c133a28a95e9aa.jpg'),
(8, 'PMBB edit', 'FINAL PMGC edit', 'e3fe2a464732cf99eaf436513d39dc7e.gif'),
(0, 'berita baru', 'deskripsi', '「バンドリ！_ガールズバンドパーティ！」オープニングムービー_mp4_snapshot_01_15_2022_04_19_09_27_24.jpg'),
(0, 'Berita baru', 'Ini berita baru', '「バンドリ！_ガールズバンドパーティ！」オープニングムービー_mp4_snapshot_01_15_2022_04_19_09_27_241.jpg'),
(0, 'Berita tambah', 'berita tambah', '「バンドリ！_ガールズバンドパーティ！」オープニングムービー_mp4_snapshot_01_15_2022_04_19_09_27_242.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_partisipasi_tournament`
--

CREATE TABLE `tb_partisipasi_tournament` (
  `id` int(11) NOT NULL,
  `id_tour` int(11) NOT NULL,
  `id_team` int(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_partisipasi_tournament`
--

INSERT INTO `tb_partisipasi_tournament` (`id`, `id_tour`, `id_team`) VALUES
(247, 5, 5),
(248, 7, 5),
(249, 7, 5),
(250, 6, 5),
(254, 3, 5);

-- --------------------------------------------------------

--
-- Table structure for table `tb_profile`
--

CREATE TABLE `tb_profile` (
  `id_profile` int(15) NOT NULL,
  `name` varchar(255) NOT NULL,
  `nickname` varchar(255) NOT NULL,
  `games` varchar(255) NOT NULL,
  `tier` varchar(255) NOT NULL,
  `squad` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_team`
--

CREATE TABLE `tb_team` (
  `id_team` int(13) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `deskripsi` varchar(500) NOT NULL,
  `jenis_game` varchar(255) NOT NULL,
  `member` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_team`
--

INSERT INTO `tb_team` (`id_team`, `nama`, `deskripsi`, `jenis_game`, `member`) VALUES
(5, 'Tim baru', 'Tim baru', 'Dota 2', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tb_tournament`
--

CREATE TABLE `tb_tournament` (
  `id_tour` int(23) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `deskripsi` varchar(500) NOT NULL,
  `jenis_games` varchar(255) NOT NULL,
  `tempat` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `kuota` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_tournament`
--

INSERT INTO `tb_tournament` (`id_tour`, `nama`, `deskripsi`, `jenis_games`, `tempat`, `tanggal`, `kuota`) VALUES
(3, 'kompeti', 'kompetisi amatir profeswional', 'Dota 2', 'Jakarta Tenggara', '2023-01-12', 12),
(5, 'KOKOOKOOKO', 'koGITU ', 'MLBB', 'jbkJJJJJ', '2023-01-11', 32),
(6, 'KOMOE', ' TURBESD ', 'PUBG', ' TELYU ', '2023-01-12', 0),
(7, 'turnamen limitless', ' Turnamen tak terbatas tapi ', 'Dota 2', ' Bandung', '2023-05-12', 2),
(8, 'Turnamen baru', 'Turnamen baru ', 'Dota 2', 'Bandung ', '2023-05-11', 10),
(9, 'Turnamen', 'turnamen ', 'Dota 2', 'Bandung ', '2023-05-19', 20);

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(10) NOT NULL,
  `role_id` tinyint(1) NOT NULL,
  `id_team` int(13) NOT NULL,
  `nama_team` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `nama`, `username`, `password`, `role_id`, `id_team`, `nama_team`) VALUES
(1, 'admin', 'admin', 'admin123', 1, 0, ''),
(2, 'user', 'user', 'user123', 2, 0, 'test'),
(4, 'user', 'adit', 'adit3', 2, 0, ''),
(5, 'ggrr', 'h', 'h', 2, 0, ''),
(6, 'zarvah', 'zarvah', '123', 2, 0, ''),
(7, '3', 'joko', '3', 2, 0, ''),
(8, 'john doe', 'johndoe', 'john123', 2, 0, ''),
(9, 'tester', 'tester', 'tester123', 2, 0, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_partisipasi_tournament`
--
ALTER TABLE `tb_partisipasi_tournament`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_profile`
--
ALTER TABLE `tb_profile`
  ADD PRIMARY KEY (`id_profile`);

--
-- Indexes for table `tb_team`
--
ALTER TABLE `tb_team`
  ADD PRIMARY KEY (`id_team`);

--
-- Indexes for table `tb_tournament`
--
ALTER TABLE `tb_tournament`
  ADD PRIMARY KEY (`id_tour`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_partisipasi_tournament`
--
ALTER TABLE `tb_partisipasi_tournament`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=255;

--
-- AUTO_INCREMENT for table `tb_profile`
--
ALTER TABLE `tb_profile`
  MODIFY `id_profile` int(15) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_team`
--
ALTER TABLE `tb_team`
  MODIFY `id_team` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_tournament`
--
ALTER TABLE `tb_tournament`
  MODIFY `id_tour` int(23) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
