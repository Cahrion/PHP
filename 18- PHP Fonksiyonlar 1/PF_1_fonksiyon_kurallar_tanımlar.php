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
		Fonksiyon 	=	Herhangi bir programlamada belirli bir veya daha fazla işi gerçekleştirmek üzere önceden 	hazırlanan küçük program parçalarına verilen isimdir
			
		Kurallar 	=
			1. Fonksiyon isimleri her zaman anlamlı olarak kullanılmalıdır.
			2. Fonksiyon isimleri içerisinde alfanumerik (a-z A-Z 0-9) ve _ (alt çizgi) kullanılabilir.
			3. Fonksiyon isimleri mutlaka bir harf veya _ (alt çizgi) ile başlamalıdır.
			4. Fonksiyon isimleri hiçbir zaman bir rakam ile başlayamaz.
			5. Fonksiyon isimleri içerisinde hiçbir zaman boşluk, türkçe karakterler veya özel karakterler kullanılamaz.
			6. Fonksiyon isimleri tanımlarken, PHP tarafından kullanılmakta olan isimler / tanımlar kullanılamaz.
			7. Fonksiyon isimleri hiçbir zaman birden fazla kez kullanılamaz
			8. Fonksiyon isimleri büyük harf / küçük harf duyarlı değildir.
			9. Fonksiyonlar kapsama / etki alanı kurallarına tabidir.
		YAPISI 		=
		function Isim(Parametre veya parametreler){
			Kod blokları
		}
		*/
		$Deger 			= "Icabi Kırgız"; 
		function IsimGonder($parametre){
			echo "İsim: " . $parametre . "<br>";
		}
		IsimGonder($Deger);
	?>
</body>
</html>