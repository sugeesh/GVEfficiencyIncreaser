<?php
include './get_details_table.php';
include './get_customer_details.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!--    <link href="bundles/basedataaccess/css/uniployer.css" type="text/css" rel="stylesheet"/>-->
    <link href="bootstrap-3.3.6-dist/css/bootstrap.css" type="text/css" rel="stylesheet"/>
    <link href="bootstrap-3.3.6-dist/css/bootstrap-theme.css" type="text/css" rel="stylesheet"/>

    <script src="bootstrap-3.3.6-dist/js/bootstrap.js" type="text/javascript"></script>
    <script src="bootstrap-3.3.6-dist/js/npm.js" type="text/javascript"></script>
    <script src="bootstrap-3.3.6-dist/js/jquery-1.9.1.min.js" type="text/javascript"></script>
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
                                <h3 style="margin-top: -7px"><span class="label label-default"> Home</span></h3>
                            </a>
                        </li>
                        <li>
                            <a href="#" data - toggle="tooltip" title="Read about us" style="font-size: 18px">
                                <h3 style="margin-top: -7px"><span class="label label-default"> About</span></h3>
                            </a>
                        </li>
                        <li>
                            <a href="#" data - toggle="tooltip" title="Contact us" style="font-size: 18px">
                                <h3 style="margin-top: -7px"><span class="label label-default"> Services</span></h3>
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
                <img src="images/header.jpg" alt="header"/>
            </div>
        </div>

        <div class="row">
            <!--            Content Start-->
            <div class="col-lg-12">

                <div class="row">
                    <div class="col-lg-12">
                        <h4>Application for Birth Certificate and/or Search for Registers</h4>
                        <h5>To be sent online to the Office of the District Registrar of the District in which the birth
                            occured</h5>
                        <hr/>
                    </div>
                </div>

                <!--                <div class="row">-->
                <div class="col-lg-9">
                    Fill the application below
                    <br/><br/>

                    <form class="form-horizontal col-lg-12">
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Name of Applicant</label>

                            <div class="col-sm-10">
                                <input class="form-control" type="text" placeholder=""
                                       id="applicant-name"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Full name of the person respecting whose birth
                                application is made</label>

                            <div class="col-sm-10">
                                <input class="form-control" type="text" placeholder=""
                                       id="appicant-full-name"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Sex</label>

                            <div class="col-sm-10">
                                <select class="form-control" id="select-sex">
                                    <option>Male</option>
                                    <option>Female</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Father's Full Name</label>

                            <div class="col-sm-10">
                                <input class="form-control" type="text" placeholder=""
                                       id="fathers-full-name"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Mother's Full Name</label>

                            <div class="col-sm-10">
                                <input class="form-control" type="text" placeholder=""
                                       id="mothers-full-name"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Birth Day</label>

                            <div class="col-sm-10">
                                <input class="form-control" type="text" placeholder=""
                                       id="birth-day"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Place of Occurence</label>

                            <div class="col-sm-10">
                                <input class="form-control" type="text" placeholder=""
                                       id="place-of-accurence"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Registrar's Division</label>

                            <div class="col-sm-10">
                                <select id="registrars-division" class="form-control">
                                    <?php
                                    while ($row = mysql_fetch_array($ag_offices_list)) {
                                        ?>
                                        <option><?php echo $row['zone'] ?></option>
                                        <?php
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Revenue District</label>

                            <div class="col-sm-10">
                                <select id="revenue-district" class="form-control">
                                    <?php
                                    foreach ($districts as $district_name) {
                                        ?>
                                        <option><?php echo $district_name ?></option>
                                        <?php
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Date of Registration (If Known)</label>

                            <div class="col-sm-10">
                                <input class="form-control" type="text" placeholder=""
                                       id="date-of-registration"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label"></label>

                            <div class="col-sm-10">
                                <input class="btn btn-success form-control" type="submit" id="date-of-registration" value="submit"/>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="col-sm-1">
                    <strong>Application ID: 2301</strong>
                </div>
            </div>
            <!--Content end-->
            <!--            </div>-->
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