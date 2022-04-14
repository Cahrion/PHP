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
	// Telefon numarası bulma aracı
	
	$Icerik 	= "Merhabalar Benim Adım Icabi Kırgız Bana Merhabalar Benim Adım Icabi Kırgız Bana Merhabalar Benim Adım Icabi Kırgız Bana Merhabalar Benim Adım Icabi Kırgız Bana Merhabalar Benim Adım Icabi Kırgız Bana Merhabalar Benim Adım Icabi Kırgız Bana Merhabalar Benim Adım Icabi Kırgız Bana Merhabalar Benim Adım Icabi Kırgız Bana Merhabalar Benim Adım Icabi Kırgız Bana Merhabalar Benim Adım Icabi Kırgız Bana Merhabalar Benim Adım Icabi Kırgız Bana Merhabalar Benim Adım Icabi Kırgız Bana Merhabalar Benim Adım Icabi Kırgız Bana Merhabalar Benim Adım Icabi Kırgız Bana Merhabalar Benim Adım Icabi Kırgız Bana Merhabalar Benim Adım Icabi Kırgız Bana Merhabalar Benim Adım Icabi Kırgız Bana Merhabalar Benim Adım Icabi Kırgız Bana Merhabalar Benim Adım Icabi Kırgız Bana Merhabalar Benim Adım Icabi Kırgız Bana Merhabalar Benim Adım Icabi Kırgız Bana Merhabalar Benim Adım Icabi Kırgız Bana 0546 546 45 59 Numaralı Hattımdan Ulaşabilirsiniz. Numaralı Hattımdan Ulaşabilirsiniz. Numaralı Hattımdan Ulaşabilirsiniz. Numaralı Hattımdan Ulaşabilirsiniz. Numaralı Hattımdan Ulaşabilirsiniz. Numaralı Hattımdan Ulaşabilirsiniz. Numaralı Hattımdan Ulaşabilirsiniz. Numaralı Hattımdan Ulaşabilirsiniz. Numaralı Hattımdan Ulaşabilirsiniz. Numaralı Hattımdan Ulaşabilirsiniz. Numaralı Hattımdan Ulaşabilirsiniz. Numaralı Hattımdan Ulaşabilirsiniz. Numaralı Hattımdan Ulaşabilirsiniz. Numaralı Hattımdan Ulaşabilirsiniz. Numaralı Hattımdan Ulaşabilirsiniz. Numaralı Hattımdan Ulaşabilirsiniz. Numaralı Hattımdan Ulaşabilirsiniz. Numaralı05648957462 Hattımdan Ulaşabilirsiniz. Numaralı Hattımdan Ulaşabilirsiniz. Numaralı Hattımdan Ulaşabilirsiniz. Numaralı Hattımdan Ulaşabilirsiniz. Numaralı Hattımdan Ulaşabilirsiniz. Numaralı Hattımdan Ulaşabilirsiniz. Numaralı Hattımdan Ulaşabilirsiniz. Numaralı Hattımdan Ulaşabilirsiniz. Numaralı Hattımdan Ulaşabilirsiniz. Numaralı Hattımdan Ulaşabilirsiniz. Numaralı Hattımdan Ulaşabilirsiniz. Numaralı Hattımdan Ulaşabilirsiniz. Numaralı Hattımdan Ulaşabilirsiniz. Numaralı Hattımdan Ulaşabilirsiniz. Numaralı Hattımdan Ulaşabilirsiniz. Numaralı Hattımdan Ulaşabilirsiniz. Numaralı Hattımdan Ulaşabilirsiniz. Numaralı Hattımdan Ulaşabilirsiniz. Numaralı Hattımdan Ulaşabilirsiniz. Numaralı Hattımdan Ulaşabilirsiniz. Numaralı Hattımdan Ulaşabilirsiniz. Numaralı Hattımdan Ulaşabilirsiniz. Numaralı Hattımdan Ulaşabilirsiniz. Numaralı Hattımdan Ulaşabilirsiniz. Numaralı Hattımdan Ulaşabilirsiniz.534875 94 61Numaralı Hattımdan Ulaşabilirsiniz. Numaralı Hattımdan Ulaşabilirsiniz. Numaralı Hattımdan Ulaşabilirsiniz. Numaralı Hattımdan Ulaşabilirsiniz. Numaralı Hattımdan Ulaşabilirsiniz. Numaralı Hattımdan Ulaşabilirsiniz. Numaralı Hattımdan Ulaşabilirsiniz. Numaralı Hattımdan Ulaşabilirsiniz. Numaralı Hattımdan Ulaşabilirsiniz. Numaralı Hattımdan Ulaşabilirsiniz. Numaralı Hattımdan Ulaşabilirsiniz. Numaralı Hattımdan Ulaşabilirsiniz. Numaralı Hattımdan Ulaşabilirsiniz. Numaralı Hattımdan Ulaşabilirsiniz. Numaralı Hattımdan Ulaşabilirsiniz. Numaralı Hattımdan Ulaşabilirsiniz. Numaralı Hattımdan Ulaşabilirsiniz. Numaralı Hattımdan Ulaşabilirsiniz.";
	$Desen		= "/0?\s?[0-9]{3}\s?[0-9]{3}\s?[0-9]{2}\s?[0-9]{2}/"; 
	
	preg_match_all($Desen, $Icerik, $Sonuc);

		echo $Icerik . "<br>";
		echo "<pre>";
		print_r($Sonuc);
		echo "</pre>";
	
	?>
</body>
</html>