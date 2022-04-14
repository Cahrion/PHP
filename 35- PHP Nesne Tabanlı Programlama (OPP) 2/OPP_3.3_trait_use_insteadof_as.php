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
		trait 		= Sınıflar için özellik ve metod gruplarının oluşturulması için kullanılır.
		use 		= Daha önceden tanımlanmış olan herhangi bir özellik veya metod grubunu, ilgili sınıfa tanımlamak / uygulamak için kullanılır.
		insteadof	= Sınıf için tanımlanmış olan özellik ve metod gruplarında tercih / seçim işlemleri için kullanılır.
		as 			= Sınıf için tanımlanmış olan özellik ve metod gruplarında, metoda takma isim belirleme veya görünürlük atama işlemleri için kullnaılır.
	*/
	
	trait AdSoyad{
		public $Isim 		= "Icabi";
		public $Soyisim 	= "Kırgız"; 

	}
	trait Bilgi{
		use AdSoyad; // Burada "use" ile diğer trait yapısı gelebilir ve eğer bu trait çağrılırsa o trait kodlarıda çalışır.
		public function Tanimlar(){
			$Metin 		= "A'dan Z'ye PHP Görsel Eğitim Seti";
			return $Metin;
		}
	}
	
	
	class Deney{		
		use Bilgi; // use Bilgi, AdSoyad; yapısı gibi işler.
	}	
	
	$Sonuc 	= new Deney;
	
	echo $Sonuc->Isim . " ";
	echo $Sonuc->Soyisim . " ";
	echo $Sonuc->Tanimlar();
	
	?>
</body>
</html>