-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost:3307
-- Üretim Zamanı: 08 Tem 2021, 22:20:38
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

--
-- Tablo döküm verisi `adresler`
--

INSERT INTO `adresler` (`id`, `uyeid`, `AdiSoyadi`, `Adres`, `Ilce`, `Sehir`, `TelefonNumarasi`) VALUES
(1, 1, 'Icabi Kırgız', 'Deney Adres 1.1', 'Bulancak', 'Giresun', '05395664815'),
(2, 1, 'Ahmet Ulu', 'Deney adres 2', 'Pendik', 'İstanbul', '05326041852'),
(4, 1, 'Ahmet Kaya', 'Giresun / Bulancak', 'gaziosmanpaşa', 'istanbul', '05148621526'),
(6, 1, 'Ahme&#039;t Kaya', 'Giresun / Bulancak', 'gaziosmanpaşa', 'istanbul', '05148621526'),
(7, 2, 'Ahmet Kaya', 'Giresun / Bulancak', 'gaziosmanpaşa', 'istanbul', '05148621526');

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

--
-- Tablo döküm verisi `ayarlar`
--

INSERT INTO `ayarlar` (`id`, `SiteAdi`, `SiteTitle`, `SiteDescription`, `SiteKeywords`, `SiteCopyright`, `SiteLogosu`, `SiteEmailHostAdresi`, `SiteEmailAdresi`, `SiteEmailSifresi`, `SiteLinki`, `SosyalLinkFacebook`, `SosyalLinkTwitter`, `SosyalLinkLinkedin`, `SosyalLinkInstagram`, `SosyalLinkYoutube`, `SosyalLinkPinterest`, `UcretsizKargoBaraji`, `USDKuru`, `EURKuru`, `ClientID`, `StoreKey`, `ApiKullanicisi`, `ApiSifresi`) VALUES
(1, 'AstroGorya', 'Ayakkabı Mağazası', 'Ayakkabı modelleri uygun fiyat ve ödeme koşulları ile AstroGorya.com&#039;da kaliteli ayakkabı markaları için tıklayınız', 'ayakkabı, erkek ayakkabısı, kadın ayakkabısı, giyim', 'Copyright 2021 - AstroGorya - Tüm Hakları Saklıdır.', 'Logo.png', 'smtp.gmail.com', 'kirgizicabi@gmail.com', 'HotMaster48$', 'https://localhost/AstroGorya/', 'https://www.facebook.com/AstroGorya', 'https://www.twitter.com/AstroGorya', 'https://www.linkedin.com/AstroGorya', 'https://www.instagram.com/AstroGorya', 'https://www.youtube.com/AstroGorya', 'https://www.pinterest.com/AstroGorya', 250, 9, 10, '00000000', '11111111', '10', '10');

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

--
-- Tablo döküm verisi `bankahesaplarimiz`
--

INSERT INTO `bankahesaplarimiz` (`id`, `BankaLogosu`, `BankaAdi`, `KonumSehir`, `KonumUlke`, `SubeAdi`, `SubeKodu`, `ParaBirimi`, `HesapSahibi`, `HesapNumarasi`, `IbanNumarasi`) VALUES
(1, 'a9e8c71542daf53528460ca09.png', 'Yapı Kredi', 'İstanbul', 'Türkiye', 'Fındıkzade', '1234', 'Türk Lirası', 'Icabi Kırgız', '1234567890', 'TR000000000000000000000000'),
(2, 'AkbankLogo.png', 'Akbank', 'Ankara', 'Türkiye', 'Fındıkzade', '1234', 'Türk Lirası', 'Icabi Kırgız', '1234567890', 'TR000000000000000000000000'),
(3, '8c03eda66a3766c73bf4661b5.png', 'Garanti Bankası', 'İzmir', 'Türkiye', 'Fındıkzade', '1234', 'Türk Lirası', 'Icabi Kırgız', '1234567890', 'TR000000000000000000000000'),
(4, 'IsBankasiLogo.png', 'İş bankası', 'Adana', 'Türkiye', 'Fındıkzade', '1234', 'Türk Lirası', 'Icabi Kırgız', '1234567890', 'TR000000000000000000000000'),
(5, '98a34b34dd79bee2b4359176a.png', 'DenizBank', 'Giresun', 'Türkiye', 'Fındıkzade', '1234', 'Türk Lirası', 'Icabi Kırgız', '1234567890', 'TR000000000000000000000000'),
(8, '8b5ed4d9ab8aed929d87a6ced.png', 'QNB Finansbank', 'Adana', 'Türkiye', 'Fındıkzade', '1234', 'Türk Lirası', 'Icabi Kırgız', '1234567890', 'TR000000000000000000000000');

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

--
-- Tablo döküm verisi `bannerlar`
--

INSERT INTO `bannerlar` (`id`, `BannerAlani`, `BannerAdi`, `BannerResmi`, `GosterimSayisi`) VALUES
(2, 'Menu Altı', 'Örnek Reklam 2', '250x500_Reklam_2.png', 77),
(3, 'Menu Altı', 'Örnek Reklam 3', '250x500_Reklam_3.png', 78),
(4, 'Ürün Detay', 'Örnek Reklam 4', '350x350_Reklam_1.png', 178),
(5, 'Ürün Detay', 'Örnek Reklam 5', '350x350_Reklam_2.png', 178),
(6, 'Ana Sayfa', 'Örnek Reklam 6', '71d19c7a4a7b55a4ced119012.jpg', 50),
(7, 'Ana Sayfa', 'Örnek Reklam 7\r\n', 'BannerResmi2.jpg', 50),
(9, 'Menu Altı', 'Ek banner', '7b2cbe4e6e9d1ff86baab0a83.png', 78);

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

--
-- Tablo döküm verisi `havalebildirimleri`
--

INSERT INTO `havalebildirimleri` (`id`, `BankaId`, `AdiSoyadi`, `EmailAdresi`, `TelefonNumarasi`, `Aciklama`, `IslemTarihi`, `durum`) VALUES
(2, 2, 'icabi kırgız', 'icabikrz@gmail.com', '00000000000', 'adsadw', 1624698466, 0),
(5, 3, 'icabi kırgız', 'icabikrz@gmail.com', '00000000000', 'adsadw', 1624698466, 1);

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

