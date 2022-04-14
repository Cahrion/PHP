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
	
	class Dersler{
		
		public function PHP(){
			$Icerik 	= "A'dan Z'ye PHP7 Eğitim Seti <br><br>";
			echo $Icerik;
		}
		
		public function JS(){
			$Icerik 	= "A'dan Z'ye JavaScript Eğitim Seti<br><br>";
			echo $Icerik;
		}
		
		public function CSS(){
			$Icerik 	= "A'dan Z'ye CSS3 Eğitim Seti<br><br>";
			echo $Icerik;
		}
	}
	
	class Egitmenler extends Dersler{ 
		public function PHP(){
			$Kim 		= "Volkan Alakent<br>";
			echo $Kim;
			parent::PHP();
		}
		
		public function JS(){
			$Kim 		= "Onur Tatlı<br>";
			echo $Kim;
			parent::JS();
		}
		
		public function CSS(){
			$Kim 		= "Ümit Okudan<br>";
			echo $Kim;
			parent::CSS();
		}
	}
	
	$Islem 		= new Egitmenler;
	$Islem -> PHP(); 
	$Islem -> JS(); 
	$Islem -> CSS(); 
	
	?>
</body>
</html>