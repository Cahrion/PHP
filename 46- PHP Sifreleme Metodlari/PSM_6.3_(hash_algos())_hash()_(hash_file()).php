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
			
			hash_algos() 	= PHP yazılımı içerisinde kullanılabilecek olan ve sisteme tanımlı tüm algoritmaların listesini bulur ve bulduğu değerlerden yeni bir dizi oluşturarak oluşturduğu değeri geriye döndürür.
			hash() 			= Belirtilecek olan içeriğin hash özetini üreterek, ürettiği değeri geriye döndürür.
			hash_file() 	= Belirtilecek olan dosyanın hash özetini üreterek, ürettiği değeri geriye döndürür.
			
		*/
			
	$Algoritma 	= "sha512";
	
	$Icerik 	= "Icabi Kırgız - IK System";
	echo "Orjinal Icerik: " . $Icerik . "<br>";
	
	$Sonuc 		= hash($Algoritma, $Icerik);
	echo $Algoritma . "metodu kullanılarak üretilmiş olan özet: " . $Sonuc;
	
	?>
</body>
</html>