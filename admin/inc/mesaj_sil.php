<?php echo !defined("ADMIN") ? die("nooluyo beyavv"): null;
	$mesaj_id=g("id");
	
?>   
			<div class="tab-pane" id="tab_4">
					<div class="portlet box blue">
										<div class="portlet-title">
											<div class="caption">
												<i class="fa fa-gift"></i>Mesaj Sil
											</div>
											
										</div>				
            <?php
				$satir=row($query);
				$delete=query("delete from mesajlar where mesaj_id=$mesaj_id");
				if($delete){
					echo '<h4 class="alert_success">Mesaj Başarıyla Silindi</h4>';
					
					go("index.php?do=mesajlar",1);	
				}else{
					echo '<h4 class="alert_error">Veritabanı hatası. Tekrar Deneyiniz</h4>';	
				}
						
			?>
            	
			
					</div>
            </div>
		
		
		
		