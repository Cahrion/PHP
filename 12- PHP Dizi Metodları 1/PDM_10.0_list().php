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
	
	list($Bir,$Iki,$Uc,$Dort,$Bes,$Alti) 	= $Isimler;
	
	echo $Bir . "<br>";
	echo $Iki . "<br>";
	echo $Uc . "<br>";
	echo $Dort . "<br>";
	echo $Bes . "<br>";
	echo $Alti . "<br>";
	
	?>
</body>
</html>