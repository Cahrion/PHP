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
		array_unique()	 	= Dizinin içersinde bulunan ve tekrarlanan elemanların fazla olanlarını silerek yeni bir dizi oluşturmak için kullanılır.
	*/
	
	$Isimler 	= array("Ahmet",8,"Yaprak","Ahmet",12.44,"Yakup","Selin",8,"Erdem","Selin","8",12,"Muzaffer","Yaprak",8,"Yakup","Mehmet","Erdem");

		echo "<pre>";
		print_r($Isimler);
		echo "</pre>";
	
	$Sonuc 			= array_unique($Isimler); // Anahtarlar korunur.
	
		echo "<pre>";
		print_r($Sonuc);
		echo "</pre>";
		
	?>
</body>
</html>