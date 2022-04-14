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
		spl_autoload_register()	= Doküman içerisinde belirtilecek olan sınıfın bulunmaması durumunda, belirtilecek olan parametreye göre bir sınıf dokümanını otomatik olarakk belgeye dahil etmek / yüklemek için kullanılır.
	*/
	
	function OtomatikCalistir($Deger){
		echo "Eklenmeyen bir class eklendi. Ismi: " . $Deger . "<br>Eklemeyi unutmayın.<br><br><br>"; 
		$DosyaAdi 	= $Deger . ".php";
		require_once($DosyaAdi); // sinif.php dosyasını çağıracaktır. (dosyanın adını değiştirmeyi unutmayın.)
	}
	
	spl_autoload_register("OtomatikCalistir");  
	// Direkt olarak fonksiyon yapısıda yazılabilir.
//  spl_autoload_register(function OtomatikCalistir($Deger){ Kod blokları }) Şeklinde kullanılabilir.
	
	// İstenilen değer tanımlı değilse sinif değeri otomatik olarak parametrede yazan fonksiyon çalışır.
	
	$Kim 	= new sinif;
	echo $Kim->Bilgiler();
	
	?>
</body>
</html>