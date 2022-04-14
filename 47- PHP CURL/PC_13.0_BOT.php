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
	$ch 	= curl_init();
	curl_setopt($ch, CURLOPT_URL, "https://www.otoeksper.com.tr/ikinci-el");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$Sonuc 	= curl_exec($ch);
	curl_close($ch);
	preg_match_all('/src="(.*?)" /', $Sonuc, $Degerler);
	
	$TemizDizi 	= array_unique($Degerler[1]);
	
	foreach($TemizDizi as $Icerik){
		$UzantiBul 	= substr($Icerik, -4);
		if(($UzantiBul == "jpeg") or ($UzantiBul == ".jpg") or ($UzantiBul == ".png") or ($UzantiBul == ".bmp") or ($UzantiBul == ".gif")){
			echo "<img src=" . $Icerik . ">";
		}
	}
	?>
</body>
</html>