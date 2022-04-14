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
	
		mysqli_fetch_array() 	= MySQL sunucusundaki database içerisinde bulunan herhangi bir tablonun tüm verilerini düzenli bir dizi halinde okumak için kullanılır.
		fetch_array() 			= MySQL sunucusundaki database içerisinde bulunan herhangi bir tablonun nesnesel yapı ile tüm verilerini düzenli bir dizi halinde okumak için kullanılır.
			MYSQLI_ASSOC 		= Tablonun verilerini okuma işlemi sırasında oluşturulacak olan dizide ilgili tablonun sütun isimleri dizinin anahtarları olarak tanımlanır ve ilgili verilere sütun isimleri ile erişilebilir.
			MYSQLI_NUM	 		= Tablonun verilerini okuma işlemi sırasında oluşturulacak olan dizide dizinin anahtarları php tarafından otomatik olarak tanımlanır ve ilgili verilere sütun sıra numaraları ile erişilebilir.
			MYSQLI_BOTH	 		= Tablonun verilerini okuma işlemi sırasında oluşturulacak olan dizide dizinin anahtarları hem ilgili tablonun sütun isimleri ile hemde php tarafından otomatik olarak tanımlanır ve ilgili verilere ister sütun isimleriyle ister sütun sıra numaraları ile erişilir.
	*/
	
	@$VeritabaniBaglantisi 		= mysqli_connect("localhost:3307" , "root", "", "cahrion");
	if(mysqli_connect_errno()){
		die("Baglanti sağlanamadı.");
	}
	mysqli_set_charset($VeritabaniBaglantisi, "UTF8");
	
	$Sorgu 			= mysqli_query($VeritabaniBaglantisi, "SELECT * FROM uyeler");
		if($Sorgu){
			$Kayit 	= mysqli_fetch_array($Sorgu, MYSQLI_ASSOC); 
			echo "<pre>";
			print_r($Kayit); 
			echo "<pre>";
		}else{
			echo "Sorgu hatası";
		}
	
	mysqli_close($VeritabaniBaglantisi);
	?>
</body>
</html>