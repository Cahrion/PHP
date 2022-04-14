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
	function SEO($Urun, $ID){
		$UrunuIsimlendir 	= $Urun . " " . $ID;
		$Icerik 			= trim($UrunuIsimlendir);
		$Degisecekler 		= array("ç", "Ç", "ğ", "Ğ", "ı", "İ", "ö", "Ö", "ş", "Ş", "ü", "Ü");
		$Degisenler	 		= array("c", "C", "g", "G", "i", "I", "o", "O", "s", "S", "u", "U");
		$Icerik 			= str_replace($Degisecekler, $Degisenler, $Icerik);
		$Icerik				= mb_strtolower($Icerik, "UTF-8");
		$Icerik				= preg_replace("/[^a-z0-9]/", "-", $Icerik);
		$Icerik				= preg_replace("/-+/", "-", $Icerik);
		$Icerik 			= trim($Icerik, "-");
		return $Icerik;
	}
	
	
	$UrunAdi 	= "Sony KD-55XE7005 139cm 4K Ultra H$ D Dahili Uydu Alıcılı$ Smart Led TV +  - ";
	$UrunIDsi 	= "388858701";
	
	echo "Orjinal Metin: <br>";
	echo $UrunAdi . $UrunIDsi . "<br>";
	
	echo "SEF Link / PermaLink yapısı: <br>";
	echo SEO($UrunAdi, $UrunIDsi);
	
	?>
</body>
</html>