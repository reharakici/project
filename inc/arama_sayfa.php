 <style>
 	.not-active {
   pointer-events: none;
   cursor: default;
   
}
.sol_filtre{
	background-color:#E9E9E9;
	padding:5px;
	margin-right:3px;
}
 </style>
  <?php
	$sayfa=g("s") ? g("s"):1;	
					
					$urun_sayisi=rows(query("select * from urunler 						
						where urunler.urun_keyw like '%".$ifade."%'"));
					
						$limit=9;
						$sayfa_sayisi=ceil($urun_sayisi/$limit);
						$baslangic=($sayfa*$limit)-$limit;	
						if(isset($_GET["so"])){
							$sira=g("so");
						}else{
							$sira=3;
						}
						
						$query=query("select * from urunler 					
						where urunler.urun_keyw like '%".$ifade."%' ". $sira_sorgu." LIMIT $baslangic, $limit"); 
						
						
  ?>
   <div class="border-main">
      <div class="container">
        <div class="row">

          
          <div class="col-md-12">
            <div class="row">
              <div class="col-xs-12">
                <div class="wrap-title-page">
                  <h1 class="ui-title-page"><?php echo $urun_sayisi?> Sonuç Listeleniyor</h1>
                  <ol class="breadcrumb">
                    <li><a href="<?php echo URL?>">Anasayfa</a></li>
                   
                  </ol>
                </div>
                <!-- end wrap-title-page --> 
              </div>
              <!-- end col --> 
            </div>
            <!-- end row -->
            
           
            
            <div class="section-area">
              <ul class="products clearfix">
              	<?php
					
					
						while($row=row($query)){	
				?>
                
              
            	 <li class="products__item"> 
							<a class="products__foto" href="<?php echo URL.'/urunler/'.$row["urun_link"]?>" > 
								<img src="<?php echo URL.'/assets/media/urunler/liste/'.$row["urun_resim1"]?>" alt="<?php echo $row["urun_ad"] ?>" title="<?php echo $row["urun_ad"] ?>"> 
							</a>
							<h4 class="products__name"><a href="<?php echo URL.'/urunler/'.$row["urun_link"]?>"><?php echo $row["urun_ad"] ?></a></h4>
					  
							 
						 
					   </li>
				<?php
						}
				?>            
              </ul>
              <!-- end products --> 
            </div>
            <!-- end section-area -->
            <ul class="pagination">
              <li ><a <?php echo $sayfa==1 ? 'class="not-active"' : null ?>  href="<?php echo URL.'/arama/tum/'.$ifade.'/so='.$sira.'/s/'.($sayfa-1)?>"><i class="icon fa fa-arrow-left"></i></a></li>
              <?php
			  	for($i=1;$i<=$sayfa_sayisi;$i++){ ?>
					<li <?php echo $sayfa==$i ? 'class="active"' : null ?>>
                    	<a href="<?php echo URL.'/arama/tum/'.$ifade.'/so='.$sira.'/s/'.$i?>"><?php echo $i?></a>
                    </li>
			<?php }
			  ?>
            
              <li><a <?php echo $sayfa==$sayfa_sayisi ? 'class="not-active"' : null ?>  href="<?php echo URL.'/arama/tum/'.$ifade.'/so='.$sira.'/s/'.($sayfa+1)?>"><i class="icon fa fa-arrow-right"></i></a></li>
            </ul>
          </div>
          <!-- end col --> 
        </div>
        <!-- end row --> 
      </div>
      <!-- end container --> 
    </div>
    <!-- end border-main -->