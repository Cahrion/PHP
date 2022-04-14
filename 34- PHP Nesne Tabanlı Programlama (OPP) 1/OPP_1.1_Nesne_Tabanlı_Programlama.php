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
		class 	=	Herhangi bir programlamada belirli bir veya daha fazla işi gerçekleştirmek üzere önceden hazırlanan nesnelere verilen isimdir.
		new 	= 	Daha önceden tanımlanmış olan herhangi bir sınıfı çağırmak için kullanılır.
		
		Kurallar 	=
			1. Sınıf isimleri her zaman anlamlı olarak kullanılmalıdır.
			2. Sınıf isimleri içerisinde alfanumerik (a-z A-Z 0-9) ve _ (alt çizgi) kullanılabilir.
			3. Sınıf isimleri mutlaka bir harf veya _ (alt çizgi) ile başlamalıdır.
			4. Sınıf isimleri hiçbir zaman bir rakam ile başlayamaz.
			5. Sınıf isimleri içerisinde hiçbir zaman boşluk, türkçe karakterler veya özel karakterler kullanılamaz.
			6. Sınıf isimleri tanımlarken, PHP tarafından kullanılmakta olan isimler / tanımlar kullanılamaz.
			7. Sınıf isimleri hiçbir zaman birden fazla kez kullanılamaz. (namespace (isim uzayı) kullanılması durmunda birden fazla kez kullanılabilir.)
			8. Sınıf isimleri büyük harf / küçük harf duyarlı değildir.
			9. Sınıf kapsama / etki alanı kurallarına tabidir.
			
		YAPISI 		=
		class Isim{
			Kod blokları
		}
		*/
	
	class IlkDeneme{
		
		const ISIM 		= "İcabi";
		const SOYISIM 	= "Kırgız";
		
	}
	
	$Sonuc 		=	new IlkDeneme;
	
	echo IlkDeneme::ISIM . " ";
	echo IlkDeneme::SOYISIM;
	?>
</body>
</html>