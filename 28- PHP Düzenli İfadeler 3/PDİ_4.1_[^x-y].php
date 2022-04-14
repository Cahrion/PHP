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
			[^x-y] 	= Düzenli ifade dahilinde kontrol edilecek olan içeriğin karakter diziliminde bulunan değerin, belirtilen karakterler aralığı dışındaki karakterlerden herhangi birisiyle eşleşmesi gerektiğini belirtmek için kullanılır.
		*/
	
	$Icerik 	= "Merhabalar Benim Adım Icabi Kırgız. Yaşım 19 ve 2002 doğumluyum";
	$Desen		= "/[^0-9]/"; # /[^0123456789]/
	// Koşeli parantez içindekiler olmayanları ele alır. )
	
	preg_match_all($Desen, $Icerik, $Sonuc);

		echo "Orjinal İçerik: " .$Icerik . "<br>";
		echo "Desen : " . $Desen . "<br><br>";
		echo "<pre>";
		print_r($Sonuc);
		echo "</pre>";
	
	?>
</body>
</html>