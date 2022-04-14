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
		
		private $Isim	= "Icabi";		
		private const SOYISIM	= "Kırgız";
		
	}
	
	class Iki extends Bir{ // private değişkenlere erişim sağlanamaz.
		
		public function Bilgi(){ 
			$Metin = "Isim Soyisim: " . $this->Isim . " " . self::SOYISIM . "<br> A'dan Z'ye PHP Görsel Eğitim Seti.";
			return $Metin;
		}
	}
	
	$Islem 		= new Iki;
	echo $Islem-> Bilgi(); 
	
	
	?>
</body>
</html>