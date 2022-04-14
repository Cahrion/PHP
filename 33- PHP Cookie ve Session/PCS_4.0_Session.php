<?php
session_start();
?>
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
		// php.ini dosyasındaki (session.gc_maxlifetime=1440) şeklindeki yazı bir kişini (AFK) bilgisayarın başında ne kadar süre kalmadığında uygulamanın session'u sileceği süreyi belirler.
	
		/*
		session_start()		=	session (oturum) başlatmak veya session'ları (oturumları) takip etmek için kullanılır. (Sitenin en başında olur.)
		session_destroy() 	=	Daha önceden oluşturulmuş olan session'ları (oturumları) silmek için kullanılır.
		*/
	
	$_SESSION["KullaniciAdi"] = "Icabi";
	$_SESSION["KullaniciSoyAdi"] = "Kırgız";
	$_SESSION["KullaniciEmailAdresi"] = "icabikrz@gmail.com";
	$_SESSION["KullaniciTelefon"] = "05486549784";
	$_SESSION["KullaniciSehri"] = "İstanbul";
	
	
	
	?>
</body>
</html>