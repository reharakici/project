<?php echo !defined("ADMIN") ? die("nooluyo beyavv"): null;
	$slider_resim_id=g("id");
	$query=query("select * from slider_resim where slider_resim_id=$slider_resim_id");
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
												<i class="fa fa-gift"></i>Resim Sil
											</div>
											
										</div>				
            <?php
				$satir=row($query);
				$resim=$satir["slider_resim_ad"];
				$delete=query("delete from slider_resim where slider_resim_id=$slider_resim_id");
				if($delete){
					echo '<h4 class="alert_success">Slider Başarıyla Silindi</h4>';
					unlink("../assets/media/main-slider/".$resim);
					go("index.php?do=slider_resimler",1);	
				}else{
					echo '<h4 class="alert_error">Veritabanı hatası. Tekrar Deneyiniz</h4>';	
				}
			}			
			?>
            	
			
					</div>
            </div>
		
		
		
		