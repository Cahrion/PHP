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
		file_exists()		= Dosyanın belirtilecek olan path'e (yola) bağlı olarak varlığını sınamak için kullanılır. Işlem sonucu daima boolean (mantıksal) veri türünde döner.
		is_dir()			= İçeriğin belirtilecek olan path'e (yola) bağlı olarak dizin olduğunu sınamak için kullanılır. Işlem sonucu daima boolean (mantıksal) veri türünde döner.
		is_file()			= İçeriğin belirtilecek olan path'e (yola) bağlı olarak dosya olduğunu sınamak için kullanılır. Işlem sonucu daima boolean (mantıksal) veri türünde döner.
		is_readable()		= Belirtilecek olan path'e (yola) bağlı olarak dosyanın okunabilir olduğunu sınamak için kullanılır. Işlem sonucu daima boolean (mantıksal) veri türünde döner.
		is_writeable()		= Belirtilecek olan path'e (yola) bağlı olarak dosyanın yazınabilir olduğunu sınamak için kullanılır. Işlem sonucu daima boolean (mantıksal) veri türünde döner.
		is_writable()		= Belirtilecek olan path'e (yola) bağlı olarak dosyanın yazınabilir olduğunu sınamak için kullanılır. Işlem sonucu daima boolean (mantıksal) veri türünde döner.
		is_executable()		= Belirtilecek olan path'e (yola) bağlı olarak dosyanın çalıştırılabilir olduğunu sınamak için kullanılır. Işlem sonucu daima boolean (mantıksal) veri türünde döner.
		is_uploaded_file()	= Belirtilecek olan path'e (yola) bağlı olarak dosyanın yüklenebilir olduğunu sınamak için kullanılır. Işlem sonucu daima boolean (mantıksal) veri türünde döner.
		*/

	$Deger 		= "Dokumanlar\Ornek.txt";
	
	if(is_file($Deger)){ // Dosya olup olmadığına bakar.
		echo 'Belirtilen içerik bir dosyadır.';
	}else{
		echo 'Belirtilen içerik bir dosya değildir.';
	}
	
	?>
</body>
</html>