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
	class Islemler{
		public $IsimSoyisim;
		public $AylikGelir;
		public $AylikGider;
		public $NetKazanilan;
		public $YillikNetKazanilan;
		
		public function IsimGoster($AdSoyad){
			$this->IsimSoyisim 		= $AdSoyad;
		}
		public function GelirGoster($GelirTutari){
			$this->AylikGelir 		= $GelirTutari;
		}
		public function GiderGoster($GiderTutari){
			$this->AylikGider 		= $GiderTutari;
		}
		public function GelirGiderHesaplama(){
			$this->NetKazanilan 	= $this->AylikGelir - $this->AylikGider;
			return $this->NetKazanilan;
		}
		public function YillikKazanilan(){
			$this->YillikNetKazanilan 	= $this->NetKazanilan * 12;
			return $this->YillikNetKazanilan;
		}
	}
	
	class ElemanlarDahili extends Islemler{ }	
	class ElemanlarHarici extends Islemler{ }
	
	$Birinci 	= new ElemanlarDahili;
	$Birinci	-> IsimGoster("Icabi Kırgız"); 
	$Birinci	-> GelirGoster(12000); 
	$Birinci	-> GiderGoster(1000); 
		echo "Icabi Kırgız isimli şahsın aylık geliri: " . $Birinci	-> GelirGiderHesaplama() . "Tl'dir<br>"; 
		echo "Icabi Kırgız isimli şahsın yıllık geliri: " . $Birinci	-> YillikKazanilan() . "Tl'dir<br><br>"; 
	
	$Ikinci 	= new ElemanlarDahili;
	$Ikinci		-> IsimGoster("Onur Tatlı"); 
	$Ikinci		-> GelirGoster(5000); 
	$Ikinci		-> GiderGoster(500); 
		echo "Onur Tatlı isimli şahsın aylık geliri: " . $Ikinci	-> GelirGiderHesaplama() . "Tl'dir<br>"; 
		echo "Onur Tatlı isimli şahsın yıllık geliri: " . $Ikinci	-> YillikKazanilan() . "Tl'dir<br><br>"; 
	
	
	$Ucuncu 	= new ElemanlarHarici;
	$Ucuncu		-> IsimGoster("Ümit Okudan"); 
	$Ucuncu		-> GelirGoster(6000); 
	$Ucuncu		-> GiderGoster(1300); 
		echo "Ümit Okudan isimli şahsın aylık geliri: " . $Ucuncu	-> GelirGiderHesaplama() . "Tl'dir<br>"; 
		echo "Ümit Okudan isimli şahsın yıllık geliri: " . $Ucuncu	-> YillikKazanilan() . "Tl'dir<br><br>"; 
	
	?>
</body>
</html>