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
	
	$Gelenisim 				= $_POST["isim"];
	$Gelenyas 				= $_POST["yas"];
	$Gelenbeceriler 		= $_POST["beceriler"];
	$Gelenbeceriseviyesi 	= $_POST["beceriseviyeleri"];
	
	try{
		$VeritabaniBaglantisi 	= new PDO("mysql:host=localhost:3307;dbname=cahrion;charset=utf8", "root", "");
	}catch(PDOException $Hata){
		die("Bağlantı Hatası: " . $Hata->getMessage());
	}
	
	// exec() yapısıyla da yapılabilir. (Diğer tüm INSERT INTO işlemleri de.)
	
	$Ekle 		= $VeritabaniBaglantisi->exec("INSERT INTO uyeler (isim, yas, beceriler, beceriseviyeleri) values ('" . $Gelenisim . "', '" . $Gelenyas ."', '" . $Gelenbeceriler . "', '" . $Gelenbeceriseviyesi . "')");
	if($Ekle !== false){
		echo "Başarıyla eklendi.";
		header("Location: PDO_3.4_INSERT_INTO.php");
	}else{
		echo "Sorgu Hatası";
	}

	$VeritabaniBaglantisi 		= null;
	?>
</body>
</html>