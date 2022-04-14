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
		implode() 	= Dizi içerisindeki eleman / elemanları değişkenlere atamak için kullanılır
	*/
	
	$Isimler 	= array("Volkan","Hakan","Onur","Ümit","Serkan","Levent");
	
	echo "<pre>";
	print_r($Isimler);
	echo "</pre><br>";
	
	list($Bir, , , ,$Bes,$Alti) 	= $Isimler; // istenmeyenleri boş geçebiliriz.
	
	echo $Bir . "<br>";
	echo $Bes . "<br>";
	echo $Alti . "<br>";
	
	?>
</body>
</html>