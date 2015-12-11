<?php
include './get_details_table.php';

class Application
{

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

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $file = fopen("applications/$id.json", 'r+');
    if (file_exists("applications/$id.json")) {
        $objData = file_get_contents("applications/$id.json");
        $obj = unserialize($objData);
        if (!empty($obj)) {
            $name_applicant = $obj->name_applicant;
            $full_name = $obj->full_name;
            $sex = $obj->sex;
            $father_name = $obj->father_name;
            $mother_name = $obj->mother_name;
            $birthday = $obj->birthday;
            $place_of_occurence = $obj->place_of_occurence;
            $division = $obj->division;
            $district = $obj->district;
            $date = $obj->date;
        }
    }
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
        $(document).ready(function () {
            $('.carousel').carousel();
        });
    </script>

    <title>Birth Certificate Request</title>
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
            <!--Content Start-->
            <div class="col-lg-12">

                <!--<div class="row">-->
                <div class="col-lg-10">
                    <br/><br/>

                    <form class="form-horizontal col-lg-12">
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Name of Applicant</label>

                            <div class="col-sm-10">

                                <input class="form-control" type="text" placeholder=""
                                       value="<?php echo $name_applicant ?>"
                                       id="applicant-name" disabled/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Full name of the person respecting whose birth
                                application is made</label>

                            <div class="col-sm-10">
                                <input class="form-control" type="text" placeholder="" value="<?php echo $full_name ?>"
                                       id="appicant-full-name" disabled/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Sex</label>

                            <div class="col-sm-10">
                                <select class="form-control" id="select-sex" disabled value="<?php echo $sex ?>">
                                    <option>Male</option>
                                    <option>Female</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Father's Full Name</label>

                            <div class="col-sm-10">
                                <input class="form-control" type="text" placeholder=""
                                       value="<?php echo $father_name ?>"
                                       id="fathers-full-name" disabled/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Mother's Full Name</label>

                            <div class="col-sm-10">
                                <input class="form-control" type="text" placeholder=""
                                       value="<?php echo $mother_name ?>"
                                       id="mothers-full-name" disabled/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Birth Day</label>

                            <div class="col-sm-10">
                                <input class="form-control" type="text" placeholder="" value="<?php echo $birthday ?>"
                                       id="birth-day" disabled/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Place of Occurence</label>

                            <div class="col-sm-10">
                                <input class="form-control" type="text" placeholder=""
                                       value="<?php echo $place_of_occurence ?>"
                                       id="place-of-accurence" disabled/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Registrar's Division</label>

                            <div class="col-sm-10">
                                <input class="form-control" type="text" placeholder="" value="<?php echo $division ?>"
                                       id="division" disabled/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Revenue District</label>

                            <div class="col-sm-10">
                                <input class="form-control" type="text" placeholder="" value="<?php echo $district ?>"
                                       id="district" disabled/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Date of Registration (If Known)</label>

                            <div class="col-sm-10">
                                <input class="form-control" type="text" placeholder="" value="<?php echo $date ?>"
                                       id="date-of-registration" disabled/>
                            </div>
                        </div>

                    </form>
                </div>

                <div class="col-sm-3">
                    <br/><br/>
                    <strong>Application ID: <?php echo $id; ?></strong>
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
                <p class="text-muted">Copyright #hashtag 2015</p>
            </div>
        </footer>
    </div>
    <!--Footer-->
</div>
</body>
</html>

