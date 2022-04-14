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
	@$VeritabaniBaglantisi->real_connect("localhost:3307", "49", "", "cahrion");
	
	if($VeritabaniBaglantisi->connect_errno){  // Genellikle hata yapmaz.
		echo "Veritabanına Bağlanılamadı" . "<br>";
		echo "Hata Açıklaması: " . $VeritabaniBaglantisi->connect_error;
	}else{
		echo "Veritabanına Bağlantı yapıldı.";
		$VeritabaniBaglantisi->set_charset("UTF8"); // Nesnesel yapı
		
		
		
		$VeritabaniBaglantisi->close();
	}
	
	
	?>
</body>
</html>