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
			
		mysqli_get_client_info()	= PHP yazılımı içerisinde sisteme tanımlı olan MySQL istemcisi kütüphanesinin (libmysql) detay bilgisini bularak, bulduğu değeri geriye döndürür.
		mysqli_get_client_version()	= PHP yazılımı içerisinde sisteme tanımlı olan MySQL istemcisi kütüphanesinin (libmysql) sürüm bilgisini bularak, bulduğu değeri geriye döndürür.
		mysqli_get_host_info()		= Sisteme tanımlı olan MySQL sunucusunun isim ve bağlantı protokol türü bilgisini bularak bulduğu değeri geriye döndürür.
		host_info					= Sisteme tanımlı olan MySQL sunucusunun nesnesel yapı ile isim ve bağlantı protokol türü bilgisini bularak bulduğu değeri geriye döndürür.
		mysqli_get_proto_info()		= Sisteme tanımlı olan MySQL sunucusunun bağlantı protokolü sürüm bilgisini bularak bulduğu değeri geriye döndürür.
		protocol_version			= Sisteme tanımlı olan MySQL sunucusunun nesnesel yapı ile bağlantı protokolü sürüm bilgisini bularak bulduğu değeri geriye döndürür.
		mysqli_get_server_info()	= Sisteme tanımlı olan MySQL sunucusunun detay bilgisini bularak bulduğu değeri geriye döndürür.
		server_info 				= Sisteme tanımlı olan MySQL sunucusunun nesnesel yapı ile detay bilgisini bularak bulduğu değeri geriye döndürür.
		mysqli_get_server_version()	= Sisteme tanımlı olan MySQL sunucusunun sürüm bilgisini bularak bulduğu değeri geriye döndürür.
		server_version				= Sisteme tanımlı olan MySQL sunucusunun nesnesel yapı ile sürüm bilgisini bularak bulduğu değeri geriye döndürür.
	
	*/
	// Standart yapı
	
	$VeritabaniBaglantisi 	= mysqli_connect("localhost:3307", "root", "", "cahrion");
	$Bilgi 					= mysqli_get_server_version($VeritabaniBaglantisi);
	echo $Bilgi . "<br>"; // MySql sürüm bilgisini verir.
	mysqli_close($VeritabaniBaglantisi);
	
	// Nesne Tabanlı yapı
	
	$VeritabaniBaglantisi 	= new mysqli("localhost:3307", "root", "", "cahrion");
	$Bilgi 	= $VeritabaniBaglantisi->server_version;
	echo $Bilgi . "<br>"; // MySql sürüm bilgisini verir.
	$VeritabaniBaglantisi->close();
	
	?>
</body>
</html>