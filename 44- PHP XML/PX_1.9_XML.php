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
		simplexml_load_string() 	= Belirtilecek olan XML kodlama değerinin standart kodlama karşılığını bularak, bulduğu değeri geriye döndürür.
		simplexml_load_file() 		= Belirtilecek olan XML dosyası içeriği kodlama değerinin standart kodlama karşılığını bularak, bulduğu değeri geriye döndürür 
			LIBXML_NOCDATA			= Belirtilecek olan XML kodlama değeri içerisinde bulunan CDATA değerini / değerlerini metin düğümleriyle birleştirmek için kullanılır.
		
		children() 					= Belirtilecek olan XML kodlama değeri içerisinde bulunan , belirtilecek olan tağ (etiket) adı değerine bağlı olan bir alt tüm çocuk elemanları / elementleri işaret etmek ve seçmek için kullanılır.
		xpath() 					= Belirtilecek olan XML kodlama değeri içerisinde bulunan , belirtilecek olan değer / değerler doğrultusunda eşleşen tüm  elemanları / elementleri işaret etmek ve seçmek için kullanılır.
		SimpleXMLElement() 			= Belirtilecek olan içerikler dahilinde XML kodlama yapıları oluşturmak için kullanılır.
		asXML()						= Belirtilecek olan SimpleXMLElement() metodu kullanılarak oluşturulmuş olan XML kodlama yapılarının çıktılanmasını sağlamak için kullanılır. 
		addChild()					= Belirtilecek olan SimpleXMLElement() metodu kullanılarak oluşturulmuş olan XML kodlama yapılarına yeni eleman yeni element eklemek için kullanılır.
		addAttribute()				= Belirtilecek olan SimpleXMLElement() metodu kullanılarak oluşturulmuş olan XML kodlama yapılarına ait elemana / elemente özellik eklemek için kullanılır.
		DOMDocument()				= Kullanıldığı dokümanı bir DOMDocument nesne örneğine yükleyerek işleme hazır hale getirmek için kullanılır.
			loadXML() 				= DOMDocument metodu ile oluşturulmuş olan DOMDocument nesne örneğine belirtilecek olan herhangi bir içeriği yüklemek için kullanılır.
			preserveWhiteSpace		= DOMDocument metodu ile oluşturulmuş ve loadXML() metodu ile nesne örneğine yüklenmiş olan içerikte whitespace özelliğinin kullanılıp kullanılıp kullanılmayacağını belirtmek için kullanılır.
			formatOutput			= DOMDocument metodu ile oluşturulmuş ve loadXML() metodu ile nesne örneğine yüklenmiş olan içerikte sekme girinti özelliğinin kullanılıp kullanılmayacağını belirtmek için kullanılır.
			xmlVersion				= DOMDocument metodu ile oluşturulmuş ve loadXML() metodu ile nesne örneğine yüklenmiş olan içerigin belge türü belirtiminde kullanılacak olan xml sürümünü / versiyonu belirtmek için kullanılır.
			encoding				= DOMDocument metodu ile oluşturulmuş ve loadXML() metodu ile nesne örneğine yüklenmiş olan içerigin belge türü belirtiminde kullanılacak olan karakter kodlamasını belirtmek için kullanılır.
			saveXML()				= DOMDocument metodu ile oluşturulmuş ve loadXML() metodu ile nesne örneğine yüklenmiş olan içerigin çıktılanmasını sağlamak için kullanılır.
			save()					= DOMDocument metodu ile oluşturulmuş ve loadXML() metodu ile nesne örneğine yüklenmiş olan içerigin belirtilecek olan dosyaya kaydedilmesi için kullanılır.
	*/
	
	$Dosya 	= "XML_dosyalari\BasitXMLOrnegi_ozel.xml";
	
	$Donustur 	= simplexml_load_file($Dosya);
	
	echo "<pre>"; 
	print_r($Donustur);
	echo "</pre>"; 
	
	echo $Donustur->FIRMA . "<br>";
	echo $Donustur->OGRENCI . "<br>";
	echo $Donustur->ACIKLAMA; // Hata verdi (Dosyalı yapıda) Düzeltilmiş hali --> PX_1.10.XML_php
	
	?>
</body>
</html>