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
			fwrite() 	=	Belirtilecek olan dosyaya, belirtilecek olan verileri yazmak için kullanılır. Ayrıca istenirse işlem sonucunda yazılan karakter sayısı değerini bularak, bulduğu değeri geriye döndürür.
			fputs() 	=	Belirtilecek olan dosyaya, belirtilecek olan verileri yazmak için kullanılır. Ayrıca istenirse işlem sonucunda yazılan karakter sayısı değerini bularak, bulduğu değeri geriye döndürür.
			ftruncate() =	Belirtilecek olan dosya verisinin, belirtilecek olan karakter numarasından sonraki tüm karakterleri silmek için kullanılır. Ayrıca istenirse işlem sonucunda boolean (mantıksal) veri türünde döndürmek için kullanılır.
		*/		
	
	$Icerik 	= "Merhaba benim adım Icabi Kırgız\nBen bir PHP yazılımcısıyım.";
	
	$Dosya 		= "Harici/Belge3.txt";  // Olmayan bir dosya
	$DosyaAc 	= fopen($Dosya, "a"); 
	
	fwrite($DosyaAc, $Icerik);
	
	
	fclose($DosyaAc);
	?>
</body>
</html>