<?php
	
	$id=g("id");
	
	
		
		
	
	$query=query("update mesajlar set mesaj_okunma=1 where mesaj_id=$id");
	$mesaj_bilgi=row(query("select * from mesajlar where mesaj_id=$id"));
?>
<!-- BEGIN PAGE LEVEL STYLES -->
<link rel="stylesheet" type="text/css" href="assets/global/plugins/select2/select2.css"/>
<link rel="stylesheet" type="text/css" href="assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.css"/>
<link rel="stylesheet" type="text/css" href="assets/global/plugins/bootstrap-datepicker/css/datepicker.css"/>
<link rel="stylesheet" type="text/css" href="assets/global/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css"/>
<!-- END PAGE LEVEL STYLES -->
<!-- BEGIN PAGE CONTENT-->
				<div class="row">
					<div class="col-md-12">
						<!-- Begin: life time stats -->
						<div class="portlet light">
							
							<div class="portlet-body">
								<div class="tabbable">
									
									<div class="tab-content">
										<div class="tab-pane active" id="tab_1">
											<div class="row">
												<div class="col-md-12 col-sm-12">
													<div class="portlet yellow-crusta box">
														<div class="portlet-title">
															<div class="caption">
																<i class="fa fa-cogs"></i>Mesaj Detayları
															</div>
															
														</div>
														<div class="portlet-body">
															<div class="row static-info">
																<div class="col-md-5 name">
																	Ad:
																</div>
																<div class="col-md-7 value">
																	 <?php echo $mesaj_bilgi["mesaj_ad"]?> 
																</div>
															</div>
                                                            <div class="row static-info">
																<div class="col-md-5 name">
																	Telefon:
																</div>
																<div class="col-md-7 value">
																	 <?php echo $mesaj_bilgi["mesaj_tel"]?> 
																</div>
															</div>
                                                            <div class="row static-info">
																<div class="col-md-5 name">
																	Email:
																</div>
																<div class="col-md-7 value">
																	 <?php echo $mesaj_bilgi["mesaj_email"]?> 
																</div>
															</div>
															<div class="row static-info">
																<div class="col-md-5 name">
																	 Mesaj Tarih:
																</div>
																<div class="col-md-7 value">
																	 <?php echo tarih($mesaj_bilgi["mesaj_tarih"])?>
																</div>
															</div>
															<div class="row static-info">
																<div class="col-md-5 name">
																	 Konu:
																</div>
																<div class="col-md-7 value">
                                                                	<?php 
																		 echo $mesaj_bilgi["mesaj_konu"]
																	
																	?>
                                                                    </span>
																</div>
															</div>
															<div class="row static-info">
																<div class="col-md-5 name">
																	Mesaj:
																</div>
																<div class="col-md-7 value">
																	 <?php echo $mesaj_bilgi["mesaj"]?> 
																</div>
															</div>
														</div>
													</div>
												</div>
											
												
											</div>
										
										</div>
									
									</div>
								</div>
							</div>
						</div>
						<!-- End: life time stats -->
					</div>
				</div>
				<!-- END PAGE CONTENT-->
			
		<!-- END CONTENT -->