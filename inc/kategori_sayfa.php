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
.baslik{
	background-color:#CCFFFF;
	height:60px;	
	
}
.baslik h1{
	line-height:60px;	
	color:#336600;
	font-size:30px;
	font-family:Gotham, "Helvetica Neue", Helvetica, Arial, sans-serif
}

 </style>
  <?php
  $_SESSION["kategori_session"]=true;										
  $kategori_bilgi=row(query("select * from kategoriler where kategori_link='$kategori_link'"));
  $kategori_id=$kategori_bilgi["kategori_id"];
  ?>
   <div class="border-main">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <aside class="sidebar">

              <!-- end widget-category -->
              
              
              <!-- end widget-price -->
              

              
            </aside>
            <!-- end sidebar --> 
          </div>
          <!-- end col -->
          
          <div class="col-md-12">
          <div class="row baslik">
               <div class="col-md-offset-5 col-md-4">
             	 <h1 style="align:center;" class="ui-title-page"><?php echo $kategori_bilgi["kategori_ad"]?></h1>
               </div>
          	

          </div>
            <div class="row">
              <div class="col-xs-12">
                <div class="wrap-title-page">
                  <ol class="breadcrumb">
                    <li><a href="<?php echo URL?>">Anasayfa</a></li>
                    <li class="active"><?php echo $kategori_bilgi["kategori_ad"]?></li>
                  </ol>
                </div>
                <!-- end wrap-title-page --> 
              </div>
              <!-- end col --> 
            </div>
            <!-- end row -->
            
           
            
            <!-- end sorting -->
            
            <div class="section-area">
              <ul class="products clearfix">
              	<?php
					
					$sayfa=g("s") ? g("s"):1;	
					
					$urun_sayisi=rows(query("select * from urunler 
						INNER JOIN kategoriler ON 
						urunler.kategori_id=kategoriler.kategori_id"));
					
						$limit=20;
						$sayfa_sayisi=ceil($urun_sayisi/$limit);
						$baslangic=($sayfa*$limit)-$limit;	
						if(isset($_GET["so"])){
							$sira=g("so");
						}else{
							$sira=3;
						}
						$query=query("select * from urunler 
						WHERE kategori_id='$kategori_id' LIMIT $baslangic, $limit");
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
              <li ><a <?php echo $sayfa==1 ? 'class="not-active"' : null ?>  href="<?php echo URL.'/kategoriler/'.$kategori_link.'/so='.$sira.'/s/'.($sayfa-1)?>"><i class="icon fa fa-arrow-left"></i></a></li>
              <?php
			  	for($i=1;$i<=$sayfa_sayisi;$i++){ ?>
					<li <?php echo $sayfa==$i ? 'class="active"' : null ?>>
                    	<a href="<?php echo URL.'/kategoriler/'.$kategori_link.'/so='.$sira.'/s/'.$i?>"><?php echo $i?></a>
                    </li>
			<?php }
			  ?>
            
              <li><a <?php echo $sayfa==$sayfa_sayisi ? 'class="not-active"' : null ?>  href="<?php echo URL.'/kategoriler/'.$kategori_link.'/so='.$sira.'/s/'.($sayfa+1)?>"><i class="icon fa fa-arrow-right"></i></a></li>
            </ul>
          </div>
          <!-- end col --> 
        </div>
        <!-- end row --> 
      </div>
      <!-- end container --> 
    </div>
    <!-- end border-main -->