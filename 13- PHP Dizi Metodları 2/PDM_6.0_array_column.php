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
		array_column()	 	= Çok boyutlu bir dizi içerisinde bulunan eleman / elemanları belirtilecek olan anahtar koşullarına göre biçimlendirerek yeni bir dizi oluşturmak için kullanılır.
		PARAMETRELER 		=
		1. PARAMETRE 		=	Dizi 
		2. PARAMETRE 		=	İstenen anahtar verisini elemanlarını getirir. (Eleman kısmına aktarılır.)
		3. PARAMETRE 		=	İstenen anahtar verisinin elemanlarını anahtar olarak getirir. (Anahtar kısmına aktarılır.)
	*/
	
	$Takimlar 		= array(array("KurulusYili" => "1907","TakimAdi" => "Fenerbahçe"), array("KurulusYili" => "1905","TakimAdi" => "Galatasaray"),array("KurulusYili" => "1903","TakimAdi" => "Beşiktaş"));
	
	echo "<pre>";
	print_r($Isimler);
	echo "</pre>";
	
	$sonuc 			= array_column($Takimlar, "TakimAdi");  
	
	echo "<pre>";
	print_r($sonuc);
	echo "</pre>";

	?>
</body>
</html>