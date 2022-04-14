-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost:3307
-- Üretim Zamanı: 20 Haz 2021, 18:09:42
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
(1, 'A\'dan Z\'ye HTML5 Görsel Eğitim Seti', 100, 'TL'),
(2, 'A\'dan Z\'ye CSS3 Görsel Eğitim Seti', 90, 'TL'),
(3, 'A\'dan Z\'ye JAVASCRIPT Görsel Eğitim Seti', 120, 'USD'),
(4, 'A\'dan Z\'ye PHP7 Görsel Eğitim Seti', 200, 'TL'),
(5, 'A\'dan Z\'ye PYTHON Görsel Eğitim Seti', 160, 'TL'),
(6, 'A\'dan Z\'ye JAVA Görsel Eğitim Seti', 240, 'TL'),
(7, 'A\'dan Z\'ye C / C++ Görsel Eğitim Seti', 400, 'EUR'),
(8, 'A\'dan Z\'ye JQuery Görsel Eğitim Seti', 20, 'TL');

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
