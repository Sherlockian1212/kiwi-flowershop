<?php
global $con;
include('../include/connect.php');
include('../function/common_functions.php');
session_start();
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../assets/css/admin_login.css">
        <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <title>Đăng kí</title>
    </head>
    <body>

    <div class="login">
        <div class="title">KIWI SHOP</div>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="group">
                <input type="text" id="admin_id" placeholder="Enter adminID" required="required" name="admin_id">
            </div>
            <div class="group">
                <input type="text" id="admin_name" placeholder="Enter adminname" required="required" name="admin_name">
            </div>
            <div class="group">
                <input type="text" id="admin_gmail" placeholder="Enter email" required="required" name="admin_email">
            </div>
            <div class="group">
                <input type="password" id="admin_password" placeholder="Enter password" required="required" name="admin_password">
                <span id="showPassword"></span>
            </div>
            <div class="group">
                <input type="password" id="admin_password_confirm" placeholder="Confirm password" required="required" name="admin_password_confirm">
                <span id="showPassword"></span>
            </div>
            <div class="signIn">
                <!--<button value="Register" name="admin_register"><a href="login.php" name="admin_register">Đăng kí</a></button>-->
                <input type="submit" class="submit" value="Register" name="admin_register">
                <p style="margin: 0; padding-top: 10px">Bạn đã có tài khoản?<a href="admin_login.php">Login</a></p>
            </div>
        </form>
    </div>

    <script src="../assets/js/login.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    </body>
    </html>
<?php
if(isset($_POST['admin_register'])){
    $admin_id = $_POST['admin_id'];
    $admin_adminname = $_POST['admin_name'];
    $admin_password = $_POST['admin_password'];
    $hash_password = password_hash($admin_password, PASSWORD_DEFAULT);
    $admin_passwordconfirm = $_POST['admin_password_confirm'];
    $admin_gmail = $_POST['admin_email'];

    $select_query = "Select * from `admin_table` where admin_id ='$admin_id' or admin_email = '$admin_gmail'";
    $result = mysqli_query($con, $select_query);
    $rows_count = mysqli_num_rows($result);
    if($rows_count > 0 ){
        echo "<script>alert('Tài khoản hoặc email đã tồn tại')</script>";
    } else if($admin_password != $admin_passwordconfirm) echo "<script>alert('Xác thực mật khẩu không chính xác')</script>";
    else {
        $insert_query = "INSERT INTO `admin_table` (admin_id, admin_name, admin_password, admin_email) VALUES ('$admin_id','$admin_adminname','$hash_password','$admin_gmail')";
        $sql_execute = mysqli_query($con, $insert_query);
        if ($sql_execute){
            echo "<script>alert('Đăng ký tài khoản thành công!')</script>";
            $_SESSION['adminname'] = $admin_adminname;
        }
        else{
            echo "<script>alert('Xảy ra lỗi trong quá trình đăng ký')</script>";
        }
    }

//    $select_cart_items = "Select * from `cart_details` where ip_address='$admin_ip'";
//    $result_cart = mysqli_query($con, $select_cart_items);
//    $rows_cart_count = mysqli_num_rows($result_cart);
//    if ($rows_count > 0)
//    {
//        echo "<script>alert('You have items in your cart')</script>";
//        echo "<script>window.open('payment.php', '_self')</script>";
//    }
//    else{
//        echo "<script>window.open('../shop.php', '_self')</script>";
//    }
}