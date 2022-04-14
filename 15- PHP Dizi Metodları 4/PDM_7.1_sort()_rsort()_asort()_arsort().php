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
	
	$Isimler 		= array("A1" => 18,"A2" => 99,"A3" => 784,"A4" => 1,"A5" => -19,"A6" => 900,"A7" => 31);
	
		echo "<pre>";
		print_r($Isimler);
		echo "</pre>";
	
	sort($Isimler); // Anahtar düzensiz bir şekilde gelir.	(düz)
	
		echo "[Düz (Sıralama)]<pre>";
		print_r($Isimler);
		echo "</pre>";
	
	rsort($Isimler); // Anahtar düzensiz bir şekilde gelir. (ters)
	
		echo "[Ters (Ters Sıralama)]<pre>";
		print_r($Isimler);
		echo "</pre>";

	?>
</body>
</html>