--
-- Tablo döküm verisi `havalebilgisi`
--

INSERT INTO `havalebilgisi` (`id`, `logo`, `adi`, `icerik`) VALUES
(1, 'Banka20x20.png', 'Havale / EFT İşlemi', 'Müşteri tarafından öncelikle, banka hesaplarımız sayfasında bulunan herhangi bir hesaba ödeme işlemini gerçekleştirilir.'),
(2, 'DokumanKirmiziKalemli20x20.png', 'Bildirim İşlemi', 'Ödeme işleminizi tamamladıktan sonra \"Havale Bildirim Formu\" sayfasından müşteri yapmış olduğu ödeme için bildirim formunu doldurarak online olarak gönderir.'),
(3, 'CarklarSiyah20x20.png', 'Kontroller', '\"Havale Bildirim Formu\"\'nuz tarafıma ulaştığı anda ilgili departman tarafından yapmış olduğunuz havale / EFT işlemi ilgili banka üzerinden kontrol edilir'),
(4, 'InsanlarSiyah20x20.png', 'Onay / Red', 'Havale bildirimi geçerli yani hesaba ödeme geçmiş ise, yönetici ilgili ödeme onayını vererek, sipariş teslimat birimine iletir.'),
(5, 'SaatEsnetikGri20x20.png', 'Sipariş hazırlama ve Teslimat', 'Yönetici ödeme onayından sonra, sayfamız üzerinden vermiş olduğunuz siparişiniz en kısa sürede hazırlanarak kargoya teslim edilir ve tarafınıza ulaştırılır.');

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

--
-- Tablo döküm verisi `iletisimbilgisi`
--

INSERT INTO `iletisimbilgisi` (`id`, `logo`, `adi`, `icerik`) VALUES
(1, 'DokumanKirmiziKalemli20x20.png', 'Geçersiz Bilgi Girişi', 'İsim soyisim, e-mail adresi veya cep telefonu bilgileri rastgele veya geçersiz şekilde doldurmak suretiyle gönderilen mesajlar.'),
(2, 'UcuncuSahislar20x20.png', '3. Şahıslar', 'AstroGorya kullanıcı hesapları hakkında (Örneğin; Bilgi edinme, şifre talebi vb. gibi) herhangi bir yakını, arkadaşı vb. gibi 3. şahıslar tarafından gönderilen mesajlar.'),
(3, 'HedefMaviOkSiyah20x20.png', 'Reklam - Tanıtım', 'Site, kurum veya kuruluşlar ile ilgili reklam veya tanıtım içeren mesajlar.'),
(4, 'InsanlarSiyah20x20.png', 'Politika - Siyaset', 'Politik veya siyasi içerikli mesajlar.');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kargofirmalari`
--

CREATE TABLE `kargofirmalari` (
  `id` int(10) UNSIGNED NOT NULL,
  `KargoFirmasiLogosu` varchar(30) NOT NULL,
  `KargoFirmasiAdi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `kargofirmalari`
--

INSERT INTO `kargofirmalari` (`id`, `KargoFirmasiLogosu`, `KargoFirmasiAdi`) VALUES
(1, '88368dd0c4708e5953cecc14a.png', 'Yurtici Kargo'),
(2, '84bb289a21815891ec3bac8a6.png', 'Aras Kargo'),
(3, 'a9bd44e24bbd347b5023ede5e.png', 'MNG Kargo'),
(4, '50eabc68a63f0f5f8f16a3f7d.png', 'Sürat Kargo'),
(7, 'de49d7f7f0b85651416f2ebcc.png', 'PTT Kargo');

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

--
-- Tablo döküm verisi `menuler`
--

INSERT INTO `menuler` (`id`, `UrunTuru`, `MenuAdi`, `UrunSayisi`) VALUES
(1, 'Erkek Ayakkabısı', 'Günlük Ayakkabılar', 3),
(2, 'Erkek Ayakkabısı', 'Klasik', 4),
(3, 'Erkek Ayakkabısı', 'Klas Ayakkabılar', 1),
(5, 'Kadın Ayakkabısı', 'Günlük Ayakkabılar', 2),
(6, 'Kadın Ayakkabısı', 'Klasik Ayakakbılar', 0),
(8, 'Kadın Ayakkabısı', 'Topuklu Ayakkabılar', 3),
(9, 'Cocuk Ayakkabısı', 'Okul Ayakkabıları', 4),
(11, 'Cocuk Ayakkabısı', 'Spor Ayakkabılar', 0),
(12, 'Kadın Ayakkabısı', 'Süslü Ayakkabılar', 0);

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

--
-- Tablo döküm verisi `sifremiunuttumbilgisi`
--

INSERT INTO `sifremiunuttumbilgisi` (`id`, `logo`, `adi`, `icerik`) VALUES
(1, 'CarklarSiyah20x20.png', 'Bilgi Kontrolü', 'Kullanıcının form alanına girmiş olduğu değer veya değerler veritabanımızda tam detaylı olarak filtrelenerek kontrol edilir.'),
(2, 'CarklarSiyah20x20.png', 'E-Mail Gönderimi - İçerik', 'Bilgi kontrolü başarılı olur ise, kullanıcının veritabanımızda kayıtlı olan e-mail adresine yeni şifre oluşturma içerikli bir mail gönderilir.'),
(3, 'CarklarSiyah20x20.png', 'Şifre Sıfırlama - Oluşturma', 'Kullanıcı, kendisine iletilen mail içerisindeki \"Yeni Şifre Oluştur\" metnine tıklayacak olur ise, site yeni şifre oluşturma sayfası açılır ve kullanıcıdan, yeni hesap şifresini oluşturması istenir.'),
(4, 'CarklarSiyah20x20.png', 'Sonuç', 'Kullanıcı yeni oluşturmuş olduğu hesap şifresi ile siteye giriş yapmaya hazırdır.');

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

--
-- Tablo döküm verisi `siparisler`
--

