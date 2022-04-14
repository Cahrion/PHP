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
	// Tarih doğrulama aracı
	
	$Icerik 	= "28:03:2002";
	$Desen		= "/^\d{1,2}\.?:?\/?\d{1,2}\.?:?\/?\d{2,4}$/"; 
	
	$Sonuc		= preg_match($Desen, $Icerik);

		echo $Icerik . "<br>";
		
	if($Sonuc == 1){
		echo "Girilen Değer Bir Tarihtir.";
	}else{
		echo "Girilen Değer Bir Tarih Değildir.";
	}
	
	?>
</body>
</html>