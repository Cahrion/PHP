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
		strip_tags() 	= Belirtilecek olan içerikte bulunabilecek olan tüm HTML kodlarını temizleyerek, temizlenmiş olan değeri geriye döndürür.
	*/
			
	$Deger 		= "<h1>Extra Eğitim</h1> <div>Icabi Kırgız</div> <div>A'Dan Z'ye PHP Görsel Eğitim Seti Notları</div><br /> <a href='https://extraegitim.com'>Extra Eğitim Sitesine git</a>";
	echo $Deger . "<br><br>";
	
	$Sonuc 		= strip_tags($Deger, "<a><br />"); // <br /> yazmak hatalı bir kullanım olur.
	echo $Sonuc;
	// <br /> parametresi hatalı değildir lakin eski olduğundan dolayı <br> bu fonksiyonda kullanılması daha doğrudur.
	?>
</body>
</html>