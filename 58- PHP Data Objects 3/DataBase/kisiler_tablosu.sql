-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost:3307
-- Üretim Zamanı: 16 Haz 2021, 20:50:31
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
-- Tablo için tablo yapısı `kisiler`
--

CREATE TABLE `kisiler` (
  `id` int(10) UNSIGNED NOT NULL,
  `adisoyadi` varchar(100) NOT NULL,
  `emailadresi` varchar(255) NOT NULL,
  `sifre` varchar(25) NOT NULL,
  `telefon` varchar(11) NOT NULL,
  `yas` tinyint(3) UNSIGNED NOT NULL,
  `cinsiyet` char(5) NOT NULL,
  `sehir` varchar(50) NOT NULL,
  `kayittarihi` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `kisiler`
--

INSERT INTO `kisiler` (`id`, `adisoyadi`, `emailadresi`, `sifre`, `telefon`, `yas`, `cinsiyet`, `sehir`, `kayittarihi`) VALUES
(1, 'Aslı Kaya', 'asli@gmail.com', '12345678', '', 20, 'Kadın', 'istanbul', '2021-06-14 10:12:50'),
(2, 'umut can cesur', 'umut@gmail.com', '111111111', '', 19, 'Erkek', 'Zonguldak', '2021-06-14 10:12:50'),
(3, 'Volkan Alakent', 'info@extraegitim.com', '22222222', '05352255144', 38, 'Erkek', 'İstanbul', '2021-06-14 10:12:50'),
(4, 'Hakan Alakent', 'hakan@gmail.com', '33333333', '', 40, 'Erkek', 'Ankara', '2021-06-14 10:12:50'),
(5, 'Ümit Okudan', 'umit@gmail.com', '44444444', '', 40, 'Erkek', 'İzmir', '2021-06-14 10:12:50'),
(6, 'Serkan Çelik', 'serkan@gmail.com', '55555555', '', 35, 'Erkek', 'Kocaeli', '2021-06-14 10:12:50'),
(7, 'Yusuf Kaya', 'yusuf@gmail.com', '66666666', '', 37, 'Erkek', 'Trabzon', '2021-06-14 10:12:50');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `kisiler`
--
ALTER TABLE `kisiler`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `kisiler`
--
ALTER TABLE `kisiler`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
