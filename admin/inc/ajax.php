
<?php 
	include("../../sistem/ayar.php");
	include("../../sistem/sistem.php");
	if(isset($_GET["kat_id"])){
		$kategori_id=$_GET["kat_id"];
		$kategori_query=query("select * from alt_kategoriler where kategori_id=$kategori_id");
		if(mysql_affected_rows()){
				echo '<option value="0">Seçiniz</option>';
			while($row_kategori=row($kategori_query)){
				echo '<option value="'.$row_kategori["alt_kategori_id"].'">';
				echo $row_kategori["alt_kategori_ad"];
				echo '</option>';
			}
		}else{
			echo '<option value="0">Alt Kategori Eklenmemiş';
		}
	}
	if(isset($_GET["alt_kat_id"])){
		$alt_kategori_id=$_GET["alt_kat_id"];
		$alt_kategori_query=query("select * from urun_cesit where alt_kategori_id=$alt_kategori_id");
		if(mysql_affected_rows()){
				echo '<option value="0">Seçiniz</option>';
			while($alt_row_kategori=row($alt_kategori_query)){
				echo '<option value="'.$alt_row_kategori["urun_cesit_id"].'">';
				echo $alt_row_kategori["urun_cesit_ad"];
				echo '</option>';
			}
		}else{
			echo '<option value="0">Ürün Çeşidi Eklenmemiş';
		}
	} 
?>
<?php
if(isset($_FILES["file"]["type"]))
{
	$validextensions = array("jpeg", "jpg", "png");
	$temporary = explode(".", $_FILES["file"]["name"]);
	$file_extension = end($temporary);
	if ((($_FILES["file"]["type"] == "image/png") || ($_FILES["file"]["type"] == "image/jpg") || ($_FILES["file"]["type"] == 		"image/jpeg")) && ($_FILES["file"]["size"] < 5000000)//5 mb a kadar yükleme
		&& in_array($file_extension, $validextensions)) {
		if ($_FILES["file"]["error"] > 0){
			echo "Return Code: " . $_FILES["file"]["error"] . "<br/><br/>";
		}else{
			if (file_exists("upload/" . $_FILES["file"]["name"])) {
				echo $_FILES["file"]["name"] . " <span id='invalid'><b>Bu resim mevcut.</b></span> ";
			}else{
				$sourcePath = $_FILES['file']['tmp_name']; // Storing source path of the file in a variable
				$targetPath = "upload/".$_FILES['file']['name']; // Target path where file is to be stored
				move_uploaded_file($sourcePath,$targetPath) ; // Moving Uploaded file
				echo "<span id='success'>Resim Başarıyla Yüklendi...!!</span><br/>";
				echo "<br/><b>File Name:</b> " . $_FILES["file"]["name"] . "<br>";
				echo "<b>Type:</b> " . $_FILES["file"]["type"] . "<br>";
				echo "<b>Size:</b> " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
				echo "<b>Temp file:</b> " . $_FILES["file"]["tmp_name"] . "<br>";
			}
		}
	}else{
		echo "<span id='invalid'>***Geçersiz Boyut Ya da Dosya Türü***<span>";
	}
}
?>