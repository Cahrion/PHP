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
		levenshtein() 	= Belirtilecek olan iki değer arasındaki levenshtein mesefaseni bularak bulduğu değeri geriye döndürür.
			LEVENSHTEİN mesafesi = Bir değeri diğer bir değere dönüştürebilmek için değiştirilecek veya eklenecek veya silinecek karakter sayısı anlamına gelir.
		similar_text() 	= Belirtilecek olan iki değer arasındaki benzerliği yüzdesel olarak bularak, bulduğu değeri geriye döndürür.
	*/
	
	
	$GelenDeger		= "Icabi Krıgzı";
	$GercekDeger	= "Icabi Kırgız";
	echo "Gelen Değer: " . $GelenDeger . "<br>";
	echo "Gerçek Değer: " . $GercekDeger . "<br><br>";
	
	$Benzerlik 		= similar_text($GelenDeger, $GercekDeger);
	
	echo "Benzer Karakter sayısı: " . $Benzerlikoran;
		 
	
	?>
</body>
</html>