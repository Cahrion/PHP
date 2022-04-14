<?php
	require_once("NameSpace/3.Ornek/VolkanAlakent.php"); 	// NameSpace eklenmiş hal 
	require_once("NameSpace/3.Ornek/IcabiKirgiz.php"); 	// NameSpace eklenmiş hal 
	require_once("NameSpace/3.Ornek/AhmetYilmaz.php"); 	// NameSpace eklenmiş hal 
?>

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
	namespace	= Sınıflar için özel isim alnaları / küme tanımlamak için kullanılır. 
	*/
	
	// Namespaceli veriyi çağırmak için "\" ifadesiyle yapılmalıdır.
	
	$Bir 	= new VolkaninSiniflari\Deneme;
	echo $Bir->Harf . "<br>";
	
	$Bir 	= new AhmetinSiniflari\Deneme;
	echo $Bir->Harf . "<br>";
	
	$Bir 	= new IcabininSiniflari\Deneme;
	echo $Bir->Harf . "<br>";
	
	?>
</body>
</html>