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
		
			fmod() 		= Herhangi bir sayının belirtilecek değere göre mödülüsünü bularak, bulduğu değeri geriye döndürür.
			
		*/
	$Deger1 	= 942;
	$Deger2 	= 100;
	$modulus 	= fmod($Deger1, $Deger2);
	
		echo "942 modülüs 100: " . $modulus . "<br>";
	
	$Deger3 	= 5.10;
	$Deger4 	= 4.20;
	$modulus2 	= fmod($Deger3, $Deger4);
	
		echo "5.10 modülüs 4.20: " . $modulus2 . "<br>";
	
	
	?>
</body>
</html>