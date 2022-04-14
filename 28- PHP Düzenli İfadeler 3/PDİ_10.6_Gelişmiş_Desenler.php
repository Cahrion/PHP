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
	// Plaka doğrulama aracı
	
	$Icerik 	= "34 AC 3427";
	$Desen		= "/^\d{2}\s?[A-Z]{1,3}\s?\d{2,4}$/"; 

	$Sonuc		= preg_match($Desen, $Icerik);

		echo $Icerik . "<br>";
		
	if($Sonuc == 1){
		echo "Girilen Değer Bir Plakadır.";
	}else{
		echo "Girilen Değer Bir Plaka Değildir.";
	}
	
	?>
</body>
</html>