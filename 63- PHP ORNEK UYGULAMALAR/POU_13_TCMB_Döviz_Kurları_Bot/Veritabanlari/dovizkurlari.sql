-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost:3307
-- Üretim Zamanı: 22 Haz 2021, 12:00:50
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
-- Tablo için tablo yapısı `dovizkurlari`
--

CREATE TABLE `dovizkurlari` (
  `id` int(10) UNSIGNED NOT NULL,
  `adi` varchar(100) NOT NULL,
  `kodu` varchar(5) NOT NULL,
  `birim` int(10) UNSIGNED NOT NULL,
  `alis` double NOT NULL,
  `satis` double NOT NULL,
  `efektifalis` double NOT NULL,
  `efektifsatis` double NOT NULL,
  `zaman` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `dovizkurlari`
--

INSERT INTO `dovizkurlari` (`id`, `adi`, `kodu`, `birim`, `alis`, `satis`, `efektifalis`, `efektifsatis`, `zaman`) VALUES
(1, 'ABD DOLARI', 'USD', 1, 8.7497, 8.7655, 8.7436, 8.7787, '1624355889'),
(2, 'AVUSTRALYA DOLARI', 'AUD', 1, 6.553, 6.5957, 6.5228, 6.6353, '1624355889'),
(3, 'DANİMARKA KRONU', 'DKK', 1, 1.3968, 1.4036, 1.3958, 1.4069, '1624355889'),
(4, 'EURO', 'EUR', 1, 10.4032, 10.422, 10.3959, 10.4376, '1624355889'),
(5, 'İNGİLİZ STERLİNİ', 'GBP', 1, 12.1006, 12.1637, 12.0921, 12.1819, '1624355889'),
(6, 'İSVİÇRE FRANGI', 'CHF', 1, 9.4758, 9.5367, 9.4616, 9.551, '1624355889'),
(7, 'İSVEÇ KRONU', 'SEK', 1, 1.0134, 1.0239, 1.0127, 1.0263, '1624355889'),
(8, 'KANADA DOLARI', 'CAD', 1, 7.0235, 7.0552, 6.9975, 7.082, '1624355889'),
(9, 'KUVEYT DİNARI', 'KWD', 1, 28.8901, 29.2682, 28.4568, 29.7072, '1624355889'),
(10, 'NORVEÇ KRONU', 'NOK', 1, 1.0087, 1.0155, 1.008, 1.0178, '1624355889'),
(11, 'SUUDİ ARABİSTAN RİYALİ', 'SAR', 1, 2.3331, 2.3373, 2.3156, 2.3549, '1624355889'),
(12, 'JAPON YENİ', 'JPY', 100, 7.9327, 7.9852, 7.9033, 8.0156, '1624355889'),
(13, 'BULGAR LEVASI', 'BGN', 1, 5.289, 5.3582, 0, 0, '1624355889'),
(14, 'RUMEN LEYİ', 'RON', 1, 2.1001, 2.1276, 0, 0, '1624355889'),
(15, 'RUS RUBLESİ', 'RUB', 1, 0.11897, 0.12053, 0, 0, '1624355889'),
(16, 'İRAN RİYALİ', 'IRR', 100, 0.02072, 0.02099, 0, 0, '1624355889'),
(17, 'ÇİN YUANI', 'CNY', 1, 1.3454, 1.363, 0, 0, '1624355889'),
(18, 'PAKİSTAN RUPİSİ', 'PKR', 1, 0.0552, 0.05592, 0, 0, '1624355889'),
(19, 'KATAR RİYALİ', 'QAR', 1, 2.3896, 2.4209, 0, 0, '1624355889'),
(20, 'ÖZEL ÇEKME HAKKI (SDR)                            ', 'XDR', 1, 12.4957, 0, 0, 0, '1624355889');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `dovizkurlari`
--
ALTER TABLE `dovizkurlari`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `dovizkurlari`
--
ALTER TABLE `dovizkurlari`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
