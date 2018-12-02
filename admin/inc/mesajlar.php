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
									<i class="fa fa-table"></i>MESAJLAR
								</div>
								
							</div>
							<div class="portlet-body">
								<div class="table-scrollable">
									<table class="table table-bordered table-hover" >
									<thead>
									<tr>
                                    	<th>
                                        	Başlık
                                        </th>
                                        <th>
											 Gönderen
										</th>
                                        <th>
											 Telefon
										</th>

                                        <th>
                                        	Tarih
                                        </th>
                                        <th>
                                        	İşlem
                                        </th>
                                       
										
									</tr>
									</thead>
									<tbody>
								 <?php
								 		$sayfa=g("s") ? g("s"):1;	
					
										$mesaj_sayisi=rows(query("select * from mesajlar order by mesaj_okunma asc, mesaj_tarih desc "));
										
											$limit=10;
											$sayfa_sayisi=ceil($mesaj_sayisi/$limit);
											$baslangic=($sayfa*$limit)-$limit;	
										$query=query("select * from mesajlar order by mesaj_okunma asc, mesaj_tarih desc  LIMIT $baslangic, $limit");
										if(mysql_affected_rows()){		
									?>
                                    <?php
									while($row=row($query)){
									?>
									<tr <?php if($row["mesaj_okunma"]==0){ echo 'style="background-color:#dce6d3"';} ?> > 
                                    	
                                    	<td><?php echo ss($row["mesaj_konu"]); ?></td> 
                                        <td><?php echo ss($row["mesaj_ad"]); ?></td> 
                                        <td><?php echo ss($row["mesaj_tel"]); ?></td> 
                                        
                                  		<td><?php echo ss(tarih($row["mesaj_tarih"])); ?></td> 
                                    	
										<td><a href="index.php?do=mesaj_oku&id=<?php echo $row['mesaj_id'];?>" title="Oku">Oku </a>
											<a onclick="return confirm('Mesajı Silmek İstediğinize Emin Misiniz')"  style="margin-left:10px" href="index.php?do=mesaj_sil&id=<?php echo $row['mesaj_id'];?>" title="Sil"><i class="fa fa-eraser"></i> </a></td> 
									</tr>
									<?php
										}
									}
									?>  
									
									</tbody>
									</table>
                                 <ul class="pagination">
                                      <li ><a <?php echo $sayfa==1 ? 'class="active"' : null ?>  href="index.php?do=mesajlar&s=<?php echo($sayfa-1)?>"><i class="icon fa fa-arrow-left"></i></a></li>
                                      <?php
                                        for($i=1;$i<=$sayfa_sayisi;$i++){ ?>
                                            <li <?php echo $sayfa==$i ? 'class="active"' : null ?>>
                                                <a href="index.php?do=mesajlar&s=<?php echo $i?>"><?php echo $i?></a>
                                            </li>
                                    <?php }
                                      ?>
                                    
                                      <li><a <?php echo $sayfa==$sayfa_sayisi ? 'class="active"' : null ?>  href="index.php?do=mesajlar&s=<?php echo ($sayfa+1)?>"><i class="icon fa fa-arrow-right"></i></a></li>
            					</ul>   
								</div>
							</div>
						</div>
						<!-- END BORDERED TABLE PORTLET-->
					</div>   
       
</div>			
			
		
        
        
     