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
		__CLASS__ 	= PHP (Hypertext Preprocessor) (üstün yazı ön işlemcisi) (Personal Home Page) (kişisel ana sayfa) dosyası içerisinde bulunduğu sınıfın, sınıf adı bilgisi değerini döndürür.

		*/
		class Deney{
			function Deneme(){
				echo __CLASS__;
			}
		}
	
		$Islem 	= new Deney;
		$Islem -> Deneme();
	
	?>
</body>
</html>