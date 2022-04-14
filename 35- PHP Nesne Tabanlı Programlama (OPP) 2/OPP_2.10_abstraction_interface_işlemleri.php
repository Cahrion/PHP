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
		abstract	=	Belirtilecek olan herhangi bir sınıfı, soyut sınıf haline dönüştürmek için kullanılır.
		interface	=	Belirtilecek olan herhangi bir sınıfı, soyut arayüz sınıfı haline dönüştürmek için kullanılır.
		implements	=	Daha önceden oluşturulmuş olan herhang bir arayüz sınıfını, ilgili sınıfa tanımlamak / uygulamak için kullanılır.
		
		abstract	=
			1. Soyut metodlar içerebilir.
			2. Normal metodlar içerebilir.
			3. Özellikler içerebilir.
			4. Sabitler içerebilir.
			5. public, private veya protected tanımlanabilir.
			6. Herhangi bir sınıf sadece tek bir abstract'tan türeyebilir.
			
		interface	=
			1. Soyut metodlar içerebilir.
			2. public görünürlüğüne sahip olmak kaydıyla Normal metodlar içerebilir.
			3. Sabitler içerebilir.
			4. Herhangi bir sınıfda birden fazla interface (arayüz) kullanılabilir.
	*/
	
	interface CRUD{ 
		public function Olusturma($TabloDegeri, $ID); 
		public function Okuma($TabloDegeri, $ID); 
		public function Duzenleme($TabloDegeri, $ID); 
		public function Silme($TabloDegeri, $ID); 
	}	
	abstract class Tema implements CRUD{// interface özelliğini abstract'a ekleyebilir sonrasında bu abstract'ı class'a verebilirsiniz.
		abstract public function HeaderAlani($ArkaPlanRengi, $HeaderLogosu, $HeaderBanneri); 
		public function Olusturma($TabloDegeri, $ID){
			
		} 
		public function Okuma($TabloDegeri, $ID){
			
		} 
		public function Duzenleme($TabloDegeri, $ID){
			
		} 
		public function Silme($TabloDegeri, $ID){
			
		} 
	}
	class UstAlan extends Tema{
		public function HeaderAlani($ArkaPlanRengi, $HeaderLogosu, $HeaderBanneri){
		}
	}	
	?>
</body>
</html>