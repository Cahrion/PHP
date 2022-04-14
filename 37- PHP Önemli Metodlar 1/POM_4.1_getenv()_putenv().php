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
		getenv() 	= PHP yazılımı içerisinde kullanılabilecek ve sisteme tanımlı olan bir ortam değişkeninin değerini bularak bulduğu değeri geriye döndürür.
		putenv() 	= PHP yazılımı içerisinde kullanılabilecek ve sisteme tanımlı olan bir ortam değişkenine, belirtilecek olan değeri atamak için kullanılır.
	*/
	echo "<pre>";
	print_r(getenv());
	echo "</pre>";
	
	putenv("ISIM=Icabi"); // Tanımlama yaptı.
	putenv("SOYISIM=Kirgiz");
	putenv("BILGI=PHP");
	putenv("FIRMA=IK");
	
	echo "<pre>";
	print_r(getenv());
	echo "</pre>";
	
	echo "ISIM değişkenin değeri: " . getenv('ISIM');
	?>
</body>
</html>