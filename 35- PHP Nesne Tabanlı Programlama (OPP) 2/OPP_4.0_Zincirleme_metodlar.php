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
	
	class Bicimlendir{
		
		public $Yazi;
		public $StilRengi;
		
		public function Metin($MetinDegeri){
			$this ->Yazi	= $MetinDegeri;
			return $this;
			
		}
		public function Renk($RenkDegeri){
			
			$this->Stil 	= "color:" . $RenkDegeri . ";";
			return $this;
			
		}
		public function Boyut($BoyutDegeri){
			
			$this->Stil  	.= "font-size:" . $BoyutDegeri . ";";
			return $this;
		}
		public function Olustur(){
			return "<div style='" . $this ->Stil . "'>" . $this ->Yazi . "</div>"; 
		}
		
	}

	$Sonuc 	= new Bicimlendir;
	
	// Çalışması için her bir geri dönmeyen methodun "return $this;"" şeklinde tanımlanması gerekir.
	echo $Sonuc->Metin("Icabi Kırgız")->Renk("green")->Boyut("20px")->Olustur(); 
	echo $Sonuc->Metin("Icabi Kırgız")->Renk("blue")->Boyut("40px")->Olustur(); 
	echo $Sonuc->Metin("Icabi Kırgız")->Renk("red")->Boyut("80px")->Olustur(); 

	?>
</body>
</html>