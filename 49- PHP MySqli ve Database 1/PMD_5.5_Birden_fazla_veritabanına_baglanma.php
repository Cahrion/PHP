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

	@$VeritabaniBaglantisi 	= new mysqli("localhost:3307", "root", "");
	if($VeritabaniBaglantisi->connect_errno){
		echo "1. Veritabanına bağlantı sağlanamadı. <br>";
		echo "Hata: " . $VeritabaniBaglantisi->connect_error . "<br>";
		die();
	}
	echo "1. Veritabanına bağlantı kuruldu. <br>";
	$VeritabaniBaglantisi->set_charset("UTF8");
	
	// İleri düzey bağlanma biçimi ... (Nesnesel yapı)
	$SorguBir 	= $VeritabaniBaglantisi->query("SELECT * FROM cahrion.kayitlar");
	$SorguIki 	= $VeritabaniBaglantisi->query("SELECT * FROM timetube.uyeler");
	
	
	$VeritabaniBaglantisi->close();
	?>
</body>
</html>