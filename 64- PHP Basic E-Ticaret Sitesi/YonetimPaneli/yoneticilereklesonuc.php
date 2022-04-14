<?php
if(isset($_SESSION["Yonetici"])){
	if(isset($_POST["KullaniciAdi"])){
		$GelenKullaniciAdi			=	GuvenlikFiltresi($_POST["KullaniciAdi"]);
	}else{
		$GelenKullaniciAdi			=	"";
	}
	if(isset($_POST["Sifre"])){
		$GelenSifre					=	GuvenlikFiltresi($_POST["Sifre"]);
	}else{
		$GelenSifre					=	"";
	}
	if(isset($_POST["IsimSoyisim"])){
		$GelenIsimSoyisim			=	GuvenlikFiltresi($_POST["IsimSoyisim"]);
	}else{
		$GelenIsimSoyisim			=	"";
	}
	if(isset($_POST["EmailAdresi"])){
		$GelenEmailAdresi			=	GuvenlikFiltresi($_POST["EmailAdresi"]);
	}else{
		$GelenEmailAdresi			=	"";
	}
	if(isset($_POST["TelefonNumarasi"])){
		$GelenTelefonNumarasi		=	GuvenlikFiltresi($_POST["TelefonNumarasi"]);
	}else{
		$GelenTelefonNumarasi		=	"";
	}
	
	$MD5liSifre						=	md5($GelenSifre);
	
	if(($GelenKullaniciAdi!="") and ($GelenSifre!="") and ($GelenIsimSoyisim!="") and ($GelenEmailAdresi!="") and ($GelenTelefonNumarasi!="")){	
		$YoneticiKontrolSorgusu		=	$VeritabaniBaglantisi->prepare("SELECT * FROM yoneticiler WHERE KullaniciAdi = ? OR EmailAdresi = ?");
		$YoneticiKontrolSorgusu->execute([$GelenKullaniciAdi, $GelenEmailAdresi]);
		$Kontrol					=	$YoneticiKontrolSorgusu->rowCount();
	
		if($Kontrol>0){
			header("Location:index.php?SKD=0&SKI=74");
			exit();
		}else{
			$YoneticiEklemeSorgusu		=	$VeritabaniBaglantisi->prepare("INSERT INTO yoneticiler (KullaniciAdi, Sifre, IsimSoyisim, EmailAdresi, TelefonNumarasi) values (?, ?, ?, ?, ?)");
			$YoneticiEklemeSorgusu->execute([$GelenKullaniciAdi, $MD5liSifre, $GelenIsimSoyisim, $GelenEmailAdresi, $GelenTelefonNumarasi]);
			$YoneticiEklemeKontrol		=	$YoneticiEklemeSorgusu->rowCount();

			if($YoneticiEklemeKontrol>0){
				header("Location:index.php?SKD=0&SKI=72");
				exit();
			}else{
				header("Location:index.php?SKD=0&SKI=73");
				exit();
			}
		}
	}else{
		header("Location:index.php?SKD=0&SKI=73");
		exit();
	}
}else{
	header("Location:index.php?SKD=1");
	exit();
}
?>