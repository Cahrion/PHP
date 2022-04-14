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
	// Silme yöntemi
	$YasamSuresi 		= time() + 1; // 1 sn hak tanınır ve o sürede otomatik kendi siler.
	setcookie("KullaniciAdi", "Icabi", $YasamSuresi); 
	setcookie("KullaniciSoyadi", "Kırgız", $YasamSuresi); 
	setcookie("EgitimAdi", "A'dan Z'ye PHP Eğitim Seti", $YasamSuresi);
	
	echo "<pre>";
	print_r($_COOKIE);
	echo "</pre>";
	
	?>
</body>
</html>