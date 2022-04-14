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
	$OrnekBir = "Icabi Kırgız";
	$Tarih    = "08:05:2021";
	
	/* Çift Tırnak */
		
	echo "Bu PHP yazılım paketinin ders notudur yapan kişi = $OrnekBir, yapım tarihi: $Tarih <br>"; 
	// Süslü parantez ile de çift tırnakta çalışabilir.
	echo "Bu PHP yazılım paketinin ders notudur yapan kişi = {$OrnekBir}, yapım tarihi: {$Tarih} <br>"; 

	/* Tek Tırnak */
	
	// Tek tırnakla çalışmaz sadece çift tırnakla çalışabiliyor bu mantık ..
	echo 'Bu PHP yazılım paketinin ders notudur yapan kişi = $OrnekBir, yapım tarihi: $Tarih <br>'; 
	// Süslü parantez olsa da tek tırnakta çalışmaz.
	echo 'Bu PHP yazılım paketinin ders notudur yapan kişi = {$OrnekBir}, yapım tarihi: {$Tarih} <br>'; 
	
?>
</body>
</html>