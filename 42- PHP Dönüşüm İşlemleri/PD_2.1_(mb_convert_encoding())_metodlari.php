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
		mb_convert_encoding()	= Belirtilecek olan içeriği, belirtilecek olan karakter kodlaması dahilinde dönüştürerek, karakter kodlaması dönüştürülmüş olan değeri geriye döndürür.
			auto 	= ASCII, HIS, UTF-8, EUC-JP, SJIS kodlaması sırası kullanılır.
		mb_detect_encoding()	= Belirtilecek olan içeriğin karakter kodlamasını algılayarak, bulduğu değeri geriye döndürür.
		mb_list_encodings()		= PHP yazılımı içerisinde kullanılabilecek olan sisteme tanımlı tüm karakter kodlaması listesini bulur ve bulduğu değerlerden yeni bir dizi oluşturarak oluşturduğu dizi değerini geriye döndürür.
	*/
	$Icerik		= "Icabi Kırgız - IK system - A'dan Z'ye PHP görsel eğitim seti";
	echo $Icerik . "<br>";
	$Islem		= mb_convert_encoding($Icerik, "ISO-8859-1", "UTF-8"); // Bilmediği anlamlandırmadığı işaretlere farklı değerler atar.
	echo $Islem;
	?>
</body>
</html>