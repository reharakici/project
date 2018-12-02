<?php
	session_start();
	ob_start();
	## Hataları Gizle ##
	 error_reporting(0);
	## bağlantı değişkenleri ##
	$host="localhost";
	$user="root";
	$pass=""; 
	$db="suzet";
	
	
	
	## Mysql Bağlantısı ##
	$baglan= mysql_connect($host,$user,$pass) or die ("hatali id sifre");
	
	## Veritabanı Seçimi ##
	mysql_select_db($db, $baglan) or die ("veritabanı bağlantı hatası");
	
	## Karakter Sorunu ##
	mysql_query("SET CHARACTER SET 'UTF8'");
	mysql_query("SET NAMES 'utf8'");

	## Genel Ayarlar ##
	$query=mysql_query("select * from ayarlar");
	$ayar=mysql_fetch_array($query);	
	
		## Sabitler ##
		define("PATH",realpath("."));
		define("URL","http://localhost/");	
		
?>