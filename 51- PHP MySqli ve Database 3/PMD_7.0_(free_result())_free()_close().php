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
	
	@$VeritabaniBaglantisi 		= mysqli_connect("localhost:3307", "root", "", "cahrion");
	if(mysqli_connect_errno()){
		die("Bağlantı Hatası");
	}
	mysqli_set_charset($VeritabaniBaglantisi,"UTF8");
	
	$Sorgu 		= mysqli_query($VeritabaniBaglantisi, "SELECT * FROM uyeler");
		if($Sorgu){
			while($Kayitlar=mysqli_fetch_assoc($Sorgu)){
				echo $Kayitlar["id"] . "<br>"; 
				echo $Kayitlar["isim"] . "<br>"; 
				echo $Kayitlar["yas"] . "<br>"; 
				echo $Kayitlar["beceriler"] . "<br>"; 
				echo $Kayitlar["beceriseviyeleri"] . "<br><br>"; 
			}
			mysqli_free_result($Sorgu); // Hafıza temizleme işlemi yapar.
		}else{
			echo "Sorgu Hatası";
		}
	
	mysqli_close($VeritabaniBaglantisi);
	?>
</body>
</html>