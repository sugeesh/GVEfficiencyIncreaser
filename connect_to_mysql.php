<?php
error_reporting(0);

$db_host = "127.0.0.1";		
$db_username="root";       	
//$db_password="lpdscneo";
$db_password="";
//$db_password="";
$db_name="hashtaguwa";		

mysql_connect($db_host,$db_username,$db_password) or die("could not connect to the Database.");
mysql_select_db($db_name) or die ("no database");

?>