<?php
require_once("baglan.php");

$GelenUstMenuSecimi 	= Filtrele($_POST["UstMenuSecimi"]);
$GelenMenuAdi			= Filtrele($_POST["MenuAdi"]);

if(($GelenUstMenuSecimi != "") and ($GelenMenuAdi != "")){
	$Ekle 				= $VeritabaniBaglantisi->prepare("INSERT INTO menuler (ustid, menuadi) values (? , ?)");
	$Ekle->execute([$GelenUstMenuSecimi, $GelenMenuAdi]);
	$EkleKayitSayisi	= $Ekle->rowCount();
	
	if($EkleKayitSayisi > 0){
		header("Location: index.php");
	}else{
		echo "HATA<br>";
		echo "İşlem Sırasında Beklenmeyen Bir Sorun Oluştu. Daha Sonra Tekrar Deneyiniz<br>";
		echo "AnaSayfaya Geri Dönmek İçin Lütfen Buraya <a href='index.php'>Tıklayınız</a>";
	}
	
}else{
	echo "HATA<br>";
	echo "Lütfen Boş Alan Bırakmayınız<br>";
	echo "AnaSayfaya Geri Dönmek İçin Lütfen Buraya <a href='index.php'>Tıklayınız</a>";
}
?>
