<?php
if(isset($_SESSION["Kullanici"])){
	if(isset($_POST["EmailAdresi"])){
		$GelenEmailAdresi		=	GuvenlikFiltresi($_POST["EmailAdresi"]);
	}else{
		$GelenEmailAdresi		=	"";
	}
	if(isset($_POST["Sifre"])){
		$GelenSifre				=	GuvenlikFiltresi($_POST["Sifre"]);
	}else{
		$GelenSifre				=	"";
	}
	if(isset($_POST["SifreTekrar"])){
		$GelenSifreTekrar		=	GuvenlikFiltresi($_POST["SifreTekrar"]);
	}else{
		$GelenSifreTekrar		=	"";
	}
	if(isset($_POST["IsimSoyisim"])){
		$GelenIsimSoyisim		=	GuvenlikFiltresi($_POST["IsimSoyisim"]);
	}else{
		$GelenIsimSoyisim		=	"";
	}
	if(isset($_POST["TelefonNumarasi"])){
		$GelenTelefonNumarasi	=	GuvenlikFiltresi($_POST["TelefonNumarasi"]);
	}else{
		$GelenTelefonNumarasi	=	"";
	}
	if(isset($_POST["Cinsiyet"])){
		$GelenCinsiyet			=	GuvenlikFiltresi($_POST["Cinsiyet"]);
	}else{
		$GelenCinsiyet			=	"";
	}

	$MD5liSifre					=	md5($GelenSifre);
	$YeniAktivasyonKodu			=	AktivasyonKoduUret();
	
	if(($GelenEmailAdresi!="") and ($GelenSifre!="") and ($GelenSifreTekrar!="") and ($GelenIsimSoyisim!="") and ($GelenTelefonNumarasi!="") and ($GelenCinsiyet!="")){
		if($GelenSifre!=$GelenSifreTekrar){
			header("Location:index.php?SK=57");
			exit();
		}else{
			if($GelenSifre == "EskiSifre"){
				$SifreDegistirmeDurumu			=	0;
			}else{
				$SifreDegistirmeDurumu			=	1;
			}
	
			if($KullaniciEmailAdresi != $GelenEmailAdresi){
				$KontrolSorgusu		=	$VeritabaniBaglantisi->prepare("SELECT * FROM uyeler WHERE EmailAdresi = ?");
				$KontrolSorgusu->execute([$GelenEmailAdresi]);
				$KullaniciSayisi	=	$KontrolSorgusu->rowCount();

				if($KullaniciSayisi>0){
					header("Location:index.php?SK=55");
					exit();
				}
				$AktivasyonSorgusu		=	$VeritabaniBaglantisi->prepare("UPDATE uyeler SET Durumu = ?, AktivasyonKodu = ? WHERE id = ? LIMIT 1");
				$AktivasyonSorgusu->execute([0, $YeniAktivasyonKodu, $KullaniciID]);
			}
	
			if($SifreDegistirmeDurumu == 1){
				$KullaniciGuncellemeSorgusu		=	$VeritabaniBaglantisi->prepare("UPDATE uyeler SET EmailAdresi = ?, Sifre = ?, IsimSoyisim = ?, TelefonNumarasi = ?, Cinsiyet = ? WHERE id = ? LIMIT 1");
				$KullaniciGuncellemeSorgusu->execute([$GelenEmailAdresi, $MD5liSifre, $GelenIsimSoyisim, $GelenTelefonNumarasi, $GelenCinsiyet, $KullaniciID]);
			}else{
				$KullaniciGuncellemeSorgusu		=	$VeritabaniBaglantisi->prepare("UPDATE uyeler SET EmailAdresi = ?, IsimSoyisim = ?, TelefonNumarasi = ?, Cinsiyet = ? WHERE id = ? LIMIT 1");
				$KullaniciGuncellemeSorgusu->execute([$GelenEmailAdresi, $GelenIsimSoyisim, $GelenTelefonNumarasi, $GelenCinsiyet, $KullaniciID]);
			}
			
			$KayitKontrol		=	$KullaniciGuncellemeSorgusu->rowCount();

			if($KayitKontrol>0){
				if($KullaniciEmailAdresi != $GelenEmailAdresi){
					unset($_SESSION["Kullanici"]);
					session_destroy();

					header("Location: index.php?SK=31");
					exit();
				}else{
					$_SESSION["Kullanici"]	=	$GelenEmailAdresi;

					header("Location:index.php?SK=53");
					exit();
				}
			}else{
				header("Location:index.php?SK=54");
				exit();
			}
		}
	}else{
		header("Location:index.php?SK=56");
		exit();
	}
}else{
	header("Location:index.php");
	exit();
}
?>