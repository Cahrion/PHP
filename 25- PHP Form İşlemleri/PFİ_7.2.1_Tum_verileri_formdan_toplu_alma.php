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

		$GelenAd 			= $_POST["Ad"];
		$GelenSoyad			= $_POST["Soyad"];
		$GelenEmailAdresi	= $_POST["EmailAdresi"];
		$GelenTelefon		= $_POST["Telefon"];
		$GelenDosya			= $_FILES["Dosya"];
		
			echo "Adınız :" . $GelenAd . "<br>";
			echo "Soyadınız: " . $GelenSoyad . "<br>";
			echo "E-mail Adresiniz: " . $GelenEmailAdresi . "<br>";
			echo "Telefon Numaranız: " . $GelenTelefon;
	
			echo "<pre>";
			print_r($GelenDosya);
			echo "</pre>";
	
		$GelenTumDegerler 	= $_POST;
	
			echo "<pre>";
			print_r($GelenTumDegerler);
			echo "</pre>";
	
		foreach($GelenTumDegerler as $Anahtar => $Degerler){
			echo $Anahtar . " = " . $Degerler . "<br>";
		}
	
	?>
</body>
</html>