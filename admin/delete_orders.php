<?php
if(isset($_GET['delete_category'])){
    $delete_category = $_GET['delete_category'];
    echo $delete_category;

    $delete_query = "Delete from `user_orders` where order_id=$delete_category";
    $result = mysqli_query($con, $delete_query);
    if($result){
        echo "<script>alert('Orders is been DELETED successfully')</script>";
        echo "<script>window.open('./index.php?list_orders', '_self')</script>";
    }
}