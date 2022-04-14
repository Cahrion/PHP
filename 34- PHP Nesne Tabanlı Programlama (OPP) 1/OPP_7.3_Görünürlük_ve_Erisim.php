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
		public $Isim	= "Icabi";
		public const SOYISIM	= "Kırgız";
		
		public function Bilgi(){
			$Metin = $this->Isim . " " . self::SOYISIM . "<br> A'dan Z'ye PHP Görsel Eğitim Seti.";
			// Ozellik veya Ozellikler değişken halde metod içine aktarılacaksa "$this" parametresi
			// Ozellik veya Ozellikler sabit halde metod içine aktarılacaksa "self::" parametresi
			return $Metin;
		}
	}
	
	$Islem 		= new Bir;
	
	echo "Isim Soyisim: " . $Islem->Bilgi(); 
	
	
	?>
</body>
</html>