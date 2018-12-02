<?php
	
	require "../sistem/ayar.php";
	require "../sistem/sistem.php";
	if ($_POST){
		$urun_id = $_POST['id'];
		$action=$_POST['islem'];
		$miktar=$_POST['miktar'];		
		$fiyat=$_POST['fiyat'];
		if(!$_SESSION['cart']){
			$cart=array();
		}else{
			$cart = $_SESSION['cart'];
		}
		switch ($action) {
			case 'add':
				if(count($cart)>0) {
					$buldum=false;
					for($i=0;$i<count($cart);$i++){
						if($cart[$i][0]==$urun_id){
							$sep_miktar=$cart[$i][1]+$miktar;
							
							$cart[$i][1]=$sep_miktar;
							$buldum=true;
							break;
						}
					}
					if(!$buldum){
						array_push($cart,[$urun_id,$miktar,$fiyat]);
					}
			
				} else {
					array_push($cart,[$urun_id,$miktar,$fiyat]);
				}		
				$_SESSION['cart']=$cart;	
				
				break;
			case 'delete':
				if ($cart) {
					$gecici=array();
					for($i=0;$i<count($cart);$i++){
						if($cart[$i][0]!=$urun_id){
							array_push($gecici,$cart[$i]);
						}
					}
					$_SESSION['cart']=$gecici;
				}
				break;			
			case 'update':
				
					for($i=0;$i<count($cart);$i++){
						if($cart[$i][0]==$urun_id){							
							$cart[$i][1]=$miktar;
							break;
						}
					}
			
				$_SESSION['cart']=$cart;
				break;
		}
		
				$donus_dizi[0]=sepetAdet();
				$donus_dizi[1]=sepetToplam();	
		 		echo $donus_dizi[0]."--".$donus_dizi[1];
	
		
	
	}
	

?>