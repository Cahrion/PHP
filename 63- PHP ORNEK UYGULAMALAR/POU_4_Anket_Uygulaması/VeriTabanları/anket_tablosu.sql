-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost:3307
-- Üretim Zamanı: 19 Haz 2021, 22:38:20
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
-- Tablo için tablo yapısı `anket`
--

CREATE TABLE `anket` (
  `id` int(10) UNSIGNED NOT NULL,
  `soru` varchar(100) NOT NULL,
  `cevapbir` varchar(50) NOT NULL,
  `cevapiki` varchar(50) NOT NULL,
  `cevapuc` varchar(50) NOT NULL,
  `oysayisibir` int(10) UNSIGNED NOT NULL,
  `oysayisiiki` int(10) UNSIGNED NOT NULL,
  `oysayisiuc` int(10) UNSIGNED NOT NULL,
  `toplamoysayisi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `anket`
--

INSERT INTO `anket` (`id`, `soru`, `cevapbir`, `cevapiki`, `cevapuc`, `oysayisibir`, `oysayisiiki`, `oysayisiuc`, `toplamoysayisi`) VALUES
(1, 'Web Sitesi Tasarımımızı Nasıl Buldunuz?', 'Mükemmel', 'Normal', 'Kötü', 19, 9, 2, 30);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `anket`
--
ALTER TABLE `anket`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `anket`
--
ALTER TABLE `anket`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
