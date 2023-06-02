<?php
global $con;
include('../include/connect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../assets/css/login.css">
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
			<input type="text" id="user_name" placeholder="Enter username" required="required" name="user_username">
		</div>
		<div class="group">
			<input type="text" id="user_gmail" placeholder="Enter email" required="required" name="user_email">
		</div>
		<div class="group">
			<input type="password" id="user_password" placeholder="Enter password" required="required" name="user_password">
			<span id="showPassword">
			</span>
		</div>
		<div class="group">
			<input type="password" id="user_password_confirm" placeholder="Confirm password" required="required" name="user_password_confirm">
			<span id="showPassword">
			</span>
		</div>
        <div class="group">
			<input type="text" id="user_address" placeholder="Enter address" required="required" name="user_address">
		</div> 
        <div class="group">
			<input type="text" id="user_contact" placeholder="Enter phone number" required="required" name="user_contact">
		</div> 
		<div class="signIn">
			<!--<button value="Register" name="user_register"><a href="login.php" name="user_register">Đăng kí</a></button>-->
			<input type="submit" class="submit" value="Register" name="user_register">
			<p style="margin: 0; padding-top: 10px">Bạn đã có tài khoản?<a href="user_login.php">Login</a></p>
		</div>
		</form>
	</div>

	<script src="assets\js\login.js"></script>
	<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
	<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>
<?php
if(isset($_POST['user_register'])){
	$user_username = $_POST['user_username'];
	$user_password = $_POST['user_password'];
	$user_passwordconfirm = $_POST['user_password_confirm'];
	$user_gmail = $_POST['user_email'];
	$user_adress = $_POST['user_address'];
	$user_phonenumber = $_POST['user_contact'] ;
	$user_image = $_FILES['user_image']['name'];
	$user_image_tmp = $_FILES['user_image']['tmp_name'];
	$user_ip = 4;
	
	
	$select_query = "Select * from `user_table` where username ='$user_username' or user_email = '$user_gmail'";
	$result = mysqli_query($con, $select_query);
	$rows_count = mysqli_num_rows($result);
	if($rows_count > 0 ){
	    echo "<script>alert('Tài khoản hoặc email đã tồn tại')</script>";
	} else if($user_password != $user_passwordconfirm) echo "<script>alert('Password phải giống nhau')</script>";
	else {
	    move_uploaded_file($user_image_tmp, "assets/img/user_images/$user_image");
	    $insert_query = "INSERT INTO `user_table` (username, user_password, user_email, user_address,user_ip, user_mobile, user_image) VALUES ('$user_username','$user_password','$user_gmail','$user_adress','$user_ip','$user_phonenumber','$user_image')";
	    $sql_execute = mysqli_query($con, $insert_query);
	}
}