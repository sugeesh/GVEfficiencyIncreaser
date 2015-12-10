<?php 
$db_host = "localhost";		//"mysql9.000webhost.com";
$db_username="root";       	//"a6712017_neo";
$db_password="lpdscneo";			//"lpdsc5697";
$db_name="hashtaguwa";		//"a6712017_store";

mysql_connect("$db_host","$db_username","$db_password") or die("could not connect to the Database.");
mysql_select_db("$db_name") or die ("no database");

?>