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
								<li class="current-list-item"><a href="index.php">Home</a>
								</li>
								<li><a href="shop.php">Product</a>
								</li>
								<li><a href="about.php">About us</a>
								</li>
								<li><a href="contact.php">Contact</a></li>
								<li>
									<div class="header-icons">
										<?php
										if (!isset($_SESSION['username'])) {
											echo "<a href='./user_area/user_login.php'>Welcome Guest</a>";
										} else {
											echo "<a href='./user_area/profile.php'>Welcome " . $_SESSION['username'] . "</a>";
										}
										?>
										<a class="shopping-cart" href="cart.php"><i class="fas
												fa-shopping-cart"></i><sup>
												<?php
												cart_item();
												?>
											</sup></a>
										<a class="mobile-hide search-bar-icon" href="shop.php"><i class="fas
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
					//		
					?>

	<!-- search area -->
	<div class="search-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<span class="close-btn"><i class="fas fa-window-close"></i></span>
					<form class="search-bar" action="" method="get">
						<div class="search-bar-tablecell">
							<h3>Search For:</h3>
							<input type="search" placeholder="Keywords" name="search_data">
							<button name="search_data_product" value="Search" type="submit">Search<i
									class="fas fa-search"></i></button>
						</div>
					</form>
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
							<h1>Kiwi - Flower shop</h1>
							<p class="subtitle">-ALWAYS BRING YOU THE BEST FLOWERS-</p>
							<div class="hero-btns">
								<a href="shop.php" class="boxed-btn">Product</a>
								<a href="contact.php" class="bordered-btn">Contact</a>
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
							<h3>Free shipping</h3>
							<p>Free shipping for orders within Ho Chi Minh City</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
					<div class="list-box d-flex align-items-center">
						<div class="list-icon">
							<i class="fas fa-phone-volume"></i>
						</div>
						<div class="content">
							<h3>Service 24/24</h3>
							<p>Always ready to serve you when you need it</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="list-box d-flex justify-content-start align-items-center">
						<div class="list-icon">
							<i class="fas fa-sync"></i>
						</div>
						<div class="content">
							<h3>Free returns</h3>
							<p>Defective goods or damaged flowers will be returned for free</p>
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
							<h3>Super fast delivery</h3>
							<p>In just 1 hour in the inner city of Ho Chi Minh City</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
					<div class="list-box d-flex align-items-center">
						<div class="list-icon">
							<i class="fas fa-dollar-sign"></i>
						</div>
						<div class="content">
							<h3>Buy super saver</h3>
							<p>10% - 30% cheaper than market price</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="list-box d-flex justify-content-start align-items-center">
						<div class="list-icon">
							<i class="fas fa-dollar-sign"></i>
						</div>
						<div class="content">
							<h3>Committed to long-lasting flowers</h3>
							<p>Guaranteed flowers stay fresh longer than 3 days</p>
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
						<h3><span class="orange-text">New product</span></h3>
					</div>
				</div>
			</div>

			<div class="row">
                <?php getNewProduct();?>
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
<!--						<div class="price-box">-->
<!--							<div class="inner-price">-->
<!--								<strong>30% OFF ORDER OVER 500000VNĐ</strong>-->
<!--							</div>-->
<!--						</div>-->
						<img src="admin/CottonCloudPeony.jpg" alt="">
					</div>
				</div>
				<!--Content Column-->
				<div class="content-column col-lg-6">
					<h3><span class="orange-text">Best</span> seller</h3>
					<div class="text" style="text-align: justify">With big flowers and delicate colors, from pure white
						beautiful to bright red, easy to care for and can live a long time.
						A combination of beauty and practicality, orchid is the perfect choice
						Perfect to decorate your living space and as a gift for your loved ones
					</div>
					<!--Countdown Timer-->
					<div class="time-counter">
						<div class="time-countdown clearfix" data-countdown="2023/6/16">
							<div class="counter-column">
								<div class="inner"><span class="count">00</span>Days</div>
							</div>
							<div class="counter-column">
								<div class="inner"><span class="count">00</span>Hours</div>
							</div>
							<div class="counter-column">
								<div class="inner"><span class="count">00</span>Mins</div>
							</div>
							<div class="counter-column">
								<div class="inner"><span class="count">00</span>Secs</div>
							</div>
						</div>
					</div>
                    <a href="cart.php" class="cart-btn mt-3"><i class="fas fa-shopping-cart"></i>Add to cart</a>
				</div>

			</div>
		</div>
	</section>
	<!-- end cart banner section -->

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
						<p>Kiwi always gives you the most beautiful flowers</p>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="footer-box get-in-touch">
						<h2 class="widget-title">Contact</h2>
						<ul>
							<li>Address: 280 An Duong Vuong, Ward 4, District 5, HCMC</li>
							<li>Email: kiwishop@gmail.com</li>
							<li>Hotline: 1900100C0</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="footer-box pages">
						<h2 class="widget-title">Customer support</h2>
						<ul>
							<li>Frequently asked questions</li>
							<li>Ordering guide</li>
							<li>Payment Guide</li>
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