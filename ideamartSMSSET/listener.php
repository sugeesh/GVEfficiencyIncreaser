<?php
/**
 * Created by PhpStorm.
 * User: Yasiru
 * Date: 12/8/2015
 * Time: 8:52 PM
 */
ini_set('error_log', 'sms-app-error.log');
require_once 'lib/Log.php';
require_once 'lib/SMSReceiver.php';
require_once 'lib/SMSSender.php';
include '../connect_to_mysql.php';

define('SERVER_URL', 'https://api.dialog.lk/sms/send');
define('APP_ID', 'APP_018044');
define('APP_PASSWORD', '8b412a3281eec7e92311f4cd232d3cab');

$logger = new Logger();

try{

    // Creating a receiver and intialze it with the incomming data
    $receiver = new SMSReceiver(file_get_contents('php://input'));

    //Creating a sender
    $sender = new SMSSender( SERVER_URL, APP_ID, APP_PASSWORD);

    $message = $receiver->getMessage(); // Get the message sent to the app
    $address = $receiver->getAddress();	// Get the phone no from which the message was sent

    $logger->WriteLog($receiver->getAddress());




    $status01='No_Request';
    $status02='Processing';
    $status03='Processed';

    //$status='Processed';
    //$status='Processing';
    //$status='No_Request';

    //list($keyword,$statusChk)=explode(" ",$message);
    list($keyword,$service,$statusChk)=explode(" ",$message);

    if($keyword=='htag'){
        if ($service=='RL') {
            $result1 = mysql_query("SELECT test_id FROM se_test WHERE vehicle_number = '$statusChk' AND status='pass'");
            if(mysql_num_rows($result1) > 0){
                $result2 = mysql_query("SELECT record_id FROM insurance_record WHERE vehicle_number = '$statusChk'");
                if(mysql_num_rows($result2) > 0) {
                    while ($row = mysql_fetch_array($result2)) {
                        $insuranceId = $row["record_id"];
                    }
                    $result3 = mysql_query("SELECT * FROM license_record WHERE Insurance_Recordrecord_id = $insuranceId");
                    if(mysql_num_rows($result3) > 0) {
                        while ($row = mysql_fetch_array($result3)) {
                            $status =  $row["status"];
                            if($status==0){
                                $response=$sender->sms('Your Request is processing', $address);
                            }else if($status==1){
                                $response=$sender->sms('Your Request is finished processing', $address);
                            }
                        }
                    }else {
                        // here if new request
                        $response = $sender->sms('Your Service Request started processing', $address);
                    }
                } else {
                    $response=$sender->sms('Your have no insurance policy', $address);
                }
            }else{
                $response=$sender->sms('We have not pass the smoke emission test or we have no record of you.', $address);
            }




        }
        else if ($service=='BC') {
            $result1 = mysql_query("SELECT customer_id FROM birthcertificateapplication WHERE application_id = '$statusChk'");
            if(mysql_num_rows($result1) > 0){

                $sql=mysql_query("SELECT status FROM birthcertificateapplication WHERE application_id = '$statusChk'");

                $result = mysql_query($sql);

                $row = mysql_fetch_object($sql);

                $stat = $row->status;


                if($stat==0){
                    $response=$sender->sms('Your Request is Received', $address);
                }else if($stat==1){
                    $response=$sender->sms('Still Searching', $address);
                }else if($stat==2){
                    $response=$sender->sms('Finished you can collect it from the office', $address);
                }else if($stat==3){
                    $response=$sender->sms('Birth certificate copy Posted through the mail', $address);
                }
            }else {
                // here if new request
                $response = $sender->sms('Your have not requested any service', $address);
            }

        }
    }


}catch(SMSServiceException $e){
    $logger->WriteLog($e->getErrorCode().' '.$e->getErrorMessage());
}

?>