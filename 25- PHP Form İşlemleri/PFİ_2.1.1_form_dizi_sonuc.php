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

	$GelenAdSoyadDegeri 	= 	$_GET["AdSoyad"];
	$GelenHobiler		 	= 	$_GET["Hobiler"];
	
		echo "Adınız Soyadınız: " . $GelenAdSoyadDegeri . "<br>";
		echo "Hobileriniz: ";
	
	foreach($GelenHobiler as $Bilgiler){
		echo $Bilgiler . " ";
	}
			
	?>
</body>
</html>