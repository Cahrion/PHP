-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost:3307
-- Üretim Zamanı: 20 Haz 2021, 15:43:04
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
-- Tablo için tablo yapısı `urunler`
--

CREATE TABLE `urunler` (
  `id` int(10) UNSIGNED NOT NULL,
  `urunadi` varchar(255) NOT NULL,
  `urunfiyati` double NOT NULL,
  `parabirimi` char(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `urunler`
--

INSERT INTO `urunler` (`id`, `urunadi`, `urunfiyati`, `parabirimi`) VALUES
(1, 'Samsung S8+', 4500, 'TL'),
(2, 'Philips LCD TV', 5000, 'TL'),
(3, 'Logitech G602 Mouse', 120, 'USD'),
(4, 'Asus Monitör', 2100, 'TL'),
(5, 'HP P1102 Yazıcı', 280, 'TL'),
(6, 'HP Pro 4115', 322, 'TL'),
(7, 'Razor Klavye', 44, 'EUR'),
(8, 'Seagate 8TB HDD', 1980, 'TL'),
(9, 'HD 4TB Black HDD', 1230, 'TL'),
(10, 'CoolerMaster Kasa', 865, 'Tl'),
(11, 'Philips Hoparlör', 34, 'USD'),
(12, 'Asus Notebook', 3840, 'TL'),
(13, 'Seiko Saat', 840, 'TL'),
(14, 'Apple Macbook\r\n', 5600, 'TL');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `urunler`
--
ALTER TABLE `urunler`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `urunler`
--
ALTER TABLE `urunler`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
