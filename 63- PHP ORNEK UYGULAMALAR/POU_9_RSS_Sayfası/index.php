<?php
header("Content-Type: text/xmlns");
try{
	$VeritabaniBaglantisi 	= new PDO("mysql:host=localhost:3307;dbname=cahrion;charset=UTF8", "root", "");
}catch(PDOException $Hata){
	die("Bağlantı Hatası: " . $Hata->getMessage());
}

echo "<?xml version='1.0' encoding='UTF-8'?>
<rss xmlns:xsi='http://www.w3.org/2001/XMLSchema-instance' xmlns:xsd='http://www.w3.org/2001/XMLSchema' versiion='2.0'>
	<channel>
		<title>IK System</title>
		<description>İleri Seviye Eğitim Setleri</description>
		<link>http://www.icabikrgz.com</link>
		<language>tr</language>";
		
		$Sorgu 			= $VeritabaniBaglantisi->prepare("SELECT * FROM urunler");

		$Sorgu->execute();
		$KayitSayisi 	= $Sorgu->rowCount();
		$Kayitlar 		= $Sorgu->fetchAll(PDO::FETCH_ASSOC);

		if($KayitSayisi > 0 ){
			foreach($Kayitlar as $Kayit){
				echo "
			<item>
				<title>{$Kayit['urunadi']}</title>
				<price>{$Kayit['urunfiyati']}</price>
			</item>

				";
			}
		}
echo "
	</channel>
</rss>
	";





$VeritabaniBaglantisi 	= null;
?>