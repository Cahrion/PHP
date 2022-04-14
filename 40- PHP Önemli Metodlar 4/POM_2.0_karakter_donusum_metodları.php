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
		ucwords() 	=	Belirtilecek olan içerikte bulunan tüm kelimelerin ilk harflerini büyük harf olacak şekilde değiştirerek, değiştirilmiş olan değeri geriye döndürür.
		ucfirst() 	=	Belirtilecek olan içeriğinilk harfini büyük harf olacak şekilde değiştirerek, değiştirilmiş olan değeri geriye döndürür.
		lcfirst() 	= 	Belirtilecek olan içeriğinilk harfini küçük harf olacak şekilde değiştirerek, değiştirilmiş olan değeri geriye döndürür.
	*/
	
	$Icerik 			= "icabi kırgız  IK system and extra eğitim - a'dan z'ye PHP notları.";
	echo $Icerik . "<br><br>";
	
	$MetinBir 		= ucwords($Icerik); // Türkçe karakter sorunu var. (her kelime başındaki harfi büyük yapar.)
	$MetinIki 		= ucfirst($Icerik); // Türkçe karakter sorunu var. (Sadece ilk harfi büyük yapar.)
	
	echo "ucwords :  " .  $MetinBir . "<br>";
	echo "ucfirst :  " .  $MetinIki;
	
	?>
</body>
</html>