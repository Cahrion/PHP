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
		explode() 	= Düz bir metni belirtilecek olan ayraca göre parçalayarak yeni bir dizi oluşturmak için kullanılır.
	*/
	
	$Deger 		= "Fenerbahçe,Beşiktaş,Galatasaray,Trabzonspor,Bursaspor,Başakşehir";
	
	$Sonuc 		= explode(",", $Deger, -4); // (-) kaç değer varsa o kadar sondan siler.
	
	echo "Metnin ilk hali: " . $Deger;
	
	echo "<pre>";
	print_r($Sonuc);
	echo "</pre>";
	?>
</body>
</html>