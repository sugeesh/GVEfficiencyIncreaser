<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link type="text/css" rel="stylesheet" href="bootstrap-3.3.6-dist/css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <title>Attorney General</title>
</head>
<body>
<p>
    <img
        src="http://www.brandsoftheworld.com/sites/default/files/styles/logo-thumbnail/public/042011/government_logo_of_sri_lanka-converted.png?itok=er9QPW5U"
        alt="headImg" width="152" height="129"/><a
        href="https://www.google.lk/url?sa=t&amp;rct=j&amp;q=&amp;esrc=s&amp;source=web&amp;cd=1&amp;sqi=2&amp;ved=0ahUKEwiQ8Kv79s3JAhVBthoKHX6lDq4QFggbMAA&amp;url=http%3A%2F%2Fwww.attorneygeneral.gov.lk%2F&amp;usg=AFQjCNGi6TFu7bmnNUcgrj8PAhr2JHl6RA&amp;bvm=bv.109332125,d.d2s&amp;cad=rja"
        onmousedown="return rwt(this, '', '', '', '1', 'AFQjCNGi6TFu7bmnNUcgrj8PAhr2JHl6RA', '', '0ahUKEwiQ8Kv79s3JAhVBthoKHX6lDq4QFggbMAA', '', '', event)">Attorney
        General's Department - Sri Lanka</a>
</p>

<p>&nbsp;</p>

<div class="container">
    <div class="row">
        <form role="form" action="SeTest.php" method="post">
            <div class="col-lg-6">
                <div class="well well-sm"><strong><span class="glyphicon glyphicon-asterisk"></span>Smoke
                        Testing</strong></div>
                <div class="form-group">

                    <div class="input-group">
                        <input type="text" class="form-control" id="InputCustNameFirst" name="vehi_no"
                               placeholder="Vehicle Number" required>
                        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">
                            View
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="myModal" role="dialog">
                            <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Vehicle Details</h4>

                                    </div>
                                    <div class="modal-body">
                                        <?php
                                        error_reporting(E_ERROR | E_WARNING | E_PARSE);
                                        include 'db.php';

                                        $vehi_no = "sam";
                                        echo $vehi_no;
                                        $n = new db();
                                        $n->connect();
                                        $vehicle = $n->getVehicle($vehi_no);
                                        echo $vehicle[1];
                                        ?>

                                        <p>Vehicle Number :<?php echo $vehicle[0] ?></p>

                                        <p>Engine Number :<?php echo $vehicle[1] ?></p>

                                        <p>Chassis Number :<?php echo $vehicle[2] ?></p>

                                        <p>Fuel Type :<?php echo $vehicle[3] ?></p>

                                        <p>Made Year :<?php echo $vehicle[4] ?></p>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close
                                        </button>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
                <div class="form-group">

                    <div class="input-group">
                        <input type="text" class="form-control" name="odo_value" id="InputName"
                               placeholder="Odometer Value" required>
                    </div>
                </div>
                <div><input type="submit" name="submit" id="submit" value="Submit" class="btn btn-info bottom-left">
                </div>

            </div>
        </form>
        <div class="col-lg-5 col-md-push-1">
            <div class="col-md-12">

            </div>
        </div>
    </div>
</div>
</div>
<p>&nbsp;</p>

<p>&nbsp;</p>
</body>

</html>