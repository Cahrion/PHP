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
		array_chunk()	 	= Dizinin belli bölümlerini alıp parçalayarak yeni bir çok boyutlu dizi oluşturmak için kullanılır.
		PARAMETRELER 		=
		1. PARAMETRE 		=	Dizi 
		2. PARAMETRE 		=	Kaç elemanda bir boyut oluşturulcağının değeri 
		3. PARAMETRE 		=	Değerleri koruyup korumama olayı (varsayılan = false (korumaz))
	*/
	
	$Isimler 		= array("Volkan","Hakan","Onur","Serkan","Levent","Ümit","Erkan","Özgür","Icabi","Cüneyt","Aslı","Nurgul","Rümeysa","Şule","Meryem"); 
	
	echo "<pre>";
	print_r($Isimler);
	echo "</pre>";
	
	$sonuc 	= array_chunk($Isimler, 3, true);  
	
	echo "<pre>";
	print_r($sonuc);
	echo "</pre>";

	?>
</body>
</html>