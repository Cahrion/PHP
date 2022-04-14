<?php
	/*
		header() 		= Belirtilecek olan içerik dahilinde, istemciye işlenmiş HTTP üst bilgisi iletmek için kullanılır.
		get_headers() 	= Belirtilecek olan URL doğrultusunda HTML isteğine karşı sunucunun verdiği tüm yanıtları kontrol eder ve aldığı değerlerden yeni bir dizi oluşturarak oluşturduğu dizi değerini geriye döndürür.
		get_meta_tags() = Belirtilecek olan URL doğrultusunda HTML dosyasında bulunan ve "name" değerine sahip tüm meta etiketlerini kontrol eder ve aldığı değerlerden yeni bir dizi oluşturarak oluşturduğu dizi değerini geriye döndürür.
	*/
	
	header("Content-type: image/png");
	header("Content-Disposition: attachment; filename=JS.png"); // filename = (İstenen dosya ismi) 
	readfile("Dosyalar/javascript.png");
?>