<?php
session_start(); ob_start();
try{
	$VeritabaniBaglantisi 	= new PDO("mysql:host=localhost:3307;dbname=cahrion;charset=UTF8", "root", "");
}catch(PDOException $Hata){
	die("Bağlantı Hatası: " . $Hata->getMessage());
}

function Filtrele($Deger){
	$Bir 	= trim($Deger);
	$Iki 	= strip_tags($Bir);
	$Uc 	= htmlspecialchars($Iki, ENT_QUOTES);
	$Sonuc 	= $Uc;
	return $Sonuc;
}

if(isset($_SESSION["Kullanici"])){
	$UyelerSorgusu 			= $VeritabaniBaglantisi->prepare("SELECT * FROM uyeler WHERE kullaniciadi = ?");
	$UyelerSorgusu->execute([$_SESSION["Kullanici"]]);
	$UyelerSayisi 			= $UyelerSorgusu->rowCount();
	$UyelerKaydi 			= $UyelerSorgusu->fetch(PDO::FETCH_ASSOC);
	if($UyelerSayisi > 0){
		$UyeninAdiSoyadi 	= $UyelerKaydi["adisoyadi"];
	}else{
		$UyeninAdiSoyadi 	= "";
	}
}

?>