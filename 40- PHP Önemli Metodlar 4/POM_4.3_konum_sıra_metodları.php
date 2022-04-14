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
		strpos() 		= Belirtilecek olan içerikte, belirtilecek olan herhangi bir değerin ilk eşleşme sonucundaki konumunu / sırasını bularak bulduğu değeri geriye döndürür.
		mb_strpos() 	= Belirtilecek olan içerikte, belirtilecek olan herhangi bir değerin, belirtilecek olan karakter kodlaması dahilinde gelişmiş olarak ilk eşleşme sonucundaki konumunu / sırasını bularak bulduğu değeri geriye döndürür.
		
		stripos() 		= Belirtilecek olan içerikte, belirtilecek olan herhangi bir değerin, büyük harf / küçük harf ayrımı olmaksızın ilk eşleşme sonucundaki konumunu / sırasını bularak bulduğu değeri geriye döndürür.
		mb_stripos() 	= Belirtilecek olan içerikte, belirtilecek olan herhangi bir değerin, büyük harf / küçük harf ayrımı olmaksızın belirtilecek olan karakter kodlaması dahilinde gelişmiş olarak ilk eşleşme sonucundaki konumunu / sırasını bularak bulduğu değeri geriye döndürür.
		
		
		strrpos() 		= Belirtilecek olan içerikte, belirtilecek olan herhangi bir değerin son eşleşme sonucundaki konumunu / sırasını bularak bulduğu değeri geriye döndürür.
		mb_strrpos() 	= Belirtilecek olan içerikte, belirtilecek olan herhangi bir değerin, belirtilecek olan karakter kodlaması dahilinde gelişmiş olarak son eşleşme sonucundaki konumunu / sırasını bularak bulduğu değeri geriye döndürür.
		
		strripos() 		= Belirtilecek olan içerikte, belirtilecek olan herhangi bir değerin, büyük harf / küçük harf ayrımı olmaksızın son eşleşme sonucundaki konumunu / sırasını bularak bulduğu değeri geriye döndürür.
		mb_strripos() 	= Belirtilecek olan içerikte, belirtilecek olan herhangi bir değerin, büyük harf / küçük harf ayrımı olmaksızın belirtilecek olan karakter kodlaması dahilinde gelişmiş olarak son eşleşme sonucundaki konumunu / sırasını bularak bulduğu değeri geriye döndürür.
		
	*/
	
	$Icerik 	= "PHP tüm web tabanlı programlama dilleri arasında en yaygın olarak kullanılan bir dildir. PHP yazılım dili çok üstün özelliklere sahiptir. Icabi Kırgız bir PHP yazılımcısıdır.";
	
	echo $Icerik . "<br><br>";
	
	$Sonuc 		= stripos($Icerik, "p");  	// Türkçe karakterler 2 karakter olarak sayılır.
	$SonucTR 	= mb_stripos($Icerik, "p"); // Türkçe karakterler 1 karakter olarak sayılır.
	// Büyük küçük harflere takılmazlar ilk buldukları değeri bulurlar.
	
	echo "stripos(): " . $Sonuc . "<br>"; 
	echo "mb_stripos(): " . $SonucTR; 
	
	?>
</body>
</html>