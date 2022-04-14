<?php

if(isset($_GET["AktivasyonKodu"])){
	$GelenAktivasyonKodu	=	GuvenlikFiltresi($_GET["AktivasyonKodu"]);
}else{
	$GelenAktivasyonKodu	=	"";
}
if(isset($_GET["Email"])){
	$GelenEmail				=	GuvenlikFiltresi($_GET["Email"]);
}else{
	$GelenEmail				=	"";
}

if(($GelenAktivasyonKodu!="") and ($GelenEmail!="")){
	$KontrolSorgusu		=	$VeritabaniBaglantisi->prepare("SELECT * FROM uyeler WHERE EmailAdresi = ? AND AktivasyonKodu = ?");
	$KontrolSorgusu->execute([$GelenEmail, $GelenAktivasyonKodu]);
	$KullaniciSayisi	=	$KontrolSorgusu->rowCount();
	$KullaniciKaydi		=	$KontrolSorgusu->fetch(PDO::FETCH_ASSOC);
	
	if($KullaniciSayisi>0){
?>	
<table width="1065" align="center" border="0" cellpadding="0" cellspacing="0">
	<tr>
		<td width="500" valign="top">
			<form action="index.php?SK=44&EmailAdresi=<?php echo $GelenEmail; ?>&AktivasyonKodu=<?php echo $GelenAktivasyonKodu; ?>" method="post">
				<table width="500" align="center" border="0" cellpadding="0" cellspacing="0">
					<tr height="40">
						<td colspan="2" style="color:#FF9900"><h3>Şifre Sıfırlama</h3></td>
					</tr>
					<tr height="30">
						<td colspan="2" valign="top" style="border-bottom: 1px dashed #CCCCCC;">Aşağıdan Hesabına Giriş Şifreni Değiştirebilirsin.</td>
					</tr>
					<tr height="30">
						<td colspan="2" valign="bottom" align="left">Yeni Şifre (*)</td>
					</tr>
					<tr height="30">
						<td colspan="2" valign="top" align="left"><input type="password" name="Sifre" class="InputAlanlari"></td>
					</tr>
					<tr height="30">
						<td colspan="2" valign="bottom" align="left">Yeni Şifre Tekrar (*)</td>
					</tr>
					<tr height="30">
						<td colspan="2" valign="top" align="left"><input type="password" name="SifreTekrar" class="InputAlanlari"></td>
					</tr>
					<tr height="40">
						<td colspan="2" align="center"><input type="submit" value="Şifremi Güncelle" class="YesilButon"></td>
					</tr>
				</table>
			</form>
		</td>
		
		<td width="20">&nbsp;</td>
		
		<td width="545" valign="top"><table width="545" align="center" border="0" cellpadding="0" cellspacing="0">
			<tr height="40">
				<td colspan="2" style="color:#FF9900"><h3>Yeni Şifre Oluşturma</h3></td>
			</tr>
			<tr height="30">
				<td colspan="2" valign="top" style="border-bottom: 1px dashed #CCCCCC;">Çalışma ve İşleyiş Açıklaması.</td>
			</tr>
			<?php
				$YeniSifreBilgiSorgusu 		= $VeritabaniBaglantisi->prepare("SELECT * FROM sifremiunuttumbilgisi");
				$YeniSifreBilgiSorgusu->execute();
				$YeniSifreBilgiSayisi 		= $YeniSifreBilgiSorgusu->rowCount();
				$YeniSifreBilgi				= $YeniSifreBilgiSorgusu->fetchAll(PDO::FETCH_ASSOC);
				foreach($YeniSifreBilgi as $YeniSifreBilgiKaydi){
					
			?>	
				<tr>
					<td colspan="2" style='font-size: 5px'>&nbsp;</td>
				</tr>
				<tr height="30">
					<td align='left' width='30'><img src="Resimler/<?php echo DonusumleriGeriDondur($YeniSifreBilgiKaydi["logo"]); ?>" border="0" style='margin-top: 3px'></td>
					<td align='left'><b><?php echo DonusumleriGeriDondur($YeniSifreBilgiKaydi["adi"]); ?></b></td>
				</tr>	
				<tr>
					<td colspan="2" align="left"><?php echo DonusumleriGeriDondur($YeniSifreBilgiKaydi["icerik"]); ?></td>
				</tr>
			<?php
					
				}
			?>
		</table></td>
	</tr>
</table>
<?php
	}else{
		header("Location:index.php");
		exit();
	}
}else{
	header("Location:index.php");
	exit();
}
?>