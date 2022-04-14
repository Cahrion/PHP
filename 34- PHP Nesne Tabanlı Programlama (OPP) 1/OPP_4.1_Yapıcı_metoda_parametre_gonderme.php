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
	
	class Deney{
		public function __construct($HostBilgisi="localhost", $VeritabaniKullaniciAdi="Icabi-Kirgiz", $VeritabaniKullaniciSifresi="Icabi48951", $VeritabaniAdi="Eticaret"){ 
			$Metin 	= "Gelen Host Bilgisi: " . $HostBilgisi . "<br>" . "Gelen Veritabanı Kullanıcı Adı Bilgisi: " . $VeritabaniKullaniciAdi . "<br>" . "Gelen Veritanı Kullanıcı Şifre Bilgisi: " . $VeritabaniKullaniciSifresi . "<br>" . "Gelen Veritanı Adı Bilgisi: " . $VeritabaniAdi;
			echo $Metin;
		} 
	}
	
	$Islem 		= new Deney; // Tanımlı parametre şeklinde de kullanılabilir.
	
	?>
</body>
</html>