<?php
function check_if_added($item_id)
{
    include "common.php";
    $user_id=$_SESSION['id'];
    $select_query="SELECT * FROM user_items WHERE item_id='$item_id' AND user_id='$user_id' AND status='Added to cart'";
    $select_query_result = mysqli_query($con, $select_query) or die(mysqli_error($con));
    $count_of_rows = mysqli_num_rows($select_query_result);
    if($count_of_rows>=1) {
    return 1;
    }   else
    return 0;
}
?>
