-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 22, 2017 at 04:25 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbig`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_biodata`
--

CREATE TABLE `tb_biodata` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_biodata`
--

INSERT INTO `tb_biodata` (`id`, `nama`, `password`, `username`, `email`) VALUES
(25, 'Nanda Si tukang Rusuh', '9ac6ff0657133f67d065', 'Nans2k17', 'nanssukabikinperkara'),
(26, 'Rafael', '79063e8037fff16d297a', 'RafaelSayangNans', 'rafael@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_biodata`
--
ALTER TABLE `tb_biodata`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_biodata`
--
ALTER TABLE `tb_biodata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
