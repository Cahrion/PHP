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
			\ 	= Düzenli ifadelerde ardından gelecek olan karakterin özel bir karakter olmadığını belirtmek için kullnılır.
		*/
	
	$Icerik 	= "11 + 111 işleminin sonucu 122'dir";
	
	$Desen		= "/\+/"; // Sıradan bir karakter yapıyor artı (+) değerini
	
	preg_match_all($Desen, $Icerik, $Sonuc);

		echo "Orjinal İçerik: " .$Icerik . "<br>";
		echo "Desen : " . $Desen . "<br><br>";
		echo "<pre>";
		print_r($Sonuc);
		echo "</pre>";
	
	?>
</body>
</html>