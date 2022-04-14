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
	
		ALTER TABLE 			= MySQL sunucusundaki database içerisinde bulunan herhangi bir tabloya yeni bir sütün ekleneceğini, her hangi bir sütunun silineceğini veya herhangi bir sütunun adının yada yapısının değiştirileceğini belirtmek için kullanılır.
		ADD / ADD COLUMN		= MySQL sunucusundaki database içerisinde bulunan herhangi bir tabloya yeni bir sütün eklemek için kullanılır.
			FIRST 	= MySQL sunucusundaki database içerisinde bulunan herhangi bir tabloya eklenecek olan yeni sütunun, diğer tüm sütünların en başına eklenmesi gerektiğini belirtmek için kullanılır.
			AFTER 	= MySQL sunucusundaki database içerisinde bulunan herhangi bir tabloya eklenecek olan yeni sütunun, belirtilecek olan sütundan bir sonra eklenmesi gerektiğini belirtmek için kullanılır.
		
		CHANGE CHANGE COLUMN 	= MySQL sunucusundaki database içerisinde bulunan herhangi bir tablodaki herhangi bir sütunun adını veya yapsını değiştirmek için kullanılır.
		MODIFY / MODIFY COLUMN 	= MySQL sunucusundaki database içerisinde bulunan herhangi bir tablodaki herhangi bir sütunun yapısını değiştirmek için kullanılır.
		DROP / DROP COLUMN		= MySQL sunucusundaki database içerisinde bulunan herhangi bir tablodaki herhangi bir sütunu silmek için kullanılır.
		
	*/
	
	// Nesne yapısıyla yapılabilir (Her ikiside)
	
	@$VeritabaniBaglantisi 		= new mysqli("localhost:3307", "root", "", "cahrion");
	if($VeritabaniBaglantisi->connect_errno){
		echo "Baglanti hatası <br>";
		echo "Hata içeriği: " . $VeritabaniBaglantisi->connect_error;
		die();
	}
	echo "Bağlanti sağlandı. <br>";
	$VeritabaniBaglantisi->set_charset("UTF8");
	
	$Sorgu 	= $VeritabaniBaglantisi->query("ALTER TABLE uyeler 
	MODIFY isim varchar(100) NOT NULL,
	MODIFY id int(10)
	"); // çoklu yapı da oluşturulabilir.
	if($Sorgu){
		echo "Sütun yapısı güncellendi.";
	}else{
		echo "Sorgu Hatası";
	}
	
	$VeritabaniBaglantisi->close();
	?>
</body>
</html>