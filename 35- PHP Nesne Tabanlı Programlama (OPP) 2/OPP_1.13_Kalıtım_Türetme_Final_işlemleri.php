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
		public function Deneme(){
			return "Volkan";
		}
	}
	final class Iki extends Bir{ // "Final" parametresiyle türeme yaptırılmayı engellemek için uğraşılır.
		public function Deneme(){
			return "Umut";
		}
	}
	class Uc extends Iki{  		// bu parametre hata üretir. çünkü yukarıda "final" parametresi kullanıldı.
		public function Deneme(){
			return "Icabi";
		}
		public function DegerDondur(){
			$Deger 	= parent::Deneme(); 
			return $Deger;
		}
	}
	
	$Sonuc 	= new Uc;
	
	echo $Sonuc->DegerDondur();
	
	
	?>
</body>
</html>