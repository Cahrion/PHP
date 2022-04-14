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
	
	$IsimlerErkek 	= array(array("Ahmet","Yaprak"),"Deniz",array("Toprak","Erdem"),"Mehmet");
	$IsimlerKiz		= array("Ayşe","Aslı","Selinda","Deniz");

		echo "<pre>";
		print_r($IsimlerErkek);
		echo "</pre>";
	
		echo "<pre>";
		print_r($IsimlerKiz);
		echo "</pre>";
	
	$Sonuc 			= array_replace($IsimlerErkek, $IsimlerKiz); // Çok boyut korunmaz. // (array_replace_recursive) aynı çalışır.
	
		echo "<pre>";
		print_r($Sonuc);
		echo "</pre>";
		
	?>
</body>
</html>