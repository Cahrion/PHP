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
			scandir() 	=  Belirtilecek olan dizin içeriği kontrol ederek, ilgili dizin içerisinde bulunan tüm alt dizin ve dosya bilgilerinden (isimler ve varsa uzantılar) yeni bir dizi oluşturarak, oluşturduğu değeri geriye döndürür.
			
			glob() 		=  Belirtilecek olan dizin içeriği belirtilecek olan kalıba kontrol ederek, ilgili dizin içerisinde bulunan ve kalıpla eşleşen tüm alt dizin ve dosya bilgilerinden (isimler ve varsa uzantılar) yeni bir dizi oluşturarak, oluşturduğu değeri geriye döndürür.
			OZELLİKLER;	
				GLOB_MARK		=	Dizin içerisindeki tüm dizinleri ve dosyaları listeler. Ayrıca her dizinin sonuna "\" (ters slash) işareti ekler.
				GLOB_NOSORT		=	Dizin içerisindeki tüm dizinleri ve dosyaları listeler. Ayrıca dizinlere ve dosyalara sıralama yapmaz.
				GLOB_NOCHECK	=	Belirtilecek olan arama kalıbına göre dizin içerisindeki tüm dizinleri ve dosyaları, arama kalıbıyla eşleştirerek listeler. Ayrıca arama kalıbı ile hiçbir eşleşme sağlanmıyorsa, arama kalıbı değerini geriye döndürür.
				GLOB_ONLYDIR	=	Belirtilecek olan arama kalıbına göre dizin içerisindeki tüm dizinleri, arama kalıbı ile eşleştirerek listeler.
				GLOB_BRACE		=	Belirtilecek olan arama kalıbına göre dizin içerisindeki tüm dizinleri ve dosyaları, genişletilmiş arama kalıbı ile eşleştirerek listeler.
				GLOB_ERR		=	Belirtilecek olan arama kalıbına göre dizin içerisindeki tüm dizinleri ve dosyaları, arama kalıbı ile eşleştirerek listeler. Ayrıca listeleme işlemi sırasında herhangi bir hatayla karşılaşılacak olur ise işlem durdurulur.
				ORNEGİN;
					Okunmayan dizinler vb. gibi
		*/
			
	$Dizin 			= "*"; 
	
	$Listele 		= glob($Dizin, GLOB_BRACE); // Genişletilmiş arama kalıbı yapar.
		echo "(*) parametresi ve GLOB_BRACE parametresi";
		echo "<pre>";
		print_r($Listele);
		echo "</pre><br><br>";
	
	$Dizin 			= "*";  
	
	$Listele 		= glob($Dizin, GLOB_ERR); // Hata alırsa durdurur.
		echo "(*) parametresi ve GLOB_ERR parametresi"; 
		echo "<pre>";
		print_r($Listele);
		echo "</pre><br><br>";
	
	?>
</body>
</html>