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
	
	$Kontrol 		= defined("ISIM"); // ISIM adında bir sabit var mı diye sorar.
	
	if($Kontrol == true){
		echo "ISIM adında bir sabit bulunmaktadır.";
	}else{
		echo "ISIM adında bir sabit bulunmamaktadır.";
	}	
	
	echo "<br><br>";
	define("ISIM", "Icabi Kırgız"); // const yapısıylada eklenebilir.
	echo "ISIM Adı eklendi.";
	echo "<br><br>";
	
	$Kontrol 		= defined("ISIM");
	if($Kontrol == true){
		echo "ISIM adında bir sabit bulunmaktadır.";
	}else{
		echo "ISIM adında bir sabit bulunmamaktadır.";
	}
	
	?>
</body>
</html>