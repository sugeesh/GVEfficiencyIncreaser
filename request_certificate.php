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
            <div class="col-md-12">
                <!--Content start-->
                <form class="form-horizontal">
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Enter Name</label>

                        <div class="col-sm-10">
                            <input type="text" placeholder="Enter Name" id="name"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword" class="col-sm-2 control-label">Select AG Office</label>

                        <div class="col-sm-10">
                            <input type="text" placeholder="AG Office Name" id="ag-office"/>
                        </div>
                    </div>
                </form>
                <!--Content end-->
            </div>
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