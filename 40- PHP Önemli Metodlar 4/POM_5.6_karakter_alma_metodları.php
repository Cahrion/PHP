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
	
	$Icerik 	= "Icabi Kırgız | 19 yaşında bir yazılımcıdır.";
	
	echo $Icerik . "<br><br>";
	
	$SonucSonrasi 	= stristr($Icerik, "A"); // Seçilen karakterin sonrasındaki veriler. (Büyük küçük harfe bağlı kalmaz)
	$SonucOncesi 	= stristr($Icerik, "A", true); // Seçilen karakterin öncesindeki veriler. (Büyük küçük harfe bağlı kalmaz)
	
	echo "Karakterden Sonrası: " . $SonucSonrasi . "<br>"; // karakteride ele alır.
	echo "Karakterden Öncesi: " . $SonucOncesi;
	
	?>
</body>
</html>