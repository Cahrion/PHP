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
		
			intdiv() 		= Herhangi bir sayının belirtilecek olan sayı değerine tam olarak kaç defa bölünebildiğini bularak, bulduğu değeri geriye döndürür.
			
		*/
	$Deger1 	= 942;
	$Deger2 	= 100;
	$div 		= intdiv($Deger1, $Deger2);
	
		echo "942 kaç defa 100'e bölünür: " . $div . "<br>";
	
	$Deger3 	= 19.10;
	$Deger4 	= 4.20;
	$div 		= intdiv($Deger3, $Deger4);
	
		echo "19.10 kaç defa 4.20'e bölünür: " . $div . "<br>";
	
	
	?>
</body>
</html>