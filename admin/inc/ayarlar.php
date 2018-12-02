<?php echo session("uye_rutbe")!=1 ? die("nooluyo beyavv"): null;?>
<?php 
	$query=query("select * from ayarlar");
	$row=row($query);
?>		
        <article class="module width_full">
			<header><h3>Genel Ayarlar</h3></header>
            <?php
				if($_POST){
					$site_url=p("site_url",true);
					$site_baslik=p("site_baslik",true);	
					$site_desc=p("site_desc",true);	
					$site_keyw=p("site_keyw",true);	
					$site_durum=p("site_durum",true);
					$sayfalama=p("sayfalama",true);	
					
					if(!$site_url || !$site_baslik){
						echo '<h4 class="alert_error">Gerekli Alanları Doldurunuz</h4>';
					}
					else{
						$update=query("update ayarlar set 
						site_url='$site_url',
						site_baslik='$site_baslik',
						site_desc='$site_desc',
						site_keyw='$site_keyw',
						site_durum=$site_durum,
						sayfalama=$sayfalama");
						
						if($update){
							echo '<h4 class="alert_success">Yeni Ayarlar Başarıyla Kaydedildi</h4>';
							go("index.php?do=ayarlar",1);
						}else{
							echo '<h4 class="alert_error">Veritabanı hatası. Tekrar Deneyiniz</h4>';
						}	
					}
				}
			
			
			?>
            	<form action="" method="post">
				<div class="module_content">
						<fieldset>
							<label>Site URL:</label>
							<input type="text" name="site_url" value="<?php echo $row["site_url"];?>" />
						</fieldset>
                        <fieldset>
							<label>Site Başlık:</label>
							<input type="text" name="site_baslik" value="<?php echo ss($row["site_baslik"]);?>" />
						</fieldset>
						<fieldset>
							<label>Site Açıklaması:</label>
							<textarea rows="3"  name="site_desc" ><?php echo $row["site_desc"];?></textarea>
						</fieldset>
                        <fieldset>
							<label>Site Keywords:</label>
							<textarea rows="3"  name="site_keyw" ><?php echo $row["site_keyw"];?></textarea>
						</fieldset>
						<fieldset>
							<label>Site Durumu</label>
							<select name="site_durum">
								<option value="1" <?php echo $row['site_durum'] ? 'selected' : null; ?>>Aktif</option>
								<option value="0" <?php echo !$row['site_durum'] ? 'selected' : null; ?>>Pasif</option>
							</select>
						</fieldset>
                        <fieldset>
							<label>Site Sayfalama</label>
							<input type="text" name="sayfalama" value="<?php echo $row["sayfalama"];?>" />
						</fieldset>
						<div class="clear"></div>
				</div>
			<footer>
				<div class="submit_link">
					<input type="submit" value="Ayarları Güncelle" class="alt_btn">
				</div>
                </form>
			</footer>
		</article><!-- end of post new article -->
		
		<div class="spacer"></div>
		
		