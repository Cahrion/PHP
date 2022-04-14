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
	
	$GelenID 			= $_GET["id"];
	
	@$VeritabaniBaglantisi 	= new mysqli("localhost:3307", "root", "", "cahrion");
	if($VeritabaniBaglantisi->connect_errno){
		die("Bağlantı Hatası: " . $VeritabaniBaglantisi->connect_error);	
	}
	$VeritabaniBaglantisi->set_charset("UTF8");
	
	$Sil 		= $VeritabaniBaglantisi->query("DELETE FROM kisiler WHERE id='$GelenID'");
		if($Sil){
			echo "Silme Başarıyla Yapıldı. <br><br>";
			$VeritabaniBaglantisi->close();
			header("Location: PMD_6.5_DELETE.php");
			exit();
		}else{
			echo "sİLME Hatası <br><br>";
		}

	$VeritabaniBaglantisi->close();
	?>
</body>
</html>