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
		defined() 	= Belirtilece kolan sabitin varlığını sınamak için kullanılır. İşlem sonucu daima boolean (mantıksal) veri türünde döner.
		isset() 	= Belitilecek olan değişkenin veya dizi içerisinde belirtilecek olan anahtarın varlığını sınamak için kullanılır. İşlem sonucu daima boolean (mantıksal) veri türünde döner.
		empty() 	= Belitilecek olan değişkenin veya dizi içerisinde belirtilecek olan anahtarın daha önceden tanımlanıp tanımlanmadğını sınamak için kullanılır. İşlem sonucu daima boolean (mantıksal) veri türünde döner.
	*/
	
	
	$Kontrol 		= empty($Isim); // Yok mu diye sorulur ($Isim adında değişken yok mudur ?) (Yoksa = true)
	
	if($Kontrol == true){
		echo '$Isim adında değişken bulunmamaktadır.';
	}else{
		echo '$Isim adında değişken bulunmaktadır.';
	}	
	
	echo "<br><br>";
	$Isim 			= "Icabi";
	echo 'Değiken Oluşturuldu..';
	echo "<br><br>";
	
	$Kontrol 		= empty($Isim); // Yok mu diye sorulur ($Isim adında değişken yok mudur ?) (Yoksa = true)
	
	if($Kontrol == true){
		echo '$Isim adında değişken bulunmamaktadır.';
	}else{
		echo '$Isim adında değişken bulunmaktadır.';
	}	
	?>
</body>
</html>