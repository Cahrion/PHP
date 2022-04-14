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
	$Gelenisim 				= $_POST["isim"];
	$Gelenyas 				= $_POST["yas"];
	$Gelenbeceriler 		= $_POST["beceriler"];
	$Gelenbeceriseviyesi 	= $_POST["beceriseviyesi"];
	
	try{
		$VeritabaniBaglantisi 	= new PDO("mysql:host=localhost:3307;dbname=cahrion;charset=utf8", "root", "");
	}catch(PDOException $Hata){
		die("Bağlantı Hatası: " . $Hata->getMessage());
	}
	
	// İstenirse bu yapılar exec() parametresi ile de yapılabilir..
	
	$Ekle 		= $VeritabaniBaglantisi->query("UPDATE uyeler SET isim='" . $Gelenisim . "', yas='" . $Gelenyas . "', beceriler='" . $Gelenbeceriler . "', beceriseviyeleri='" . $Gelenbeceriseviyesi . "' WHERE id=" . $GelenID);
	if($Ekle){
		echo "Başarıyla eklendi.";
		header("Location: index.php");
		exit();
	}else{
		echo "Sorgu Hatası";
	}

	$VeritabaniBaglantisi 		= null;
	?>
</body>
</html>