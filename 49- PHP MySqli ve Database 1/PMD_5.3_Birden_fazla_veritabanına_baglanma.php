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

	@$VeritabaniBaglantisiBir 	= new mysqli("localhost:3307", "root", "");
	if($VeritabaniBaglantisiBir->connect_errno){
		echo "1. Veritabanına bağlantı sağlanamadı. <br>";
		echo "Hata: " . $VeritabaniBaglantisiBir->connect_error . "<br>";
	}else{
		echo "1. Veritabanına bağlantı kuruldu. <br>";
		$VeritabaniBaglantisiBir->set_charset("UTF8");
		$VeritabaniBaglantisiBir->select_db("cahrion");
	}
	
	@$VeritabaniBaglantisiIki 	= new mysqli("localhost:3307", "root", "");
	if($VeritabaniBaglantisiIki->connect_errno){
		echo "2. Veritabanına bağlantı sağlanamadı. <br>";
		echo "Hata: " . $VeritabaniBaglantisiIki->connect_error . "<br>";
	}else{
		echo "2. Veritabanına bağlantı kuruldu. <br>";
		$VeritabaniBaglantisiIki->set_charset("UTF8");
		$VeritabaniBaglantisiIki->select_db("timetube");
	}
	
	$VeritabaniBaglantisiBir->close();
	$VeritabaniBaglantisiIki->close();
	
	?>
</body>
</html>