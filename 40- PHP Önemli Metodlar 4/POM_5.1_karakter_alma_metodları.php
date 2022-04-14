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
		substr() 		= Belirtilecek olan içerikte, belirtilecek olan karakter sıra numarası aralıklarına göre istenilenilen değeri bularak bulduğu değeri geriye döndürür.
		mb_substr() 	= Belirtilecek olan içerikte, belirtilecek olan karakter sıra numarası aralıklarına göre belirtilecek olan karakter kodlaması dahilinde gelişmiş olarak istenilenilen değeri bularak bulduğu değeri geriye döndürür.

		strstr() 		= Belirtilecek olan içerikte, belirtilecek olan değer doğrultusunda arama yaparak, eşleşen değer olması durumunda ilk eşleşen değerin öncesini veya sonrasını bularak geriye döndürür.
		stristr() 		= Belirtilecek olan içerikte, belirtilecek olan değer doğrultusunda herhangi bir değerin büyük harf / küçük harf ayrımı olmaksızın arama yaparak, eşleşen değer olması durumunda ilk eşleşen değerin öncesini veya sonrasını bularak geriye döndürür.

		strchr()		= Belirtilecek olan içerikte, belirtilecek olan değer doğrultusunda arama yaparak, eşleşen değer olması durumunda ilk eşleşen değerin öncesini veya sonrasını bularak geriye döndürür.
		strrchr()		= Belirtilecek olan içerikte, belirtilecek olan değer doğrultusunda arama yaparak, eşleşen değer olması durumunda son eşleşen değerin sonrasını bularak geriye döndürür.
	*/
	
	$Icerik 	= "Icabi Kırgız";
	
	echo $Icerik . "<br><br>";
	
	$Sonuc 		= substr($Icerik, -6); //  sondan 6. karakterden başlayarak sonuna kadar aldı ve geriye döndürdü. (Türkçe karakterler 2 olarak alınır.)
	$mb_Sonuc 	= mb_substr($Icerik, -6); //  sondan 6. karakterden başlayarak sonuna kadar aldı ve geriye döndürdü. (Türkçe karakterler 1 olarak alınır.)
	
	echo "substr(): " . $Sonuc . "<br>";
	echo "mb_substr():" . $mb_Sonuc;
	
	?>
</body>
</html>