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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/admin_login.css">
    <title>Đăng nhập</title>
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
                            <input type="text" id="admin_name" class="form-control" required="required" name="admin_name"
                                   placeholder="Enter Name">
                        </div>
                        <div class="form-group">
                            <input type="password" id="admin_password" class="form-control" required="required"
                                   name="admin_password" placeholder="Password">
                        </div>
                        <div class="form-group text-center">
                            <p>Register an account<a href="admin_registration.php"> here</a></p>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Login" name="admin_login" class="btn btn-primary btn-block">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="../assets/js/login.js"></script>
<script src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>

<?php
if (isset($_POST['admin_login'])) {
    $admin_name = $_POST['admin_name'];
    $admin_password = $_POST['admin_password'];
    $select_query = "SELECT * FROM `admin_table` WHERE admin_name='$admin_name'";
    $result = mysqli_query($con, $select_query);
    $row_count = mysqli_num_rows($result);
    $row_data = mysqli_fetch_assoc($result);
    if ($row_count > 0) {
        $_SESSION['admin_name'] = $admin_name;
        if (password_verify($admin_password, $row_data['admin_password']) && $row_count == 1) {
            echo "<script>alert('Login successfully')</script>";
            echo "<script>window.open('index.php', '_self')</script>";
        } else {
            echo "<script>alert('Đăng nhập không thành công')</script>";
        }
    } else {
        echo "<script>alert('Đăng nhập không thành công')</script>";
    }
}
?>
