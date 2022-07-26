-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2020 at 03:42 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login_tuto`
--

-- --------------------------------------------------------

--
-- Table structure for table `datalaporan`
--

CREATE TABLE `datalaporan` (
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `laporan` varchar(500) NOT NULL,
  `date` date NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `gambar` mediumblob NOT NULL,
  `tanggapan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `datalaporan`
--

INSERT INTO `datalaporan` (`id`, `email`, `judul`, `laporan`, `date`, `alamat`, `gambar`, `tanggapan`) VALUES
(1, 'wahyufebrian28@gmail.com', 'bahan pokok melonjak', 'melonjaknya bahan-bahan pokok seperti gula, dll.  sangat memberatkan kami bagi warga kurang mampu', '2020-06-21', 'kota tangerang selatan', 0x6f6e655f70696563655f342d77616c6c70617065722d3139323078313230302e6a7067, 'dalam proses'),
(3, 'dedeimam@gmail.com', 'bahan pokok melonjak', 'melonjaknya bahan-bahan pokok seperti gula, dll. sangat memberatkan kami bagi warga kurang mampu', '2020-06-23', 'kota tangerang selatan', 0x6f6e655f70696563655f342d77616c6c70617065722d3139323078313230302e6a7067, 'dalam proses'),
(4, 'dinulfikri@gmail.com', 'bahan pokok melonjak', 'melonjaknya bahan-bahan pokok seperti gula, dll. sangat memberatkan kami bagi warga kurang mampu', '2020-06-23', 'kota tangerang', 0x6f6e655f70696563655f342d77616c6c70617065722d3139323078313230302e6a7067, 'dalam proses'),
(5, 'wahyufebrian@gmail.com', 'masker susah', 'kelangkaan masker', '2020-06-23', 'kota tangerang', 0x73746174697374696b2e504e47, '');

-- --------------------------------------------------------

--
-- Table structure for table `statistik`
--

CREATE TABLE `statistik` (
  `sangat` varchar(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `statistik`
--

INSERT INTO `statistik` (`sangat`, `id`) VALUES
('sangat', 1),
('puas', 2),
('sedang', 3),
('kurang', 4),
('tidak', 5),
('sedang', 6),
('sangat', 7),
('sangat', 8),
('sangat', 9),
('sangat', 10),
('puas', 11),
('puas', 12),
('puas', 13),
('sedang', 14),
('puas', 15),
('sangat', 16),
('kurang', 17),
('sedang', 18),
('puas', 19),
('sangat', 20),
('sangat', 21),
('puas', 22),
('sangat', 23),
('puas', 24),
('sangat', 25),
('puas', 26),
('sedang', 27),
('sedang', 28),
('puas', 29),
('puas', 30),
('puas', 31),
('puas', 32),
('puas', 33),
('puas', 34),
('puas', 35),
('sangat', 36),
('puas', 37),
('sedang', 38),
('kurang', 39),
('puas', 40),
('sangat', 41),
('sangat', 42),
('sangat', 43),
('kurang', 44),
('kurang', 45),
('tidak', 46),
('tidak', 47),
('puas', 48),
('sangat', 49),
('puas', 50),
('puas', 51),
('sangat', 52),
('sangat', 53),
('', 54),
('', 55),
('', 56),
('', 57),
('', 58),
('', 59),
('', 60),
('', 61),
('', 62),
('', 63),
('', 64),
('', 65),
('', 66),
('', 67),
('', 68),
('', 69),
('', 70),
('', 71),
('', 72),
('', 73),
('', 74),
('', 75),
('', 76),
('', 77),
('', 78),
('', 79);

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `usuario` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `clave` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `email`, `clave`) VALUES
(8, 'admin', 'wahyufebrian@gmail.com', '$2y$10$o57E9K7EgzKkZtt/rvlwbOJFJPFCI5k5Tum.r6xp1PP.3xSg0T7aa'),
(9, 'odp', 'odp@gmail.com', '$2y$10$c7MIMgc1zhnd0JrE8iJB5eTyz/aFOL.mJrJNCvVY1EiVk2BfVyW/m'),
(10, 'user', 'user', '$2y$10$pXdHSbn82X7YzXI53cYSN.PFYtktqr/aR0FoE3lZrzwyNHV4gfLNi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `datalaporan`
--
ALTER TABLE `datalaporan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `statistik`
--
ALTER TABLE `statistik`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `datalaporan`
--
ALTER TABLE `datalaporan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `statistik`
--
ALTER TABLE `statistik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
