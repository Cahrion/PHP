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
	
		TÜRKÇE KARAKTERLER
		-- >	ığüşöçİĞÜŞÖÇ
		
		*/
	
	
	$Icerik 	= "Merhabalar Benim Adım Icabi Kırgız. Ben 2002 Doğumluyum";
	
	$Desen		= "/[a-zA-Z0-9ığüşöçİĞÜŞÖÇ'\.]/u"; // /[abcdefghijklmnoprstuvyzABCDEFGHIJKLMNOPRSTUVYZ0123456789ığüşöçİĞÜŞÖÇ'\.]/u
	
	preg_match_all($Desen, $Icerik, $Sonuc);

		echo "Orjinal İçerik: " .$Icerik . "<br>";
		echo "Desen : " . $Desen . "<br><br>";
		echo "<pre>";
		print_r($Sonuc);
		echo "</pre>";
	
	?>
</body>
</html>