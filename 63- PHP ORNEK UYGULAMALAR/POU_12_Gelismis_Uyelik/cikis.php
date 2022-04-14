<?php
require_once("baglan.php");
	unset($_SESSION["Kullanici"]);
	session_destroy();
	ob_flush();
	header("Location: index.php");
exit();
?>