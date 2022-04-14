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
			
			hash_hmac_algos() 	= PHP yazılımı içeirisinde anahtarlı olarak HMAC (Hash-based Message Authentication) (karma tabanlı ileti kimlik doğrulama kodu) yöntemi ile kullanılabilecek olan sisteme tanımlı tüm algoritmaların listesini bulur ve bulduğu değerlerden yeni bir dizi oluşturarak, oluşturduğu dizi değerini geriye döndürür.
			hash_hmac() 		= Belirtilecek olan içeriğin HMAC (Hash-based Message Authentication) (karma tabanlı ileti kimlik doğrulama kodu) hash özetini üreterek, ürettiği değeri geriye döndürür.
			hash_hmac_file() 	= Belirtilecek olan dosyanın HMAC (Hash-based Message Authentication) (karma tabanlı ileti kimlik doğrulama kodu) hash özetini üreterek, ürettiği değeri geriye döndürür.
			
		*/
			
	$Degerler 		= hash_hmac_algos();
	
	echo "<pre>";
	print_r($Degerler);
	echo "</pre>";
	
	?>
</body>
</html>