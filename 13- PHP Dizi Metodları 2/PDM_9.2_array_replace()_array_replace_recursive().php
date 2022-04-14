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
		array_replace()	 			= Birden fazla dizi içerisinde bulunan eleman veya elemanların, ilk dizi içerisinde olanları baz alınarak kendisinden sonra gelecek olan dizi veya diziler içerisinde bulunan eleman veya elemanlarla güncelleyerek yeni bir dizi oluşturmak için kullanılır.
		array_replace_recursive()	= Birden fazla dizi içerisinde bulunan eleman veya elemanların, ilk dizi içerisinde olanları baz alınarak kendisinden sonra gelecek olan dizi veya diziler içerisinde bulunan eleman veya elemanlarla güncelleyerek yeni bir dizi oluşturmak için kullanılır. (Gelişmiş)
	*/
	
	$IsimlerErkek 	= array("Ahmet","Yaprak","Deniz","Yakup","Toprak","Erdem","Mehmet","Muzaffer");
	$IsimlerKiz		= array("Ayşe","Aslı","Selinda","Yeliz","Yaprak");
	$IsimlerKiz2	= array("Deniz","Toprak");

		echo "<pre>";
		print_r($IsimlerErkek);
		echo "</pre>";
	
		echo "<pre>";
		print_r($IsimlerKiz);
		echo "</pre>";
	
		echo "<pre>";
		print_r($IsimlerKiz2);
		echo "</pre>";
	
	$Sonuc 			= array_replace($IsimlerErkek, $IsimlerKiz, $IsimlerKiz2); // En sondakini en üstte yazar 
	// (array_replace_recursive) aynı çalışır.
	
		echo "<pre>";
		print_r($Sonuc);
		echo "</pre>";
		
	?>
</body>
</html>