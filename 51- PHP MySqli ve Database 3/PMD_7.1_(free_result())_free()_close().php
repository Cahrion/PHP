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
	
		mysqli_free_result() 	= MySQL sunucusundaki database içerisinde bulunan herhangi bir tablo ile alakalı istenilen işlem / işlemler bittiğinde hafızayı boşaltmak için kullanılır.
		free_result() 			= MySQL sunucusundaki database içerisinde bulunan herhangi bir tablo ile alakalı nesnesel yapı ile istenilen işlem / işlemler bittiğinde hafızayı boşaltmak için kullanılır.
		free() 					= MySQL sunucusundaki database içerisinde bulunan herhangi bir tablo ile alakalı nesnesel yapı ile istenilen işlem / işlemler bittiğinde hafızayı boşaltmak için kullanılır.
		close() 				= MySQL sunucusundaki database içerisinde bulunan herhangi bir tablo ile alakalı nesnesel yapı ile istenilen işlem / işlemler bittiğinde hafızayı boşaltmak için kullanılır.

	*/
	
	@$VeritabaniBaglantisi 		= new mysqli("localhost:3307", "root", "", "cahrion");
	if($VeritabaniBaglantisi->connect_errno){
		die("Bağlantı Hatası");
	}
	mysqli_set_charset($VeritabaniBaglantisi,"UTF8");
	
	$Sorgu 		= $VeritabaniBaglantisi->query("SELECT * FROM uyeler");
		if($Sorgu){
			while($Kayitlar= $Sorgu->fetch_assoc()){
				echo $Kayitlar["id"] . "<br>"; 
				echo $Kayitlar["isim"] . "<br>"; 
				echo $Kayitlar["yas"] . "<br>"; 
				echo $Kayitlar["beceriler"] . "<br>"; 
				echo $Kayitlar["beceriseviyeleri"] . "<br><br>"; 
			}
			$Sorgu->free_result(); // Hafıza temizleme işlemi yapar.
		}else{
			echo "Sorgu Hatası";
		}
	
	$VeritabaniBaglantisi->close();
	?>
</body>
</html>