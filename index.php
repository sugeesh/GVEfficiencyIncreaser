

<?php
include "./connect_to_mysql.php";
// Parse the form data andd inventory Item to the List
if (isset($_POST['updateForm'])) {
    $thisId = mysql_real_escape_string($_POST['thisId']);
    $now_status = mysql_real_escape_string($_POST['statusList' . $_POST['thisId']]);

    echo "UPDATE birthcertificateapplication SET status=$now_status  WHERE application_id= $thisId;";
    
    $results = mysql_query("UPDATE birthcertificateapplication SET status='$now_status'  WHERE application_id= $thisId;");
    header("location: index.php");
    exit();
}
?>


<?php

//states
//received = 0
//searching = 1
//found = 2
//posted = 3

$dynamicList = "";
$result = mysql_query("SELECT * FROM birthcertificateapplication WHERE ag_office_id=1 Order by status");

if (mysql_num_rows($result) > 0) {
    while ($row = mysql_fetch_array($result)) {
        $application_id = $row["application_id"];
        $customer_id = $row["customer_id"];
        $status = $row["status"];
        $date_added = strftime("%b %d, %Y", strtotime($row["Date"]));
        $tableColor = "";
        
        //select 4
        $receivedSelect = "";
        $searchingSelect = "";
        $foundSelect = "";
        $postedSelect = "";
        
        //disable posted mails
        $postedDisable = "";
        
        
        if ($status == 0) {
            $tableColor = "danger";
            $receivedSelect = "selected";
        } elseif ($status == 1) {
            $tableColor = "warning";
            $searchingSelect = "selected";
        } elseif ($status == 2) {
            $tableColor = "info";
            $foundSelect = "selected";
        } elseif ($status == 3) {
            $tableColor = "success";
            $postedSelect = "selected";
            $postedDisable = "disabled";
        }
        $dynamicList .= ' <form id = "form'.$application_id.'" name = "form'.$application_id.'" method = "post" action = "index.php">'
                . '<tr class=' . $tableColor . '>
                <th scope="row">' . $date_added . '</th>
                <td> ' . $application_id . ' <a href="www.google.com " >View Form </a></p></td>
                <td>
                        <select name="statusList' . $application_id . '" id="statusList" class="form-control" >
                            <option ' . $receivedSelect . ' value=0>Received</option>
                            <option ' . $searchingSelect . '  value=1>Still Searching</option>
                            <option ' . $foundSelect . ' value=2>Found</option>
                            <option ' . $postedSelect . ' value=3>Posted Through Mail</option>
                        </select>
                        <input name="thisId" type="hidden" value=' . $application_id . ' >
                        <input name="updateForm" type="hidden" value='.$application_id.' >
                   
                </td>
                <td>
                
                <button type="submit" class="btn btn-success btn-block" '.$postedDisable.' >Confirm</button></a>
                </td>
            </tr>
            </form>';
    }
}
?>




<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link type="text/css" rel="stylesheet" href="bootstrap-3.3.6-dist/css/bootstrap.css">
        <title>Attorney General</title>
    </head>
    <body>
        <p>
            
            <a href="https://www.google.lk/url?sa=t&amp;rct=j&amp;q=&amp;esrc=s&amp;source=web&amp;cd=1&amp;sqi=2&amp;ved=0ahUKEwiQ8Kv79s3JAhVBthoKHX6lDq4QFggbMAA&amp;url=http%3A%2F%2Fwww.attorneygeneral.gov.lk%2F&amp;usg=AFQjCNGi6TFu7bmnNUcgrj8PAhr2JHl6RA&amp;bvm=bv.109332125,d.d2s&amp;cad=rja" onmousedown="return rwt(this, '', '', '', '1', 'AFQjCNGi6TFu7bmnNUcgrj8PAhr2JHl6RA', '', '0ahUKEwiQ8Kv79s3JAhVBthoKHX6lDq4QFggbMAA', '', '', event)">Sri Lanka</a>
        </p>
        <p>&nbsp;
        </p>
        <table width = "1216" border = "1" class = "table table-bordered">
            <tr>
                <th width = "284" scope = "row">Receive Date</th>
                <td width = "284">Application_Id</td>
                <td width = "284">Status</td>
                <td width = "284">&nbsp;
                </td>
            </tr>
<!--            <form id = "form1" name = "form1" method = "post" action = "index.php">-->
                <?php echo $dynamicList;
                ?>
<!--            </form>-->

        </table>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
    </body>

</html>
