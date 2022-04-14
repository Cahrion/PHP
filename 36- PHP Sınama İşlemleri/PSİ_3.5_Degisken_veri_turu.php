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
		is_string() 	= Belirtilece kolan değişken içeriğinin string (alfanumerik) veri türünde olup olmadığını sınamak için kullanılır. Işlem sonucu daima boolean (mantıksal) veri türünde döner.
		is_int() 		= Belirtilece kolan değişken içeriğinin integer (tamsayı) veri türünde olup olmadığını sınamak için kullanılır. Işlem sonucu daima boolean (mantıksal) veri türünde döner.
		is_integer() 	= Belirtilece kolan değişken içeriğinin integer (tamsayı) veri türünde olup olmadığını sınamak için kullanılır. Işlem sonucu daima boolean (mantıksal) veri türünde döner.
		is_long() 		= Belirtilece kolan değişken içeriğinin integer (tamsayı) veri türünde olup olmadığını sınamak için kullanılır. Işlem sonucu daima boolean (mantıksal) veri türünde döner.
		is_double() 	= Belirtilece kolan değişken içeriğinin double / float (ondalıklı sayı) veri türünde olup olmadığını sınamak için kullanılır. Işlem sonucu daima boolean (mantıksal) veri türünde döner.
		is_float() 		= Belirtilece kolan değişken içeriğinin double / float (ondalıklı sayı) veri türünde olup olmadığını sınamak için kullanılır. Işlem sonucu daima boolean (mantıksal) veri türünde döner.
		is_real() 		= Belirtilece kolan değişken içeriğinin double / float (ondalıklı sayı) veri türünde olup olmadığını sınamak için kullanılır. Işlem sonucu daima boolean (mantıksal) veri türünde döner.
		is_numeric() 	= Belirtilece kolan değişken içeriğinin numeric (sayısal) veri türünlerinden (integer, double, float) biri olup olmadığını sınamak için kullanılır. Işlem sonucu daima boolean (mantıksal) veri türünde döner.
		is_bool() 		= Belirtilece kolan değişken içeriğinin boolean (mantıksal) veri türünde olup olmadığını sınamak için kullanılır. Işlem sonucu daima boolean (mantıksal) veri türünde döner.
		is_null() 		= Belirtilece kolan değişken içeriğinin null (boş / değeri olmayan) veri türünde olup olmadığını sınamak için kullanılır. Işlem sonucu daima boolean (mantıksal) veri türünde döner.
		is_resource() 	= Belirtilece kolan değişken içeriğinin resource (kaynak) veri türünde olup olmadığını sınamak için kullanılır. Işlem sonucu daima boolean (mantıksal) veri türünde döner.
		is_callable() 	= Belirtilece kolan değişken içeriğinin callable (geri çağırımlar / geri çağrılabilenler) veri türünde olup olmadığını sınamak için kullanılır. Işlem sonucu daima boolean (mantıksal) veri türünde döner.
		is_array() 		= Belirtilece kolan değişken içeriğinin array (dizi) veri türünde olup olmadığını sınamak için kullanılır. Işlem sonucu daima boolean (mantıksal) veri türünde döner.
		is_object() 	= Belirtilece kolan değişken içeriğinin object (nesne) veri türünde olup olmadığını sınamak için kullanılır. Işlem sonucu daima boolean (mantıksal) veri türünde döner.
	*/
	
	$Deger 	= ""; // Boş string veri null karakter değildir.
	
	if(is_null($Deger)){ // Değeri olmayan
		echo '$Deger adındaki değişkenin içeriği null (boş / değeri olmayan) içeriktir.';
	}else{
		echo '$Deger adındaki değişkenin içeriği null (boş / değeri olmayan) içerik değildir.';
	}
	
	
	?>
</body>
</html>