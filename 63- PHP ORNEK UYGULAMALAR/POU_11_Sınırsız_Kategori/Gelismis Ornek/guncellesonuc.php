<?php
require_once("baglan.php");

$GelenID 				= Filtrele($_GET["id"]);
$GelenUstMenuSecimi 	= Filtrele($_POST["UstMenuSecimi"]);
$GelenMenuAdi			= Filtrele($_POST["MenuAdi"]);

if(($GelenUstMenuSecimi != "") and ($GelenMenuAdi != "") and ($GelenID != "")){
	$Guncelle 				= $VeritabaniBaglantisi->prepare("UPDATE menuler SET ustid = ?, menuadi = ? WHERE id = ? LIMIT 1");
	$Guncelle->execute([$GelenUstMenuSecimi, $GelenMenuAdi, $GelenID]);
	$GuncelleKayitSayisi	= $Guncelle->rowCount();

	if($GuncelleKayitSayisi > 0){
		header("Location: index.php");
		die();
	}else{
		echo "HATA<br>";
		echo "İşlem Sırasında Beklenmeyen Bir Sorun Oluştu. Daha Sonra Tekrar Deneyiniz<br>";
		echo "AnaS ayfaya Geri Dönmek İçin Lütfen Buraya <a href='index.php'>Tıklayınız</a>";
	}

}else{
	echo "HATA<br>";
	echo "Lütfen Boş Alan Bırakmayınız<br>";
	echo "Ana Sayfaya Geri Dönmek İçin Lütfen Buraya <a href='guncelle.php?id=" . $GelenID . "'>Tıklayınız</a>";
}
?>
