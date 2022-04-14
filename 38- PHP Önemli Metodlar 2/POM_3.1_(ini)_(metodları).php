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
	php_ini_loaded_file()	= PHP yapılandırma yönergelerinini bulunduğu php.ini dosyasının içerisinde bulunduğu dizin / dizinlerin adını / adlarını bularak, bulduğu değeri geriye döndürür.
	ini_get_all()			= PHP yazılımı içerisinde kullanılabilecek ve sisteme tanımlı olan tüm yapılandırma yönergelerini bularak, bulduğu değerlerden yeni bir dizi oluşturarak, oluşturduğu dizi değerini geriye döndürür.  Ayrıca belirtilecek olan değer doğrultusunda tüm yapılandırma değerleri yerine sadece ilgili yapılandırma yönelgesi değerinde döndürebilir.
	ini_get()				= PHP yazılımı içerisinde kullanılabilecek ve sisteme tanımlı olan bir yapılandırma yönergesinin değerini bularak, bulduğu değeri geriye döndürür. 
	ini_set()				= PHP yazılımı içerisinde kullanılabilecek ve sisteme tanımlı olan bir yapılandırma yönergesine değer atamak için kullanılır.  
	ini_restore()			= PHP yazılımı içerisinde kullanılabilecek ve sisteme tanımlı olan bir yapılandırma yönergesinin ini_set() metodu kullanılarak değiştirilmiş olan değerini varsayılan haline geri döndürmek için kullanılır
	parse_ini_file()		= PHP yazılımı içerisinde kullanılabilecek ve yazılımcı tarafından oluşturulmuş olan tüm yapılandırma yönergeleri listesini bulur ve bulduğu değerlerinden yeni bir dizi oluşturarak, oluşturduğu dizi değerini geriye döndürür.
	*/
	
	echo "<pre>";
	print_r(ini_get_all());
	echo "</pre>";
	
	?>
</body>
</html>