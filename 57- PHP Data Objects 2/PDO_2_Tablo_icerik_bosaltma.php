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
	
		TRUNCATE TABLE 	= MySQL sunucusundaki database içerisinde bulunan herhangi bir tablonun tüm içeriklerini boşaltmak / sıfırlamak için kullanılır.
	
	*/
	try{
		$VeritabaniBaglantisi 	= PDO("mysql:host=localhost:3307;dbname=cahrion;charset=UTF8", "root", "");
		echo "Başarıyla Bağlantı Kuruldu. <br>";
	}catch(PDOException $Hata){
		die("Bağlantı Hatası: " . $Hata->getMessage());
	}
	
	$Sorgu 	= $VeritabaniBaglantisi->query("TRUNCATE TABLE kisiler"); // Boşaltılınca id değeri 0'laşır ama silince id değeri silinen değerden 0'dan başlamaz normal devam eder.
	if($Sorgu){
		echo "Tablonun içerisi boşaltıldı.";
	}else{
		echo "Sorgu Hatası";
	}
	
	$VeritabaniBaglantisi 		= null;
	?>
</body>
</html>