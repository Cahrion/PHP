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
		DELETE 	= MySQL sunucusundaki database içerisinde bulunan herhangi bir tablonun herhangi bir kaydını içeren satırı veya satırları silmek için kullanılır.
	*/
	
	// Nesnesel yapı ile de yapılabilir.
	
	
	@$VeritabaniBaglantisi 	= new mysqli("localhost:3307", "root", "", "cahrion");
	if($VeritabaniBaglantisi->connect_errno){
		die("Bağlantı Hatası " . $VeritabaniBaglantisi->connect_error);
	}
	$VeritabaniBaglantisi->set_charset("UTF8");
	
	$Sil 	= $VeritabaniBaglantisi->query("DELETE FROM kisiler WHERE id=5"); 
		if($Sil){
			echo "Kayıtlar Silindi.";
		}else{
			echo "Silme Hatası";
		}
	
	
	$VeritabaniBaglantisi->close();
	
	?>
</body>
</html>