<?php
include './get_details_table.php';
include './get_customer_details.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!--    <link href="bundles/basedataaccess/css/uniployer.css" type="text/css" rel="stylesheet"/>-->
    <link href="public/css/bootstrap-3.3.6-dist/css/bootstrap.css" type="text/css" rel="stylesheet"/>
    <link href="public/css/bootstrap-3.3.6-dist/css/bootstrap-theme.css" type="text/css" rel="stylesheet"/>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="public/css/bootstrap-3.3.6-dist/js/bootstrap.js" type="text/javascript"></script>
    <script src="public/css/bootstrap-3.3.6-dist/js/npm.js" type="text/javascript"></script>
<!--    <script src="public/css/bootstrap-3.3.6-dist/js/jquery-1.9.1.min.js" type="text/javascript"></script>-->
    <script type="text/javascript">
        $(document).ready(function () {
            $('.carousel').carousel();
        });
    </script>

    <title>Request Birth Certificate</title>
</head>

<body>
<nav class="navbar navbar-default" style="height: 20px">
    <div class="container-fluid">
        <!--Menu content start-->
        <div style="margin-left: 910px; margin-right: 0px">
            <div>
                <div class="text-center center-block">
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="#" data - toggle="tooltip" title="Homepage" style="font-size: 18px">
                                <h3 style="margin-top: -7px"><span class="label label-success"> Home</span></h3>
                            </a>
                        </li>
                        <li>
                            <a href="#" data - toggle="tooltip" title="Read about us" style="font-size: 18px">
                                <h3 style="margin-top: -7px"><span class="label label-success"> About</span></h3>
                            </a>
                        </li>
                        <li>
                            <a href="#" data - toggle="tooltip" title="Contact us" style="font-size: 18px">
                                <h3 style="margin-top: -7px"><span class="label label-success"> Services</span></h3>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--Menu content end-->
    </div>
</nav>
<div class="container-fluid">
    <div class="container" style="margin-top: -20px">

        <div class="row" style="margin-top: 0px; margin-bottom: 50px">
            <div class="col-md-12 text-center">
                <img src="public/images/eco-header.jpg" alt="header"/>
            </div>
        </div>

        <div class="row">
            <!--            Content Start-->
            <div class="col-lg-12">

                <div class="row">
                    <div class="col-lg-12">
                        <h4>Invoice for Completing the Smoke Test at ECO Sri</h4>
                        <h5>Will update the vehicle information at the vehicles registration office.</h5>
                        <hr/>
                    </div>
                </div>

                <!--<div class="row">-->
                <div class="col-lg-9">
                    Fill the invoice below
                    <br/><br/>

                    <form class="form-horizontal col-lg-12">
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Vehicle Number</label>

                            <div class="col-sm-10">
                                <input class="form-control" type="text" placeholder=""
                                       id="vehicle-number"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Odometer Value</label>

                            <div class="col-sm-10">
                                <input class="form-control" type="text" placeholder=""
                                       id="odometer-value"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Fee</label>

                            <div class="col-sm-10">
                                <input class="form-control" type="text" placeholder=""
                                       id="fee"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Odometer Value</label>

                            <div class="col-sm-10">
                                <input class="form-control" type="text" placeholder=""
                                       id="odometer-value"/>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="col-sm-3">
                    <br/><br/>
                    <strong>Date: 12.12.15</strong><br/>
                    <strong>Application ID: 2301</strong>
                </div>
            </div>
            <!--Content end-->
            <!--</div>-->
        </div>

    </div>
    <!--Footer-->
    <div style="margin-top: 50px">
        <footer class="footer">
            <div class="container">
                <p class="text-muted">Copyright UniPloyer 2015</p>
            </div>
        </footer>
    </div>
    <!--Footer-->
</div>
</body>
</html>