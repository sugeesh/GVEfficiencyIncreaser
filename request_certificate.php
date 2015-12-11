<?php

include './get_customer_details.php';
include './get_details_table.php';



?>


<?php

$result = mysql_query("SELECT application_id FROM birthcertificateapplication Order by application_id desc Limit 1");
if (mysql_num_rows($result) > 0) {
        while ($row = mysql_fetch_array($result)) {
            $appl_id = $row["application_id"];
        }
}else{
    $appl_id=0;
}
$appl_id++;

class Application{
    public $name_applicant = "";
    public $full_name = "";
    public $sex = "";
    public $father_name = "";
    public $mother_name = "";
    public $birthday = "";
    public $place_of_occurence = "";
    public $division = "";
    public $district = "";
    public $date = "";
}


if (isset($_POST['name_applicant'])) {
    $applicationObject = new Application();
    $applicationObject->name_applicant = mysql_real_escape_string($_POST['name_applicant']);
    $applicationObject->full_name = mysql_real_escape_string($_POST['full_name']);
    $applicationObject->sex = mysql_real_escape_string($_POST['sex']);
    $applicationObject->father_name = mysql_real_escape_string($_POST['father_name']);
    $applicationObject->mother_name = mysql_real_escape_string($_POST['mother_name']);
    $applicationObject->birthday = mysql_real_escape_string($_POST['birthday']);
    $applicationObject->place_of_occurence = mysql_real_escape_string($_POST['place_of_occurence']);
    $applicationObject->division = mysql_real_escape_string($_POST['division']);
    $applicationObject->district = mysql_real_escape_string($_POST['district']);
    $applicationObject->date = mysql_real_escape_string($_POST['date']);
    
    $objData = serialize( $applicationObject);
    $file = fopen('./applications/'.$appl_id.'.json','w+');
    fwrite($file, $objData);
    fclose($file);
    
    
    $mobileNumber = mysql_real_escape_string($_POST['mobile_number']);
    $name_applicant = mysql_real_escape_string($_POST['name_applicant']);
    $resultCustomer = mysql_query("INSERT INTO customer(mobile_number,service_provider, customer_name) VALUES ('$mobileNumber','Dialog','$name_applicant')") or die(mysql_error());
    $customer_id = mysql_insert_id();
    $results = mysql_query("INSERT INTO birthcertificateapplication(application_id, ag_office_id, customer_id, status, Date) VALUES ($appl_id,1,$customer_id,0,now())") or die(mysql_error());
    
    
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <!--    <link href="bundles/basedataaccess/css/uniployer.css" type="text/css" rel="stylesheet"/>-->
        <link href="public/css/bootstrap-3.3.6-dist/css/bootstrap.css" type="text/css" rel="stylesheet"/>
        <link href="public/css/bootstrap-3.3.6-dist/css/bootstrap-theme.css" type="text/css" rel="stylesheet"/>

        <script src="public/css/bootstrap-3.3.6-dist/js/bootstrap.js" type="text/javascript"></script>
        <script src="public/css/bootstrap-3.3.6-dist/js/npm.js" type="text/javascript"></script>
        <script src="public/css/bootstrap-3.3.6-dist/js/jquery-1.9.1.min.js" type="text/javascript"></script>
        <script type="text/javascript">
            $(document).ready(function() {
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
                        <img src="public/images/rg-header.jpg" alt="header"/>
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

                            <form class="form-horizontal col-lg-12" method = "post" action = "request_certificate.php">
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Name of Applicant</label>

                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" placeholder=""
                                               id="applicant-name" name="name_applicant"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Mobile Number</label>

                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" placeholder=""
                                               id="applicant-name" name="mobile_number"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Full name of the person respecting whose birth
                                        application is made</label>

                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" placeholder=""
                                               id="appicant-full-name" name="full_name"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Sex</label>

                                    <div class="col-sm-10">
                                        <select class="form-control" id="select-sex" name="sex">
                                            <option>Male</option>
                                            <option>Female</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Father's Full Name</label>

                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" placeholder=""
                                               id="fathers-full-name" name="father_name"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Mother's Full Name</label>

                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" placeholder=""
                                               id="mothers-full-name" name="mother_name"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Birth Day</label>

                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" placeholder=""
                                               id="birth-day" name="birthday"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Place of Occurence</label>

                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" placeholder=""
                                               id="place-of-accurence" name="place_of_occurence"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Registrar's Division</label>

                                    <div class="col-sm-10">
                                        <select id="registrars-division" class="form-control" name="division">
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
                                        <select id="revenue-district" class="form-control" name="district">
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
                                               id="date-of-registration" name="date"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label"></label>

                                    <div class="col-sm-10">
                                        <input class="btn btn-success form-control" type="submit" id="date-of-registration" value="submit"/>
                                    </div>
                                </div>
                                <input name="application_id" type="hidden" value=<?php echo $appl_id?> >
                                
                            </form>
                        </div>

                        <div class="col-sm-3">
                            <br/><br/>
                            <strong>Application ID: <?php echo $appl_id ?></strong>
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