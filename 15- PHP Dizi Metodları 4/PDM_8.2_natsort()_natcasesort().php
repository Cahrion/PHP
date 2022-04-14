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
		natsort() 		= Dizinin elemanlarını büyük harf, küçük harf duyarlı olacak ve doğal sıralama şekilde a'dan z'ye yada küçükten büyüğe sıralamak için kullanılır.
		natcasesort() 	= Dizinin elemanlarını doğal sıralama şekilde a'dan z'ye yada küçükten büyüğe sıralamak için kullanılır.
	*/
	
	$Resimler1 		= array("A1" => "Resim1", "A2" => "ResIm273", "A3" => "ReSIM14", "A4" => "RESIM142", "A5" => "Resim2", "A6" => "Resim2645", "A7" => "Resim372", "A8" => "Resim3");
	$Resimler2 		= array("A1" => "Resim1", "A2" => "ResIm273", "A3" => "ReSIM14", "A4" => "RESIM142", "A5" => "Resim2", "A6" => "Resim2645", "A7" => "Resim372", "A8" => "Resim3");
	
		echo "<pre>";
		print_r($Resimler1);
		echo "</pre>";
	
	sort($Resimler1); 
	
		echo "Standart Sıralama<pre>";
		print_r($Resimler1);
		echo "</pre>";
	
	natcasesort($Resimler2); // boolean veri türünde değer gönderir (Eğer çalışırsa = 1, Çalışmazsa = 0)
	
		echo "Doğal Sıralama<pre>";
		print_r($Resimler2);
		echo "</pre>";

	?>
</body>
</html>