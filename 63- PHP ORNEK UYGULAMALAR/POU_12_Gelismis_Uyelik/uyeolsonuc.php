<?php
require_once("baglan.php");
if(isset($_POST["kullaniciadi"])){
	$GelenKullaniciAdi 	= Filtrele($_POST["kullaniciadi"]);
}else{
	$GelenKullaniciAdi 	= "";
}

if(isset($_POST["sifre"])){
	$GelenSifre		 	= Filtrele($_POST["sifre"]);
}else{
	$GelenSifre		 	= "";
}

if(isset($_POST["adisoyadi"])){
	$GelenAdSoyad		= Filtrele($_POST["adisoyadi"]);
}else{
	$GelenAdSoyad		 = "";
}

if(isset($_POST["email"])){
	$GelenMail		 	= Filtrele($_POST["email"]);
}else{
	$GelenMail		 	= "";
}
$GelenZaman 			= time();

$KontrolSorgusu 	= $VeritabaniBaglantisi->prepare("SELECT * FROM uyeler WHERE kullaniciadi = ? OR emailadresi = ?");
$KontrolSorgusu->execute([$GelenKullaniciAdi, $GelenMail]);
$KontrolSayisi 		= $KontrolSorgusu->rowCount();
if($KontrolSayisi> 0){
	echo "HATA<br>";
	echo "Kullanici Adı veya E-Mail Adresi Başka Bir Üye Tarafından Kullanılmaktadır.<br>";
	echo "Ana Sayfaya Dönmek İçin Lütfen Buraya <a href='index.php'>Tıklayınız.</a>";
}else{
	$EklemeSorgusu 	= $VeritabaniBaglantisi->prepare("INSERT INTO uyeler (kullaniciadi, sifre, adisoyadi, emailadresi, kayittarihi) values (?, ?, ?, ?, ?)");
	$EklemeSorgusu->execute([$GelenKullaniciAdi, $GelenSifre, $GelenAdSoyad, $GelenMail, $GelenZaman]);
	$EklemeSayisi 		= $EklemeSorgusu->rowCount();
	if($EklemeSayisi> 0){
		echo "TEBRİKLER<br>";
		echo "Kullanıcı Kaydı Başarıyla Tamamlandı.<br>";
		echo "Ana Sayfaya Dönmek İçin Lütfen Buraya <a href='index.php'>Tıklayınız.</a>";
	}else{
		echo "HATA<br>";
		echo "Kullanıcı Kaydı İşlemi Sırasında Beklenmeyen Bir Hata Oluştu.<br>";
		echo "Lütfen Daha Sonra Tekrar Deneyiniz.<br>";
		echo "Ana Sayfaya Dönmek İçin Lütfen Buraya <a href='index.php'>Tıklayınız.</a>";
	}

}

ob_flush();
$VeritabaniBaglantisi 	= null;
?>