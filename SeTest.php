<?php
 error_reporting(E_ERROR | E_WARNING | E_PARSE);
    include'db.php';
    $odo_value=$_POST['odo_value'];
    $vehi_no=$_POST['vehi_no'];
    $cur_date=date("Y/m/d");
    $new_date=date('Y-m-d', strtotime('+1 years'));
    $stat_id="974";
    $test_type="normal";
    $n=new db();
    $n->connect();
    $n->insertSETest($cur_date, $odo_value, $new_date, $test_type, $vehi_no, $stat_id)
   //$cust_id=$n->getCustomerId($cust_name);
 //   $n->insertVehicle($reg_no,$eng_no,$chasy_no,$fuel_type,$year,$cust_id,$model,$brand);
?>