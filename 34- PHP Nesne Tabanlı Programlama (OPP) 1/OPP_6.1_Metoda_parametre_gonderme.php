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
	
	class Deney{
		public function Yaz($Isim="Icabi", $Soyisim="Kırgız"){
			echo "Merhaba " . $Isim . " " . $Soyisim . " Nasılsın ?";
		}
	}
	
	$Islem 				= new Deney;
	$Islem->Yaz("Ahmet");
	
	
	
	?>
</body>
</html>