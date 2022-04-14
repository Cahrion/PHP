<?php
if(isset($_SESSION["Kullanici"])){
	if(isset($_POST["IsimSoyisim"])){
		$GelenIsimSoyisim		=	GuvenlikFiltresi($_POST["IsimSoyisim"]);
	}else{
		$GelenIsimSoyisim		=	"";
	}
	if(isset($_POST["Adres"])){
		$GelenAdres				=	GuvenlikFiltresi($_POST["Adres"]);
	}else{
		$GelenAdres				=	"";
	}
	if(isset($_POST["Ilce"])){
		$GelenIlce				=	GuvenlikFiltresi($_POST["Ilce"]);
	}else{
		$GelenIlce				=	"";
	}
	if(isset($_POST["Sehir"])){
		$GelenSehir				=	GuvenlikFiltresi($_POST["Sehir"]);
	}else{
		$GelenSehir				=	"";
	}
	if(isset($_POST["TelefonNumarasi"])){
		$GelenTelefonNumarasi	=	GuvenlikFiltresi($_POST["TelefonNumarasi"]);
	}else{
		$GelenTelefonNumarasi	=	"";
	}

	if(($GelenIsimSoyisim!="") and ($GelenAdres!="") and ($GelenIlce!="") and ($GelenSehir!="") and ($GelenTelefonNumarasi!="")){
		$AdresEklemeSorgusu		=	$VeritabaniBaglantisi->prepare("INSERT INTO adresler (UyeId, AdiSoyadi, Adres, Ilce, Sehir, TelefonNumarasi) values (?, ?, ?, ?, ?, ?)");
		$AdresEklemeSorgusu->execute([$KullaniciID, $GelenIsimSoyisim, $GelenAdres, $GelenIlce, $GelenSehir, $GelenTelefonNumarasi]);
		$EklemeKontrol			=	$AdresEklemeSorgusu->rowCount();
		
		if($EklemeKontrol>0){
			header("Location:index.php?SK=72");
			exit();
		}else{
			header("Location:index.php?SK=73");
			exit();
		}
	}else{
		header("Location:index.php?SK=74");
		exit();
	}
}else{
	header("Location:index.php");
	exit();
}
?>