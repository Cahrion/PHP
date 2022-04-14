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

	$Icerik 			= "Icabi Kırgız bir JavaScript yazılımcısıdır"; 
	
	echo $Icerik . "<br>";
	
	$Dizi 				= array("Can Kırgız");
	$Islem 				= substr_replace($Icerik, $Dizi, 0, 14); // 3. parametre başlangıç, 4. parametreye kadar siler 
																 // Türkçe karakterler 2 karakter olarak sayılır.
	
	echo $Islem . "<br>";
	
	?>
</body>
</html>