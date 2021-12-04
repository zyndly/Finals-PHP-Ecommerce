<?php
require "config/constants.php";
session_start();
if(isset($_SESSION["uid"])){
	header("location:profile.php");
}
?>
<!-- Headers and Navbar -->
<?php include_once("./template/top.php"); ?>
<?php include_once("./template/navbar.php"); ?>
<!--END OF NAV BAR-->

<!--START CONTENT-->
<main id="main" class="main-site">
<p><br></p>
<p><br></p>
<p><br></p>
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
							<a href="#" title="ZYNDLY">
								<figure><img src="assets/images/author-avata.jpg" alt="Zyndly"></figure>
							</a>
						</div>
						<div class="info">
							<b class="name">Zyndly</b>
							<span class="title">Director</span>
							<p class="desc">Contrary to popular belief, Lorem Ipsum is not simply random text...</p>
						</div>
					</div>

					<div class="team-member equal-elem">
						<div class="media">
							<a href="#" title="ANTHONY">
								<figure><img src="assets/images/member-anthony.jpg" alt="ANTHONY"></figure>
							</a>
						</div>
						<div class="info">
							<b class="name">Anthony</b>
							<span class="title">Manager</span>
							<p class="desc">Contrary to popular belief, Lorem Ipsum is not simply random text...</p>
						</div>
					</div>

					<div class="team-member equal-elem">
						<div class="media">
							<a href="#" title="JM">
								<figure><img src="assets/images/member-lansangan.jpg" alt="NANA"></figure>
							</a>
						</div>
						<div class="info">
							<b class="name">JM</b>
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
	<script src="assets/js/jquery-1.12.4.minb8ff.js?ver=1.12.4"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/chosen.jquery.min.js"></script>
	<script src="assets/js/owl.carousel.min.js"></script>
	<script src="assets/js/jquery.countdown.min.js"></script>
	<script src="assets/js/jquery.sticky.js"></script>
	<script src="assets/js/functions.js"></script>
	
<?php include "./template/footer.php"; ?>