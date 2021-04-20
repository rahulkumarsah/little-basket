<?php
require 'header.php';
require 'common.php';
if(isset($_SESSION['email']))
{
    header('location:home.php');
}
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href=" https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src=" https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js" type="text/javascript"></script>
    <script src=" https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js "></script>
</head>
<body style="background-color: rgba(255,0,150,0.15)">
<div class="container">
    <center>
    <h1>Please enter your email</h1>
    <div style="margin-top: 80px">
        <form method="post" action="forgot_password.php">
            <input type="text" placeholder="email" name="email" class="form-group form-control input-lg" style="width: 300px">
        </form>
    </div>
    </center>
</div>
</body>
<?php
$email=mysqli_real_escape_string($con,$_POST['email']);
$select_query="select * from users where email='$email'";
$select_query_result=mysqli_query($con,$select_query) or die(mysqli_error($con));
$count_of_users=mysqli_num_rows($select_query_result);
if($count_of_users==0)
{
    echo "No such email id exists";
}
else{
    $row=mysqli_fetch_array($select_query_result);
    $row['password']="ThIs_Is_YoUr_123_New_PaSsWoRd";
    echo "YOUR PASSWORD HAS BEEN MAILED TO YOUR EMAIL ADDRESS";
}

?>
</html>
