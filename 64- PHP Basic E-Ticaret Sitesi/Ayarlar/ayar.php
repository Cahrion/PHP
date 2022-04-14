<?php
try{
	$VeritabaniBaglantisi 	= new PDO("mysql:host=localhost:3307;dbname=cahrion;charset=UTF8", "root", "");
}catch(PDOException $Hata){
//	echo "Bağlantı Hatası: " . $Hata->getMessage(); // Kapalı dursun yoksa hatada mesaj gönderir.
	die();
}

$AyarlarSorgusu 	= $VeritabaniBaglantisi->prepare("SELECT * FROM ayarlar LIMIT 1");
$AyarlarSorgusu->execute();
$AyarSayisi 		= $AyarlarSorgusu->rowCount();
$Ayarlar			= $AyarlarSorgusu->fetch(PDO::FETCH_ASSOC);
if($AyarSayisi > 0){
	$SiteAdi 				= $Ayarlar["SiteAdi"];
	$SiteTitle 				= $Ayarlar["SiteTitle"];
	$SiteDescription 		= $Ayarlar["SiteDescription"];
	$SiteKeywords 			= $Ayarlar["SiteKeywords"];
	$SiteCopyright 			= $Ayarlar["SiteCopyright"];
	$SiteLogosu 			= $Ayarlar["SiteLogosu"];
	$SiteEmailHostAdresi 	= $Ayarlar["SiteEmailHostAdresi"];
	$SiteEmailAdresi 		= $Ayarlar["SiteEmailAdresi"];
	$SiteEmailSifresi 		= $Ayarlar["SiteEmailSifresi"];
	$SiteLinki 				= $Ayarlar["SiteLinki"];
	$SosyalLinkFacebook 	= $Ayarlar["SosyalLinkFacebook"];
	$SosyalLinkTwitter  	= $Ayarlar["SosyalLinkTwitter"];
	$SosyalLinkLinkedin 	= $Ayarlar["SosyalLinkLinkedin"];
	$SosyalLinkInstagram 	= $Ayarlar["SosyalLinkInstagram"];
	$SosyalLinkYoutube 		= $Ayarlar["SosyalLinkYoutube"];
	$SosyalLinkPinterest 	= $Ayarlar["SosyalLinkPinterest"];
	$UcretsizKargoBaraji 	= $Ayarlar["UcretsizKargoBaraji"];
	$DolarKuru 				= $Ayarlar["USDKuru"];
	$EuroKuru 				= $Ayarlar["EURKuru"];
	$ClientID 				= $Ayarlar["ClientID"];
	$StoreKey 				= $Ayarlar["StoreKey"];
	$ApiKullanicisi 		= $Ayarlar["EURKuru"];
	$ApiSifresi 			= $Ayarlar["EURKuru"];
	
}else{
	//	echo "Ayar Sorgusu Hatası: " . $Hata->getMessage(); // Kapalı dursun yoksa hatada mesaj gönderir.
	die();
}

$MetinlerSorgusu 	= $VeritabaniBaglantisi->prepare("SELECT * FROM sozlesmelervemetinler LIMIT 1");
$MetinlerSorgusu->execute();
$MetinlerSayisi 	= $MetinlerSorgusu->rowCount();
$Metinler			= $MetinlerSorgusu->fetch(PDO::FETCH_ASSOC);
if($MetinlerSayisi > 0){
	$HakkimizdaMetni 				= $Metinler["HakkimizdaMetni"];
	$UyelikSozlesmesiMetni 			= $Metinler["UyelikSozlesmesiMetni"];
	$KullanimKosullariMetni	 		= $Metinler["KullanimKosullariMetni"];
	$GizlilikSozlesmesiMetni 		= $Metinler["GizlilikSozlesmesiMetni"];
	$MesafeliSatisSozlesmesiMetni 	= $Metinler["MesafeliSatisSozlesmesiMetni"];
	$TeslimatMetni 					= $Metinler["TeslimatMetni"];
	$IptalIadeDegisimMetni 			= $Metinler["IptalIadeDegisimMetni"];
	
	
}else{
	//	echo "Metin Sorgusu Hatası: " . $Hata->getMessage(); // Kapalı dursun yoksa hatada mesaj gönderir.
	die();
}

if(isset($_SESSION["Kullanici"])){
	$KullaniciSorgusu 	= $VeritabaniBaglantisi->prepare("SELECT * FROM uyeler WHERE EmailAdresi = ? LIMIT 1");
	$KullaniciSorgusu->execute([$_SESSION["Kullanici"]]);
	$KullaniciSayisi 	= $KullaniciSorgusu->rowCount();
	$Kullanici			= $KullaniciSorgusu->fetch(PDO::FETCH_ASSOC);
	if($Kullanici > 0){
		$KullaniciID 				= $Kullanici["id"];
		$KullaniciEmailAdresi 		= $Kullanici["EmailAdresi"];
		$KullaniciSifre				= $Kullanici["Sifre"];
		$KullaniciIsimSoyisim		= $Kullanici["IsimSoyisim"];
		$KullaniciTelefonNumarasi	= $Kullanici["TelefonNumarasi"];
		$KullaniciCinsiyet			= $Kullanici["Cinsiyet"];
		$KullaniciDurumu 			= $Kullanici["Durumu"];
		$KullaniciKayitTarihi 		= $Kullanici["KayitTarihi"];
		$KullaniciKayitIpAdresi		= $Kullanici["KayitIpAdresi"];
		$KullaniciAktivasyonKodu 	= $Kullanici["AktivasyonKodu"];

	}else{
		//	echo "Kullanıcı Sorgusu Hatası: " . $Hata->getMessage(); // Kapalı dursun yoksa hatada mesaj gönderir.
		die();
	}
}
if(isset($_SESSION["Yonetici"])){
	$YoneticiSorgusu 	= $VeritabaniBaglantisi->prepare("SELECT * FROM yoneticiler WHERE KullaniciAdi = ? LIMIT 1");
	$YoneticiSorgusu->execute([$_SESSION["Yonetici"]]);
	$YoneticiSayisi 	= $YoneticiSorgusu->rowCount();
	$Yonetici			= $YoneticiSorgusu->fetch(PDO::FETCH_ASSOC);
	if($Yonetici > 0){
		$YoneticiID 				= $Yonetici["id"];
		$YoneticiKullaniciAdi 		= $Yonetici["KullaniciAdi"];
		$YoneticiSifre				= $Yonetici["Sifre"];
		$YoneticiIsimSoyisim		= $Yonetici["IsimSoyisim"];
		$YoneticiEmailAdresi		= $Yonetici["EmailAdresi"];
		$YoneticiTelefonNumarasi	= $Yonetici["TelefonNumarasi"];

	}else{
		//	echo "Kullanıcı Sorgusu Hatası: " . $Hata->getMessage(); // Kapalı dursun yoksa hatada mesaj gönderir.
		die();
	}
}
?>