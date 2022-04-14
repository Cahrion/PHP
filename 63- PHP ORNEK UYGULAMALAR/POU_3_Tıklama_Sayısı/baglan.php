<?php
try{
	$VeritabaniBaglantisi	 = new PDO("mysql:host=localhost:3307;dbname=cahrion;charset=UTF8", "root", "");
}catch(PDOException $Hata){
	die("Bağlantı Hatası: " . $Hata->getMessage());
}

function Filtre($Deger){
	$Bir 	= trim($Deger);
	$Iki 	= strip_tags($Bir);
	$Uc 	= htmlspecialchars($Iki, ENT_QUOTES);
	$Sonuc 	= $Uc;
	return $Sonuc;
}
?>