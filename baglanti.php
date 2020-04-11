<?php 
$servername = "localhost";
$username = "gundenay_user";
$password = "gundenay123";
$dbname = "gundenay_db";


$baglanti=mysql_connect($servername,$username,$password);
mysql_query("SET NAMES 'utf8' COLLATE 'utf8_general_ci'");
	

if (!$baglanti) {
	echo "Bağlantı Hatası:" .mysql_error();
	exit();
}
$db=mysql_select_db($dbname);
if (!$db) { echo "Veritabanı Hatası:" .mysql_error() ;echo "<br>";

exit();



}

 ?>