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
	$YasamSuresi 		= time() + (60 * 5); 
	
		
	/*
		Burası normal cookie oluşturma yapısı.
	
	setcookie("KullaniciAdi", "Icabi", $YasamSuresi); 
	setcookie("KullaniciSoyadi", "Kırgız", $YasamSuresi); 
	setcookie("KullanıcıEmailAdresi", "icabikrz@gmail.com", $YasamSuresi);
	setcookie("KullaniciTelefon", "0535 225 28 44", $YasamSuresi);
	
	setcookie("SepetID", 5, $YasamSuresi); 
	setcookie("SepetTutari", 1250, $YasamSuresi); 
	setcookie("SepetTaksitSayisi", 6, $YasamSuresi);
	setcookie("SepetOdemeTuru", "Kredi Kartı", $YasamSuresi);
	*/
	
	 // Burası Dizi kullanarak görüşü daha kolaylaştırma yöntemi
	setcookie("Kullanici[Adi]", "Icabi", $YasamSuresi); 
	setcookie("Kullanici[Soyadi]", "Kırgız", $YasamSuresi); 
	setcookie("Kullanici[EmailAdresi]", "icabikrz@gmail.com", $YasamSuresi);
	setcookie("Kullanici[Telefon]", "0535 225 28 44", $YasamSuresi);
	
	setcookie("Sepet[ID]", 5, $YasamSuresi); 
	setcookie("Sepet[Tutari]", 1250, $YasamSuresi); 
	setcookie("Sepet[TaksitSayisi]", 6, $YasamSuresi);
	setcookie("Sepet[OdemeTuru]", "Kredi Kartı", $YasamSuresi);
	
	echo "<pre>";
	print_r($_COOKIE);
	echo "</pre>";
	
	echo "<pre>";
	print_r($_COOKIE["Kullanici"]);
	echo "</pre>";
	
	?>
</body>
</html>