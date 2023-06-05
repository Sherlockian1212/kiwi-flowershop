<?php
global $con;
if (isset($_GET['edit_account'])){
        $user_session_name = $_SESSION['username'];
        $select_query = "Select * from `user_table` where username='$user_session_name'";
        $result_query = mysqli_query($con, $select_query);
        $row_fetch = mysqli_fetch_assoc($result_query);
        $user_id = $row_fetch['user_id'];
        $username = $row_fetch['username'];
        $email = $row_fetch['user_email'];
        $address = $row_fetch['user_address'];
        $mobile = $row_fetch['user_mobile'];
    if (isset($_POST['user_update'])){
        $update_id = $user_id;
        $username = $_POST['user_username'];
        $user_email = $_POST['user_email'];
        $user_address = $_POST['user_address'];
        $user_mobile = $_POST['user_mobile'];
        $user_image = "./user_images/".$_FILES['user_image']['name'];
        $update_data = "update `user_table` set username='$username', user_email='$user_email', user_image='$user_image', user_address='$user_address', user_mobile='$user_mobile' where user_id='$update_id'";
        $result_update_query = mysqli_query($con, $update_data);
        if ($result_update_query){
            echo "<script>alert('Updated Profile successfully!')</script>";
            echo "<script>window.open('logout.php','_self')</script>";
        }
        else
        {
            echo "<script>alert('Something wrong happened')</script>";
        }
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h3 class="text-center text-info mb-4">Edit account</h3>
    <form action="" method="post" enctype="multipart/form-data" class="text-center">
        <div class="form-outline mb-4">
            <input type="text" name="user_username" id="" class="form-control w-75 m-auto" placeholder="Username..." value="<?php echo $username?>">
        </div>
        <div class="form-outline mb-4">
            <input type="email" name="user_email" id="" class="form-control w-75 m-auto" placeholder="Email..." value="<?php echo $email?>">
        </div>
        <div class="form-outline mb-4">
            <input type="file" name="user_image" id="" class="form-control w-75 m-auto" placeholder="Image...">
<!--            <image src="--><?php //echo $image?><!--"></image>-->
        </div>
        <div class="form-outline mb-4">
            <input type="text" name="user_address" id="" class="form-control w-75 m-auto" placeholder="Address..." value="<?php echo $address?>">
        </div>
        <div class="form-outline mb-4">
            <input type="text" name="user_mobile" id="" class="form-control w-75 m-auto" placeholder="Phone number..." value="<?php echo $mobile?>">
        </div>
        <input type="submit" value="Update" class="bg-info text-white border-0 p-2 px-3 mb-3" name="user_update">
    </form>
</body>
</html>