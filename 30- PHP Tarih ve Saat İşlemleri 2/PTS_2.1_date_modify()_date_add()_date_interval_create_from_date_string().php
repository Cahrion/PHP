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
			date_modify() 							=	Oluşturulmuş olan yeni bir tarih nesnesine, belirtilecek olan tarih değerini eklemek için kullanılır.
			date_add()	 							=	Oluşturulmuş olan yeni bir tarih nesnesine, belirtilecek olan tarih değerini eklemek için kullanılır.
			date_interval_create_from_date_string() =	date_add() metodu ile tarih değeri ekleme işlemlerinde, eklenecek olan değeri tanımlayabilmek için kullanılır.
		
		
		*/
	
	$Zaman 			=	date_create("2002-03-28"); // Yıl-Ay-Gün  
	
		echo "<pre>";
		print_r($Zaman);
		echo "</pre>";
	
	date_modify($Zaman, "-3 hour");
	
		echo "<pre>";
		print_r($Zaman);
		echo "</pre>";
	?>
</body>
</html>