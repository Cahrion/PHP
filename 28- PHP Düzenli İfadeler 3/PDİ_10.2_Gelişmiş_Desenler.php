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
	// Telefon doğrulama aracı
	
	$Icerik 	= "0535 225 51 44";
	$Desen		= "/^0?\s?[0-9]{3}\s?[0-9]{3}\s?[0-9]{2}\s?[0-9]{2}$/"; 
	
	$Sonuc 		= preg_match($Desen, $Icerik);

		echo $Icerik . "<br>";
		
	if($Sonuc == 1){
		echo "Girilen Dğeer Bir Telefon Numarasıdır.";
	}else{
		echo "Girilen Dğeer Bir Telefon Numarası değildir.";
	}
	
	?>
</body>
</html>