<?php

try{
	$VeritabaniBaglantisi 	= new PDO("mysql:host=localhost:3307;dbname=cahrion;charset=UTF8", "root", "");
}catch(PDOException $Hata){
	die("Bağlantı Hatası: " . $Hata->getMessage());
}

function Filtre($Deger){
	$Bir 	= trim($Deger);
	$Iki 	= strip_tags($Bir);
	$Uc 	= htmlspecialchars($Iki);
	$Sonuc 	= $Uc;
	return $Sonuc;
}

$IPAdresi 			= $_SERVER["REMOTE_ADDR"];
$ZamanDamgasi 		= time();
$OyKullanmaSiniri 	= 86400; // Saniye Cinsinden
$ZamaniGeriAl 		= $ZamanDamgasi-$OyKullanmaSiniri;
?>