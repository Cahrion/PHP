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
	
	// Nesnesel yapı ile de yapılabilir (Bir tanesini yapalım.)
	
	@$VeritabaniBaglantisi 		= new mysqli("localhost:3307", "root", "", "cahrion");
	if($VeritabaniBaglantisi->connect_errno){
		die("Bağlantı Hatası: " . $VeritabaniBaglantisi->connect_error);
	}
	$VeritabaniBaglantisi->set_charset("UTF8");
	
	$Sorgu 		= $VeritabaniBaglantisi->query("DELETE FROM kisiler WHERE id>2");  // DELETE işlemi
		if($Sorgu){
			echo "İşlemde etkilenen kayıt sayısı: " . $VeritabaniBaglantisi->affected_rows;
		}else{
			echo "Sorgu Hatası";
		}
	
	
	$VeritabaniBaglantisi->close();
	?>
</body>
</html>