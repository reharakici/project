<?php
	function tarih($tarih){
		$dizi=explode("-",$tarih);
		return $dizi[2]."-".$dizi[1]."-".$dizi[0];
	}
	function p($par, $st=false){
		if($st){
			
			$q = htmlspecialchars(addslashes(trim($_POST[$par])));
			$q = str_replace("script", "blocked", $q);

			$q = str_replace("'"," ",$q);
			$q = str_replace("("," ",$q);
			$q = str_replace(")"," ",$q);
			$q = str_replace(";"," ",$q);
			$q = str_replace(":"," ",$q);
			$q = str_replace("<"," ",$q);
			$q = str_replace("'"," ",$q);
			$q = str_replace("("," ",$q);
			$q = str_replace(")"," ",$q);
			$q = str_replace(";"," ",$q);
			$q = str_replace(":"," ",$q);
			$q = str_replace("<"," ",$q);

			return $q; 	
		}else{
			
			return  addslashes(trim($_POST[$par]));
			
			}			
		}
	function genislikAyarla($ifade){
		$ifade=str_replace("<img", "<img width='550px'", $ifade);
		$ifade=str_replace("<table", "<table style='max-width:550px'", $ifade);
		return $ifade;
	}	
	function etiketTemizle($ifade){
	
		
		 $ac=strpos($ifade,"<");		
		 $kapa=strpos($ifade,">");
		
		while($ac>=0 && $kapa>$ac){		
					
		$kapa++;		
	    $ifade = substr_replace($ifade, ' ', $ac, ($kapa - $ac));	
		$ac=strpos($ifade,"<");		
		$kapa=strpos($ifade,">");	
		}	
		return $ifade;
		}	
	
	function g($par){
		return strip_tags(trim(addslashes($_GET[$par])));
		}	
	function kisalt($par,$uzunluk=50){
		if(strlen($par)>$uzunluk){
			 $par=mb_substr($par, 0, $uzunluk,"UTF-8")."..";
			}
			return $par;
		}
	function session($par){
		if($_SESSION[$par]){
			return $_SESSION[$par];
		}else{
			return false;
		}
	}	
	function session_olustur($par){
		foreach($par as $anahtar =>$deger){
			$_SESSION[$anahtar]=$deger;
			}  
		}
	function ss($par){
		return stripslashes($par);
	}	
	
	function sef_link($baslik){
		$bul = array('Ç', 'Ş', 'Ğ', 'Ü', 'İ', 'Ö', 'ç', 'ş', 'ğ', 'ü', 'ö', 'ı', '-');
		$yap = array('c', 's', 'g', 'u', 'i', 'o', 'c', 's', 'g', 'u', 'o', 'i', ' ');
		$perma = strtolower(str_replace($bul, $yap, $baslik));
		$perma = preg_replace("@[^A-Za-z0-9\-_]@i", ' ', $perma);
		$perma = trim(preg_replace('/\s+/',' ', $perma));
		$perma = str_replace(' ', '-', $perma);
		return $perma;
	}			
	function query($query){
		return mysql_query($query);		
		}
	function row($query){
		return mysql_fetch_array($query);
		}
	function rows($query){
		return mysql_num_rows($query);
		}	
	function go($par, $time = 0){
		if ($time == 0){
			header("Location: {$par}");
		}else {
			header("Refresh: {$time}; url={$par}");
		}
	}
	function isimDuzelt($deger) {
	$turkce=array("ş","Ş","ı","(",")","'","ü","Ü","ö","Ö","ç","Ç"," ","/","*","?","ş","Ş","ı","ğ","Ğ","İ","ö","Ö","Ç","ç","ü","Ü");
	$duzgun=array("s","S","i","","","","u","U","o","O","c","C","-","-","-","","s","S","i","g","G","I","o","O","C","c","u","U");
	$deger=str_replace($turkce,$duzgun,$deger);
	//$deger = preg_replace("@[^A-Za-z0-9\-_]+@i","",$deger);
	return $deger;
	}
	function rrmdir($dir) {
   	 	foreach(glob($dir . '/*') as $file) {
    		 if(is_dir($file)){
    		 	rrmdir($file);
			 }else{
    			unlink($file);
			 }
    	}
  		rmdir($dir);
	}  	
		#############sepet içi gösterme###########3

function sepetAdet(){
	@$cart = $_SESSION['cart'];
	if (!$cart) {
		$s=0;
	} else {
		$s = count($cart);
		
	}
	return $s;
}
function sepetToplam() {
	@$cart = $_SESSION['cart'];
	$toplam=0;
	if (!$cart) {
		$toplam=0;
	} else {
		$s = count($cart);
		
		for($i=0;$i<$s;$i++){			
			$toplam+=$cart[$i][1]*$cart[$i][2];	
		}
		
	}
	return $toplam;
}	
function kodUret() {	
	$duzgun=array("A","B","C","D","E","F","G","H","I","J","K","L","M","N","P","Q","R","S","T","U","V","Y","X","Z","1","2","3","4","5","6","7","8","9");
	$adet=count($duzgun)-1;
	$metin="";
	for($i=0;$i<8;$i++){		
		$harf=$duzgun[rand(0,$adet)];
		$metin.=$harf;
	}
	return $metin;
	}	
?>