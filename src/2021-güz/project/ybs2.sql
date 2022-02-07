-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 13 Ara 2021, 08:46:09
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
-- Tablo için tablo yapısı `likes`
--

CREATE TABLE `likes` (
  `id` int(11) NOT NULL,
  `like_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_id` int(11) NOT NULL,
  `q_id` int(11) NOT NULL,
  `type` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `likes`
--

INSERT INTO `likes` (`id`, `like_date`, `user_id`, `q_id`, `type`) VALUES
(1, '2021-12-13 10:22:24', 17, 4, 1),
(4, '2021-12-13 10:28:07', 17, 9, 1),
(10, '2021-12-13 10:32:59', 17, 10, 1),
(11, '2021-12-13 10:42:13', 17, 11, 1),
(12, '2021-12-13 10:44:53', 14, 10, 1),
(13, '2021-12-13 10:44:54', 14, 4, 1);

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
(9, 'sorunuz var mıdır?', '2021-12-06 08:18:38'),
(10, 'update 2 konusunu anladınız mı?', '2021-12-13 06:47:41'),
(11, 'sorunuz var mıdır?', '2021-12-13 07:37:54');

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
(14, 'zyavuz@ceng.ktu.edu.tr', 'c4ca4238a0b923820dcc509a6f75849b', 'Zafer Yavuz', 'KTÜ Bilgisayar Mühendisliği Bölümü', 'zyavuz@ceng.ktu.edu.tr'),
(17, 'zafer', 'c4ca4238a0b923820dcc509a6f75849b', 'zafer yavuz', 'ktü', 'zyavuz@ktu.edu.tr');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`);

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
-- Tablo için AUTO_INCREMENT değeri `likes`
--
ALTER TABLE `likes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Tablo için AUTO_INCREMENT değeri `question`
--
ALTER TABLE `question`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Tablo için AUTO_INCREMENT değeri `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
