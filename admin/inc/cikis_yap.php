<?php echo !defined("ADMIN") ? die("nooluyo beyavv"): null;?>
<?php
	unset($_SESSION["login"]);
	unset($_SESSION["uye_id"]);
	unset($_SESSION["uye_rutbe"]);
	unset($_SESSION["uye_kadi"]);
	unset($_SESSION["uye_ad"]);
	unset($_SESSION["uye_soyad"]);
	
	session_destroy();
	go("index.php",1);
	echo '<h4 class="alert_success">Yönlendiriliyorsunuz. Çıkış Başarılı....</h4>';
?>
