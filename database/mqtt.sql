-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 04 Jul 2021 pada 18.09
-- Versi Server: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mqtt`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `user` varchar(30) NOT NULL,
  `password` varchar(38) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`user`, `password`) VALUES
('qadri', '123456'),
('Fariz', 'farizAnggara'),
('mq', '1234');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel1`
--

CREATE TABLE IF NOT EXISTS `tabel1` (
`id` int(10) NOT NULL,
  `Temperature` int(10) NOT NULL,
  `Humidity` int(10) NOT NULL,
  `Status_Pompa` int(20) NOT NULL,
  `pH` float NOT NULL,
  `Time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data untuk tabel `tabel1`
--

INSERT INTO `tabel1` (`id`, `Temperature`, `Humidity`, `Status_Pompa`, `pH`, `Time`) VALUES
(1, 25, 8, 0, 7.86, '2019-07-07 01:01:18'),
(2, 25, 8, 0, 7.8, '2019-07-07 02:01:58'),
(3, 30, 8, 0, 7.75, '2019-07-07 03:10:55'),
(4, 38, 8, 0, 7.75, '2019-07-07 04:12:47'),
(5, 40, 8, 0, 7.79, '2019-07-07 05:05:14'),
(6, 41, 7, 0, 7.82, '2019-07-07 06:21:59'),
(7, 38, 7, 0, 7.82, '2019-07-07 07:32:40'),
(8, 30, 8, 0, 7.82, '2019-07-07 08:20:22'),
(9, 28, 3, 1, 7.82, '2019-07-07 09:16:04'),
(10, 27, 8, 0, 7.83, '2019-07-07 10:32:45'),
(11, 29, 0, 1, 4.07, '2019-08-27 14:23:58'),
(12, 29, 0, 1, 4.65, '2019-08-27 14:23:59'),
(13, 29, 0, 1, 7, '2019-08-27 14:24:01'),
(14, 29, 0, 1, 7, '2019-08-27 14:24:02'),
(15, 29, 0, 1, 7, '2019-08-27 14:24:03'),
(16, 29, 0, 1, 3.84, '2019-08-27 14:24:05'),
(17, 29, 0, 1, 4.42, '2019-08-27 14:24:06'),
(18, 29, 0, 1, 4.65, '2019-08-27 14:24:07'),
(19, 29, 0, 1, 7, '2019-08-27 14:24:16'),
(20, 29, 0, 1, 7, '2019-08-27 14:24:17'),
(21, 29, 0, 1, 3.15, '2019-08-27 14:24:19'),
(22, 29, 0, 1, 4.25, '2019-08-27 14:24:20'),
(23, 29, 0, 1, 4.59, '2019-08-27 14:24:22'),
(24, 29, 0, 1, 7, '2019-08-27 14:24:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel1`
--
ALTER TABLE `tabel1`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabel1`
--
ALTER TABLE `tabel1`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
