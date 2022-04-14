<!doctype html>
<html lang="tr-TR">
<head4
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Language" content="tr">
<meta charset="utf-8">
<title>PHP / Icabi Kırgız</title>
</head>

<body>
	<?php
	/*
	namespace	= Sınıflar için özel isim alnaları / küme tanımlamak için kullanılır. 
	*/
	
	$Bir 	= new \Hocalar\Volkan\Deneme; 
	echo $Bir->Harf . "<br>";
	
	$Bir 	= new Uyeler\Ahmet\Deneme; 
	echo $Bir->Harf . "<br>";
	
	$Bir 	= new \Uyeler\Icabi\Deneme;
	echo $Bir->Harf . "<br>";

	
	// En başta olması gerekir lakin çağırma dosyalarının en başta olmasına gerek yoktur.
	require_once("NameSpace/4.Ornek/VolkanAlakent.php");	// NameSpace eklenmiş hal 
	require_once("NameSpace/4.Ornek/IcabiKirgiz.php"); 		// NameSpace eklenmiş hal 
	require_once("NameSpace/4.Ornek/AhmetYilmaz.php"); 		// NameSpace eklenmiş hal 

	?>
</body>
</html>