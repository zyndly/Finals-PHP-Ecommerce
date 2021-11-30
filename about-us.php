<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>About Us</title>
		<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<script src="js/jquery2.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="main.js"></script>
		<link rel="stylesheet" type="text/css" href="style.css">

		<link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico">
		<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400italic,700,700italic,900,900italic&amp;subset=latin,latin-ext" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Open%20Sans:300,400,400italic,600,600italic,700,700italic&amp;subset=latin,latin-ext" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="assets/css/animate.css">
		<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.min.css">
		<link rel="stylesheet" type="text/css" href="assets/css/chosen.min.css">
		<link rel="stylesheet" type="text/css" href="assets/css/style.css">
		<link rel="stylesheet" type="text/css" href="assets/css/color-01.css">
		<!--
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
-->
		<style></style>
	</head>
<!-- HERE -->
<body>
<div class="wait overlay">
	<div class="loader"></div>
</div>
<!--NAVBAR-->
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">	
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse" aria-expanded="false">
					<span class="sr-only">navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="index.php" class="navbar-brand">
				Maxwell Shop                                     </a>
			</div>
		<div class="collapse navbar-collapse" id="collapse">
			<form class="navbar-form navbar-left">
		        <div class="form-group">
		          <input type="text" class="form-control" placeholder="Search" id="search">
		        </div>
		        <button type="submit" class="btn btn-primary" id="search_btn"><span class="glyphicon glyphicon-search"></span></button>
		     </form>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-shopping-cart"></span> Cart <span class="badge" >0</span></a>
					<div class="dropdown-menu" style="width:500px;">
						<div class="panel panel-success">
							<div class="panel-heading">
								<div class="row">
									<div class="col-md-3">Sl.No</div>
									<div class="col-md-3">Product Image</div>
									<div class="col-md-3">Product Name</div>
									<div class="col-md-3">Price in <?php echo CURRENCY; ?></div>
								</div>
							</div>
							<div class="panel-body">
								<div id="cart_product">
								</div>
							</div>
							<div class="panel-footer"></div>
						</div>
					</div>
				</li>
		<!--END MARK -->
				<li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> Login/Register</a>
					<ul class="dropdown-menu">
						<div style="width:300px;">
							<div class="panel panel-primary">
								<div class="panel-heading">Login</div>
								<div class="panel-heading">
									<form onsubmit="return false" id="login">
										<label for="email">Email</label>
										<input type="email" class="form-control" name="email" id="email" required/>
										<label for="email">Password</label>
										<input type="password" class="form-control" name="password" id="password" required/>
										<p><br/></p>
										<input type="submit" class="btn btn-warning" value="Login">
										<a href="customer_registration.php?register=1" style="color:white; text-decoration:none;">Create Account Now</a>
									</form>
								</div>
								<div class="panel-footer" id="e_msg"></div>
							</div>
						</div>
					</ul>
				</li>
			</ul>
		</div>
	</div>
	
	<!--header-->
	<header id="header" class="header header-style-1">
		<div class="container-fluid">
			<div class="row">
				<div class="topbar-menu-area">
					<div class="container">
					</div>
				</div>
					</div>
				</div>
					<div class="primary-nav-section">
						<div class="container">
							<ul class="nav primary clone-main-menu" id="mercado_main" data-menuname="Main menu" >
								<li class="menu-item home-icon">
									<a href="index.php" class="link-term mercado-item-title"><i class="fa fa-home" aria-hidden="true"></i></a>
								</li>
								<li class="menu-item">
									<a href="about-us.php" class="link-term mercado-item-title">About Us</a>
								</li>
								<li class="menu-item">
									<a href="contact-us.php" class="link-term mercado-item-title">Contact Us</a>
								</li>																	
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<div class="wrap-logo-top left-section">
	<p><br/></p>
	<p><br/></p>
	<p><br/></p>
	<p><br/></p>
		<a href="index.php" class="link-to-home"><img src="assets/images/logo-top-1.png" alt="mercado"></a>
	</div>
<!--END OF NAV BAR-->

