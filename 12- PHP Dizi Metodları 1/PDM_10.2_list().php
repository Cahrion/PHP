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
	
	$Isimler 	= array("Volkan",array("Şule","Dilara",array("Mavi","Lila","Kırmızı")),"Serkan","Levent");
	
	echo "<pre>";
	print_r($Isimler);
	echo "</pre><br>";
	
	list($A1,list($B1,$B2,list($C1,$C2,$C3)),$A2,$A3) 	= $Isimler; // istenmeyenleri boş geçebiliriz.
	
	echo $A1 . "<br>";
	echo $B1 . "<br>";
	echo $B2 . "<br>";
	echo $C1 . "<br>";
	echo $C2 . "<br>";
	echo $C3 . "<br>";
	echo $A2 . "<br>";
	echo $A3 . "<br>";
	
	?>
</body>
</html>