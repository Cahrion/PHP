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
			\b	 	=	Düzenli ifade dahilinde kontrol edilecek olan içerigin düzenli ifadeye uygun olabilecek metin parçalarının karakter dizili içerisindeki kelimelerin başında yada sonunda aramak için kullanılır.
			\B	 	=	Düzenli ifade dahilinde kontrol edilecek olan içerigin düzenli ifadeye uygun olabilecek metin parçalarının karakter dizili içerisindeki kelimelerin içerisinde aramak için kullanılır.
		*/
	
	$Icerik 	= "Merhaba Benim Adım Icabi Kırgız,Ben Bir PHP Ögrencisiyim.Beni Facebook üzerinden Icabi Kırgız şeklinde arıyarak bulabilirsiniz.";
	
	$Desen		= "/\Bnım\B/"; 
	// (\B) tam ortada olmadan true(1) göndermez
	// Mecbur kalmadan çok kullanmayın kullanmaktan kaçının
	
	$Sonuc 		= preg_match($Desen, $Icerik);

		echo "Orjinal İçerik: " .$Icerik . "<br>";
		echo "Desen : " . $Desen . "<br><br>";
		echo "Sonuç : " . $Sonuc;
	
	?>
</body>
</html>