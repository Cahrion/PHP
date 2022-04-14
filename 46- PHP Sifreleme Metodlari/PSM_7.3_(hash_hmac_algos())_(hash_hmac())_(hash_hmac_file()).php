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
			
	$Icerik 		= "Icabi Kırgız - IK System";
	$Anahtar 		= "GizliBirDeger";
	
	echo "Orjinal içerik: ". $Icerik . "<br>";
	
	$Uret 			= hash_hmac("md5", $Icerik, $Anahtar);
	echo "md5 algoritması kullanılarak üretilmiş içerik: " . $Uret . "<br>";
	
	$Uret 			= hash_hmac("sha1", $Icerik, $Anahtar);
	echo "sha1 algoritması kullanılarak üretilmiş içerik: " . $Uret . "<br>";
	
	$Uret 			= hash_hmac("snefru256", $Icerik, $Anahtar);
	echo "snefru256 algoritması kullanılarak üretilmiş içerik: " . $Uret . "<br>";
	
	$Uret 			= hash_hmac("ripemd320", $Icerik, $Anahtar);
	echo "ripemd320 algoritması kullanılarak üretilmiş içerik: " . $Uret  . "<br>";
	
	$Uret 			= hash_hmac("sha3-512", $Icerik, $Anahtar);
	echo "ripemd320 algoritması kullanılarak üretilmiş içerik: " . $Uret;
	
	?>
</body>
</html>