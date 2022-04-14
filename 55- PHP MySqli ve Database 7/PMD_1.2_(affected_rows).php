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
		mysqli_affected_rows() 	= MySQL sunucusundaki database içerisinde bulunan herhangi bir tabloya bağlanılarak işlem yapıldığında etkilenen kayıt sayısını bulmak için kullanılır.
		affected_rows 			= MySQL sunucusundaki database içerisinde bulunan herhangi bir tabloya nesnesel yapı ile bağlanılarak işlem yapıldığında etkilenen kayıt sayısını bulmak için kullanılır.
	*/
	
	@$VeritabaniBaglantisi 		= mysqli_connect("localhost:3307", "root", "", "cahrion");
	if(mysqli_connect_errno()){
		die("Bağlantı Hatası: " . mysqli_connect_error());
	}
	mysqli_set_charset($VeritabaniBaglantisi, "UTF8");
	
	$Sorgu 		= mysqli_query($VeritabaniBaglantisi, "UPDATE kisiler SET adisoyadi='Değişti', sifre='1111' WHERE id > 4");  // UPDATE işlemi
		if($Sorgu){
			echo "İşlemde etkilenen kayıt sayısı: " . mysqli_affected_rows($VeritabaniBaglantisi);
		}else{
			echo "Sorgu Hatası";
		}
	
	
	mysqli_close($VeritabaniBaglantisi);
	?>
</body>
</html>