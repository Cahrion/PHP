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
		DISTINCT	= MySQL sunucusundaki database içerisinde bulunan herhangi bir tablonun verilerini okuma işlemi sırasında belirtilecek olan sütuna / sütunlara ait tekrar eden verilerin sadece ilkini işleme dahil ederek diğerlerinin işlem dışında bırakılmasını sağlamak için kullanılır.
		GROUP BY	= MySQL sunucusundaki database içerisinde bulunan herhangi bir tablonun verilerini okuma işlemi sırasında belirtilecek olan sütuna / sütunlara ait tekrar eden verilerin gruplandırılmasını sağlamak için kullanılır.
		HAVING		= MySQL sunucusundaki database içerisinde bulunan herhangi bir tablonun verilerini okuma işlemi sırasında belirtilecek olan sütuna / sütunlara ait tekrar eden verilerin GROUP BY ifadesi ile gruplandırılması sırasında koşul / koşullar tanımlamak / belirtmek için kullanılır.
		
	*/
	
	@$VeritabaniBaglantisi 	= mysqli_connect("localhost:3307", "root", "", "cahrion");
	if(mysqli_connect_errno()){
		die("Bağlantı Hatası: " . mysqli_connect_error());
	}
	mysqli_set_charset($VeritabaniBaglantisi, "UTF8");
	
	$SorguBir 	= mysqli_query($VeritabaniBaglantisi, "SELECT DISTINCT sehir FROM kayitlar"); // Sadece marjinal olanları tekil alır aynı olanlardan bir tanesini alır.
	if($SorguBir){
		$KayitSayisi 	= mysqli_num_rows($SorguBir);
		if($KayitSayisi>0){
			echo "Üyelere Ait Şehirler ve Kayıtları" . "<br><br>";
			while($Kayitlar=mysqli_fetch_assoc($SorguBir)){
				echo $Kayitlar["sehir"] . ":<br>";
				
				$SorguIki 	= mysqli_query($VeritabaniBaglantisi, "SELECT * FROM kayitlar WHERE sehir='" . $Kayitlar["sehir"] . "'");
				if($SorguIki){
					$KayitSayisiIki 	= mysqli_num_rows($SorguIki);
					if($KayitSayisiIki>0){
						while($KayitlarIki=mysqli_fetch_assoc($SorguIki)){
							echo $KayitlarIki["adisoyadi"] . "<br>";
						}
					}else{
						echo "Kayıt Bulunamadı";
					}
					
				}else{
					echo "Sorgu Hatası";
				}
				echo "<br>";
				
			}
		}else{
			echo "Kayıt Bulunamadı";
		}
	}else{
		echo "Sorgu Hatası";
	}
	
	mysqli_close($VeritabaniBaglantisi);
	
	?>
</body>
</html>