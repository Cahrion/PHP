-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost:3307
-- Üretim Zamanı: 15 Haz 2021, 23:25:10
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
CREATE DATABASE IF NOT EXISTS `cahrion` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `cahrion`;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hesaplar`
--

CREATE TABLE `hesaplar` (
  `id` int(10) NOT NULL,
  `adisoyadi` varchar(255) NOT NULL,
  `hesapbakiyesi` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `hesaplar`
--

INSERT INTO `hesaplar` (`id`, `adisoyadi`, `hesapbakiyesi`) VALUES
(1, 'Volkan Alakent', 10000),
(2, 'Hakan Alakent', 2500),
(3, 'Onur Tatlı', 0),
(4, 'Icabi Kırgız', 5800);

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

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `siparisler`
--

CREATE TABLE `siparisler` (
  `id` int(10) UNSIGNED NOT NULL,
  `uyeid` int(10) UNSIGNED NOT NULL,
  `urunadi` varchar(255) NOT NULL,
  `urunfiyati` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `siparisler`
--

INSERT INTO `siparisler` (`id`, `uyeid`, `urunadi`, `urunfiyati`) VALUES
(1, 1, 'Samsung S8+', 4500),
(2, 1, 'Samsung Kılıf', 104),
(3, 1, 'Samsung Ekran Koruyucu', 49),
(4, 2, 'Philips TV', 6800),
(5, 4, 'Apple iPod', 3760),
(6, 7, 'Asus Notebook', 12450);

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
(2, 'umutcan\r\n', 19, 'Csharp', '40'),
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

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yorumlar`
--

CREATE TABLE `yorumlar` (
  `id` int(10) NOT NULL,
  `yorummetni` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `yorumlar`
--

INSERT INTO `yorumlar` (`id`, `yorummetni`) VALUES
(1, 'Çok güzel\nTavsiye Ederim.'),
(2, 'Umduğum gibi değildi.<br>Ama biraz daha izlemeyi düşünüyorum.<br>Daha sonra tekrar değerlendirme yapacağım.'),
(3, 'Süper<br>On Numara Bir ürün');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `hesaplar`
--
ALTER TABLE `hesaplar`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `istatistikler`
--
ALTER TABLE `istatistikler`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `kayitlar`
--
ALTER TABLE `kayitlar`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `kisiler`
--
ALTER TABLE `kisiler`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `siparisler`
--
ALTER TABLE `siparisler`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `uyeler`
--
ALTER TABLE `uyeler`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `yorumlar`
--
ALTER TABLE `yorumlar`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `hesaplar`
--
ALTER TABLE `hesaplar`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `istatistikler`
--
ALTER TABLE `istatistikler`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Tablo için AUTO_INCREMENT değeri `kayitlar`
--
ALTER TABLE `kayitlar`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Tablo için AUTO_INCREMENT değeri `kisiler`
--
ALTER TABLE `kisiler`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Tablo için AUTO_INCREMENT değeri `siparisler`
--
ALTER TABLE `siparisler`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Tablo için AUTO_INCREMENT değeri `uyeler`
--
ALTER TABLE `uyeler`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Tablo için AUTO_INCREMENT değeri `yorumlar`
--
ALTER TABLE `yorumlar`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
