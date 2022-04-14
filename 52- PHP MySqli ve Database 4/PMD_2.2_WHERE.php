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
	
	@$VeritabaniBaglantisi 	= mysqli_connect("localhost:3307", "root" , "", "cahrion");
	if(mysqli_connect_errno()){
		die("Bağlanti Hatası: " . mysqli_connect_error());
	}
	mysqli_set_charset($VeritabaniBaglantisi, "UTF8");
	
	$Sorgu 	= mysqli_query($VeritabaniBaglantisi, "SELECT * FROM uyeler WHERE yas<38"); // Yaşı 38'dan küçük olanları getirilir.
		if($Sorgu){
			while($Kayit = mysqli_fetch_assoc($Sorgu)){
				echo "ID Değeri: " . $Kayit["id"] . "<br>";
				echo "Isim Değeri: " . $Kayit["isim"] . "<br>";
				echo "Yas Değeri: " . $Kayit["yas"] . "<br>";
				echo "Beceriler Değeri: " . $Kayit["beceriler"] . "<br>";
				echo "Beceri Seviyeleri Değeri: " . $Kayit["beceriseviyeleri"] . "<br><br>";
			}
		}else{
			echo "Sorgu Hatası";
		}
	
	
	mysqli_close($VeritabaniBaglantisi);
	
	?>
</body>
</html>