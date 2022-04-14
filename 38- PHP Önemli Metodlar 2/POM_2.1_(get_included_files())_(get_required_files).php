<?php
	require_once("POM_1.0_tanimli_verileri_gorme.php");
	require("POM_1.1_tanimli_verileri_gorme.php");
	include_once("POM_1.2_tanimli_verileri_gorme.php");
	include("POM_2.0_(get_included_files())_(get_required_files).php");
	// Tum çağırma işlemlerinde geçerli.
?>
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
	get_included_files()	= Kullanılacak olan PHP dosyasına, dahil edilmiş / eklenmiş tüm PHP dosyalarının path (yol) ve isimlerini bularak bulduğu değerlerden yeni bir dizi oluşturarak, oluşturduğu dizi değerini geriye döndürür.
	get_required_files()	= Kullanılacak olan PHP dosyasına, dahil edilmiş / eklenmiş tüm PHP dosyalarının path (yol) ve isimlerini bularak bulduğu değerlerden yeni bir dizi oluşturarak, oluşturduğu dizi değerini geriye döndürür.
	
	*/
	// Iki metodda aynı işlemi görür. 
	
	echo "<pre>";
	print_r(get_included_files());
	echo "</pre>";
	
	echo "<pre>";
	print_r(get_required_files());
	echo "</pre>";
	
	
	
	?>
</body>
</html>