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
	
	$Deger		= iconv_get_encoding("all"); 

	echo "<pre>";
	print_r($Deger);
	echo "</pre>";
		
	iconv_set_encoding("input_encoding", "ISO-8859-9"); // Değiştirmek için bu kod kullanılır. Girdi, çıktı veya dahili verileri değiştirilebilir.
	iconv_set_encoding("output_encoding", "ISO-8859-1"); 
	iconv_set_encoding("internal_encoding", "ISO-8859-2"); 
	
	$Deger		= iconv_get_encoding("all"); // Bu değiştirme veriyi değiştirmez

	echo "<pre>";
	print_r($Deger);
	echo "</pre>";
	
	$Icerik 	= "A'dan Z'ye PHP Görsel Eğitim Seti";
	echo $Icerik;
		
	?>
</body>
</html>