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
			setcookie() 	= Belirtilecek olan değerler doğrultusunda cookie (çerez) oluşturmak veya silmek için kullanılır.
			PARAMETRELER	=
				1. Parametre : Çerez Adı,
				2. Parametre : Çerez Değeri,
				3. Parametre : Çerez Yaşam Süresi,
		*/
	
	echo "<pre>";
	print_r($_COOKIE); // Bir cookie oluşursa bir daha yazmaya gerek duyulmaz orada kalır.
	echo "</pre>";
	
	?>
</body>
</html>