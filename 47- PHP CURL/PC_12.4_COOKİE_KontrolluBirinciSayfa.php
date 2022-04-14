<?php	
session_start();
	if(isset($_SESSION["Kullanici"])){
		echo "Kullanici girişi yapılmış 1. Sayfa" . "<br>";
	}else{
		echo "Önce giriş yapmalısınız.";
		header("Location: PC_12.2_COOKİE.php");
		exit();
	}
?>