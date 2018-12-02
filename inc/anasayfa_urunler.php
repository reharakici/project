 <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <div class="section-area">
            <ul id="filter" class="clearfix wow bounceInLeft" data-wow-duration="2s" data-wow-delay=".5s">
              <li><a href="" data-filter=".newest">EN ÇOK SATANLAR</a></li>
            </ul>
          </div>
          <!-- end section-area --> 
        </div>
        <!-- end col --> 
      </div>
      <!-- end row --> 
    </div>
    <!-- end container -->
    
    
      
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <div class="section-area">
            <div class="isotope-frame wow bounceInRight" data-wow-duration="2s">
              <ul class="isotope-filter products clearfix">
              
             
                   
                 <!-- 4 TANE EN SON EKLENEN ÜRÜN EKLİYORUM. SATANLARI SONRA EKLİYCEM -->
                   <?php 
				   	$yeni_query=query("select * from urunler order by urun_id desc limit 4");
					while($urun_row=row($yeni_query)){
						$urun_link=URL."/urunler/".$urun_row["urun_link"];
						?>
					   <li class="isotope-item newest products__item"> 
							<a class="products__foto" href="<?php echo $urun_link?>" > 
								<img src="<?php echo URL.'/assets/media/urunler/liste/'.$urun_row["urun_resim1"]?>" alt="<?php echo $urun_row["urun_ad"] ?>" title="<?php echo $urun_row["urun_ad"] ?>"> 
							</a>
							<h4 class="products__name"><a href="<?php echo $urun_link?>"><?php echo $urun_row["urun_ad"] ?></a></h4>
					  
							 <div class="products__inner clearfix"> 
							</div>
						  
					   </li>
						<?php
					}
				   ?>
                   
             
              </ul>
            </div>
          </div>
          <!-- end section-area --> 
        </div>
        <!-- end col --> 
      </div>
      <!-- end row --> 
    </div>
    <!-- end container --> 