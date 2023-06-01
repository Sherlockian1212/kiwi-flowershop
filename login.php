<?php
global $con;
include('include/connect.php');
include('function/common_functions.php')
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="assets/css/login.css">
        <title>Đăng nhập</title>
    </head>
    <body>

    <div class="login">
        <div class="title">KIWI SHOP</div>
        <div class="des">
            Tài khoản <br> của tui
        </div>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="group">
                <input type="text" id="user_username" class="form-control" required="required" name="user_username" placeholder="Enter username">
            </div>
            <div class="group">
                <input type="password" id="user_password" class="form-control" required="required" name="user_password" placeholder="Password">
                <span id="showPassword">
				<ion-icon name="eye-outline"></ion-icon>
				<ion-icon name="eye-off-outline"></ion-icon>
			</span>
            </div>
            <div class="recovery">
                <a href="">Quên mật khẩu</a>
            </div>
            <div class="signIn">
                <!--<button name="user_login"><a href="index.php" name="user_login">Đăng nhập</a></button>-->
                <input type="submit" class="submit" value="Login" name="user_login">
            </div>
        </form>
        <div class="register">
            Bạn mới biết đến shop của tui? <a href="register.php">Đăng kí ngay</a>
        </div>

    </div>

    <script src="assets/js/login.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    </body>
    </html>
<?php
if(isset($_POST['user_login'])){
    $user_username = $_POST['user_username'];
    $user_password = $_POST['user_password'];
    $select_query = "Select * from `user_table` where username='$user_username'";
    $result = mysqli_query($con, $select_query);
    $row_count = mysqli_num_rows($result);
    $row_data = mysqli_fetch_assoc($result);
    if($row_count > 0 ){
        if($user_password == $row_data['user_password'])
            echo "<script>alert('Đăng nhập thành công')</script>";
        else echo "<script>alert('Đăng nhập không thành công')</script>";
    } else "<script>alert('Đăng nhập không thành công')</script>";
}