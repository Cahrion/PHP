<?php	
session_start();

	$GelenKullaniciAdi 		= $_POST["KullaniciAdi"];
	$GelenKullaniciSifre 	= $_POST["KullaniciSifre"];

	if(($GelenKullaniciAdi != "") and ($GelenKullaniciSifre != "")){
		if(($GelenKullaniciAdi == "Icabi") and ($GelenKullaniciSifre == "123456")){
			$_SESSION["Kullanici"] 	= "TREC";
			header("Location: PC_12.5_COOKİE_KontrolluBirinciSayfa.php");
			exit();
		}else{
			header("Location: PC_12.2_COOKİE.php");
			exit();
		}
	}else{
		header("Location: PC_12.2_COOKİE.php");
		exit();
	}



?>