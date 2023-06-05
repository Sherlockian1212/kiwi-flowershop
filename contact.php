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
											<li><a href="cart.php">Giỏ hàng</a></li>
											<li><a href="user_area/checkout.php">Đặt hàng</a></li>
										</ul>
									</li>
									<li><a href="about.php">Về chúng tôi</a>
									</li>
									<li><a href="contact.html">Liên hệ</a></li>
									<li>
										<div class="header-icons">
											<a href="./user_area/profile.php" class="customer-account">
                                                <i class="fas fa-user-alt"></i>
                                            </a>
											<a class="shopping-cart" href="cart.php"><i class="fas
													fa-shopping-cart"></i></a>
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


		<!-- breadcrumb-section -->
		<div class="breadcrumb-section breadcrumb-bg">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 offset-lg-2 text-center">
						<div class="breadcrumb-text">
							<p>Chúng tôi sẵn sàng hỗ trợ 24/7</p>
							<h1>Liên hệ</h1>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- end breadcrumb section -->

		<!-- contact form -->
		<div class="contact-from-section mt-150 mb-150">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 mb-5 mb-lg-0">
						<div class="form-title">
							<h2>Đặt câu hỏi để được hỗ trợ?</h2>
							<p>Luôn luôn lắng nghe, luôn luôn thấu hiểu!</p>
						</div>
						<div id="form_status"></div>
						<div class="contact-form">
							<form type="POST" id="fruitkha-contact" onSubmit="return valid_datas(
								this );">
								<p>
									<input type="text" placeholder="Tên" name="name" id="name">
									<input type="email" placeholder="Email" name="email" id="email">
								</p>
								<p>
									<input type="tel" placeholder="Số điện thoại" name="phone" id="phone">
									<input type="text" placeholder="Chủ đề" name="subject" id="subject">
								</p>
								<p><textarea name="message" id="message" cols="30" rows="10"
										placeholder="Nôi dung"></textarea></p>
								<input type="hidden" name="token" value="FsWga4&@f6aw" />
								<p><input type="submit" value="Gửi đi"></p>
							</form>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="contact-form-wrap">
							<div class="contact-form-box">
								<h4><i class="fas fa-map"></i> Đia chỉ cửa hàng</h4>
								<p>280 An Dương Vương, Phường 4, Quận 5, <br> TP Hồ Chí Minh. <br> Việt
									Nam</p>
							</div>
							<div class="contact-form-box">
								<h4><i class="far fa-clock"></i> Giờ mở cửa</h4>
								<p>Thứ 2 - Thứ 6: 8 AM đến 9 PM <br> Thứ 7 - Chủ nhật: 10 AM đến 8 PM
								</p>
							</div>
							<div class="contact-form-box">
								<h4><i class="fas fa-address-book"></i> Liên hệ</h4>
								<p>Điện thoại: 1900100C0 <br> Email: kiwishop@gmail.com</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- end contact form -->

		<!-- find our location -->
		<div class="find-location blue-bg">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-center">
						<p> <i class="fas fa-map-marker-alt"></i> Bản đồ</p>
					</div>
				</div>
			</div>
		</div>
		<!-- end find our location -->

		<!-- google map section -->
		<div class="embed-responsive embed-responsive-21by9">
			<iframe
				src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.6505094513705!2d106.68218739999999!3d10.761395199999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f1b888ab357%3A0xc469f6e800231314!2zMjgwIMSQLiBBbiBELiBWxrDGoW5nLCBQaMaw4budbmcgNCwgUXXhuq1uIDUsIFRow6BuaCBwaOG7kSBI4buTIENow60gTWluaCwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1683346689834!5m2!1svi!2s"
				width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
				referrerpolicy="no-referrer-when-downgrade" width="600" height="450"
				frameborder="0" style="border:0;" allowfullscreen=""
				class="embed-responsive-item"></iframe>
		</div>
		<!-- end google map section -->


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
		<!-- form validation js -->
		<script src="assets/js/form-validate.js"></script>
		<!-- main js -->
		<script src="assets/js/main.js"></script>

	</body>
</html>