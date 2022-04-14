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
		DISTINCT 	= MySQL sunucusundaki database içerisinde bulunan herhangi bir tabloya yeni bir kayıt satırı ile birlikte verisini de / verilerini de eklemek için kullanılır.
	*/
	$GelenID 				= $_GET["id"];
	
	try{
		$VeritabaniBaglantisi 	= new PDO("mysql:host=localhost:3307;dbname=cahrion;charset=utf8", "root", "");
	}catch(PDOException $Hata){
		die("Bağlantı Hatası: " . $Hata->getMessage());
	}
	
	// exec() yapısıyla da aynı şekilde yapılabilir.
	
	$Sorgu 		= $VeritabaniBaglantisi->query("DELETE FROM kayitlar WHERE id=" . $GelenID);
	if($Sorgu){
		echo "Başarıyla Silindi.";
		header("Location: PMD_7.2_DELETE.php");
	}else{
		echo "Sorgu Hatası";
	}

	$VeritabaniBaglantisi 		= null;
	?>
</body>
</html>