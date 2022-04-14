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
	
	$IslemSol	= str_pad($Metin, 21, "-", STR_PAD_LEFT); // 20 karakter oluncaya kadar "-" eki ekler.(STR_PAD_LEFT yapısından dolayı soluna ekler.) 
	$IslemSag	= str_pad($Metin, 21, "-", STR_PAD_RIGHT); // 20 karakter oluncaya kadar "-" eki ekler.(STR_PAD_LEFT yapısından dolayı sağına ekler.) 
	$IslemOrta	= str_pad($Metin, 21, "-", STR_PAD_BOTH); // 20 karakter oluncaya kadar "-" eki ekler.(STR_PAD_LEFT yapısından dolayı iki tarafada ekler.) 
	echo $IslemSol . "<br>";
	echo $IslemSag . "<br>";
	echo $IslemOrta; // eklenecek sayı tek bir sayıyısa sağına ekstra bir tane ekler.
	
	
	?>
</body>
</html>