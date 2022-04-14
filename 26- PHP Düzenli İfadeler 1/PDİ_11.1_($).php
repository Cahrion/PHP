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
			^	 	=	Düzenli ifade dahilinde kontrol edilecek olan içerigin,karakter diziliminin başlangıcı ile düzenli ifade arasında eşleşme aramak için kullanılır.
		*/
	
	$Icerik 		= "Merhaba Benim Adım Icabi Kırgız,Ben Bir PHP Ögrencisiyim.Beni Facebook üzerinden Icabi Kırgız şeklinde arıyarak bulabilirsiniz.";

	$Desen		= "/siniz.$/";
	
	$Sonuc		= preg_match($Desen, $Icerik);

		echo "Orjinal İçerik: <br>" .$Icerik . "<br>";
		echo "Desen : " . $Desen . "<br><br>";
	
	// Bu kullanım genelde en fazla kullanılır.
	if($Sonuc == 1){
		echo "Düzenli ifade dahilinde aranılan değer içeriğin sonunda mevcuttur.";
	}else{
		echo "Düzenli ifade dahilinde aranılan değer içeriğin sonunda mevcuttur.";
	}
	?>
</body>
</html>