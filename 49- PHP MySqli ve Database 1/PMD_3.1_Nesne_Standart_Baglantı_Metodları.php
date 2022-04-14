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
			
		mysqli_init() 			= MySQL sunucusuna yeni bir baülantı açmak için kullanılır.
		mysqli_real_connect() 	= mysqli_init() metodu kullanılarak açılmış olan yeni MySQL bağlantısına, bağlantı bilgilerini atamak / tanımlamak için kullanılır. 
		real_connect() 			= mysqli_init() metodu kullanılarak nesnesel yapı ile açılmış olan yeni MySQL bağlantısına, bağlantı bilgilerini atamak / tanımlamak için kullanılır. 
		
	*/
	
	$VeritabaniBaglantisi 		= mysqli_init();
	mysqli_real_connect($VeritabaniBaglantisi, "localhost:3307", "root", "", "cahrion");
	mysqli_set_charset($VeritabaniBaglantisi, "UTF8"); // Standart yapı
	
	echo "<pre>";
	print_r($VeritabaniBaglantisi);
	echo "<pre>";
	
	mysqli_close($VeritabaniBaglantisi);
	?>
</body>
</html>