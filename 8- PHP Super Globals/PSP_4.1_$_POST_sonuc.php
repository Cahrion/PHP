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
	
	$_POST 	=	İstek gönderim tag’ları (etiketleri) aracılığı ile gelen verilere ulaşılabilme imkanı tanır. Genellikle kapalı yöntemle gelen istekler ve form işleme işlemleri için kullanılmaktadır.
	
	*/ 
	
	$GelenIsimDegeri 		= $_POST["Isim"];
	$GelenSoyisimDegeri 	= $_POST["Soyisim"];
	
	echo "Hoşgeldin " . $GelenIsimDegeri . " ";	
	echo $GelenSoyisimDegeri;	
	
?>
</body>
</html>