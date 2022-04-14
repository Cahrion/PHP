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
		min() 	= Dizi içerisinde bulunan eleman veya elemanların rakamsal değerler içermesi durumunda en küçük rakamsal değer içeren elemanı bulmak için kullanılır.
		max() 	= Dizi içerisinde bulunan eleman veya elemanların rakamsal değerler içermesi durumunda en büyük rakamsal değer içeren elemanı bulmak için kullanılır.
	*/
	
	$Degerler 				= array(8, 14, 2, 44, 175, -35, 65);
	
		echo "<pre>";
		print_r($Degerler);
		echo "</pre>";
	
	$Sonucmin 				= min($Degerler); 
	$Sonucmax 				= max($Degerler); 
	
		echo "Minimum değer: " . $Sonucmin . "<br>";
		echo "Maximum değer: " . $Sonucmax;
	
	

	?>
</body>
</html>