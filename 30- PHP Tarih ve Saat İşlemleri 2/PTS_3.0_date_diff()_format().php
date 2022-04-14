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
			date_diff() 	=	Oluşturulmuş olan yeni iki farklı tarih nesnesi arasındaki farkı hesaplayarak yeni bir tarih sonuç nesnesi dizisi oluşturarak oluşturduğu değeri geriye döndürür.
			format() 		=	date_diff() metodu ile hesaplanan iki tarih arasındaki farkı belirtilecek olan bir formata göre biçimlendirerek biçimlendirdiği değeri geriye döndürür.
		
		
		*/
	
	$ZamanBir 		=	date_create("2002-03-28"); // Yıl-Ay-Gün  
	$ZamanIki 		=	date_create("2001-11-07"); // Yıl-Ay-Gün  
	
	$Islem 			=	date_diff($ZamanBir, $ZamanIki);
	
		echo "<pre>";
		print_r($Islem);
		echo "</pre>";
		
	?>
</body>
</html>