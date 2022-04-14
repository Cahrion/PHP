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
	class Iki extends Bir{ 	// Birdeki metodları ve özellikleri alabilir.
		public function Deneme(){
			return "Umut";
		}
	}
	class Uc extends Iki{  	// Birdeki ve Ikideki metodları ve özellikleri alabilir.
		public function Deneme(){
			return "Icabi";
		}
	}
	class Dort extends Uc{ 	// Birdeki, Ikideki ve Ucteki metodları ve özellikleri alabilir.
		public function Deneme(){
			return "Aslı";
		}
	}
	class Bes extends Dort{	// Birdeki, Ikideki, Ucteki ve Dortteki metodları ve özellikleri alabilir.
		public function Deneme(){
			return "Yakup";
		}
		
		public function Dizi(){
			return ["Birinci" => Bir::Deneme(), "Ikinci" => Iki::Deneme(), "Ucuncu" => Uc::Deneme(), "Dorduncu" => Dort::Deneme(), "Besinci" => Bes::Deneme()];
			// "extends" parametresiyle olan veri istenilen "class adı" + "::" + "Metod adı" şeklinde yazılır.
		}
	}
	
	$Sonuc 	= new Bes;
	
	echo "<pre>";
	print_r($Sonuc->Dizi());
	echo "</pre>";
	
	
	?>
</body>
</html>