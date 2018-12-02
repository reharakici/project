<?php echo session("uye_rutbe")!=1 ? die("nooluyo beyavv"): null;
$urun_id=g("id");
	$query=query("select * from urunler 				
					where urun_id='$urun_id'");
	if(mysql_affected_rows()<1)
	{
		go("index.php");
		exit;
	}else{
		$row=row($query);	
	}
?>
<!-- BEGIN PAGE LEVEL STYLES -->
<link rel="stylesheet" type="text/css" href="assets/global/plugins/select2/select2.css"/>
<!-- BEGIN PAGE LEVEL STYLES -->
<link rel="stylesheet" type="text/css" href="assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css"/>
<link rel="stylesheet" type="text/css" href="assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css"/>
<link rel="stylesheet" type="text/css" href="assets/global/plugins/jquery-tags-input/jquery.tagsinput.css"/>
<link rel="stylesheet" type="text/css" href="assets/global/plugins/bootstrap-markdown/css/bootstrap-markdown.min.css">
<link rel="stylesheet" type="text/css" href="assets/global/plugins/typeahead/typeahead.css">
<!-- END PAGE LEVEL STYLES -->


       
            <?php
				if($_POST){

					$urun_ad=p("urun_ad");
					$urun_aciklama=p("urun_aciklama");
					$urun_keyw=p("urun_keyw");
					$urun_link=sef_link($urun_ad."-".rand(1,1000000));
					
					$resim1= $_FILES["image1"]["name"];
					$eski_resim1=p("resim1");
					if($eski_resim1=="" && $resim1!=""){
						$eski_resim1=$urun_link."-".rand(1,1000000).".jpg"; 
					}
					$resim2=$_FILES["image2"]["name"];
					$eski_resim2=p("resim2");
					if($eski_resim2==""  && $resim2!=""){
						$eski_resim2=$urun_link."-".rand(1,1000000).".jpg"; 
					}
					$resim3=$_FILES["image3"]["name"];
					$eski_resim3=p("resim3");
					if($eski_resim3==""  && $resim3!=""){
						$eski_resim3=$urun_link."-".rand(1,1000000).".jpg"; 
					}
					$resim4=$_FILES["image4"]["name"];
					$eski_resim4=p("resim4");
					if($eski_resim4==""  && $resim4!=""){
						$eski_resim4=$urun_link."-".rand(1,1000000).".jpg"; 
					}
					if($resim1!=""){
						$konum=$_FILES["image1"]["tmp_name"];
						$image = new SimpleImage(); 
						$image->load($konum); 
						$genislik=$image->getWidth();
						if($genislik>460){
							$image->resizeToWidth(460);
							} 
						$yukseklik=$image->getHeight();
						if($yukseklik>460){
							$image->resizeToHeight(460);
							} 	
						$resim_yol1=$eski_resim1; 
						unlink("../assets/media/urunler/buyuk/".$eski_resim1);
						$image->save("../assets/media/urunler/buyuk/".$eski_resim1);
						$image = new SimpleImage(); 
						$image->load($konum); 
						$genislik=$image->getWidth();
						if($genislik>260){
							$image->resizeToWidth(260);
							} 
						$yukseklik=$image->getHeight();
						if($yukseklik>260){
							$image->resizeToHeight(260);
							} 
						unlink("../assets/media/urunler/liste/".$eski_resim1);	
						$image->save("../assets/media/urunler/liste/".$eski_resim1);
						$image = new SimpleImage(); 
						$image->load($konum); 
						$genislik=$image->getWidth();
						if($genislik>100){
							$image->resizeToWidth(100);
							} 
						$yukseklik=$image->getHeight();
						if($yukseklik>100){
							$image->resizeToHeight(100);
							} 
						unlink("../assets/media/urunler/slider-kucuk/".$eski_resim1);		
						$image->save("../assets/media/urunler/slider-kucuk/".$eski_resim1);
						$image = new SimpleImage(); 
						$image->load($konum); 
						$genislik=$image->getWidth();
						if($genislik>65){
							$image->resizeToWidth(65);
							} 
						$yukseklik=$image->getHeight();
						if($yukseklik>65){
							$image->resizeToHeight(65);
							} 
						unlink("../assets/media/urunler/cart/".$eski_resim1);		
						$image->save("../assets/media/urunler/cart/".$eski_resim1);
						
					}
					
					if($resim2!=""){
						$konum=$_FILES["image2"]["tmp_name"];
						$image = new SimpleImage(); 
						$image->load($konum); 
						$genislik=$image->getWidth();
						if($genislik>460){
							$image->resizeToWidth(460);
							} 
						$yukseklik=$image->getHeight();
						if($yukseklik>460){
							$image->resizeToHeight(460);
							} 	
						unlink("../assets/media/urunler/buyuk/".$eski_resim2);
						$image->save("../assets/media/urunler/buyuk/".$eski_resim2);
						$image = new SimpleImage(); 
						$image->load($konum); 
						$genislik=$image->getWidth();
						if($genislik>100){
							$image->resizeToWidth(100);
							} 
						$yukseklik=$image->getHeight();
						if($yukseklik>100){
							$image->resizeToHeight(100);
							} 
						unlink("../assets/media/urunler/slider-kucuk/".$eski_resim2);	
						$image->save("../assets/media/urunler/slider-kucuk/".$eski_resim2);
					}
					
					if($resim3!=""){
						$konum=$_FILES["image3"]["tmp_name"];
						$image = new SimpleImage(); 
						$image->load($konum); 
						$genislik=$image->getWidth();
						if($genislik>460){
							$image->resizeToWidth(460);
							} 
						$yukseklik=$image->getHeight();
						if($yukseklik>460){
							$image->resizeToHeight(460);
							} 	
						unlink("../assets/media/urunler/buyuk/".$eski_resim3);
						$image->save("../assets/media/urunler/buyuk/".$eski_resim3);
						$image = new SimpleImage(); 
						$image->load($konum); 
						$genislik=$image->getWidth();
						if($genislik>100){
							$image->resizeToWidth(100);
							} 
						$yukseklik=$image->getHeight();
						if($yukseklik>100){
							$image->resizeToHeight(100);
							} 
						unlink("../assets/media/urunler/slider-kucuk/".$eski_resim3);	
						$image->save("../assets/media/urunler/slider-kucuk/".$eski_resim3);
					}
					
					if($resim4!=""){
						$konum=$_FILES["image4"]["tmp_name"];
						$image = new SimpleImage(); 
						$image->load($konum); 
						$genislik=$image->getWidth();
						if($genislik>460){
							$image->resizeToWidth(460);
							} 
						$yukseklik=$image->getHeight();
						if($yukseklik>460){
							$image->resizeToHeight(460);
							} 	
						unlink("../assets/media/urunler/buyuk/".$eski_resim4); 
						$image->save("../assets/media/urunler/buyuk/".$eski_resim4);
						$image = new SimpleImage(); 
						$image->load($konum); 
						$genislik=$image->getWidth();
						if($genislik>100){
							$image->resizeToWidth(100);
							} 
						$yukseklik=$image->getHeight();
						if($yukseklik>100){
							$image->resizeToHeight(100);
							} 
						unlink("../assets/media/urunler/slider-kucuk/".$eski_resim4);	
						$image->save("../assets/media/urunler/slider-kucuk/".$eski_resim4);
					}
					if($resim5!=""){
						$konum=$_FILES["image5"]["tmp_name"];
						$image = new SimpleImage(); 
						$image->load($konum); 
						$genislik=$image->getWidth();
						if($genislik>460){
							$image->resizeToWidth(460);
							} 
						$yukseklik=$image->getHeight();
						if($yukseklik>460){
							$image->resizeToHeight(460);
							} 	
						unlink("../assets/media/urunler/buyuk/".$eski_resim5); 
						$image->save("../assets/media/urunler/buyuk/".$eski_resim5);
						$image = new SimpleImage(); 
						$image->load($konum); 
						$genislik=$image->getWidth();
						if($genislik>100){
							$image->resizeToWidth(100);
							} 
						$yukseklik=$image->getHeight();
						if($yukseklik>100){
							$image->resizeToHeight(100);
							} 
						unlink("../assets/media/urunler/slider-kucuk/".$eski_resim5);	
						$image->save("../assets/media/urunler/slider-kucuk/".$eski_resim5);
					}
					if($resim6!=""){
						$konum=$_FILES["image6"]["tmp_name"];
						$image = new SimpleImage(); 
						$image->load($konum); 
						$genislik=$image->getWidth();
						if($genislik>460){
							$image->resizeToWidth(460);
							} 
						$yukseklik=$image->getHeight();
						if($yukseklik>460){
							$image->resizeToHeight(460);
							} 	
						unlink("../assets/media/urunler/buyuk/".$eski_resim6); 
						$image->save("../assets/media/urunler/buyuk/".$eski_resim6);
						$image = new SimpleImage(); 
						$image->load($konum); 
						$genislik=$image->getWidth();
						if($genislik>100){
							$image->resizeToWidth(100);
							} 
						$yukseklik=$image->getHeight();
						if($yukseklik>100){
							$image->resizeToHeight(100);
							} 
						unlink("../assets/media/urunler/slider-kucuk/".$eski_resim6);	
						$image->save("../assets/media/urunler/slider-kucuk/".$eski_resim6);
					}
					if($resim7!=""){
						$konum=$_FILES["image7"]["tmp_name"];
						$image = new SimpleImage(); 
						$image->load($konum); 
						$genislik=$image->getWidth();
						if($genislik>460){
							$image->resizeToWidth(460);
							} 
						$yukseklik=$image->getHeight();
						if($yukseklik>460){
							$image->resizeToHeight(460);
							} 	
						unlink("../assets/media/urunler/buyuk/".$eski_resim7); 
						$image->save("../assets/media/urunler/buyuk/".$eski_resim7);
						$image = new SimpleImage(); 
						$image->load($konum); 
						$genislik=$image->getWidth();
						if($genislik>100){
							$image->resizeToWidth(100);
							} 
						$yukseklik=$image->getHeight();
						if($yukseklik>100){
							$image->resizeToHeight(100);
							} 
						unlink("../assets/media/urunler/slider-kucuk/".$eski_resim7);	
						$image->save("../assets/media/urunler/slider-kucuk/".$eski_resim7);
					}
					if($resim8!=""){
						$konum=$_FILES["image8"]["tmp_name"];
						$image = new SimpleImage(); 
						$image->load($konum); 
						$genislik=$image->getWidth();
						if($genislik>460){
							$image->resizeToWidth(460);
							} 
						$yukseklik=$image->getHeight();
						if($yukseklik>460){
							$image->resizeToHeight(460);
							} 	
						unlink("../assets/media/urunler/buyuk/".$eski_resim8); 
						$image->save("../assets/media/urunler/buyuk/".$eski_resim8);
						$image = new SimpleImage(); 
						$image->load($konum); 
						$genislik=$image->getWidth();
						if($genislik>100){
							$image->resizeToWidth(100);
							} 
						$yukseklik=$image->getHeight();
						if($yukseklik>100){
							$image->resizeToHeight(100);
							} 
						unlink("../assets/media/urunler/slider-kucuk/".$eski_resim8);	
						$image->save("../assets/media/urunler/slider-kucuk/".$eski_resim8);
					}
					if($resim9!=""){
						$konum=$_FILES["image9"]["tmp_name"];
						$image = new SimpleImage(); 
						$image->load($konum); 
						$genislik=$image->getWidth();
						if($genislik>460){
							$image->resizeToWidth(460);
							} 
						$yukseklik=$image->getHeight();
						if($yukseklik>460){
							$image->resizeToHeight(460);
							} 	
						unlink("../assets/media/urunler/buyuk/".$eski_resim9); 
						$image->save("../assets/media/urunler/buyuk/".$eski_resim9);
						$image = new SimpleImage(); 
						$image->load($konum); 
						$genislik=$image->getWidth();
						if($genislik>100){
							$image->resizeToWidth(100);
							} 
						$yukseklik=$image->getHeight();
						if($yukseklik>100){
							$image->resizeToHeight(100);
							} 
						unlink("../assets/media/urunler/slider-kucuk/".$eski_resim9);	
						$image->save("../assets/media/urunler/slider-kucuk/".$eski_resim9);
					}
					if($resim10!=""){
						$konum=$_FILES["image10"]["tmp_name"];
						$image = new SimpleImage(); 
						$image->load($konum); 
						$genislik=$image->getWidth();
						if($genislik>460){
							$image->resizeToWidth(460);
							} 
						$yukseklik=$image->getHeight();
						if($yukseklik>460){
							$image->resizeToHeight(460);
							} 	
						unlink("../assets/media/urunler/buyuk/".$eski_resim10); 
						$image->save("../assets/media/urunler/buyuk/".$eski_resim10);
						$image = new SimpleImage(); 
						$image->load($konum); 
						$genislik=$image->getWidth();
						if($genislik>100){
							$image->resizeToWidth(100);
							} 
						$yukseklik=$image->getHeight();
						if($yukseklik>100){
							$image->resizeToHeight(100);
							} 
						unlink("../assets/media/urunler/slider-kucuk/".$eski_resim10);	
						$image->save("../assets/media/urunler/slider-kucuk/".$eski_resim10);
					}
					if(!$urun_ad){
						echo '<h4 class="alert_error">Ürün  Adı Boş Bırakılamaz</h4>';	
					}else{
						
							$insert=query("update urunler SET
							urun_ad='$urun_ad',
							urun_link='$urun_link',
							urun_aciklama='$urun_aciklama',
							urun_keyw='$urun_keyw',
							urun_resim1='$eski_resim1',
							urun_resim2='$eski_resim2',
							urun_resim3='$eski_resim3',
							urun_resim4='$eski_resim4',
							urun_resim4='$eski_resim5',	
							urun_resim1='$eski_resim6',
							urun_resim2='$eski_resim7',
							urun_resim3='$eski_resim8',
							urun_resim4='$eski_resim9',
							urun_resim4='$eski_resim10'
							where urun_id=$urun_id					
							");
							
							if($insert){
								echo '<h4 class="alert_success"> Ürün  Başarıyla Güncellendi</h4>';
								go("index.php?do=urunler",1);	
							}else{
								echo '<h4 class="alert_error">Veritabanı hatası. Tekrar Deneyiniz</h4>';	
							}
						
					}
				}
			
			
			?>
			
			<div class="tab-pane" id="tab_4">
									<div class="portlet box blue">
										<div class="portlet-title">
											<div class="caption">
												<i class="fa fa-gift"></i>Ürün Düzenle
											</div>
										<p id="sonuc"></p>	
										</div>
										<div class="portlet-body form">
											<div class="alert alert-danger display-hide">
											<button class="close" data-close="alert"></button>
											You have some form errors. Please check below.
										</div>
										<div class="alert alert-success display-hide">
											<button class="close" data-close="alert"></button>
											Your form validation is successful!
										</div>
											<!-- BEGIN FORM-->
											<form action="" method="post" id="form_sample_1" enctype="multipart/form-data" class="form-horizontal form-row-seperated">
												<div class="form-body">
                                                	<div class="form-group">
														<label class="control-label col-md-3">Kategori Seçiniz</label>
														<div class="col-md-9">
															<select name="kategori_id" class="form-control" required>
                                                            	<option value="0">Kategori Seçin</option>
                                                            	<?php 
																	$kategori_query=query("select * from kategoriler");
																	while($row_kategori=row($kategori_query)){
																		
																	echo '<option value="'.$row_kategori["kategori_id"].'"';
																		echo $row['kategori_id']==$row_kategori["kategori_id"] ? 'selected' : null ;
																		echo ' >'.$row_kategori["kategori_ad"];
																		echo '</option>';
																	}
																?>
                                                            </select>
															
														</div>
													</div>
													
                                                  
                                                    
                                                    <div class="form-group">
														<label class="control-label col-md-3">Ürün Adı</label>
														<div class="col-md-9">
															<input type="text" value="<?php echo $row["urun_ad"]?>" name="urun_ad" class="form-control" required/>															
														</div>
													</div>
                                                   
                                                  
                                                    <div class="form-group">
                                                        <label class="control-label col-md-12" style="text-align:left">Ürün Açıklaması</label>
                                                        <div class="col-md-12">
                                                            <textarea class="ckeditor form-control" id="urun_aciklama" name="urun_aciklama" rows="6"><?php echo $row["urun_aciklama"]?></textarea>
                                                        </div>
                                                    </div>
								
                                                    
                                                   
                                                   
                                                     
                                                
													<div class="form-group">
														<label class="control-label col-md-3">Etiketler</label>
														<div class="col-md-9">
															<input type="text" value="<?php echo $row["urun_keyw"]?>" name="urun_keyw" class="form-control"/>
															<span class="help-block">
															Aralarına virgül koyunuz </span>
														</div>
													</div>
												</div>
                                                <div class="form-group">
														<label class="control-label col-md-3">Ana Resim</label>
														<div class="col-md-9">
                                                        <img src="../assets/media/urunler/slider-kucuk/<?php echo ss($row["urun_resim1"]);?>" />
                        						    <input type="hidden" name="resim1" value="<?php echo ss($row["urun_resim1"]);?>" />
															<input id="uploadImage" type="file"  name="image1" class="form-control"/>
                                                            <span class="help-block">
															İdeal boyut 460x460</span>
															
														</div>
												</div>
                                                <div class="form-group">
														<label class="control-label col-md-3">2. Resim</label>
														<div class="col-md-9">
                                                        <img src="../assets/media/urunler/slider-kucuk/<?php echo ss($row["urun_resim2"]);?>" />
                        						    <input type="hidden" name="resim2" value="<?php echo ss($row["urun_resim2"]);?>" />
															<input id="uploadImage" type="file" name="image2" class="form-control"/>
                                                            <span class="help-block">
															İdeal boyut 460x460</span>
															
														</div>
												</div>
                                                <div class="form-group">
														<label class="control-label col-md-3">3. Resim</label>
														<div class="col-md-9">
                                                        <img src="../assets/media/urunler/slider-kucuk/<?php echo ss($row["urun_resim3"]);?>" />
                        						    <input type="hidden" name="resim3" value="<?php echo ss($row["urun_resim3"]);?>" />
															<input id="uploadImage" type="file"  name="image3" class="form-control"/>
                                                            <span class="help-block">
															İdeal boyut 460x460</span>
															
														</div>
												</div>
                                                <div class="form-group">
														<label class="control-label col-md-3">4. Resim</label>
														<div class="col-md-9">
                                                        <img src="../assets/media/urunler/slider-kucuk/<?php echo ss($row["urun_resim4"]);?>" />
                        						    <input type="hidden" name="resim4" value="<?php echo ss($row["urun_resim4"]);?>" />
															<input id="uploadImage" type="file" name="image4" class="form-control"/>
                                                            <span class="help-block">
															İdeal boyut 460x460</span>
															
														</div>
												</div>
                                                    <div class="form-group">
														<label class="control-label col-md-3">5. Resim</label>
														<div class="col-md-9">
                                                        <img src="../assets/media/urunler/slider-kucuk/<?php echo ss($row["urun_resim5"]);?>" />
                        						    <input type="hidden" name="resim5" value="<?php echo ss($row["urun_resim5"]);?>" />
															<input id="uploadImage" type="file" name="image5" class="form-control"/>
                                                            <span class="help-block">
															İdeal boyut 460x460</span>
															
														</div>
												</div>
                                                    <div class="form-group">
														<label class="control-label col-md-3">6. Resim</label>
														<div class="col-md-9">
                                                        <img src="../assets/media/urunler/slider-kucuk/<?php echo ss($row["urun_resim6"]);?>" />
                        						    <input type="hidden" name="resim6" value="<?php echo ss($row["urun_resim6"]);?>" />
															<input id="uploadImage" type="file" name="image6" class="form-control"/>
                                                            <span class="help-block">
															İdeal boyut 460x460</span>
															
														</div>
												</div>
                                                    <div class="form-group">
														<label class="control-label col-md-3">7. Resim</label>
														<div class="col-md-9">
                                                        <img src="../assets/media/urunler/slider-kucuk/<?php echo ss($row["urun_resim7"]);?>" />
                        						    <input type="hidden" name="resim7" value="<?php echo ss($row["urun_resim7"]);?>" />
															<input id="uploadImage" type="file" name="image7" class="form-control"/>
                                                            <span class="help-block">
															İdeal boyut 460x460</span>
															
														</div>
												</div>
                                                    <div class="form-group">
														<label class="control-label col-md-3">8. Resim</label>
														<div class="col-md-9">
                                                        <img src="../assets/media/urunler/slider-kucuk/<?php echo ss($row["urun_resim8"]);?>" />
                        						    <input type="hidden" name="resim8" value="<?php echo ss($row["urun_resim8"]);?>" />
															<input id="uploadImage" type="file" name="image8" class="form-control"/>
                                                            <span class="help-block">
															İdeal boyut 460x460</span>
															
														</div>
												</div>
                                                    <div class="form-group">
														<label class="control-label col-md-3">9. Resim</label>
														<div class="col-md-9">
                                                        <img src="../assets/media/urunler/slider-kucuk/<?php echo ss($row["urun_resim9"]);?>" />
                        						    <input type="hidden" name="resim9" value="<?php echo ss($row["urun_resim9"]);?>" />
															<input id="uploadImage" type="file" name="image9" class="form-control"/>
                                                            <span class="help-block">
															İdeal boyut 460x460</span>
															
														</div>
												</div>
                                                    <div class="form-group">
														<label class="control-label col-md-3">10. Resim</label>
														<div class="col-md-9">
                                                        <img src="../assets/media/urunler/slider-kucuk/<?php echo ss($row["urun_resim10"]);?>" />
                        						    <input type="hidden" name="resim10" value="<?php echo ss($row["urun_resim10"]);?>" />
															<input id="uploadImage" type="file" name="image10" class="form-control"/>
                                                            <span class="help-block">
															İdeal boyut 460x460</span>
															
														</div>
												</div>
												<div class="form-actions">
													<div class="row">
														<div class="col-md-offset-3 col-md-9">
															<button type="submit" class="btn green"><i class="fa fa-pencil"></i> Kaydet</button>
															<button type="reset" class="btn default">İptal</button>
														</div>
													</div>
												</div>
											</form>
											<!-- END FORM-->
										</div>
									</div>
								</div>
								

	<!-- BEGIN PAGE LEVEL STYLES -->
<script src="assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="assets/admin/layout2/scripts/layout.js" type="text/javascript"></script>
<script src="assets/admin/layout2/scripts/demo.js" type="text/javascript"></script>
<script src="assets/admin/pages/scripts/form-validation.js"></script>
<!-- END PAGE LEVEL STYLES -->

<!-- BEGIN PAGE LEVEL PLUGINS -->
<script type="text/javascript" src="assets/global/plugins/fuelux/js/spinner.min.js"></script>
<script type="text/javascript" src="assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js"></script>
<script type="text/javascript" src="assets/global/plugins/jquery-inputmask/jquery.inputmask.bundle.min.js"></script>
<script type="text/javascript" src="assets/global/plugins/jquery.input-ip-address-control-1.0.min.js"></script>
<script src="assets/global/plugins/bootstrap-pwstrength/pwstrength-bootstrap.min.js" type="text/javascript"></script>
<script src="assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
<script src="assets/global/plugins/jquery-tags-input/jquery.tagsinput.min.js" type="text/javascript"></script>
<script src="assets/global/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js" type="text/javascript"></script>
<script src="assets/global/plugins/bootstrap-touchspin/bootstrap.touchspin.js" type="text/javascript"></script>
<script src="assets/global/plugins/typeahead/handlebars.min.js" type="text/javascript"></script>
<script src="assets/global/plugins/typeahead/typeahead.bundle.min.js" type="text/javascript"></script>
<script type="text/javascript" src="assets/global/plugins/ckeditor/ckeditor.js"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="assets/admin/layout2/scripts/layout.js" type="text/javascript"></script>
<script src="assets/admin/layout2/scripts/demo.js" type="text/javascript"></script>
<script src="assets/admin/pages/scripts/components-form-tools.js"></script>
<!-- END PAGE LEVEL SCRIPTS -->


			
			
			
			
			
			
		
		
		