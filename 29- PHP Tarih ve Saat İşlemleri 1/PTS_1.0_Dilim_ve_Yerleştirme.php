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
		date_default_timezone_get() 		=	Tüm tarih ve saat işlevleri tarafından kullanılan varsayılan geçerli zaman dilimini bularak bulduğu değeri geriye döndürür.
		timezone_identifiers_list()			=	Tüm zaman dilimi tanımlayıcıları değerlerinden yeni bir dizi oluşturarak, oluşturduğu dizi değerini geriye döndürür.
			DEĞERLER ;
			1 		 =	Africa (Africa)
			2 		 =	America (Amerika)
			4 		 =	Antarctica (Antartika) 
			8 		 =	Arctic (Kuzey kutbu)
			16 		 =	Asia (Asya)
			32 		 =	Atlantic (AtlantiK)
			68 		 =	Australia (Avustralya)
			128 	 =	Europe (Avrupa)
			256 	 =	Indian (Hint)
			512 	 =	Pacific (Pasific)
			2047 	 = 	All (Tümü)
		
		
		date_default_timezone_set() 		=	Tüm tarih ve saat işlevleri tarafından kullanılan varsayılan geçerli zaman diliminibelirtmek için kullanılır.
			ZAMAN DİLİMLERİ ;
			UTC 	=	Coordinated Universal Time (Eş güdümlü evrensel zaman)
			GMT 	=	Greenwich Mean Time (Greenwich ortalama zamanı)
		setlocale() 						=	Sistemin yerel ayarlarını belirtmek için kullanılır. (Yerel bilgi, çoğrafi konum, Para, Zaman)
		*/
	
	$Zaman 			= date_default_timezone_get();
	// Bu değer (php.ini) dosyasından (date.timezone) kısmından (Europe/İstanbul) yazarak değiştirilebilir.
		
		echo "Zaman Dilimi: " . $Zaman;
	
	
	?>
</body>
</html>