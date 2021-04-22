<?php
require 'common.php';
if(isset($_SESSION['email']))
{
    header('location:home.php');
}
?>
<!DOCTYPE>
<html>
<head>
    <title>Signup</title>
    <link rel="stylesheet" type="text/css" href=" https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src=" https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js" type="text/javascript"></script>
    <script src=" https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js "></script>
</head>
<body style="background-color:rgba(255,245,34,0.31)">
<?php
require 'header.php';
?>
<div class="row">
    <div class="container">
        <div class="col-sm-6 col-sm-offset-3">
            <h3>SIGN UP</h3>
            <form method="post" action="signup_script.php">
                <input type="text" name="name"     placeholder="Name" class="form-control form-group input-lg" >
                <input type="text" name="email"    placeholder="Email" class="form-control form-group input-lg" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" >
                <input type="text" name="password" placeholder="Password" class="form-control form-group input-lg">
                <input type="number" name="contact" placeholder="Contact" class="form-control form-group input-lg" title="10 numerbers" pattern=".{10}">
                <input type="text" name="city"     placeholder="City" class="form-control form-group input-lg">
                <input type="text" name="address"  placeholder="Address" class="form-control form-group input-lg">
                <button class="btn btn-default btn-primary btn-lg">Submit</button>
            </form>
        </div>
    </div>
</div>
</body>
<?php
require 'footer.php';
?>
</html>
