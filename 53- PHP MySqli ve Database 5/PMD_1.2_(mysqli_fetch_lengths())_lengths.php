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
	 
		mysqli_fetch_lengths() 	= MySQL suncuusundaki database içerisindeki bulunan herhangi bir tablonun herhangi bir satırındaki tüm sütunlarda bulunan verilerin ayrı ayrı toplam karakter sayısını bulmak için kullanılır.
		lengths					= MySQL suncuusundaki database içerisindeki bulunan herhangi bir tablonun herhangi bir satırındaki tüm sütunlarda bulunan verilerin nesnesel yapı ile ayrı ayrı toplam karakter sayısını bulmak için kullanılır.
		
	*/
	
	// Nesne yapısıyla beraber de yapılabilir (Diğer yapılarda yapılabilir.)
	
	@$VeritabaniBaglantisi 		= new mysqli("localhost:3307", "root", "", "cahrion");
	if($VeritabaniBaglantisi->connect_errno){
		die("Bağlantı Hatası: " . $VeritabaniBaglantisi->connect_error);
	}
	$VeritabaniBaglantisi->set_charset("UTF8");
	
	$Sorgu 	= $VeritabaniBaglantisi->query("SELECT * FROM uyeler");
		if($Sorgu){
			$KayitSayisi 	= $Sorgu->num_rows;
			if($KayitSayisi>0){
				while($Kayitlar = $Sorgu->fetch_assoc()){
					$SutunKarakterSayisi 	= $Sorgu->lengths;
					
					echo "ID değeri: " . $Kayitlar["id"] . " | Karakter Uzunluğu: " . $SutunKarakterSayisi[0] . "<br>";
					echo "Isim değeri: " . $Kayitlar["isim"] . " | Karakter Uzunluğu: " . $SutunKarakterSayisi[1] . "<br>";
					echo "Yas değeri: " . $Kayitlar["yas"] . " | Karakter Uzunluğu: " . $SutunKarakterSayisi[2] . "<br>";
					echo "Beceriler değeri: " . $Kayitlar["beceriler"] . " | Karakter Uzunluğu: " . $SutunKarakterSayisi[3] . "<br>";
					echo "Beceri Seviyeleri değeri: " . $Kayitlar["beceriseviyeleri"] . " | Karakter Uzunluğu: " . $SutunKarakterSayisi[4] . "<br><br>";
					
				}
			}else{
				echo "Kayıt Bulunamadı.";
			}
		}else{
			echo "Sorgu Hatası";
		}
	
	$VeritabaniBaglantisi->close();
	?>
</body>
</html>