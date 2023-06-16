<?php
global $con;
include('../include/connect.php');
include('../function/common_functions.php');
@session_start();
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../assets/css/admin_login.css">
        <title>Đăng nhập</title>
    </head>
    <body>

    <div class="rectangle">
        <div class="title">KIWI SHOP</div>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="group">
                <input type="text" id="admin_name" class="form-control" required="required" name="admin_name"
                       placeholder="Enter name">
            </div>
            <div class="group">
                <input type="password" id="admin_password" class="form-control" required="required"
                       name="admin_password" placeholder="Password">
                <span id="showPassword">
			</span>
            </div>
            <div class="recovery">
                <p>Đăng ký tài khoản<a style="text-decoration-line: underline" href="admin_registration.php">tại đây</a>
                </p>
            </div>
            <div class="signIn">
                <input type="submit" value="Login" name="admin_login" class="submit">
            </div>
        </form>

    </div>
    </form>

    </div>

    <script src="../assets/js/login.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    </body>
    </html>
    <script src="assets/js/login.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    </body>
    </html>
<?php
if (isset($_POST['admin_login'])) {
    $admin_name = $_POST['admin_name'];
    $admin_password = $_POST['admin_password'];
    $select_query = "Select * from `admin_table` where admin_name='$admin_name'";
    $result = mysqli_query($con, $select_query);
    $row_count = mysqli_num_rows($result);
    $row_data = mysqli_fetch_assoc($result);
//    $cart_select = "Select * from `cart_details` where ip_address='$admin_ip'";
//    $cart_query = mysqli_query($con, $cart_select);
//    $cart_row_count = mysqli_num_rows($cart_query);
    if ($row_count > 0) {
        $_SESSION['admin_name'] = $admin_name;
        if (password_verify($admin_password, $row_data['admin_password']) and $row_count == 1) {
            echo "<script>alert('Đăng nhập thành công')</script>";
//            if ($cart_row_count == 0){
//                echo "<script>window.open('../shop.php', '_self')</script>";
//            }else{
            echo "<script>window.open('../index.php', '_self')</script>";
//            }
        } else echo "<script>alert('Đăng nhập không thành công')</script>";
    } else "<script>alert('Đăng nhập không thành công')</script>";
}