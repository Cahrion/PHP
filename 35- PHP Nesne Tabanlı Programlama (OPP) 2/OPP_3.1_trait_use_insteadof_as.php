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
	
	trait Kisi{
		public $Isim 			= "Icabi";
		public const SOYISIM 	= "Kırgız"; 
		// trait'ler tüm sınıf yapısının özelliklerine sahiptir lakin "sabit" (const) verileri hariç bu yapılar da "sabit" (const) yapıları çalışmaz hata döndürür.
		
		public function Tanimlar(){
			$Metin 		= "A'dan Z'ye PHP Görsel Eğitim Seti";
			return $Metin;
		}
	}
	
	
	class Deney{		
		use Kisi;
	}	
	
	$Sonuc 	= new Deney;
	
	echo $Sonuc->Isim . " ";
	echo Deney::SOYISIM . " ";
	echo $Sonuc->Tanimlar();
	
	?>
</body>
</html>