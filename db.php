<?php
class db
{
    public $host;
    public $user;
    public $pass;
    public $data;
    public $con;
    public $table;
    function db()
    {
        $this->host="localhost";
        $this->user="root";
        $this->pass="";
        $this->data="hashtaguva";   
    }   
    public function connect()
    {
        $this->con=mysql_connect($this->host,$this->user,$this->pass);
        if(!$this->con)
        {
            echo mysql_error();
        }
        $sel=mysql_select_db($this->data, $this->con);
        if(!$sel)
        {
            echo mysql_error();
        }
    }
    public function insertVehicle($vehi_no,$eng_no,$chas_no,$fuel_typ,$year,$custom_id,$model_id,$brand_id)
    {
        $sql=  mysql_query("INSERT INTO vehicle(vehicle_number, engine_number,chassis_number,fuel_type,year,customer_id,model_id,brand_id) VALUES('$vehi_no', '$eng_no','$chas_no','$fuel_typ','$year','$custom_id','$model_id','$brand_id')");
        if(!$sql)
        {
            echo mysql_error();
        }
    }
   public  function getCustomerId($cust_name){
       
        $query = sprintf("SELECT customer_id FROM customer WHERE customer_name='%s'",mysql_real_escape_string($cust_name));
        $result=mysql_query($query);
        while ($row = mysql_fetch_assoc($result)) {
    $cust_id=$row['customer_id'];
}
return $cust_id;
            
    }
     public function insertSETest($cur_date,$od_value,$valid_till,$test_type,$vehi_num,$station_id)
    {
        $sql=  mysql_query("INSERT INTO se_test(date, odometer,valid_till,test_type,vehicle_number,station_id) VALUES('$cur_date', '$od_value','$valid_till','$test_type','$vehi_num','$station_id')");
        if(!$sql)
        {
            echo mysql_error();
        }
    }
    public function getVehicle($vehicle_number){
        $query = sprintf("SELECT vehicle_number,engine_number,chassis_number,fuel_type,year FROM vehicle WHERE vehicle_number='%s'",mysql_real_escape_string($vehicle_number));
        $result=mysql_query($query);
        while ($row = mysql_fetch_assoc($result)) {
    $vehi_number=$row['vehicle_number'];
    $engi_number=$row['engine_number'];
    $chasi_number=$row['chassis_number'];
    $fuel_type=$row['fuel_type'];
    $year=$row['year'];
    return array($vehi_number,$engi_number,$chasi_number,$fuel_type,$year);
}
    }
}
?>