<!--START CONTENT-->
<!--main area-->
<main id="main" class="main-site">
<div class="container">
	<!-- <div class="main-content-area"> -->
		<div class="aboutus-info style-center">
			<b class="box-title">Interesting Facts</b>
			<p class="txt-content">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the dummy text ever since the 1500s, when an unknown printer took a galley of type</p>
		</div>

		<div class="row equal-container">
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
				<div class="aboutus-box-score equal-elem ">
					<b class="box-score-title">10000</b>
					<span class="sub-title">Items in Store</span>
					<p class="desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the dummy text ever since the 1500s...</p>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
				<div class="aboutus-box-score equal-elem ">
					<b class="box-score-title">90%</b>
					<span class="sub-title">Our Customers comeback</span>
					<p class="desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the dummy text ever since the 1500s...</p>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
				<div class="aboutus-box-score equal-elem ">
					<b class="box-score-title">2 million</b>
					<span class="sub-title">User of the site</span>
					<p class="desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the dummy text ever since the 1500s...</p>
				</div>
			</div>
		</div>

		<div class="row">

			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
				<div class="aboutus-info style-small-left">
					<b class="box-title">What we really do?</b>
					<p class="txt-content">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock,</p>
				</div>
				<div class="aboutus-info style-small-left">
					<b class="box-title">History of the Company</b>
					<p class="txt-content">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock,</p>
				</div>
			</div>

			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
				<div class="aboutus-info style-small-left">
					<b class="box-title">Our Vision</b>
					<p class="txt-content">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock,</p>
				</div>
				<div class="aboutus-info style-small-left">
					<b class="box-title">Cooperate with Us!</b>
					<p class="txt-content">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock,</p>
				</div>
			</div>

			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
				<div class="aboutus-info style-small-left">
					<b class="box-title">Cooperate with Us!</b>
					<div class="list-showups">
						<label>
							<input type="radio" class="hidden" name="showup" id="shoup1" value="shoup1" checked="checked">
							<span class="check-box"></span>
							<span class='function-name'>Support 24/7</span>
							<span class="desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry...</span>
						</label>
						<label>
							<input type="radio" class="hidden" name="showup" id="shoup2" value="shoup2">
							<span class="check-box"></span>
							<span class='function-name'>Best Quanlity</span>
							<span class="desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry...</span>
						</label>
						<label>
							<input type="radio" class="hidden" name="showup" id="shoup3" value="shoup3">
							<span class="check-box"></span>
							<span class='function-name'>Fastest Delivery</span>
							<span class="desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry...</span>
						</label>
						<label>
							<input type="radio" class="hidden" name="showup" id="shoup4" value="shoup4">
							<span class="check-box"></span>
							<span class='function-name'>Customer Care</span>
							<span class="desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry...</span>
						</label>
					</div>
				</div>
			</div>
		</div>

		<div class="our-team-info">
			<h4 class="title-box">Our teams</h4>
			<div class="our-staff">
				<div 
					class="slide-carousel owl-carousel style-nav-1 equal-container" 
					data-items="5" 
					data-loop="false" 
					data-nav="true" 
					data-dots="false"
					data-margin="30"
					data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"3"},"1200":{"items":"4"}}' >

					<div class="team-member equal-elem">
						<div class="media">
							<a href="#" title="LEONA">
								<figure><img src="assets/images/member-leona.jpg" alt="LEONA"></figure>
							</a>
						</div>
						<div class="info">
							<b class="name">leona</b>
							<span class="title">Director</span>
							<p class="desc">Contrary to popular belief, Lorem Ipsum is not simply random text...</p>
						</div>
					</div>

					<div class="team-member equal-elem">
						<div class="media">
							<a href="#" title="LUCIA">
								<figure><img src="assets/images/member-lucia.jpg" alt="LUCIA"></figure>
							</a>
						</div>
						<div class="info">
							<b class="name">LUCIA</b>
							<span class="title">Manager</span>
							<p class="desc">Contrary to popular belief, Lorem Ipsum is not simply random text...</p>
						</div>
					</div>

					<div class="team-member equal-elem">
						<div class="media">
							<a href="#" title="NANA">
								<figure><img src="assets/images/member-nana.jpg" alt="NANA"></figure>
							</a>
						</div>
						<div class="info">
							<b class="name">NANA</b>
							<span class="title">Marketer</span>
							<p class="desc">Contrary to popular belief, Lorem Ipsum is not simply random text...</p>
						</div>
					</div>

					<div class="team-member equal-elem">
						<div class="media">
							<a href="#" title="BRAUM">
								<figure><img src="assets/images/member-braum.jpg" alt="BRAUM"></figure>
							</a>
						</div>
						<div class="info">
							<b class="name">BRAUM</b>
							<span class="title">Member</span>
							<p class="desc">Contrary to popular belief, Lorem Ipsum is not simply random text...</p>
						</div>
					</div>

					<div class="team-member equal-elem">
						<div class="media">
							<a href="#" title="LUCIA">
								<figure><img src="assets/images/member-lucia.jpg" alt="LUCIA"></figure>
							</a>
						</div>
						<div class="info">
							<b class="name">LUCIA</b>
							<span class="title">Manager</span>
							<p class="desc">Contrary to popular belief, Lorem Ipsum is not simply random text...</p>
						</div>
					</div>

					<div class="team-member equal-elem">
						<div class="media">
							<a href="#" title="NANA">
								<figure><img src="assets/images/member-nana.jpg" alt="NANA"></figure>
							</a>
						</div>
						<div class="info">
							<b class="name">NANA</b>
							<span class="title">Marketer</span>
							<p class="desc">Contrary to popular belief, Lorem Ipsum is not simply random text...</p>
						</div>
					</div>
				</div><!--end Carousel -->
			</div>
		</div>
	<!-- </div> -->
</div><!--end container-->
</main>
<!--main area-->
<!-- END CONTENT -->

