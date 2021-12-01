<?php
require "config/constants.php";
session_start();
if(isset($_SESSION["uid"])){
	header("location:profile.php");
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Contact Us</title>
		<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<script src="js/jquery2.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="main.js"></script>
		<link rel="stylesheet" type="text/css" href="style.css">

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
		<link rel="stylesheet" type="text/css" href="assets/css/policy.css">

		<style></style>
	</head>
<body>
<div class="wait overlay">
	<div class="loader"></div>
</div>
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">	
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse" aria-expanded="false">
					<span class="sr-only">navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="index.php" class="navbar-brand">MAXWELL</a>
			</div>
		<div class="collapse navbar-collapse" id="collapse">
			<form class="navbar-form navbar-left">
		        <div class="form-group">
		          <input type="text" class="form-control" placeholder="Search" id="search">
		        </div>
		        <button type="submit" class="btn btn-primary" id="search_btn"><span class="glyphicon glyphicon-search"></span></button>
		     </form>
		</div>
	</div>
</div>	
<!--MID NAVBAR-->
		<div class="mid-section main-info-area">
		<div id="spacing">
			<P><br></P>
			</div>
		<div id="header" class="header header-style-1">
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
				</div>
			<div class="wrap-logo-top left-section">
				<a href="index.php" class="link-to-home"><img src="assets/images/logo-top-1.png" alt="mercado"></a>	
			</div>
		</div>
<!--END OF NAV BAR-->
<!--START CONTENT-->
<!--main area-->
<main id="main" class="main-site left-sidebar">

<div class="container">

    <div class="wrap-breadcrumb">
        <ul>
            <li class="item-link"><a href="#" class="link">home</a></li>
            <li class="item-link"><span>Contact us</span></li>
        </ul>
    </div>
    <div class="row">
        <div class=" main-content-area">
            <div class="wrap-contacts ">
                <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                    <div class="contact-box contact-form">
                        <h2 class="box-title">Leave a Message</h2>
                        <form action="#" method="get" name="frm-contact">

                            <label for="name">Name<span>*</span></label>
                            <input type="text" value="" id="name" name="name" >

                            <label for="email">Email<span>*</span></label>
                            <input type="text" value="" id="email" name="email" >

                            <label for="phone">Number Phone</label>
                            <input type="text" value="" id="phone" name="phone" >

                            <label for="comment">Comment</label>
                            <textarea name="comment" id="comment"></textarea>

                            <input type="submit" name="ok" value="Submit" >
                            
                        </form>
                    </div>
                </div>
                <!
                
                
                
                --Google Map
            
            

            --> 
                <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                    <div class="contact-box contact-info">
                        <div class="wrap-map">
                            <div class="mercado-google-maps"
								<div class="mapouter">
									<div class="gmap_canvas">
										<iframe width="512" height="263" id="gmap_canvas" src="https://maps.google.com/maps?q=Interworld%20Colleges%20Foundation%20-%20Paniqui,%20Burgos%20St.,%20Paniqui,%20Tarlac%20Paniqui%20Tarlac&t=k&z=17&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
										<a href="https://123movies-to.org">123movies</a
										<br>
										<style>.mapouter{position:relative;text-align:right;height:263px;width:512px;}</style>
										<a href="https://www.embedgooglemap.net"></a>
										<style>.gmap_canvas {overflow:hidden;background:none!important;height:263px;width:512px;}</style>
									</div>
								</div>
                            </div>
                        </div>
                        <h2 class="box-title">Contact Detail</h2>
                        <div class="wrap-icon-box">

                            <div class="icon-box-item">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                <div class="right-info">
                                    <b>Email</b>
                                    <p>Support@Maxwell.com</p>
                                </div>
                            </div>

                            <div class="icon-box-item">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                <div class="right-info">
                                    <b>Phone</b>
                                    <p>+63936-431-3457</p>
                                </div>
                            </div>

                            <div class="icon-box-item">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                <div class="right-info">
                                    <b>Mail Office</b>
                                    <p>Maxwell Building<br />Burgos St, Paniqui, Tarlac</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div><!--end main products area-->

    </div><!--end row-->

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
								<p class="fc-desc">Free On Order 5000 Pesos Above</p>
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
								<h3 class="item-header">Download App</h3>
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