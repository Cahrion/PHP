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
		http_build_query()	= Belirtilecek olan dizi içerisindeki tüm anahtar ve değerleri bularak, bulduğu değerleri URL kodlamalı bir sorgu dizisine dönüştürerek dönüştürdüğü değeri geriye döndürür.
	*/
	
	$Degerler 		= array("q" => "volkan alakent php görsel eğitim seti");
	$Sonuc			= http_build_query($Degerler);
	
	$Link 			= "https://www.google.com/search?";
	$Olustur 		= $Link . $Sonuc
	?>
	
	<a href="<?php echo $Olustur; ?>"></a>
</body>
</html>