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
	$GelenAd 		= $_POST["Ad"];
	$GelenSoyad 	= $_POST["Soyad"];
	$YasamSuresi	= time() + (60 * 60 * 24);

	setcookie("KullaniciAd", $GelenAd, $YasamSuresi);
	setcookie("KullaniciSoyad", $GelenSoyad, $YasamSuresi);
	?>
	
	<a href="PCS_3.2_Formlarla_Cookie_yazdir.php">Mesajı Göster</a>
</body>
</html>