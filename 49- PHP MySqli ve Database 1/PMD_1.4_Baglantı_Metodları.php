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
			
		mysqli_connect() 		= Kendisine parametre olarak verilen değerler doğrultusunda, MySQL sunucusuna yeni bir bağlantı açmak için kullanılır. Ayrıca istenirse açılacak olan MySQL sunucusunun tüm bağlantı bilgilerini bulur ve bulduğu değerlerden yeni bir dizi oluşturarak, oluşturduğu değeri geriye döndürür.
		mysqli_set_charset() 	= Kendisine parametre olarak verilen değerler doğrultusunda, daha önceden açılmış olan MySQL bağlantısına varsayılan istemci karakter setini atamak / tanımlamak için kullanılır.
		mysqli_select_db() 		= Kendisine parametre olarak verilen değerler doğrultusunda daha önceden açılmış olan MySQL bağlantısı üzerinden istenilen veritabanını seçmek için kullanılır.
		mysqli_connect_errno() 	= MySQL sunucusuna yeni bir bağlantı açma işlemi sırasında olası bir hata ile karşılaşılması durumunda hata kodu değerini bularak bulduğu değeri geriye döndürür.
		mysqli_connect_error() 	= MySQL sunucusuna yeni bir bağlantı açma işlemi sırasında olası bir hata ile karşılaşılması durumunda hata açıklama değerini bularak bulduğu değeri geriye döndürür.
		mysqli_close() 			= Kendisine parametre olarak verilen değerler doğrultusunda daha önceden açılmış olan MySQL bağlantısı kapatmak / sonlandırmak için kullanılır.
	
	*/
	// ÖNERİLEN KULLANIM HALİ
	
	
	$VeritabaniBaglantisi 		= @mysqli_connect("localhost:3307", "", ""); 
	if(mysqli_connect_errno()){
		die("Sayin kullanıcımız şuanda veritabanı sunucularımızda bakım çalışması yapılmaktadır, lütfen daha sonra tekrar deneyiniz.");
	}
	echo "Veritabanına Baglanildi.";
	mysqli_set_charset($VeritabaniBaglantisi, "UTF-8");
	mysqli_select_db($VeritabaniBaglantisi, "cahrion"); 
		
		
		
	mysqli_close($VeritabaniBaglantisi);
	?>
</body>
</html>