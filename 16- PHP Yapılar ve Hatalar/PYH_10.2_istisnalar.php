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
		try 			=	Hata oluşturulabilecek kodlar için kullanılır.
		catch 			=	Hata oluşursa çalıştırılacak kodlar için kullanılır.
		finally 		=	Hata oluşsada oluşmasada çalıştırılacak kodlar için kullanılır.
		throw 			= 	Hata oluşturabilecek kodlar için istisnai durumlarda kullanılır.
		exception 		=	Tüm istisnalar için önceden tanımlı olan temel sınıfı çağırmak için kullanılır.
		getMessage() 	=	Tüm istisnalar için oluşturulacak iletilerin atandığı veri tutuculardır.
		
		YAPISI 			=
		
			try{
				Kod blokları
				
				throw new Exception(Ileti);
				
			}catch(Exception ileti ataması){ 
			 	Kod blokları // Hata olursa çalışır.
			}finally{
			
			}
		  
	*/
	
	$Deger1 			= "Ali";
	
	try{
		if($Deger1 == "Volkan"){
			echo "Merhaba Volkan Nasılsın?";
		}elseif($Deger1 == "Hakan"){
			echo "Merhaba Hakan Nasılsın?";
		}elseif($Deger1 == "Demir"){
			echo "Merhaba Demir Nasılsın?";
		}else{
			throw new Exception("Sen Kimsin? Sen Volkan Değilsin!");
		}
		
		echo "<br> Kodda hata oluşursa burası çalışmaz";
		
	}catch(Exception $Sonuc){
		echo $Sonuc->getMessage();
	}
	
	
	
	
	?>
</body>
</html>