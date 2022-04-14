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
			
			str_rot13() 	= Belirtilecek olan içeriğin ROT13 kodlaması değerini bularak, bulduğu değeri geriye döndürür. Ayrıca ROT13 kodlaması kullanılarak kodlanmış olan içeriği geri çözerek, çözdüğü değeri geriye döndürür.
			
		*/
			
	$Deger 		= "Icabi Kırgız";	
	$Olustur 	= str_rot13($Deger); 
	echo $Olustur . "<br>";
	
	
	$Deger 		= "Icabi Kırgız & Extra Egitim A'dan Z'ye Php Görsel eğitim seti "; // Boyut değişirse şifrelemede değişir.
	$Olustur 	= str_rot13($Deger);  
	echo $Olustur;
	
	?>
</body>
</html>