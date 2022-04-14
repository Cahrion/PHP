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
			preg_filter() 	=	Kendisine parametre olarak verilen düzenli ifadeli değer ve değerler doğrultusunda içeriği kontrol eder ve aranan değeğerin veya değerlerin eşleşmesi durumunda eşleşen değerin yada değerlerin değişimini sağlayarak yeni bir içerik veya dizi oluşturarrak oluşturduğu içeriği veya diziyi geriye döndürür.
			preg_replace() 	=	Kendisine parametre olarak verilen düzenli ifadeli değer ve değerler doğrultusunda içeriği kontrol eder ve aranan değeğerin veya değerlerin eşleşmesi durumunda eşleşen değerin yada değerlerin değişimini sağlayarak yeni bir içerik veya dizi oluşturarrak oluşturduğu içeriği veya diziyi geriye döndürür.
		*/
	
	$Icerik 		= "Merhaba Benim Adım Icabi Kırgız, Ben Bir PHP Ögrencisiyim. Beni Facebook üzerinden Icabi Kırgız şeklinde arıyarak bulabilirsiniz.";
	$Ara		= array("/Icabi/", "/PHP/", "/,/");
	$Degistir	= array("Can", "CSS", ".");		
	$Sonuc 		= preg_replace($Ara, $Degistir, $Icerik); 
	
	// (1)Değiştirilecek olan ve (2)değiştirileceğin yerine gelicek yeni metin sonrasında (3) değiştirilecek metin
	
		echo "Orjinal İçerik: <br>" .$Icerik . "<br><br>";
		echo "Değişen İçerik: <br>" .$Sonuc;
	
	
	?>
</body>
</html>