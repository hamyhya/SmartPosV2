<?php

date_default_timezone_set("Asia/Jakarta");
error_reporting(0);

	// sesuaikan dengan server anda
	$host 	= 'sql12.freesqldatabase.com:3306'; // host server
	$user 	= 'sql12760239';  // username server
	$pass 	= 'TdCqufIEwg'; // password server, kalau pakai xampp kosongin saja
	$dbname = 'sql12760239'; // nama database anda
	
	try{
		$config = new PDO("mysql:host=$host;dbname=$dbname;", $user,$pass);
		//echo 'sukses';
	}catch(PDOException $e){
		echo 'KONEKSI GAGAL' .$e -> getMessage();
	}
	
	$view = 'fungsi/view/view.php'; // direktori fungsi select data
?>

