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
	/*
		fputs() metodu fwrite ile aynı işlemi yapar tekrardan yazmaya gerek bulmuyorum bu yüzden sadece bir örnekte geçiyorum.
	*/
	$Icerik 	= "Merhaba benim adım Icabi Kırgız\nBen bir PHP yazılımcısıyım.\nBu metni fputs metodu ile yazdım";
	
	$Dosya 		= "Harici/Belge.txt";  
	$DosyaAc 	= fopen($Dosya, "w"); 
	
	$Karakter 	= fputs($DosyaAc, $Icerik);
	
		echo "Yazılan Karakter Sayısı: " .$Karakter;
	
	fclose($DosyaAc);
	?>
</body>
</html>