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
	eval() 		= Belirtilecek olan içeriğin, PHP kodu olarak algılanmasını sağlar ve kodu çalıştırarak, oluşan değeri geriye döndürür.
	exec() 		= PHP dosyası dahilinde belirtilecek olan komutu çalıştırır ve işlem sonucunda bulduğu değerlerden yeni bir dizi oluşturarak oluşturduğu dizi değerini geriye döndürür.
	
	 ~> Komut ile Kod aynı değildir.
	 
	*/
	
	$Icerik 	= "A'dan Z'ye PHP Görsel Eğitim Seti";
	$Egitmen 	= "Volkan Alakent";
	$Metin 		= 'Izlediğiniz ders, $Icerik\'ne ait olup eğitmeniniz $Egitmen\'dir';
	
	echo "Metin: " . $Metin . "<br><br>";
	
	eval("\$Sonuc = \"$Metin\";");
	
	echo $Sonuc;
	?>
</body>
</html>