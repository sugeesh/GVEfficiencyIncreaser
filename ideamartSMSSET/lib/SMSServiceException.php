<?php
/**
 * Created by PhpStorm.
 * User: Yasiru
 * Date: 12/8/2015
 * Time: 8:51 PM
 */
class SMSServiceException extends Exception{
    private $statusCode,
        $statusDetail;

    public function __construct($message, $code){
        parent::__construct($message);

        $this->statusCode = $code;
        $this->statusDetail = $message;
    }

    public function getErrorCode(){
        return $this->statusCode;
    }

    public function getErrorMessage(){
        return $this->statusDetail;
    }
}
?>