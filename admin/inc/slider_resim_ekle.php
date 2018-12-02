<?php echo session("uye_rutbe")!=1 ? die("nooluyo beyavv"): null;?>
<link rel="stylesheet" type="text/css" href="ajax/css/imgareaselect-animated.css" />

<!-- scripts -->
	<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script type="text/javascript" src="ajax/jquery.imgareaselect.pack.js"></script>
	<script type="text/javascript" src="ajax/script.js"></script>
  <?php
				if($_POST){
					$slider_link=p("slider_link");
					$yol=isimDuzelt($_FILES["image"]["name"])."-".rand(1,1000000).".jpg"; 
					$resim= $_FILES["image"]["name"];
					if($resim!=""){
						$konum=$_FILES["image"]["tmp_name"];
						$image = new SimpleImage(); 
						$image->load($konum); 
						$genislik=$image->getWidth();
						if($genislik>870){
							$image->resizeToWidth(870);
							} 
						$yukseklik=$image->getHeight();
						if($yukseklik>470){
							$image->resizeToHeight(470);
							} 
						$image->save("../assets/media/main-slider/".$yol);
					}else{
						$yol="../assets/media/main-slider/1.jpg";
					}
					if(!$slider_link){
						echo '<h4 class="alert_error">Link Boş Bırakılamaz</h4>';	
					}else{
							$insert=query("insert into slider_resim SET
							slider_resim_ad='$yol',
							slider_resim_link='$slider_link'
							");
							
							if($insert){
								echo '<h4 class="alert_success">Yeni Resim Başarıyla Eklendi</h4>';
								go("index.php?do=slider_resimler",1);	
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
												<i class="fa fa-gift"></i>Slider Resim Ekle
											</div>
											
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
											<form action="" method="post" id="form_sample_1" class="form-horizontal form-row-seperated" enctype="multipart/form-data">
												<div class="form-body">
													<div class="form-group">
														<label class="control-label col-md-3">Slider Adı</label>
														<div class="col-md-9">
															<input type="text" name="slider_link" required data-required="1" class="form-control"/>
															
														</div>
													</div>
													
                                                    <div class="form-group">
														<label class="control-label col-md-3">Resim</label>
														<div class="col-md-9">
															<input id="uploadImage" type="file" name="image" class="form-control"/>
                                                            <span class="help-block">
															İdeal boyut 870x470</span>
                                                            <img id="uploadPreview" width="150px" style="display:none;"/>
															
														</div>
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
	
	<!-- image preview area-->
	
	
	
	