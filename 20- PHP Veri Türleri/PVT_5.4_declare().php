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
	
	function Deney(array $Deger):string{ 
		
		$Islem 	= implode("<br>", $Deger);
		return $Islem;
		
	}
	
	$Ornek 	= array("Icabi", "Kırgız", 19);
	
	$Sonuc 	= Deney($Ornek);
	
		echo $Sonuc;
	
	?>
</body>
</html>