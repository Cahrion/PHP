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
		trim() 	= Belitilecek olan içeriğin, varsa başındaki ve sonundaki tüm boşukları, sekmeleri ve yeni satır karakterlerini (\n) silerek, oluşturduğu değeri geriye döndürür. Ayrıca belirtilecek olan içeriğin, varsa başındaki ve sonundaki, belirtilecek olan karakterleride silerek, oluşturduğu değeri geriye döndürür.
		ltrim() = Belitilecek olan içeriğin, varsa başındaki / solundaki tüm boşukları, sekmeleri ve yeni satır karakterlerini (\n) silerek, oluşturduğu değeri geriye döndürür. Ayrıca belirtilecek olan içeriğin, varsa başındaki / solundaki, belirtilecek olan karakterleride silerek, oluşturduğu değeri geriye döndürür.
		rtrim() = Belitilecek olan içeriğin, varsa sonundaki / sağındaki tüm boşukları, sekmeleri ve yeni satır karakterlerini (\n) silerek, oluşturduğu değeri geriye döndürür. Ayrıca belirtilecek olan içeriğin, varsa sonundaki / sağındaki, belirtilecek olan karakterleride silerek, oluşturduğu değeri geriye döndürür.
		chop() 	= Belitilecek olan içeriğin, varsa sonundaki / sağındaki tüm boşukları, sekmeleri ve yeni satır karakterlerini (\n) silerek, oluşturduğu değeri geriye döndürür. Ayrıca belirtilecek olan içeriğin, varsa sonundaki / sağındaki, belirtilecek olan karakterleride silerek, oluşturduğu değeri geriye döndürür. (rtrim'le aynı işlemi görür.)
	*/
	
	$Icerik 	= "---Icabi Kırgız---";
	
		echo $Icerik  . "<br>";
	$lDuzenliIcerik = ltrim($Icerik, "-Izcı"); // Her bir karakteri her bir silişten sonra tekrar bakar ve baktığında birinci olanı siler. (sol)
	$rDuzenliIcerik = rtrim($Icerik, "-Izcı"); // Her bir karakteri her bir silişten sonra tekrar bakar ve baktığında birinci olanı siler. (sag)
	$cDuzenliIcerik = chop($Icerik, "-Izcı"); // Her bir karakteri her bir silişten sonra tekrar bakar ve baktığında birinci olanı siler. (sag)

		echo "ltrim = " . $lDuzenliIcerik . "<br>";
		echo "rtrim = " . $rDuzenliIcerik . "<br>";
		echo "chop = "  . $cDuzenliIcerik;
	
	?>
</body>
</html>