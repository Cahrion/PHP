<?php
	require_once("NameSpace/5.Ornek/VolkanAlakent.php");
	require_once("NameSpace/5.Ornek/IcabiKirgiz.php"); 	
	require_once("NameSpace/5.Ornek/AhmetYilmaz.php"); 	
?>
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
	
	// Çağrılan php dosyalarında birden fazla namespace kullanılabilir ve çağrılabilir.
	
	$Bir1 	= new \Hocalar\Volkan\Deneme; 
	echo $Bir1->Harf . "<br>";
	$Bir2 	= new \Yazar\Volkan\Test; 
	echo $Bir2->Rakam . "<br><br>";
	
	$Iki1 	= new Uyeler\Ahmet\Deneme; 
	echo $Iki1->Harf . "<br>";
	$Iki2 	= new Ressam\Ahmet\Test; 
	echo $Iki2->Rakam . "<br><br>";
	
	$Uc1 	= new \Uyeler\Icabi\Deneme;
	echo $Uc1->Harf . "<br>";	
	$Uc2 	= new \Cizer\Icabi\Test;
	echo $Uc2->Rakam . "<br><br>";

	

	?>
</body>
</html>