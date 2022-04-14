<?php
header("Content-type: text/xml; charset=UTF-8");

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

	$Degerler 	= array(
		"FIRMA" => "Extra Egitim",
		"OGRENCI" => "Icabi Kırgız",
		"EGITIMLER" => array(
			array(
				"Icerik" => "HTML5",
				"id" => "Bir"
			),
			array(
				"Icerik" => "CSS3",
				"id" => "Iki"
			),
			array(
				"Icerik" => "JAVASCRIPT",
				"id" => "Uc"
			),
			array(
				"Icerik" => "PHP7",
				"id" => "Dort"
			),
		),
		"EGITMENLER" => array(
			"EGITMEN" => array(
				array(
					"id" => 1,
					"seviye" => "Uzman",
					"ADI" => "Volkan Alakent",
					"KURSADI" => "PHP7"
				),
				array(
					"id" => 2,
					"seviye" => "Orta",
					"ADI" => "Hakan Alakent",
					"KURSADI" => "HTML5"
				),
				array(
					"id" => 3,
					"seviye" => "Ileri",
					"ADI" => "Onur Tatlı",
					"KURSADI" => "CSS3"
				),
				array(
					"id" => 4,
					"seviye" => "Baslangic",
					"ADI" => "Ümit Okudan",
					"KURSADI" => "JAVASCRIPT"
				)
			)
		)
	);

	function Oku($Icerik, $Olustur){
		foreach($Icerik as $AnahtarBir => $DegerBir){
			if(!is_array($DegerBir)){
				$Olustur->addChild($AnahtarBir, $DegerBir);
			}else{
				if($AnahtarBir=="EGITIMLER"){
					$Egitimler  = $Olustur->addChild("EGITIMLER");
					foreach($DegerBir as $AnahtarIki => $DegerIki){
						if(is_array($DegerIki)){
							foreach($DegerIki as $AnahtarUc => $DegerUc){
								if($AnahtarUc=="Icerik"){
									$Kurs = $Egitimler->addChild("KURS", $DegerUc);
								}else{
									$Kurs->addAttribute("id", $DegerUc);
								}
							}
						}
					}
				}
				if($AnahtarBir=="EGITMENLER"){
					$Egitmenler = $Olustur->addChild("EGITMENLER");
					foreach($DegerBir as $AnahtarDort => $DegerDort){
						if(is_array($DegerDort)){
							foreach($DegerDort as $AnahtarBes => $DegerBes){
								$Egitmen =  $Egitmenler->addChild("EGITMEN");
								if(is_array($DegerBes)){
									foreach($DegerBes as $AnahtarAlti => $DegerAlti){
										if(($AnahtarAlti != "id") and ($AnahtarAlti != "seviye")){
											$Egitmen->addChild($AnahtarAlti, $DegerAlti);
										}else{											
											$Egitmen->addAttribute($AnahtarAlti, $DegerAlti);
										}
									}
								}
							}
						}
					}
				}
			}
		}
		return $Olustur->asXML();
	}
	$Sonuc 		= Oku($Degerler, new SimpleXMLElement("<root/>"));
	$Dosya 		= "Ornek.xml";
	$DosyaAc 	= fopen($Dosya, "w");
	fwrite($DosyaAc, $Sonuc);
	fclose($DosyaAc);
	?>