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

		$GelenAd 			= $_GET["Ad"];
		$GelenSoyad			= $_GET["Soyad"];
		$GelenEmailAdresi	= $_GET["EmailAdresi"];
		$GelenTelefon		= $_GET["Telefon"];
		
			echo "Adınız :" . $GelenAd . "<br>";
			echo "Soyadınız: " . $GelenSoyad . "<br>";
			echo "E-mail Adresiniz: " . $GelenEmailAdresi . "<br>";
			echo "Telefon Numaranız: " . $GelenTelefon;
	
		$GelenTumDegerler 	= $_GET;
	
			echo "<pre>";
			print_r($GelenTumDegerler);
			echo "</pre>";
	
		foreach($GelenTumDegerler as $Anahtar => $Degerler){
			echo $Anahtar . " = " . $Degerler . "<br>";
		}
	
	?>
</body>
</html>