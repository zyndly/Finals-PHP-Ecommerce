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
<?php include "./template/footer.php"; ?>