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
	curl_setopt($ch, CURLOPT_URL, "https://www.sahibinden.com/ferrari?pagingSize=50&sorting=yil-nu_desc");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$Sonuc 	= curl_exec($ch);
	curl_close($ch);
	preg_match_all('/<img src="(.*?)"\/> /', $Sonuc, $Degerler);
	preg_match_all('/<a href="(.*?)"\/detay"> /', $Sonuc, $DegerlerLink);
	
	$Sira 	= 0;
	foreach($Degerler[1] as $Icerik){
		$Parcala  = explode("\"", $Icerik);
		
		$DegerlerLink[1][$Sira];
		
		if(isset($Parcala[4])){
			 echo "<a href='https://www.sahibinden.com" . $DegerlerLink[1][$Sira] . "/detay' target='_blank'>" . $Parcala[4] . "</a> <br>";
			 echo "<a href='" . $DegerlerLink[1][$Sira] . "/detay' target='_blank'> " . "<img src='" .$Parcala[0] . "'>" . "</a> <br><br>";
		}
		$Sira++;
		
	}
	
	?>
</body>
</html>