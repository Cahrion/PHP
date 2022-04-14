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
		urlencode()		= Belirtilecek olan içeriğin URL encoding karakter kodlamasını bularaki bulduğu değeri geriye döndürür.
		urldecode()		= Belirtilecek olan ve URL encoding karakter kodlaması kullanılarak kodlanmış olan içeriğin geri çözerek çözdüğü değeri geriye döndürür.
		rawurlencode()	= Belirtilecek olan içeriğin URL encoding karakter kodlamasını bularaki bulduğu değeri geriye döndürür.
		rawurldecode()	= Belirtilecek olan ve URL encoding karakter kodlaması kullanılarak kodlanmış olan içeriğin geri çözerek çözdüğü değeri geriye döndürür.
	*/
	
	$Deger		= "https://www.extraegitim.com/ana sayfa.php?ID=144&Adi=Icabi Kırgız";
	echo $Deger . "<br><br>";
	
	$Islem		= rawurlencode($Deger); // Boşlukları => %20 şeklinde dönüştürür urlencode() yapısından tek farkı bu
	echo $Islem . "<br><br>";
	
	$GeriDondur	= rawurldecode($Islem);
	echo $GeriDondur;
	
	?>
</body>
</html>