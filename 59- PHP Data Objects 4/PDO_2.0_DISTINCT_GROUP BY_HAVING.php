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
		DISTINCT 	= MySQL sunucusundaki database içerisinde bulunan herhangi bir tablonun verilerini okuma işlemi sırasında belirtilecek olan sütuna / sütunlara ait tekrar eden verilerin sadece ilkini işleme dahil ederek diğerlerinin işlem dışında bırakılmasını sağlamak için kullanılır.
		GROUP BY 	= MySQL sunucusundaki database içerisinde bulunan herhangi bir tablonun verilerini okuma işlemi sırasında belirtilecek olan sütuna / sütunlara ait tekrar eden verilerin sadece ilkini işleme dahil ederek diğerlerinin işlem dışında bırakılmasını gruplandırılmasını sağlamak için kullanılır.
		HAVING	 	= MySQL sunucusundaki database içerisinde bulunan herhangi bir tablonun verilerini okuma işlemi sırasında belirtilecek olan sütuna / sütunlara ait tekrar eden verilerin GROUP BY ifade ile gruplandırılması sırasında koşul / koşullar tanımlamak / belirtmek için kullanılır.
	*/
	
	try{
		$VeritabaniBaglantisi 	= new PDO("mysql:host=localhost:3307;dbname=cahrion;charset=utf8", "root", "");
	}catch(PDOException $Hata){
		die("Bağlantı Hatası: " . $Hata->getMessage());
	}
	
	$Sorgu 	= $VeritabaniBaglantisi->query("SELECT DISTINCT sehir FROM kayitlar", PDO::FETCH_ASSOC); // aynı olanları bir defaya çevirir.
		if($Sorgu){
			$KayitSayisi 	= $Sorgu->rowCount();
			if($KayitSayisi > 0){
				foreach($Sorgu as $Satirlar){
					echo $Satirlar["sehir"] . "<br>";	
				}
			}else{
				echo "Kayit Bulunamadı";
			}
				
		}else{
			echo "Sorgu Hatası";
		}
			
		
	
	$VeritabaniBaglantisi 		= null;
	?>
</body>
</html>