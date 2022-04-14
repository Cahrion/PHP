-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost:3307
-- Üretim Zamanı: 17 Haz 2021, 12:06:23
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
-- Tablo için tablo yapısı `kayitlar`
--

CREATE TABLE `kayitlar` (
  `id` int(10) UNSIGNED NOT NULL,
  `adisoyadi` varchar(100) NOT NULL,
  `yas` int(3) UNSIGNED NOT NULL,
  `sehir` varchar(50) NOT NULL,
  `siteyegirissayisi` int(10) UNSIGNED NOT NULL,
  `siparissayisi` int(10) UNSIGNED NOT NULL,
  `siparistoplamtutarlari` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `kayitlar`
--

INSERT INTO `kayitlar` (`id`, `adisoyadi`, `yas`, `sehir`, `siteyegirissayisi`, `siparissayisi`, `siparistoplamtutarlari`) VALUES
(1, 'Volkan Alakent', 38, 'İstanbul', 147, 3, 4653),
(2, 'Icabi Kırgız', 19, 'İstanbul', 64, 1, 6800),
(3, 'Hakan Alakent', 40, 'Ankara', 83, 0, 0),
(4, 'Ümit Okudan', 40, 'İzmir', 12, 1, 3760),
(5, 'Aslı kaya', 20, 'İstanbul', 97, 0, 0),
(6, 'Umut can', 19, 'Zonduldak', 69, 0, 0),
(7, 'Yusuf Türk', 37, 'Ankara', 5, 1, 16850),
(8, 'Levent Çelik', 37, 'İzmir', 44, 0, 0),
(9, 'Osman Şahin', 52, 'İzmir', 0, 0, 0),
(10, 'Aslı Tatlı', 33, 'İstanbul', 14, 1, 20);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `kayitlar`
--
ALTER TABLE `kayitlar`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `kayitlar`
--
ALTER TABLE `kayitlar`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
