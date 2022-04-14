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
	
	$Icerik 		= "+905352255144"; // 05352255144 , 5352255144 bu verilerde aynı işlem çıkar.
	$SonOnHane 		= substr($Icerik, -10);
	$Telefon 		= "0" . $SonOnHane;
	
	$AlanKodu 		= substr($Telefon, 0, 4); // 0'dan başla 4 karakter al.
	$BirinciBlok 	= substr($Telefon, 4, 3); // 4'dan başla 3 karakter al.
	$IkinciBlok 	= substr($Telefon, 7, 2); // 7'dan başla 2 karakter al.
	$SonBlok 		= substr($Telefon, 9, 2); // 9'dan başla 2 karakter al.
	
	echo "( " . $AlanKodu . " ) " . $BirinciBlok . " " . $IkinciBlok . " " . $SonBlok;
	
	?>
</body>
</html>