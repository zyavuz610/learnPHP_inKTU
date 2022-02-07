-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 06 Ara 2021, 10:16:34
-- Sunucu sürümü: 10.1.38-MariaDB
-- PHP Sürümü: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `ybs2`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `question`
--

CREATE TABLE `question` (
  `id` int(11) NOT NULL,
  `q_name` varchar(200) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `q_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `question`
--

INSERT INTO `question` (`id`, `q_name`, `q_date`) VALUES
(4, 'update konusunu anladınız mı?', '2021-12-06 07:45:38'),
(9, 'sorunuz var mıdır?', '2021-12-06 08:18:38');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL DEFAULT '1',
  `password` varchar(200) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL DEFAULT '1',
  `fullname` varchar(100) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `address` varchar(200) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `email` varchar(100) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `fullname`, `address`, `email`) VALUES
(2, 'zyavuz@example.com', 'c4ca4238a0b923820dcc509a6f75849b', 'Zafer', 'Yavuz', 'zyavuz@example.com'),
(4, 'zyavuz2@example.com', 'c4ca4238a0b923820dcc509a6f75849b', 'Zafer', 'Yavuz2', 'zyavuz2@example.com'),
(5, 'zyavuz@example.com', 'c4ca4238a0b923820dcc509a6f75849b', 'Zafer Yavuz', 'Trabzon', 'zyavuz@example.com'),
(14, 'zyavuz@ceng.ktu.edu.tr', 'c4ca4238a0b923820dcc509a6f75849b', 'Zafer Yavuz', 'KTÜ Bilgisayar Mühendisliği Bölümü', 'zyavuz@ceng.ktu.edu.tr'),
(15, 'zyavuz@ceng.ktu.edu.tr', 'c4ca4238a0b923820dcc509a6f75849b', 'Zafer Yavuz', 'KTÜ Bilgisayar Mühendisliği Bölümü', 'zyavuz@ceng.ktu.edu.tr'),
(16, 'zyavuz@ceng.ktu.edu.tr', 'c4ca4238a0b923820dcc509a6f75849b', 'Zafer Yavuz', 'KTÜ Bilgisayar Mühendisliği Bölümü', 'zyavuz@ceng.ktu.edu.tr'),
(17, 'zafer', 'c4ca4238a0b923820dcc509a6f75849b', 'zafer yavuz', 'ktü', 'zyavuz@ktu.edu.tr');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `question`
--
ALTER TABLE `question`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Tablo için AUTO_INCREMENT değeri `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
