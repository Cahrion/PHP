-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 26 Ara 2018, 16:58:14
-- Sunucu sürümü: 10.1.30-MariaDB
-- PHP Sürümü: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `extraegitim`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `makaleler`
--

CREATE TABLE `makaleler` (
  `id` int(10) UNSIGNED NOT NULL,
  `makalebasligi` varchar(255) NOT NULL,
  `makaleicerigi` text NOT NULL,
  `gosterimsayisi` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `makaleler`
--

INSERT INTO `makaleler` (`id`, `makalebasligi`, `makaleicerigi`, `gosterimsayisi`) VALUES
(1, 'A Milli Kadın Basketbol Takımı, Ceyhun Yıldızoğluna emanet', 'Türkiye A Milli Kadın Basketbol Milli Takımının başantrenörlüğüne Ceyhun Yıldızoğlu getirildi. 27 Haziran-7 Temmuz tarihleri arasında Letonya ve Sırbistanın ev sahipliğinde düzenlenecek 2019 Avrupa Kadınlar Basketbol Şampiyonasında mücadele edecek A Milli Kadın Basketbol Takımının Başantrenörlüğüne Ceyhun Yıldızoğlu getirildi. Ekrem Memnun ile yolların ayrılmasının ardından A Milli Kadın Basketbol Takımını çalıştıracak isim belli oldu. Türkiye Basketbol Federasyonu, başantrenörlük görevine Ceyhun Yıldızoğluna getirildiğini resmi siteden açıkladı. Yıldızoğlu, 2008-2015 yılları arasında da A Milli Kadın Takım Başantrenörlüğü görevinde bulunmuştu.', 42),
(2, 'Mülayimden olay iddia: Seda Sayan Cumaya gittiğim için kovdu', 'Yıllar önce Seda Sayana programlarında yardımcı olan Mülayim takma isimli Cengiz Çimen, katıldığı programda Sayanın kendisini cuma namazına gittiği için işten çıkardığını iddia etti. Mülayim ismiyle tanınan Cengiz Çimen ve eşi Sibel Çimen Kanal D ekranlarında yayınlanan Müge ve Gülşenle 2. Sayfa programına konuk oldu. Programda çarpıcı açıklamalarda bulunan çiftten Cengiz Çimen, bir dönem programlarında yer aldığı Seda Sayanın kendisini cuma namazına gittiği için işinden ettiğini iddia etti.', 0),
(3, 'Jokeyler 1 Ocak tarihinden itibaren at binmeme kararı aldı', 'Son dakika gelişmesine göre; 20 Aralıkta Resmi Gazetede yayınlanan karar nedeniyle kazançlarında yeni bir düzenlemeye gidilmesi jokeylerin isyan etmesine neden oldu. Halis Karataş, Selim Kaya gibi önemli jokeylerin imzasıyla TJKya verilen dilekçede 1 Ocaktan itibaren at binmeme kararı alındığı belirtildi. Türkiyenin en önemli jokeylerinin imzasıyla yayınlanan bildiriye göre, 1 Ocaktan itibaren grev kararı alan jokeyler 20 Aralıkta Resmi Gazetede yayınlanan kararın geri alınmaması halinde at binmeyeceklerini açıkladı.', 1),
(4, 'Ünal Karaman: Ozan Tufana Trabzonspor ilaç gibi gelir', 'Trabzonspor Teknik Direktörü Ünal Karaman, orta sahaya Fenerbahçeden Ozan Tufanın transfer edilmesini istedi. Ünal Karaman, Ozan futbolu çok özlemiş olmalı. Trabzon ona ilaç gibi gelir. Burada sadece futbola konsantre olabilir diyerek genç futbolcu için yönetime rapor verdi.', 3);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `makaleler`
--
ALTER TABLE `makaleler`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `makaleler`
--
ALTER TABLE `makaleler`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
