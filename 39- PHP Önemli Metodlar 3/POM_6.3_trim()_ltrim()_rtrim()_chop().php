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
		trim() 	= Belitilecek olan içeriğin, varsa başındaki ve sonundaki tüm boşukları, sekmeleri ve yeni satır karakterlerini (\n) silerek, oluşturduğu değeri geriye döndürür. Ayrıca belirtilecek olan içeriğin, varsa başındaki ve sonundaki, belirtilecek olan karakterleride silerek, oluşturduğu değeri geriye döndürür.
		ltrim() = Belitilecek olan içeriğin, varsa başındaki / solundaki tüm boşukları, sekmeleri ve yeni satır karakterlerini (\n) silerek, oluşturduğu değeri geriye döndürür. Ayrıca belirtilecek olan içeriğin, varsa başındaki / solundaki, belirtilecek olan karakterleride silerek, oluşturduğu değeri geriye döndürür.
		rtrim() = Belitilecek olan içeriğin, varsa sonundaki / sağındaki tüm boşukları, sekmeleri ve yeni satır karakterlerini (\n) silerek, oluşturduğu değeri geriye döndürür. Ayrıca belirtilecek olan içeriğin, varsa sonundaki / sağındaki, belirtilecek olan karakterleride silerek, oluşturduğu değeri geriye döndürür.
		chop() 	= Belitilecek olan içeriğin, varsa sonundaki / sağındaki tüm boşukları, sekmeleri ve yeni satır karakterlerini (\n) silerek, oluşturduğu değeri geriye döndürür. Ayrıca belirtilecek olan içeriğin, varsa sonundaki / sağındaki, belirtilecek olan karakterleride silerek, oluşturduğu değeri geriye döndürür. (rtrim'le aynı işlemi görür.)
	*/
	
	$Icerik 	= "     Icabi Kırgız     ";
	
		echo $Icerik  . "<br>";
	$lDuzenliIcerik = ltrim($Icerik); // Soldakileri siler.
	$rDuzenliIcerik = rtrim($Icerik); // Sağdakileri siler. 
	$cDuzenliIcerik = chop($Icerik);  // Sağdakileri siler. 
	
	// Farklı bir dil yardımıyla (JS) boşlukları görebileceğimiz yapıda görülmesini sağladık.
	?>
	<script type="text/javascript" language="javascript">
		alert("<?php echo $Icerik?>");
		alert("<?php echo "ltrim sonucu: " . $lDuzenliIcerik?>");
		alert("<?php echo "rtrim sonucu: " . $rDuzenliIcerik?>");
		alert("<?php echo "chop sonucu: " . $cDuzenliIcerik?>");
	</script>
	
</body>
</html>