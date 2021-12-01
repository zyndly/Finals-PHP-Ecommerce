<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Maxwell Shop</title>
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
		<link rel="stylesheet" type="text/css "href="assets/css/policy.css">
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
<main id="main" class="main-site">

		<div class="container">

			<div class="wrap-breadcrumb">
				<ul>
					<li class="item-link"><a href="index.php" class="link">home</a></li>
					<li class="item-link"><span>Privacy Policy</span></li>
				</ul>
			</div>
		</div>
		
		<div class="container pb-60">
			<div class="row">
				<div class="col-md-12">
					<div class= "policy">
						<p id="title">Privacy Policy</p>
						<p id="sub-title">Maxwell Privacy Policy</p>

						<h5>1. INTRODUCTION</h5>

						<p>1.1 Welcome to the Shopee platform run by Shopee Southeast Asia Limited and its affiliates (individually and collectively, "Shopee", "we", "us" or "our"). Shopee takes its responsibilities under applicable privacy laws and regulations ("Privacy Laws") seriously and is committed to respecting the privacy rights and concerns of all Users of our Shopee website and mobile application (the "Platform") (we refer to the Platform and the services we provide as described on our Platform collectively as the "Services"). Users refers to a user who registers for an account with us for use of the Services, including both buyers and sellers (individually and collectively, “Users”, “you” or “your”). We recognize the importance of the personal data you have entrusted to us and believe that it is our responsibility to properly manage, protect and process your personal data. This Privacy Policy (“Privacy Policy” or “Policy”) is designed to assist you in understanding how we collect, use, disclose and/or process the personal data you have provided to us and/or we possess about you, whether now or in the future, as well as to assist you in making an informed decision before providing us with any of your personal data. </p>
						<p>1.2 "Personal Data" or "personal data" means data, whether true or not, about an individual who can be identified from that data, or from that data and other information to which an organisation has or is likely to have access. Common examples of personal data could include name, identification number and contact information.</p>
						<p>1.3 By using the Services, registering for an account with us, visiting our Platform, or accessing the Services, you acknowledge and agree that you accept the practices, requirements, and/or policies outlined in this Privacy Policy, and you hereby consent to us collecting, using, disclosing and/or processing your personal data as described herein. IF YOU DO NOT CONSENT TO THE PROCESSING OF YOUR PERSONAL DATA AS DESCRIBED IN THIS PRIVACY POLICY, PLEASE DO NOT USE OUR SERVICES OR ACCESS OUR PLATFORM. If we change our Privacy Policy, we will notify you including by posting those changes or the amended Privacy Policy on our Platform. We reserve the right to amend this Privacy Policy at any time. To the fullest extent permissible under applicable law, your continued use of the Services or Platform, including placing of any orders, shall constitute your acknowledgment and acceptance of the changes made to this Privacy Policy.</p>
						<p>1.4 This Policy applies in conjunction with other notices, contractual clauses, consent clauses that apply in relation to the collection, storage, use, disclosure and/or processing of your personal data by us and is not intended to override those notices or clauses unless we state expressly otherwise. </p>
						<p>1.5 This Policy applies to both buyers and sellers who use the Services except where expressly stated otherwise.</p>
						<h5>2. WHEN WILL MAXWELL COLLECT PERSONAL DATA?</h5>
						<p>2.1 We will/may collect personal data about you:</p>
						<ul>
							<li>when you register and/or use our Services or Platform, or open an account with us;</li>
							<li>when you submit any form, including, but not limited to, application forms or other forms relating to any of our products and services, whether online or by way of a physical form;</li>
							<li>when you enter into any agreement or provide other documentation or information in respect of your interactions with us, or when you use our products and services;</li>
							<li>when you interact with us, such as via telephone calls (which may be recorded), letters, fax, face-to-face meetings, social media platforms and emails, including when you interact with our customer service agents;</li>
							<li>when you use our electronic services, or interact with us via our application or use services on our Platform. This includes, without limitation, through cookies which we may deploy when you interact with our application or website;</li>
							<li>when you use our electronic services, or interact with us via our application or use services on our Platform. This includes, without limitation, through cookies which we may deploy when you interact with our application or website;</li>
							<li>when you link your Shopee account with your social media or other external account or use other social media features, in accordance with the provider’s policies;</li>
							<li>when you carry out transactions through our Services;</li>
							<li>when you provide us with feedback or complaints;</li>
							<li>when you register for a contest; or</li>
							<li>when you submit your personal data to us for any reason</li>
						</ul>
						<p>The above does not purport to be exhaustive and sets out some common instances of when personal data about you may be collected.</p>
						<h5>3. WHAT PERSONAL DATA WILL SHOPEE COLLECT?</h5>
						<p>3.1 The personal data that Shopee may collect includes but is not limited to:</p>
						<ul>
							<li>name;</li>
							<li>email address;</li>
							<li>date of birth;/li>
							<li>date of birth;</li>
							<li>bank account and payment information;</li>
							<li>telephone number;</li>
							<li>telephone number;</li>
							<li>information sent by or associated with the device(s) used to access our Services or Platform;</li>
							<li>information about your network and the people and accounts you interact with;</li>
							<li>information about your network and the people and accounts you interact with;</li>
							<li>government issued identification or other information required for our due diligence, know your customer, identity verification, or fraud prevention purposes;</li>
							<li>marketing and communications data, such as your preferences in receiving marketing from us and third parties, your communication preferences and history of communications with us, our service providers, and other third parties;</li>
							<li>usage and transaction data, including details about your searches, orders, the advertising and content you interact with on the Platform, and other products and services related to you;</li>
							<li>location data;</li>
							<li>location data;</li>
							<li>aggregate data on content the User engages with.</li>
						</ul>
						<p>3.2 You agree not to submit any information to us which is inaccurate or misleading, and you agree to inform us of any inaccuracies or changes to such information. We reserve the right at our sole discretion to require further documentation to verify the information provided by you.</p>
						<p>3.3 If you sign up to be a user of our Platform using your social media account (“Social Media Account”), link your Shopee account to your Social Media Account or use any Shopee social media features, we may access information about you which you have voluntarily provided to your Social Media Account provider in accordance with such provider's policies, and we will manage and use any such personal data in accordance with this Policy at all times.</p>
						<p>3.4 If you do not want us to collect the aforementioned information/personal data, you may opt out at any time by notifying our Data Protection Officer in writing. Further information on opting out can be found in the section below entitled "How can you withdraw consent, remove, request access to or modify information you have provided to us?"  Note, however, that opting out or withdrawing your consent for us to collect, use or process your personal data may affect your use of the Services and the Platform.  For example, opting out of the collection of location information will cause its location-based features to be disabled.</p>
						<h5>4. COLLECTION OF OTHER DATA</h5>
						<p>4.1 As with most websites and mobile applications, your device sends information which may include data about you that gets logged by a web server when you browse our Platform. This typically includes without limitation your device’s Internet Protocol (IP) address, computer/mobile device operating system and browser type, type of mobile device, the characteristics of the mobile device, the unique device identifier (UDID) or mobile equipment identifier (MEID) for your mobile device, the address of a referring web site (if any), the pages you visit on our website and mobile applications and the times of visit, and sometimes a "cookie" (which can be disabled using your browser preferences) to help the site remember your last visit. If you are logged in, this information is associated with your personal account. The information is also included in anonymous statistics to allow us to understand how visitors use our site.</p>
						<p>4.2 Our mobile applications may collect precise information about the location of your mobile device using technologies such as GPS, Wi-Fi, etc. We collect, use, disclose and/or process this information for one or more Purposes including, without limitation, location-based services that you request or to deliver relevant content to you based on your location or to allow you to share your location to other Users as part of the services under our mobile applications. For most mobile devices, you are able to withdraw your permission for us to acquire this information on your location through your device settings. If you have questions about how to disable your mobile device's location services, please contact your mobile device service provider or the device manufacturer.</p>
						<p>4.3 As when you view pages on our website or mobile application, when you watch content and advertising and access other software on our Platform or through the Services, most of the same information is sent to us (including, without limitation, IP Address, operating system, etc.); but, instead of page views, your device sends us information on the content, advertisement viewed and/or software installed by the Services and the Platform and time.</p>
						<h5>5. COOKIES</h5>
						<p>5.1 We or our authorized service providers and advertising partners may from time to time use "cookies" or other features to allow us or third parties to collect or share information in connection with your use of our Services or Platform. These features help us improve our Platform and the Services we offer, help us offer new services and features, and/or enable us and our advertising partners serve more relevant content to you, including through remarketing. “Cookies” are identifiers that are stored on your computer or mobile device that record data about computer or device, how and when the Services or Platform are used or visited, by how many people and other activity within our Platform. We may link cookie information to personal data. Cookies also link to information regarding what items you have selected for purchase and web pages you have viewed. This information is used to keep track of your shopping cart, to deliver content specific to your interests, to enable our third party advertising partners to serve advertisements on sites across the internet, and to conduct data analysis and to monitor usage of the Services.</p>
						<p>5.2 You may refuse the use of cookies by selecting the appropriate settings on your browser or device. However, please note that if you do this you may not be able to use the full functionality of our Platform or the Services.</p>
						<h5>6. HOW DO WE USE THE INFORMATION YOU PROVIDE US?</h5>
						<p>6.1 We may collect, use, disclose and/or process your personal data for one or more of the following purposes:</p>
						<ul>
							<li>to consider and/or process your application/transaction with us or your transactions or communications with third parties via the Services;</li>
							<li>to manage, operate, provide and/or administer your use of and/or access to our Services and our Platform (including, without limitation, remembering your preference), as well as your relationship and user account with us;</li>
							<li>to respond to, process, deal with or complete a transaction and/or to fulfil your requests for certain products and services and notify you of service issues and unusual account actions;</li>
							<li>to enforce our Terms of Service or any applicable end user license agreements;</li>
							<li>to protect personal safety and the rights, property or safety of others;</li>
							<li>for identification, verification, due diligence, or know your customer purposes;</li>
							<li>to evaluate and make decisions relating to your credit and risk profile and eligibility for credit products;</li>
							<li>to maintain and administer any software updates and/or other updates and support that may be required from time to time to ensure the smooth running of our Services;</li>
							<li>to maintain and administer any software updates and/or other updates and support that may be required from time to time to ensure the smooth running of our Services;</li>
							<li>to contact you or communicate with you via voice call, text message and/or fax message, email and/or postal mail or otherwise for the purposes of administering and/or managing your relationship with us or your use of our Services, such as but not limited to communicating administrative information to you relating to our Services. You acknowledge and agree that such communication by us could be by way of the mailing of correspondence, documents or notices to you, which could involve disclosure of certain personal data about you to bring about delivery of the same as well as on the external cover of envelopes/mail packages;</li>
							<li>to allow other users to interact, connect with you or see some of your activities on the Platform, including to inform you when another User has sent you a private message, posted a comment for you on the Platform or connected with you using the social features on the Platform;</li>
							<li>to conduct research, analysis and development activities (including, but not limited to, data analytics, surveys, product and service development and/or profiling), to analyse how you use our Services, to recommend products and/or services relevant to your interests, to improve our Services or products and/or to enhance your customer experience;</li>
							<li>to allow for audits and surveys to, among other things, validate the size and composition of our target audience, and understand their experience with Shopee’s Services;</li>
							<li>to allow for audits and surveys to, among other things, validate the size and composition of our target audience, and understand their experience with Shopee’s Services;</li>
							<li>to respond to legal processes or to comply with or as required by any applicable law, governmental or regulatory requirements of any relevant jurisdiction or where we have a good faith belief that such disclosure is necessary, including, without limitation, meeting the requirements to make disclosure under the requirements of any law binding on Shopee or on its related corporations or affiliates (including, where applicable, the display of your name, contact details and company details);</li>
							<li>to produce statistics and research for internal and statutory reporting and/or record-keeping requirements;</li>
							<li>to carry out due diligence or other screening activities (including, without limitation, background checks) in accordance with legal or regulatory obligations or our risk management procedures that may be required by law or that may have been put in place by us;</li>
							<li>to audit our Services or Shopee's business;</li>
							<li>to prevent or investigate any actual or suspected violations of our Terms of Service, fraud, unlawful activity, omission or misconduct, whether relating to your use of our Services or any other matter arising from your relationship with us;</li>
							<li>to respond to any threatened or actual claims asserted against Shopee or other claim that any Content violates the rights of third parties;</li>
							<li>to respond to any threatened or actual claims asserted against Shopee or other claim that any Content violates the rights of third parties;</li>
							<li>to deal with and/or facilitate a business asset transaction or a potential business asset transaction, where such transaction involves Shopee as a participant or involves only a related corporation or affiliate of Shopee as a participant or involves Shopee and/or any one or more of Shopee's related corporations or affiliates as participant(s), and there may be other third party organisations who are participants in such transaction. A “business asset transaction” refers to the purchase, sale, lease, merger, amalgamation or any other acquisition, disposal or financing of an organisation or a portion of an organisation or of any of the business or assets of an organisation; and/or</li>
							<li>any other purposes which we notify you of at the time of obtaining your consent.</li>
						</ul>
						<p>(collectively, the “Purposes”).</p>
						<p>6.2 You acknowledge, consent and agree that Shopee may access, preserve and disclose your Account information and Content if required to do so by law or pursuant to an order of a court or by any governmental or regulatory authority having jurisdiction over Shopee or in a good faith belief that such access preservation or disclosure is reasonably necessary to: (a) comply with legal process; (b) comply with a request from any governmental or regulatory authority having jurisdiction over Shopee; (c) enforce the Shopee Terms of Service or this Privacy Policy; (d) respond to any threatened or actual claims asserted against Shopee or other claim that any Content violates the rights of third parties; (e) respond to your requests for customer service; or (f) protect the rights, property or personal safety of Shopee, its users and/or the public.</p>
						<p>6.3 As the purposes for which we will/may collect, use, disclose or process your personal data depend on the circumstances at hand, such purpose may not appear above. However, we will notify you of such other purpose at the time of obtaining your consent, unless processing of the applicable data without your consent is permitted by the Privacy Laws.</p>
						<h5>7. HOW DOES SHOPEE PROTECT AND RETAIN CUSTOMER INFORMATION?</h5>
						<p>7.1 We implement a variety of security measures and strive to ensure the security of your personal data on our systems. User personal data is contained behind secured networks and is only accessible by a limited number of employees who have special access rights to such systems.  However, there can inevitably be no guarantee of absolute security.</p>
						<p>7.2 We will retain personal data in accordance with the Privacy Laws and/or other applicable laws. That is, we will destroy or anonymize your personal data when we have reasonably determined that (i) the purpose for which that personal data was collected is no longer being served by the retention of such personal data; (ii) retention is no longer necessary for any legal or business purposes; and (iii) no other legitimate interests warrant further retention of such personal data. If you cease using the Platform, or your permission to use the Platform and/or the Services is terminated or withdrawn, we may continue storing, using and/or disclosing your personal data in accordance with this Privacy Policy and our obligations under the Privacy Laws. Subject to applicable law, we may securely dispose of your personal data without prior notice to you.</p>
						<h5>8. DOES SHOPEE DISCLOSE THE INFORMATION IT COLLECTS FROM ITS VISITORS TO OUTSIDE PARTIES?</h5>
						<p>8.1 In conducting our business, we will/may need to use, process, disclose and/or transfer your personal data to our third party service providers, agents and/or our affiliates or related corporations, and/or other third parties, which may be located in Singapore or outside of Singapore, for one or more of the above-stated Purposes. Such third party service providers, agents and/or affiliates or related corporations and/or other third parties would be processing your personal data either on our behalf or otherwise, for one or more of the above-stated Purposes. We endeavour to ensure that the third parties and our affiliates keep your personal data secure from unauthorised access, collection, use, disclosure, processing or similar risks and retain your personal data only for as long as your personal data is needed for the above-mentioned Purposes. Such third parties include, without limitation:</p>
						<ul>
							<li>our subsidiaries, affiliates and related corporations;</li>
							<li>our subsidiaries, affiliates and related corporations;</li>
							<li>other users of our Platform for one or more of the above-stated Purposes;</li>
							<li>contractors, agents, service providers and other third parties we use to support our business. These include but are not limited to those parties which provide administrative or other services to us such as mailing houses, logistics service providers, financial services providers, advertising and marketing partners, telecommunication companies, information technology companies, and data centres;</li>
							<li>governmental or regulatory authorities having jurisdiction over Shopee or as otherwise permitted under Section 6.2;</li>
							<li>a buyer or other successor in the event of a merger, divestiture, restructuring, reorganization, dissolution or other sale or transfer of some or all of Shopee’s assets, whether as a going concern or as part of bankruptcy, liquidation or similar proceeding, in which personal data held by Shopee about our Service Users is among the assets transferred; or to a counterparty in a business asset transaction that Shopee or any of its affiliates or related corporations is involved in; and</li>
							<li>third parties to whom disclosure by us is for one or more of the Purposes and such third parties would in turn be collecting and processing your personal data for one or more of the Purposes</li>
						</ul>
						<p>third parties to whom disclosure by us is for one or more of the Purposes and such third parties would in turn be collecting and processing your personal data for one or more of the Purposes</p>
						<p>8.3 For the avoidance of doubt, in the event that Privacy Laws or other applicable laws permit an organisation such as us to collect, use or disclose your personal data without your consent, such permission granted by the laws shall continue to apply. Consistent with the foregoing and subject to applicable law, we may use your personal data for recognized legal grounds including to comply with our legal obligations, to perform our contract with you, to achieve a legitimate interest and our reasons for using it outweigh any prejudice to your data protection rights, or where necessary in connection with a legal claim.</p>
						<p>8.4 Third parties may unlawfully intercept or access personal data transmitted to or contained on the site, technologies may malfunction or not work as anticipated, or someone might access, abuse or misuse information through no fault of ours. We will nevertheless deploy reasonable security arrangements to protect your personal data as required by the Privacy Laws; however there can inevitably be no guarantee of absolute security such as but not limited to when unauthorised disclosure arises from malicious and sophisticated hacking by malcontents through no fault of ours.</p>
						<p>8.5  Shopee allows you to share videos from YouTube in the Shopee Livestream feature (“YouTube Content”).  To facilitate this, Shopee uses YouTube API Services made available by YouTube.  By using sharing YouTube Content, you hereby agree to be bound by the Google Privacy Policy (http://www.google.com/policies/privacy).</p>
						<p>8.6 As set forth in Shopee’s Terms of Service, Users (including any employees, agents, representatives, or any other person acting for such User or on such User’s behalf) in possession of another User’s personal data through the use of the Services (the “Receiving Party”) hereby agree that, they will (i) comply with all applicable Privacy Laws with respect to any such data, including any collection, processing, storage or transfer of such data; (ii) allow Shopee or the User whose personal data the Receiving Party has collected (the “Disclosing Party”) to remove his or her data so collected from the Receiving Party’s database; and (iii) allow Shopee or the Disclosing Party to review what information has been collected about them by the Receiving Party, in each case of (ii) and (iii) above, in compliance with and where required by applicable laws.</p>
						<p>8.7 Notwithstanding anything set forth herein, Sellers (including any employees, agents, representatives, or any other person acting for such User or on such User’s behalf) shall comply with all applicable Privacy Laws and, in respect of any buyer’s personal data received from Shopee, (i) are not permitted to use such buyer’s personal data except as reasonably necessary to respond to buyers’ enquiries and to carry out respond to, process, deal with or complete a transaction without the buyers’ and Shopee’s prior written consent; (ii) should refrain from contacting buyers using such information outside of the Shopee platform; (iii) are not permitted to disclose such buyer’s personal data to any unauthorized third parties without the buyer’s and Shopee’s prior written consent; (iv) shall employ sufficient security measures to protect each Shopee user’s personal data in their possession, retain such data only for as long as necessary for the purposes above and in accordance with the Privacy Laws,  and to delete or return such data to Shopee upon any request from Shopee or as soon as reasonably possible upon completion of the transaction; and (v) to inform Shopee’s Personal Data Protection Officer at dpo.ph@shopee.com in the event of any potential data breach or other loss of such user’s data.</p>
						<h5>9. INFORMATION ON CHILDREN</h5>
						<p>9.1 The Services are not intended for children under the age of 13. We do not knowingly collect or maintain any personal data or non-personally-identifiable information from anyone under the age of 13 nor is any part of our Platform or other Services directed to children under the age of 13.  As a parent or legal guardian, please do not allow such children under your care to submit personal data to Shopee. In the event that personal data of a child under the age of 13 in your care is disclosed to Shopee, you hereby consent to the processing of the child’s personal data and accept and agree to be bound by this Policy on behalf of such child.  We will close any accounts used exclusively by such children and will remove and/or delete any personal data we believe was submitted without parental consent by any child under the age of 13.</p>
						<h5>10. INFORMATION COLLECTED BY THIRD PARTIES</h5>
						<p>10.1 Our Platform uses Google Analytics, a web analytics service provided by Google, Inc. ("Google"). Google Analytics uses cookies, which are text files placed on your device, to help the Platform analyse how Users use the Platform. The information generated by the cookie about your use of the Platform (including your IP address) will be transmitted to and stored by Google on servers in the United States. Google will use this information for the purpose of evaluating your use of the Platform, compiling reports on website activity for website operators and providing other services relating to website activity and Internet usage. Google may also transfer this information to third parties where required to do so by law, or where such third parties process the information on Google's behalf. Google will not associate your IP address with any other data held by Google.</p>
						<p>10.2 We, and third parties, may from time to time make software applications downloads available for your use via the Platform or through the Services. These applications may separately access, and allow a third party to view, your identifiable information, such as your name, your user ID, your device’s IP Address or other information such as any cookies that you may previously have installed or that were installed for you by a third party software application or website. Additionally, these applications may ask you to provide additional information directly to third parties. Third party products or services provided through these applications are not owned or controlled by Shopee. You are encouraged to read the terms and other policies published by such third parties on their websites or otherwise.</p>
						<h5>11. DISCLAIMER REGARDING SECURITY AND THIRD PARTY SITES</h5>
						<p>11.1 WE DO NOT GUARANTEE THE SECURITY OF PERSONAL DATA AND/OR OTHER INFORMATION THAT YOU PROVIDE ON THIRD PARTY SITES. We do implement a variety of security measures to maintain the safety of your personal data that is in our possession or under our control. Your personal data is contained behind secured networks and is only accessible by a limited number of persons who have special access rights to such systems, and are required to keep the personal data confidential. When you place orders or access your personal data, we offer the use of a secure server. All personal data or sensitive information you supply is encrypted into our databases to be only accessed as stated above.</p>
						<p>11.2 In an attempt to provide you with increased value, we may choose various third party websites to link to, and frame within, the Platform. We may also participate in co-branding and other relationships to offer e-commerce and other services and features to our visitors. These linked sites have separate and independent privacy policies as well as security arrangements. Even if the third party is affiliated with us, we have no control over these linked sites, each of which has separate privacy and data collection practices independent of us. Data collected by our co-brand partners or third party web sites (even if offered on or through our Platform) may not be received by us.</p>
						<p>11.3 We therefore have no responsibility or liability for the content, security arrangements (or lack thereof) and activities of these linked sites. These linked sites are only for your convenience and you therefore access them at your own risk. Nonetheless, we seek to protect the integrity of our Platform and the links placed upon each of them and therefore welcome any feedback about these linked sites (including, without limitation, if a specific link does not work).</p>
						<h5>12. WILL SHOPEE TRANSFER YOUR INFORMATION OVERSEAS?</h5>
						<p>12. WILL SHOPEE TRANSFER YOUR INFORMATION OVERSEAS?</p>
						<h5>13. HOW CAN YOU WITHDRAW CONSENT, REQUEST ACCESS TO OR CORRECT INFORMATION YOU HAVE PROVIDED TO US?</h5>
						<p>13.1 Withdrawing Consent</p>
						<p>13.1.1 You may withdraw your consent for the collection, use and/or disclosure and/or request deletion of your personal data in our possession or under our control by sending an email to our Personal Data Protection Officer at dpo.ph@shopee.com, and we will process such requests in accordance with this Privacy Policy and our obligations under the Privacy Laws and other applicable law.  However, your withdrawal of consent may mean that we will not be able to continue providing the Services to you and we may need to terminate your existing relationship and/or the contract you have with us.</p>
						<p>13.1.2 Where you share YouTube Content, in addition to withdrawing your consent by emailing us pursuant to Section 14.1.1, you may also revoke Shopee’s access to your personal data via the Google security settings page at https://security.google.com/settings/security/permissions.</p>
						<p>13.2 Requesting Access to or Correction of Personal Data</p>
						<p>13.2.1 If you have an account with us, you may personally access and/or correct your personal data currently in our possession or control through the Account Settings page on the Platform. If you do not have an account with us, you may request to access and/or correct your personal data currently in our possession or control by submitting a written request to us. We will need enough information from you in order to ascertain your identity as well as the nature of your request so as to be able to deal with your request. Hence, please submit your written request by sending an email to our Personal Data Protection Officer at dpo.ph@shopee.com.</p>
						<p>13.2.2 We may charge you a reasonable fee for the handling and processing of your requests to access your personal data. If we so choose to charge, we will provide you with a written estimate of the fee we will be charging. Please note that we are not required to respond to or deal with your access request unless you have agreed to pay the fee.</p>
						<p>13.2.3 We reserve the right to refuse to correct your personal data in accordance with the provisions as set out in Privacy Laws, where they require and/or entitle an organisation to refuse to correct personal data in stated circumstances.</p>
						<h5>14. QUESTIONS, CONCERNS OR COMPLAINTS? CONTACT US</h5>
						<p>14.1 If you have any questions or concerns about our privacy practices, we welcome you to contact us by e-mail at dpo.ph@shopee.com </p>
						<br>
						<p>Last modified: 2 November 2021</p>
					</div> <!--end policy-->
				</div>
			</div>
		</div><!--end container-->

	</main>
<!--END OF CONTENT-->
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
