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
	
	// Nesnesel yapıylada aynıdır (Diğerlerinde de aynı şekilde çalışır.)
	
	@$VeritabaniBaglantisi 		= new mysqli("localhost:3307" , "root", "", "cahrion");
	if($VeritabaniBaglantisi->connect_errno){
		die("Baglanti sağlanamadı.");
	}
	$VeritabaniBaglantisi->set_charset("UTF8");
	
	$Sorgu 			= $VeritabaniBaglantisi->query("SELECT * FROM uyeler");
		if($Sorgu){
			while($Kayit 	= $Sorgu->fetch_array(MYSQLI_BOTH)){
				echo "Kayıt ID değeri: " . $Kayit["id"] . "<br>";
				echo "Kayıt isim değeri: " . $Kayit["isim"] . "<br>";
				echo "Kayıt Yaş değeri: " . $Kayit["yas"] . "<br>";
				echo "Kayıt beceriler değeri: " . $Kayit["beceriler"] . "<br>";
				echo "Kayıt Beceri Seviyeleri değeri: " . $Kayit["beceriseviyeleri"] . "<br><br>";
			}
		}else{
			echo "Sorgu hatası";
		}
	
	$VeritabaniBaglantisi->close();
	?>
</body>
</html>