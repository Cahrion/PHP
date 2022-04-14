<?php
if(isset($_SESSION["Kullanici"])){
	if(isset($_GET["ID"])){
		$GelenID		=	GuvenlikFiltresi($_GET["ID"]);
	}else{
		$GelenID		=	"";
	}

	if($GelenID!=""){
		$AdresSilmeSorgusu		=	$VeritabaniBaglantisi->prepare("DELETE FROM adresler WHERE id = ? AND uyeid = ? LIMIT 1");
		$AdresSilmeSorgusu->execute([$GelenID, $KullaniciID]);
		$AdresSilmeSayisi		=	$AdresSilmeSorgusu->rowCount();

		if($AdresSilmeSayisi>0){
			header("Location:index.php?SK=68");
			exit();
		}else{
			header("Location:index.php?SK=69");
			exit();
		}
	}else{
		header("Location:index.php?SK=69");
		exit();
	}
}else{
	header("Location:index.php");
	exit();
}
?>