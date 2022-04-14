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
		public function Goster(){
			$IsimSoyisim 	= "Volkan Alakent";
			return $IsimSoyisim;
		}

	}
	
	class Deney{		
		use Kisi{Kisi::Goster as Yaz;}
		// "as" metodu ile sonradan isim atanabilir ve bu sayede iki isimlede çağrılabilir.
	}	
	
	$Sonuc 	= new Deney;
	echo $Sonuc->Goster() . "<br>";
	echo $Sonuc->Yaz() . "<br>";
	
	?>
</body>
</html>