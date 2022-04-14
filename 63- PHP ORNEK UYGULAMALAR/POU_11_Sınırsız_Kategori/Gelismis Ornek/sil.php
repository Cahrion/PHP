<?php
require_once("baglan.php");

$GelenID 	= Filtrele($_GET["id"]);

$MenuHiyerarsiniBulDizisi 	= array($GelenID);
function MenuHiyerarsiniBul($MenuIdDegeri){
	global $VeritabaniBaglantisi;
	global $MenuHiyerarsiniBulDizisi;
	
	$Sorgu 			= $VeritabaniBaglantisi->prepare("SELECT * FROM menuler WHERE ustid = ?");
	$Sorgu->execute([$MenuIdDegeri]);
	$KayitSayisi	= $Sorgu->rowCount();
	$Kayitlar 		= $Sorgu->fetchAll(PDO::FETCH_ASSOC);
	if($KayitSayisi > 0){
		foreach($Kayitlar as $Kayit){
			$MenuId 		= $Kayit["id"];
			$MenuHiyerarsiniBulDizisi[] 	= $MenuId;

			MenuHiyerarsiniBul($MenuId);
			}
		}
		return $MenuHiyerarsiniBulDizisi;
	}

if(($GelenID != "")){
	$SilinecekMenuler 	= MenuHiyerarsiniBul($GelenID);
	
	foreach($SilinecekMenuler as $SilinecekID){
		$Sil 				= $VeritabaniBaglantisi->prepare("DELETE FROM menuler WHERE id=?");
		$Sil->execute([$SilinecekID]);
		$SilKayitSayisi	= $Sil->rowCount();
			if($SilKayitSayisi < 1){
				echo "HATA<br>";
				echo "İşlem Sırasında Beklenmeyen Bir Sorun Oluştu. Daha Sonra Tekrar Deneyiniz<br>";
				echo "AnaSayfaya Geri Dönmek İçin Lütfen Buraya <a href='index.php'>Tıklayınız</a>";
				die();
			}
	}
	header("Location: index.php");
	exit();
	
}else{
	echo "HATA<br>";
	echo "Lütfen Boş Alan Bırakmayınız<br>";
	echo "AnaSayfaya Geri Dönmek İçin Lütfen Buraya <a href='index.php'>Tıklayınız</a>";
}
?>
