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
	// Kötü yazılım var mı yok mu doğrulama aracı
	
	$Icerik 	= "<span style='color:red'>Icabi Kırgız</span>";
	$Desen		= "/<\/?[^>]+>/"; 
	$Degisen 	= "";
	$Sonuc		= preg_replace($Desen, $Degisen, $Icerik);

		echo $Icerik . "<br>";
		echo $Sonuc;
	
	?>
</body>
</html>