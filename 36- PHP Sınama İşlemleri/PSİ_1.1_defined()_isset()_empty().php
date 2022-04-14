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
	
	$Kontrol 		= isset($Isim); // ISIM adında bir değişken var mı diye sorar.
	
	if($Kontrol == true){
		echo '$Isim adında bir sabit bulunmaktadır.';
	}else{
		echo '$Isim adında bir sabit bulunmamaktadır.';
	}	
	
	echo "<br><br>";
	$Isim 			= "Icabi Kırgız";
	echo '$isim değişkeni eklendi.';
	echo "<br><br>";
	
	$Kontrol 		= isset($Isim); 
	if($Kontrol == true){
		echo '$Isim adında bir sabit bulunmaktadır.';
	}else{
		echo '$Isim adında bir sabit bulunmamaktadır.';
	}	
	
	?>
</body>
</html>