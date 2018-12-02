<?php echo session("uye_rutbe")!=1 ? die("nooluyo beyavv"): null;?>
<div class="col-md-12">
						<!-- BEGIN BORDERED TABLE PORTLET-->
						<div class="portlet box yellow">
							<div class="portlet-title">
								<div class="caption">
									<i class="fa fa-table"></i>ANASAYFA SLİDER
								</div>
								
							</div>
							<div class="portlet-body">
								<div class="table-scrollable">
									<table class="table table-bordered table-hover">
									<thead>
									<tr>
										<th>
											 Resim
										</th>
										<th>
											 Link
										</th>
										<th>
											 İşlem
										</th>
										
									</tr>
									</thead>
									<tbody>
								 <?php
										$query=query("select * from slider_resim order by slider_resim_id desc");
										if(mysql_affected_rows()){		
									?>
                                    <?php
									while($row=row($query)){
									?>
									<tr> 
										<td><img style="max-width:100px; max-height:100px" src="<?php echo'../assets/media/main-slider/'.$row["slider_resim_ad"]; ?>"  /></td> 
										<td><?php echo ss($row["slider_resim_link"]); ?></td> 
										<td><a href="index.php?do=slider_resim_duzenle&id=<?php echo $row['slider_resim_id'];?>" title="Düzenle"><i class="fa fa-edit"></i> </a>
											<a onclick="return confirm('Resmi Silmek İstediğinize Emin Misiniz')"  style="margin-left:10px" href="index.php?do=slider_resim_sil&id=<?php echo $row['slider_resim_id'];?>" title="Sil"><i class="fa fa-eraser"></i> </a></td> 
									</tr>
									<?php
										}
									}
									?>  
									
									</tbody>
									</table>
								</div>
							</div>
						</div>
						<!-- END BORDERED TABLE PORTLET-->
					</div>   
       
			
			
		
        
        
     