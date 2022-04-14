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
	
	@$VeritabaniBaglantisi 	= mysqli_connect("localhost:3307", "root", "", "cahrion");
	if(mysqli_connect_errno()){
		die("Bağlantı Hatası: " . mysqli_connect_error());
	}
	mysqli_set_charset($VeritabaniBaglantisi, "UTF8");
	
	$Sorgu 	= mysqli_query($VeritabaniBaglantisi, "SELECT * FROM uyeler WHERE beceriler LIKE ('%JavaScript%')");
		if($Sorgu){
			$KayitSayisi 	= mysqli_num_rows($Sorgu);
			
			echo "'uyeler' tablosu içerisinde bulunan kayıt sayısı: " . $KayitSayisi . "<br><br>"; // Sadece getirelenlerin sayısını alır.
			
			while($Kayitlar = mysqli_fetch_assoc($Sorgu)){
				echo "Kayıt id: " . $Kayitlar["id"] . "<br>";
				echo "Kayıt İsim: " . $Kayitlar["isim"] . "<br>";
				echo "Kayıt Yas: " . $Kayitlar["yas"] . "<br>";
				echo "Kayıt Beceriler: " . $Kayitlar["beceriler"] . "<br>";
				echo "Kayıt Beceri Seviyeleri: " . $Kayitlar["beceriseviyeleri"] . "<br><br>";
			}
		}else{
			echo "Sorgu Hatası";
		}
	
	mysqli_close($VeritabaniBaglantisi);
	?>
</body>
</html>