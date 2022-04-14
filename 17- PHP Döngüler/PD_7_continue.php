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
	/*
		continue 	= Döngünün belli bir kısmının atlanarak, çalışmakta olan döngünün bir sonraki işleme devam etmesi için kullanılır.
		(while - do while - for - foreach) (Hepsinde çalışır.)
	*/
	echo "<br>" . "for" . "<br>";
	for($i=1;$i < 10; $i++){
		if($i % 2 == 0){
			continue;
		}else{
			echo "Sayimiz: " . $i . "<br>";
		}
	}
	
	echo "<br>" . "While" . "<br>";
	$Degisken = 0;
	while($Degisken < 10){
		$Degisken++;
		if($Degisken % 2 == 0){
			continue;
		}else{
			echo "Sayimiz: " . $Degisken . "<br>";
		}
	}
	echo "<br>" . "do while" . "<br>";
	$Degisken = 0;
	do{
		$Degisken++;
		if($Degisken % 2 == 0){
			continue;
		}else{
			echo "Sayimiz: " . $Degisken . "<br>";
		}
	}while($Degisken < 10);

	echo "<br>" . "foreach" . "<br>";
	$Degerler 	=	range(1, 10);
	foreach($Degerler as $Deger){
		if($Deger % 2 == 0){
			continue;
		}else{
			echo "Sayimiz: " . $Deger . "<br>";
		}
	}
	?>
</body>
</html>