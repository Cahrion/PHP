<!doctype html>
<html lang="tr-TR">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Language" content="tr">
<meta charset="utf-8">
<title>PHP / Icabi Kırgız</title>
</head>

<body>
	<?php
	
	// Iki veritabanına bağlantı kurulur. ("ONERİLMEZ AMA KULLANILABİLİR.")
	
	try{
		$VeritabaniBaglantisiBir 	= new PDO("mysql:host=localhost:3307;dbname=cahrion;charset=UTF8", "root", "");
		echo "1. Veritabanına Bağlantı Kuruldu. <br>";
	}catch(PDOException $HataMesajiBir){
		echo "1. Veritabanı Bağlantı Hatası <br>";
		echo "1. Hata Açıklaması: " . $HataMesajiBir->getMessage();
		die();
	}
	$VeritabaniBaglantisiBir 	= null;
	
	try{
		$VeritabaniBaglantisiIki 	= new PDO("mysql:host=localhost:3307;dbname=deney;charset=UTF8", "root", "");
		echo "2. Veritabanına Bağlantı Kuruldu.";
	}catch(PDOException $HataMesajiIki){
		echo "2. Veritabanı Bağlantı Hatası <br>";
		echo "2. Hata Açıklaması: " . $HataMesajiIki->getMessage();
		die();
	}
	$VeritabaniBaglantisiIki 	= null;
	
	
	
	?>
</body>
</html>