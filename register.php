<?php include('connect.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="assets\css\login.css">
	<title>Đăng kí</title>
</head>
<body>

	<div class="login">
		<div class="title">KIWI SHOP</div>
		<div class="des">
			Tài khoản <br> của tui
		</div>
		<form action="" method="post" enctype="multipart/form-data">
		<div class="group">
			<input type="text" id="user_name" placeholder="Enter username" required="required" name="user_name">
		</div>
		<div class="group">
			<input type="password" id="user_password" placeholder="Enter password" required="required" name="user_password">
			<span id="showPassword">
				<ion-icon name="eye-outline"></ion-icon>
				<ion-icon name="eye-off-outline"></ion-icon>
			</span>
		</div>
		<div class="group">
			<input type="password" id="user_password_confirm" placeholder="Enter password again" required="required" name="user_password_confirm">
			<span id="showPassword">
				<ion-icon name="eye-outline"></ion-icon>
				<ion-icon name="eye-off-outline"></ion-icon>
			</span>
		</div>
		<div class="group">
			<input type="file" id="user_image" placeholder="Enter file" required="required" name="user_image">
		</div>
        <div class="group">
			<input type="text" id="user_gmail" placeholder="Enter gmail" required="required" name="user_gmail">
		</div>  
        <div class="group">
			<input type="text" id="user_adress" placeholder="Enter adress" required="required" name="user_adress">
		</div> 
        <div class="group">
			<input type="text" id="user_phonenumber" placeholder="Enter phone number" required="required" name="user_phonenumber">
		</div> 
		<div class="signIn">
			<!--<button value="Register" name="user_register"><a href="login.php" name="user_register">Đăng kí</a></button>-->
			<input type="submit" value="Register" name="user_register">
			<p>Bạn đã có tài khoản?<a href="login.php">Login</a></p>
		</div>
		</form>
		<div class="or">
			Hoặc đăng kí với
		</div>
		<div class="list">
			<div class="item">
				<img src="https://cdn1.iconfinder.com/data/icons/google-s-logo/150/Google_Icons-09-512.png" alt="">
			</div>
			<div class="item">
				<img src="https://museumandgallery.org/wp-content/uploads/2020/03/Facebook-Icon-Facebook-Logo-Social-Media-Fb-Logo-Facebook-Logo-PNG-and-Vector-with-Transparent-Background-for-Free-Download.png" alt="">
			</div>
			<div class="item">
				<img src="https://www.iconpacks.net/icons/2/free-twitter-logo-icon-2429-thumb.png" alt="">
			</div>
		</div>
	</div>

	<script src="assets\js\login.js"></script>
	<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
	<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>
<?php
if(isset($_POST['user_register'])){
	$user_username = $_POST['user_name'];
	$user_password = $_POST['user_password'];
	$user_passwordconfirm = $_POST['user_password_confirm'];
	$user_gmail = $_POST['user_gmail'];
	$user_adress = $_POST['user_adress'];
	$user_phonenumber = $_POST['user_phonenumber'] ;
	$user_image = $_FILES['user_image']['name'];
	$user_image_tmp = $_FILES['user_image']['tmp_name'];
	$user_ip = 4;
	
	
	$select_query = "Select * from `user_table` where username ='$user_username' or user_email = '$user_gmail'";
	$result = mysqli_query($conn, $select_query);
	$rows_count = mysqli_num_rows($result);
	if($rows_count > 0 ){
	    echo "<script>alert('Tài khoản hoặc email đã tồn tại')</script>";
	} else if($user_password != $user_passwordconfirm) echo "<script>alert('Password phải giống nhau')</script>";
	else {
	    move_uploaded_file($user_image_tmp, "assets/img/user_images/$user_image");
	    $insert_query = "INSERT INTO `user_table` (username, user_password, user_email, user_address,user_ip, user_mobile, user_image) VALUES ('$username','$user_password','$user_gmail','$user_adress','$user_ip','$user_phonenumber','$user_image')";
	    $sql_execute = mysqli_query($conn, $insert_query);
	}