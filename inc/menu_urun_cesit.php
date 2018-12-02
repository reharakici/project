
            <section class="widget widget-category widget-category_mod-a wow bounceInLeft" data-wow-duration="2s">
              <h3 class="widget-title ui-title-block ui-title-block_small"><i class="icon fa fa-bars"></i><?php echo $alt_kategori_bilgi["alt_kategori_ad"]?></h3>
              <div class="block_content">
 				<ul class="list-categories list list-links">
                <?php 
					$urun_cesit_query=query("select * from urun_cesit INNER JOIN alt_kategoriler ON
						urun_cesit.alt_kategori_id=alt_kategoriler.alt_kategori_id
						where alt_kategoriler.alt_kategori_link='$alt_kategori_link'");
					while($row_urun_cesit=row($urun_cesit_query)){
						//ÜRÜN ÇEŞİDİNDEKİ TOPLAM ÜRÜN SAYISINI ALIYORUM
						$urun_cesit_urun_sayisi=rows(query("select * from urunler 
						INNER JOIN urun_cesit ON urunler.urun_cesit_id=urun_cesit.urun_cesit_id 						
						where urun_cesit.urun_cesit_id=".$row_urun_cesit["urun_cesit_id"]));
						//ÜRÜN ÇEŞİTLERİNİ LİSTELİYORUM
						echo '<li class="list-categories "> <a class="list-sidebar__link "  href="'.URL.'/kategoriler/'.$kategori_link.'/'.$alt_kategori_link.'/'.$row_urun_cesit["urun_cesit_link"].'"> <span class="list-categories__name">'.$row_urun_cesit["urun_cesit_ad"].' ('.$urun_cesit_urun_sayisi.')</span><span class="list-categories__mark"></span> </a>';
						echo '</li>';
					}
				
				?>
                 
                  
                  </ul>
              </div>
            </section>
            <!-- end widget-category -->
           
         