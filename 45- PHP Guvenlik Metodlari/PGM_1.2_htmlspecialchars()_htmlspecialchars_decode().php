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
		htmlspecialchars() 			= Belirtilecek olan içerikte bulunabilecek olan özel karkaterleri (&, ', ", <, >) düz metin halinde okunabilir HTML metnine dönüşütürerek, dönüştürdüğü değeri geriye döndürür.
			ENT_COMPAT 		= htmlspecialchars metodu kullanılarak dönüştürülecek olan metin için ek olarak " (çift tırnak) işaretlerini de dönüştürmek için kullanılır. (Varsayılan)
			ENT_QUOTES 		= htmlspecialchars metodu kullanılarak dönüştürülecek olan metin için ek olarak " (çift tırnak) ve ' (tek tırnak) işaretlerini de dönüştürmek için kullanılır.
			ENT_NOQUOTES 	= htmlspecialchars metodu kullanılarak dönüştürülecek olan metin için " (çift tırnak) ve ' (tek tırnak) işaretlerini dönüşümden çıkarmak / iptal etmek için kullanılır.
		
		htmlspecialchars_decode() 	= Belirtilecek olan ve htmlspecialchars metodu kullanılarak düz metin halinde sadece okunabilir html metnine dönüştürülmüş olan özel karakterleri (&, ', ", <, >) orijinal karakter haline geri dönüştürerek, dönüştürdüğü değeri geriye döndürür.
			ENT_COMPAT 		= htmlspecialchars_decode metodu kullanılarak dönüştürülecek olan metin için ' (tek tırnak) işaretlerini dönüşümden çıkarmak / iptal etmek için kullanılır. (Varsayılan)
			ENT_QUOTES 		= htmlspecialchars_decode metodu kullanılarak dönüştürülecek olan metin için ek olarak " (çift tırnak) ve ' (tek tırnak) işaretlerini de geri dönüştürmek için kullanılır.
			ENT_NOQUOTES 	= htmlspecialchars_decode metodu kullanılarak dönüştürülecek olan metin için " (çift tırnak) ve ' (tek tırnak) işaretlerini dönüşümden çıkarmak / iptal etmek için kullanılır.
		*/
			
	$Deger 		= "<b>IK System</b> & Icabi Kırgız & A'dan Z'ye PHP Görsel Eğitim Seti Notları & 27\" Monitör";
	echo $Deger . "<br>"; // ~~> Hatalı durum...
	
	$Islem 		= htmlspecialchars($Deger, ENT_QUOTES); // Tek tırnakları dönüşüme aldı.
	echo $Islem . "<br>"; 
	
	$Sonuc 		= htmlspecialchars_decode($Deger); // Geri dönüştürülmüş hal (Tek tırnaklar hariç)
	echo $Sonuc;
	
	?>
</body>
</html>