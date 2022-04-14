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
		LIMIT 		=  MySQL sunucusundaki database içerisinde bulunan herhangi bir tablonun işlem esnasında tüm verilerini işlemek yerine sadece belirtilen adet veya aralıklar kadar işlemek istenildiğini belirtmek için kullanılır.
		ORDER BY 	=  MySQL sunucusundaki database içerisinde bulunan herhangi bir tablonun verilerine işlem esnasında hangi sıra veya sıralar dahilinde erişilmek istediğini belirtmek için kullanılır.
	*/	
	try{
		$VeritabaniBaglantisi 	= new PDO("mysql:host=localhost:3307;dbname=cahrion;charsety=utf8", "root", "");
	}catch(PDOException $Hata){
		die("Bağlantı Hatası: " . $Hata);
	}
	
	$Sorgu 	= $VeritabaniBaglantisi->query("SELECT * FROM uyeler ORDER BY yas ASC", PDO::FETCH_ASSOC); // yas yapısını (A'dan Z'ye) sıralar numerik ise (küçükten büyüğe) sıralar
	if($Sorgu){
		foreach($Sorgu as $Kayitlar){
			echo "ID: " . $Kayitlar["id"] . " | "; 
			echo $Kayitlar["isim"] . " | "; 
			echo $Kayitlar["yas"] . " | "; 
			echo $Kayitlar["beceriler"] . " | "; 
			echo $Kayitlar["beceriseviyeleri"] . " <br> "; 
		}
		
		
	}else{
		echo "Sorgu Hatası";
	}
	
	
	
	$VeritabaniBaglantisi 		= null;
	?>
</body>
</html>