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
		wordwrap()	= Belirtilecek olan içeriğe, belirtilecek olan karakter sıra numarası aralıklarına göre, belirtilecek olan değer yada değerleri ekleyerek eklenmiş olan değeri geriye döndürür.
		str_pad()	= Belirtilecek olan içeriğin, belirtilecek olan değer yada değerler doğrultusunda başına, sonuna veya hem başına hem sonuna ekleyerek, eklenmiş olan değeri geriye döndürür. 
			STR_PAD_LEFT	= Belirtilecek olan içeriğin başına / soluna değer eklemek için kullanılır.
			STR_PAD_RIGHT	= Belirtilecek olan içeriğin sonuna / sağına değer eklemek için kullanılır.
			STR_PAD_BOTH	= Belirtilecek olan içeriğin hem başına / soluna, hemde sonuna / sağına değer eklemek için kullanılır.
	*/
	 
	$Metin 		= "Icabi Kırgız";
	
	$IslemSol	= str_pad($Metin, 21, "Ahmet", STR_PAD_LEFT); // Sığacak kadar ekleme yapar gerisini eklemez.
	$IslemSag	= str_pad($Metin, 21, "Ahmet", STR_PAD_RIGHT); // Sığacak kadar ekleme yapar gerisini eklemez.
	$IslemOrta	= str_pad($Metin, 21, "Ahmet", STR_PAD_BOTH); // Sığacak kadar ekleme yapar gerisini eklemez.
	echo $IslemSol . "<br>";
	echo $IslemSag . "<br>";
	echo $IslemOrta; // eklenecek sayı tek bir sayıyısa sağına ekstra bir tane ekler.
	
	?>
</body>
</html>