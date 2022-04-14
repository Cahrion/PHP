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
		unset() 	= Belirtilecek olan değişkenin, dizi anahtarı ve elemanını veya session'ı (oturumu) yok etmek için kullanılır.
	*/
	
	$_SESSION["Kullanici"] 	= "Icabi";
	$_SESSION["Email"] 		= "icabikrz@gmail.com";
	
	echo $_SESSION["Kullanici"] . "<br>";
	echo $_SESSION["Email"] . "<br>";
	
	unset($_SESSION["Kullanici"]); // SESSION verisinden birini silmek için de kullanılır. (En çok kullanılan !)
	
	echo $_SESSION["Kullanici"] . "<br>";
	echo $_SESSION["Email"];

	?>
</body>
</html>