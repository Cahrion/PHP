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
		goto  	= Kodlama dosyası içerisinde belirtilecek olan imlenmiş / hedeflenmiş satıra atlama koşulunu sağlamak için kullanılır.
		
		Yapısı 	= 
		goto Yerimiz
		
		Yerimiz:
	*/
	
	$Deger = "Egitimci";
	
		echo "Onur tatlı <br>";
	
	goto $Deger; // HATA. Çünkü goto ifadesi için belirtilecek olan IM (hedef) bir değişkenden gelemez.
	
		echo "Ümit Okudan <br>";
		echo "Serkan Çelik <br>";
		echo "Hakan Alakent <br>";
	
	Ogrenci:
	
		echo "Icabi Kırgız";
	
	
	
	
	?>
</body>
</html>