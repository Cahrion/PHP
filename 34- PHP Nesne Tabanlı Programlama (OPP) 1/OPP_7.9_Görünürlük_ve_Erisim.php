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
		public 		= Genel. Her yerden erişilebilir.
		private 	= Özel. Yanlızca sınıf içerisinden erişilebilir.
		protected 	= Korumalı. Sınıf içerisinden ve türetilen sınıflardan erişilebilir.
		
		static 		= Sabit. Sınıf içerisindek herhangi bir özellik veya metoda sınıf çağırılmadan erişilebilir.
		
		$this		= Bu sınıfda şeklinde sınıfı işaret etmek için kullanılır.
		self::		= Kendi sınıfımda şeklinde sınıfı işaret etmek için kullanılır.
		parent::	= Ebeveyn sınıfında şeklinde sınıfı işaret etmek için kullanılır.
	
	
	*/
	
	
	class Bir{
		
		public function Bilgi(){ 
			$Metin 		= "PHP";
			return $Metin;
		}
		
	}
	
	class Iki extends Bir{ 
		public $Sayi 	= 1;
		public function Bilgi(){ 
			$Metin 		= "JS";
			echo $Metin;
			return $this->Bilgi(); // HATA! SONSUZ DÖNGÜYE GİRER.
		}
	}
	
	$Islem 		= new Iki;
	echo $Islem-> Bilgi(); 
	
	
	?>
</body>
</html>