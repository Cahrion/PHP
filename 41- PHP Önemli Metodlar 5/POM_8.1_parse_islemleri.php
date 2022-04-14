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
		parse_url() 	= Belirtilecek olan URL değerini parçalarına ayrıştırarak, işlem sonucunda bulduğu değerlerden yeni bir dizi oluşturarak oluşturduğu değeri geriye döndürür.
			PHP_URL_SCHEME		= Belirtilecek olan URL adresinin protokol bilgisi değerini elde etmek için kullanılır.
			PHP_URL_HOST		= Belirtilecek olan URL adresinin domain (alan adı) bilgisi değerini elde etmek için kullanılır.
			PHP_URL_PORT		= Belirtilecek olan URL adresinin port bilgisi değerini elde etmek için kullanılır.
			PHP_URL_USER		= Belirtilecek olan URL adresinin kullanıcı adı bilgisi değerini elde etmek için kullanılır.
			PHP_URL_PASS		= Belirtilecek olan URL adresinin kullanıcı şifresi değerini elde etmek için kullanılır.
			PHP_URL_PATH		= Belirtilecek olan URL adresinin path (yol) bilgisi değerini elde etmek için kullanılır.
			PHP_URL_QUERY		= Belirtilecek olan URL adresinin query (sorgu) bilgisi değerini elde etmek için kullanılır.
			PHP_URL_FRAGMENT	= Belirtilecek olan URL adresinin # (diyez) (örgü iminden) sonrası değerini elde etmek için kullanılır.
		
		parse_str() 	= Belirtilecek olan URL değeri içerisindeki değişken değerlerini, kendi içerisinde belirtilecek olan yeni bir değişkene çözümleyerek çözümlediği değerlerden yeni bir dizi oluşturarak, oluşturduğu dizi değerini geriye döndürür.
		mb_parse_str() 	= Belirtilecek olan URL değeri içerisindeki değişken değerlerini, kendi içerisinde belirtilecek olan yeni bir değişkene çözümleyerek çözümlediği değerlerden yeni bir dizi oluşturarak, oluşturduğu dizi değerini geriye döndürür. Ek olarak eğer işlem sonucunda geriye boolean (mantıksal) veri türünde değer döndürür.
	*/

	$URLAdresi 	= "https://www.extraegitim.com:80"; // port verisi girildi.
	
	$Sonuc		= parse_url($URLAdresi);
	
	echo "<pre>";
	print_r($Sonuc);
	echo "</pre>";
	
	
	?>
</body>
</html>