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
	
	@$VeritabaniBaglantisi 		= mysqli_connect("localhost:3307", "root", "", "cahrion");
	if(mysqli_connect_errno()){
		die("Bağlantı Hatası.");
	}
	mysqli_set_charset($VeritabaniBaglantisi ,"UTF8");
	
	$Sorgu 		= mysqli_query($VeritabaniBaglantisi, "SELECT * FROM uyeler ORDER BY isim ASC"); // ASC => A'dan Z'ye sıralar (isim sütunundakileri sıralar. ) 
		if($Sorgu){
			while($Kayit = mysqli_fetch_assoc($Sorgu)){
				echo "ID değeri: " . $Kayit["id"] . "<br>";
				echo "Isim değeri: " . $Kayit["isim"] . "<br>";
				echo "Yas değeri: " . $Kayit["yas"] . "<br>";
				echo "Beceleriler değeri: " . $Kayit["beceriler"] . "<br>";
				echo "Beceri Seviyeleri değeri: " . $Kayit["beceriseviyeleri"] . "<br><br>";
			}
		}else{
			echo "Sorgu Hatası";
		}
	
		
 	mysqli_close($VeritabaniBaglantisi);
	?>
</body>
</html>