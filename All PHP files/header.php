<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href=" https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src=" https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js" type="text/javascript"></script>
    <script src=" https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js "></script>
    <link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
<div style="margin-bottom: 60px">
<nav class="nav nav-default navbar-fixed-top">
    <div class="container" style="background-color: rgba(249,249,249,0.6)">
        <div class="navbar-header" >
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="index.php" class="navbar-brand black_color"><strong><em>Little basket</em></strong></a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right" >
            <li><a href="signup.php" target="_blank" class="black_color"><span class="glyphicon glyphicon-user"></span>Sign Up</a> </li>
            <li><a href=".modal" data-toggle="modal" class="black_color"><span class="glyphicon glyphicon-log-in">Login</span> </a> </li>
        </ul>
        </div>
    </div>
</nav>
</div>
<div class="container">
    <div class="modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3>Login</h3>
                    <button type="button" data-dismiss="modal" style="float: right" > <span class="glyphicon glyphicon-remove" ></span> </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12">
                            Don't have an account? <a href="signup.php" style="text-decoration:none">Register</a>
                            <form>
                                <input type="text" placeholder="Email" name="email" class="form-control form-group " style="width: 100%" >
                                <input type="text" placeholder="Password" name="password" class="form-control form-group">
                                <input type="submit" value="Login" class="btn btn-primary" style="width:100px">
                            </form>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="settings.php" target="_blank" style="text-decoration:none ; float: left">Forget Password?</a>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
