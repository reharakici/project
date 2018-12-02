<?php echo session("uye_rutbe")!=1 ? die("nooluyo beyavv"): null;
$kategori_id=g("id");
	$query=query("select * from kategoriler where kategori_id=$kategori_id");
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


<link rel="stylesheet" type="text/css" href="assets/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.css"/>
<link rel="stylesheet" type="text/css" href="assets/global/plugins/bootstrap-markdown/css/bootstrap-markdown.min.css">
<link rel="stylesheet" type="text/css" href="assets/global/plugins/bootstrap-datepicker/css/datepicker.css"/>
<!-- END PAGE LEVEL SCRIPTS -->
<!-- END PAGE LEVEL SCRIPTS -->	
       
            <?php
				if($_POST){
					$kategori_adi=p("kategori_adi");
					$kategori_link=sef_link($kategori_adi);
					$kategori_keyw=p("kategori_keyw");
					$resim= $_FILES["file"]["name"];
					$eski_resim=p("resim");
					if($resim!=""){
						$konum=$_FILES["file"]["tmp_name"];
						$image = new SimpleImage(); 
						$image->load($konum); 
						$genislik=$image->getWidth();
						if($genislik>420){
							$image->resizeToWidth(420);
							} 
						$yukseklik=$image->getHeight();
						if($yukseklik>170){
							$image->resizeToHeight(170);
						} 	
						unlink("../assets/media/kategori_resim/".$eski_resim);	
						$eski_resim=$kategori_link."_".rand(1,1000000).".jpg";  	 
						$image->save("../assets/media/kategori_resim/".$eski_resim);
						
					}
					if(!$kategori_adi){
						echo '<h4 class="alert_error">Kategori Adı Boş Bırakılamaz</h4>';	
					}else{
						
							$update=query("update kategoriler SET
							kategori_ad='$kategori_adi',
							kategori_link='$kategori_link',
							kategori_keyw='$kategori_keyw',
							kategori_resim='$eski_resim'
							where kategori_id=$kategori_id
							");
							
							if($update){
								echo '<h4 class="alert_success">Kategori Güncellendi</h4>';
								go("index.php?do=kategoriler",1);	
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
												<i class="fa fa-gift"></i>Kategori Düzenle
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
														<label class="control-label col-md-3">Kategori Adı</label>
														<div class="col-md-9">
															<input type="text" value="<?php echo $row["kategori_ad"]?>" name="kategori_adi" required data-required="1" class="form-control"/>
															
														</div>
													</div>
                                                     <div class="form-group">
														<label class="control-label col-md-3">Resim</label>
														<div class="col-md-9">
                                                        	<img src="../assets/media/kategori_resim/<?php echo ss($row["kategori_resim"]);?>" width="100px" />
                        						    <input type="hidden" name="resim" value="<?php echo ss($row["kategori_resim"]);?>" />
															<input type="file" name="file" class="form-control"/>
															
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-3">Etiketler</label>
														<div class="col-md-9">
															<input type="text" value="<?php echo $row["kategori_keyw"]?>" name="kategori_keyw" class="form-control"/>
															<span class="help-block">
															Aralarına virgül koyunuz </span>
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
								
			
	<!-- BEGIN PAGE LEVEL STYLES -->
<script src="assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="assets/admin/layout2/scripts/layout.js" type="text/javascript"></script>
<script src="assets/admin/layout2/scripts/demo.js" type="text/javascript"></script>
<script src="assets/admin/pages/scripts/form-validation.js"></script>
<!-- END PAGE LEVEL STYLES -->
<script>
jQuery(document).ready(function() {   
  
   FormValidation.init();
});
</script>		
			
			
			
			
			
			
			
		
		
		