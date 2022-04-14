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
	
	$Isimler 	= array("Ahmet", "Malik", "Demir", array("Aslı", "Banu", "Ayşe", array("Deniz","Toprak"),"Fadime"), "Umut", "Faruk", "İsmail");
	
	print_r($Isimler);
	
	echo "<br><br>";
	foreach($Isimler as $Eleman){
		if(is_array($Eleman)){
			foreach($Eleman as $IcDeger){
				if(is_array($IcDeger)){
					foreach($IcDeger as $IcIcDeger){
						echo $IcIcDeger . "<br>";
					}
				}else{
					echo $IcDeger . "<br>";
				}
			}
		}else{
			echo $Eleman . "<br>";
		}
	}
	

	?>
</body>
</html>