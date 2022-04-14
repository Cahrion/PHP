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
		Dizi 		= Girdiğimiz sıralı değerleri alan veya programın çalışması ile bazı sıralı değerlerin atandığı veri tutuculardır.
		print_r() 	= Bir dizinin insanlarca okunabilecek gösteriminin ekrana çıktılanmasını sağlamak için kullanılır.
		
		Kurallar 	=
		1. Diziler array() fonksiyonu ile veya [] (köşeli parantez) ile oluşturulur.
		2. Dizi elemanlarına tanımlanacak olan anahtar isimleri içerisinde alfanumerik (a-z A-Z 0-9) ve _ (alt çizgi) kullanılabilir.
		3. Dizi elemanlarına tanımlanacak olan anahtar isimleri içerisinde hiçbir zaman boşluk, türkçe karakterler veya özel karakterler kullanılamaz.
		4. Dizi elemanlarına anahtar isimleri tanımlarken, PHP tarafından kullanılmakta olan isimler / tanımlar kullanılamaz.
		5. Dizi elemanlarına tanımlanacak olan anahtar isimleri büyük harf / küçük harf duyarlıdır.
		5. Dizi elemanlarına tanımlanacak olan anhatar isimleri aynı dizi içerisinde birdan fazla kez kullanılamaz.
		7. Dizi elemanlarına anahtar isimleri tanımlanmayacak olur ise, her bir dizi elemanı için anahtar isimleri otomatik olarak oluşturulur. Her bir eleman için otomatik olarak oluşturulacak olan anahtar isimleri rakamsal değerler alır ve bu değerler 0'dan başlayarak her bir eleman için bir artarak devam eder.
		
		Yapısı 		= 
		array(Anahtar => Elamn, Anahtar => Eleman, Anahtar => Eleman ...);
		array(Eleman, Eleman, Eleman ...);
		*/
	
		$Isimler 	= array("renk" => "Siyah", "Renk" => "Mavi", "rEnk" => "Kırmızı", "reNk" => "Sarı", "renK" =>"Yesil", "renk" => "Beyaz"); 
		// Son parametreyi ele alır ilki parametreyi geçerli saymayıp bulunduğu yeri alır.
		
		echo "<pre>";
		print_r($Isimler);
		echo "</pre> <br><br>";

		echo $Isimler["renk"] . "<br>";
		echo $Isimler["Renk"] . "<br>";
		echo $Isimler["rEnk"] . "<br>";
		echo $Isimler["reNk"] . "<br>";
		echo $Isimler["renK"];
	
	?>
</body>
</html>