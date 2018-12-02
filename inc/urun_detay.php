  <style>
  .bedenler{
		font-size:25px;
		border:2px solid #fff;  
  }
  </style>
  <div class="border-main">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <div class="wrap-title-page">

              <ol class="breadcrumb">
                <li><a href="<?php echo URL?>">Anasayfa</a></li>
                <li><a href="<?php echo URL.'/kategoriler/'.$urun_bilgi["kategori_link"]?>"><?php echo $urun_bilgi["kategori_ad"]?></a></li>
               
                <li class="active"><?php echo $urun_bilgi["urun_ad"]?></li>
              </ol>
            </div>
            <!-- end wrap-title-page --> 
          </div>
          <!-- end col --> 
        </div>
        <!-- end row -->
        
        <section class="product-card">
        <div class="row">
          <div class="col-sm-5">
            <div class="product-card__slider" id="image-block">
              <div class="slider-product flexslider">
              <ul class="slides">
              	<?php 
					$resimler=array($urun_bilgi["urun_resim1"],$urun_bilgi["urun_resim2"],$urun_bilgi["urun_resim3"],$urun_bilgi["urun_resim4"],$urun_bilgi["urun_resim5"],$urun_bilgi["urun_resim6"],$urun_bilgi["urun_resim7"],$urun_bilgi["urun_resim8"],$urun_bilgi["urun_resim9"],$urun_bilgi["urun_resim10"]);
					foreach($resimler as $resim){
						if($resim!=" "){?>
							<li> <a href="<?php echo URL.'/assets/media/urunler/buyuk/'.$resim ?>"  class="prettyPhoto"> <img src="<?php echo URL.'/assets/media/urunler/buyuk/'.$resim ?>" title="<?php echo $urun_bilgi["urun_ad"]?>" alt="<?php echo $urun_bilgi["urun_ad"]?>"> </a> </li>
					<?php }
					}
				?>
              
              </ul>
            </div>
            <div class="carousel-product flexslider">
            <ul class="slides">
            
            	<?php 
					$resim_sayi=1;
					foreach($resimler as $resim){
						if($resim!=" "){?>
                        
							<li> <img src="<?php echo URL.'/assets/media/urunler/slider-kucuk/'.$resim ?>"  title="<?php echo $urun_bilgi["urun_ad"]?>" alt="<?php echo $urun_bilgi["urun_ad"]?>" /></a> <p style="text-align:center;font-size:20px;color:red;"><?php echo $resim_sayi ?></p></li>
                            
                            <?php $resim_sayi++; ?>
					<?php }
					}
				?>
              
            </ul>
          </div>
        </div>
        <!-- end product-card__slider --> 
      </div>
      <div class="col-sm-7">
        <div class="product-card__main">
          <h1 class="product-card__name"><?php echo $urun_bilgi["urun_ad"]?></h1>
          
          
      
          <div class="product-card__description">
            <p>
				<?php
					echo $urun_bilgi["urun_aciklama"];
				?>
            </p>
          </div>
          
          
          
        </div>
      </div>
    </div>
    <!-- end row -->
    </section>
    <!-- end product-card -->
    
  
    
     <section class="section-area section-default wow bounceInRight" data-wow-duration="2s">
              <div class="wrap-slider">
                <div class="products clearfix owl-carousel owl-theme owl-theme_mod-b enable-owl-carousel"
												data-min480="2"
												data-min768="3"
												data-min992="3"
												data-min1200="3"
												data-pagination="false"
												data-navigation="true"
												data-auto-play="400000"
												data-stop-on-hover="true">
               <?php 
		$sicak_teklif_query=query("select * from urunler order by urun_id desc limit 10");
?>

				<?php 
					while($sicak_teklif_row=row($sicak_teklif_query)){
						$urun_link=URL."/urunler/".$sicak_teklif_row["urun_link"];
					?>                                 
                   <li class="products__item"> 
							<a class="products__foto" href="<?php echo $urun_link?>" > 
								<img src="<?php echo URL.'/assets/media/urunler/liste/'.$sicak_teklif_row["urun_resim1"]?>" alt="<?php echo $sicak_teklif_row["urun_ad"] ?>" title="<?php echo $sicak_teklif_row["urun_ad"] ?>"> 
							</a>
							<h4 class="products__name"><a href="<?php echo $urun_link?>"><?php echo $sicak_teklif_row["urun_ad"] ?></a></h4>

						  
					   </li>
                 <?php
					}
				?>
                </div>
                <!-- end products -->
                <br><br>
              </div>
              <!-- end wrap-slider --> 
            </section>
    <!-- end section-products_mod-a --> 
  </div>
  <!-- end container --> 
</div>
<!-- end border-main -->
<script src="<?php echo URL.'/assets/plugins/flexslider/jquery.flexslider.js' ?>" ></script> 