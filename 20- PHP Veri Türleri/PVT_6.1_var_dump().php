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
	
	$Deger 	= null;
	$Deger2 = array("Icabi", 2002, 55.25, false);
	
	echo $Deger . " : ";
	var_dump($Deger);
	echo "<br><br>";
	
	echo "<pre>";
	print_r($Deger2);
	echo "<pre> : ";
	var_dump($Deger2);
	echo "<br><br>";
	
	?>
</body>
</html>