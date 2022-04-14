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
		prepare() 		= MySQL sunucusundaki database içerisinde bulunan herhangi tabloya yapılacak işleme göre query (sorgu) hazırlamak için kullanılır.
		bind_param() 	= MySQL sunucusundaki database içerisinde bulunan herhangi tabloya yapılacak işleme göre prepare() metodu kullanılarak hazırlanmış olan query'i (sorguyu) derlemek için kullanılır.
			i			= integer
			d			= double
			s			= string
			b			= blob
		
		execute() 		= MySQL sunucusundaki database içerisinde bulunan herhangi tabloya yapılacak işleme göre prepare() metodu kullanılarak hazırlanmış olan query'i (sorguyu) çalıştırmak için kullanılır.
		bind_result() 	= MySQL sunucusundaki database içerisinde bulunan herhangi tablonun veri okuma işlemi için  prepare() metodu kullanılarak hazırlanmış ve execute programı kullanılarak çalıştırılmış olan query'in (sorgunun) sonuçlarını almak için kullanılır.
		fetch() 		= MySQL sunucusundaki database içerisinde bulunan herhangi tablonun veri okuma işlemi için  prepare() metodu kullanılarak hazırlanmış, execute programı kullanılarak çalıştırılmış ve bind_result() metodu kullanılarak sonuçları alınmış  olan query'in (sorgunun) verilerini okumak için kullanılır.
		
	*/
	
	// Sadece nesne tabanıyla çalışır.
	
	@$VeritabaniBaglantisi 	= new mysqli("localhost:3307", "root", "", "cahrion");
	if($VeritabaniBaglantisi->connect_errno){
		die("Bağlantı Hatası: " . $VeritabaniBaglantisi->connect_error);
	}
	$VeritabaniBaglantisi->set_charset("UTF8");
	
	$Sorgu 	= $VeritabaniBaglantisi->prepare("SELECT * FROM kisiler WHERE id>?"); 
	if($Sorgu){
		$IdKosulu 	= 3;
		$Sorgu->bind_param("i", $IdKosulu); // Üstteki "?" değerine gelecek verinin (int,string) olup olmadığını zorlayabiliriz bu sayede istenilen değer girmezse çalışmaz.
		
		
		$Sorgu->execute(); 
		$Sorgu->bind_Result($KayitIdsi, $KayitIsimSoyisim, $KayitEmaili, $KayitSifresi, $KayitTelefon, $KayitYas, $KayitCins, $KayitSehir, $KayitTarih);
		
		while($Sorgu->fetch()){ 
			echo $KayitIdsi . "- ";
			echo $KayitIsimSoyisim . " | ";
			echo $KayitEmaili . " | ";
			echo $KayitSifresi . " | ";
			echo $KayitTelefon . " | ";
			echo $KayitYas . " | ";
			echo $KayitCins . " | ";
			echo $KayitSehir . " | ";
			echo $KayitTarih . " <br>";
		}
		
	}else{
		echo "Sorgu Hatası";
	}
	
	
	$VeritabaniBaglantisi->close();
	?>
</body>
</html>