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
		array_keys()	= Dizinin anahtarlarını alıp yeni bir dizi oluşturmak için kullanılır.
		array_values()	= Dizinin elemanlarını alıp yeni bir dizi oluşturmak için kullanılır.
	*/
	
	
	$Isimler 		= array("Volkan" =>"PHP","Icabi" => "CSS","Serkan" => "JS", "Hakan" => "HTML"); 
	
		echo "<pre>";
		print_r($Isimler);
		echo "</pre>";
	
	$Sonuckey 			= array_keys($Isimler);
	$SonucVal 			= array_values($Isimler);
	
		echo "<pre>";
		print_r($Sonuckey);
		echo "</pre>";
	
		echo "<pre>";
		print_r($SonucVal);
		echo "</pre>";
	
	

	?>
</body>
</html>