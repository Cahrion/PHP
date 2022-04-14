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
	
	@$VeritabaniBaglantisi = mysqli_connect("localhost:3307", "root", "", "cahrion");
	if(mysqli_connect_errno()){
		echo "Baglanti hatası <br>";
		echo "Hata içeriği: " . mysqli_connect_error();
		die();
	}
	echo "Bağlanti sağlandı. <br>";
	mysqli_set_charset($VeritabaniBaglantisi, "UTF8");
	
	$Sorgu 	= mysqli_query($VeritabaniBaglantisi, "ALTER TABLE uyeler ADD soyisim varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL AFTER id"); // AFTER yapısı önüne gelen sütundan ("id") sonra gelir.
	
	if($Sorgu){
		echo "Sütun Eklendi.";
	}else{
		echo "Sorgu Hatası";
	}
	
	mysqli_close($VeritabaniBaglantisi);
	?>
</body>
</html>