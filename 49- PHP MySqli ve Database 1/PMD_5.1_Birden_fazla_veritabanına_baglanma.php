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

	$VeritabaniBaglantisiBir 	= @mysqli_connect("localhost:3307", "root", "");
	if(mysqli_connect_errno()){
		echo "1. Veritabanına bağlantı sağlanamadı. <br>";
		echo "Hata: " . mysqli_connect_error() . "<br>";
	}else{
		echo "1. Veritabanına bağlantı kuruldu. <br>";
		mysqli_set_charset($VeritabaniBaglantisiBir, "UTF8");
		mysqli_select_db($VeritabaniBaglantisiBir, "cahrion");
	}
	
	$VeritabaniBaglantisiIki 	= @mysqli_connect("localhost:3307", "root", "");
	if(mysqli_connect_errno()){
		echo "2. Veritabanına bağlantı sağlanamadı. <br>";
		echo "Hata: " . mysqli_connect_error() . "<br>";
	}else{
		echo "2. Veritabanına bağlantı kuruldu. <br>";
		mysqli_set_charset($VeritabaniBaglantisiIki, "UTF8");
		mysqli_select_db($VeritabaniBaglantisiIki, "timetube");
	}
	
	mysqli_close($VeritabaniBaglantisiBir);
	mysqli_close($VeritabaniBaglantisiIki);
	
	?>
</body>
</html>