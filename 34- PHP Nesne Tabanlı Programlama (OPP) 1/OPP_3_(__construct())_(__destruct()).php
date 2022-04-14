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
		__construct() 		= Belirtilecek olan sınıfa, yapıcı metod tanımlamak için kullanılır.
		__destruct() 		= Belirtilecek olan sınıfa, yapıcı metod tanımlamak için kullanılır.
		// ÖNEMLİ UNUTULMAMALI !
	*/
	
	class Deney{
		public function __construct(){ // başlangıçta çalışır.
			echo "Sınıf çalıştı ve yapıcı metod devreye girdi." . "<br>";
		}
		public function __destruct(){ // çıkışta çalışır.
			echo "Sınıf içerisindeki tüm özellik ve metotların çalışması tamamlandığı için yıkıcı metod devreye girdi.";
		}
		
		public $Isim 		= "Icabi"; 
		public $Soyisim 	= "Kırgız"; 
		
		public function Yaz(){
			$Metin 	=  "PHP eğitim seti";
			return $Metin;
		}
		
	}
	
	$Islem 		= new Deney;
	echo $Islem->Isim . " " . $Islem->Soyisim . " " . $Islem->Yaz() . "<br>";
	
	?>
</body>
</html>