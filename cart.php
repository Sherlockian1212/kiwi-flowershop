<?php
global $con;
include('include/connect.php');
include('function/common_functions.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

	<!-- title -->
	<title>Kiwi - Flower Shop</title>

	<!-- favicon -->
	<link rel="shortcut icon" type="image/png" href="assets/img/favicon.png">
	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
	<!-- fontawesome -->
	<link rel="stylesheet" href="assets/css/all.min.css">
	<!-- bootstrap -->
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
	<!-- owl carousel -->
	<link rel="stylesheet" href="assets/css/owl.carousel.css">
	<!-- magnific popup -->
	<link rel="stylesheet" href="assets/css/magnific-popup.css">
	<!-- animate css -->
	<link rel="stylesheet" href="assets/css/animate.css">
	<!-- mean menu css -->
	<link rel="stylesheet" href="assets/css/meanmenu.min.css">
	<!-- main style -->
	<link rel="stylesheet" href="assets/css/main.css">
	<!-- responsive -->
	<link rel="stylesheet" href="assets/css/responsive.css">

	<style>
		.btn-rounded{
			border: none;
			border-radius: 5px;
			padding: 10px;
		}
		td {
			max-width: 100px;
			overflow: hidden;
			text-overflow: ellipsis;
			white-space: nowrap;
		}
		.cart-table-wrap tbody tr td{
			padding: 20px 5px;
		}
	</style>
</head>
<body>

	<!--PreLoader-->
    <div class="loader">
        <div class="loader-inner">
            <div class="circle"></div>
        </div>
    </div>
    <!--PreLoader Ends-->

	<!-- header -->
	<div class="top-header-area" id="sticker">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-sm-12 text-center">
					<div class="main-menu-wrap">
						<!-- logo -->
						<div class="site-logo">
							<a href="index.php">
								<img src="assets/img/logo.png" alt="">
							</a>
						</div>
						<!-- logo -->

						<!-- menu start -->
						<nav class="main-menu">
							<ul>
								<li class="current-list-item"><a href="index.php">Trang chủ</a>
								</li>
								<li><a href="shop.php">Sản phẩm</a>
									<ul class="sub-menu">
										<li><a href="shop.php">Tất cả sản phẩm</a></li>
										<li><a href="cart.html">Giỏ hàng</a></li>
										<li><a href="user_area/checkout.php">Đặt hàng</a></li>
									</ul>
								</li>
								<li><a href="about.html">Về chúng tôi</a>
								</li>
								<li><a href="contact.html">Liên hệ</a></li>
								<li>
									<div class="header-icons">
										<?php
										if(!isset($_SESSION['username'])){
											echo "<a href='./user_area/user_login.php'>Welcome Guest</a>";
										}else{
											echo "<a href='./user_area/profile.php'>Welcome ".$_SESSION['username']."</a>";
										}
										?>
										<a class="mobile-hide search-bar-icon" href="#"><i class="fas
												fa-search"></i>
										</a>
									</div>
								</li>
							</ul>
						</nav>
						<a class="mobile-show search-bar-icon" href="#"><i class="fas fa-search"></i></a>
						<div class="mobile-menu"></div>
						<!-- menu end -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end header -->

	<!-- search area -->
	<div class="search-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<span class="close-btn"><i class="fas fa-window-close"></i></span>
					<form class="search-bar" action="search_product.php" method="get">
						<div class="search-bar-tablecell">
							<h3>Search For:</h3>
							<input type="search" placeholder="Keywords" name="search_data">
							<button name="search_data_product" value="Search" type="submit">Search<i class="fas fa-search"></i></button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- end search area -->


	<!-- breadcrumb-section -->
	<div class="breadcrumb-section breadcrumb-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<p>Mang đến sự hài lòng cho khách hàng</p>
						<h1>Giỏ hàng</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

	<!-- cart -->
	<div class="cart-section mt-150 mb-150">
		<div class="container">
			<form class="row" method="post">
				<div class="col-lg-8 col-md-12">
					<div class="cart-table-wrap">
						<table class="cart-table">
							<thead class="cart-table-head">
								<tr class="table-head-row">
									<th class="product-remove"></th>
									<th class="product-image">Hình ảnh</th>
									<th class="product-name">Tên</th>
									<th class="product-price">Đơn giá</th>
									<th class="product-quantity">Số lượng</th>
									<th class="product-total">Thành tiền</th>
									<th class="product-total">Thao tác</th>
								</tr>
							</thead>
							<tbody>
								<?php
									remove_cart_item();
									update_cart();
									getCartItemInfo();
								?>
							</tbody>
						</table>
					</div>
				</div>

				<div class="col-lg-4">
					<div class="total-section">
						<table class="total-table">
							<thead class="total-table-head">
								<tr class="table-total-row">
									<th>Thanh toán</th>
									<th>Giá</th>
								</tr>
							</thead>
							<tbody>
								<tr class="total-data">
									<td><strong>Giá trị đơn hàng: </strong></td>
									<td><?php
										total_cart_price();
										?>
										VNĐ
									</td>
								</tr>
								<tr class="total-data">
									<td><strong>Phí vận chuyển: </strong></td>
									<td>$45</td>
								</tr>
								<tr class="total-data">
									<td><strong>Tổng cộng: </strong></td>
									<td>
										<?php
											total_cart_price();
										?>
										VNĐ
									</td>
								</tr>
							</tbody>
						</table>
						<div class="cart-buttons">
							<a href="user_area/checkout.php" class="boxed-btn black">Đặt hàng</a>
						</div>
					</div>

<!--					<div class="coupon-section">-->
<!--						<h3>Áp dụng khuyến mãi</h3>-->
<!--						<div class="coupon-form-wrap">-->
<!--							<form action="index.php">-->
<!--								<p><input type="text" placeholder="Mã giảm giá"></p>-->
<!--								<p><input type="submit" value="Kiểm tra"></p>-->
<!--							</form>-->
<!--						</div>-->
<!--					</div>-->
				</div>
			</form>
		</div>
	</div>
	<!-- end cart -->
	<!-- footer -->
	<div class="footer-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-6">
					<div class="footer-box about-widget">
						<h2 class="widget-title">Kiwi</h2>
						<p>Kiwi luôn dành cho bạn những bông hoa đẹp nhất</p>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="footer-box get-in-touch">
						<h2 class="widget-title">Liên hệ</h2>
						<ul>
							<li>Địa chỉ: 280 An Dương Vương, P.4, Q.5, TPHCM</li>
							<li>Email: kiwishop@gmail.com</li>
							<li>+00 111 222 3333</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="footer-box pages">
						<h2 class="widget-title">Hỗ trợ khách hàng</h2>
						<ul>
							<li>Câu hỏi thường gặp</li>
							<li>Hướng dẫn đặt hàng</li>
							<li>Hướng dẫn thanh toán</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end footer -->

	<!-- copyright -->
	<div class="copyright">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-12">
					<p>Copyrights &copy; 2019 - <a href="https://imransdesign.com/">Imran Hossain</a>,  All Rights Reserved.<br>
						Distributed By - <a href="https://themewagon.com/">Themewagon</a>
					</p>
				</div>
				<div class="col-lg-6 text-right col-md-12">
					<div class="social-icons">
						<ul>
							<li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-linkedin"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-dribbble"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end copyright -->

	<!-- jquery -->
	<script src="assets/js/jquery-1.11.3.min.js"></script>
	<!-- bootstrap -->
	<script src="assets/bootstrap/js/bootstrap.min.js"></script>
	<!-- count down -->
	<script src="assets/js/jquery.countdown.js"></script>
	<!-- isotope -->
	<script src="assets/js/jquery.isotope-3.0.6.min.js"></script>
	<!-- waypoints -->
	<script src="assets/js/waypoints.js"></script>
	<!-- owl carousel -->
	<script src="assets/js/owl.carousel.min.js"></script>
	<!-- magnific popup -->
	<script src="assets/js/jquery.magnific-popup.min.js"></script>
	<!-- mean menu -->
	<script src="assets/js/jquery.meanmenu.min.js"></script>
	<!-- sticker js -->
	<script src="assets/js/sticker.js"></script>
	<!-- main js -->
	<script src="assets/js/main.js"></script>

</body>
</html>