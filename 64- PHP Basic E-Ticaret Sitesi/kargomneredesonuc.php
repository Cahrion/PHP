<?php
if(isset($_POST["KargoTakipNosu"])){
	$GelenTakipNumarasi 	= GuvenlikFiltresi($_POST["KargoTakipNosu"]);
}else{
	$GelenTakipNumarasi 	= "";
}

if($GelenTakipNumarasi != ""){
	header("Location: https://www.yurticikargo.com/tr/online-servisler/gonderi-sorgula?code=" . $GelenTakipNumarasi);
	exit();
}else{
	header("Location: index.php");
	exit();
}
?>