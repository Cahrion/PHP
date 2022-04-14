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
		levenshtein() 	= Belirtilecek olan iki değer arasındaki levenshtein mesefaseni bularak bulduğu değeri geriye döndürür.
			LEVENSHTEİN mesafesi = Bir değeri diğer bir değere dönüştürebilmek için değiştirilecek veya eklenecek veya silinecek karakter sayısı anlamına gelir.
		similar_text() 	= Belirtilecek olan iki değer arasındaki benzerliği yüzdesel olarak bularak, bulduğu değeri geriye döndürür.
	*/
	
	
	$GelenDeger		= "Icabi Krıgzı";
	$GercekDeger	= "Icabi Kırgız";
	echo "Gelen Değer: " . $GelenDeger . "<br>";
	echo "Gerçek Değer: " . $GercekDeger . "<br><br>";
	
	$Fark 	= levenshtein($GelenDeger, $GercekDeger);
	
	echo "Değiştirilecek veya eklenecek veya silinecek değer: " . $Fark . "<br>";
		 
	if($Fark==0){
		echo "Tebrikler tam eşleşme sağlandı.";
	}elseif($Fark==1){
		echo "Tebrikler, 1 yaklaşık eşleşme sağlandı.";
	}elseif($Fark==2){
		echo "İdare eder, 2 yaklaşık eşleşme sağlandı.";
	}else{
		echo "Çok kötü, 3 veya daha üstü yaklaşık eşleşme sağlandı.";
	}
	
	?>
</body>
</html>