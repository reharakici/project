<!-- BEGIN PAGE LEVEL STYLES -->
<link rel="stylesheet" type="text/css" href="assets/global/plugins/select2/select2.css"/>
<link rel="stylesheet" type="text/css" href="assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.css"/>
<link rel="stylesheet" type="text/css" href="assets/global/plugins/bootstrap-datepicker/css/datepicker.css"/>
<!-- END PAGE LEVEL STYLES -->
<?php echo session("uye_rutbe")!=1 ? die("nooluyo beyavv"): null;?>
<div class="row">
	<div class="col-md-12">
						<!-- BEGIN BORDERED TABLE PORTLET-->
						<div class="portlet box yellow">
							<div class="portlet-title">
								<div class="caption">
									<i class="fa fa-table"></i>ÜRÜNLER
								</div>
								
							</div>
							<div class="portlet-body">
								<div class="table-scrollable">
									<table class="table table-bordered table-hover" >
									<thead>
									<tr>
                                    	<th>
                                        	Resim
                                        </th>
                                        <th>
											 Adı
										</th>
										<th>
											 Kategori
										</th>
                                        <th>
											İşlem
										</th>
										
									</tr>
									</thead>
									<tbody>
								 <?php
								 		$sayfa=g("s") ? g("s"):1;	
					
										$urun_sayisi=rows(query("select * from urunler INNER JOIN kategoriler ON 
										urunler.kategori_id=kategoriler.kategori_id"));
										
											$limit=10;
											$sayfa_sayisi=ceil($urun_sayisi/$limit);
											$baslangic=($sayfa*$limit)-$limit;	
										$query=query("select * from urunler INNER JOIN kategoriler ON 
										urunler.kategori_id=kategoriler.kategori_id LIMIT $baslangic, $limit");
										if(mysql_affected_rows()){		
									?>
                                    <?php
									while($row=row($query)){
									?>
									<tr> 
                                    	<td><img src="../assets/media/urunler/slider-kucuk/<?php echo ss($row["urun_resim1"]); ?>" /></td> 
                                    	<td><?php echo ss($row["urun_ad"]); ?></td> 
										<td><?php echo ss($row["kategori_ad"]); ?></td> 
										<td><a href="index.php?do=urun_duzenle&id=<?php echo $row['urun_id'];?>" title="Düzenle"><i class="fa fa-edit"></i> </a>
											<a onclick="return confirm('Ürünü Silmek İstediğinize Emin Misiniz')"  style="margin-left:10px" href="index.php?do=urun_sil&id=<?php echo $row['urun_id'];?>" title="Sil"><i class="fa fa-eraser"></i> </a></td> 
									</tr>
									<?php
										}
									}
									?>  
									
									</tbody>
									</table>
                                 <ul class="pagination">
                                      <li ><a <?php echo $sayfa==1 ? 'class="class="active"' : null ?>  href="index.php?do=urunler&s=<?php echo($sayfa-1)?>"><i class="icon fa fa-arrow-left"></i></a></li>
                                      <?php
                                        for($i=1;$i<=$sayfa_sayisi;$i++){ ?>
                                            <li <?php echo $sayfa==$i ? 'class="active"' : null ?>>
                                                <a href="index.php?do=urunler&s=<?php echo $i?>"><?php echo $i?></a>
                                            </li>
                                    <?php }
                                      ?>
                                    
                                      <li><a <?php echo $sayfa==$sayfa_sayisi ? 'class="class="active"' : null ?>  href="index.php?do=urunler&s=<?php echo ($sayfa+1)?>"><i class="icon fa fa-arrow-right"></i></a></li>
            					</ul>   
								</div>
							</div>
						</div>
						<!-- END BORDERED TABLE PORTLET-->
					</div>   
       
</div>			
			
		
        
        
     