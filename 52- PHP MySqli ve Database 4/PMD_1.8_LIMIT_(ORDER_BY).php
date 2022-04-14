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
	 
		LIMIT 		= MySQL sunucusundaki database içerisinde bulunan herhangi bir tablonun işlem esnasında tüm verilerini işlemek yerine sadece belirtilen adet veya aralıklar kadar işlemek istenildiğini belirtmek için kullanılır.
		ORDER BY 	= MySQL sunucusundaki database içerisinde bulunan herhangi bir tablonun verilerine işlem esnasında hangi sıra / sıralar dahilinde erişilmek istenildiğini belirtmek için kullanılır.
	
	*/
	
	// Nesne yapısıyla yapılabilir (Diğer yapılarda yapılabilir lakin biz bir örnek verelim.)
	
	@$VeritabaniBaglantisi 		= new mysqli("localhost:3307", "root", "", "cahrion");
	if($VeritabaniBaglantisi->connect_errno){
		die("Bağlantı Hatası.");
	}
	$VeritabaniBaglantisi->set_charset("UTF8");
	
	$Sorgu 		= $VeritabaniBaglantisi->query("SELECT * FROM uyeler ORDER BY yas ASC, isim ASC"); // yas verisi küçükten büyüğe sıralanırken aynı yaş verisine sahip kişiler isim verisinin a'dan z'ye sırasına göre sıralanır. 
		if($Sorgu){
			while($Kayit = $Sorgu->fetch_assoc()){
				echo "ID değeri: " . $Kayit["id"] . "<br>";
				echo "Isim değeri: " . $Kayit["isim"] . "<br>";
				echo "Yas değeri: " . $Kayit["yas"] . "<br>";
				echo "Beceleriler değeri: " . $Kayit["beceriler"] . "<br>";
				echo "Beceri Seviyeleri değeri: " . $Kayit["beceriseviyeleri"] . "<br><br>";
			}
		}else{
			echo "Sorgu Hatası";
		}
	
		
 	$VeritabaniBaglantisi->close();
	?>
</body>
</html>