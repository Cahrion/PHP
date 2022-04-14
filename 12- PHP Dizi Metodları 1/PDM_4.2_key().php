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
		key() 	= Dizinin göstericisi konumundaki elemanın anahtarını bulmak için kullanılır.
	*/
	
	$Isimler 	= array("Kızlar" =>array("Güzel" =>"Banu","kel" =>"Aslı","Bilinmiyor" => "Dilara"), "PHPogrencisi"=> "Icabi", "Onur");
	
	echo "<pre>";
	print_r($Isimler);
	echo "</pre>";
		
	$Sonuc 		= key($Isimler["Kızlar"]); // İlk konumdaki elemanın anahtarını döndürür.
	echo "Dizinin göstericisi konumundaki elemanın anahtar değeri: $Sonuc";
		
	?>
</body>
</html> 