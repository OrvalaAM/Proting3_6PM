-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2023 at 04:58 PM
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
(1, 'imam', 'aadss', '1f9a4e2430c0dce1034933b2602173841.jpg'),
(2, 'aa', 'aa', '1f9a4e2430c0dce1034933b2602173842.jpg'),
(7, 'adadadada', 'dadsadadadada', 'e51eb24336ab7370d8c133a28a95e9aa.jpg'),
(8, 'PMGC', 'FINAL PMGC', 'e3fe2a464732cf99eaf436513d39dc7e.gif'),
(0, 'auoau', 'okoko', 'main.png');

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
  `jenis_game` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_team`
--

INSERT INTO `tb_team` (`id_team`, `nama`, `deskripsi`, `jenis_game`) VALUES
(1, '6AM', 'tim 6AM', 'MLBB');

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
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_tournament`
--

INSERT INTO `tb_tournament` (`id_tour`, `nama`, `deskripsi`, `jenis_games`, `tempat`, `tanggal`) VALUES
(3, 'kompetision', 'kompetisi amatir', 'MLBB', 'Jakarta Tenggar', '2023-01-11'),
(5, 'KOKOOKOOKO', 'koGITU ', 'MLBB', 'jbkJJJJJ', '2023-01-11');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(10) NOT NULL,
  `role_id` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `nama`, `username`, `password`, `role_id`) VALUES
(1, 'admin', 'admin', 'admin123', 1),
(2, 'user', 'user', 'user123', 2),
(4, 'user', 'adit', 'adit3', 2);

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for table `tb_profile`
--
ALTER TABLE `tb_profile`
  MODIFY `id_profile` int(15) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_team`
--
ALTER TABLE `tb_team`
  MODIFY `id_team` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_tournament`
--
ALTER TABLE `tb_tournament`
  MODIFY `id_tour` int(23) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
