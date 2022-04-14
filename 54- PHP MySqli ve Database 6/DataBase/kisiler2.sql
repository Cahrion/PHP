-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost:3307
-- Üretim Zamanı: 14 Haz 2021, 17:06:27
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
(1, 'Aslı Kaya', 'Asli@gmail.com', '12345678', '', 20, 'Kadın', 'istanbul', '2021-06-14 10:12:50'),
(2, 'Umut Can Cesur', 'UmutCanCesur@gmail.com', '48195263', '', 19, 'Erkek', 'Zonguldak', '2021-06-14 10:12:50'),
(3, 'Volkan Alakent', 'info@extraegitim.com', '22222222', '05352255144', 38, 'Erkek', 'İstanbul', '2021-06-14 10:12:50'),
(4, 'Hakan Alakent', 'hakanalakent@gmail.com', '33333333', '05651547891', 40, 'Erkek', 'Ankara', '2021-06-14 10:12:50'),
(5, 'Ümit Okudan', 'umit@gmail.com', '44444444', '', 40, 'Erkek', 'İzmir', '2021-06-14 10:12:50'),
(6, 'Serkan Çelik', 'serkan@gmail.com', '55555555', '', 35, 'Erkek', 'Kocaeli', '2021-06-14 10:12:50'),
(7, 'Yusuf Kaya', 'yusuf@gmail.com', '66666666', '', 37, 'Erkek', 'Trabzon', '2021-06-14 10:12:50'),
(10, 'Levent Çelik', 'levent@extraegitim.com', 'AAAAAAAA', '05321231231', 37, 'Erkek', 'Afyon', '2021-06-14 10:22:55'),
(19, 'Tarık Boga', 'tarik@extraegitim.com', 'BBBBBBBB', '05485912634', 23, 'Erkek', 'Kırklareli', '2021-06-14 10:36:46'),
(27, 'İcabi Kırgız', 'icabikrz@gmail.com', '123456789', '5395662844', 20, 'Erkek', 'İstanbul', '2021-06-14 10:56:04'),
(28, 'Ela Güzel', 'ElaGuzel@gmail.com', '159623', '05365987584', 20, '', 'Hatay', '2021-06-14 10:58:36'),
(29, 'Dogukan Kaya', 'doguukan@gmail.com', '159487', '05365967851', 20, 'Erkek', 'Giresun', '2021-06-14 11:08:40'),
(30, 'Selinda Kaya', 'Selinda@gmail.com', '159487', '05483974851', 20, 'Kadın', 'Giresun', '2021-06-14 11:09:21'),
(31, 'Kader Bayram', 'Kader@gmail.com', '1594826', '05489152648', 20, 'Kadın', 'Rize', '2021-06-14 11:10:37'),
(32, 'Beril Aleyna İsikdemir', 'berilaleyna@gmail.com', '48195263', '05489157623', 20, 'Kadın', 'Kayseri', '2021-06-14 11:11:56'),
(35, 'Hakan Kaya', 'hakan@gmail.com', '1594826', '05482631958', 19, 'Erkek', 'İstanbul', '2021-06-14 13:37:54');

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
