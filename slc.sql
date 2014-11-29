-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2014 at 09:05 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `slc`
--

-- --------------------------------------------------------

--
-- Table structure for table `daftar`
--

CREATE TABLE IF NOT EXISTS `daftar` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `nim` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `kelas` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `angkatan` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `hp` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(35) COLLATE utf8_unicode_ci NOT NULL,
  `matkul` text COLLATE utf8_unicode_ci NOT NULL,
  `alasan` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Dumping data for table `daftar`
--

INSERT INTO `daftar` (`id`, `nama`, `nim`, `kelas`, `angkatan`, `hp`, `email`, `matkul`, `alasan`, `created_at`, `updated_at`) VALUES
(1, 'wawa', '09876', 'A', '13', '09876543', 'adfsg', 'dfs', 'fsfs', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, '', '', '', '', '', '', '', '', '2014-11-29 00:54:58', '2014-11-29 00:54:58'),
(3, '', '', '', '', '', '', '', '', '2014-11-29 00:56:29', '2014-11-29 00:56:29'),
(4, 'q', 'q', '', '', '', '', '', 'asasasas', '2014-11-29 00:58:42', '2014-11-29 00:58:42'),
(5, 'a', 'a', '', '', '', '', '', 'asasasa', '2014-11-29 01:00:22', '2014-11-29 01:00:22'),
(6, 'w', 'w', 'w', 'w', 'w', 'w', 'Matematika Dasar', 'w', '2014-11-29 01:01:46', '2014-11-29 01:01:46'),
(7, 'qeqwe', 'wewqeqwe', 'wqdwdad', 'fsdfsdf', 'asdasd', 'sfsfsdf', 'Algoritma Pemrograman', 'dfnsdkjfndskf', '2014-11-29 01:02:25', '2014-11-29 01:02:25'),
(8, 'q', 'q', 'qqq', 'qqq', 'qq', 'qq', 'Algoritma Pemrograman', 'moadskfndjjfgbfjbvjfbvjfvbjvb', '2014-11-29 01:03:00', '2014-11-29 01:03:00');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_11_29_032621_users_table', 1),
('2014_11_29_065115_daftar_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `peserta`
--

CREATE TABLE IF NOT EXISTS `peserta` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(30) NOT NULL,
  `nim` varchar(15) NOT NULL,
  `kelas` varchar(10) NOT NULL,
  `angkatan` int(4) NOT NULL,
  `hp` varchar(14) NOT NULL,
  `email` varchar(30) NOT NULL,
  `alasan` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`, `updated_at`) VALUES
(1, 'kampret', '$2y$08$hYnUlwEiCuzgG', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'a', '0cc175b9c0f1b6a831c3', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'b', 'b', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
