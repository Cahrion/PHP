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
		$Degerler 	= array("PHPOgrencisi" => "Icabi","Ahmet","PHPOgretmeni" => "Volkan","Onur");
	
		echo "<pre><br>";
		print_r($Degerler);	
		echo "</pre>";
	
		$Degerler2	= $Degerler;
		$Degerler2[] 	= "Cafer";
	
		echo "<pre><br>";
		print_r($Degerle32);	
		echo "</pre>";
	
	?>
</body>
</html>