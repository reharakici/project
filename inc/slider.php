         <div id="main-slider_1" class="main-slider main-slider_mod-1 enable-owl-carousel owl-theme_mod-a owl-main-slider owl-carousel owl-theme wow bounceInRight" data-wow-duration="2s"
								data-pagination="false"
								data-single-item="true"
								data-auto-play="5000"
								data-transition-style="fade"
								data-main-text-animation="true"
								data-after-init-delay="4000"
								data-after-move-delay="2000"
								data-stop-on-hover="true">
            <?php
				$slider_query=query("select * from slider_resim order by slider_resim_id desc");
				while($row=row($slider_query)){
				?>
					<div class="item">
              <div class="item-inner"><img style="width:100%;height:500px;margin-top:-50px;"class="img-responsive" src="<?php echo URL.'/assets/media/main-slider/'.$row["slider_resim_ad"];?>"  alt="PARODİ"> </div>
             
            </div>
                
                <?php
				}
			?>                    
      
         </div>
          <!-- end main-slider -->
          
         
 
