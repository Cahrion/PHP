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
			[x-y] 	= Düzenli ifade dahilinde kontrol edilecek olan içeriğin karakter diziliminde bulunan değerin, belirtilen karakterlerden aralığından herhangi birisiyle eşleşmesi gerektiğini belirtmek için kullanılır.
		*/
	
	$Icerik 	= "Merhabalar Benim Adım Icabi Kırgız";
	
	$Desen		= "/[a-zA-Z]/"; // /[abcdefghijklmnoprstuvyzABCDEFGHIJKLMNOPRSTUVYZ]/
	
	preg_match_all($Desen, $Icerik, $Sonuc);

		echo "Orjinal İçerik: " .$Icerik . "<br>";
		echo "Desen : " . $Desen . "<br><br>";
		echo "<pre>";
		print_r($Sonuc);
		echo "</pre>";
	
	?>
</body>
</html>