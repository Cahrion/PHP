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
			preg_match() 		=	Kendisine parametre olarak verilen düzenli ifadeli değer doğrultusunda içeriği kontrol eder ve aranan değerin eşleşmesi durumunda eşleşmeyi sağlayan içeriğin değerinden yeni bir dizi oluşturarak oluşturduğu dizi değerini geriye döndürür.
			preg_match_all() 	=	Kendisine parametre olarak verilen düzenli ifadeli değer doğrultusunda içeriği gelişmiş olarak kontrol eder ve aranan değerin eşleşmesi durumunda eşleşmeyi sağlayan içeriğin değerinden veya değerlerinden yeni bir dizi oluşturarak oluşturduğu dizi değerini geriye döndürür.
		*/
	
	$Metin 		= "Merhaba Benim Adım Icabi Kırgız, Ben Bir PHP Ögrencisiyim. Beni Facebook üzerinden Icabi Kırgız şeklinde arıyarak bulabilirsiniz.";
	
	$Desen		= "/Icabi/";
	
	preg_match($Desen, $Metin, $Sonuc); // Desen(1) metinde(2) aranır. Çıkan sonuç "Sonuç"(3) listesine yazılır.
	
		echo "<pre>";
		print_r($Sonuc);
		echo "</pre>";
	
	if($Sonuc){
		echo "Aranan Eşleşme içerik dahilinde var.";
	}else{
		echo "Aranan Eşleşme içerik dahilinde yok.";
	}
	
	
	?>
</body>
</html>