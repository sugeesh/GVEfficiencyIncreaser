<?php
/**
 * Created by PhpStorm.
 * User: Yasiru
 * Date: 12/8/2015
 * Time: 8:48 PM
 */
class Logger{
    public function WriteLog($logStream){
        date_default_timezone_set('Asia/Colombo');
        $_LOGFILE = 'LogData.log';

        $file = fopen($_LOGFILE, 'a');
        fwrite($file, '['.date('D M j G:i:s T Y').'] '.$logStream.'\n');
        fclose($file);
    }
}

?>