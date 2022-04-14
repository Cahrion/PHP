-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost:3307
-- Üretim Zamanı: 08 Tem 2021, 22:23:12
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
-- Tablo için tablo yapısı `adresler`
--

CREATE TABLE `adresler` (
  `id` int(10) UNSIGNED NOT NULL,
  `uyeid` int(10) UNSIGNED NOT NULL,
  `AdiSoyadi` varchar(100) NOT NULL,
  `Adres` varchar(255) NOT NULL,
  `Ilce` varchar(100) NOT NULL,
  `Sehir` varchar(100) NOT NULL,
  `TelefonNumarasi` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ayarlar`
--

CREATE TABLE `ayarlar` (
  `id` tinyint(1) UNSIGNED NOT NULL,
  `SiteAdi` varchar(50) NOT NULL,
  `SiteTitle` varchar(60) NOT NULL,
  `SiteDescription` varchar(150) NOT NULL,
  `SiteKeywords` varchar(255) NOT NULL,
  `SiteCopyright` varchar(255) NOT NULL,
  `SiteLogosu` varchar(30) NOT NULL,
  `SiteEmailHostAdresi` varchar(100) NOT NULL,
  `SiteEmailAdresi` varchar(50) NOT NULL,
  `SiteEmailSifresi` varchar(50) NOT NULL,
  `SiteLinki` varchar(100) NOT NULL,
  `SosyalLinkFacebook` varchar(255) NOT NULL,
  `SosyalLinkTwitter` varchar(255) NOT NULL,
  `SosyalLinkLinkedin` varchar(255) NOT NULL,
  `SosyalLinkInstagram` varchar(255) NOT NULL,
  `SosyalLinkYoutube` varchar(255) NOT NULL,
  `SosyalLinkPinterest` varchar(255) NOT NULL,
  `UcretsizKargoBaraji` int(10) UNSIGNED NOT NULL,
  `USDKuru` int(10) NOT NULL,
  `EURKuru` int(10) NOT NULL,
  `ClientID` varchar(100) NOT NULL,
  `StoreKey` varchar(100) NOT NULL,
  `ApiKullanicisi` varchar(100) NOT NULL,
  `ApiSifresi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `bankahesaplarimiz`
--

CREATE TABLE `bankahesaplarimiz` (
  `id` int(10) UNSIGNED NOT NULL,
  `BankaLogosu` varchar(50) NOT NULL,
  `BankaAdi` varchar(100) NOT NULL,
  `KonumSehir` varchar(100) NOT NULL,
  `KonumUlke` varchar(100) NOT NULL,
  `SubeAdi` varchar(100) NOT NULL,
  `SubeKodu` varchar(100) NOT NULL,
  `ParaBirimi` varchar(100) NOT NULL,
  `HesapSahibi` varchar(255) NOT NULL,
  `HesapNumarasi` varchar(100) NOT NULL,
  `IbanNumarasi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `bannerlar`
--

CREATE TABLE `bannerlar` (
  `id` int(10) UNSIGNED NOT NULL,
  `BannerAlani` varchar(100) NOT NULL,
  `BannerAdi` varchar(100) NOT NULL,
  `BannerResmi` varchar(30) NOT NULL,
  `GosterimSayisi` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `favoriler`
--

CREATE TABLE `favoriler` (
  `id` int(10) UNSIGNED NOT NULL,
  `UrunId` int(10) UNSIGNED NOT NULL,
  `UyeId` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `havalebildirimleri`
--

CREATE TABLE `havalebildirimleri` (
  `id` int(10) UNSIGNED NOT NULL,
  `BankaId` int(10) UNSIGNED NOT NULL,
  `AdiSoyadi` varchar(100) NOT NULL,
  `EmailAdresi` varchar(255) NOT NULL,
  `TelefonNumarasi` varchar(11) NOT NULL,
  `Aciklama` text NOT NULL,
  `IslemTarihi` int(10) UNSIGNED NOT NULL,
  `durum` tinyint(1) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `havalebilgisi`
--

CREATE TABLE `havalebilgisi` (
  `id` int(10) UNSIGNED NOT NULL,
  `logo` varchar(100) NOT NULL,
  `adi` varchar(100) NOT NULL,
  `icerik` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `iletisimbilgisi`
--

CREATE TABLE `iletisimbilgisi` (
  `id` int(10) UNSIGNED NOT NULL,
  `logo` varchar(100) NOT NULL,
  `adi` varchar(100) NOT NULL,
  `icerik` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kargofirmalari`
--

CREATE TABLE `kargofirmalari` (
  `id` int(10) UNSIGNED NOT NULL,
  `KargoFirmasiLogosu` varchar(30) NOT NULL,
  `KargoFirmasiAdi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `menuler`
--

CREATE TABLE `menuler` (
  `id` int(10) UNSIGNED NOT NULL,
  `UrunTuru` varchar(100) NOT NULL,
  `MenuAdi` varchar(50) NOT NULL,
  `UrunSayisi` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sepet`
--

CREATE TABLE `sepet` (
  `id` int(10) UNSIGNED NOT NULL,
  `SepetNumarasi` int(10) UNSIGNED NOT NULL,
  `UyeId` int(10) UNSIGNED NOT NULL,
  `UrunId` int(10) UNSIGNED NOT NULL,
  `AdresId` int(10) UNSIGNED NOT NULL,
  `VaryantId` int(10) UNSIGNED NOT NULL,
  `UrunAdedi` tinyint(3) UNSIGNED NOT NULL,
  `KargoId` int(10) UNSIGNED NOT NULL,
  `OdemeSecimi` varchar(50) NOT NULL,
  `TaksitSecimi` tinyint(2) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sifremiunuttumbilgisi`
--

CREATE TABLE `sifremiunuttumbilgisi` (
  `id` int(10) UNSIGNED NOT NULL,
  `logo` varchar(100) NOT NULL,
  `adi` varchar(100) NOT NULL,
  `icerik` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `siparisler`
--

CREATE TABLE `siparisler` (
  `id` int(10) UNSIGNED NOT NULL,
  `UyeId` int(10) UNSIGNED NOT NULL,
  `SiparisNumarasi` int(10) UNSIGNED NOT NULL,
  `UrunId` int(10) UNSIGNED NOT NULL,
  `UrunTuru` varchar(50) NOT NULL,
  `UrunAdi` varchar(100) NOT NULL,
  `UrunFiyati` double UNSIGNED NOT NULL,
  `KdvOrani` int(2) UNSIGNED NOT NULL,
  `UrunAdedi` int(3) UNSIGNED NOT NULL,
  `ToplamUrunFiyati` double UNSIGNED NOT NULL,
  `KargoFirmasiSecimi` varchar(100) NOT NULL,
  `KargoUcreti` double UNSIGNED NOT NULL,
  `UrunResmiBir` varchar(30) NOT NULL,
  `VaryantBasligi` varchar(100) NOT NULL,
  `VaryantSecimi` varchar(100) NOT NULL,
  `AdresAdiSoyadi` varchar(100) NOT NULL,
  `AdresDetay` varchar(255) NOT NULL,
  `AdresTelefon` varchar(11) NOT NULL,
  `OdemeSecimi` varchar(25) NOT NULL,
  `TaksitSecimi` int(2) UNSIGNED NOT NULL,
  `SiparisTarihi` int(10) UNSIGNED NOT NULL,
  `SiparisIpAdresi` varchar(20) NOT NULL,
  `OnayDurumu` tinyint(1) UNSIGNED NOT NULL,
  `KargoDurumu` tinyint(1) UNSIGNED NOT NULL,
  `KargoGonderiKodu` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sorular`
--

CREATE TABLE `sorular` (
  `id` int(10) UNSIGNED NOT NULL,
  `soru` varchar(255) NOT NULL,
  `cevap` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sozlesmelervemetinler`
--

CREATE TABLE `sozlesmelervemetinler` (
  `id` tinyint(1) UNSIGNED NOT NULL,
  `HakkimizdaMetni` text NOT NULL,
  `UyelikSozlesmesiMetni` text NOT NULL,
  `KullanimKosullariMetni` text NOT NULL,
  `GizlilikSozlesmesiMetni` text NOT NULL,
  `MesafeliSatisSozlesmesiMetni` text NOT NULL,
  `TeslimatMetni` text NOT NULL,
  `IptalIadeDegisimMetni` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `urunler`
--

CREATE TABLE `urunler` (
  `id` int(10) UNSIGNED NOT NULL,
  `MenuId` int(10) UNSIGNED NOT NULL,
  `UrunAdi` varchar(255) NOT NULL,
  `UrunTuru` varchar(50) NOT NULL,
  `UrunFiyati` double NOT NULL,
  `ParaBirimi` char(3) NOT NULL,
  `KdvOrani` int(2) UNSIGNED NOT NULL,
  `UrunAciklamasi` text NOT NULL,
  `UrunResmiBir` varchar(30) NOT NULL,
  `UrunResmiIki` varchar(30) NOT NULL,
  `UrunResmiUc` varchar(30) NOT NULL,
  `UrunResmiDort` varchar(30) NOT NULL,
  `VaryantBasligi` varchar(100) NOT NULL,
  `KargoUcreti` double UNSIGNED NOT NULL,
  `Durumu` tinyint(1) UNSIGNED NOT NULL,
  `ToplamSatisSayisi` int(10) UNSIGNED NOT NULL,
  `YorumSayisi` tinyint(1) UNSIGNED NOT NULL,
  `ToplamYorumPuani` int(10) UNSIGNED NOT NULL,
  `GoruntulenmeSayisi` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `urunvaryantlari`
--

CREATE TABLE `urunvaryantlari` (
  `id` int(10) UNSIGNED NOT NULL,
  `UrunId` int(10) UNSIGNED NOT NULL,
  `VaryantAdi` varchar(100) NOT NULL,
  `StokAdedi` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `uyegirisbilgisi`
--

CREATE TABLE `uyegirisbilgisi` (
  `id` int(10) UNSIGNED NOT NULL,
  `logo` varchar(100) NOT NULL,
  `adi` varchar(100) NOT NULL,
  `icerik` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `uyeler`
--

CREATE TABLE `uyeler` (
  `id` int(10) UNSIGNED NOT NULL,
  `EmailAdresi` varchar(100) NOT NULL,
  `Sifre` varchar(255) NOT NULL,
  `IsimSoyisim` varchar(255) NOT NULL,
  `TelefonNumarasi` varchar(11) NOT NULL,
  `Cinsiyet` varchar(5) NOT NULL,
  `Durumu` tinyint(1) UNSIGNED NOT NULL,
  `SilinmeDurumu` tinyint(1) UNSIGNED NOT NULL,
  `KayitTarihi` varchar(100) NOT NULL,
  `KayitIpAdresi` varchar(23) NOT NULL,
  `AktivasyonKodu` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `uyeolbilgisi`
--

CREATE TABLE `uyeolbilgisi` (
  `id` int(10) UNSIGNED NOT NULL,
  `logo` varchar(255) NOT NULL,
  `adi` varchar(255) NOT NULL,
  `icerik` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yoneticiler`
--

CREATE TABLE `yoneticiler` (
  `id` int(10) UNSIGNED NOT NULL,
  `KullaniciAdi` varchar(100) NOT NULL,
  `Sifre` varchar(255) NOT NULL,
  `IsimSoyisim` varchar(100) NOT NULL,
  `EmailAdresi` varchar(100) NOT NULL,
  `TelefonNumarasi` varchar(100) NOT NULL,
  `SilinemeyecekYoneticiDurumu` tinyint(1) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yorumlar`
--

CREATE TABLE `yorumlar` (
  `id` int(10) UNSIGNED NOT NULL,
  `UrunId` int(10) UNSIGNED NOT NULL,
  `UyeId` int(10) UNSIGNED NOT NULL,
  `Puan` tinyint(1) UNSIGNED NOT NULL,
  `YorumMetni` text NOT NULL,
  `YorumTarihi` int(10) UNSIGNED NOT NULL,
  `YorumIpAdresi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `adresler`
--
ALTER TABLE `adresler`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `ayarlar`
--
ALTER TABLE `ayarlar`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `bankahesaplarimiz`
--
ALTER TABLE `bankahesaplarimiz`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `bannerlar`
--
ALTER TABLE `bannerlar`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `favoriler`
--
ALTER TABLE `favoriler`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `havalebildirimleri`
--
ALTER TABLE `havalebildirimleri`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `havalebilgisi`
--
ALTER TABLE `havalebilgisi`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `iletisimbilgisi`
--
ALTER TABLE `iletisimbilgisi`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `kargofirmalari`
--
ALTER TABLE `kargofirmalari`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `menuler`
--
ALTER TABLE `menuler`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `sepet`
--
ALTER TABLE `sepet`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `sifremiunuttumbilgisi`
--
ALTER TABLE `sifremiunuttumbilgisi`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `siparisler`
--
ALTER TABLE `siparisler`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `sorular`
--
ALTER TABLE `sorular`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `sozlesmelervemetinler`
--
ALTER TABLE `sozlesmelervemetinler`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `urunler`
--
ALTER TABLE `urunler`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `urunvaryantlari`
--
ALTER TABLE `urunvaryantlari`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `uyegirisbilgisi`
--
ALTER TABLE `uyegirisbilgisi`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `uyeler`
--
ALTER TABLE `uyeler`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `uyeolbilgisi`
--
ALTER TABLE `uyeolbilgisi`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `yoneticiler`
--
ALTER TABLE `yoneticiler`
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
-- Tablo için AUTO_INCREMENT değeri `adresler`
--
ALTER TABLE `adresler`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `ayarlar`
--
ALTER TABLE `ayarlar`
  MODIFY `id` tinyint(1) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `bankahesaplarimiz`
--
ALTER TABLE `bankahesaplarimiz`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `bannerlar`
--
ALTER TABLE `bannerlar`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `favoriler`
--
ALTER TABLE `favoriler`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `havalebildirimleri`
--
ALTER TABLE `havalebildirimleri`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `havalebilgisi`
--
ALTER TABLE `havalebilgisi`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `iletisimbilgisi`
--
ALTER TABLE `iletisimbilgisi`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `kargofirmalari`
--
ALTER TABLE `kargofirmalari`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `menuler`
--
ALTER TABLE `menuler`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `sepet`
--
ALTER TABLE `sepet`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `sifremiunuttumbilgisi`
--
ALTER TABLE `sifremiunuttumbilgisi`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `siparisler`
--
ALTER TABLE `siparisler`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `sorular`
--
ALTER TABLE `sorular`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `sozlesmelervemetinler`
--
ALTER TABLE `sozlesmelervemetinler`
  MODIFY `id` tinyint(1) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `urunler`
--
ALTER TABLE `urunler`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `urunvaryantlari`
--
ALTER TABLE `urunvaryantlari`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `uyegirisbilgisi`
--
ALTER TABLE `uyegirisbilgisi`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `uyeler`
--
ALTER TABLE `uyeler`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `uyeolbilgisi`
--
ALTER TABLE `uyeolbilgisi`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `yoneticiler`
--
ALTER TABLE `yoneticiler`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `yorumlar`
--
ALTER TABLE `yorumlar`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
