-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost:3307
-- Üretim Zamanı: 20 Haz 2021, 10:45:36
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
-- Tablo için tablo yapısı `esyalar`
--

CREATE TABLE `esyalar` (
  `id` int(10) UNSIGNED NOT NULL,
  `adi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `esyalar`
--

INSERT INTO `esyalar` (`id`, `adi`) VALUES
(1, 'Masa'),
(2, 'Sandalye'),
(3, 'Saat'),
(4, 'Sehpa'),
(5, 'Duvar Saati'),
(6, 'Laptop'),
(7, 'Bilgisayar'),
(8, 'Telefon'),
(9, 'Buzdolabı'),
(10, 'Fırın'),
(11, 'Halı'),
(12, 'Perde'),
(13, 'Dolap'),
(14, 'Konsol'),
(15, 'Koltuk'),
(16, 'Yatak'),
(17, 'Battaniye');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `esyalar`
--
ALTER TABLE `esyalar`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `esyalar`
--
ALTER TABLE `esyalar`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
