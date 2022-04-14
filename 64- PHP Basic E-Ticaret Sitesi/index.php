<?php
session_start(); ob_start();
require_once("Ayarlar/ayar.php");
require_once("Ayarlar/fonksiyonlar.php");
require_once("Ayarlar/sitesayfalari.php");

if(isset($_REQUEST["SK"])){
	$SayfaKoduDegeri 	= SayiliIcerikleriFiltrele($_REQUEST["SK"]);
}else{
	$SayfaKoduDegeri 	= 0;
}

if(isset($_REQUEST["SYF"])){
	$Sayfalama 	= SayiliIcerikleriFiltrele($_REQUEST["SYF"]);
}else{
	$Sayfalama 	= 1;
}

?>
<!doctype html>
<html lang="tr-TR">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Language" content="tr">
<meta charset="utf-8">
<meta name="robots" content="index, follow">
<meta name="googlebot" content="index, follow">
<meta name="revisit-after" content="7 Days">
<title><?php echo DonusumleriGeriDondur($SiteTitle); ?></title>
<base href="/AstroGorya/">
<link type='image/png' rel="icon" href="Resimler/Favicon.png">
<meta name="description" content="<?php echo DonusumleriGeriDondur($SiteDescription); ?>">
<meta name="keywords" content="<?php echo DonusumleriGeriDondur($SiteKeywords); ?>">
<link type="text/css" rel="stylesheet" href="Ayarlar/stil.css">
<script type="text/javascript" language="javascript" src="Ayarlar/fonksiyonlar.js"></script>
</head>
<body>
	<table width="1065" height="100%" align="center" border="0" cellpadding="0" cellspacing="0">	
		<tr height='40' bgcolor="#353745">
			<td><img src="Resimler/HeaderMesajResmi.png" border="0"></td>
		</tr>
		<tr height='110'>
			<td>
				<table width="1065" height="30" align="center" border="0" cellpadding="0" cellspacing="0">	
					<tr bgcolor="#0088CC">
						<td>&nbsp;</td>
						<?php
						if(isset($_SESSION["Kullanici"])){
						?>
							<td width='20'><a href='index.php?SK=50'></a><img src="Resimler/KullaniciBeyaz16x16.png" border="0" style='margin-top: 5px;'></a></td>
							<td width='70' class='MaviAlanMenusu'><a href='index.php?SK=50'>Hesabım</a></td>
							<td width='20'><a href='index.php?SK=49'></a><img src="Resimler/CikisBeyaz16x16.png" border="0" style='margin-top: 5px;'></a></td>
							<td width='85' class='MaviAlanMenusu'><a href='index.php?SK=49'>Çıkış Yap</a></td>
						<?php
						}else{
						?>
							<td width='20'><a href='uye-giris'></a><img src="Resimler/KullaniciEkleBeyaz16x16.png" border="0" style='margin-top: 5px;'></a></td>
							<td width='70' class='MaviAlanMenusu'><a href='uye-giris'>Giriş Yap</a></td>
							<td width='20'><a href='yeni-uye-kayit'></a><img src="Resimler/KullaniciEkleBeyaz16x16.png" border="0" style='margin-top: 5px;'></a></td>
							<td width='85' class='MaviAlanMenusu'><a href='yeni-uye-kayit'>Yeni Üye Ol</a></td>
						<?php
						}
						?>
						<td width='20'><a href='index.php?SK=94'></a><img src="Resimler/SepetBeyaz16x16.png" border='0' style='margin-top: 5px;'></a></td>
						<td width='103' class='MaviAlanMenusu'><a href='index.php?SK=94'>Alışveriş Sepeti</a></td>
					</tr>
				</table>
				<table width="1065" height="80" align="center" border="0" cellpadding="0" cellspacing="0">	
					<tr bgcolor="#FFFFFF">
						<td width='192'><a href="index.php"><img src="Resimler/<?php echo DonusumleriGeriDondur($SiteLogosu); ?>" border='0'></a></td>
						<td>
							<table width="873" height="30" align="center" border="0" cellpadding="0" cellspacing="0">	
								<tr>
									<td width='306'>&nbsp;</td>
									<td width="107" class='AnaMenu'><a href='index.php?SK=0'>Ana Sayfa</a></td>
									<td width="160" class='AnaMenu'><a href='index.php?SK=84'>Erkek Ayakkabıları</a></td>
									<td width="160" class='AnaMenu'><a href='kadin-ayakkabilari'>Kadın Ayakkabıları</a></td>
									<td width="140" class='AnaMenu'><a href='index.php?SK=86'>Çocuk Ayakkabıları</a></td>
								</tr>	
							</table>
						</td>
					</tr>
				</table>
			</td>
		</tr>

		<tr>
			<td valign="top">
				<table width="1065" align="center" border="0" cellpadding="0" cellspacing="0">	
					<tr height="30">
						<td align="center">
							<?php
								if((!$SayfaKoduDegeri) or ($SayfaKoduDegeri == "") or ($SayfaKoduDegeri == 0)){
									include($SayfaKodu[0]);
								}else{
									include($SayfaKodu[$SayfaKoduDegeri]);
								}
							?>
							<br>
						</td>
					</tr>	
				</table>
			</td>
		</tr>

		<tr height='210'>
			<td>
				<table width="1065" align="center" border="0" cellpadding="0" cellspacing="0" bgcolor="#f9f9f9">	
					<tr height="30">
						<td width='250' style="border-bottom: 1px solid #CCC;"><b>&nbsp;Kurumsal</b></td>
						<td width='22'>&nbsp;</td>
						<td width='250' style="border-bottom: 1px solid #CCC;"><b>Üyelik ve Hizmetler</b></td>
						<td width='22'>&nbsp;</td>
						<td width='250' style="border-bottom: 1px solid #CCC;"><b>Sözleşmeler</b></td>
						<td width='21'>&nbsp;</td>
						<td width='250' style="border-bottom: 1px solid #CCC;"><b>Bizi Takip Edin</b></td>
					</tr>	
					<tr>
						<td class='AltMenu'>&nbsp;<a href="index.php?SK=1">Hakkımızda</a></td>
						<td>&nbsp;</td>
						<?php
						if(isset($_SESSION["Kullanici"])){
						?>
						<td class='AltMenu'><a href="index.php?SK=50">Hesabim</a></td>
						<?php
						}else{
						?>
						<td class='AltMenu'><a href="uye-giris">Giriş Yap</a></td>
						<?php
						}
						?>
						<td>&nbsp;</td>
						<td class='AltMenu'><a href="index.php?SK=2">Üyelik Sözleşmesi</a></td>
						<td>&nbsp;</td>
						<td>
							<table width="250" align="left" border="0" cellpadding="0" cellspacing="0" bgcolor="#f9f9f9">	
								<tr>
									<td width='20'><a href="<?php echo DonusumleriGeriDondur($SosyalLinkFacebook);?>"><img src="Resimler/Facebook16x16.png" border="0" style="margin-top: 5px;"></a></td>
									<td width="230" class='AltMenu'><a href="<?php echo DonusumleriGeriDondur($SosyalLinkFacebook);?>" target='_blank'>Facebook</a></td>
								</tr>
							</table>
						</td>
					</tr>	
					<tr height="30">
						<td class='AltMenu'>&nbsp;<a href="index.php?SK=8">Banka Hesaplarımız</a></td>
						<td>&nbsp;</td>
						<?php
						if(isset($_SESSION["Kullanici"])){
						?>
						<td class='AltMenu'><a href="index.php?SK=49">Çıkış Yap</a></td>
						<?php
						}else{
						?>
						<td class='AltMenu'><a href="yeni-uye-kayit">Yeni Üye Ol</a></td>
						<?php
						}
						?>
						
						<td>&nbsp;</td>
						<td class='AltMenu'><a href="index.php?SK=3">Kullanım Koşulları</a></td>
						<td>&nbsp;</td>
						<td>
							<table width="250" align="left" border="0" cellpadding="0" cellspacing="0" bgcolor="#f9f9f9">	
								<tr>
									<td width='20'><a href="<?php echo DonusumleriGeriDondur($SosyalLinkTwitter);?>" target='_blank'><img src="Resimler/Twitter16x16.png" border="0" style="margin-top: 5px;"></a></td>
									<td width="230" class='AltMenu'><a href="<?php echo DonusumleriGeriDondur($SosyalLinkTwitter);?>" target='_blank'>Twitter</a></td>
								</tr>
							</table>
						</td>
					</tr>	
					<tr>
						<td class='AltMenu'>&nbsp;<a href="index.php?SK=9">Havale Bildirim Fonu</a></td>
						<td>&nbsp;</td>
						<td class='AltMenu'><a href="index.php?SK=21">Sık Sorulan Sorular</a></td>
						<td>&nbsp;</td>
						<td class='AltMenu'><a href="index.php?SK=4">Gizlilik Sözleşmesi</a></td>
						<td>&nbsp;</td>
						<td>
							<table width="250" align="left" border="0" cellpadding="0" cellspacing="0" bgcolor="#f9f9f9">	
								<tr>
									<td width='20'><a href="<?php echo DonusumleriGeriDondur($SosyalLinkLinkedin);?>" target='_blank'><img src="Resimler/LinkedIn16x16.png" border="0" style="margin-top: 5px;"></a></td>
									<td width="230" class='AltMenu'><a href="<?php echo DonusumleriGeriDondur($SosyalLinkLinkedin);?>" target='_blank'>LinkedIn</a></td>
								</tr>
							</table>
						</td>
					</tr>
					<tr height="30">
						<td class='AltMenu'>&nbsp;<a href="index.php?SK=14">Kargom Nerede?</a></td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td class='AltMenu'><a href="index.php?SK=5">Mesafeli Satış Sözleşmesi</a></td>
						<td>&nbsp;</td>
						<td>
							<table width="250" align="left" border="0" cellpadding="0" cellspacing="0" bgcolor="#f9f9f9">	
								<tr>
									<td width='20'><a href="<?php echo DonusumleriGeriDondur($SosyalLinkInstagram);?>" target='_blank'><img src="Resimler/Instagram16x16.png" border="0" style="margin-top: 5px;"></a></td>
									<td width="230" class='AltMenu'><a href="<?php echo DonusumleriGeriDondur($SosyalLinkInstagram);?>" target='_blank'>Instagram</a></td>
								</tr>
							</table>
						</td>
					</tr>	
					<tr height="30">
						<td class='AltMenu'>&nbsp;<a href="index.php?SK=16">İletişim</a></td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td class='AltMenu'><a href="index.php?SK=6">Teslimat</a></td>
						<td>&nbsp;</td>
						<td>
							<table width="250" align="left" border="0" cellpadding="0" cellspacing="0" bgcolor="#f9f9f9">	
								<tr>
									<td width='20'><a href="<?php echo DonusumleriGeriDondur($SosyalLinkYoutube);?>" target='_blank'><img src="Resimler/YouTube16x16.png" border="0" style="margin-top: 5px;"></a></td>
									<td width="230" class='AltMenu'><a href="<?php echo DonusumleriGeriDondur($SosyalLinkYoutube);?>" target='_blank'>YouTube</a></td>
								</tr>
							</table>
						</td>
					</tr>
					<tr height="30">
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td class='AltMenu'><a href="index.php?SK=7">İptal, İade ve Değişim</a></td>
						<td>&nbsp;</td>
						<td>
							<table width="250" align="left" border="0" cellpadding="0" cellspacing="0" bgcolor="#f9f9f9">	
								<tr>
									<td width='20'><a href="<?php echo DonusumleriGeriDondur($SosyalLinkPinterest);?>" target='_blank'><img src="Resimler/Pinterest16x16.png" border="0" style="margin-top: 5px;"></a></td>
									<td width="230" class='AltMenu'><a href="<?php echo DonusumleriGeriDondur($SosyalLinkPinterest);?>" target='_blank'>Pinterest</a></td>
								</tr>
							</table>
						</td>
					</tr>
				</table>
			</td>
		</tr>
		<tr height='30'>
			<td>
				<table width="1065" align="center" border="0" cellpadding="0" cellspacing="0">	
					<tr height="30">
						<td align="center"><?php echo DonusumleriGeriDondur($SiteCopyright); ?></td>
					</tr>	
				</table>
			</td>
		</tr>
		<tr height='30'>
			<td>
				<table width="1065" align="center" border="0" cellpadding="0" cellspacing="0">	
					<tr>
						<td align="center">
							<img src="Resimler/RapidSSL32x12.png" border="0" style='margin-right: 5px;'>
							<img src="Resimler/InternetteGuvenliAlisveris28x12.png" border="0" style='margin-right: 5px;'>
							<img src="Resimler/3DSecure14x12.png" border="0" style='margin-right: 5px;'>
							<img src="Resimler/BonusCard41x12.png" border="0" style='margin-right: 5px;'>
							<img src="Resimler/MaximumCard46x12.png" border="0" style='margin-right: 5px;'>
							<img src="Resimler/WorldCard48x12.png" border="0" style='margin-right: 5px;'>
							<img src="Resimler/CardFinans78x12.png" border="0" style='margin-right: 5px;'>
							<img src="Resimler/AxessCard46x12.png" border="0" style='margin-right: 5px;'>
							<img src="Resimler/ParafCard19x12.png" border="0" style='margin-right: 5px;'>
							<img src="Resimler/VisaCard37x12.png" border="0" style='margin-right: 5px;'>
							<img src="Resimler/MasterCard21x12.png" border="0" style='margin-right: 5px;'>
							<img src="Resimler/AmericanExpiress20x12.png" border="0">
						</td>
					</tr>	
				</table>
			</td>
		</tr>

	</table>
</body>
</html>
<?php
$VeritabaniBaglantisi 	= null;
ob_end_flush();
?>