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
		prepare() 		= MySQL sunucusundaki database içerisinde bulunan herhangi tabloya yapılacak işleme göre query (sorgu) hazırlamak için kullanılır.
		bind_param() 	= MySQL sunucusundaki database içerisinde bulunan herhangi tabloya yapılacak işleme göre prepare() metodu kullanılarak hazırlanmış olan query'i (sorguyu) derlemek için kullanılır.
			i			= integer
			d			= double
			s			= string
			b			= blob
		
		execute() 		= MySQL sunucusundaki database içerisinde bulunan herhangi tabloya yapılacak işleme göre prepare() metodu kullanılarak hazırlanmış olan query'i (sorguyu) çalıştırmak için kullanılır.
		bind_result() 	= MySQL sunucusundaki database içerisinde bulunan herhangi tablonun veri okuma işlemi için  prepare() metodu kullanılarak hazırlanmış ve execute programı kullanılarak çalıştırılmış olan query'in (sorgunun) sonuçlarını almak için kullanılır.
		fetch() 		= MySQL sunucusundaki database içerisinde bulunan herhangi tablonun veri okuma işlemi için  prepare() metodu kullanılarak hazırlanmış, execute programı kullanılarak çalıştırılmış ve bind_result() metodu kullanılarak sonuçları alınmış  olan query'in (sorgunun) verilerini okumak için kullanılır.
		
	*/
	
	// Sadece nesne tabanıyla çalışır.
	
	@$VeritabaniBaglantisi 	= new mysqli("localhost:3307", "root", "", "cahrion");
	if($VeritabaniBaglantisi->connect_errno){
		die("Bağlantı Hatası: " . $VeritabaniBaglantisi->connect_error);
	}
	$VeritabaniBaglantisi->set_charset("UTF8");
	
	$IstenenID		= 1;
	
	$Sil 	= $VeritabaniBaglantisi->prepare("DELETE FROM kisiler WHERE id>?"); 
	
	if($Sil){
		$Sil->bind_param("i", $IstenenID); 
		$Sil->execute();
		if($Sil){
			echo "Kayıtlar Silindi.";
		}else{
			echo "Sorgu Hatası";
		}
		
	}else{
		echo "Sorgu Hatası";
	}
	
	
	$VeritabaniBaglantisi->close();
	?>
</body>
</html>