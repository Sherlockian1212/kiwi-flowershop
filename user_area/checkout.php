<?php
//error_reporting(E_ERROR | E_PARSE);
global $con;
include('../include/connect.php');
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
	<link rel="shortcut icon" type="image/png" href="../assets/img/favicon.png">
	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
	<!-- fontawesome -->
	<link rel="stylesheet" href="../assets/css/all.min.css">
	<!-- bootstrap -->
	<link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
	<!-- owl carousel -->
	<link rel="stylesheet" href="../assets/css/owl.carousel.css">
	<!-- magnific popup -->
	<link rel="stylesheet" href="../assets/css/magnific-popup.css">
	<!-- animate css -->
	<link rel="stylesheet" href="../assets/css/animate.css">
	<!-- mean menu css -->
	<link rel="stylesheet" href="../assets/css/meanmenu.min.css">
	<!-- main style -->
	<link rel="stylesheet" href="../assets/css/main.css">
	<!-- responsive -->
	<link rel="stylesheet" href="../assets/css/responsive.css">

</head>
<body>
	<?php
	if(!isset($_SESSION['username'])){
		include('user_login.php');
	}
	else{
		include('../payment.php');
	}
	?>
<!--    <div class="loader">-->
<!--        <div class="loader-inner">-->
<!--            <div class="circle"></div>-->
<!--        </div>-->
<!--    </div>-->
<!--	-->
<!--	<div class="top-header-area" id="sticker">-->
<!--		<div class="container">-->
<!--			<div class="row">-->
<!--				<div class="col-lg-12 col-sm-12 text-center">-->
<!--					<div class="main-menu-wrap">-->
<!--						<div class="site-logo">-->
<!--							<a href="index.php">-->
<!--								<img src="assets/img/logo.png" alt="">-->
<!--							</a>-->
<!--						</div>-->
<!---->
<!--						<nav class="main-menu">-->
<!--							<ul>-->
<!--								<li class="current-list-item"><a href="index.php">Trang chủ</a>-->
<!--								</li>-->
<!--								<li><a href="shop.php">Sản phẩm</a>-->
<!--									<ul class="sub-menu">-->
<!--										<li><a href="shop.php">Tất cả sản phẩm</a></li>-->
<!--										<li><a href="cart.php">Giỏ hàng</a></li>-->
<!--										<li><a href="checkout.php">Đặt hàng</a></li>-->
<!--									</ul>-->
<!--								</li>-->
<!--								<li><a href="about.html">Về chúng tôi</a>-->
<!--								</li>-->
<!--								<li><a href="contact.html">Liên hệ</a></li>-->
<!--								<li>-->
<!--									<div class="header-icons">-->
<!--										<a href="user.html" class="customer-account">-->
<!--											<i class="fas fa-user-alt"></i>-->
<!--										</a>-->
<!--										<a class="shopping-cart" href="cart.php"><i class="fas-->
<!--												fa-shopping-cart"></i></a>-->
<!--										<a class="mobile-hide search-bar-icon" href="#"><i class="fas-->
<!--												fa-search"></i></a>-->
<!--									</div>-->
<!--								</li>-->
<!--							</ul>-->
<!--						</nav>-->
<!--						<a class="mobile-show search-bar-icon" href="#"><i class="fas fa-search"></i></a>-->
<!--						<div class="mobile-menu"></div>-->
<!--					</div>-->
<!--				</div>-->
<!--			</div>-->
<!--		</div>-->
<!--	</div>-->
<!--	-->
<!---->
<!--	<div class="search-area">-->
<!--		<div class="container">-->
<!--			<div class="row">-->
<!--				<div class="col-lg-12">-->
<!--					<span class="close-btn"><i class="fas fa-window-close"></i></span>-->
<!--					<div class="search-bar">-->
<!--						<div class="search-bar-tablecell">-->
<!--							<h3>Bạn muốn tìm gì?</h3>-->
<!--							<input type="text" placeholder="Từ khóa">-->
<!--							<button name="search_data_product" value="Search" type="submit">Search<i class="fas fa-search"></i></button>-->
<!--						</div>-->
<!--					</div>-->
<!--				</div>-->
<!--			</div>-->
<!--		</div>-->
<!--	</div>-->
<!---->
<!--	-->
<!--	<div class="breadcrumb-section breadcrumb-bg">-->
<!--		<div class="container">-->
<!--			<div class="row">-->
<!--				<div class="col-lg-8 offset-lg-2 text-center">-->
<!--					<div class="breadcrumb-text">-->
<!--						<p>Mang đến sự hài lòng cho khách hàng</p>-->
<!--						<h1>Đặt hàng</h1>-->
<!--					</div>-->
<!--				</div>-->
<!--			</div>-->
<!--		</div>-->
<!--	</div>-->
<!---->
<!--	<div class="checkout-section mt-150 mb-150">-->
<!--		<div class="container">-->
<!--			<div class="row">-->
<!--				<div class="col-lg-8">-->
<!--					<div class="checkout-accordion-wrap">-->
<!--						<div class="accordion" id="accordionExample">-->
<!--						  <div class="card single-accordion">-->
<!--						    <div class="card-header" id="headingOne">-->
<!--						      <h5 class="mb-0">-->
<!--						        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">-->
<!--						          Thông tin khách hàng-->
<!--						        </button>-->
<!--						      </h5>-->
<!--						    </div>-->
<!---->
<!--						    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">-->
<!--						      <div class="card-body">-->
<!--						        <div class="billing-address-form">-->
<!--						        	<form action="index.php">-->
<!--						        		<p><input type="text" placeholder="Tên"></p>-->
<!--						        		<p><input type="email" placeholder="Email"></p>-->
<!--						        		<p><input type="text" placeholder="Địa chỉ"></p>-->
<!--						        		<p><input type="tel" placeholder="SĐT"></p>-->
<!--						        		<p><textarea name="bill" id="bill" cols="30" rows="10" placeholder="Ghi chú cho người bán"></textarea></p>-->
<!--						        	</form>-->
<!--						        </div>-->
<!--						      </div>-->
<!--						    </div>-->
<!--						  </div>-->
<!--						  <div class="card single-accordion">-->
<!--						    <div class="card-header" id="headingTwo">-->
<!--						      <h5 class="mb-0">-->
<!--						        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">-->
<!--						          Địa chỉ của bạn-->
<!--						        </button>-->
<!--						      </h5>-->
<!--						    </div>-->
<!--						    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">-->
<!--						      <div class="card-body">-->
<!--						        <div class="shipping-address-form">-->
<!--						        	<p>Your shipping address form is here.</p>-->
<!--						        </div>-->
<!--						      </div>-->
<!--						    </div>-->
<!--						  </div>-->
<!--						  <div class="card single-accordion">-->
<!--						    <div class="card-header" id="headingThree">-->
<!--						      <h5 class="mb-0">-->
<!--						        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">-->
<!--						          Chi tiết đơn hàng-->
<!--						        </button>-->
<!--						      </h5>-->
<!--						    </div>-->
<!--						    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">-->
<!--						      <div class="card-body">-->
<!--						        <div class="card-details">-->
<!--						        	<p>Your card details goes here.</p>-->
<!--						        </div>-->
<!--						      </div>-->
<!--						    </div>-->
<!--						  </div>-->
<!--						</div>-->
<!---->
<!--					</div>-->
<!--				</div>-->
<!---->
<!--				<div class="col-lg-4">-->
<!--					<div class="order-details-wrap">-->
<!--						<table class="order-details">-->
<!--							<thead>-->
<!--								<tr>-->
<!--									<th>Chi tiết</th>-->
<!--									<th>Price</th>-->
<!--								</tr>-->
<!--							</thead>-->
<!--							<tbody class="order-details-body">-->
<!--								<tr>-->
<!--									<td>Sản phẩm</td>-->
<!--									<td>Thành tiền</td>-->
<!--								</tr>-->
<!--								<tr>-->
<!--									<td>Strawberry</td>-->
<!--									<td>$85.00</td>-->
<!--								</tr>-->
<!--								<tr>-->
<!--									<td>Berry</td>-->
<!--									<td>$70.00</td>-->
<!--								</tr>-->
<!--								<tr>-->
<!--									<td>Lemon</td>-->
<!--									<td>$35.00</td>-->
<!--								</tr>-->
<!--							</tbody>-->
<!--							<tbody class="checkout-details">-->
<!--								<tr>-->
<!--									<td>Tổng đơn hàng</td>-->
<!--									<td>$190</td>-->
<!--								</tr>-->
<!--								<tr>-->
<!--									<td>Phí vận chuyển</td>-->
<!--									<td>$50</td>-->
<!--								</tr>-->
<!--								<tr>-->
<!--									<td>Tổng thanh toán</td>-->
<!--									<td>$240</td>-->
<!--								</tr>-->
<!--							</tbody>-->
<!--						</table>-->
<!--						<a href="#" class="boxed-btn">Đặt hàng</a>-->
<!--					</div>-->
<!--				</div>-->
<!--			</div>-->
<!--		</div>-->
<!--	</div>-->
<!---->
<!--	<div class="footer-area">-->
<!--		<div class="container">-->
<!--			<div class="row">-->
<!--				<div class="col-lg-4 col-md-6">-->
<!--					<div class="footer-box about-widget">-->
<!--						<h2 class="widget-title">Kiwi</h2>-->
<!--						<p>Kiwi luôn dành cho bạn những bông hoa đẹp nhất</p>-->
<!--					</div>-->
<!--				</div>-->
<!--				<div class="col-lg-4 col-md-6">-->
<!--					<div class="footer-box get-in-touch">-->
<!--						<h2 class="widget-title">Liên hệ</h2>-->
<!--						<ul>-->
<!--							<li>Địa chỉ: 280 An Dương Vương, P.4, Q.5, TPHCM</li>-->
<!--							<li>Email: kiwishop@gmail.com</li>-->
<!--							<li>Hotline: 1900100C0</li>-->
<!--						</ul>-->
<!--					</div>-->
<!--				</div>-->
<!--				<div class="col-lg-4 col-md-6">-->
<!--					<div class="footer-box pages">-->
<!--						<h2 class="widget-title">Hỗ trợ khách hàng</h2>-->
<!--						<ul>-->
<!--							<li>Câu hỏi thường gặp</li>-->
<!--							<li>Hướng dẫn đặt hàng</li>-->
<!--							<li>Hướng dẫn thanh toán</li>-->
<!--						</ul>-->
<!--					</div>-->
<!--				</div>-->
<!--			</div>-->
<!--		</div>-->
<!--	</div>-->
<!--	<div class="copyright">-->
<!--		<div class="container">-->
<!--			<div class="row">-->
<!--				<div class="col-lg-6 col-md-12">-->
<!--					<p>Copyrights &copy; 2023 - <a href="#">Kiwi Group</a>, All Rights-->
<!--						Reserved.<br>-->
<!--					</p>-->
<!--				</div>-->
<!--				<div class="col-lg-6 text-right col-md-12">-->
<!--					<div class="social-icons">-->
<!--						<ul>-->
<!--							<li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>-->
<!--							<li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>-->
<!--							<li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>-->
<!--							<li><a href="#" target="_blank"><i class="fab fa-linkedin"></i></a></li>-->
<!--							<li><a href="#" target="_blank"><i class="fab fa-dribbble"></i></a></li>-->
<!--						</ul>-->
<!--					</div>-->
<!--				</div>-->
<!--			</div>-->
<!--		</div>-->
<!--	</div>-->
<!---->
	<!-- jquery -->
	<script src="../assets/js/jquery-1.11.3.min.js"></script>
	<!-- bootstrap -->
	<script src="../assets/bootstrap/js/bootstrap.min.js"></script>
	<!-- count down -->
	<script src="../assets/js/jquery.countdown.js"></script>
	<!-- isotope -->
	<script src="../assets/js/jquery.isotope-3.0.6.min.js"></script>
	<!-- waypoints -->
	<script src="../assets/js/waypoints.js"></script>
	<!-- owl carousel -->
	<script src="../assets/js/owl.carousel.min.js"></script>
	<!-- magnific popup -->
	<script src="../assets/js/jquery.magnific-popup.min.js"></script>
	<!-- mean menu -->
	<script src="../assets/js/jquery.meanmenu.min.js"></script>
	<!-- sticker js -->
	<script src="../assets/js/sticker.js"></script>
	<!-- main js -->
	<script src="../assets/js/main.js"></script>

</body>
</html>