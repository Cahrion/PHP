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
	get_included_files()	= Kullanılacak olan PHP dosyasına, dahil edilmiş / eklenmiş tüm PHP dosyalarının path (yol) ve isimlerini bularak bulduğu değerlerden yeni bir dizi oluşturarak, oluşturduğu dizi değerini geriye döndürür.
	get_required_files()	= Kullanılacak olan PHP dosyasına, dahil edilmiş / eklenmiş tüm PHP dosyalarının path (yol) ve isimlerini bularak bulduğu değerlerden yeni bir dizi oluşturarak, oluşturduğu dizi değerini geriye döndürür.
	
	*/
	// Iki metodda aynı işlemi görür. 
	echo "<pre>";
	print_r(get_included_files());
	echo "</pre>";
	
	echo "<pre>";
	print_r(get_required_files());
	echo "</pre>";
	
	
	
	?>
</body>
</html>