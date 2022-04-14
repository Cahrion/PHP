<?php
	header("Content-Type: text/html; charset=UTF-8"); // charset tanımlanabilir. 		(Genel Karakter Setidir.)
//	header("Content-Type: text/html; charset=ISO-8859-9"); // charset tanımlanabilir. 	(Türkçe Karakter Setidir.)
//	header("Content-Type: text/html; charset=windows-1254"); // charset tanımlanabilir. (Windows Icin Türkçe Karakter Setidir.)
?>

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
		header() 		= Belirtilecek olan içerik dahilinde, istemciye işlenmiş HTTP üst bilgisi iletmek için kullanılır.
		get_headers() 	= Belirtilecek olan URL doğrultusunda HTML isteğine karşı sunucunun verdiği tüm yanıtları kontrol eder ve aldığı değerlerden yeni bir dizi oluşturarak oluşturduğu dizi değerini geriye döndürür.
		get_meta_tags() = Belirtilecek olan URL doğrultusunda HTML dosyasında bulunan ve "name" değerine sahip tüm meta etiketlerini kontrol eder ve aldığı değerlerden yeni bir dizi oluşturarak oluşturduğu dizi değerini geriye döndürür.
	*/
	
	echo "Icabi Kırgız";
	header("refresh: 5; url=Dosyalar\Sonuc.php"); // Kendi sayfasında bir yönlendirme yapılıcaksa direkt olarak adı girilebilir. 
	exit();
	
	
	
	?>
</body>
</html>