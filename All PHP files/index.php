<?php
require 'common.php';
if(isset($_SESSION['email']))
{
    header('location:home.php');
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Little Basket</title>
    <link rel="stylesheet" type="text/css" href=" https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src=" https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js" type="text/javascript"></script>
    <script src=" https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js "></script>
    <link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
<nav class="navbar  navbar-fixed-top">
    <div class="container my_navbar">
        <div class="navbar-header" >
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="index.php" class="navbar-brand black_color"><strong><em>Little Basket</em></strong></a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right" >
            <li><a href="signup.php" target="_blank" class="black_color"><span class="glyphicon glyphicon-user"></span>Sign Up</a> </li>
            <li><a href=".modal" data-toggle="modal" class="black_color"><span class="glyphicon glyphicon-log-in">Login</span> </a> </li>
        </ul>
        </div>
    </div>
</nav>
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
                        <form method="post" action="login.php">
                            <input type="text" placeholder="Email" name="email" class="form-control form-group " pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"  style="width: 100%" >
                            <input type="text" placeholder="Password" name="password" class="form-control form-group">
                            <input type="submit" value="Login" class="btn btn-primary" style="width:100px">
                        </form>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a href="forgot_password.php" target="_blank" style="text-decoration:none ; float: left">Forget Password?</a>
            </div>
        </div>
    </div>
</div>
</div>
<!-- ===================================B O D Y=====================================================-->

<div class="container-fluid" style="margin-top: 60px">
<div class="row">
    <div class="col-sm-4">
        <div class="panel panel-default">
            <div class="panel-heading">
                item 1
            </div>
            <div class="panel-body">
                <a class="thumbnail">
                    <img src="https://www.aashirvaad.com/assets/Aashirvaad/images/NMP_FOP.png">
                </a>
                <div class="caption">
                    <p>Aashirvad atta 5 kg
                    india's no.1 atta , Rs 250/-
                    </p>
                </div>
                <a href="signup.php"><center><button type="button" class="btn btn-primary btn-block" >Order Now!</button></center></a>
            </div>
        </div>
    </div>
    <div class="col-sm-4 col-sm-offset-">
        <div class="panel panel-default">
            <div class="panel-heading">
               Item 2
            </div>
            <div class="panel-body">
                <a class="thumbnail">
                    <img src="https://5.imimg.com/data5/FI/JI/MY-45727586/toor-dal-500x500.jpg" style="width:350px;height:320px">
                </a>
                <div class="caption">
                    <p>Toor dal 2 kg
                        Best price , RS 150
                    </p>
                </div>
                <a href="signup.php"><centre><button type="button" class="btn btn-primary btn-block" >Order Now!</button></center></a>
            </div>s
        </div>
    </div>
    <div class="col-sm-4 col-sm-offset">
        <div class="panel panel-default">
            <div class="panel-heading">
                Item 3
            </div>
            <div class="panel-body">
                <a class="thumbnail">
                    <img src="https://media.gettyimages.com/photos/riceland-extra-long-grain-bag-picture-id521991888?k=6&m=521991888&s=612x612&w=0&h=bt70QJf9k2nzRnwQ6DTOGuJxui8xEk-1MIF0qDLHtpY=" style="width:350px;height:320px">
                </a>
                <div class="caption">
                    <p>Rice  2 kg
                        Best price , RS 150
                    </p>
                </div>
                <a href="signup.php"><centre><button type="button" class="btn btn-primary btn-block" >Order Now!</button></centre></a>
            </div>
        </div>
    </div>
</div>
    <div class="row">
        <div class="col-sm-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Item 4
                </div>
                <div class="panel-body">
                    <a  class="thumbnail">
                        <img src="https://m.media-amazon.com/images/I/81JmTiQA68L._SX425_.jpg" style="width:350px;height:320px">
                    </a>
                    <div class="caption">
                        <p>Besan 2 kg 
                            fresh besan pack , Rs 120/-
                        </p>
                    </div>
                    <a href="signup.php"><center><button type="button" class="btn btn-primary btn-block" >Order Now!</button></center></a>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Item 5
                </div>
                <div class="panel-body">
                    <a  class="thumbnail">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRXkyr0VE5mGO-HPMQ7Ap8etqDxM3CiDsqBx47stJ2iOrG4Jt2c1sm6Fe27ukcJQVVZbTI&usqp=CAU" style="width:350px;height:320px" >
                    </a>
                    <div class="caption">
                        <p>TEA pack
                            Tea pack of three, Rs 999/-
                        </p>
                    </div>
                    <a href="signup.php"><center><button type="button" class="btn btn-primary btn-block" >Order Now!</button></center></a>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Item  6
                </div>
                <div class="panel-body">
                    <a class="thumbnail">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRUmiFRnI5R0-LqL1BU4Byz6eqHVlZ2jA-6JA&usqp=CAU"  style="width:350px;height:320px">
                    </a>
                    <div class="caption">
                        <p> Madhur Sugar 1 Kg
                            Closed Packet, Verified Rs 500-
                        </p>
                    </div>
                    <a href="signup.php"><center><button type="button" class="btn btn-primary btn-block" >Order Now!</button></center></a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Item 7
                </div>
                <div class="panel-body">
                    <a  class="thumbnail">
                        <img src="https://www.bigbasket.com/media/uploads/p/xxl/274148-2_6-fortune-sun-lite-sunflower-refined-oil.jpg" style="width:350px;height:320px" >
                    </a>
                    <div class="caption">
                        <p>sun lite fortune refine
                            5L refine oil pack, Rs 549/-
                        </p>
                    </div>
                    <a href="signup.php"><center><button type="button" class="btn btn-primary btn-block" >Order Now!</button></center></a>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Item 8
                </div>
                <div class="panel-body">
                    <a  class="thumbnail">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSAafR1a2t3zPYFrEwceSUmER82X4bZMcR3jg&usqp=CAU" style="width:350px;height:320px">
                    </a>
                    <div class="caption">
                        <p>Kachi ghanni
                            kachhi ghani 1 L , Rs 200/-
                        </p>
                    </div>
                    <a href="signup.php"><center><button type="button" class="btn btn-primary btn-block" >Order Now!</button></center></a>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Item 9
                </div>
                <div class="panel-body">
                    <a class="thumbnail">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRXgNdeHjsjFvgzMyxVMmcuZCtQPiBWEazl-Q&usqp=CAU" style="width:350px;height:320px">
                    </a>
                    <div class="caption">
                        <p>soap 
                            soap pack , RS 120
                        </p>
                    </div>
                    <a href="signup.php"><center><button type="button" class="btn btn-primary btn-block" >Order Now!</button></center></a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

