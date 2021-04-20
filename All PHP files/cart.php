<?php
require 'common.php';
if(!isset($_SESSION['email'])){
    header('location:index.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href=" https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src=" https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js" type="text/javascript"></script>
    <script src=" https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js "></script>
    <title>Cart </title>
    <style>
        a:link {
            color: white;
            text-decoration: none
        }

        a:visited {
            color: black;
            text-decoration: none
        }

        a:hover {
            color: blue;
            text-decoration: none
        }

        a:active {
            color: red;
            text-decoration: none
        }
    </style>
</head>
<body>
<div style="margin-bottom: 80px;margin-top: 100px"></div>
<?php
require 'header_home.php';
$user_id=$_SESSION['id'];
$select_query="SELECT * FROM user_items INNER JOIN items ON user_items.item_id=items.pid WHERE user_items.user_id='$user_id' AND user_items.status='Added to cart'";
$select_query_result=mysqli_query($con,$select_query) or die(mysqli_error($con));
$count_of_rows=mysqli_num_rows($select_query_result);
if($count_of_rows==0) {
    echo "Add items to the cart first!";
}
else{
?>
<div class="container">
    <center>
        <table class="table table-bordered table-striped table-hover table-responsive">
            <tbody>
            <tr>
                <th>Item number</th>
                <th>Mobile Name</th>
                <th>Mobile Price</th>
                <th>Changed your mind?</th>
            </tr>
            <?php
            $sum = 0;
            while ($row = mysqli_fetch_array($select_query_result)) {
                $id = $row['pid'];
                $sum += $row['price'];
                echo "<tr><td>" . $row['pid'] . "</td><td>" . $row['name'] . "</td><td>" . $row['price'] . "</td><td> <button class='btn btn-danger'><a href='cart_remove.php?id={$row['pid']}' class='remove_item_link' >Remove</button></a></td></tr>";
            }
            echo "<tr><td style='font-weight: bolder'>Total</td><td style='font-weight: bolder'>Rs/-" . $sum . "</td><td><a href='success.php?id={$id}' class='btn btn-primary'>Confirm Order</a></td></tr>";
            }
        ?>
        </tbody>
    </table>
    </center>
</div>
</body>

</html>
