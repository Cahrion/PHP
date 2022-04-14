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
	
	$Isimler 		= array("Esya" => "Masa", "Renk" => "Mavi", "Vasita" => "Vasita");
	$Kontrol 		= isset($Isimler["Vasita"]);
	
 
	if($Kontrol == true){
		echo '$Isimler adındaki dizi içerisinde "Vasita" anahtarı bulunmaktadır.';
	}else{
		echo '$Isimler adındaki dizi içerisinde "Vasita" anahtarı bulunmamaktadır.';
	}	

	?>
</body>
</html>