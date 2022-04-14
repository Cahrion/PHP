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
	$GelenAd 		= $_COOKIE["KullaniciAd"];
	$GelenSoyad 	= $_COOKIE["KullaniciSoyad"];
		
		echo "Merhaba " . $GelenAd . " " . $GelenSoyad . " nasılsın?";
	
	?>
	<br><br><br><br>
	<a href="PCS_3.0_Formlarla_Cookie.php">Forma Geri Dön</a>
</body>
</html>