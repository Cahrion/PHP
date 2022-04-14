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
		sort() 	= Dizinin elemanlarını büyük harf, küçük harf duyarlı olacak şekilde a'dan z'ye yada küçükten büyüğe sıralamak için kullanılır.
		rsort() 	= Dizinin elemanlarını büyük harf, küçük harf duyarlı olacak şekilde z'den a'ya yada büyükten küçüge sıralamak için kullanılır.
		asort() 	= Dizinin elemanlarını büyük harf, küçük harf duyarlı olacak ve anahtarlarını bozmayacak şekilde a'dan z'ye yada küçükten büyüğe sıralamak için kullanılır. 
		arsort() 	= Dizinin elemanlarını büyük harf, küçük harf duyarlı olacak ve anahtarlarını bozmayacak şekilde z'den a'ya yada büyükten küçüge sıralamak için kullanılır.
	*/
	
	$Isimler 		= array("A1" => "Volkan","A2" => "Hakan","A3" => "Onur","A4" => "volkan","A5" => "Serkan","A6" => "VOLKAN","A7" => "Rıza");
	
		echo "<pre>";
		print_r($Isimler);
		echo "</pre>";
	
	asort($Isimler); // Anahtar düzenli bir şekilde gelir.	(düz)
	
		echo "[Düz (a-z)]<pre>";
		print_r($Isimler);
		echo "</pre>";
	
	arsort($Isimler); // Anahtar düzenli bir şekilde gelir. (ters)
	
		echo "[Ters (z-a)]<pre>";
		print_r($Isimler);
		echo "</pre>";

	?>
</body>
</html>