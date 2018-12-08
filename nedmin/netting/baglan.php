<?php
error_reporting(0);
try {

	$db=new PDO("mysql:host=localhost;dbname=C2CSQL;charset=utf8",'root','');

	//echo "veritabanı bağlantısı başarılı";

}



catch (PDOExpception $e) {



	echo $e->getMessage();

}



 ?>
