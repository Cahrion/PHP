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
	
	$IsimlerErkek 	= array("A1" => "Ahmet","A2" => "Yaprak","A3" => "Deniz","A4" => "Yakup","A5" => "Toprak");
	$IsimlerKiz		= array("B1" => "Ayşe","B2" => "Aslı","A1" => "Selinda","B4" => "Deniz");

		echo "<pre>";
		print_r($IsimlerErkek);
		echo "</pre>";
	
		echo "<pre>";
		print_r($IsimlerKiz);
		echo "</pre>";
	
	$Sonuc 			= array_replace($IsimlerErkek, $IsimlerKiz);  // Anahtara göre eşitler. // (array_replace_recursive) aynı çalışır.
	
		echo "<pre>";
		print_r($Sonuc);
		echo "</pre>";
		
	?>
</body>
</html>