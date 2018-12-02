
            <section class="widget widget-category widget-category_mod-a wow bounceInLeft" data-wow-duration="2s">
              <h3 class="widget-title ui-title-block ui-title-block_small"><i class="icon fa fa-bars"></i>KATEGORİLER</h3>
              <div class="block_content">
 				<ul class="list-categories list list-links"> 
                <?php 
					$urun_query=query("select * from urunler");
					$row_urunler=row($urun_query);
					$kategori_query=query("select * from kategoriler");
					
					while($row_kategori=row($kategori_query)){
						$kategori_id=$row_kategori["kategori_id"];
						//KATEGORİDEKİ TOPLAM ÜRÜN SAYISINI ALIYORUM
						$kategori_urun_sayisi=rows(query("select * from urunler WHERE kategori_id='$kategori_id'"));
						//KATEGORİLERİ LİSTELİYORUM
						?>
						 <li class="list-categories__item dropdown"> 
                             <a class="list-sidebar__link dropdown-toggle" data-toggle="dropdown" href="kategoriler/<?php echo $row_kategori['kategori_ad']?>"> 
                                 <a href="kategoriler/<?php echo $row_kategori["kategori_link"]  ?>"><span class="list-categories__name"><?php echo $row_kategori["kategori_ad"]; echo "($kategori_urun_sayisi)"?></span></a>
                                 <span class="list-categories__mark"></span> 
                             </a>
					
					
						</li>
                        <?php
					}
				
				?>
                 
                  
                  </ul>
              </div>
            </section>
            <!-- end widget-category -->
           
         