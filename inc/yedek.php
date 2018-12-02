<?php
			if($_SESSION['cart']){	
			$cart = $_SESSION['cart'];
			?>
            
             <form>
                <table class="shop_table cart">
                    <!--Table header-->
                    <thead>
                        <tr>
                            <th class="product-remove">&nbsp;</th>
                            <th class="product-thumbnail">Ürün</th>
                            <th class="product-name">&nbsp;</th>
                            <th class="product-price">Fiyat</th>
                            <th class="product-quantity">Adet</th>
                            <th class="product-subtotal">Toplam</th>
                        </tr>
                    </thead>
                    <!--End table header-->

                    <!--Table body-->
                    <tbody>

                      
                       
                 
			 
			<?php
			
			
				
				
				if(count($cart)>0) {		
					for($i=0;$i<count($cart);$i++){
						$urun_id=$cart[$i][0];
						$miktar=$cart[$i][1];	
						$fiyat=$cart[$i][2];
						$urun_query=row(query("select * from urunler 
								LEFT JOIN markalar ON urunler.marka_id=markalar.marka_id
								LEFT JOIN urun_cesit ON urunler.urun_cesit_id=urun_cesit.urun_cesit_id 
								LEFT JOIN alt_kategoriler ON urun_cesit.alt_kategori_id=alt_kategoriler.alt_kategori_id 
								LEFT JOIN kategoriler ON alt_kategoriler.kategori_id=kategoriler.kategori_id 						
								where urunler.urun_id='$urun_id'"));
						?>
                         
                        	  <tr class="cart_item">
                                <td class="product-remove">
                                    <a href="javascript:void(0);" onClick="$.sepetten_urun_cikar2(<?php echo $urun_query["urun_id"]?>)" class="remove" title="Bu Ürünü Çıkar"></a>
                                </td>
                                <td class="product-thumbnail">
                                    <img class="img-responsive" src="<?php echo URL.'/assets/media/urunler/cart/'.$urun_query["urun_resim1"]?>"  alt="ürün ismi">
                                </td>
    
                                <td class="product-name">
                                    <a href="<?php echo URL."/urunler/".$urun_query["urun_link"];?>"> <?php echo $urun_query["urun_ad"]?> </a>
                                </td>
                                <td class="product-price">
                                    <span class="amount"><?php echo $fiyat?> TL</span>
                                </td>
    					  
                                <td class="product-quantity">
                                    <div class="quantity">
                                        <input type="number" value="<?php echo $miktar?>" step="1" min="0" name="cart" value="1" title="Qty" class="input-text qty text" size="4" />
                                    </div>
                                </td>
    
                                <td class="product-subtotal">
                                    <span class="amount"><?php echo $fiyat*$miktar?> TL</span>
                                </td>
                      		  </tr>
						  
					<?php    						
					}
					
				}
								
				?>
              
                  <tr class="order-total">
                            <td class="product-remove">
                                
                            </td>
                            <td class="product-thumbnail">
                                
                            </td>

                            <td class="product-name">
                                
                            </td>
                            <td class="product-price">
                               
                            </td>

                            <td class="product-price">
                              <span>SİPARİŞ TOPLAMI</span>
                            </td>
							
                            <td class="product-subtotal">
                                <span class="amount"><?php echo sepetToplam();?> ₺</span>
                            </td>
                        </tr>

                        <tr>

                            <td class="actions" colspan="6">
                                <a class="back-shop" href="#"><i class="fa fa-angle-left"></i> Alışverişe Devam Et</a>
                                <button class="update-cart" type="submit">satın al</button>
                            </td>
                            
                        </tr>

                    </tbody>
                    <!--End table body-->
                </table>
            </form>
            <!--End form table-->
                
                
           <?php     	
			}else{
				echo '<h2>Sepetinizde Henüz Ürün Bulunmamaktadır...</h2>';
			}
		?>
		
        $('#adet<?php echo $urun_query["urun_id"]?>').val()