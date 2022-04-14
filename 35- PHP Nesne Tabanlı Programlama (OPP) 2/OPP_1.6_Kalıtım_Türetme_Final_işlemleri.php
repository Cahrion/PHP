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
		extends = Bir sınıfı başka bir sınıftan türetmek istediğimiz zaman kullanılır.
		final	= En son kullanılan sınıftır ve türeyen son sınıf anlamını taşır. Ayrıca metodlar üzerinde de kullanılabilir ve final tanımlanırsa bağlı sınıflar içerisinde aynı method adı kullanılamaz.
	*/
	
	class Bir{
		public $Isim 	= "Icabi";
		public $Soyisim = "Kırgız";
		
		function Test(){
			$Birlestir 	= $this->Isim . " " . $this->Soyisim . " - A'dan Z'ye PHP Görsel Eğitim Seti";
			return $Birlestir;
		}
		
	}	
	
	class Iki extends Bir{ 
			
	}
	
	$Islem 		= new Iki;
	echo "Isim: " . $Islem->Test(); // Türenilen sınıfın metodlarıda alınabilir.
	
	?>
</body>
</html>