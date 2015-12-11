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

    <title> UniPloyer | Home </title>
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
        <!--Row containing login form start-->
        <div class="row">
            <div class="col-md-12">
                <!--Content start-->

                <!--Content end-->

                <!--login form start-->
                <div class="col-md-4">
                    <form class="form-horizontal">
                        <h6> Enter login details </h6>

                        <div class="form-group" style="margin-top: 0px">
                            <div class="col-sm-12">
                                <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group" style="margin-top: -10px">
                            <div class="col-sm-12">
                                <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-6">
                                <div class="checkbox">
                                    <label><input type="checkbox"/> Remember me </label>
                                </div>
                            </div>
                            <div class="text-right" style="margin-right: 15px">
                                <input type="submit" class="btn btn-success" value="Sign In"/>
                            </div>
                        </div>
                    </form>
                    <div style="margin-top: 30px">
                        <h5> Don't have an account? <a style="cursor: pointer">Sign up here.</a></h5>
                    </div>
                </div>
                <!--Login form end-->

            </div>
        </div>
        <!--Row containing login form end-->
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

