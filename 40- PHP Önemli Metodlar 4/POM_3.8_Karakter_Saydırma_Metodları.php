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
		strlen()			= Belirtilecek olan içeriğin karakter sayısını bularak, bulduğu değeri geriye döndürür.
		mb_strlen()			= Belirtilecek olan içeriğin, belirtilecek olan karakter kodlaması dahilinde gelişmiş karakter sayısını bularak, bulduğu değeri geriye döndürür.
		substr_count()		= Belirtilecek olan herhangi bir değerin, belirtilecek olan içerikte kaç tane olduğunu bularak bulduğu değeri geriye döndürür.
		mb_substr_count()	= Belirtilecek olan herhangi bir değerin, belirtilecek olan içerikte, belirtilecek olan karakter kodlaması dahilinde gelişmiş olarak içerikte kaç tane olduğunu bularak bulduğu değeri geriye döndürür.
		str_word_count()	= Belirtilecek olan içeriğin kelime sayısını bularak, bulduğu değeri geriye döndürür.
	*/
		
	$Icerik 		= "Icabi Kırgız - IK System - A'dan Z'ye PHP Görsel Ders Notları"; 
	
	echo $Icerik . "<br>";
	
	$Islem	 		= str_word_count($Icerik, 2); // 2. Parametreye "2" değeri girilirse indis değerlerini anahtar yapar.
	
	echo "<pre>";
	print_r($Islem);
	echo "</pre>";
	?>
</body>
</html>