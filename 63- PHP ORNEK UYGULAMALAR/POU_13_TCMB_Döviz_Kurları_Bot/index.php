<?php
	try{
		$VeritabaniBaglantisi 	= new PDO("mysql:host=localhost:3307;dbname=cahrion;charset=UTF8", "root", "");
	}catch(PDOException $Hata){
		die("Bağlantı Hatası: " . $Hata->getMessage());
	}
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
		
	$Link 		= "https://www.tcmb.gov.tr/kurlar/today.xml";
	$Icerik 	= simplexml_load_file($Link);
	
	?>
	
	<table align="center" width="900" border="0" cellpadding="0" cellspacing="0">
		<tr height="30" bgcolor="#CCCCCC">
			<th align='left' width='250'>Adı</th>
			<th align='left' width='100'>Kısa Adı</th>
			<th align='left' width='100'>Birimi</th>
			<th align='left' width='100'>Alış</th>
			<th align='left' width='100'>Satış</th>
			<th align='left' width='125'>Efektif Alış</th>
			<th align='left' width='125'>Efektif Satış</th>
		</tr>
		<?php
			$Liste 		= $Icerik->Currency;
	
		
		foreach($Liste as $Satir){
			$Adi 			= $Satir->Isim;
			$KisaAdi 		= $Satir["CurrencyCode"];
			$Birim 			= $Satir->Unit;
			$Alis 			= $Satir->ForexBuying;
			$Satis 			= $Satir->ForexSelling;
			$EfektifAlis 	= $Satir->BanknoteBuying;
			$EfektifSatis 	= $Satir->BanknoteSelling;
			$Zaman 			= time();	
			
			// Zaman verisinin en son ne zaman güncelleştiğini öğreniyoruz.
			$Kontrol 		= $VeritabaniBaglantisi->prepare("SELECT * FROM dovizkurlari WHERE id=?");
			$Kontrol->execute(["1"]);
			$KontrolSayisi 	= $Kontrol->rowCount();
			if($KontrolSayisi > 0){
				$KontrolVerisi 	= $Kontrol->fetch(PDO::FETCH_ASSOC);
				if(($KontrolVerisi["zaman"]+86300) < $Zaman){
					// Güncelleşme süresi 1 günden önce olduysa yeniden güncelliyoruz.
					$Sorgu 	= $VeritabaniBaglantisi->prepare("UPDATE dovizkurlari SET alis=?, satis=?, efektifalis=?, efektifsatis=?, zaman=? WHERE kodu=?");
						$Sorgu->execute([$Alis, $Satis, $EfektifAlis, $EfektifSatis, $Zaman, $KisaAdi]);
						$SorguSayisi 	= $Sorgu->rowCount();
						if($SorguSayisi < 1){
							echo "Bilinmeyen bir hatayla karşılaştık.";
							die();
					}
				}
			}
		?>
			<tr height="30">
				<td align='left' width='250'><?php echo $Adi ?></td>
				<td align='left' width='100'><?php echo $KisaAdi ?></td>
				<td align='left' width='100'><?php echo $Birim ?></td>
				<td align='left' width='100'><?php echo $Alis ?></td>
				<td align='left' width='100'><?php echo $Satis ?></td>
				<td align='left' width='125'><?php echo $EfektifAlis ?></td>
				<td align='left' width='125'><?php echo $EfektifSatis ?></td>
			</tr>
		<?php
		}
		$VeritabaniBaglantisi 	= null;
		?>
	</table>
	
	
</body>
</html>