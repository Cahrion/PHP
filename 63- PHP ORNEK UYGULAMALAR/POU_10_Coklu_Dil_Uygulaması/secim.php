<?php
session_start();
$GelenDilSecimi 	= $_GET["DilSecimi"];

$_SESSION["SiteDili"]	= $GelenDilSecimi;

header("Location: index.php");
exit();

?>