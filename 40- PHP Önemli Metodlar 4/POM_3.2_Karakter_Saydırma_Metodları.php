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
		
	$Icerik 		= "PHP Tüm Web Tabanlı Diller Arasında En Yaygın Olarak Kullanılanıdır. PHP Yazılım Dili çok Gelişmiş Özelliklere Sahiptir. Icabi Kırgız Bir PHP Yazılımcısıdır."; 
	
	echo $Icerik . "<br>";
	
	$AranacakDeger	= "PHP";
	$Sonuc	 		= substr_count($Icerik, $AranacakDeger); 
	
	echo $AranacakDeger . " Değeri İçerikte " . $Sonuc . " Defa Kullanılmıştır."; // Tekrarlanan içeriklerde hata çıkabilir.
	?>
</body>
</html>