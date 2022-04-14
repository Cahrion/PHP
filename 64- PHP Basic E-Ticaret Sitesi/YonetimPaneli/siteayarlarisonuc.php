<?php
if(isset($_SESSION["Yonetici"])){
	if(isset($_POST["SiteAdi"])){
		$GelenSiteAdi				=	GuvenlikFiltresi($_POST["SiteAdi"]);
	}else{
		$GelenSiteAdi				=	"";
	}
	if(isset($_POST["SiteTitle"])){
		$GelenSiteTitle				=	GuvenlikFiltresi($_POST["SiteTitle"]);
	}else{
		$GelenSiteTitle				=	"";
	}
	if(isset($_POST["SiteDescription"])){
		$GelenSiteDescription		=	GuvenlikFiltresi($_POST["SiteDescription"]);
	}else{
		$GelenSiteDescription		=	"";
	}
	if(isset($_POST["SiteKeywords"])){
		$GelenSiteKeywords			=	GuvenlikFiltresi($_POST["SiteKeywords"]);
	}else{
		$GelenSiteKeywords			=	"";
	}
	if(isset($_POST["SiteCopyright"])){
		$GelenSiteCopyright			=	GuvenlikFiltresi($_POST["SiteCopyright"]);
	}else{
		$GelenSiteCopyright			=	"";
	}
	if(isset($_POST["SiteLinki"])){
		$GelenSiteLinki				=	GuvenlikFiltresi($_POST["SiteLinki"]);
	}else{
		$GelenSiteLinki				=	"";
	}
	if(isset($_POST["SiteEmailAdresi"])){
		$GelenSiteEmailAdresi		=	GuvenlikFiltresi($_POST["SiteEmailAdresi"]);
	}else{
		$GelenSiteEmailAdresi		=	"";
	}
	if(isset($_POST["SiteEmailSifresi"])){
		$GelenSiteEmailSifresi		=	GuvenlikFiltresi($_POST["SiteEmailSifresi"]);
	}else{
		$GelenSiteEmailSifresi		=	"";
	}
	if(isset($_POST["SiteEmailHostAdresi"])){
		$GelenSiteEmailHostAdresi	=	GuvenlikFiltresi($_POST["SiteEmailHostAdresi"]);
	}else{
		$GelenSiteEmailHostAdresi	=	"";
	}
	if(isset($_POST["SosyalLinkFacebook"])){
		$GelenSosyalLinkFacebook	=	GuvenlikFiltresi($_POST["SosyalLinkFacebook"]);
	}else{
		$GelenSosyalLinkFacebook	=	"";
	}
	if(isset($_POST["SosyalLinkTwitter"])){
		$GelenSosyalLinkTwitter		=	GuvenlikFiltresi($_POST["SosyalLinkTwitter"]);
	}else{
		$GelenSosyalLinkTwitter		=	"";
	}
	if(isset($_POST["SosyalLinkLinkedin"])){
		$GelenSosyalLinkLinkedin	=	GuvenlikFiltresi($_POST["SosyalLinkLinkedin"]);
	}else{
		$GelenSosyalLinkLinkedin	=	"";
	}
	if(isset($_POST["SosyalLinkInstagram"])){
		$GelenSosyalLinkInstagram	=	GuvenlikFiltresi($_POST["SosyalLinkInstagram"]);
	}else{
		$GelenSosyalLinkInstagram	=	"";
	}
	if(isset($_POST["SosyalLinkPinterest"])){
		$GelenSosyalLinkPinterest	=	GuvenlikFiltresi($_POST["SosyalLinkPinterest"]);
	}else{
		$GelenSosyalLinkPinterest	=	"";
	}
	if(isset($_POST["SosyalLinkYoutube"])){
		$GelenSosyalLinkYoutube		=	GuvenlikFiltresi($_POST["SosyalLinkYoutube"]);
	}else{
		$GelenSosyalLinkYoutube		=	"";
	}
	if(isset($_POST["DolarKuru"])){
		$GelenDolarKuru				=	GuvenlikFiltresi($_POST["DolarKuru"]);
	}else{
		$GelenDolarKuru				=	"";
	}
	if(isset($_POST["EuroKuru"])){
		$GelenEuroKuru				=	GuvenlikFiltresi($_POST["EuroKuru"]);
	}else{
		$GelenEuroKuru				=	"";
	}
	if(isset($_POST["UcretsizKargoBaraji"])){
		$GelenUcretsizKargoBaraji	=	GuvenlikFiltresi($_POST["UcretsizKargoBaraji"]);
	}else{
		$GelenUcretsizKargoBaraji	=	"";
	}
	if(isset($_POST["ClientID"])){
		$GelenClientID				=	GuvenlikFiltresi($_POST["ClientID"]);
	}else{
		$GelenClientID				=	"";
	}
	if(isset($_POST["StoreKey"])){
		$GelenStoreKey				=	GuvenlikFiltresi($_POST["StoreKey"]);
	}else{
		$GelenStoreKey				=	"";
	}
	if(isset($_POST["ApiKullanicisi"])){
		$GelenApiKullanicisi		=	GuvenlikFiltresi($_POST["ApiKullanicisi"]);
	}else{
		$GelenApiKullanicisi		=	"";
	}
	if(isset($_POST["ApiSifresi"])){
		$GelenApiSifresi			=	GuvenlikFiltresi($_POST["ApiSifresi"]);
	}else{
		$GelenApiSifresi			=	"";
	}

	$GelenSiteLogosu				=	$_FILES["SiteLogosu"];

	if(($GelenSiteAdi!="") and ($GelenSiteTitle!="") and ($GelenSiteDescription!="") and ($GelenSiteKeywords!="") and ($GelenSiteCopyright!="") and ($GelenSiteLinki!="") and ($GelenSiteEmailAdresi!="") and ($GelenSiteEmailSifresi!="") and ($GelenSiteEmailHostAdresi!="") and ($GelenSosyalLinkFacebook!="") and ($GelenSosyalLinkTwitter!="") and ($GelenSosyalLinkLinkedin!="") and ($GelenSosyalLinkInstagram!="") and ($GelenSosyalLinkPinterest!="") and ($GelenSosyalLinkYoutube!="") and ($GelenDolarKuru!="") and ($GelenEuroKuru!="") and ($GelenUcretsizKargoBaraji!="") and ($GelenClientID!="") and ($GelenStoreKey!="") and ($GelenApiKullanicisi!="") and ($GelenApiSifresi!="")){
		$AyarlariGuncelle			=	$VeritabaniBaglantisi->prepare("UPDATE ayarlar SET SiteAdi = ?, SiteTitle = ?, SiteDescription = ?, SiteKeywords = ?, SiteCopyright = ?, SiteLinki = ?, SiteEmailAdresi = ?, SiteEmailSifresi = ?, SiteEmailHostAdresi = ?, SosyalLinkFacebook = ?, SosyalLinkTwitter = ?, SosyalLinkLinkedin = ?, SosyalLinkInstagram = ?, SosyalLinkPinterest = ?, SosyalLinkYoutube = ?, USDKuru = ?, EURKuru = ?, UcretsizKargoBaraji = ?, ClientID = ?, StoreKey = ?, ApiKullanicisi = ?, ApiSifresi = ?");
		$AyarlariGuncelle->execute([$GelenSiteAdi, $GelenSiteTitle, $GelenSiteDescription, $GelenSiteKeywords, $GelenSiteCopyright, $GelenSiteLinki, $GelenSiteEmailAdresi, $GelenSiteEmailSifresi, $GelenSiteEmailHostAdresi, $GelenSosyalLinkFacebook, $GelenSosyalLinkTwitter, $GelenSosyalLinkLinkedin, $GelenSosyalLinkInstagram, $GelenSosyalLinkPinterest, $GelenSosyalLinkYoutube, $GelenDolarKuru, $GelenEuroKuru, $GelenUcretsizKargoBaraji, $GelenClientID, $GelenStoreKey, $GelenApiKullanicisi, $GelenApiSifresi]);
		
		if(($GelenSiteLogosu["name"]!="") and ($GelenSiteLogosu["type"]!="") and ($GelenSiteLogosu["tmp_name"]!="") and ($GelenSiteLogosu["error"]==0) and ($GelenSiteLogosu["size"]>0)){
			$SiteLogosuYukle	=	new Verot\Upload\Upload($GelenSiteLogosu, "tr-TR");
				if($SiteLogosuYukle->uploaded){
				   $SiteLogosuYukle->mime_magic_check		=	true;
				   $SiteLogosuYukle->allowed				=	array("image/*");
				   $SiteLogosuYukle->file_new_name_body		=	"Logo";
				   $SiteLogosuYukle->file_overwrite			=	true;
				   $SiteLogosuYukle->image_convert			=	"png";
					// verot yapısında resize yapısı çalışmıyor...
				   $SiteLogosuYukle->image_quality			=	100;
				   $SiteLogosuYukle->image_background_color	=	null;
				   $SiteLogosuYukle->image_resize			=	true;
				   $SiteLogosuYukle->image_y				=	35;
				   $SiteLogosuYukle->image_x				=	192;
				   $SiteLogosuYukle->process($VerotIcinKlasorYolu);
					if($SiteLogosuYukle->processed){
						$SiteLogosuYukle->clean();
					}else{
						header("Location:index.php?SKD=0&SKI=4");
						exit();
					} 
				}
		}
		header("Location:index.php?SKD=0&SKI=3");
		exit();
	}else{
		header("Location:index.php?SKD=0&SKI=4");
		exit();
	}
}else{
	header("Location:index.php?SKD=1");
	exit();
}
?>