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
		array_shift() 	= Dizi içerisinde bulunan ilk elemanı silmek için kullanılır. Aynı zamanda dizi içeriginden sildiği elemanın değerini geriye döndürür.
		
		array_pop() 	= Dizi içerisinde bulunan son elemanı silmek için kullanılır. Aynı zamanda dizi içeriginden sildiği elemanın değerini geriye döndürür.
	*/
	
	$Isimler 	= array("Volkan","Hakan","Onur","Levent","Serkan","Eray","Doğukan");
	
	echo "<pre>";
	print_r($Isimler);
	echo "</pre>";
	echo "<br>";
	
	$BastanSilinen 	= array_shift($Isimler); // Eğer farklı bir sıralama yaptıysanız bu sayısal sıralamada bir altta alıcak ve sıralamayı bozacaktır.
	
	echo "<pre>";
	print_r($Isimler);
	echo "</pre>";
	echo "<br>";
	echo "Baştan silinen dizi elamanının değeri: " . $BastanSilinen . "<br>";
	
	
	$SondanSilinen 	= array_pop($Isimler);  
	
	echo "<pre>";
	print_r($Isimler);
	echo "</pre>";
	echo "<br>";
	echo "Sondan silinen dizi elamanının değeri: " . $SondanSilinen . "<br>";
	
	
	?>
</body>
</html>