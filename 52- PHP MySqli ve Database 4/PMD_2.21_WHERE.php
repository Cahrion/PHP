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
	 
		WHERE 		= MySQL sunucusundaki database içerisinde bulunan herhangi bir tablonun işlem esnasında tüm verilerini işlemek yerine sadece koşula bağlı verilerin işlenmek istendiğini belirtmek için kullanılır.
	
	*/
	
	// Nesne yapısına çevirilerekte yapılabilir (Hepsinde geçerlidir lakin biz bir tanesini yaptık.)
	
	@$VeritabaniBaglantisi 	= new mysqli("localhost:3307", "root" , "", "cahrion");
	if($VeritabaniBaglantisi->connect_errno){
		die("Bağlanti Hatası: " . $VeritabaniBaglantisi->connect_error);
	}
	$VeritabaniBaglantisi->set_charset("UTF8");
	
	$Sorgu 	= $VeritabaniBaglantisi->query("SELECT * FROM uyeler WHERE (yas=35 OR yas=40) AND beceriler LIKE ('%Java%')"); // Yaşı 35 veya 40 geçenleri ve becerilerde "Java" bulunanları getirir.
		if($Sorgu){
			while($Kayit = $Sorgu->fetch_assoc()){
				echo "ID Değeri: " . $Kayit["id"] . "<br>";
				echo "Isim Değeri: " . $Kayit["isim"] . "<br>";
				echo "Yas Değeri: " . $Kayit["yas"] . "<br>";
				echo "Beceriler Değeri: " . $Kayit["beceriler"] . "<br>";
				echo "Beceri Seviyeleri Değeri: " . $Kayit["beceriseviyeleri"] . "<br><br>";
			}
		}else{
			echo "Sorgu Hatası";
		}
	
	$VeritabaniBaglantisi->close();
	?>
</body>
</html>