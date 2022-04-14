-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost:3307
-- Üretim Zamanı: 16 Haz 2021, 18:58:59
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
-- Tablo için tablo yapısı `uyeler`
--

CREATE TABLE `uyeler` (
  `id` int(10) UNSIGNED NOT NULL,
  `isim` varchar(100) NOT NULL,
  `yas` tinyint(3) UNSIGNED NOT NULL,
  `beceriler` varchar(255) NOT NULL,
  `beceriseviyeleri` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `uyeler`
--

INSERT INTO `uyeler` (`id`, `isim`, `yas`, `beceriler`, `beceriseviyeleri`) VALUES
(1, 'aslı', 20, 'Python', '20'),
(2, 'umutcan', 19, 'Csharp', '40'),
(3, 'icabi', 19, 'Python,Flutter,JavaScript,CSS,HTML,PHP', '100,70,90,100,60,70'),
(4, 'Ümit', 40, 'Ecmascript,Cinema4D', '85.60'),
(5, 'Volkan', 38, 'Html,CSS,JavaScript,PHP,Xml,Java,Python,Csharp', '90,92,98,100,95,98,75,91'),
(6, 'Hakan', 40, 'Javascript,Photoshop,Asp', '35,93,80'),
(7, 'Levent', 37, 'Csharp,Asp', '83,78'),
(8, 'Arif', 41, 'Maya,3DMax,Python', '90,70,46'),
(9, 'Yunus', 28, 'After Effect,Photoshop', '90,85'),
(10, 'Tarık', 21, 'R,Go,Ruby', '63,10,58'),
(11, 'Yavuz', 40, 'Solidworks,Catia', '87,69'),
(12, 'Kanuni', 29, 'CSS,PHP,Java,Xml', '78,66,80,1');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `uyeler`
--
ALTER TABLE `uyeler`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `uyeler`
--
ALTER TABLE `uyeler`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
