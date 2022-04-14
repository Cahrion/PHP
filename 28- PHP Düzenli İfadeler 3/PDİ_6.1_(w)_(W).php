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
			\w 	= Düzenli ifade dahilinde kontrol edilecek olan içeriğin karakter diziliminde bulunan değerin, harf, rakam veya bir alt çizgi (_) karakterlerinden herhangi birisiyle eşleşmesi gerektiğini belirtmek için kullanılır.	
			\W 	= Düzenli ifade dahilinde kontrol edilecek olan içeriğin karakter diziliminde bulunan değerin, harf, rakam veya bir alt çizgi (_) karakterlerinin dışındaki karakterlerin herhangi birisiyle eşleşmesi gerektiğini belirtmek için kullanılır.
		*/
	
	$Icerik 	= "Merhabalar Benim Adım Icabi Kırgız. Yaşım 19 ve 2002 doğumluyum. 1 + 3 * 5 işleminin sonuc 16'dır. _ (alt çizgi)";
	$Desen		= "/\W/u"; # harf, rakam veya alt çizgi karakterlerinin dışındaki karakterleri gösterir.
	
	preg_match_all($Desen, $Icerik, $Sonuc);

		echo "Orjinal İçerik: " .$Icerik . "<br>";
		echo "Desen : " . $Desen . "<br><br>";
		echo "<pre>";
		print_r($Sonuc);
		echo "</pre>";
	
	?>
</body>
</html>