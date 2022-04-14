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
		WHERE 	= 	MySQL sunucusundaki database içerisinde bulunan herhangi bir tablonun işlem esnasında tüm verilerini işlemek yerine sadece koşula bağlı verilern işlemek istenildiğini belirtmek için kullanılır.
	*/
	try{
		$VeritabaniBaglantisi 	= new PDO("mysql:host=localhost:3307;dbname=cahrion;charset=utf8", "root", "");
	}catch(PDOException $Hata){
		die("Bağlantı Hatası: " . $Hata);
	}
	
	$Sorgu 	= $VeritabaniBaglantisi->query("SELECT * FROM uyeler WHERE (yas=19 OR yas=40) AND beceriler LIKE '%script%'", PDO::FETCH_ASSOC);  // Parantez kullanılmazsa ilk başta AND parametresi kullanılır sonra OR yapısını kullanır bu yüzden hata çıkabilir. Parantez kullanılmalıdır.
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
	
	
	$VeritabaniBaglantisi 	= null;
	?>
</body>
</html>