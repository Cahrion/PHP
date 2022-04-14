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
	$_REQUEST 	= URL (Uniform Resource Locator) (nizami kaynak bulucu) üzerinden veya istek gönderim tag’ları (etiketleri) aracılığı ile gelen verilere ulaşılabilme imkanı tanır. Genellikle URL (Uniform Resource Locator) (nizami kaynak bulucu) üzerinden gelen istekler, kapalı yöntemle gelen istekler ve form işleme işlemleri için kullanılmaktadır.
	
	*/ 

//	$GelenIsimDegeri 		= $_REQUEST["Isim"];
//	$GelenSoyisimDegeri 	= $_REQUEST["Soyisim"];
	
	$GelenIsimDegeri2 		= $_REQUEST["Isimtwo"];
	$GelenSoyisimDegeri2	= $_REQUEST["Soyisimtwo"];
	
//	echo "Hoşgeldin " . $GelenIsimDegeri . " ";	
//	echo $GelenSoyisimDegeri;	
	
	echo "Hoşgeldin " . $GelenIsimDegeri2 . " ";	
	echo $GelenSoyisimDegeri2;	
	
?>
</body>
</html>