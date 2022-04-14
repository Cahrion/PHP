<?php
	require_once("NameSpace/4.Ornek/VolkanAlakent.php");	// NameSpace eklenmiş hal 
	require_once("NameSpace/4.Ornek/IcabiKirgiz.php"); 		// NameSpace eklenmiş hal 
	require_once("NameSpace/4.Ornek/AhmetYilmaz.php"); 		// NameSpace eklenmiş hal 
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
	
	// Namespaceli veriyi çağırmak için "\" ifadesiyle yapılmalıdır.
	
	$Bir 	= new \Hocalar\Volkan\Deneme; // Hiyerarşiv bir şekilde de getirebiliriz.
	echo $Bir->Harf . "<br>";
	
	$Bir 	= new Uyeler\Ahmet\Deneme; // Baş tarafa "\" koyabilir veya koymayabilirsiniz.
	echo $Bir->Harf . "<br>";
	
	$Bir 	= new \Uyeler\Icabi\Deneme;
	echo $Bir->Harf . "<br>";
	
	?>
</body>
</html>