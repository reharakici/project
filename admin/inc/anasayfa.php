<?php 
	$kategoriAdet=rows(query("select * from kategoriler"));
	$yeniSiparis=rows(query("select distinct siparis_kod from siparisler where siparis_durum=0"));
	$urunBekleyen=rows(query("select distinct siparis_kod from siparisler where siparis_durum=1"));
	$kargoyaVerilen=rows(query("select distinct siparis_kod from siparisler where siparis_durum=2"));
	$bitenSiparis=rows(query("select distinct siparis_kod from siparisler where siparis_durum=3"));
	$urunAdet=rows(query("select * from urunler"));
?>

				<!-- BEGIN PAGE HEADER-->
				<h3 class="page-title">
				Genel Tablo</h3>
				
				<!-- END PAGE HEADER-->
				<!-- BEGIN DASHBOARD STATS -->
				<div class="row">
					<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
						<a class="dashboard-stat dashboard-stat-light blue-soft" href="index.php?do=kategoriler">
						<div class="visual">
							<i class="fa fa-comments"></i>
						</div>
						<div class="details">
							<div class="number">
								 <?php echo $kategoriAdet?>
							</div>
							<div class="desc">
								 Kategori
							</div>
						</div>
						</a>
					</div>

			


                     <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
						<a class="dashboard-stat dashboard-stat-light green-soft" href="index.php?do=urunler">
						<div class="visual">
							<i class="fa fa-shopping-cart"></i>
						</div>
						<div class="details">
							<div class="number">
								 <?php echo $urunAdet?>
							</div>
							<div class="desc">
								 Ürün
							</div>
						</div>
						</a>
					</div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
						<a class="dashboard-stat dashboard-stat-light red-soft" href="index.php?do=mesajlar">
						<div class="visual">
							<i class="fa fa-trophy"></i>
						</div>
						<div class="details">
							<div class="number">
								 <?php echo $okunmamisMesaj?>
							</div>
							<div class="desc">
								 Okunmamış Mesaj
							</div>
						</div>
						</a>
					</div>

				</div>
				<!-- END DASHBOARD STATS -->
				<div class="clearfix">
				</div>
				
				
				
				
			
