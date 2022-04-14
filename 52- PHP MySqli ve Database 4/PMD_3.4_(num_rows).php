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
	 
		mysqli_num_rows()	= MySQL sunucusudaki database içerisinde bulunan herhangi bir tablonun toplam kayıt sayısını elde etmek için kullanılır.
		num_rows			= MySQL sunucusudaki database içerisinde bulunan herhangi bir tablonun nesnesel yapı ile toplam kayıt sayısını elde etmek için kullanılır.
	
	*/
	
	// Nesne yapısıyla da çalışabilir. (Bütün diğer yapılarda da çalışacaktır.)
	
	@$VeritabaniBaglantisi 	= new mysqli("localhost:3307", "root", "", "cahrion");
	if($VeritabaniBaglantisi->connect_errno){
		die("Bağlantı Hatası: " . $VeritabaniBaglantisi->connect_error);
	}
	$VeritabaniBaglantisi->set_charset("UTF8");
	
	$Sorgu 	= $VeritabaniBaglantisi->query("SELECT * FROM uyeler WHERE yas=50");
		if($Sorgu){
			$KayitSayisi 	= $Sorgu->num_rows;
			
			echo "'uyeler' tablosu içerisinde bulunan kayıt sayısı: " . $KayitSayisi . "<br><br>"; // Sadece getirelenlerin sayısını alır.
			
			if($KayitSayisi>0){ // Kayit sıfır olma ihtimalinden dolayı ek olarak güvenceye alıp boşa veri çağırma işlemlerini engelleyebiliriz.
				while($Kayitlar = $Sorgu->fetch_assoc()){
					echo "Kayıt id: " . $Kayitlar["id"] . "<br>";
					echo "Kayıt İsim: " . $Kayitlar["isim"] . "<br>";
					echo "Kayıt Yas: " . $Kayitlar["yas"] . "<br>";
					echo "Kayıt Beceriler: " . $Kayitlar["beceriler"] . "<br>";
					echo "Kayıt Beceri Seviyeleri: " . $Kayitlar["beceriseviyeleri"] . "<br><br>";
				}
			}else{
				echo "Belirtilen kriterlere uygun bir kayıt bulunamamaktadır.";
			}
			
		}else{
			echo "Sorgu Hatası";
		}
	
	$VeritabaniBaglantisi->close();
	?>
</body>
</html>