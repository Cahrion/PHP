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
		current() 	= Dizinin göstericisi konumundaki elemanı bulmak için kullanılır.
		pos() 		= Dizinin göstericisi konumundaki elemanı bulmak için kullanılır.
	*/
	
	$Isimler 		= array("Kızlar"=> array("Selinda","Aslı","Nurgul","Pelin"), "Hakan", "Onur");
	
	echo "<pre>";
	print_r($Isimler);
	echo "</pre>";
		
	$Sonuccurrent 	= current($Isimler); 	// İlk konumdaki elemanın ismini döndürür.
	$Sonucpos 		= pos($Isimler); 		// İlk konumdaki elemanın ismini döndürür.
	echo "(current)<br>Dizinin göstericisi konumundaki eleman değeri: "; // hata yapma (Değer = dizi) echo'da yazılmaz.
	print_r($Sonuccurrent); 
	echo "<br><br>";
	echo "(pos)<br>Dizinin göstericisi konumundaki eleman değeri: "; // hata yapma (Değer = dizi) echo'da yazılmaz.
	print_r($Sonucpos);

		
	?>
</body>
</html>