<?php echo !defined("ADMIN") ? die("nooluyo beyavv"): null;
$uye_id=session("uye_id");
$query=query("select * from uyeler where uye_id=$uye_id");
$uye_bilgi=row($query);
$uye_link=$uye_bilgi["uye_link"];
$uye_yetki=$uye_bilgi["uye_rutbe"];	
$okunmamisMesaj=rows(query("select * from mesajlar where mesaj_okunma=0"));					
?>
<!-- BEGIN HEADER -->
<div class="page-header navbar navbar-fixed-top">
	<!-- BEGIN HEADER INNER -->
	<div class="page-header-inner container">
		<!-- BEGIN LOGO -->
		<div class="page-logo">
        
			<a href="index.php">
            
			<h3 style="color:White">SUZET</H3>
			</a>
			<div class="menu-toggler sidebar-toggler hide">
				<!-- DOC: Remove the above "hide" to enable the sidebar toggler button on header -->
			</div>
		</div>
		<!-- END LOGO -->
		<!-- BEGIN RESPONSIVE MENU TOGGLER -->
		<a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
		</a>
		<!-- END RESPONSIVE MENU TOGGLER -->
		<!-- BEGIN PAGE ACTIONS -->
		<!-- DOC: Remove "hide" class to enable the page header actions -->
		<div class="page-actions">
			<div class="btn-group">
				<button type="button" class="btn btn-circle red-pink dropdown-toggle" data-toggle="dropdown">
				<i class="icon-bar-chart"></i>&nbsp;<span class="hidden-sm hidden-xs">Yeni Ekle&nbsp;</span>&nbsp;<i class="fa fa-angle-down"></i>
				</button>
				<ul class="dropdown-menu" role="menu">
					<li>
						<a href="index.php?do=kategori_ekle">
						<i class="icon-present"></i> Yeni Kategori </a>
					</li>
			
   

                    <li>
						<a href="index.php?do=urun_ekle">
						<i class="icon-present"></i> Yeni Ürün Ekle</span>
						</a>
					</li>
					
					<li class="divider">
					</li>					
				</ul>
			</div>
			
		</div>
		<!-- END PAGE ACTIONS -->
		<!-- BEGIN PAGE TOP -->
		<div class="page-top">
			
			<!-- BEGIN TOP NAVIGATION MENU -->
			<div class="top-menu" style="margin-top:15px;">
            	<a href="index.php?do=cikis_yap" style="margin:0px 30px 0 0;" >
								<i class="icon-key"></i> Çıkış </a>
				
			</div>
			<!-- END TOP NAVIGATION MENU -->
		</div>
		<!-- END PAGE TOP -->
	</div>
	<!-- END HEADER INNER -->
</div>
<!-- END HEADER -->
<div class="clearfix">
</div>
<!-- BEGIN CONTAINER -->
<div class="container">
	<div class="page-container">
		<?php include("menu.php")?>
		<!-- BEGIN CONTENT -->
		<div class="page-content-wrapper">
			<div class="page-content">
<?php
		
			$do= g("do");
			if(file_exists("inc/{$do}.php")){
				require("inc/{$do}.php");				
			}else{
				 if(session("uye_rutbe")==1){
					require("inc/anasayfa.php");
			 	 }else if(session("uye_rutbe")==2){
					 require_once("inc/bakicaz.php");
			 	 }	
			}
		
		?>
			</div>
		</div>	
	</div>	
	<!-- END CONTAINER -->
	<!-- BEGIN FOOTER -->
	<div class="page-footer">

		<div class="scroll-to-top">
			<i class="icon-arrow-up"></i>
		</div>
	</div>
	<!-- END FOOTER -->
	
</div>