INSERT INTO `siparisler` (`id`, `UyeId`, `SiparisNumarasi`, `UrunId`, `UrunTuru`, `UrunAdi`, `UrunFiyati`, `KdvOrani`, `UrunAdedi`, `ToplamUrunFiyati`, `KargoFirmasiSecimi`, `KargoUcreti`, `UrunResmiBir`, `VaryantBasligi`, `VaryantSecimi`, `AdresAdiSoyadi`, `AdresDetay`, `AdresTelefon`, `OdemeSecimi`, `TaksitSecimi`, `SiparisTarihi`, `SiparisIpAdresi`, `OnayDurumu`, `KargoDurumu`, `KargoGonderiKodu`) VALUES
(1, 1, 19, 9, 'Erkek Ayakkabısı', 'Klasik Siyah Erkek Ayakkabısı', 75, 18, 4, 300, 'Aras Kargo', 0, '4.jpg', 'Numara', '40', 'Ahme&#039;t Kaya', 'Giresun / Bulancak gaziosmanpaşa istanbul', '05148621526', 'Banka Havalesi', 0, 1625381053, '127.0.0.1', 0, 0, '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sorular`
--

CREATE TABLE `sorular` (
  `id` int(10) UNSIGNED NOT NULL,
  `soru` varchar(255) NOT NULL,
  `cevap` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `sorular`
--

INSERT INTO `sorular` (`id`, `soru`, `cevap`) VALUES
(1, 'Bu proje nasıl başladı.', 'Bu proje bir anlık bir fikir olarak başladı.'),
(2, '2. Sorumuzun Başlığı', '2. Sorumuzun Cevap Metni2. Sorumuzun Cevap Metni2. Sorumuzun Cevap Metni2. Sorumuzun Cevap Metni2. Sorumuzun Cevap Metni2. Sorumuzun Cevap Metni2. Sorumuzun Cevap Metni2. Sorumuzun Cevap Metni2. Sorumuzun Cevap Metni2. Sorumuzun Cevap Metni'),
(3, '3. Sorumuzun Başlığı', '3. Sorumuzun Cevap Metni3. Sorumuzun Cevap Metni3. Sorumuzun Cevap Metni3. Sorumuzun Cevap Metni3. Sorumuzun Cevap Metni3. Sorumuzun Cevap Metni3. Sorumuzun Cevap Metni3. Sorumuzun Cevap Metni3. Sorumuzun Cevap Metni3. Sorumuzun Cevap Metni3. Sorumuzun Cevap Metni3. Sorumuzun Cevap Metni3. Sorumuzun Cevap Metni'),
(4, '4. Sorumuzun Başlığı', '4. Sorumuzun Cevap Metni4. Sorumuzun Cevap Metni4. Sorumuzun Cevap Metni4. Sorumuzun Cevap Metni4. Sorumuzun Cevap Metni4. Sorumuzun Cevap Metni4. Sorumuzun Cevap Metni4. Sorumuzun Cevap Metni4. Sorumuzun Cevap Metni4. Sorumuzun Cevap Metni4. Sorumuzun Cevap Metni4. Sorumuzun Cevap Metni'),
(5, '5. Sorumuzun Başlığı', '5. Sorumuzun Cevap Metni5. Sorumuzun Cevap Metni5. Sorumuzun Cevap Metni5. Sorumuzun Cevap Metni5. Sorumuzun Cevap Metni5. Sorumuzun Cevap Metni5. Sorumuzun Cevap Metni5. Sorumuzun Cevap Metni5. Sorumuzun Cevap Metni5. Sorumuzun Cevap Metni5. Sorumuzun Cevap Metni5. Sorumuzun Cevap Metni5. Sorumuzun Cevap Metni5. Sorumuzun Cevap Metni5. Sorumuzun Cevap Metni'),
(6, '6. Sorumuzun Başlığı', '6. Sorumuzun Cevap Metni6. Sorumuzun Cevap Metni6. Sorumuzun Cevap Metni6. Sorumuzun Cevap Metni6. Sorumuzun Cevap Metni6. Sorumuzun Cevap Metni6. Sorumuzun Cevap Metni6. Sorumuzun Cevap Metni6. Sorumuzun Cevap Metni6. Sorumuzun Cevap Metni6. Sorumuzun Cevap Metni6. Sorumuzun Cevap Metni6. Sorumuzun Cevap Metni6. Sorumuzun Cevap Metni6. Sorumuzun Cevap Metni6. Sorumuzun Cevap Metni'),
(7, '7. Sorumuzun Başlığı', '7. Sorumuzun Cevap Metni7. Sorumuzun Cevap Metni7. Sorumuzun Cevap Metni7. Sorumuzun Cevap Metni7. Sorumuzun Cevap Metni7. Sorumuzun Cevap Metni7. Sorumuzun Cevap Metni7. Sorumuzun Cevap Metni7. Sorumuzun Cevap Metni7. Sorumuzun Cevap Metni'),
(8, '8. Sorumuzun Başlığı', '8. Sorumuzun Cevap Metni8. Sorumuzun Cevap Metni8. Sorumuzun Cevap Metni8. Sorumuzun Cevap Metni8. Sorumuzun Cevap Metni8. Sorumuzun Cevap Metni8. Sorumuzun Cevap Metni8. Sorumuzun Cevap Metni8. Sorumuzun Cevap Metni8. Sorumuzun Cevap Metni8. Sorumuzun Cevap Metni'),
(9, '9. Sorumuzun Başlığı', '9. Sorumuzun Cevap Metni9. Sorumuzun Cevap Metni9. Sorumuzun Cevap Metni9. Sorumuzun Cevap Metni9. Sorumuzun Cevap Metni9. Sorumuzun Cevap Metni9. Sorumuzun Cevap Metni9. Sorumuzun Cevap Metni9. Sorumuzun Cevap Metni9. Sorumuzun Cevap Metni9. Sorumuzun Cevap Metni9. Sorumuzun Cevap Metni9. Sorumuzun Cevap Metni'),
(11, 'Üyelik İşlemleri Bilgileri', 'Kayıt olmak için kayıt ol bölümüne eğer kayıtlıysanız giriş yap bölümünden giriş yapınız');

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

--
-- Tablo döküm verisi `sozlesmelervemetinler`
--

INSERT INTO `sozlesmelervemetinler` (`id`, `HakkimizdaMetni`, `UyelikSozlesmesiMetni`, `KullanimKosullariMetni`, `GizlilikSozlesmesiMetni`, `MesafeliSatisSozlesmesiMetni`, `TeslimatMetni`, `IptalIadeDegisimMetni`) VALUES
(1, 'Burası Hakkımızda Metnidir.BuBurası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir..Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.Burası Hakkımızda Metnidir.', 'Burası Üyelik Sözleşmesi Metnidir.Burası Üyelik Sözleşmesi Metnidir.Burası Üyelik Sözleşmesi Metnidir.Burası Üyelik Sözleşmesi Metnidir.Burası Üyelik Sözleşmesi Metnidir.Burası Üyelik Sözleşmesi Metnidir.Burası Üyelik Sözleşmesi Metnidir.Burası Üyelik Sözleşmesi Metnidir.Burası Üyelik Sözleşmesi Metnidir.Burası Üyelik Sözleşmesi Metnidir.Burası Üyelik Sözleşmesi Metnidir.Burası Üyelik Sözleşmesi Metnidir.Burası Üyelik Sözleşmesi Metnidir.Burası Üyelik Sözleşmesi Metnidir.Burası Üyelik Sözleşmesi Metnidir.Burası Üyelik Sözleşmesi Metnidir.Burası Üyelik Sözleşmesi Metnidir.', 'Burası Kullanım Koşulları MetnidirBurası Kullanım Koşulları MetnidirBurası Kullanım Koşulları MetnidirBurası Kullanım Koşulları MetnidirBurası Kullanım Koşulları MetnidirBurası Kullanım Koşulları MetnidirBurası Kullanım Koşulları MetnidirBurası Kullanım Koşulları MetnidirBurası Kullanım Koşulları MetnidirBurası Kullanım Koşulları MetnidirBurası Kullanım Koşulları MetnidirBurası Kullanım Koşulları MetnidirBurası Kullanım Koşulları MetnidirBurası Kullanım Koşulları MetnidirBurası Kullanım Koşulları MetnidirBurası Kullanım Koşulları MetnidirBurası Kullanım Koşulları MetnidirBurası Kullanım Koşulları MetnidirBurası Kullanım Koşulları MetnidirBurası Kullanım Koşulları MetnidirBurası Kullanım Koşulları MetnidirBurası Kullanım Koşulları MetnidirBurası Kullanım Koşulları MetnidirBurası Kullanım Koşulları MetnidirBurası Kullanım Koşulları MetnidirBurası Kullanım Koşulları Metnidir', 'Burası Gizlilik Sözleşmesi Metnidir.Burası Gizlilik Sözleşmesi Metnidir.Burası Gizlilik Sözleşmesi Metnidir.Burası Gizlilik Sözleşmesi Metnidir.Burası Gizlilik Sözleşmesi Metnidir.Burası Gizlilik Sözleşmesi Metnidir.Burası Gizlilik Sözleşmesi Metnidir.Burası Gizlilik Sözleşmesi Metnidir.Burası Gizlilik Sözleşmesi Metnidir.Burası Gizlilik Sözleşmesi Metnidir.Burası Gizlilik Sözleşmesi Metnidir.Burası Gizlilik Sözleşmesi Metnidir.Burası Gizlilik Sözleşmesi Metnidir.Burası Gizlilik Sözleşmesi Metnidir.Burası Gizlilik Sözleşmesi Metnidir.Burası Gizlilik Sözleşmesi Metnidir.Burası Gizlilik Sözleşmesi Metnidir.Burası Gizlilik Sözleşmesi Metnidir.Burası Gizlilik Sözleşmesi Metnidir.Burası Gizlilik Sözleşmesi Metnidir.Burası Gizlilik Sözleşmesi Metnidir.Burası Gizlilik Sözleşmesi Metnidir.Burası Gizlilik Sözleşmesi Metnidir.Burası Gizlilik Sözleşmesi Metnidir.Burası Gizlilik Sözleşmesi Metnidir.Burası Gizlilik Sözleşmesi Metnidir.Burası Gizlilik Sözleşmesi Metnidir.Burası Gizlilik Sözleşmesi Metnidir.', 'Burası Mesafeli Satış Sözleşmesi Metnidir.Burası Mesafeli Satış Sözleşmesi Metnidir.Burası Mesafeli Satış Sözleşmesi Metnidir.Burası Mesafeli Satış Sözleşmesi Metnidir.Burası Mesafeli Satış Sözleşmesi Metnidir.Burası Mesafeli Satış Sözleşmesi Metnidir.Burası Mesafeli Satış Sözleşmesi Metnidir.Burası Mesafeli Satış Sözleşmesi Metnidir.Burası Mesafeli Satış Sözleşmesi Metnidir.Burası Mesafeli Satış Sözleşmesi Metnidir.Burası Mesafeli Satış Sözleşmesi Metnidir.Burası Mesafeli Satış Sözleşmesi Metnidir.Burası Mesafeli Satış Sözleşmesi Metnidir.Burası Mesafeli Satış Sözleşmesi Metnidir.Burası Mesafeli Satış Sözleşmesi Metnidir.Burası Mesafeli Satış Sözleşmesi Metnidir.Burası Mesafeli Satış Sözleşmesi Metnidir.Burası Mesafeli Satış Sözleşmesi Metnidir.Burası Mesafeli Satış Sözleşmesi Metnidir.Burası Mesafeli Satış Sözleşmesi Metnidir.Burası Mesafeli Satış Sözleşmesi Metnidir.Burası Mesafeli Satış Sözleşmesi Metnidir.Burası Mesafeli Satış Sözleşmesi Metnidir.Burası Mesafeli Satış Sözleşmesi Metnidir.Burası Mesafeli Satış Sözleşmesi Metnidir.Burası Mesafeli Satış Sözleşmesi Metnidir.Burası Mesafeli Satış Sözleşmesi Metnidir.Burası Mesafeli Satış Sözleşmesi Metnidir.Burası Mesafeli Satış Sözleşmesi Metnidir.Burası Mesafeli Satış Sözleşmesi Metnidir.Burası Mesafeli Satış Sözleşmesi Metnidir.Burası Mesafeli Satış Sözleşmesi Metnidir.Burası Mesafeli Satış Sözleşmesi Metnidir.Burası Mesafeli Satış Sözleşmesi Metnidir.Burası Mesafeli Satış Sözleşmesi Metnidir.Burası Mesafeli Satış Sözleşmesi Metnidir.Burası Mesafeli Satış Sözleşmesi Metnidir.Burası Mesafeli Satış Sözleşmesi Metnidir.Burası Mesafeli Satış Sözleşmesi Metnidir.Burası Mesafeli Satış Sözleşmesi Metnidir.Burası Mesafeli Satış Sözleşmesi Metnidir.Burası Mesafeli Satış Sözleşmesi Metnidir.mesi Metnidir.Metnidir.Burası Mesafeli Satış Sözleşmesi Metnidir.Burası Mesafeli Satış Sözleşmesi Metnidir.Burası Mesafeli Satış Sözleşmesi Metnidir.mesi Metnidir.', 'Burası Teslimat Metnidir. Burası Teslimat Metnidir. Burası Teslimat Metnidir. Burası Teslimat Metnidir. Burası Teslimat Metnidir. Burası Teslimat Metnidir. Burası Teslimat Metnidir. Burası Teslimat Metnidir. Burası Teslimat Metnidir. Burası Teslimat Metnidir. Burası Teslimat Metnidir. Burası Teslimat Metnidir. Burası Teslimat Metnidir. Burası Teslimat Metnidir. Burası Teslimat Metnidir. Burası Teslimat Metnidir. Burası Teslimat Metnidir. Burası Teslimat Metnidir. Burası Teslimat Metnidir. Burası Teslimat Metnidir. Burası Teslimat Metnidir. Burası Teslimat Metnidir. Burası Teslimat Metnidir.', 'Burası İptall, İade ve Değişim Metnidir. Burası İptal, İade ve Değişim Metnidir. Burası İptal, İade ve Değişim Metnidir. Burası İptal, İade ve Değişim Metnidir. Burası İptal, İade ve Değişim Metnidir. Burası İptal, İade ve Değişim Metnidir. Burası İptal, İade ve Değişim Metnidir. Burası İptal, İade ve Değişim Metnidir. Burası İptal, İade ve Değişim Metnidir. Burası İptal, İade ve Değişim Metnidir. Burası İptal, İade ve Değişim Metnidir. Burası İptal, İade ve Değişim Metnidir. Burası İptal, İade ve Değişim Metnidir. Burası İptal, İade ve Değişim Metnidir. Burası İptal, İade ve Değişim Metnidir. Burası İptal, İade ve Değişim Metnidir. Burası İptal, İade ve Değişim Metnidir. Burası İptal, İade ve Değişim Metnidir. Burası İptal, İade ve Değişim Metnidir. Burası İptal, İade ve Değişim Metnidir.');

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

--
-- Tablo döküm verisi `urunler`
--

INSERT INTO `urunler` (`id`, `MenuId`, `UrunAdi`, `UrunTuru`, `UrunFiyati`, `ParaBirimi`, `KdvOrani`, `UrunAciklamasi`, `UrunResmiBir`, `UrunResmiIki`, `UrunResmiUc`, `UrunResmiDort`, `VaryantBasligi`, `KargoUcreti`, `Durumu`, `ToplamSatisSayisi`, `YorumSayisi`, `ToplamYorumPuani`, `GoruntulenmeSayisi`) VALUES
(1, 8, 'Mavi Kesikli Kadın Ayakkabısı', 'Kadın Ayakkabısı', 300, 'TRY', 18, 'Mavi Kesikli Kadın Ayakkabısı Ürünün açıklaması Mavi Kesikli Kadın Ayakkabısı Ürünün açıklaması Mavi Kesikli Kadın Ayakkabısı Ürünün açıklaması Mavi Kesikli Kadın Ayakkabısı Ürünün açıklaması Mavi Kesikli Kadın Ayakkabısı Ürünün açıklaması ', '1-1.jpg', '1-2.jpg', '1-3.jpg', '1-4.jpg', 'Numara', 10, 1, 100, 0, 0, 44),
(2, 8, 'Tokalı Bordo Kadın Ayakkabısı', 'Kadın Ayakkabısı', 120, 'USD', 20, 'Tokalı Bordo Kadın Ayakkabısı için Açıklama Metni Tokalı Bordo Kadın Ayakkabısı için Açıklama Metni Tokalı Bordo Kadın Ayakkabısı için Açıklama Metni Tokalı Bordo Kadın Ayakkabısı için Açıklama Metni Tokalı Bordo Kadın Ayakkabısı için Açıklama Metni Tokalı Bordo Kadın Ayakkabısı için Açıklama Metni Tokalı Bordo Kadın Ayakkabısı için Açıklama Metni ', '2.jpg', '', '', '', 'Numara', 10, 1, 93, 0, 0, 22),
(3, 1, 'Siyah Kuşaklı Makosen Erkek Ayakkabısı', 'Erkek Ayakkabısı', 210, 'EUR', 25, 'Siyah Kuşaklı Makosen Erkek Ayakkabısı Açıklama Metni Siyah Kuşaklı Makosen Erkek Ayakkabısı Açıklama Metni Siyah Kuşaklı Makosen Erkek Ayakkabısı Açıklama Metni Siyah Kuşaklı Makosen Erkek Ayakkabısı Açıklama Metni Siyah Kuşaklı Makosen Erkek Ayakkabısı Açıklama Metni Siyah Kuşaklı Makosen Erkek Ayakkabısı Açıklama Metni Siyah Kuşaklı Makosen Erkek Ayakkabısı Açıklama Metni Siyah Kuşaklı Makosen Erkek Ayakkabısı Açıklama Metni ', '1-1.jpg', '1-2.jpg', '1-3.jpg', '1-4.jpg', 'Numara', 10, 1, 97, 1, 5, 67),
(4, 8, 'Siyah egzotik Kadın Ayakkabısı', 'Kadın Ayakkabısı', 100, 'USD', 20, 'Siyah egzotik Kadın Ayakkabısı açıklaması Siyah egzotik Kadın Ayakkabısı açıklaması Siyah egzotik Kadın Ayakkabısı açıklaması Siyah egzotik Kadın Ayakkabısı açıklaması Siyah egzotik Kadın Ayakkabısı açıklaması Siyah egzotik Kadın Ayakkabısı açıklaması Siyah egzotik Kadın Ayakkabısı açıklaması ', '3.jpg', '', '', '', 'Numara', 10, 1, 100, 0, 0, 9),
(5, 5, 'Beyaz Topuklu Kadın Ayakkabısı', 'Kadın Ayakkabısı', 50, 'USD', 20, 'Beyaz Topuklu Kadın Ayakkabısı açıklaması Beyaz Topuklu Kadın Ayakkabısı açıklaması Beyaz Topuklu Kadın Ayakkabısı açıklaması Beyaz Topuklu Kadın Ayakkabısı açıklaması Beyaz Topuklu Kadın Ayakkabısı açıklaması Beyaz Topuklu Kadın Ayakkabısı açıklaması Beyaz Topuklu Kadın Ayakkabısı açıklaması ', '4.jpg', '', '', '', 'Numara', 10, 1, 100, 0, 0, 36),
(6, 5, 'Gümüş Rengi Topuklu Açık Kadın Ayakkabısı', 'Kadın Ayakkabısı', 150, 'EUR', 25, 'Gümüş Rengi Topuklu Açık Kadın Ayakkabısı Gümüş Rengi Topuklu Açık Kadın Ayakkabısı Gümüş Rengi Topuklu Açık Kadın Ayakkabısı Gümüş Rengi Topuklu Açık Kadın Ayakkabısı Gümüş Rengi Topuklu Açık Kadın Ayakkabısı Gümüş Rengi Topuklu Açık Kadın Ayakkabısı Gümüş Rengi Topuklu Açık Kadın Ayakkabısı Gümüş Rengi Topuklu Açık Kadın Ayakkabısı ', '5.jpg', '', '', '', 'Numara', 10, 1, 100, 0, 0, 15),
(7, 1, 'Beyaz Topuklu lüks Erkek Ayakkabısı', 'Erkek Ayakkabısı', 250, 'EUR', 25, 'Beyaz Topuklu lüks Erkek Ayakkabısı Beyaz Topuklu lüks Erkek Ayakkabısı Beyaz Topuklu lüks Erkek Ayakkabısı Beyaz Topuklu lüks Erkek Ayakkabısı Beyaz Topuklu lüks Erkek Ayakkabısı Beyaz Topuklu lüks Erkek Ayakkabısı Beyaz Topuklu lüks Erkek Ayakkabısı Beyaz Topuklu lüks Erkek Ayakkabısı ', '2.jpg', '', '', '', 'Numara', 10, 0, 100, 0, 0, 0),
(8, 1, 'Marka Burun Ucu Erkek Ayakkabısı', 'Erkek Ayakkabısı', 100, 'USD', 20, 'Marka Burun Ucu Erkek Ayakkabısı Marka Burun Ucu Erkek Ayakkabısı Marka Burun Ucu Erkek Ayakkabısı Marka Burun Ucu Erkek Ayakkabısı Marka Burun Ucu Erkek Ayakkabısı Marka Burun Ucu Erkek Ayakkabısı Marka Burun Ucu Erkek Ayakkabısı Marka Burun Ucu Erkek Ayakkabısı ', '3.jpg', '', '', '', 'Numara', 10, 1, 100, 0, 0, 0),
(9, 1, 'Klasik Siyah Erkek Ayakkabısı', 'Erkek Ayakkabısı', 75, 'TRY', 18, 'Klasik Siyah Erkek Ayakkabısı Klasik Siyah Erkek Ayakkabısı Klasik Siyah Erkek Ayakkabısı Klasik Siyah Erkek Ayakkabısı Klasik Siyah Erkek Ayakkabısı Klasik Siyah Erkek Ayakkabısı Klasik Siyah Erkek Ayakkabısı ', '4.jpg', '', '', '', 'Numara', 10, 1, 100, 1, 5, 3),
(10, 2, 'Marka Kahverengi Erkek Ayakkabısı', 'Erkek Ayakkabısı', 195, 'TRY', 18, 'Marka Kahverengi Erkek Ayakkabısı Marka Kahverengi Erkek Ayakkabısı Marka Kahverengi Erkek Ayakkabısı Marka Kahverengi Erkek Ayakkabısı Marka Kahverengi Erkek Ayakkabısı Marka Kahverengi Erkek Ayakkabısı Marka Kahverengi Erkek Ayakkabısı ', '5.jpg', '', '', '', 'Numara', 10, 1, 100, 0, 0, 0),
(11, 2, 'Topuklu Kahverengi Erkek Ayakkabısı', 'Erkek Ayakkabısı', 100, 'EUR', 25, 'Topuklu Kahverengi Erkek Ayakkabısı Topuklu Kahverengi Erkek Ayakkabısı Topuklu Kahverengi Erkek Ayakkabısı Topuklu Kahverengi Erkek Ayakkabısı Topuklu Kahverengi Erkek Ayakkabısı Topuklu Kahverengi Erkek Ayakkabısı Topuklu Kahverengi Erkek Ayakkabısı ', '6.jpg', '', '', '', 'Numara', 10, 1, 100, 0, 0, 0),
(12, 2, 'Topuklu Cilalı Siyah Erkek Ayakkabısı', 'Erkek Ayakkabısı', 125, 'EUR', 25, 'Topuklu Cilalı Siyah Erkek Ayakkabısı Topuklu Cilalı Siyah Erkek Ayakkabısı Topuklu Cilalı Siyah Erkek Ayakkabısı Topuklu Cilalı Siyah Erkek Ayakkabısı Topuklu Cilalı Siyah Erkek Ayakkabısı Topuklu Cilalı Siyah Erkek Ayakkabısı Topuklu Cilalı Siyah Erkek Ayakkabısı ', '7.jpg', '', '', '', 'Numara', 10, 1, 100, 0, 0, 10),
(13, 2, 'Topuklu Marka Siyah Erkek Ayakkabısı', 'Erkek Ayakkabısı', 400, 'TRY', 18, 'Topuklu Marka Siyah Erkek Ayakkabısı Topuklu Marka Siyah Erkek Ayakkabısı Topuklu Marka Siyah Erkek Ayakkabısı Topuklu Marka Siyah Erkek Ayakkabısı Topuklu Marka Siyah Erkek Ayakkabısı Topuklu Marka Siyah Erkek Ayakkabısı Topuklu Marka Siyah Erkek Ayakkabısı Topuklu Marka Siyah Erkek Ayakkabısı ', '8.jpg', '', '', '', 'Numara', 10, 1, 100, 0, 0, 82),
(14, 3, 'Lacivert Marka Erkek Ayakkabısı', 'Erkek Ayakkabısı', 565, 'TRY', 18, 'Lacivert Marka Erkek Ayakkabısı Lacivert Marka Erkek Ayakkabısı Lacivert Marka Erkek Ayakkabısı Lacivert Marka Erkek Ayakkabısı Lacivert Marka Erkek Ayakkabısı Lacivert Marka Erkek Ayakkabısı Lacivert Marka Erkek Ayakkabısı Lacivert Marka Erkek Ayakkabısı ', '10.jpg', '', '', '', 'Numara', 10, 1, 100, 0, 0, 16),
(15, 9, 'Kırmızı Çocuk Ayakkabısı', 'Cocuk Ayakkabısı', 50, 'EUR', 25, 'Kırmızı Çocuk Ayakkabısı  Kırmızı Çocuk Ayakkabısı  Kırmızı Çocuk Ayakkabısı  Kırmızı Çocuk Ayakkabısı  Kırmızı Çocuk Ayakkabısı  Kırmızı Çocuk Ayakkabısı  Kırmızı Çocuk Ayakkabısı  Kırmızı Çocuk Ayakkabısı  Kırmızı Çocuk Ayakkabısı  ', '1-1.jpg', '1-2.jpg', '1-3.jpg', '1-3.jpg', 'Numara', 10, 1, 100, 0, 0, 9),
(16, 9, 'Beyaz Tabanlı Çocuk Ayakkabısı', 'Cocuk Ayakkabısı', 60, 'EUR', 25, 'Beyaz Tabanlı Çocuk Ayakkabısı Beyaz Tabanlı Çocuk Ayakkabısı Beyaz Tabanlı Çocuk Ayakkabısı Beyaz Tabanlı Çocuk Ayakkabısı Beyaz Tabanlı Çocuk Ayakkabısı Beyaz Tabanlı Çocuk Ayakkabısı Beyaz Tabanlı Çocuk Ayakkabısı ', '2.jpg', '', '', '', 'Numara', 10, 1, 100, 0, 0, 17),
(17, 9, 'Açık Kırmızı Çocuk Ayakkabısı', 'Cocuk Ayakkabısı', 125, 'USD', 20, 'Açık Kırmızı Çocuk Ayakkabısı Açık Kırmızı Çocuk Ayakkabısı Açık Kırmızı Çocuk Ayakkabısı Açık Kırmızı Çocuk Ayakkabısı Açık Kırmızı Çocuk Ayakkabısı Açık Kırmızı Çocuk Ayakkabısı ', '3.jpg', '', '', '', 'Numara', 10, 1, 100, 0, 0, 13),
(22, 9, 'Siyah Minnak Çocuk Ayakkabısı', 'Cocuk Ayakkabısı', 400, 'TRY', 18, 'Çocuğunuz için en uygun fiyata çocuk ayakkabısı', '96f62a36473f87a7a514d5d7a.jpg', '', '', '', 'Numara', 10, 1, 96, 0, 0, 3),
(23, 11, 'Spor Ayakk', 'Cocuk Ayakkabısı', 150, 'TRY', 18, 'Spor Ayakkabısında Bir Marka', 'ea3ab05d10b30d860135d8924.jpg', '', '', '', 'Numara', 10, 0, 100, 0, 0, 0);

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

--
-- Tablo döküm verisi `urunvaryantlari`
--

INSERT INTO `urunvaryantlari` (`id`, `UrunId`, `VaryantAdi`, `StokAdedi`) VALUES
(1, 1, '35', 100),
(2, 1, '36', 100),
(3, 1, '37', 100),
(4, 1, '38', 100),
(5, 1, '39', 100),
(6, 2, '35', 100),
(7, 2, '36', 100),
(8, 2, '37', 107),
(9, 2, '38', 100),
(10, 2, '39', 100),
(11, 3, '39', 100),
(12, 3, '40', 100),
(13, 3, '41', 100),
(14, 3, '42', 103),
(15, 3, '43', 100),
(16, 18, '25', 100),
(17, 9, '40', 100),
(18, 20, '26', 100),
(19, 20, '27', 100),
(20, 20, '28', 100),
(21, 20, '29', 100),
(22, 20, '30', 100),
(23, 21, '26', 100),
(24, 21, '27', 100),
(25, 21, '28', 100),
(26, 21, '29', 100),
(27, 21, '30', 100),
(28, 22, '25', 100),
(29, 22, '26', 100),
(30, 22, '27', 100),
(31, 22, '28', 100),
(32, 22, '29', 104),
(33, 22, '30', 100),
(34, 23, '25', 100),
(35, 23, '26', 100),
(36, 23, '27', 100),
(37, 23, '28', 100),
(38, 23, '29', 100),
(39, 23, '30', 100);

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

--
-- Tablo döküm verisi `uyegirisbilgisi`
--

INSERT INTO `uyegirisbilgisi` (`id`, `logo`, `adi`, `icerik`) VALUES
(1, 'OrjinalSiyahKirmizi20x20.png', 'Orjinal Ürün', 'Ürünün orjinal olmasına dikkat etmelisiniz.'),
(2, 'RozetMavi20x20.png', 'Kalite - Kontrol', 'Ürünün kalite kontrol işlemlerinden geçmiş ve muhakkak onaylanmış olmasına dikkat etmelisiniz.'),
(3, 'SaatHizCizgiliLacivert20x20.png', 'Hızlı Sevkiyat', 'Satın almış olduğunuz ürünün en kısa sürede ve en dikkatli şekilde tarafınıza ulaştırılabilir olmasına dikkat etmelisiniz.'),
(4, 'AdamKonusmaBalonluFume20x20.png', 'Satış Sonrası Destek', 'Satın almış olduğunuz ürün ile alakalı yaşanabilecek her türlü problemde veya aklınıza takılabilecek tüm sorularda destek alınabilirliğine dikkat etmelisiniz.');

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

--
-- Tablo döküm verisi `uyeler`
--

INSERT INTO `uyeler` (`id`, `EmailAdresi`, `Sifre`, `IsimSoyisim`, `TelefonNumarasi`, `Cinsiyet`, `Durumu`, `SilinmeDurumu`, `KayitTarihi`, `KayitIpAdresi`, `AktivasyonKodu`) VALUES
(1, 'icabikrz@gmail.com', '87734cb3ff9219cf193a1888bc2d806c', 'icabi kırgız', '05482615926', 'Erkek', 1, 0, '1624778173', '127.0.0.1', '43411-28180-92195-55913'),
(6, 'Ahmetkrz@gmail.com', '87734cb3ff9219cf193a1888bc2d806c', 'Ahmet Kırgız', '05148261526', 'Erkek', 1, 0, '1624700000', '127.0.0.1', '43411-28180-92195-55913');

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

--
-- Tablo döküm verisi `uyeolbilgisi`
--

INSERT INTO `uyeolbilgisi` (`id`, `logo`, `adi`, `icerik`) VALUES
(1, 'AdamSiyah20x20.png', 'Profesyonel', 'Kadromuz, Tüekiye\'deki en ileri düzey profesyonel eğitmenlerden, geliştiricilerden ve tasarımcılardan oluşmaktadır. Bu sayede en kolay seviyeden, en ileri seviyeye kadar eğitimleri öğrencilerine sunar.'),
(2, 'RozetYesilSiyah20x20.png', 'Kaliteli ve Güncel', 'Türkiye\'deki ve Dünya\'daki tüm yenilikler ile birlikte tüm teknolojileride sürekli takip eder, inceler, araştırır ve öğreniriz. Bu sayede, öğrencilerimize daima en kaliteli, en gülcel, en üstün eğitimleri ve eğitim ürünlerini sunarız.'),
(3, 'CarklarSiyah20x20.png', 'Yenilikçi', 'Tüm eğitim setlerimiz, kitaplarımız, sonuç odaklı eğitimlerimiz daima en güncel içeriğe sahip olup, zaman içerisinde yeni bir versiyon çıkması furumunda satıştan kaldırılarak, en son versiyon için sıfırdan hazırlanarak yeniden satışa sunulur.'),
(4, 'GulenYuzMavi20x20.png', 'Eğlenceli', 'Tüm eğitimlerimiz, standart ve sıkıcı eğitimlerin aksine, keyifli ve eylenceli bir şekilde kolaylıkla öğrenmeyi sağlar. Bu sayede tüm öğrencilerimiz için hedeflenen eğitim seviyesine erişmek çok kolay olmaktadır.'),
(5, 'MektupMobilKoyuGri20x20.png', 'Ulaşılabilir', 'Eğitmenlerimiz, geliştiricilerimiz ve tasarımcılarımız yardımcı olmayı seven, aynı zamanda da cevap vermekten kaçınmayan kişilerdir. Dilediğiniz zaman rahatlıkla iletişime geçilebilir. Sorularınıza çok kısa bir süre içerisinde yanıt alabilirsiniz.');

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

--
-- Tablo döküm verisi `yoneticiler`
--

INSERT INTO `yoneticiler` (`id`, `KullaniciAdi`, `Sifre`, `IsimSoyisim`, `EmailAdresi`, `TelefonNumarasi`, `SilinemeyecekYoneticiDurumu`) VALUES
(1, 'Icabi', '87734cb3ff9219cf193a1888bc2d806c', 'Icabi Kırgız', 'icabikrz@gmail.com', '05395662844', 1),
(2, 'ahmet', 'cdb5efc9c72196c1bd8b7a594b46b44f', 'ahmet kaya', 'ahmet@gmail.com', '05482615912', 0);

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
-- Tablo döküm verisi `yorumlar`
--

INSERT INTO `yorumlar` (`id`, `UrunId`, `UyeId`, `Puan`, `YorumMetni`, `YorumTarihi`, `YorumIpAdresi`) VALUES
(4, 9, 1, 5, 'Mükemmel bir ürün yapmışsınız tebrik ederim...', 1625650715, '127.0.0.1'),
(5, 3, 1, 5, 'Mükemmel Mükemmel', 1625652251, '127.0.0.1');

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Tablo için AUTO_INCREMENT değeri `ayarlar`
--
ALTER TABLE `ayarlar`
  MODIFY `id` tinyint(1) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `bankahesaplarimiz`
--
ALTER TABLE `bankahesaplarimiz`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Tablo için AUTO_INCREMENT değeri `bannerlar`
--
ALTER TABLE `bannerlar`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Tablo için AUTO_INCREMENT değeri `favoriler`
--
ALTER TABLE `favoriler`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- Tablo için AUTO_INCREMENT değeri `havalebildirimleri`
--
ALTER TABLE `havalebildirimleri`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Tablo için AUTO_INCREMENT değeri `havalebilgisi`
--
ALTER TABLE `havalebilgisi`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Tablo için AUTO_INCREMENT değeri `iletisimbilgisi`
--
ALTER TABLE `iletisimbilgisi`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `kargofirmalari`
--
ALTER TABLE `kargofirmalari`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Tablo için AUTO_INCREMENT değeri `menuler`
--
ALTER TABLE `menuler`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Tablo için AUTO_INCREMENT değeri `sepet`
--
ALTER TABLE `sepet`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Tablo için AUTO_INCREMENT değeri `sifremiunuttumbilgisi`
--
ALTER TABLE `sifremiunuttumbilgisi`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `siparisler`
--
ALTER TABLE `siparisler`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Tablo için AUTO_INCREMENT değeri `sorular`
--
ALTER TABLE `sorular`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Tablo için AUTO_INCREMENT değeri `sozlesmelervemetinler`
--
ALTER TABLE `sozlesmelervemetinler`
  MODIFY `id` tinyint(1) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `urunler`
--
ALTER TABLE `urunler`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Tablo için AUTO_INCREMENT değeri `urunvaryantlari`
--
ALTER TABLE `urunvaryantlari`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- Tablo için AUTO_INCREMENT değeri `uyegirisbilgisi`
--
ALTER TABLE `uyegirisbilgisi`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `uyeler`
--
ALTER TABLE `uyeler`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Tablo için AUTO_INCREMENT değeri `uyeolbilgisi`
--
ALTER TABLE `uyeolbilgisi`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Tablo için AUTO_INCREMENT değeri `yoneticiler`
--
ALTER TABLE `yoneticiler`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `yorumlar`
--
ALTER TABLE `yorumlar`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
