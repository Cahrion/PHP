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
		function_exists() 	= Belirtilecek olan fonksiyonun varlığını sınamak için kullanılır. Işlem sonucu daima boolean (mantıksal) veri türünde döner.
		class_exists() 		= Belirtilecek olan class (sınıf) yapısının varlığını sınamak için kullanılır. Işlem sonucu daima boolean (mantıksal) veri türünde döner.
		method_exists()		= Belirtilecek olan class (sınıf) içerisinde, belirtilecek olan metodun (fonksiyonun) varlığını sınamak için kullanılır. Işlem sonucu daima boolean (mantıksal) veri türünde döner.
		property_exists() 	= Belirtilecek olan class (sınıf) içerisinde, belirtilen olan özelliğin (değişkenin) varlığını sınamak için kullanılır. Işlem sonucu daima boolean (mantıksal) veri türünde döner.
		trait_exists() 		= Belirtilecek olan class (sınıf) yapısına ait, belirtilecek olan trait'in (özelliğin) varlığını sınamak için kullanılır. Işlem sonucu daima boolean (mantıksal) veri türünde döner.
		interface_exists() 	= Belirtilecek olan class (sınıf) yapısına ait, belirtilecek olan interface'in (arayüzün) varlığını sınamak için kullanılır. Işlem sonucu daima boolean (mantıksal) veri türünde döner.
		is_subclass_of() 	= Belirtilecek olan class (sınıf) yapısından tüyen, belirtilecek olan sub class'ın (alt sınıfın / miras alan) varlığını sınamak için kullanılır. Işlem sonucu daima boolean (mantıksal) veri türünde döner.
		is_a()			 	= Belirtilecek olan class (sınıf) yapısının nesnel örneğinin varlığını sınamak için kullanılır. Işlem sonucu daima boolean (mantıksal) veri türünde döner.
	*/
	
	function Deney(){
		
	}
	if(class_exists("Deney")){ // class sorgusu
		echo '"Deney" adında bir class (sınıf) vardır.';
	}else{
		echo '"Deney" adında bir class (sınıf) yoktur.';
	}
	
	?>
</body>
</html>