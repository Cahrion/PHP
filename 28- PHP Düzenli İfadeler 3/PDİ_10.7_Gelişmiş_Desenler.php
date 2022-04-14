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
	// URL doğrulama aracı
	
	$Icerik 	= "http://www.extraegitim.com/index.php";
	$Desen		= "/(?:http:\/\/)?([^\/]+)/"; 

	$Sonuc		= preg_match($Desen, $Icerik);

		echo $Icerik . "<br>";
		
	if($Sonuc == 1){
		echo "Girilen Değer Bir URL'dir.";
	}else{
		echo "Girilen Değer Bir URL Değildir.";
	}
	?>
</body>
</html>