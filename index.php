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
	<meta name="description" content="Responsive Bootstrap4 Shop Template, Created
			by Imran Hossain from https://imransdesign.com/">

	<!-- title -->
	<title>Kiwi - Flower Shop</title>

	<!-- favicon -->
	<link rel="shortcut icon" type="image/png" href="assets/img/favicon.png">
	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700"
		  rel="stylesheet">
	<link
		href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap"
		rel="stylesheet">
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
						<a href="index.html">
							<img src="assets/img/logo.png" alt="">
						</a>
					</div>
					<!-- logo -->

					<!-- menu start -->
					<nav class="main-menu">
						<ul>
							<li class="current-list-item"><a href="index.html">Trang chủ</a>
							</li>
							<li><a href="shop.php">Sản phẩm</a>
								<ul class="sub-menu">
									<li><a href="shop.php">Tất cả sản phẩm</a></li>
									<li><a href="cart.php">Giỏ hàng</a></li>
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
									<a class="shopping-cart" href="cart.php"><i class="fas
												fa-shopping-cart"></i><sup>
											<?php
												cart_item();
											?>
										</sup></a>
									<a class="mobile-hide search-bar-icon" href="#"><i class="fas
													fa-search"></i></a>
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

<!--<nav class = "navbar navbar-expand-lg navbar-dark bg-secondary">-->
<!--	<ul class = "navbar-nav me-auto">-->
<!--		--><?php
//			if(!isset($_SESSION['username'])){
//				echo " <li class='nav-item'>
//					<a href='#' class='nav-link'>Welcome Guest</a>
//				</li>";
//			}else{
//				echo "<li class='nav-item'>
//					<a href='#' class='nav-link'>Welcome" .$_SESSION['username']."</a>
//				</li>";
//			}
//if(!isset($_SESSION['username'])){
//	echo "<li class='nav-item'>
//	<a href='#' class='nav-link'>Login</a>
//	</li>";
//}else{
//	echo "<li class='nav-item'>
//	<a href='#' class='nav-link'>Logout</a>
//	</li>";
//}
//		?>

<!-- search area -->
<div class="search-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<span class="close-btn"><i class="fas fa-window-close"></i></span>
				<div class="search-bar">
					<div class="search-bar-tablecell">
						<h3>Bạn muốn tìm gì?</h3>
						<input type="text" placeholder="Từ khóa">
						<button type="submit">Tìm kiếm<i class="fas fa-search"></i></button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- end search area -->

<!-- hero area -->
<div class="hero-area hero-bg">
	<div class="container">
		<div class="row">
			<div class="col-lg-9 offset-lg-2 text-center">
				<div class="hero-text">
					<div class="hero-text-tablecell">
						<h1>Hoa tươi Kiwi</h1>
						<p class="subtitle">-luôn mang đến cho bạn những bông hoa đẹp nhất-</p>
						<div class="hero-btns">
							<a href="shop.php" class="boxed-btn">Sản phẩm</a>
							<a href="contact.html" class="bordered-btn">Liên hệ</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- end hero area -->

<!-- features list section -->
<div class="list-section pt-80 pb-80">
	<div class="container">

		<div class="row">
			<div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
				<div class="list-box d-flex align-items-center">
					<div class="list-icon">
						<i class="fas fa-shipping-fast"></i>
					</div>
					<div class="content">
						<h3>Vận chuyển miễn phí</h3>
						<p>Miễn phí vận chuyển các đơn hàng trong nội thành TPHCM</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
				<div class="list-box d-flex align-items-center">
					<div class="list-icon">
						<i class="fas fa-phone-volume"></i>
					</div>
					<div class="content">
						<h3>Phục vụ 24/24</h3>
						<p>Luôn sẵn sàng phục vụ những lúc bạn cần</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="list-box d-flex justify-content-start align-items-center">
					<div class="list-icon">
						<i class="fas fa-sync"></i>
					</div>
					<div class="content">
						<h3>Đổi trả miễn phí</h3>
						<p>Hàng bị lỗi hoặc hoa bị héo dập nát sẽ được đổi trả miễn phí</p>
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
				<div class="list-box d-flex align-items-center">
					<div class="list-icon">
						<i class="fas fa-clock"></i>
					</div>
					<div class="content">
						<h3>Giao hàng siêu tốc</h3>
						<p>Chỉ trong 1h tại nội thành TPHCM</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
				<div class="list-box d-flex align-items-center">
					<div class="list-icon">
						<i class="fas fa-dollar-sign"></i>
					</div>
					<div class="content">
						<h3>Mua hàng siêu tiết kiệm</h3>
						<p>Rẻ hơn từ 10% - 30% so với giá thị trường</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="list-box d-flex justify-content-start align-items-center">
					<div class="list-icon">
						<i class="fas fa-dollar-sign"></i>
					</div>
					<div class="content">
						<h3>Cam kết hoa tươi lâu</h3>
						<p>Bảo đảm hoa tươi lâu hơn 3 ngày</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- end features list section -->

