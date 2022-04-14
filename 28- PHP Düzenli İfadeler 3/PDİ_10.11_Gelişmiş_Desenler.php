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
	// Mail doğrulama aracı
	
	$Icerik 	= "icabikrz@gmail.com.tr";
	$Desen		= "/^\w+@[a-z]+\.[a-z]{2,}(.[a-z]{2}|)$/"; 

	$Sonuc		= preg_match($Desen, $Icerik);

		echo $Icerik . "<br>";
		
	if($Sonuc == 1){
		echo "Girilen Değer Bir Mail'dir.";
	}else{
		echo "Girilen Değer Bir Mail Değildir.";
	}
	?>
</body>
</html>