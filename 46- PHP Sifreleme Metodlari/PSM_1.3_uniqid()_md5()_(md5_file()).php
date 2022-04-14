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
			uniqid() 	= Mikrosaniye cinsinden geçerli zamana dayalı olarak belirtilen önek ile benzersiz / eşsiz bir değer üreterek ürettiği değeri geriye döndürür.
			md5() 		= Belirtilecek olan içeriğin md5 özetini hesaplayıp bularak, bulduğu değeri geriye döndürür.
			md5_file() 	= Belirtilecek olan dosyanın md5 özetini hesaplayıp bularak, bulduğu değeri geriye döndürür.
		*/
			
	$Essiz 		= md5(uniqid()); // Benzersiz kod
	echo $Essiz . "<br>";
	$Essiz 		= md5(uniqid(mt_rand())); // Ileri seviye benzersiz kod
	echo $Essiz . "<br>";
	$Essiz 		= md5(uniqid(mt_rand(), true)); // Çok ileri seviye benzersiz kod
	echo $Essiz;
	
	?>
</body>
</html>