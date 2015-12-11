<?php
include "./connect_to_mysql.php";
// Parse the form data andd inventory Item to the List
if (isset($_POST['thisId'])) {
    $thisId = mysql_real_escape_string($_POST['thisId']);
    $now_status = mysql_real_escape_string($_POST['statusList'.$_POST['thisId']]);

    echo $now_status;
    echo "ABCDS";
    echo $thisId;
    $results = mysql_query("UPDATE birthcertificateapplication SET status=$now_status  WHERE application_id= $thidId;");
    exit();
}
?>


<?php
$dynamicList = "";
$result = mysql_query("SELECT * FROM birthcertificateapplication WHERE ag_office_id=1");

if (mysql_num_rows($result) > 0) {
    while ($row = mysql_fetch_array($result)) {
        $application_id = $row["application_id"];
        $customer_id = $row["customer_id"];
        $status = $row["status"];
        $date_added = strftime("%b %d, %Y", strtotime($row["Date"]));
        $tableColor = "";
        $receivedSelect = "";
        $searchingSelect = "";
        $foundSelect = "";
        $postedSelect = "";
        if ($status == 'Received') {
            $tableColor = "danger";
            $receivedSelect = "selected";
        } elseif ($status == 'searching') {
            $tableColor = "warning";
            $searchingSelect = "selected";
        } elseif ($status == 'found') {
            $tableColor = "info";
            $foundSelect = "selected";
        } elseif ($status == 'posted') {
            $tableColor = "success";
            $postedSelect = "selected";
        }
        $dynamicList .= '<tr class=' . $tableColor . '>
                <th scope="row">' . $date_added . '</th>
                <td>'.$application_id.'</td>
                <td>
                        <select name="statusList'.$application_id.'" id="statusList" class="form-control" >
                            <option ' . $receivedSelect . ' value="received">Received</option>
                            <option ' . $searchingSelect . '  value="searching">Still Searching</option>
                            <option ' . $foundSelect . ' value="found">Found</option>
                            <option ' . $postedSelect . ' value="mail">Posted Through Mail</option>
                        </select>
                        <input name="thisId'. $application_id .'" type="hidden" value=' . $application_id . ' >
                   
                </td>
                <td>
                
                <button type="submit" class="btn btn-success btn-block">Confirm</button></a>
                </td>
            </tr>';
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
        <p><img src="http://www.brandsoftheworld.com/sites/default/files/styles/logo-thumbnail/public/042011/government_logo_of_sri_lanka-converted.png?itok=er9QPW5U" alt="headImg" width="152" height="129" /><a href="https://www.google.lk/url?sa=t&amp;rct=j&amp;q=&amp;esrc=s&amp;source=web&amp;cd=1&amp;sqi=2&amp;ved=0ahUKEwiQ8Kv79s3JAhVBthoKHX6lDq4QFggbMAA&amp;url=http%3A%2F%2Fwww.attorneygeneral.gov.lk%2F&amp;usg=AFQjCNGi6TFu7bmnNUcgrj8PAhr2JHl6RA&amp;bvm=bv.109332125,d.d2s&amp;cad=rja" onmousedown="return rwt(this, '', '', '', '1', 'AFQjCNGi6TFu7bmnNUcgrj8PAhr2JHl6RA', '', '0ahUKEwiQ8Kv79s3JAhVBthoKHX6lDq4QFggbMAA', '', '', event)">Attorney General's Department - Sri Lanka</a>
        </p>
        <p>&nbsp;</p>
        <table width="1216" border="1" class="table table-bordered">
            <tr>
                <th width="284" scope="row">Receive Date</th>
                <td width="284">Application_Id</td>
                <td width="284">Status</td>
                <td width="284">&nbsp;</td>
            </tr>
            <form id="form1" name="form1" method="post" action="index.php">
            <?php echo $dynamicList; ?>
            </form>

        </table>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
    </body>

</html>