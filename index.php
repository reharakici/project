<!-- I took this template from templatemonster and I wrote php - javscript side -->
<?php 
require_once("sistem/ayar.php"); //calling ayar.php
require_once "sistem/sistem.php";	//calling sistem.php
include("inc/phpmail/class.phpmailer.php");	//calling phpmailer library


?>
<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimal-ui">
<title><?php include("inc/title.php");?></title>
<meta name="description" content="<?php include("inc/description.php")?>">
<meta name="keywords" content="<?php include("inc/keywords.php")?>" />
<meta http-equiv="content-language" content="tr-TR" />
<link href="<?php echo URL?>/favicon.png"  type="image/x-icon" rel="shortcut icon">
<link href="<?php echo URL?>/assets/css/master.css"  rel="stylesheet">

<!-- SWITCHER -->
<link href="<?php echo URL?>/assets/plugins/switcher/css/switcher.css"  rel="stylesheet" id="switcher-css" media="all">
<link href="<?php echo URL?>/assets/plugins/switcher/css/color1.css" rel="alternate stylesheet" title="color1" media="all">
<link href="<?php echo URL?>/assets/plugins/switcher/css/color2.css" rel="alternate stylesheet" title="color2" media="all">
<link href="<?php echo URL?>/assets/plugins/switcher/css/color3.css" rel="alternate stylesheet" title="color3" media="all">
<link href="<?php echo URL?>/assets/plugins/switcher/css/color4.css" rel="alternate stylesheet" title="color4" media="all">
<link href="<?php echo URL?>/assets/plugins/switcher/css/color5.css" rel="alternate stylesheet" title="color5" media="all">
<link href="<?php echo URL?>/assets/css/sepet.css" rel="stylesheet">

<script src="<?php echo URL?>/assets/plugins/jquery/jquery-1.11.3.min.js"></script>  <!-- jquery javascript library -->

</head>

<body>
<!-- Loader -->

<!-- Loader end -->
<div class="layout-theme animated-css"  data-header="sticky" data-header-top="200"  > 
  <!-- Start Switcher -->
  <div class="switcher-wrapper">


  </div>
  <!-- End Switcher -->
  
  <div id="wrapper">
    <header class="header">
      
      <!-- end top-header -->
      
      <div class="container">
        <div class="header-inner">
          <div class="row">
            <div class="col-sm-3 col-xs-12"> <a href="<?php echo URL ?>"  class="logo"> <img class="logo__img" src="assets/media/logo/logo.jpg"  height="51" width="162" alt="Logo"> </a> </div>
            <form class="product-search" action="<?php echo URL?>" method="get">
            	<input type="hidden" name="do" value="ara" />
            <div class="col-sm-6 col-xs-12">
              <div class="header-search clearfix">
                <div class="header-search__filter">
                  <div class="jelect" >
                  
                    <input name="kategori" value="tum" data-text="imagemin" type="text" class="jelect-input">
                    <div tabindex="0" role="button" class="jelect-current">Tümü</div>
                    <ul class="jelect-options">
                    <?php
						$kat_query=query("select * from kategoriler");
						while($kategori=row($kat_query)){
							echo  '<li data-val="'.$kategori["kategori_link"].'" tabindex="0" class="jelect-option">'.$kategori["kategori_ad"].'</li>';
						}
					?>
                      
                    </ul>
                  </div>
                  <!-- end jelect --> 
                  
                </div>
                <div class="header-search__form">
                  
                    <input name="ifade" required class="product-search__field" id="searchQuery" type="search">
                    <button type="submit" class="product-search__btn ui-btn ui-btn_primary">ARAMA</button>
                  </form>
                </div>
              </div>
              <!-- end header-search --> 
            </div>
            <!-- end col -->
          
            
          </div>
          <!-- end row--> 
        </div>
        <!-- end header-inner--> 
      </div>
      <!-- end container--> 
    </header>
    <!-- HEADER END -->
    
    <div class="top-nav ">
      <div class="container">
        <div class="row">
          <div class="col-md-12  col-xs-12">
            <div  class="navbar yamm">
              <div class="navbar-header hidden-md  hidden-lg  hidden-sm">
                <button type="button" data-toggle="collapse" data-target="#navbar-collapse-1" class="navbar-toggle"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                <a href="javascript:void(0);" class="navbar-brand">Menü</a> </div>
              <div id="navbar-collapse-1" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                  <li><a style="font-size:22px;font-family:Consolas, 'Andale Mono', 'Lucida Console', 'Lucida Sans Typewriter', Monaco, 'Courier New', monospace;" href="<?php echo URL?>">Anasayfa</a>
                  </li>
                  <li>
                   <a style="font-size:22px;font-family:Consolas, 'Andale Mono', 'Lucida Console', 'Lucida Sans Typewriter', Monaco, 'Courier New', monospace;" href="<?php echo URL?>/iletisim">İletişim</a>
                  </li>
                  
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

		 <?php  
		 tema_icerik(); //calling tema_icerik function
		?>

	  
    


   
    
    
    <footer class="footer footer_mod-a wow bounceInUp" data-wow-duration="2s">
   
      
      <div class="footer-bottom">
        <div class="container">
          <div class="row">
            <div class="col-xs-12">
              <div class="copyright">Copyright ©  <a class="color_primary" href="javascript:void(0);">PARODİ </a><span class="br">Her Hakkı Saklıdır.</span></div>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </div>
  
</div>
<!-- Template's js codes START --> 

<script src="<?php echo URL?>/assets/js/modernizr.custom.js" ></script>
<script src="<?php echo URL?>/assets/plugins/isotope/jquery.isotope.min.js" ></script> 
<script src="<?php echo URL?>/assets/plugins/owl-carousel/owl.carousel.min.js" ></script> 
<script src="<?php echo URL?>/assets/js/waypoints.min.js" ></script> 
<script src="<?php echo URL?>/assets/plugins/switcher/js/dmss.js" ></script> 
<script src="<?php echo URL?>/assets/js/cssua.min.js" ></script> 
<script src="<?php echo URL?>/assets/js/wow.min.js" ></script> 
<script src="<?php echo URL?>/assets/js/custom.js" ></script>
<!-- Template's js codes FINISH --> 
<!-- Jquery and Bootstrap libraries START --> 
<script src="<?php echo URL?>/assets/plugins/prettyphoto/js/jquery.prettyPhoto.js" ></script> 
<script src="<?php echo URL?>/../../cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js" ></script> 
<script src="<?php echo URL?>/assets/plugins/jelect/jquery.jelect.js" ></script> 
<script src="<?php echo URL?>/assets/plugins/nouislider/jquery.nouislider.all.min.js" ></script> 
<script src="<?php echo URL?>/assets/js/jquery-migrate-1.2.1.js" ></script>
<script src="<?php echo URL?>/assets/plugins/bootstrap/js/bootstrap.min.js" ></script>
<script src="<?php echo URL?>/assets/plugins/switcher/js/bootstrap-select.js" ></script> 
<!-- Jquery and Bootstrap libraries FINISH --> 
</body>
</html>
