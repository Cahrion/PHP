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
	
	trait KisiBir{		
		public function Goster(){
			$IsimSoyisim 	= "Volkan Alakent";
			return $IsimSoyisim;
		}

	}
	trait KisiIki{
		public function Goster(){
			$IsimSoyisim 	= "Onur Tatlı";
			return $IsimSoyisim;
		}
	}
	
	
	class Deney{		
		use KisiBir, KisiIki {KisiBir::Goster insteadof KisiIki;} 
 		// KisiBir'deki method KisiIki'deki methodun üstüne yazılır ve seçim yapılırsa KisiBir'in methodu çalışır.
	}	
	
	$Sonuc 	= new Deney;
	echo $Sonuc->Goster();
	
	?>
</body>
</html>