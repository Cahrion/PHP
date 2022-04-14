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
	
	$_GET URL  =	(Uniform Resource Locator) (nizami kaynak bulucu) üzerinden gelen verilere ulaşılabilme imkanı tanır. Genellikle URL (Uniform Resource Locator) (nizami kaynak bulucu) üzerinden gelen istekler ve form işleme işlemleri için kullanılmaktadır.
	
	*/ 
	
	$GelenIsimDegeri 		= $_GET["Isim"];
	$GelenSoyisimDegeri 	= $_GET["Soyisim"];
	
	echo "Hoşgeldin " . $GelenIsimDegeri . " ";	
	echo $GelenSoyisimDegeri;	
	
?>
</body>
</html>