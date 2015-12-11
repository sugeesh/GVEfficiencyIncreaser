<?php
 error_reporting(E_ERROR | E_WARNING | E_PARSE);
include'db.php';
$vehi_no=$_POST['vehi_no'];
$insu_id=$_POST['insu_id'];
$cur_date=date("Y/m/d");
$new_date=date('Y-m-d', strtotime('+1 years'));
$n=new db();
$n->connect();
$n->insertInsurance($new_date, $vehicle_number,$insu_id);

?>