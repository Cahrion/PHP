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

	$VeritabaniBaglantisi 	= @mysqli_connect("localhost:3307", "root", "");
	if(mysqli_connect_errno()){
		echo "1. Veritabanına bağlantı sağlanamadı. <br>";
		echo "Hata: " . mysqli_connect_error() . "<br>";
		die();
	}
	echo "1. Veritabanına bağlantı kuruldu. <br>";
	mysqli_set_charset($VeritabaniBaglantisi, "UTF8");
	
	// İleri düzey bağlanma biçimi ... (Standart yapı)
	$SorguBir 	= mysqli_query($VeritabaniBaglantisi, "SELECT * FROM cahrion.kayitlar");
	$SorguIki 	= mysqli_query($VeritabaniBaglantisi, "SELECT * FROM timetube.uyeler");
	
	
	mysqli_close($VeritabaniBaglantisi);
	?>
</body>
</html>