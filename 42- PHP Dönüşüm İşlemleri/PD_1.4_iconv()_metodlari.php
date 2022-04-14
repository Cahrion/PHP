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
		iconv() 				= Belirtilecek olan içeriği, belirtilecek olan karakter kodlaması dahilinde dönüştürerek, karakter kodlaması dönüştürülmüş olan değeri geriye döndürür.
			TRANSLIT 	= Belirtilecek olan içerikte gösterilmeyen bir karaktere / karakterlere rastlanılacak olursa ilgili karakterin yada karakterlerin yerine benzer bir karakter değeri yerleştirmek için kullanılır.
			IGNORE  	= Belirtilecek olan içerikte gösterilmeyen bir karaktere / karakterlere rastlanılacak olursa ilgili karakter yada karakterler yok sayılır veya ilgili karakterin / karakterlerin yerine kural dışı karakter değeri yerleştirmek için kullanılır.
			
		iconv_get_encoding()	= PHP sayfası dahilinde kullanılmakta olan karakter kodlama bilgileri listesini bulur ve bulduğu değerlerden yeni bir dizi oluşturarak oluşturduğu dizi değerini geriye döndürür. Ayrıca belirtilecek olan değer doğrultusunda tüm karakter kodlama bilgisi yerine sadece ilgili karakter kodlaması değerini döndürebilir.
		iconv_set_encoding()	= PHP sayfası dahilinde kullanılmakta olan karakter kodlama türüne belirtilecek olan karakter kodlama kümesini atamak için kullanılır.
	*/
	
	$Deger		= iconv_get_encoding("all");// varsayılan değer
	
	echo "<pre>";
	print_r($Deger);
	echo "</pre>";
		
	echo "Girdi Karakter Seti Kodlaması: " . $Deger["input_encoding"] . "<br>";
	echo "Çıktı Karakter Seti Kodlaması: " . $Deger["output_encoding"] . "<br>";
	echo "Dahili Karakter Seti Kodlaması: " . $Deger["internal_encoding"] . "<br>";
	
	?>
</body>
</html>