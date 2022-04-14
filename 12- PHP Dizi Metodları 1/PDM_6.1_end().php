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
	
	$Isimler 		= array("Icabi", "Hakan", "Onur","Kızlar"=> array("Selinda","Aslı","Nurgul","Pelin"));
	
	echo "<pre>";
	print_r($Isimler);
	echo "</pre>";
		
	$Sonuc			= end($Isimler); 	// Son konumdaki elemanın ismini döndürür.
	
	echo "(end)<br>Dizinin göstericisinin son konumundaki eleman değeri: ";  // hata yapma (Değer = dizi) echo'da yazılmaz.
	print_r($Sonuc);

		
	?>
</body>
</html>