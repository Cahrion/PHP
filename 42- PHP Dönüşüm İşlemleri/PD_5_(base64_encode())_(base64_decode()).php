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
		base64_encode()	= Belirtilecek olan içeriğin base64 (8 Bit'lik verilerin 64'Bit'lik verilere çevrilmesi) algoritması kodlamasını bularak, bulduğu değeri geriye döndürür.
		base64_decode()	= Belirtilecek olan base64 (8 Bit'lik verilerin 64'Bit'lik verilere çevrilmesi) algoritması kodlanmış olan içeriği geri çözerek, çözdüğü değeri geriye döndürür.
	*/
	
	$Icerik 	= "Extra Eğitim - Icabi Kırgız - A'dan Z'ye PHP Görsel Eğitim Seti Notları";
	echo $Icerik . "<br>";
	$Islem 		= base64_encode($Icerik);
	echo $Islem;
	$Sonuc 		= base64_decode($Islem);
	echo $Sonuc;
	?>
</body>
</html>