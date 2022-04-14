<?php
if(isset($_SESSION["Kullanici"])){
	if(isset($_GET["ID"])){
		$GelenID		=	GuvenlikFiltresi($_GET["ID"]);
	}else{
		$GelenID		=	"";
	}
	
	if($GelenID!=""){
	
		$FavoriKontrolSorgusu	=	$VeritabaniBaglantisi->prepare("SELECT * FROM favoriler WHERE UrunId = ? AND UyeId = ? LIMIT 1");
		$FavoriKontrolSorgusu->execute([$GelenID, $KullaniciID]);
		$FavoriKontrolSayisi		=	$FavoriKontrolSorgusu->rowCount();
		
		if($FavoriKontrolSayisi>0){
			$FavoriSilmeSorgusu		=	$VeritabaniBaglantisi->prepare("DELETE FROM favoriler WHERE UrunId = ? AND UyeId = ? LIMIT 1");
			$FavoriSilmeSorgusu->execute([$GelenID, $KullaniciID]);
			$FavoriSilmeSayisi		=	$FavoriSilmeSorgusu->rowCount();

			if($FavoriSilmeSayisi>0){
				header("Location:index.php?SK=83&ID=" . $GelenID);
				exit();
			}else{
				header("Location:index.php?SK=89");
				exit();
			}
		}else{
			$FavoriEklemeSorgusu	=	$VeritabaniBaglantisi->prepare("INSERT INTO favoriler (UrunId, UyeId) values (?, ?)");
			$FavoriEklemeSorgusu->execute([$GelenID, $KullaniciID]);
			$FavoriEklemeSayisi		=	$FavoriEklemeSorgusu->rowCount();

			if($FavoriEklemeSayisi>0){
				header("Location:index.php?SK=83&ID=" . $GelenID);
				exit();
			}else{
				header("Location:index.php?SK=89");
				exit();
			}
		}
	}else{
		header("Location:index.php");
		exit();
	}
}else{
	header("Location:index.php");
	exit();
}
?>