<!-- product section -->
<div class="product-section mt-150 mb-150">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 offset-lg-2 text-center">
				<div class="section-title">
					<h3><span class="orange-text">Sản phẩm mới</span></h3>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-4 col-md-6 text-center">
				<div class="single-product-item">
					<div class="product-image">
						<a href="single-product.php"><img
								src="assets/img/products/tulip_hong.jpg" alt=""></a>
					</div>
					<h3>Tulip hồng</h3>
					<p class="product-price"> 70$ </p>
					<a href="cart.php" class="cart-btn"><i class="fas fa-shopping-cart"></i>Thêm
						vào giỏ hàng</a>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 text-center">
				<div class="single-product-item">
					<div class="product-image">
						<a href="single-product.php"><img
								src="assets/img/products/hoa_hong_trang.jpg" alt=""></a>
					</div>
					<h3>Lan hồng</h3>
					<p class="product-price"> 70$ </p>
					<a href="cart.php" class="cart-btn"><i class="fas fa-shopping-cart"></i>Thêm
						vào giỏ hàng</a>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0 text-center">
				<div class="single-product-item">
					<div class="product-image">
						<a href="single-product.php"><img
								src="assets/img/products/hoa_hong_trang.jpg" alt=""></a>
					</div>
					<h3>Hoa hồng trắng</h3>
					<p class="product-price"> 35$ </p>
					<a href="cart.php" class="cart-btn"><i class="fas fa-shopping-cart"></i>Thêm
						vào giỏ hàng</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- end product section -->

<!-- cart banner section -->
<section class="cart-banner pt-100 pb-100">
	<div class="container">
		<div class="row clearfix">
			<!--Image Column-->
			<div class="image-column col-lg-6">
				<div class="image">
					<div class="price-box">
						<div class="inner-price">
							<strong>GIẢM GIÁ 30% CHO ĐƠN TRÊN 500K</strong>
						</div>
					</div>
					<img src="assets/img/phong_lan_1.jpg" alt="">
				</div>
			</div>
			<!--Content Column-->
			<div class="content-column col-lg-6">
				<h3><span class="orange-text">Best</span> seller</h3>
				<div class="text">Với những đoá hoa to và màu sắc tinh tế, từ trắng tinh
					khôi đến đỏ rực rỡ, dễ chăm sóc và có thể sống lâu dài.
					Sự kết hợp giữa vẻ đẹp và tính thực tiễn, phong lan là sự lựa chọn hoàn
					hảo để trang trí không gian sống và làm quà tặng cho người thân yêu
				</div>
				<!--Countdown Timer-->
				<div class="time-counter"><div class="time-countdown clearfix"
											   data-countdown="2020/2/01"><div class="counter-column"><div
								class="inner"><span class="count">00</span>Days</div></div> <div
							class="counter-column"><div class="inner"><span class="count">00</span>Hours</div></div>
						<div class="counter-column"><div class="inner"><span class="count">00</span>Mins</div></div>
						<div class="counter-column"><div class="inner"><span class="count">00</span>Secs</div></div></div></div>
				<a href="cart.php" class="cart-btn mt-3"><i class="fas fa-shopping-cart"></i>Thêm
					vào giỏ hàng</a>
			</div>
		</div>
	</div>
</section>
<!-- end cart banner section -->


<!-- advertisement section -->
<div class="abt-section mb-150">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-12">
				<div class="abt-text">
					<h2>Chúng tôi <span class="orange-text">có</span></h2>
					<p>Những sản phẩm với tiêu chí chất lượng hàng đầu, luôn mang đến cho bạn
						những bông hoa đẹp nhất</p>
					<a href="shop.php" class="boxed-btn mt-4">Xem thêm</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- end advertisement section -->

<!-- testimonail-section -->
<div class="testimonail-section mt-150 mb-150">
	<div class="container">
		<div class="row">
			<div class="col-lg-10 offset-lg-1 text-center">
				<div class="testimonial-sliders">
					<div class="single-testimonial-slider">
						<div class="client-avater">
							<img src="assets/img/avaters/avatar1.png" alt="">
						</div>
						<div class="client-meta">
							<h3>Thái Thị Kim Yến <span>Local shop owner</span></h3>
							<p class="testimonial-body">
								" Mua hoa tặng cho thần tượng hihi "
							</p>
							<div class="last-icon">
								<i class="fas fa-quote-right"></i>
							</div>
						</div>
					</div>
					<div class="single-testimonial-slider">
						<div class="client-avater">
							<img src="assets/img/avaters/avatar2.png" alt="">
						</div>
						<div class="client-meta">
							<h3>Huỳnh Mạng Tường <span>Local shop owner</span></h3>
							<p class="testimonial-body">
								" Tôi và bé mèo rất thích hoa ở shop luôn đó "
							</p>
							<div class="last-icon">
								<i class="fas fa-quote-right"></i>
							</div>
						</div>
					</div>
					<div class="single-testimonial-slider">
						<div class="client-avater">
							<img src="assets/img/avaters/avatar3.png" alt="">
						</div>
						<div class="client-meta">
							<h3>Hồ Sĩ Thiện <span>Local shop owner</span></h3>
							<p class="testimonial-body">
								" Shop gần chỗ tập gym, không ngờ shop nhiều hoa đẹp thế "
							</p>
							<div class="last-icon">
								<i class="fas fa-quote-right"></i>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- end testimonail-section -->



<!-- shop banner -->
<section class="shop-banner">
	<div class="container">
		<h3>December sale is on! <br> with big <span class="orange-text">Discount...</span></h3>
		<div class="sale-percent"><span>Sale! <br> Upto</span>50% <span>off</span></div>
		<a href="shop.php" class="cart-btn btn-lg">Shop Now</a>
	</div>
</section>
<!-- end shop banner -->


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
						<li>Hotline: 1900100C0</li>
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
				<p>Copyrights &copy; 2023 - <a href="#">Kiwi Group</a>, All Rights
					Reserved.<br>
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