<?php

		$do=g("do");
		switch($do){
			case "kategoriler":
			 if($kategori_link=g("link")){
					$kategori_bilgi=row(query("select * from kategoriler where kategori_link='$kategori_link'"));
					echo "SUZET - ".$kategori_bilgi["kategori_ad"];
				}
			break;	
			
			case "urunler":
				
					$urun_link=g("link");
					$urun_bilgi=row(query("select * from urunler				
					where urunler.urun_link='$urun_link'"));
					echo 'SUZET - '.$urun_bilgi["urun_ad"];	
				
			break;	
			

			case "arama":
				echo 'SUZET - Arama Sonuçları';
			break;
			
			
						
			case "cikis":
				
			break;
					
			case "etiket":
				echo 'SUZET - Etiket Bulutu';
			break;
			
		
			case "iletisim":
				echo 'SUZET - İletişim';
			break;
			case "hakkimizda":
				echo 'SUZET - Hakkımızda';
			break;
			
			
			default:
				echo 'SUZET - Anasayfa';
			break;
			
		}
	
?>