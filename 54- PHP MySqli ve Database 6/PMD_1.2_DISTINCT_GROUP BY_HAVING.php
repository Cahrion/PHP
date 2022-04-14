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
	
	// Nesne yapısıyla da yapılabilir. (Her ikiside olabilir.)
	
	@$VeritabaniBaglantisi 	= new mysqli("localhost:3307", "root", "", "cahrion");
	if($VeritabaniBaglantisi->connect_errno){
		die("Bağlantı Hatası: " . $VeritabaniBaglantisi->connect_error);
	}
	$VeritabaniBaglantisi->set_charset("UTF8");
	
	$SorguBir 	= $VeritabaniBaglantisi->query("SELECT DISTINCT sehir FROM kayitlar"); // Sadece marjinal olanları tekil alır aynı olanlardan bir tanesini alır.
	if($SorguBir){
		$KayitSayisi 	= $SorguBir->num_rows;
		if($KayitSayisi>0){
			echo "Üyelere Ait Şehirler ve Kayıtları" . "<br><br>";
			while($Kayitlar=$SorguBir->fetch_assoc()){
				echo $Kayitlar["sehir"] . ":<br>";
				
				$SorguIki 	= $VeritabaniBaglantisi->query("SELECT * FROM kayitlar WHERE sehir='" . $Kayitlar["sehir"] . "'");
				if($SorguIki){
					$KayitSayisiIki 	= $SorguIki->num_rows;
					if($KayitSayisiIki>0){
						while($KayitlarIki=$SorguIki->fetch_assoc()){
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
	
	$VeritabaniBaglantisi->close();
	
	?>
</body>
</html>