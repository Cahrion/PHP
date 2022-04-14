<?php
if(isset($_SESSION["Yonetici"])){
	if(isset($_POST["HakkimizdaMetni"])){
		$GelenHakkimizdaMetni				=	GuvenlikFiltresi($_POST["HakkimizdaMetni"]);
	}else{
		$GelenHakkimizdaMetni				=	"";
	}
	if(isset($_POST["UyelikSozlesmesiMetni"])){
		$GelenUyelikSozlesmesiMetni			=	GuvenlikFiltresi($_POST["UyelikSozlesmesiMetni"]);
	}else{
		$GelenUyelikSozlesmesiMetni			=	"";
	}
	if(isset($_POST["KullanimKosullariMetni"])){
		$GelenKullanimKosullariMetni		=	GuvenlikFiltresi($_POST["KullanimKosullariMetni"]);
	}else{
		$GelenKullanimKosullariMetni		=	"";
	}
	if(isset($_POST["GizlilikSozlesmesiMetni"])){
		$GelenGizlilikSozlesmesiMetni		=	GuvenlikFiltresi($_POST["GizlilikSozlesmesiMetni"]);
	}else{
		$GelenGizlilikSozlesmesiMetni		=	"";
	}
	if(isset($_POST["MesafeliSatisSozlesmesiMetni"])){
		$GelenMesafeliSatisSozlesmesiMetni	=	GuvenlikFiltresi($_POST["MesafeliSatisSozlesmesiMetni"]);
	}else{
		$GelenMesafeliSatisSozlesmesiMetni	=	"";
	}
	if(isset($_POST["TeslimatMetni"])){
		$GelenTeslimatMetni					=	GuvenlikFiltresi($_POST["TeslimatMetni"]);
	}else{
		$GelenTeslimatMetni					=	"";
	}
	if(isset($_POST["IptalIadeDegisimMetni"])){
		$GelenIptalIadeDegisimMetni			=	GuvenlikFiltresi($_POST["IptalIadeDegisimMetni"]);
	}else{
		$GelenIptalIadeDegisimMetni			=	"";
	}

	if(($GelenHakkimizdaMetni!="") and ($GelenUyelikSozlesmesiMetni!="") and ($GelenKullanimKosullariMetni!="") and ($GelenGizlilikSozlesmesiMetni!="") and ($GelenMesafeliSatisSozlesmesiMetni!="") and ($GelenTeslimatMetni!="")){
		$MetinleriGuncelle			=	$VeritabaniBaglantisi->prepare("UPDATE sozlesmelervemetinler SET HakkimizdaMetni = ?, UyelikSozlesmesiMetni = ?, KullanimKosullariMetni = ?, GizlilikSozlesmesiMetni = ?, MesafeliSatisSozlesmesiMetni = ?, TeslimatMetni = ?, IptalIadeDegisimMetni = ?");
		$MetinleriGuncelle->execute([$GelenHakkimizdaMetni, $GelenUyelikSozlesmesiMetni, $GelenKullanimKosullariMetni, $GelenGizlilikSozlesmesiMetni, $GelenMesafeliSatisSozlesmesiMetni, $GelenTeslimatMetni, $GelenIptalIadeDegisimMetni]);
			
		header("Location:index.php?SKD=0&SKI=7");
		exit();
	}else{
		header("Location:index.php?SKD=0&SKI=8");
		exit();
	}
}else{
	header("Location:index.php?SKD=1");
	exit();
}
?>