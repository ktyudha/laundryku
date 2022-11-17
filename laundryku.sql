-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2022 at 12:19 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laundryku`
--

-- --------------------------------------------------------

--
-- Table structure for table `carosel`
--

CREATE TABLE `carosel` (
  `id` int(11) NOT NULL,
  `tagline` varchar(20) NOT NULL,
  `deskripsi` varchar(20) NOT NULL,
  `image_url` text NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `carosel`
--

INSERT INTO `carosel` (`id`, `tagline`, `deskripsi`, `image_url`, `status`) VALUES
(1, 'Pelayanan 1', 'Pelayanan 1', 'uploads/carousel/pelayanan1-01.png', 1),
(2, 'Pelayanan 2', 'Pelayanan 2', 'uploads/carousel/pelayanan2-01.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `informasi`
--

CREATE TABLE `informasi` (
  `id` int(11) NOT NULL,
  `tagline` varchar(20) NOT NULL,
  `deskripsi` varchar(40) NOT NULL,
  `image_url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `informasi`
--

INSERT INTO `informasi` (`id`, `tagline`, `deskripsi`, `image_url`) VALUES
(1, 'informasi', 'Informasi 1', 'uploads/informasi/1.png'),
(2, 'Informasi 2', 'Informasi 2', 'uploads/informasi/2.png'),
(3, 'Informasi 3', 'Informasi 3', 'uploads/informasi/3.png'),
(4, 'Informasi 4', 'Informasi 4', 'uploads/informasi/4.jpg'),
(5, 'Informasi 5', 'Informasi 5', 'uploads/informasi/5.jpg'),
(6, 'Informasi 6', 'Informasi 6', 'uploads/informasi/6.jpg'),
(7, 'Informasi 7', 'Informasi 7', 'uploads/informasi/7.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `orderan`
--

CREATE TABLE `orderan` (
  `id` int(11) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `tagline` varchar(40) NOT NULL,
  `jenis` varchar(20) NOT NULL,
  `berat` int(11) NOT NULL,
  `catatan` text NOT NULL,
  `tgl_pesan` text NOT NULL,
  `tgl_ambil` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `promo`
--

CREATE TABLE `promo` (
  `id` int(11) NOT NULL,
  `tagline` varchar(20) NOT NULL,
  `deskripsi` text NOT NULL,
  `note` text NOT NULL,
  `masaberlaku` text NOT NULL,
  `image_url` text NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `promo`
--

INSERT INTO `promo` (`id`, `tagline`, `deskripsi`, `note`, `masaberlaku`, `image_url`, `status`) VALUES
(1, 'Favorit K-Fans', '<p>Syarat dan Ketentuan:</p><ul><li>Tersedia di semua channel pembelian termasuk aplikasi online dan McDelivery. </li><li>Ayam McD Kimchi tersedia dalam pilihan Krispy atau Spicy.</li><li>Pilihan Paket : PaNas 1, PaNas 2, PaNas Spesial, PaMer 5 dan PaMer 7.</li><li>Tersedia juga Paket 2 Ayam McD Kimchi dengan French Fries.</li><li>Persediaan Terbatas</li></ul>', 'Nikmati Ayam McD Kimchi.', '1670605200', 'uploads/promo/mcd3.jpg', 1),
(2, 'I Love Monday', '<p>Selama bulan Agustus-Desember 2022 setiap hari Senin kamu bisa mendapatkan diskon Rp 25.000</p><ul><li>Disertai dengan pemesanan minimal Rp 125.000&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</li><li>Minimal pemesanan sudah termasuk pajak, biaya Antar dan biaya Take Away.</li><li>McDelivery berhak membatalkan pesanan apabila terindikasi ketidaksesuaian ketentuan.</li></ul>', 'Diskon Rp25000 hanya di McDelivery', '1669741200', 'uploads/promo/mcd1.jpg', 1),
(3, 'DDrive Thru Sticker', '<p style=\"color: rgb(51, 51, 51); font-family: sans-serif;\">Mulai 1 Nov - 31 Desember setiap melakukan transaksi melalui Drive Thru Gratis Fruit tea 250ml</p><ul style=\"color: rgb(51, 51, 51); font-family: sans-serif;\"><li><span style=\"font-family: Speedee, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; font-size: 1rem;\">Minimum transaksi Rp 70.000,-&nbsp;</span></li><li>Harga sudah termasuk pajak, belum termasuk biaya Take Away</li><li>Tidak dapat digabung dengan promosi lain</li><li>Berlaku bagi konsumen yang sudah menempelkan stiker Drive Thru pada kendaraannya</li></ul>', 'Gratis Fruit Tea 250 ml', '1669741200', 'uploads/promo/mcd5.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `servis`
--

CREATE TABLE `servis` (
  `id` int(11) NOT NULL,
  `tagline` varchar(20) NOT NULL,
  `deskripsi` varchar(40) NOT NULL,
  `note` text NOT NULL,
  `image_url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `servis`
--

INSERT INTO `servis` (`id`, `tagline`, `deskripsi`, `note`, `image_url`) VALUES
(1, 'Big Mac', '', '<p>Burger Ikonik McDonalds. Dua lapis daging sapi gurih disajikan dengan saus spesial, selada segar, keju, acar timun, bawang, diapit roti bertabur wijen<br></p>', 'uploads/servis/mc1.png'),
(2, 'PaNas Spesial', '', '<p><font color=\"#666666\" face=\"Speedee, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol\"><span style=\"font-size: 18px;\">Ayam Goreng khas McDonalds dengan nasi hangat dan tambahan scrambled egg serta minuman FruitTea lemon yang menyegarkan. Tersedia dalam pilihan Ayam Krispy atau Spicy</span></font><br></p>', 'uploads/servis/mc2.png'),
(3, 'McNuggets', '', '<p>Nugget ayam McDonalds dan saus Sweet &amp; Sour atau Barbeque pilihan Anda. Tersedia dalam pilihan 4, 6 dan 9 pieces<br></p>', 'uploads/servis/mc3.png'),
(4, 'McChicken', '', '<p>Patty ayam krispi diantara roti wijen lembut, selada segar, dan saus McChicken klasik McDonalds<br></p>', 'uploads/servis/mc4.png'),
(5, 'Nasi Uduk McD', '', '<p>Nasi uduk gurih dengan topping sambal terasi, scrambled egg, bawang goreng, kini makin lengkap dengan suwiran ayam goreng<br></p>', 'uploads/servis/mc5.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `pswd` text NOT NULL,
  `image_url` text NOT NULL,
  `level` enum('superuser','user') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama`, `username`, `pswd`, `image_url`, `level`) VALUES
(1, 'Kurniawan Try Yudha', 'ktyudha', '123', '\\uploads\\users\\ktyudha.jpg', 'superuser');

-- --------------------------------------------------------

--
-- Table structure for table `users_client`
--

CREATE TABLE `users_client` (
  `id` int(11) NOT NULL,
  `email` varchar(40) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `pswd` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carosel`
--
ALTER TABLE `carosel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `informasi`
--
ALTER TABLE `informasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orderan`
--
ALTER TABLE `orderan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `promo`
--
ALTER TABLE `promo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `servis`
--
ALTER TABLE `servis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_client`
--
ALTER TABLE `users_client`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carosel`
--
ALTER TABLE `carosel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `informasi`
--
ALTER TABLE `informasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `orderan`
--
ALTER TABLE `orderan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `promo`
--
ALTER TABLE `promo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `servis`
--
ALTER TABLE `servis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users_client`
--
ALTER TABLE `users_client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
