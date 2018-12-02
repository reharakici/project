<?php

		$do=g("do");
		switch($do){
			case "kategoriler":
				if($kategori_link=g("link")){
					$kategori_bilgi=query("select * from kategoriler where kategori_link='$kategori_link'");
					while($row=row($kategori_bilgi)){
						echo $row["kategori_keyw"].", ";
					}
				}
			break;	
			
			case "urunler":
				
					$urun_link=g("link");
					$urun_bilgi=row(query("select * from urunler 					
					where urunler.urun_link='$urun_link'"));
					echo $urun_bilgi["urun_keyw"].",";	
				
			break;	
			

			case "arama":
				$kategori_bilgi=query("select * from kategoriler");
				
				while($row=row($kategori_bilgi)){
					echo $row["kategori_keyw"].", ";
				}
				$kategori_bilgi=query("select * from markalar");
				
				while($row=row($kategori_bilgi)){
					echo $row["marka_keyw"].", ";
				}
				
			break;
			
			
						
			case "cikis":
				
			break;
					
			
		
			case "iletisim":
				echo 'Gömlekte üstün kalite uygun fiyat ve güvenilir alışveriş için sizide SUZET e bekliyoruz.';
			break;
			
			
		}
	
?>