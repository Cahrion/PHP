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
		filter_var() 	= Kendisine parametre olarak verilen değer doğrultusunda içeriği filtreleyerek, içeriğin filtrelemeye uygun olup olmadığını sınamak için kullanılır. Işlem sonucu daima boolean (mantıksal) veri türünde döner.
		
		FILTER_VALIDATE_BOOLEAN 		= Belirtilecek olan içeriğin boolean (mantıksal) veri türünde olup olmadığını sınamak için kullanılır. Işlem sonucu daima boolean (mantıksal) veri türünde döner. 
			True değerleri: true, on, yes
			False değerleri: false, 0, off, no
		FILTER_VALIDATE_INT 			= Belirtilecek olan içeriğin integer (tamsayı) veri türünde olup olmadığını sınamak için kullanılır. Işlem sonucu daima boolean (mantıksal) veri türünde döner. 
		FILTER_VALIDATE_IP 				= Belirtilecek olan içeriğin IP adresi türünde olup olmadığını sınamak için kullanılır. İşlem sonucu başarılı olursa değeri geriye döndürür. İşlem sonucu başarısız olursa herhangi bir değer döndürmez.		
			FILTER_FLAG_IPV4			= Belirtilecek olan IP adresinin IPV4 uyumlu olup olmadığını sınamak için kullanılır. İşlem sonucu başarılı olursa değeri geriye döndürür. İşlem sonucu başarısız olursa herhangi bir değer döndürmez.		
			FILTER_FLAG_IPV6			= Belirtilecek olan IP adresinin IPV6 uyumlu olup olmadığını sınamak için kullanılır. İşlem sonucu başarılı olursa değeri geriye döndürür. İşlem sonucu başarısız olursa herhangi bir değer döndürmez.		
		
		FILTER_VALIDATE_EMAIL 			= Belirtilecek olan içeriğin E-Mail adresi türünde olup olmadığını sınamak için kullanılır. İşlem sonucu başarılı olursa değeri geriye döndürür. İşlem sonucu başarısız olursa herhangi bir değer döndürmez.
		FILTER_VALIDATE_URL 			= Belirtilecek olan içeriğin URL (Uniform Resource Locator) (nizami kaynak bulucu) adresi türünde olup olmadığını sınamak için kullanılır. İşlem sonucu başarılı olursa değeri geriye döndürür. İşlem sonucu başarısız olursa herhangi bir değer döndürmez.
			FILTER_FLAG_SCHEME_REQUIRED = Belirtilecek olan içeriğin URL (Uniform Resource Locator) (nizami kaynak bulucu) adresinin RFC (Request for Comment) (yorum talebi) uyumlu olup olmadığını sınamak için kullanılır. İşlem sonucu başarılı olursa değeri geriye döndürür. İşlem sonucu başarısız olursa herhangi bir değer döndürmez.
			FILTER_FLAG_HOST_REQUIRED 	= Belirtilecek olan içeriğin URL (Uniform Resource Locator) (nizami kaynak bulucu) adresinde host (barındırma) adının olup olmadığını sınamak için kullanılır. İşlem sonucu başarılı olursa değeri geriye döndürür. İşlem sonucu başarısız olursa herhangi bir değer döndürmez.
			FILTER_FLAG_PATH_REQUIRED	= Belirtilecek olan içeriğin URL (Uniform Resource Locator) (nizami kaynak bulucu) adresinin path (yol) değerinin olup olmadığını sınamak için kullanılır. İşlem sonucu başarılı olursa değeri geriye döndürür. İşlem sonucu başarısız olursa herhangi bir değer döndürmez.
			FILTER_FLAG_QUERY_REQUIRED	= Belirtilecek olan içeriğin URL (Uniform Resource Locator) (nizami kaynak bulucu) adresinin query (sorgu) değerinin olup olmadığını sınamak için kullanılır. İşlem sonucu başarılı olursa değeri geriye döndürür. İşlem sonucu başarısız olursa herhangi bir değer döndürmez.
			
		NOTLAR |
		~> RFC = bir URL verisinin http:// veya https:// ile başlayıp başlamadığını sorgular.
		~> host = www.icabi.com' verisinin "icabi" kısmına denir yani domain denebilir.
		~> path = www.icabi.com/index.php verisinin "index.php" kısmına verilen ad.
		~> query = www.icabi.com/sonuc.php?Ad=Icabi verisinin "sonuc.php?Ad=Icabi" kısmına verilen ad.
	*/
	
	$Deger 	= "Icabi Kırgız 2002 Doğumludur.";
	
	if(filter_var($Deger, FILTER_VALIDATE_INT)){ // integer (tamsayı) mı değil mi sorar.
		echo "Sınanan içerik integer (tamsayı) veri türündedir .";
	}else{
		echo "Sınanan içerik integer (tamsayı) veri türünde değildir.";
	}
	
	?>
</body>
</html>