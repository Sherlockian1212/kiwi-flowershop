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

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card mt-5">
                    <div class="card-header">
                        <h3 class="text-center">KIWI SHOP</h3>
                    </div>
                    <div class="card-body">
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <input type="text" id="admin_id" placeholder="Enter Admin ID" required="required" name="admin_id" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="text" id="admin_name" placeholder="Enter Admin Name" required="required" name="admin_name" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="text" id="admin_gmail" placeholder="Enter Email" required="required" name="admin_email" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="password" id="admin_password" placeholder="Enter Password" required="required" name="admin_password" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="password" id="admin_password_confirm" placeholder="Confirm Password" required="required" name="admin_password_confirm" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary btn-block" value="Register" name="admin_register">
                            </div>
                            <div class="form-group text-center">
                                <p>Bạn đã có tài khoản? <a href="admin_login.php">Login</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
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
            echo "<script>alert('Create account successfully!')</script>";
            $_SESSION['adminname'] = $admin_adminname;
            echo "<script>window.open('index.php', '_self')</script>";
        }
        else{
            echo "<script>alert('Xảy ra lỗi trong quá trình đăng ký')</script>";
        }
    }
}