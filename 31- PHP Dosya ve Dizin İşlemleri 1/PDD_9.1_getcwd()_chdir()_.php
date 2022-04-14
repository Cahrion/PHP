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
			getcwd() 	=	Geçerli çalışma dizini bilgisi değerini bularak, bulduğu değeri geriye döndürür.
			chdir() 	=	Belirtilecek olan dizin bilgisine göre geçerli dizini değiştirmek için kullanılır.
		*/
			
	$Dizin 			= getcwd();  
			
		echo "Geçerli dizin: " . $Dizin . "<br>";
	
	$YeniDizin 		= "Harici/";
	$Degistir 		= chdir($YeniDizin); 
	
	if($Degistir == 1){
			echo "<br> Değiştirme işlemi başarılı. <br>";
		$Dizin 			= getcwd();  
			echo "Yeni geçerli dizin: " . $Dizin;
	}else{
		echo "Değiştirme işleminde bir hata oluştu.";
	}
	
	
	?>
</body>
</html>