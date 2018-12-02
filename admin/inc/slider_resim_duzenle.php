<?php echo session("uye_rutbe")!=1 ? die("nooluyo beyavv"): null;
$slider_resim_id=g("id");
	$query=query("select * from slider_resim where slider_resim_id=$slider_resim_id");
	if(mysql_affected_rows()<1)
	{
		go("index.php");
		exit;
	}else{
		$row=row($query);	
	}
?>

<link rel="stylesheet" type="text/css" href="ajax/css/imgareaselect-animated.css" />

<!-- scripts -->
	<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script type="text/javascript" src="ajax/jquery.imgareaselect.pack.js"></script>
	<script type="text/javascript" src="ajax/script.js"></script>
  <?php
				if($_POST){
					$slider_link=p("slider_link");
					 
					$resim= $_FILES["image"]["name"];
					$eski_resim=p("resim");
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
							unlink("../assets/media/main-slider/".$eski_resim);	
							$eski_resim=isimDuzelt($_FILES["image"]["name"])."-".rand(1,1000000).".jpg";
						$image->save("../assets/media/main-slider/".$eski_resim);
					}
					if(!$slider_link){
						echo '<h4 class="alert_error">Link Boş Bırakılamaz</h4>';	
					}else{
							$update=query("update slider_resim SET
							slider_resim_ad='$eski_resim',
							slider_resim_link='$slider_link'
							where slider_resim_id=$slider_resim_id
							");
							
							if($update){
								echo '<h4 class="alert_success">Slider Başarıyla Düzenlendi</h4>';
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
														<label class="control-label col-md-3">Slider Link</label>
														<div class="col-md-9">
															<input type="text"  value="<?php echo $row["slider_resim_link"]?>" name="slider_link" required data-required="1" class="form-control"/>
															
														</div>
													</div>
													
                                                    <div class="form-group">
														<label class="control-label col-md-3">Resim</label>
														<div class="col-md-9">
                                                        <img id="uploadPreview" src="../assets/media/main-slider/<?php echo ss($row["slider_resim_ad"]);?>" width="100px" />
                                                        <input type="hidden" name="resim" value="<?php echo ss($row["slider_resim_ad"]);?>" />
															<input id="uploadImage" type="file" name="image" class="form-control"/>
                                                            <span class="help-block">
															İdeal boyut 870x470 </span>
															
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
	
	
	
	