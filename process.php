<?php
 error_reporting(E_ERROR | E_WARNING | E_PARSE);
    include'db.php';
    $reg_no=$_POST['reg_no'];
    $eng_no=$_POST['eng_no'];
    $chasy_no=$_POST['chasy_no'];
    $year=$_POST['year'];
    $brand=$_POST['brand'];
    $model=$_POST['model'];
    $fuel_type=$_POST['fuel_type'];    
    $cust_name=$_POST['cust_name'];    
    $n=new db();
    $n->connect();
   $cust_id=$n->getCustomerId($cust_name);
    $n->insertVehicle($reg_no,$eng_no,$chasy_no,$fuel_type,$year,$cust_id,$model,$brand);
?>
