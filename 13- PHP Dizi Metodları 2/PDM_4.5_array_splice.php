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
	
	$Isimler 		= array("A1" => "Volkan","A2" => "Hakan","A2" => "Onur","A3" => "Serkan","A4" => "Levent","A5" => "Ümit","A6" => "Erkan","A7" => "Özgür","A8" => "Icabi","A9" => "Cüneyt"); 
	$Eklenecekdizi 	= array("B1" => "RECEP","B2" => "FARUK","B3" =>"ALİ");
	
	echo "<pre>";
	print_r($Isimler);
	echo "</pre>";
	
	array_splice($Isimler, 0, count($Isimler), $Eklenecekdizi);  // İlk dizidekileri silip üstüne eklenecek diziyi yazdırdı.
	
	echo "<pre>";
	print_r($Isimler);
	echo "</pre>";

	?>
</body>
</html>