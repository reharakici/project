<?php echo !defined("ADMIN") ? die("nooluyo beyavv"): null;
	$kategori_id=g("id");
	$query=query("select * from kategoriler where kategori_id=$kategori_id");
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
												<i class="fa fa-gift"></i>Kategori Sil
											</div>
											
										</div>				
            <?php
				$satir=row($query);
				$resim=$satir["kategori_resim"];
				$delete=query("delete from kategoriler where kategori_id=$kategori_id");
				if($delete){
					echo '<h4 class="alert_success">Kategori Bilgileri Başarıyla Silindi</h4>';
					unlink("../assets/media/kategori_resim/".$resim);
					go("index.php?do=kategoriler",1);	
				}else{
					echo '<h4 class="alert_error">Veritabanı hatası. Tekrar Deneyiniz</h4>';	
				}
			}			
			?>
            	
			
					</div>
            </div>
		
		
		
		