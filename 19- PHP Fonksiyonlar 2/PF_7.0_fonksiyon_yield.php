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
			yield 	= Fonksiyonlardan değer döndürmek için kullanılır. (Fonksiyon durmaz.)
		*/
	
	function Islem($Baslangic, $Bitis){
		$Sayilar 	= array();
		
		while($Baslangic <= $Bitis){
			$Sayilar[] 	= $Baslangic;
			$Baslangic++;
		}
		return $Sayilar;
		echo "Bu ifade Yazacak mı ?";
	}
	$Sonuc 	= Islem(1, 5000);
	
	foreach($Sonuc as $Deger){ 
		echo $Deger . " ";
	}
	
	echo "<br><br>";
	
	$BellekTuketimi 	= memory_get_usage();
	echo "Işlem esnasında tüketilen bellek miktarı: " . $BellekTuketimi . " byte";
	
	?>
</body>
</html>