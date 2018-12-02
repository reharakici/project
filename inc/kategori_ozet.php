  <div class="section-area">
            <ul class="links-categories list-unstyled">
            <?php 
				$kategori_query=query("select * from kategoriler");
				while($kategori_row=row($kategori_query)){
			?>		
				  <li class="links-categories__item wow bounceInRight" data-wow-delay=".5s" data-wow-duration="2s">
                  	 <a class="links-categories__link" href="<?php echo URL.'/kategoriler/'.$kategori_row["kategori_link"]?>">
                     	 <img class="img-responsive" src="<?php echo URL.'/assets/media/kategori_resim/'.$kategori_row["kategori_resim"] ?>" width="300px"  height="170px"  alt="<?php echo $kategori_row["kategori_ad"]?>" title="<?php echo $kategori_row["kategori_ad"]?>"> <span class="links-categories__inner">
                    <!--     <span class="links-categories__label">NEW</span> -->
                         <span class="links-categories__name"><?php echo $kategori_row["kategori_ad"]?></span> </span> 
                     </a> 
                  </li>
                
            <?php    
				}
			?>
            
           
            </ul>
            <!-- end links-categories --> 
  </div>          