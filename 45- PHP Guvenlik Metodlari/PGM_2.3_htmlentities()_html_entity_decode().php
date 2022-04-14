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
		htmlentities()			= Belirtilecek olan içerikte bulunabilecek olan tüm özel karkaterleri düz metin halinde okunabilir HTML metnine dönüşütürerek, dönüştürdüğü değeri geriye döndürür.
			ENT_COMPAT 		= htmlentities metodu kullanılarak dönüştürülecek olan metin için ek olarak " (çift tırnak) işaretlerini de dönüştürmek için kullanılır. (Varsayılan)
			ENT_QUOTES 		= htmlentities metodu kullanılarak dönüştürülecek olan metin için ek olarak " (çift tırnak) ve ' (tek tırnak) işaretlerini de dönüştürmek için kullanılır.
			ENT_NOQUOTES 	= htmlentities metodu kullanılarak dönüştürülecek olan metin için " (çift tırnak) ve ' (tek tırnak) işaretlerini dönüşümden çıkarmak / iptal etmek için kullanılır.
		
		html_entity_decode() 	= Belirtilecek olan ve htmlentities metodu kullanılarak düz metin halinde sadece okunabilir html metnine dönüştürülmüş olan tüm özel karakterleri orijinal karakter haline geri dönüştürerek, dönüştürdüğü değeri geriye döndürür.
			ENT_COMPAT 		= html_entity_decode metodu kullanılarak dönüştürülecek olan metin için ' (tek tırnak) işaretlerini dönüşümden çıkarmak / iptal etmek için kullanılır. (Varsayılan)
			ENT_QUOTES 		= html_entity_decode metodu kullanılarak dönüştürülecek olan metin için ek olarak " (çift tırnak) ve ' (tek tırnak) işaretlerini de geri dönüştürmek için kullanılır.
			ENT_NOQUOTES 	= html_entity_decode metodu kullanılarak dönüştürülecek olan metin için " (çift tırnak) ve ' (tek tırnak) işaretlerini dönüşümden çıkarmak / iptal etmek için kullanılır.
		*/
			
	$Deger 		= "<b>IK System</b> & Icabi Kırgız & A'dan Z'ye PHP Görsel Eğitim Seti Notları & 27\" Monitör";
	echo $Deger . "<br>"; // ~~> Hatalı durum...
	
	$Islem 		= htmlentities($Deger, ENT_QUOTES); // Tek tırnakları dönüşüme aldı.
	echo $Islem . "<br>"; 
	
	$SonucBir 	= html_entity_decode($Deger, ENT_COMPAT); // (Varsayılan hal)  Geri dönüştürülmüş hal (Tek tırnaklar hariç)
	echo $SonucBir . "<br>"; 
	
	$SonucIki 	= html_entity_decode($Deger, ENT_QUOTES); // Geri dönüştürülmüş hal (Tamamen dönüştürür.)
	echo $SonucIki . "<br>"; 
	
	$SonucUc 	= html_entity_decode($Deger, ENT_NOQUOTES); // Geri dönüştürülmüş hal (Tek tırnaklar ve çift tırnaklar hariç)
	echo $SonucUc;
	
	?>
</body>
</html>