<!--FOOTER-->
<footer id="footer">
		<div class="wrap-footer-content footer-style-1">
			<div class="wrap-function-info">
				<div class="container">
					<ul>
						<li class="fc-info-item">
							<i class="fa fa-truck" aria-hidden="true"></i>
							<div class="wrap-left-info">
								<h4 class="fc-name">Free Shipping</h4>
								<p class="fc-desc">Free On Oder Over $99</p>
							</div>

						</li>
						<li class="fc-info-item">
							<i class="fa fa-recycle" aria-hidden="true"></i>
							<div class="wrap-left-info">
								<h4 class="fc-name">Guarantee</h4>
								<p class="fc-desc">30 Days Money Back</p>
							</div>

						</li>
						<li class="fc-info-item">
							<i class="fa fa-credit-card-alt" aria-hidden="true"></i>
							<div class="wrap-left-info">
								<h4 class="fc-name">Safe Payment</h4>
								<p class="fc-desc">Safe your online payment</p>
							</div>

						</li>
						<li class="fc-info-item">
							<i class="fa fa-life-ring" aria-hidden="true"></i>
							<div class="wrap-left-info">
								<h4 class="fc-name">Online Suport</h4>
								<p class="fc-desc">We Have Support 24/7</p>
							</div>

						</li>
					</ul>
				</div>
			</div>
			<!--End function info-->
			<div class="main-footer-content">
				<div class="container">
					<div class="row">
						<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
							<div class="wrap-footer-item">
								<h3 class="item-header">Contact Details</h3>
								<div class="item-content">
									<div class="wrap-contact-detail">
										<ul>
											<li>
												<i class="fa fa-map-marker" aria-hidden="true"></i>
												<p class="contact-txt">Paniqui, Tarlac</p>
											</li>
											<li>
												<i class="fa fa-phone" aria-hidden="true"></i>
												<p class="contact-txt">(+63) 945 678 986</p>
											</li>
											<li>
												<i class="fa fa-envelope" aria-hidden="true"></i>
												<p class="contact-txt">Contact@Maxwell.com</p>
											</li>											
										</ul>
									</div>
								</div>
							</div>
						</div>

						<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">

							<div class="wrap-footer-item">
								<h3 class="item-header">Hot Line</h3>
								<div class="item-content">
									<div class="wrap-hotline-footer">
										<span class="desc">Call Us toll Free</span>
										<b class="phone-number">(+63) 945 678 986</b>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
							<div class="wrap-footer-item">
								<h3 class="item-header">We Using Safe Payments:</h3>
								<div class="item-content">
									<div class="wrap-list-item wrap-gallery">
										<img src="assets/images/payment.png" style="max-width: 260px;">
									</div>
								</div>
							</div>
						</div>

						<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
							<div class="wrap-footer-item">
								<h3 class="item-header">Social network</h3>
								<div class="item-content">
									<div class="wrap-list-item social-network">
										<ul>
											<li><a href="#" class="link-to-item" title="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
											<li><a href="#" class="link-to-item" title="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
											<li><a href="#" class="link-to-item" title="pinterest"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
											<li><a href="#" class="link-to-item" title="instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
											<li><a href="#" class="link-to-item" title="vimeo"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>

						<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
							<div class="wrap-footer-item">
								<h3 class="item-header">Dowload App</h3>
								<div class="item-content">
									<div class="wrap-list-item apps-list">
										<ul>
											<li><a href="#" class="link-to-item" title="our application on apple store"><figure><img src="assets/images/brands/apple-store.png" alt="apple store" width="128" height="36"></figure></a></li>
											<li><a href="#" class="link-to-item" title="our application on google play store"><figure><img src="assets/images/brands/google-play-store.png" alt="google play store" width="128" height="36"></figure></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
			<div class="container">
				<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="wrap-back-link">
					<div class="container">
						<div class="back-link-box">
							<h3 class="backlink-title"> </h3>
							<div class="back-link-row">
								<ul class="list-back-link" >
								</ul>

								<ul class="list-back-link" >
								</ul>

								<ul class="list-back-link" >
								</ul>

							</div>
						</div>
					</div>
				</div>

				<div class="coppy-right-box">
				<div class="container">
					<div class="coppy-right-item item-left">
						<p class="coppy-right-text">Copyright © 2021 Maxwell. All rights reserved</p>
					</div>
					<div class="coppy-right-item item-right">
						<div class="wrap-nav horizontal-nav">
							<ul>
								<li class="menu-item"><a href="about-us.php" class="link-term">About us</a></li>								
								<li class="menu-item"><a href="privacy-policy.php" class="link-term">Privacy Policy</a></li>
								<li class="menu-item"><a href="terms-condition.php" class="link-term">Terms & Conditions</a></li>
								<li class="menu-item"><a href="return-policy.php" class="link-term">Return Policy</a></li>								
							</ul>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</footer>
	
	<script src="assets/js/jquery-1.12.4.minb8ff.js?ver=1.12.4"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/chosen.jquery.min.js"></script>
	<script src="assets/js/owl.carousel.min.js"></script>
	<script src="assets/js/jquery.countdown.min.js"></script>
	<script src="assets/js/jquery.sticky.js"></script>
	<script src="assets/js/functions.js"></script>
	<!--footer area-->
</body>
</html>
