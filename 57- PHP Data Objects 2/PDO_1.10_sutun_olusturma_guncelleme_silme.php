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
	
		ALTER TABLE 			= MySQL sunucusundaki database içerisinde bulunan herhangi bir tabloya yeni bir sütun ekleneceğini, herhangi bir sütunun silineceğini, veya herhangi bir sütunun adının yada yapısının değiştirileceğini belirtmek için kullanılır.
		ADD / ADD COLUMN 		= MySQL sunucusundaki database içerisinde bulunan herhangi bir tabloya yeni bir sütun eklemek için kullanılır.
			FIRST 				= MySQL sunucusundaki database içerisinde bulunan herhangi bir tabloya eklenecek olan yeni bir sütunun diğer tüm sütunların en başına eklenmesi gerektiğini belirtmek için kullanılır.
			AFTER 				= MySQL sunucusundaki database içerisinde bulunan herhangi bir tabloya eklenecek olan yeni bir sütunun belirtilecek olan bir sütundan bir sonra ekleceğini belirtmek için kullanılır.
			
		CHANGE / CHANGE COLUMN 	= MySQL sunucusundaki database içerisinde bulunan herhangi bir tablodaki herhangi bir sütunun adını yada yapısını değiştirmek için kullanılır.
		MODIFY / MODIFY COLUMN 	= MySQL sunucusundaki database içerisinde bulunan herhangi bir tablodaki herhangi bir sütunun yapısını değiştirmek için kullanılır.
		DROP / DROP COLUMN 		= MySQL sunucusundaki database içerisinde bulunan herhangi bir tablodaki herhangi bir sütunu silmek için kullanılır.
	
	*/
	try{
		$VeritabaniBaglantisi 		= new PDO("mysql:host=localhost:3307;dbname=cahrion;charset=UTF8", "root", "");
		echo "Başarıyla bağlantı kuruldu. <br>";
	}catch(PDOException $Hata){
		die("Bağlantı Hatası: " . $Hata->getMessage());
	}
	
	
	$Sorgu 	= $VeritabaniBaglantisi->query("ALTER TABLE kisiler 
	MODIFY dogumtarihi int(4) UNSIGNED NOT NULL,
	MODIFY sitemizineredenduydunuz int(7) UNSIGNED NOT NULL  
	");  // Birden fazla yapı da değiştirilebilir. (Isim haricinde sadece sütun yapısını günceller.)
		if($Sorgu){
			echo "Sütun yapısı güncellendi.";
		}else{
			echo "Sorgu Hatası";
		}
	
	
	$VeritabaniBaglantisi 			= null;
	?>
</body>
</html>