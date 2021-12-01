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
				<a href="./index.php" class="navbar-brand">MAXWELL</a>
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
					<div class="dropdown-menu" style="width:400px;">
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
								<!--<div class="row">
									<div class="col-md-3">Sl.No</div>
									<div class="col-md-3">Product Image</div>
									<div class="col-md-3">Product Name</div>
									<div class="col-md-3">Price in $.</div>
								</div>-->
								</div>
							</div>
							<div class="panel-footer"></div>
						</div>
					</div>
				</li>
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
										<input type="submit" class="btn btn-warning" value="Login">
										<a href="/.customer_registration.php?register=1" style="color:white; text-decoration:none;">Create Account Now</a>
									</form>
								</div>
								<div class="panel-footer" id="e_msg"></div>
							</div>
						</div>
					</ul>
				</li>
			</ul>
			<br>
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
												<a href="./index.php" class="link-term mercado-item-title"><i class="fa fa-home" aria-hidden="true"></i></a>
											</li>
											<li class="menu-item">
												<a href="./about-us.php" class="link-term mercado-item-title">About Us</a>
											</li>
											<li class="menu-item">
												<a href="./contact-us.php" class="link-term mercado-item-title">Contact Us</a>
											</li>																	
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			<div class="wrap-logo-top left-section" id="logo">
				<a href="./index.php" class="link-to-home"><img id="logo"src="./assets/images/logo-top-2.png" alt="mercado"></a>	
			</div>
		</div>