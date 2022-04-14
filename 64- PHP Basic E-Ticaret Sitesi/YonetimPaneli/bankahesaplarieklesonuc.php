<?php
if(isset($_SESSION["Yonetici"])){
	$GelenBankaLogosu			=	$_FILES["BankaLogosu"];
	if(isset($_POST["BankaAdi"])){
		$GelenBankaAdi			=	GuvenlikFiltresi($_POST["BankaAdi"]);
	}else{
		$GelenBankaAdi			=	"";
	}
	if(isset($_POST["SubeAdi"])){
		$GelenSubeAdi			=	GuvenlikFiltresi($_POST["SubeAdi"]);
	}else{
		$GelenSubeAdi			=	"";
	}
	if(isset($_POST["SubeKodu"])){
		$GelenSubeKodu			=	GuvenlikFiltresi($_POST["SubeKodu"]);
	}else{
		$GelenSubeKodu			=	"";
	}
	if(isset($_POST["KonumSehir"])){
		$GelenKonumSehir		=	GuvenlikFiltresi($_POST["KonumSehir"]);
	}else{
		$GelenKonumSehir		=	"";
	}
	if(isset($_POST["KonumUlke"])){
		$GelenKonumUlke			=	GuvenlikFiltresi($_POST["KonumUlke"]);
	}else{
		$GelenKonumUlke			=	"";
	}
	if(isset($_POST["ParaBirimi"])){
		$GelenParaBirimi		=	GuvenlikFiltresi($_POST["ParaBirimi"]);
	}else{
		$GelenParaBirimi		=	"";
	}
	if(isset($_POST["HesapSahibi"])){
		$GelenHesapSahibi		=	GuvenlikFiltresi($_POST["HesapSahibi"]);
	}else{
		$GelenHesapSahibi		=	"";
	}
	if(isset($_POST["HesapNumarasi"])){
		$GelenHesapNumarasi		=	GuvenlikFiltresi($_POST["HesapNumarasi"]);
	}else{
		$GelenHesapNumarasi		=	"";
	}
	if(isset($_POST["IbanNumarasi"])){
		$GelenIbanNumarasi		=	GuvenlikFiltresi($_POST["IbanNumarasi"]);
	}else{
		$GelenIbanNumarasi		=	"";
	}
		
	if(($GelenBankaLogosu["name"]!="") and ($GelenBankaLogosu["type"]!="") and ($GelenBankaLogosu["tmp_name"]!="") and ($GelenBankaLogosu["error"]==0) and ($GelenBankaLogosu["size"]>0) and ($GelenBankaAdi!="") and ($GelenSubeAdi!="") and ($GelenSubeKodu!="") and ($GelenKonumSehir!="") and ($GelenKonumUlke!="") and ($GelenParaBirimi!="") and ($GelenHesapSahibi!="") and ($GelenHesapNumarasi!="") and ($GelenIbanNumarasi!="")){
			
		
		$ResimIcinDosyaAdi		=	ResimAdiOlustur();
		$GelenResminUzantisi	=	substr($GelenBankaLogosu["name"], -4);
			if($GelenResminUzantisi=="jpeg"){
				$GelenResminUzantisi	=	".".$GelenResminUzantisi;
			}
		
		$ResimIcinYeniDosyaAdi		=	$ResimIcinDosyaAdi.$GelenResminUzantisi;
		
		$HesapEklemeSorgusu		=	$VeritabaniBaglantisi->prepare("INSERT INTO bankahesaplarimiz (BankaLogosu, BankaAdi, KonumSehir, KonumUlke, SubeAdi, SubeKodu, ParaBirimi, HesapSahibi, HesapNumarasi, IbanNumarasi) values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
		$HesapEklemeSorgusu->execute([$ResimIcinYeniDosyaAdi, $GelenBankaAdi, $GelenKonumSehir, $GelenKonumUlke, $GelenSubeAdi, $GelenSubeKodu, $GelenParaBirimi, $GelenHesapSahibi, $GelenHesapNumarasi, $GelenIbanNumarasi]);
		$HesapEklemeKontrol		=	$HesapEklemeSorgusu->rowCount();
		
		if($HesapEklemeKontrol>0){
			$BankaLogosuYukle	=	new Verot\Upload\Upload($GelenBankaLogosu, "tr-TR");
				if($BankaLogosuYukle->uploaded){
				   $BankaLogosuYukle->mime_magic_check			=	true;
				   $BankaLogosuYukle->allowed					=	array("image/*");
				   $BankaLogosuYukle->file_new_name_body		=	$ResimIcinDosyaAdi;
				   $BankaLogosuYukle->file_overwrite			=	true;
				   //$BankaLogosuYukle->image_convert				=	"png";
				   $BankaLogosuYukle->image_quality				=	100;
				   $BankaLogosuYukle->image_background_color	=	"#FFFFFF";
				   $BankaLogosuYukle->image_resize				=	true;
				   $BankaLogosuYukle->image_ratio				=	true;
				   $BankaLogosuYukle->image_y					=	30;
				   $BankaLogosuYukle->process($VerotIcinKlasorYolu);

					if($BankaLogosuYukle->processed){
						$BankaLogosuYukle->clean();

						header("Location:index.php?SKD=0&SKI=12");
						exit();
					}else{
						header("Location:index.php?SKD=0&SKI=13");
						exit();
					} 
				}
		}else{
			header("Location:index.php?SKD=0&SKI=13");
			exit();
		}
	}else{
		header("Location:index.php?SKD=0&SKI=13");
		exit();
	}
}else{
	header("Location:index.php?SKD=1");
	exit();
}
?>