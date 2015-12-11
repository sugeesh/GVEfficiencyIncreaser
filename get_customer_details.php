<?php
/**
 * Created by PhpStorm.
 * User: Buddhi
 * Date: 12/11/2015
 * Time: 2:50 PM
 */

include './connect_to_mysql.php';

$ag_offices_list = mysql_query("SELECT * FROM ag_office");

$districts = array('Galle', 'Matara', 'Hambantota', 'Badulla', 'Monaragala', 'Rathnapura', 'Kegalle', 'Colombo', 'Kaluthara', 'Gampaha', 'Anurashapura', 'Polonnaruwa', 'Kandy', 'Matale', 'Nuwaraeliya', 'Trincomalee', 'Batticaloa', 'Ampara', 'Jaffna', 'Kilinochchi', 'Wavunia', 'Mannar', 'Mullathivu', 'Puththalam', 'Kurunegala');
