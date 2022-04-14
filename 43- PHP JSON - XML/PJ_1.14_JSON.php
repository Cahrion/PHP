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
		json_encode() 	= Belirtilecek olan içeriğin, JSON karşılığını bularak, bulduğu değeri geriye döndürür.
			JSON_HEX_TAG		= Belirtilecek olan içerikte bulunan tag (etiket) başlangıç ve bitiş karakterlerini hexadecimal (on altılık) türünde dönüştürmek için kullanılır.
			JSON_HEX_APOS		= Belirtilecek olan içerikte bulunan ' (tek tırnak) karakterlerini hexadecimal (on altılık) türünde dönüştürmek için kullanılır.
			JSON_HEX_QUOT		= Belirtilecek olan içerikte bulunan " (çift tırnak) karakterlerini hexadecimal (on altılık) türünde dönüştürmek için kullanılır.
			JSON_HEX_AMP		= Belirtilecek olan içerikte bulunan & (ampersant) karakterlerini hexadecimal (on altılık) türünde dönüştürmek için kullanılır.
			JSON_FORCE_OBJECT	= Belirtilecek olan içeriği nesne dönüşüm yapısına göre zorlamak için kullanılır.
			
		json_decode() 	= Belirtilecek olan JSON değerinin standart kodlama karşılığını bularak, bulduğu değeri geriye döndürür.
	*/
	
	$Degerler 	= '{
	"Firma" : "Extra Eğitim",
	"Ogrenci" : "Icabi Kırgız",
	"Egitimler" : [
		"HTML",
		"CSS3",
		"JS",
		"PHP"
	],
	"Egitmenler": [
		{
			"Adi" : "Hakan Alakent",
			"Ders": "HTML"
		},
		{
			"Adi" : "Onur Tatlı",
			"Ders": "CSS3"
		},
		{
			"Adi" : "Ümit Okudan",
			"Ders": "JS"
		},
		{
			"Adi" : "Serkan Çelik",
			"Ders": "PHP"
		}
	]
}'; // elle yapılan gelişmiş gönderim

	$Donustur 	= json_decode($Degerler, true);  // Dizi olmaya zorladık.
	
	echo "<pre>"; 
	print_r($Donustur);
	echo "</pre>"; 
	
	echo $Donustur["Firma"] . "<br>"; // Dizi yapısıyla alınır.
	echo $Donustur["Ogrenci"] . "<br>"; 
	echo $Donustur["Egitimler"][0] . "<br>";
	echo $Donustur["Egitimler"][1] . "<br>";
	echo $Donustur["Egitimler"][2] . "<br>";
	echo $Donustur["Egitimler"][3] . "<br>";
	echo $Donustur["Egitmenler"][0]["Adi"] 	. "<br>"; 
	echo $Donustur["Egitmenler"][0]["Ders"] . "<br>"; 
	echo $Donustur["Egitmenler"][1]["Adi"] 	. "<br>"; 
	echo $Donustur["Egitmenler"][1]["Ders"] . "<br>"; 
	echo $Donustur["Egitmenler"][2]["Adi"] 	. "<br>"; 
	echo $Donustur["Egitmenler"][2]["Ders"] . "<br>"; 
	echo $Donustur["Egitmenler"][3]["Adi"] 	. "<br>"; 
	echo $Donustur["Egitmenler"][3]["Ders"]; 
	
	
	?>
</body>
</html>