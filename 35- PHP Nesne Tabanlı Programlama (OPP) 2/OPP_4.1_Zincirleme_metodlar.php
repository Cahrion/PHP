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
	
	class Hesap{
		private $Sonuc 		= 0;
		
		function __construct($SayiDegeri){
			$this->Sonuc 	= $SayiDegeri;
		}
		public function Toplama($SayiDegeri){
			$this->Sonuc 	+= $SayiDegeri;
			return $this;
		}
		public function Cikarma($SayiDegeri){
			$this->Sonuc 	-= $SayiDegeri;
			return $this;
		}
		public function Carpma($SayiDegeri){
			$this->Sonuc 	*= $SayiDegeri;
			return $this;
		}
		public function Bolme($SayiDegeri){
			if($SayiDegeri == 0){
				echo "0'degeri geçersizdir. (1) olarak alındı. <br>";
				$this->Sonuc 	/= 1;
			}else{
				$this->Sonuc 	/= $SayiDegeri;
			}
			return $this;
		}
		public function Goster(){
			return $this->Sonuc . "<br>";
		}
		
	}

	$Sonuc1 	= new Hesap(100);
	echo $Sonuc1->Toplama(50)->Cikarma(10)->Carpma(3)->Bolme(2)->Goster();
	
	$Sonuc2 	= new Hesap(500);
	echo $Sonuc2->Toplama(50)->Cikarma(10)->Carpma(3)->Bolme(2)->Bolme(2)->Goster(); // Aynı metod bir kez daha kullanılabilir.
	
	$Sonuc3 	= new Hesap(700);
	echo $Sonuc3->Toplama(50)->Cikarma(10)->Carpma(3)->Bolme(2)->Goster();
	
	?>
</body>
</html>