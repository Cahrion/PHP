-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost:3307
-- Üretim Zamanı: 17 Haz 2021, 12:04:05
-- Sunucu sürümü: 10.4.19-MariaDB
-- PHP Sürümü: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `cahrion`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `istatistikler`
--

CREATE TABLE `istatistikler` (
  `id` int(10) UNSIGNED NOT NULL,
  `uyeid` int(10) UNSIGNED NOT NULL,
  `siteyegirissayisi` int(10) UNSIGNED NOT NULL,
  `siparissayisi` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `istatistikler`
--

INSERT INTO `istatistikler` (`id`, `uyeid`, `siteyegirissayisi`, `siparissayisi`) VALUES
(1, 1, 147, 3),
(2, 2, 64, 1),
(3, 3, 83, 0),
(4, 4, 12, 1),
(5, 5, 97, 0),
(6, 6, 69, 0),
(7, 7, 5, 1);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `istatistikler`
--
ALTER TABLE `istatistikler`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `istatistikler`
--
ALTER TABLE `istatistikler`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
