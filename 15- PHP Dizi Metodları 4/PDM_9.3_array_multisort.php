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
		array_multisort() 	= Bir veya birden fazla dizinin elemanlarını gelişmiş olarak çok yönlü sıralamak için kullanılır.
		SORT_ASC			= A'dan Z'ye / Küçükten büyüğe
		SORT_DESC			= Z'den A'ya / Büyükten küçüğe
		SORT_REGULAR		= Standart sıralama (Varsayılan)
		SORT_NUMERIC		= Rakamsal sıralama
		SORT_STRING			= Alfanumeric sıralama (String) 
		SORT_NATURAL		= Alfanumeric sıralama (String) (Doğal)
	*/
	
	$Isimler 		= array("A1" => 5,"A2" => 7,"A3" => 19,"A4" => 73,"A5" => 31,"A6" => 41);
	
		echo "<pre>";
		print_r($Isimler);
		echo "</pre>";
	
	array_multisort($Isimler); 
	
		echo "<pre>";
		print_r($Isimler);
		echo "</pre>";
	
	?>
</body>
</html>