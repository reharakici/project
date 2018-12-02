<?php echo session("uye_rutbe")!=1 ? die("nooluyo beyavv"): null;?>
<div class="col-md-12">
						<!-- BEGIN BORDERED TABLE PORTLET-->
						<div class="portlet box yellow">
							<div class="portlet-title">
								<div class="caption">
									<i class="fa fa-table"></i>KATEGORİLER
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
											 Kategori Adı
										</th>
										<th>
											 Anahtar Kelimeler
										</th>
										
									</tr>
									</thead>
									<tbody>
								 <?php
										$query=query("select * from kategoriler order by kategori_id desc");
										if(mysql_affected_rows()){		
									?>
                                    <?php
									while($row=row($query)){
									?>
									<tr> 
										<td><img style="max-width:100px; max-height:100px" src="<?php echo URL.'/assets/media/kategori_resim/'.$row["kategori_resim"]; ?>" alt="<?php echo ss($row["kategori_ad"]); ?>" title="<?php echo ss($row["kategori_ad"]); ?>" /></td> 
										<td><?php echo ss($row["kategori_ad"]); ?></td> 
                                        <td><?php echo ss($row["kategori_keyw"]); ?></td> 
										<td><a href="index.php?do=kategori_duzenle&id=<?php echo $row['kategori_id'];?>" title="Düzenle"><i class="fa fa-edit"></i> </a>
											<a onclick="return confirm('Kategoriyi Silmek İstediğinize Emin Misiniz')"  style="margin-left:10px" href="index.php?do=kategori_sil&id=<?php echo $row['kategori_id'];?>" title="Sil"><i class="fa fa-eraser"></i> </a></td> 
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
       
			
			
		
        
        
     