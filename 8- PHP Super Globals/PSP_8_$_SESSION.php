<!doctype html>
<?php
	session_start();
?>
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
		$_SESSION =	Herhangi bir kullanıcı için session (oturum) tanımlama imkanı tanır. Ayrıca daha önceden tanımlanmış olan session (oturum) verilerine de ulaşılabilme imkanı tanır.
	*/ 
	
	//$_SESSION["isim"] = "Icabi Kırgız";
	//$_SESSION["hotmail"] = "icabikrz@gmail.com";

	echo "isim Adıyla Tanımlı SESSION Değeriniz: " . $_SESSION["isim"] . "<br>";
	echo "hotmail Adıyla Tanımlı SESSION Değeriniz: " . $_SESSION["hotmail"] . "<br>";
	
	
	
?>
</body>
</html>