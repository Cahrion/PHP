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
			()	=	Düzenli ifadelerde grup tanımlamak için kullanılır.
			(x|y) = Düzenli ifade dahilinde kontrol edilecek olan içeriğin karakter diziliminde bulunan değerin "x" yada "y" karakterlerinden herhangi birisiyle eşleşmesi gerektiğini belirtmek için kullanılır.
		*/
	
	$Icerik 	= "Benim Adım Icabi Kırgız'dir ve Ben Bir PHP Yazılımcısıyım.";
	
	$Desen		= "/(Icabi)/"; // Grup olarak buldu ve bir de ayrı olarak buldu 
	
	preg_match_all($Desen, $Icerik, $Sonuc);

		echo "Orjinal İçerik: " .$Icerik . "<br>";
		echo "Desen : " . $Desen . "<br><br>";
		echo "<pre>";
		print_r($Sonuc);
		echo "</pre>";
	
	?>
</body>
</html>