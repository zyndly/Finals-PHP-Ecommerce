<?php
require "config/constants.php";
session_start();
if(!isset($_SESSION["uid"])){
	header("location:index.php");
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Profile</title>
		<!--Bootstrap-->
		<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<!--Custom CSS-->
			<link rel="stylesheet" type="text/css" href="style.css">
			<link rel="stylesheet" type="text/css" href="styles.css">
		<!-- Favicon -->
			<link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon" />
		<!-- Font Awesome -->
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
		<!-- Glidejs -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/css/glide.core.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/css/glide.theme.css">
		<!--Scripts-->
		<script src="js/jquery2.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="main.js"></script>
		<style>
			@media screen and (max-width:480px){
				#search{width:80%;}
				#search_btn{width:30%;float:right;margin-top:-32px;margin-right:10px;}
			}
		</style>
	</head>
<!--Navbar-->
<?php include "./template/navbar.php"; ?>
	<!--Content-->

	<div class="hero">
		<div class="left">
			<span>Exclusive Sales</span>
			<h1>UP TO 50% OFF ON SALES</h1>
			<small>Get all exclusive offers for the season</small>
			<a href="#products">View Collection </a>
		</div>
		<div class="right">
			<img src="./images/hero.png" alt="" />
		</div>
	</div>

<!-- Promotion -->

<section class="section promotion">
    <div class="title">
		<h2>Shop Collections</h2>
		<span>Select from the premium product and save plenty money</span>
    </div>

    <div class="promotion-layout container">
		<div class="promotion-item">
			<img src="./images/promo1.jpg" alt="" />
			<div class="promotion-content">
				<h3>FOR MEN</h3>
				<a href="#products">SHOP NOW</a>
			</div>
		</div>

		<div class="promotion-item">
			<img src="./images/promo2.jpg" alt="" />
			<div class="promotion-content">
				<h3>CASUAL SHOES</h3>
				<a href="#products">SHOP NOW</a>
			</div>
		</div>

		<div class="promotion-item">
			<img src="./images/promo3.jpg" alt="" />
			<div class="promotion-content">
				<h3>FOR WOMEN</h3>
				<a href="#products">SHOP NOW</a>
			</div>
		</div>

		<div class="promotion-item">
			<img src="./images/promo4.jpg" alt="" />
			<div class="promotion-content">
				<h3>LEATHER BELTS</h3>
				<a href="#products">SHOP NOW</a>
			</div>
		</div>

		<div class="promotion-item">
			<img src="./images/promo5.jpg" alt="" />
			<div class="promotion-content">
				<h3>DESIGNER BAGS</h3>
				<a href="#products">SHOP NOW</a>
			</div>
		</div>
    </div>
</section>
<!-- Content -->
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-2">
				<div id="get_category">
				</div>
				<!--<div class="nav nav-pills nav-stacked">
					<li class="active"><a href="#"><h4>Categories</h4></a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
				</div> -->
				<div id="get_brand">
				</div>
				<!--<div class="nav nav-pills nav-stacked">
					<li class="active"><a href="#"><h4>Brand</h4></a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
				</div> -->
			</div>
			<div class="col-md-8">	
				<div class="row">
					<div class="col-md-12 col-xs-12" id="product_msg">
					</div>
				</div>
				<div class="panel panel-info" id="scroll">
					<div class="panel-heading">Products</div>
					<div class="panel-body">
						<div id="get_product">
							<!--Here we get product jquery Ajax Request-->
						</div>
						<!--<div class="col-md-4">
							<div class="panel panel-info">
								<div class="panel-heading">Samsung Galaxy</div>
								<div class="panel-body">
									<img src="product_images/images.JPG"/>
								</div>
								<div class="panel-heading">$.500.00
									<button style="float:right;" class="btn btn-danger btn-xs">AddToCart</button>
								</div>
							</div>
						</div> -->
					</div>
					<div class="panel-footer">&copy; <?php echo date("Y"); ?></div>
				</div>
			</div>
			<div class="col-md-1"></div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<center>
					<ul class="pagination" id="pageno">
						<li><a href="#">1</a></li>
					</ul>
				</center>
			</div>
		</div>
	</div>

<!-- ADVERT -->
<section class="section advert">
		<div class="advert-layout container">
			<div class="item ">
				<img src="./images/promo7.jpg" alt="">
				<div class="content left">
				<span>Exclusive Sales</span>
				<h3>Spring Collections</h3>
				<a href="">View Collection</a>
				</div>
			</div>
			<div class="item">
				<img src="./images/promo8.jpg" alt="">
				<div class="content  right">
				<span>New Trending</span>
				<h3>Designer Bags</h3>
				<a href="">Shop Now </a>
				</div>
			</div>
		</div>
	</section>

	<!-- BRANDS -->
	<section class="section brands">
		<div class="title">
			<h2>Shop by Brand</h2>
			<span>Select from the premium product brands and save plenty money</span>
		</div>

		<div class="brand-layout container">
			<div class="glide" id="glide1">
				<div class="glide__track" data-glide-el="track">
					<ul class="glide__slides">
						<li class="glide__slide">
						<img src="./images/brand1.png" alt="">
						</li>
						<li class="glide__slide">
						<img src="./images/brand2.png" alt="">
						</li>
						<li class="glide__slide">
						<img src="./images/brand3.png" alt="">
						</li>
						<li class="glide__slide">
						<img src="./images/brand4.png" alt="">
						</li>
						<li class="glide__slide">
						<img src="./images/brand5.png" alt="">
						</li>
						<li class="glide__slide">
						<img src="./images/brand6.png" alt="">
						</li>
						<li class="glide__slide">
						<img src="./images/brand7.png" alt="">
						</li>
						
					</ul>
				</div>
			</div>
		</div>
	</section>	
<!--Footer-->

<?php include "./template/footer.php"; ?>
















































