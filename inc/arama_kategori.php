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
						LEFT JOIN markalar ON urunler.marka_id=markalar.marka_id 
						LEFT JOIN urun_cesit ON urunler.urun_cesit_id=urun_cesit.urun_cesit_id 
						LEFT JOIN alt_kategoriler ON urun_cesit.alt_kategori_id=alt_kategoriler.alt_kategori_id 
						LEFT JOIN kategoriler ON alt_kategoriler.kategori_id=kategoriler.kategori_id 						
						where urunler.urun_ad like '%".$ifade."%' && kategoriler.kategori_link='$kategori_link'"));
					
						$limit=9;
						$sayfa_sayisi=ceil($urun_sayisi/$limit);
						$baslangic=($sayfa*$limit)-$limit;	
						if(isset($_GET["so"])){
							$sira=g("so");
						}else{
							$sira=3;
						}
						switch($sira){
							case 1:
								$sira_sorgu=" order by urunler.urun_indirimli_fiyat desc ";
							break;
							case 2:
								$sira_sorgu=" order by urunler.urun_indirimli_fiyat asc ";
							break;
							case 3:
								$sira_sorgu=" order by urunler.urun_id desc ";
							break;
							case 4:
								$sira_sorgu=" order by urunler.urun_id asc ";
							break;
							default:
								$sira_sorgu=" order by urunler.urun_id desc ";
							break;
						}
						$query=query("select * from urunler 
						LEFT JOIN markalar ON urunler.marka_id=markalar.marka_id 
						LEFT JOIN urun_cesit ON urunler.urun_cesit_id=urun_cesit.urun_cesit_id 
						LEFT JOIN alt_kategoriler ON urun_cesit.alt_kategori_id=alt_kategoriler.alt_kategori_id 
						LEFT JOIN kategoriler ON alt_kategoriler.kategori_id=kategoriler.kategori_id 						
						where urunler.urun_ad like '%".$ifade."%' && kategoriler.kategori_link='$kategori_link' ". $sira_sorgu." LIMIT $baslangic, $limit"); 
						
						
  ?>
   <div class="border-main">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <aside class="sidebar">
             <?php include("menu_kategori.php");?>
              <!-- end widget-category -->
      
              

              
            </aside>
            <!-- end sidebar --> 
          </div>
          <!-- end col -->
          
          <div class="col-md-9">
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
            
           
            
            <div class="sorting clearfix"> 
         
              <div class="sorting__selects">

                
              </div>
            </div>
            <!-- end sorting -->
            
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
					  
							 <div class="products__inner clearfix"> 
								<span class="products__price-new">
									<span id="fiyat<?php echo $row["urun_id"]?>"><?php echo $row["urun_indirimli_fiyat"] ?></span>
								 TL</span> 
                                 	<span class="products__price-old"><?php echo $row["urun_fiyat"] ?> TL</span>
							</div>
						  <footer class="products-btns clearfix">
							<div class="enumerator">
								<a class="minus_btn card-btns__btn"><i class="icon fa fa-minus"></i></a>
								<input type="text" id="adet<?php echo $row["urun_id"]?>" value="1" placeholder="1">
								 <a class="plus_btn card-btns__btn"><i class="icon fa fa-plus"></i></a> 
							</div>
							<button onclick="$.sepeteEkle(<?php echo $row["urun_id"]?>,$('#adet<?php echo $row["urun_id"]?>').val(),<?php echo $row["urun_indirimli_fiyat"]?>)" class="products-btns__btn products-btns__add"><i class="icon icon-bag color_primary" aria-hidden="true"></i>  Sepete Ekle</button>
						 </footer>
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