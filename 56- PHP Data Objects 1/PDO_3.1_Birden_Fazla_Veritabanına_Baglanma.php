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
	
	// Iki veritabanına bağlantı kurulur. Kod kirliliğini engeller daha basit kullanım (En doğru kullanım.)
	
	try{
		$VeritabaniBaglantisiBir 	= new PDO("mysql:host=localhost:3307;dbname=cahrion;charset=UTF8", "root", "");
		$VeritabaniBaglantisiIki 	= new PDO("mysql:host=localhost:3307;dbname=deney;charset=UTF8", "root", "");
		echo "Veritabanına Bağlantıları Kuruldu. <br>";
	}catch(PDOException $HataMesajiBir){
		echo "Veritabanı Bağlantı Hatası <br>";
		echo "Hata Açıklaması: " . $HataMesajiBir->getMessage();
		die();
	}
	$VeritabaniBaglantisiBir 	= null;
	$VeritabaniBaglantisiIki 	= null;
	
	
	
	?>
</body>
</html>