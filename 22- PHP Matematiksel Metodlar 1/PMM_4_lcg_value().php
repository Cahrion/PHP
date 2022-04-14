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
		
			lcg_value()		= 0 ila 1 arasında rastgele bir ondalıklı sayı üreterek, ürettiği değeri geriye döndürür.	
			
		*/
	
	$SayiUret1 		= lcg_value();
	$SayiUret2 		= lcg_value();
	$SayiUret3 		= lcg_value();
	$SayiUret4 		= lcg_value();
	$SayiUret5 		= lcg_value();
	
		echo "Php tarafından rastgele üretilen sayı değeri: " . $SayiUret1 . "<br>";
		echo "Php tarafından rastgele üretilen sayı değeri: " . $SayiUret2 . "<br>";
		echo "Php tarafından rastgele üretilen sayı değeri: " . $SayiUret3 . "<br>";
		echo "Php tarafından rastgele üretilen sayı değeri: " . $SayiUret4 . "<br>";
		echo "Php tarafından rastgele üretilen sayı değeri: " . $SayiUret5 . "<br>";
	
	?>
</body>
</html>