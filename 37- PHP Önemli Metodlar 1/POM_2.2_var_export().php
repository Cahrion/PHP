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
		var_export() 	= Belirtilecek olan herhangi bir değişkenin çözümlenebilir gösterimini bularak bulduğu gösterimin ekran çıktılanmasını sağlamak için kullanılır.
	*/
	
	class Deney{
		public $Isim 		= "Icabi";
		public $Soyisim 	= "Kırgız";
		
		public function Bilgiler(){
			$Tarih 	= 2002;
			$Sehir 	= "Istanbul";
			return $Tarih . "<br>" . $Sehir;
		}
	}
	
	$Sonuc 	= new Deney;
	
	echo $Sonuc->Isim . " " . $Sonuc->Soyisim . "<br>";
	echo $Sonuc->Bilgiler() . "<br><br><br><br><br>";
	
	var_export($Sonuc);
	echo "<br>";
	var_export($Sonuc->Bilgiler());

	
	
	?>
</body>
</html>