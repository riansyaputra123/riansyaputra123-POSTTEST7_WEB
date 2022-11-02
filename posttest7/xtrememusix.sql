-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2022 at 06:52 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `xtrememusix`
--

-- --------------------------------------------------------

--
-- Table structure for table `all_song`
--

CREATE TABLE `all_song` (
  `id` int(15) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `genre` varchar(20) NOT NULL,
  `cover` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `all_song`
--

INSERT INTO `all_song` (`id`, `judul`, `genre`, `cover`) VALUES
(784, 'Mahalini - Sisa Rasa', 'Pop', 'mahalini.jpg'),
(785, 'Sheila On 7 - Dan', 'Pop', 'dan.webp'),
(786, 'Twice - Likely', 'Pop', 'jihyo.jpg'),
(787, 'Twice - Whats Is Love', 'Techno', 'jihyohehe.jpg'),
(788, 'udin petot', 'Dangdut', 'udin petot.jpg'),
(789, 'Stephen Sanchez - Until I Found You', 'Indie', 'sanchez.jpg'),
(790, 'Andra & The Backbone - Sempurna', 'Rock', 'andra.jpg'),
(791, 'Sheila On 7 - Mudah Saja', 'Pop', 'mudah.jpg'),
(792, 'Bill Withers - Just the  Two of Us', 'R&B', 'bill.jpg'),
(793, 'Budi Doremi - Mesin Waktu', 'Pop', 'doremi.jpg'),
(794, 'Fiersa - Besari - Pelukku Untuk Pelikmu', 'Pop', 'fiersa.jpg'),
(795, 'Andmesh - Andaikan Kau Datang', 'Pop', 'andmesh.jpg'),
(796, 'Keysa levronka - Tak Ingin Usai', 'Pop', 'keisya.jpeg'),
(797, 'Shaun - Way Back Home', 'Techno', 'shaun.jpg'),
(798, 'Blackpink - Boombayah', 'Pop', 'blekpink.png'),
(799, 'Wanna.B (워너비) - Why? (왜요?)', 'Electronics', 'wannab.jpg'),
(800, 'One Direction - Strong', 'Pop', 'direction.jpg'),
(801, 'Lil Nas X - Thats What I Want', 'Pop', 'lil.jpg'),
(802, 'The Chainsmokers - All We Know', 'Electronics', 'chainmokers.jpg'),
(803, 'Oasis - Dont Look Back in Anger', 'Death Metal', 'oasis.jpg'),
(804, 'Song So Hee(송소희) - Spring Day', 'Jazz', 'songhee.jpg'),
(805, 'Virgoun - Duka', 'Pop', 'virgoun.jpg'),
(806, 'Neckdeep - Wish You Were Here ', 'Rock', 'neckdeep.jpg'),
(807, 'Glass Animals - Heat Waves', 'R&B', 'glass.jpg'),
(808, 'Queen - Bohemian Rhapsody', 'Death Metal', 'queen.jpg'),
(809, 'Gun N Roses - Sweet Child O Mine', 'Death Metal', 'axelx.jpg'),
(810, 'Avenged Sevenfold - Dear God', 'Rock', 'deargod.jpg'),
(811, 'Green Day - American Idiot', 'Rock', 'greenday.png'),
(812, 'Yiruma - Rivers Flow in You', 'Classic', 'yiruma.jpg'),
(813, 'Bruno Mars - It Will Rain', 'Country', 'bruno.jpg'),
(814, 'Tulus - Hati-hati Dijalan', 'Jazz', 'tulussss.jpg'),
(815, 'Blackpink - DUDDUDU', 'Pop', 'lisa.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `best_kpop`
--

CREATE TABLE `best_kpop` (
  `id` int(10) NOT NULL,
  `judul` varchar(75) NOT NULL,
  `genre` varchar(50) NOT NULL,
  `cover` varchar(100) NOT NULL,
  `waktu` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `best_kpop`
--

INSERT INTO `best_kpop` (`id`, `judul`, `genre`, `cover`, `waktu`) VALUES
(6, 'Twice - Likely', 'Pop', 'jihyo.jpg', '2022-11-01 11:56:00'),
(7, 'Twice - Whats Is Love', 'Techno', 'jihyohehe.jpg', '2022-11-01 12:01:00'),
(8, 'Shaun - Way Back Home', 'Techno', 'shaun.jpg', '2022-11-02 07:18:00'),
(9, 'Blackpink - Boombayah', 'Pop', 'blekpink.png', '2022-11-02 07:18:00'),
(10, 'Wanna.B (워너비) - Why? (왜요?)', 'Electronics', 'wannab.jpg', '2022-11-02 07:20:00'),
(11, 'Song So Hee(송소희) - Spring Day', 'Jazz', 'songhee.jpg', '2022-11-02 07:24:00'),
(12, 'Blackpink - DUDDUDU', 'Pop', 'lisa.jpg', '2022-11-02 07:34:00');

-- --------------------------------------------------------

--
-- Table structure for table `popular_now`
--

CREATE TABLE `popular_now` (
  `id` int(10) NOT NULL,
  `judul` varchar(75) NOT NULL,
  `genre` varchar(50) NOT NULL,
  `cover` varchar(100) NOT NULL,
  `waktu` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `popular_now`
--

INSERT INTO `popular_now` (`id`, `judul`, `genre`, `cover`, `waktu`) VALUES
(19, 'Mahalini - Sisa Rasa', 'Pop', 'mahalini.jpg', '2022-11-01 10:34:00'),
(20, 'Sheila On 7 - Dan', 'Pop', 'dan.webp', '2022-11-01 10:34:00'),
(21, 'Stephen Sanchez - Until I Found You', 'Indie', 'sanchez.jpg', '2022-11-02 07:09:00'),
(22, 'Andra & The Backbone - Sempurna', 'Rock', 'andra.jpg', '2022-11-02 07:10:00'),
(23, 'Sheila On 7 - Mudah Saja', 'Pop', 'mudah.jpg', '2022-11-02 07:11:00'),
(24, 'Bill Withers - Just the  Two of Us', 'R&B', 'bill.jpg', '2022-11-02 07:13:00'),
(25, 'One Direction - Strong', 'Pop', 'direction.jpg', '2022-11-02 07:21:00'),
(26, 'Lil Nas X - Thats What I Want', 'Pop', 'lil.jpg', '2022-11-02 07:22:00'),
(27, 'The Chainsmokers - All We Know', 'Electronics', 'chainmokers.jpg', '2022-11-02 07:23:00'),
(28, 'Oasis - Dont Look Back in Anger', 'Death Metal', 'oasis.jpg', '2022-11-02 07:24:00'),
(29, 'Neckdeep - Wish You Were Here ', 'Rock', 'neckdeep.jpg', '2022-11-02 07:26:00'),
(30, 'Glass Animals - Heat Waves', 'R&B', 'glass.jpg', '2022-11-02 07:27:00'),
(31, 'Queen - Bohemian Rhapsody', 'Death Metal', 'queen.jpg', '2022-11-02 07:28:00'),
(32, 'Gun N Roses - Sweet Child O Mine', 'Death Metal', 'axelx.jpg', '2022-11-02 07:28:00'),
(33, 'Avenged Sevenfold - Dear God', 'Rock', 'deargod.jpg', '2022-11-02 07:29:00'),
(34, 'Green Day - American Idiot', 'Rock', 'greenday.png', '2022-11-02 07:30:00'),
(35, 'Yiruma - Rivers Flow in You', 'Classic', 'yiruma.jpg', '2022-11-02 07:31:00'),
(36, 'Bruno Mars - It Will Rain', 'Country', 'bruno.jpg', '2022-11-02 07:31:00');

-- --------------------------------------------------------

--
-- Table structure for table `top_indonesian`
--

CREATE TABLE `top_indonesian` (
  `id` int(10) NOT NULL,
  `judul` varchar(75) NOT NULL,
  `genre` varchar(50) NOT NULL,
  `cover` varchar(100) NOT NULL,
  `waktu` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `top_indonesian`
--

INSERT INTO `top_indonesian` (`id`, `judul`, `genre`, `cover`, `waktu`) VALUES
(6, 'udin petot', 'Dangdut', 'udin petot.jpg', '2022-11-01 17:44:00'),
(7, 'Budi Doremi - Mesin Waktu', 'Pop', 'doremi.jpg', '2022-11-02 07:13:00'),
(8, 'Fiersa - Besari - Pelukku Untuk Pelikmu', 'Pop', 'fiersa.jpg', '2022-11-02 07:14:00'),
(9, 'Andmesh - Andaikan Kau Datang', 'Pop', 'andmesh.jpg', '2022-11-02 07:15:00'),
(10, 'Keysa levronka - Tak Ingin Usai', 'Pop', 'keisya.jpeg', '2022-11-02 07:16:00'),
(11, 'Virgoun - Duka', 'Pop', 'virgoun.jpg', '2022-11-02 07:25:00'),
(12, 'Tulus - Hati-hati Dijalan', 'Jazz', 'tulussss.jpg', '2022-11-02 07:33:00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `priv` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `priv`) VALUES
(12, 'bejo', '$2y$10$b3wX2w1d.rCsut13U2GcG.afM3DCHp7gHKoBrzGkx3RFU9lUm1ofS', 'user'),
(13, 'admin', '$2y$10$fNaLbcV6tUpzBGW8O4YweOy1auGjK8ZB2/QLpS8Lzw2ewsEgEV.xu', 'admin'),
(14, 'user', '$2y$10$SMR1/9IVGM35GODzQQS2wOWhj/iHoDfNaUOYZE5rK6H9mY4kB7LbS', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `all_song`
--
ALTER TABLE `all_song`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `best_kpop`
--
ALTER TABLE `best_kpop`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `popular_now`
--
ALTER TABLE `popular_now`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `top_indonesian`
--
ALTER TABLE `top_indonesian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `all_song`
--
ALTER TABLE `all_song`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=816;

--
-- AUTO_INCREMENT for table `best_kpop`
--
ALTER TABLE `best_kpop`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `popular_now`
--
ALTER TABLE `popular_now`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `top_indonesian`
--
ALTER TABLE `top_indonesian`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
