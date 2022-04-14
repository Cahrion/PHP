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
			
		set_charset() 		= Kendisine parametre olarak verilen değer doğrultusunda daha önceden nesnesel yapı ile açılmış olan MySQL bağlantısına varsayilan işlemci karakter setini atamak tanımlamak için kullanılır.
		select_db() 		= Kendisine parametre olarak verilen değer doğrultusunda daha önceden nesnesel yapı ile açılmış olan MySQL bağlantısına üstünden istenilen veritabanını seçmek için kul lanılır.
		connect_errno	 	= MySQL sunucusuna yeni bir bağlantı açma işlemi sırasında olası bir hata ile karşılaşılması durumunda hata kodu değerini bularak bulduğu değeri geriye döndürür.
		connect_error 		= MySQL sunucusuna yeni bir bağlantı açma işlemi sırasında olası bir hata ile karşılaşılması durumunda hata açıklama değerini bularak bulduğu değeri geriye döndürür.
		close() 			= Daha önceden nesnesel yapı ile açılmış olan MySQL bağlantısını kapatmak / sonlandırmak için kullanılır.
	
	*/
	// ÖNERİLEN KULLANIM!
	
	$VeritabaniBaglantisi 		= @new MySQLi("localhost:3307", "rootT", "");  // Hata yaparsak
	
	if($VeritabaniBaglantisi->connect_errno){ 
		die("Şuanda web sunucularımız üzerinde çalışma yapılmaktadır. Lütfen daha sonra tekrar deneyiniz.");
	}
	echo "Veritabanına Bağlantı Yapıldı.";
	
	$VeritabaniBaglantisi->set_charset("UTF8");
	$VeritabaniBaglantisi->select_db("cahrion");

	
	
	
	$VeritabaniBaglantisi->close();
	?>
</body>
</html>