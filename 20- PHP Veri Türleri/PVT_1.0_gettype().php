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
		/*
			gettype()	= Herhangi bir değişken içeriğinin veri türünü bularak, bulduğu değeri geriye döndürür.
		*/
	
	$Deger 			= "Icabi Kırgız";
	$Deger2 		= 20.15;
	$Deger3 		= true;
	$Deger4 		= array("Asli", "Umut", "Icabi");
	$Deger5 		= 18;
	$Deger6 		= NULL;

	$Sonuc 			= gettype($Deger);
	$Sonuc2 		= gettype($Deger2);
	$Sonuc3 		= gettype($Deger3);
	$Sonuc4 		= gettype($Deger4);
	$Sonuc4 		= gettype($Deger4);
	$Sonuc5 		= gettype($Deger5);
	$Sonuc6 		= gettype($Deger6);
	
		echo $Deger . "<br>";
		echo "Veri Türü: " . $Sonuc . "<br>";
		echo $Deger2 . "<br>";
		echo "Veri Türü: " . $Sonuc2 . "<br>";
		echo $Deger3 . "<br>";
		echo "Veri Türü: " . $Sonuc3 . "<br>";
		print_r($Deger4);
		echo "<br>";
		echo "Veri Türü: " . $Sonuc4 . "<br>";
		echo $Deger5 . "<br>";
		echo "Veri Türü: " . $Sonuc5 . "<br>";
		echo $Deger6 . "<br>";
		echo "Veri Türü: " . $Sonuc6 . "<br>";
	
	?>
</body>
</html>