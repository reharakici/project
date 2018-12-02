    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <div class="wrap-title-page">
            <h1 class="ui-title-page">BİZE ULAŞIN</h1>
            <ol class="breadcrumb">
              <li><a href="<?php echo URL?>">Anasayfa</a></li>
              <li class="active">İletişim</li>
            </ol>
          </div>
          <!-- end wrap-title-page --> 
        </div>
        <!-- end col --> 
      </div>
      <!-- end row --> 
    </div>
    <!-- end container -->
    
    <?php 
	if($_POST["mail"]){
		$ad=p("ad",true);
		$tel=p("tel",true);
		$email=p("email",true);
		$konu=p("konu",true);
		$mesaj=p("mesaj",true);	
		$date=date("Y-m-d");
		$insert=query("insert into mesajlar SET
				mesaj_ad='$ad',
				mesaj_tel='$tel',
				mesaj_email='$email',
				mesaj_konu='$konu',
				mesaj='$mesaj',
				mesaj_tarih='$date',
				mesaj_okunma=0
				");
		if($insert){
			$a='<div class="alert alert-success"><i class="icon fa fa-check-circle"></i>Mesajınız bize ulaştı. Sizinle en kısa zamanda iletişime geçeceğiz</div>';
			
			$mail = new PHPMailer();
								$mail->IsSMTP();                                   // send via SMTP
								$mail->Host     = "mail.suzetgomlek.com"; // SMTP servers
								$mail->SMTPAuth = true;     // turn on SMTP authentication
								$mail->IsHTML(true);
								$mail->Username = "info@suzetgomlek.com";  // SMTP username
								$mail->Password = "cere34mi"; // SMTP password
								$mail->From     = "info@suzetgomlek.com";//kimden gidecek
								$mail->Fromname = "SUZET";
								$mail->AddAddress("","");//sahibinin mailini yazarız
								
								$mail->Subject  =  "İletişim Sayfası Dolduruldu";
									$MESSAGE_BODY = "Başvuran Kişi: $ad<br/>"; //kullanýcýnýn adı formdan geliyor
									$MESSAGE_BODY .= "Konu: $konu<br/>"; 
									$MESSAGE_BODY .= "Telefon: $tel<br/>";
									$MESSAGE_BODY .= "Mesaj:  <br/> $mesaj"; //kullanýcýnýn maili formdan geliyor
								
									$mail->Body     =  $MESSAGE_BODY;
									$mail->Send();
		}		
	}
	?>
    <div class="border-main">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <section class="section-area">
              <h2 class="ui-title-block ui-title-block_small"><i class="icon fa fa-bars"></i>İletişim Formu</h2>
              <?php echo $a?>
              <form class="form-contact ui-form" action="" method="post">
                <div class="row">
                  <div class="col-md-6">
                    <input name="ad" class="form-control" type="text" placeholder="İsim" required>
                    <input name="tel" class="form-control" type="tel" placeholder="Telefon No." required>
                  </div>
                  <div class="col-md-6">
                    <input name="email" class="form-control" type="email" placeholder="Email" required>
                    <input name="konu" class="form-control" type="text" placeholder="Konu">
                  </div>
                  <div class="col-xs-12">
                    <textarea name="mesaj" required class="form-control" required rows="10"></textarea>
                    <button name="mail" value="1" class="btn btn-primary">GÖNDER</button>
                  </div>
                </div>
              </form>
            </section>
            <!-- end section-area --> 
          </div>
          <!-- end col -->
          
          <div class="col-md-5">
            <section class="section-area section-contacts">
              <h2 class="ui-title-block ui-title-block_small"><i class="icon fa fa-bars"></i>İLETİŞİM BİLGİLERİ</h2>
              <div class="contacts">
                <div class="contacts__item"> <span class="contacts__name">ADRES</span> <span class="contacts__info">***</span> </div>
                <div class="contacts__item"> <span class="contacts__name">TELEFON</span> <span class="contacts__info">***8<span class="contacts__other">***</span></span> </div>
                <div class="contacts__item"> <span class="contacts__name">Email</span> <span class="contacts__info">***</span> </div>
              </div>
            </section>
            <!-- end section-area --> 
          </div>
          <!-- end col --> 
        </div>
        <!-- end row --> 
      </div>
      <!-- end container --> 
    </div>
    <!-- end border-main -->
    
