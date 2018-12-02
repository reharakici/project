<?php
	require_once "fonksiyon.php";
	require_once "imgrszr.php";

	
	## Tema İçerik Fonksiyonu ##
	function tema_icerik(){
		$do=g("do");
		switch($do){
			case "kategoriler":
				 if($kategori_link=g("link")){
					require "inc/kategori_sayfa.php";
				}else{
					go(URL);
				}
			break;	
			
			case "urunler":
				if($link=g("link")){
					$urun_link=g("link");
					$urun_bilgi=row(query("select * from urunler where urun_link='$urun_link'"));
					require "inc/urun_detay.php";
				}else{
					go(URL);
				}
			break;	
			
			case "ara":
						
				go(URL."/arama/".g("kategori")."/".g("ifade"));
			
			break;
			case "arama":
			if (g("kategori")!= "tum"){
				$kategori_link=g("kategori");
				$ifade=g("ifade");
				require_once "inc/arama_kategori.php";
			}else {
			$ifade=g("ifade");
			require_once "inc/arama_sayfa.php";
			}	
			break;
			
			case "iletisim":
				require_once "inc/iletisim.php";		
			break;
			case "hakkimizda":
				require_once "hakkimizda.php";		
			break;
			
						
					
			case "etiket":
				if($link=g("link")){
					echo $link;	
				}else{
					go("index.php");
				}
			break;
			
			
			
			default:
				require_once "inc/default.php";
			break;
			
		}
	}

	
	## Konu Etiketleri Fonksiyonu ##
	function konu_etiketler($etiketler){
		$bol=explode(",",$etiketler);
		$etikets=array();
		foreach($bol as $etiket){
			$etiket='<a href="'.URL.'/etiket/'.ss(trim($etiket)).'">'.ss(trim($etiket)).'</a>';	
			array_push($etikets,$etiket);
		}
		echo implode(",",$etikets);
	}
	

	
?>