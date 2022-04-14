<?php
	require_once("NameSpace/6.Ornek/VolkanAlakent.php");
	require_once("NameSpace/6.Ornek/IcabiKirgiz.php"); 	
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
	
	use \Hocalar\Volkan\Deneme as VA; // "as" kısaltma eklenebilir bu sayede kısa bir şekilde çağırma yapılabilir. (Çağrılmadan önce tanımlanmalıdır.)
	$Bir1 	= new VA; 
	echo $Bir1->Harf . "<br>";
	
	use \Uyeler\Icabi\Deneme as IK; // "as" kısaltma eklenebilir bu sayede kısa bir şekilde çağırma yapılabilir. (Çağrılmadan önce tanımlanmalıdır.)
	$Uc1 	= new IK;
	echo $Uc1->Harf . "<br>";	

	

	?>
</body>
</html>