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
		str_replace()		= Belirtilecek olan içerikte, belirtilecek olan değer / değerleri arayarak, eşleşen değer / değerler olması durumunda belirtilecek olan değer / değerlerle değiştirerek, değiştirilmiş olan değeri geriye döndürür. Ayrıca belirtilecek olan ve eşleşen tüm değer yada değerlerin sayısını da döndürebilir.
		
		str_ireplace()		= Belirtilecek olan içerikte, belirtilecek olan değer / değerleri büyük harf / küçük harf ayrımı olmaksızın arayarak, eşleşen değer / değerler olması durumunda belirtilecek olan değer / değerlerle değiştirerek, değiştirilmiş olan değeri geriye döndürür. Ayrıca belirtilecek olan ve eşleşen tüm değer yada değerlerin sayısını da döndürebilir.
		
		strtr()				= Belirtilecek olan içerikte, belirtilecek olan dizi türündeki değer / değerleri arayarak, eşleşen değer / değerler olması durumunda, belirtilecek olan değer / değerlerle değiştirerek, değiştirilmiş olan değeri geriye döndürür. 
		
		substr_replace()	= Belirtilecek olan içerikte, belirtilecek olan karakter sıra numarası aralıklarına göre, istenilen değer / değerleri ekleyerek, silerek yada değiştirerek yeni oluşturulmuş olan değeri geriye döndürür.
		
		nl2br()				= Belirtilecek olan içerikte bulunabilecek olan tüm özel satır sonlandırma karakterlerini (\n) HTML satır sonlandırma karakterlerini (<br>) değiştirerek değiştirilmiş olan değeri geriye döndürür.
	*/

	$Icerik 			= "Icabi Kırgız 
	Extra Eğitim
	A'dan Z'ye PHP Görsel Eğitim Seti 
	A'dan Z'ye CSS3 Görsel Eğitim Seti"; 
	// white space yapısını da algılar bir "\n" yapısı gibi görür ve yapı çalışır.
	
	echo $Icerik . "<br><br><br>";
	
	$Islem 				= nl2br($Icerik); 
	
	echo $Islem;
	
	?>
</body>
</html>