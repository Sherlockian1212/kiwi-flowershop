<?php
if(isset($_GET['user_id'])){
    $delete_category = $_GET['user_id'];
    echo $delete_category;

    $delete_query = "Delete from `user_table` where user_id=$user_id";
    $result = mysqli_query($con, $delete_query);
    if($result){
        echo "<script>alert('User is been DELETED successfully')</script>";
        echo "<script>window.open('./index.php?list_users', '_self')</script>";
    }
}