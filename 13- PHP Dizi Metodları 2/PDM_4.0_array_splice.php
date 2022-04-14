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
		array_splice()	 	= Dizinin belli bölümlerini alıp, belli bölümlerini silip, eğer belirtilirse yeni elemanlarda ekleyerek yeni bir diizi oluşturmak için kullanılır.
		PARAMETRELER 		=
		1. PARAMETRE 		=	Dizi 
		2. PARAMETRE 		=	Başlangıç noktası 
		3. PARAMETRE 		=	Başlangıçtan sonra silinecek eleman sayısı
		4. PARAMETRE 		=	Ekleme yapılacaksa eklenencek yeni eleman. (liste veya string değer)
	*/
	
	$Isimler 		= array("Volkan","Hakan","Onur","Serkan","Levent","Ümit","Erkan","Özgür","Icabi","Cüneyt"); 
		
	echo "<pre>";
	print_r($Isimler);
	echo "</pre>";
	
	$Sonuc 			= array_splice($Isimler, 4); // baştan 
	
	echo "<pre>";
	print_r($Isimler);
	echo "</pre>";
	
	echo "<pre>";
	print_r($Sonuc);
	echo "</pre>";
	
	?>
</body>
</html>