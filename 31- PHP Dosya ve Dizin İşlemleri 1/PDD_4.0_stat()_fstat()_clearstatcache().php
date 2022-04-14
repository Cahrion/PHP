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
			stat() 						= 	Belirtilecek olan değer doğrultusunda, ilgili kaynağın dosya hakkındaki tüm bilgilerini bularak bulduğu değerlerden yeni bir dizi oluşturarak. Oluşturduğu değeri geriye döndürür.
			fstat() 					=	fopen() metodu kullanılarak açılmış olan ve belirtilecek olan değer doğrultusunda, ilgili kaynağın dosya hakkındaki tüm bilgilerini bularak bulduğu değerlerden yeni bir dizi oluşturarak. Oluşturduğu değeri geriye döndürür.
			clearstatcache() 			=	stat() veya fstat() metodu kullanılarak elde edilen ve ön belleğe alınan verileri temizlemek için kullanılır.
			
			stat() ve fstat() DEGERLERİ =
				[0] ve [dev] 		=> Aygıt Numarası
				[1] ve [ino]		=> Dosya Düğüm numarası
				[2] ve [mode]		=> Dosya erişim izin değeri
				[3] ve [nlink]		=> Bağlantı sayısı (Genellikle değeri 1'dir)
				[4] ve [uid]		=> Dosya sahibi ID'si (Genellikle değeri 0'dır)
				[5] ve [gid]		=> Dosya sahibi grubu ID'si (Genellikle değeri 0'dır)
				[6] ve [rdev]		=> Dosya Düğüm aygıtları için aygıt türü 
				[7] ve [size]		=> Dosya boyutu (Byte cinsinden)
				[8] ve [atime]		=> Dosya son erişim zamanı. (Unix zaman damgası türünde)
				[9] ve [mtime]		=> Dosya değiştirilme zamanı. (Unix zaman damgası türünde)
				[10] ve	[ctime]		=> Dosya oluşturulma zamanı. (Unix zaman damgası türünde)
				[11] ve	[blksize]	=> Dosya sistemi için I/O blok boyutu (Gennelikle Windows değeri -1'dir)
				[12] ve	[blocks]	=> Dosya için ayrılmış 512'lık blok boyutu (Gennelikle Windows değeri -1'dir)
		*/
			
	$Dosya 		= "Harici\Ornek.zip";
	$Sor 		= stat($Dosya); 
	
		echo "<pre>";
		print_r($Sor);
		echo "</pre>";
	
	?>
</body>
</html>