<?php
require 'common.php';
if(!isset($_SESSION['email']))
{
    header('location:index.php');
}
else
{
?>
<!DOCTYPE>
<html>
<head>
    <title>Success</title>
    <link rel="stylesheet" type="text/css"
          href=" https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src=" https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js" type="text/javascript"></script>
    <script src=" https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js "></script>
    <style>
        a:link {
            color: black;
            text-decoration: none
        }

        a:visited {
            color: black;
            text-decoration: none
        }

        a:hover {
            color: white;
            text-decoration: none
        }

        a:active {
            color: white;
            text-decoration: none
        }
    </style>
</head>
<body>
<?php

require 'header_home.php';
$item_id = $_GET['id'];
$user_id = $_SESSION['id'];
$update_query = "UPDATE user_items SET status='Confirmed' WHERE user_id='$user_id' AND item_id='$item_id' AND status='Added to cart'";
$update_query_result = mysqli_query($con, $update_query) or die(mysqli_error($con));
?>
<div class="container" style="margin-top: 70px">
    <div class="jumbotron">
        <h1 style="color: blue; text-align: center">Success</h1>
        <h3 style="text-align: center">Congratulations Your order is confirmed and will be delivered shortly</h3>
        <h4 style="text-align: center">Thank you for shopping with little basket</h4>
    </div>
    <button class="btn btn-primary" style="margin-left: 450px"><a href="home.php" target="_self"> Click here</a>
    </button>
    to purchase any other items
</div>
</body>
<?php

}
?>
