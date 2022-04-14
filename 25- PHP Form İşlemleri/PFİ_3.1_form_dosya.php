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

		$GelenDosya 		= $_FILES["Dosya"];
		$DosyaninAdi 		= $GelenDosya["name"];
		$DosyaninTuru 		= $GelenDosya["type"];
		$DosyaninTempAdi 	= $GelenDosya["tmp_name"];
		$DosyaninHataDurumu = $GelenDosya["error"];
		$DosyaninBoyutu 	= $GelenDosya["size"];
	
	
		$Yol				= "Dokumanlar/";
	
		move_uploaded_file($DosyaninTempAdi, $Yol.$DosyaninAdi);
	
	?>
</body>
</html>