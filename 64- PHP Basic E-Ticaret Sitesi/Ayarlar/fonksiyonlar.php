<?php
$IPAdresi 				= $_SERVER["REMOTE_ADDR"];
$ZamanDamgasi 			= time();
$TarihSaat 				= date("d.m.Y H:i:s", $ZamanDamgasi);
$SiteKokDizini			= $_SERVER["DOCUMENT_ROOT"];
$ResimKlasorYolu		= "/AstroGorya/Resimler/";
$VerotIcinKlasorYolu	= $SiteKokDizini . $ResimKlasorYolu;

function RakamlarHaricTumKarakterleriSil($Deger){
	$Islem 		= preg_replace("/[^0-9]/", "", $Deger);
	$Sonuc 		= $Islem;
	return $Sonuc;
}
function TumBosluklarıSil($Deger){
	$Islem 		= preg_replace("/\s|&nbsp;/", "", $Deger);
	$Sonuc 		= $Islem;
	return $Sonuc;
}

function DonusumleriGeriDondur($Deger){
	$Bir 		= htmlspecialchars_decode($Deger, ENT_QUOTES); 
	$Sonuc 		= $Bir;
	return $Sonuc;
}

function GuvenlikFiltresi($Deger){
	$Bir 		= trim($Deger); 
	$Iki 		= strip_tags($Bir);
	$Uc		 	= htmlspecialchars($Iki, ENT_QUOTES);
	$Sonuc 		= $Uc;
	return $Sonuc;
}

function SayiliIcerikleriFiltrele($Deger){
	$Bir 		= trim($Deger); 
	$Iki 		= strip_tags($Bir);
	$Uc		 	= htmlspecialchars($Iki, ENT_QUOTES);
	$Dort		= RakamlarHaricTumKarakterleriSil($Uc);
	$Sonuc 		= $Dort;
	return $Sonuc;
}

function IBANBicimlendir($Deger){
	$Bir 			= trim($Deger);
	$Iki 			= TumBosluklarıSil($Bir);
	$Sonuc 			= "";
	$Belirtec 		= 0;
	while(1){
		$KesilenYer = substr($Iki, $Belirtec, 4);
		if(strlen($KesilenYer) != 4){
			$Sonuc 		.= $KesilenYer;
			break;
		}else{
			$Sonuc 		.= $KesilenYer . " ";
			$Belirtec 	+= 4;
		}
	}
	return $Sonuc;
}

function AktivasyonKoduUret(){
	$IlkBesli 		= 	rand(10000, 99999);
	$IkinciBesli 	=	rand(10000, 99999);
	$UcuncuBesli 	= 	rand(10000, 99999);
	$DorduncuBesli 	= 	rand(10000, 99999);
	$Kod			= 	$IlkBesli . "-" . $IkinciBesli . "-" . $UcuncuBesli . "-" . $DorduncuBesli;
	$Sonuc			= 	$Kod;
	return $Sonuc;
}

function TarihBul($Tarih){
	$Sonuc 	= date("d.m.Y H:i:s", $Tarih);
	return $Sonuc;
}

function FiyatBicimlendir($Deger){
	$Bicimlendir	= number_format($Deger, "2", ",", ".");
	$Sonuc 			= $Bicimlendir;
	return $Sonuc;
}
function UcGunIleriTarihBul(){
	global $ZamanDamgasi;
	$BirGun 		= 86400;
	$TarihDamgasi 	= $ZamanDamgasi + ($BirGun*3);
	$Tarih			= date("d.m.Y", $TarihDamgasi);
	$Sonuc 			= $Tarih;
	return $Sonuc;
}
function ResimAdiOlustur(){
	$Sonuc			=	substr(md5(uniqid(time())), 0, 25);
	return $Sonuc;
}
function SEO($Deger){
		$Icerik 			= trim($Deger);
		$Degisecekler 		= array("ç", "Ç", "ğ", "Ğ", "ı", "İ", "ö", "Ö", "ş", "Ş", "ü", "Ü");
		$Degisenler	 		= array("c", "C", "g", "G", "i", "I", "o", "O", "s", "S", "u", "U");
		$Icerik 			= str_replace($Degisecekler, $Degisenler, $Icerik);
		$Icerik				= mb_strtolower($Icerik, "UTF-8");
		$Icerik				= preg_replace("/[^a-z0-9]/", "-", $Icerik);
		$Icerik				= preg_replace("/-+/", "-", $Icerik);
		$Icerik 			= trim($Icerik, "-");
		return $Icerik;
	}
?>