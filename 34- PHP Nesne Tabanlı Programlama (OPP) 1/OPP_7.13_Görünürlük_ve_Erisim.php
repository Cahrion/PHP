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
	
	class Islem{
		
		public static $Isim 		= "Icabi";  // İki Gösterimde kabul görülür.
		static public $Soyisim 		= "Kırgız"; // İki Gösterimde kabul görülür.
		static public const YAS 	= "19"; // const yapısında çalışmaz
	
	}
	
	echo Islem::$Isim . "<br>";  	// Static yapısı class çalıştırılmadan içindeki değerleri alabilmemizi sağlar.
	echo Islem::$Soyisim . "<br>";	// Static yapısı class çalıştırılmadan içindeki değerleri alabilmemizi sağlar.
	echo Islem::YAS;				// Static yapısı const parametresinde çalışmaz.
	
	?>
</body>
</html>