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
		DELETE 	= MySQL sunucusundaki database içerisinde bulunan herhangi bir tablonun herhangi bir kaydını içeren satırı veya satırları silmek için kullanılır.
	*/
	
	@$VeritabaniBaglantisi 	= mysqli_connect("localhost:3307", "root", "", "cahrion");
	if(mysqli_connect_errno()){
		die("Bağlantı Hatası " . mysqli_connect_error());
	}
	mysqli_set_charset($VeritabaniBaglantisi, "UTF8");
	
	$Sil 	= mysqli_query($VeritabaniBaglantisi, "DELETE FROM kisiler"); // Koşulsuz yazılırsa bütün verileri siler.
		if($Sil){
			echo "Kayıtlar Silindi.";
		}else{
			echo "Silme Hatası";
		}
	
	
	mysqli_close($VeritabaniBaglantisi);
	
	?>
</body>
</html>