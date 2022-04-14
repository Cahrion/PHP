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
			var_dump() 	= Herhangi bir değişkene ait tüm yapıya ve bilgilere ulaşmak için kullanılır.	
		*/
	
	$Deger 	= "Icabi Kırgız";
	$Deger2 = 2002;
	$Deger3 = 184.45;
	$Deger4 = false;
	
	echo $Deger . " : ";
	var_dump($Deger);
	echo "<br><br>";
	
	echo $Deger2 . " : ";
	var_dump($Deger2);
	echo "<br><br>";
	
	echo $Deger3 . " : ";
	var_dump($Deger3);
	echo "<br><br>";
	
	echo $Deger4 . " : ";
	var_dump($Deger4);
	echo "<br><br>";
	
	?>
</body>
</html>