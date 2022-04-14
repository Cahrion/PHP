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
		REPLACE 	= MySQL suncusundaki database içerisinde bulunan herhangi bir tablonun herhangi bir kaydını içeren satırındaki / satırlarındaki sütuna ait veriyi / verileri tam veya kismi olarak değiştirmek için kullanılır.
	*/
	
	@$VeritabaniBaglantisi 	= mysqli_connect("localhost:3307", "root", "", "cahrion");
	if(mysqli_connect_errno()){
		die("Bağlantı Hatası: " . mysqli_connect_error());
	}
	mysqli_set_charset($VeritabaniBaglantisi, "UTF8");
	
	$Guncelle 	= mysqli_query($VeritabaniBaglantisi, "UPDATE yorumlar SET yorummetni=REPLACE(yorummetni, '<br>', '\n')");
																				// Yorum metinlerinde yapıların <br> olanları -> \n olarak değiştirdi.
		if($Guncelle){
			echo "İşlem başarıyla gerçekleştirildi.";
		}else{
			echo "Guncelleme Hatası";
		}
	
	
	mysqli_close($VeritabaniBaglantisi);
	?>
</body>
</html>