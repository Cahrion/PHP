<?php
	declare(strict_types=1);
?>
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
			declare(strict_types=1)	= Kodlama dosyası içerisindeki tüm kodlamaların kural yapısını belirler. (En üst)	
		*/
	
	function Deney(string $Isim, string $Soyisim, int $Yas):array{ // Geri dönüş veri türü dayatması
		
		$Birlestir 	= $Isim . " " . $Soyisim . "<br>Yaş: " . $Yas;
		
		return $Birlestir; // Hata ! Veri liste (array) değil
		
	}
	
	$Sonuc 	= Deney("Icabi", "Kırgız", 19);
	
		echo $Sonuc;
	
	?>
</body>
</html>