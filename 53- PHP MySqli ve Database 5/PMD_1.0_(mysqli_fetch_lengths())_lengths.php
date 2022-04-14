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
	 
		mysqli_fetch_lengths() 	= MySQL suncuusundaki database içerisindeki bulunan herhangi bir tablonun herhangi bir satırındaki tüm sütunlarda bulunan verilerin ayrı ayrı toplam karakter sayısını bulmak için kullanılır.
		lengths					= MySQL suncuusundaki database içerisindeki bulunan herhangi bir tablonun herhangi bir satırındaki tüm sütunlarda bulunan verilerin nesnesel yapı ile ayrı ayrı toplam karakter sayısını bulmak için kullanılır.
		
	*/
	
	@$VeritabaniBaglantisi 		= mysqli_connect("localhost:3307", "root", "", "cahrion");
	if(mysqli_connect_errno()){
		die("Bağlantı Hatası: " . mysqli_connect_error());
	}
	mysqli_set_charset($VeritabaniBaglantisi, "UTF8");
	
	$Sorgu 	= mysqli_query($VeritabaniBaglantisi, "SELECT * FROM uyeler");
		if($Sorgu){
			$KayitSayisi 	= mysqli_num_rows($Sorgu);
			if($KayitSayisi>0){
				while($Kayitlar = mysqli_fetch_assoc($Sorgu)){
					$SutunKarakterSayisi 	= mysqli_fetch_lengths($Sorgu);
					
					echo "<pre>";
					print_r($SutunKarakterSayisi);
					echo "<pre>";
				}
			}else{
				echo "Kayıt Bulunamadı.";
			}
		}else{
			echo "Sorgu Hatası";
		}
	
	mysqli_close($VeritabaniBaglantisi);
	?>
</body>
</html>