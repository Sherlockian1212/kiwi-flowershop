<?php
if(isset($_GET['delete_payments'])){
    $delete_category = $_GET['delete_payments'];
    echo $delete_category;

    $delete_query = "Delete from `categories` where payment_id=$delete_category";
    $result = mysqli_query($con, $delete_query);
    if($result){
        echo "<script>alert('Payments is been DELETED successfully')</script>";
        echo "<script>window.open('./index.php?list_payments', '_self')</script>";
    }
}