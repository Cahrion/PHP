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
		__FUNCTION__ =	PHP (Hypertext Preprocessor) (üstün yazı ön işlemcisi) (Personal Home Page) (kişisel ana sayfa) dosyası içerisinde bulunduğu fonksiyonun, fonksiyon adı bilgisi değerini döndürür.
		*/
	
		function DENEY(){
			define("DEGER",__FUNCTION__);
			echo __FUNCTION__ . "<br>";
		}
		DENEY();
		echo DEGER;
	?>
</body>
</html>