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
		get_html_translation_table() 	= PHP yazılımı içerisinde kullanılabilecek olan sisteme tanımlı tüm gtmlspecialchars() ve htmlentities() dönüştürülebilir karakterlerinin listesini bulur ve bulduğu değerlerden yeni bir dizi oluşturarak, oluşturuduğu dizi değerini geriye döndürür.
			HTML_ENTITIES 				= get_html_translation_table metodu kullanılarak htmlentities metodu için tanımlanmış ve dönüştürülecek olan karakter listesini elde etmek için kullanılır.
			HTML_SPECIALCHARS 			= get_html_translation_table metodu kullanılarak htmlspecialchars metodu için tanımlanmış ve dönüştürülecek olan karakter listesini elde etmek için kullanılır.
	*/
			
	$Degerler 		= get_html_translation_table(HTML_SPECIALCHARS); // Varsayılan değer.
	
	echo "<pre>";
	print_r($Degerler); 
	echo "</pre>";
	
	?>
</body>
</html>