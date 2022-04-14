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
		str_shuffle() 	= Belirtilecek olan içeriğin tüm karakterlerini rastgele karıştırarak, karıştırılmış olan değeri geriye döndürür.
		strrev()		= Belirtilecek olan içeriği sondan başa olmak üzere ters çevirerek, çevrilmiş olan değeri geriye döndürür.
		str_repeat()	= Belirtilecek olan içeriği, belirtilecek olan sayı değeri kadar tekrarlayarak, oluşturulmuş olan içeriği geriye döndürür.
	*/
	
	$Icerik 	= "Icabi ";
	
	echo $Icerik . "<br>";
	
	$Karistir 	= str_repeat($Icerik, 1000); // Kaç defa tekrarlanması verisi değerini getirir.
	
	echo $Karistir;
		 
	?>
</body>
</html>