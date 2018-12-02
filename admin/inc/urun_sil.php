<?php echo !defined("ADMIN") ? die("nooluyo beyavv"): null;
	$urun_id=g("id");
	$query=query("select * from urunler where urun_id=$urun_id");
	if(mysql_affected_rows()<1)
	{
		go("index.php");
		exit;
	}else{
?>   
			<div class="tab-pane" id="tab_4">
					<div class="portlet box blue">
										<div class="portlet-title">
											<div class="caption">
												<i class="fa fa-gift"></i>Ürün Sil
											</div>
											
										</div>				
            <?php
				$satir=row($query);
				$delete=query("delete from urunler where urun_id=$urun_id");
				if($delete){
					echo '<h4 class="alert_success">Ürün Bilgileri Başarıyla Silindi</h4>';
					unlink("../assets/media/urunler/buyuk/".$satir["urun_resim1"]);
					unlink("../assets/media/urunler/buyuk/".$satir["urun_resim2"]);
					unlink("../assets/media/urunler/buyuk/".$satir["urun_resim3"]);
					unlink("../assets/media/urunler/buyuk/".$satir["urun_resim4"]);
					unlink("../assets/media/urunler/slider-kucuk/".$satir["urun_resim1"]);
					unlink("../assets/media/urunler/slider-kucuk/".$satir["urun_resim2"]);
					unlink("../assets/media/urunler/slider-kucuk/".$satir["urun_resim3"]);
					unlink("../assets/media/urunler/slider-kucuk/".$satir["urun_resim4"]);
					unlink("../assets/media/urunler/cart/".$satir["urun_resim1"]);
					unlink("../assets/media/urunler/liste/".$satir["urun_resim1"]);
					go("index.php?do=urunler",1);	
				}else{
					echo '<h4 class="alert_error">Veritabanı hatası. Tekrar Deneyiniz</h4>';	
				}
			}			
			?>
            	
			
					</div>
            </div>
		
		
		
		