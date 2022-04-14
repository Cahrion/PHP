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
	
	// Iki veritabanına bağlantı kurulur. (En Doğru kullanım.)
	
	try{
		$VeritabaniBaglantisi 	= new PDO("mysql:host=localhost:3307;charset=UTF8", "root", "");
		echo "Veritabanına Bağlantıları Kuruldu. <br>";
	}catch(PDOException $HataMesaji){
		echo "Veritabanı Bağlantı Hatası <br>";
		echo "Hata Açıklaması: " . $HataMesaji->getMessage();
		die();
	}
	$SorguBir 	= $VeritabaniBaglantisi->query("SELECT * FROM cahrion.kisiler"); // Mysqli derslerinde olan olay buradada çalışabilir.
	$SorguIki 	= $VeritabaniBaglantisi->query("SELECT * FROM deney.ornek"); // Hata dönmezse çalışıyor demektir.
	
	$VeritabaniBaglantisi 	= null;
	?>
</body>
</html>