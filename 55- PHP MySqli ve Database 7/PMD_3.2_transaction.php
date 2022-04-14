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
	
		mysqli_autocommit() 	= MySQL sunucusundaki database içerisinde bulunan herhangi bir tabloya işlem yapılacağı anda otomatik işleyen geçici işlem yapılarını açmak veya kapatmak için kullanılır.
		autocommit() 			= MySQL sunucusundaki database içerisinde bulunan herhangi bir tabloya nesnesel yapı ile işlem yapılacağı anda otomatik işleyen geçici işlem yapılarını açmak veya kapatmak için kullanılır.
		
		mysqli_commit() 		= MySQL sunucusundaki database içerisinde bulunan herhangi bir tabloya işlem yapılacağı anda önceden mysqli_autocommit() kullanılarak açılmış olan otomatik işleyen geçici işlem yapıları dahilinde işleme alınmış olan query'nin (sorgunun) geçicilikten çıkarak kalıcı hale getirilmesi için kullanılır.
		commit() 				= MySQL sunucusundaki database içerisinde bulunan herhangi bir tabloya nesnesel yapı ile işlem yapılacağı anda önceden autocommit() kullanılarak açılmış olan otomatik işleyen geçici işlem yapıları dahilinde işleme alınmış olan query'nin (sorgunun) geçicilikten çıkarak kalıcı hale getirilmesi için kullanılır.
		
		mysqli_rollback() 		= MySQL sunucusundaki database içerisinde bulunan herhangi bir tabloya işlem yapılacağı anda önceden autocommit() kullanılarak açılmış olan otomatik işleyen geçici işlem yapıları dahilinde işleme alınmış olan query'nin (sorgunun) geçicilikten çıkarak işlemin geri alınması / iptal edilmesi için kullanılır.
		rollback() 				= MySQL sunucusundaki database içerisinde bulunan herhangi bir tabloya nesnesel yapı ile işlem yapılacağı anda önceden autocommit() kullanılarak açılmış olan otomatik işleyen geçici işlem yapıları dahilinde işleme alınmış olan query'nin (sorgunun) geçicilikten çıkarak işlemin geri alınması / iptal edilmesi için kullanılır.
		
	*/
	
	// Nesne yapısıyla yapılabilir (Her ikisiylede yapılabilir.)
	
	@$VeritabaniBaglantisi = new mysqli("localhost:3307", "root", "", "cahrion");
	if($VeritabaniBaglantisi->connect_errno){
		die("Bağlantı Hatası: " . $VeritabaniBaglantisi->connect_error);
	}
	$VeritabaniBaglantisi->set_charset("UTF8");

	$VeritabaniBaglantisi->autocommit(FALSE); // Ilk başta geçiçi bir alanda tutar hepsi doğru çalışması için aynı anda çalıştırır. Birinde hata olursa durdurur.
	
	
	$SorguBir = $VeritabaniBaglantisi->query("UPDATE hesaplar SET hesapbakiyesi=hesapbakiyesi-3000 WHERE id=1");
	$SorguIki = $VeritabaniBaglantisi->query("UPDATE hesaplar SET hesappbakiyesi=hesapbakiyesi+3000 WHERE id=3"); // Hata olan içerik
		
	if($SorguBir and $SorguIki){
		$VeritabaniBaglantisi->commit(); // Eğer işlemler başarılıysa onları çalıştırır. (İşlenmesi için mysqli_commit() olmalıdır yoksa işlemler işlenmez.)
		echo "Işlem Tamamlandı.";
		
	}else{
		$VeritabaniBaglantisi->rollback(); // Eğer işlemlerden biri veya hepsi başarısızsa yapılanları geri alır.
		echo "Sorgu Hatası";
	}
	
	$VeritabaniBaglantisi->close();
	?>
</body>
</html>