<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>Electronic Store a Ecommerce Online Shopping Category Bootstrap Responsive Website Template | FAQ's :: w3layouts</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Electronic Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	SmartPhone Compatible web template, free web designs for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
	function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<!-- Custom Theme files -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" /> 
<!-- //Custom Theme files -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- js -->
<script src="js/jquery.min.js"></script> 
<!-- //js -->  
<!-- web fonts --> 
<link href='//fonts.googleapis.com/css?family=Glegoo:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- //web fonts --> 
<!-- for bootstrap working -->
<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
<!-- //for bootstrap working -->
<!-- start-smooth-scrolling -->
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- //end-smooth-scrolling --> 
</head> 
<body> 
	<!-- header modal -->
	<div class="header" id="home1">
		<div class="container">
		<?php session_start(); 
		if($_SESSION['auth']==false){?>
			<div class="w3l_login">
				<a href="sign_in_up.php" ><span class="glyphicon glyphicon-user" aria-hidden="true"><br>Register</span></a>
			</div>
		<?php } else{?>
			<div class="w3l_login">
				<a href="#" data-toggle="modal" data-target="#myModal88"><span class="glyphicon glyphicon-user" aria-hidden="true"><br> Account</span></a>
				Hi, <?php echo $_SESSION['userfname']; ?>
			</div><?php }?>
			<div class="w3l_logo">
				<h1><a href="index.php">Electronic Store<span>Your stores. Your place.</span></a></h1>
			</div>
			<div class="search">
				<input class="search_box" name="search" type="checkbox" id="search_box">
				<label class="icon-search" for="search_box"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></label>
				<div class="search_form">
					<form action="search_integration.php" method="post">
						<input type="text" name="search" placeholder="Search...">
						<input type="submit" value="Send">
					</form>
				</div>
				<div id="display"></div>
			</div>
			<div class="cart cart box_1">
				<form action="#" method="post" class="last">
					<input type="hidden" name="cmd" value="_cart" />
					<input type="hidden" name="display" value="1" />
					<button class="w3view-cart" type="submit" name="submit" value=""><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></button>
				</form>
				<form method="post">
					<input type="submit" name="sign-out" value="sign-out">
				</form>
				<?php if(isset($_POST['sign-out'])){
					$flag=1;
					session_destroy();
					header("Location:sign_in_up.php?flag=$flag");
				} ?>
			</div>
		</div>
	</div><!-- //header -->
	<!-- navigation -->
	<div class="navigation">
		<div class="container">
			<nav class="navbar navbar-default">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header nav_2">
					<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div> 
				<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
					<ul class="nav navbar-nav">
						<li><a href="index.php">Home</a></li>	
						<!-- Mega Menu -->
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Products <b class="caret"></b></a>
							<ul class="dropdown-menu multi-column columns-3">
								<div class="row">
									<div class="col-sm-3">
										<ul class="multi-column-dropdown">
											<h6>Mobiles</h6>
											<li><a href="products.php">Mobile Phones</a></li>
											<li><a href="products.php">Mp3 Players <span>New</span></a></li> 
											<li><a href="products.php">Popular Models</a></li>
											<li><a href="products.php">All Tablets<span>New</span></a></li>
										</ul>
									</div>
									<div class="col-sm-3">
										<ul class="multi-column-dropdown">
											<h6>Accessories</h6>
											<li><a href="products1.php">Laptop</a></li>
											<li><a href="products1.php">Desktop</a></li>
											<li><a href="products1.php">Wearables <span>New</span></a></li>
											<li><a href="products1.php"><i>Summer Store</i></a></li>
										</ul>
									</div>
									<div class="col-sm-2">
										<ul class="multi-column-dropdown">
											<h6>Home</h6>
											<li><a href="products2.php">Tv</a></li>
											<li><a href="products2.php">Camera</a></li>
											<li><a href="products2.php">AC</a></li>
											<li><a href="products2.php">Grinders</a></li>
										</ul>
									</div>
									<div class="col-sm-4">
										<div class="w3ls_products_pos">
											<h4>30%<i>Off/-</i></h4>
											<img src="images/1.jpg" alt=" " class="img-responsive" />
										</div>
									</div>
									<div class="clearfix"></div>
								</div>
							</ul>
						</li>
						<li><a href="about.php">About Us</a></li> 
						<li class="w3pages"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pages <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="icons.php">Web Icons</a></li>
								<li><a href="codes.php">Short Codes</a></li>     
							</ul>
						</li>  
						<li><a href="mail.php">Mail Us</a></li>
					</ul>
				</div>
			</nav>
		</div>
	</div>
	<!-- //navigation -->
	<!-- banner -->
	<div class="banner banner10">
		<div class="container">
			<h2>FAQ's</h2>
		</div>
	</div>
	<!-- //banner -->    
	<!-- breadcrumbs -->
	<div class="breadcrumb_dress">
		<div class="container">
			<ul>
				<li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</a> <i>/</i></li>
				<li>FAQ's</li>
			</ul>
		</div>
	</div>
	<!-- //breadcrumbs --> 
	<!-- faq -->
	<div class="faq">
		<div class="container">	
			<div class="w3l_faq_grids">
				<div class="w3l_faq_grid">
					<h3>1. Excepteur sint occaecat cupidatat non proident ?</h3>
					<p><b>Ans.</b> But I must explain to you how all this mistaken idea of 
						denouncing pleasure and praising pain was born and I will give 
						you a complete account of the system, and expound the actual 
						teachings of the great explorer of the truth, the master-builder 
						of human happiness. No one rejects, dislikes, or avoids pleasure 
						itself, because it is pleasure.</p>
				</div>

				<div class="w3l_faq_grid">
					<h3>2. Quis nostrum exercitationem ullam corporis suscipit ?</h3>
					<p><b>Ans.</b> But I must explain to you how all this mistaken idea of 
						denouncing pleasure and praising pain was born and I will give 
						you a complete account of the system, and expound the actual 
						teachings of the great explorer of the truth, the master-builder 
						of human happiness. No one rejects, dislikes, or avoids pleasure 
						itself, because it is pleasure.</p>
				</div>
				<div class="w3l_faq_grid">
					<h3>3. Nemo enim ipsam voluptatem quia voluptas sit ?</h3>
					<p><b>Ans.</b> But I must explain to you how all this mistaken idea of 
						denouncing pleasure and praising pain was born and I will give 
						you a complete account of the system, and expound the actual 
						teachings of the great explorer of the truth, the master-builder 
						of human happiness. No one rejects, dislikes, or avoids pleasure 
						itself, because it is pleasure.</p>
				</div>
				<div class="w3l_faq_grid">
					<h3>4. Ut enim ad minima veniam, quis nostrum exercitationem ?</h3>
					<p><b>Ans.</b> But I must explain to you how all this mistaken idea of 
						denouncing pleasure and praising pain was born and I will give 
						you a complete account of the system, and expound the actual 
						teachings of the great explorer of the truth, the master-builder 
						of human happiness. No one rejects, dislikes, or avoids pleasure 
						itself, because it is pleasure.</p>
				</div>
				<div class="w3l_faq_grid">
					<h3>5. Quis autem vel eum iure reprehenderit qui ?</h3>
					<p><b>Ans.</b> But I must explain to you how all this mistaken idea of 
						denouncing pleasure and praising pain was born and I will give 
						you a complete account of the system, and expound the actual 
						teachings of the great explorer of the truth, the master-builder 
						of human happiness. No one rejects, dislikes, or avoids pleasure 
						itself, because it is pleasure.</p>
				</div>
				<div class="w3l_faq_grid">
					<h3>6. Sed ut perspiciatis unde omnis iste natus error sit ?</h3>
					<p><b>Ans.</b> But I must explain to you how all this mistaken idea of 
						denouncing pleasure and praising pain was born and I will give 
						you a complete account of the system, and expound the actual 
						teachings of the great explorer of the truth, the master-builder 
						of human happiness. No one rejects, dislikes, or avoids pleasure 
						itself, because it is pleasure.</p>
				</div>
				<div class="w3l_faq_grid">
					<h3>7. Nam libero tempore, cum soluta nobis est ?</h3>
					<p><b>Ans.</b> But I must explain to you how all this mistaken idea of 
						denouncing pleasure and praising pain was born and I will give 
						you a complete account of the system, and expound the actual 
						teachings of the great explorer of the truth, the master-builder 
						of human happiness. No one rejects, dislikes, or avoids pleasure 
						itself, because it is pleasure.</p>
				</div>
				<div class="w3l_faq_grid">
					<h3>8. At vero eos et accusamus et iusto odio dignissimos ?</h3>
					<p><b>Ans.</b> But I must explain to you how all this mistaken idea of 
						denouncing pleasure and praising pain was born and I will give 
						you a complete account of the system, and expound the actual 
						teachings of the great explorer of the truth, the master-builder 
						of human happiness. No one rejects, dislikes, or avoids pleasure 
						itself, because it is pleasure.</p>
				</div>
				<div class="w3l_faq_grid">
					<h3>9. Itaque earum rerum hic tenetur a sapiente delectus ?</h3>
					<p><b>Ans.</b> But I must explain to you how all this mistaken idea of 
						denouncing pleasure and praising pain was born and I will give 
						you a complete account of the system, and expound the actual 
						teachings of the great explorer of the truth, the master-builder 
						of human happiness. No one rejects, dislikes, or avoids pleasure 
						itself, because it is pleasure.</p>
				</div>
				<div class="w3l_faq_grid">
					<h3>10. vel illum qui dolorem eum fugiat quo voluptas nulla ?</h3>
					<p><b>Ans.</b> But I must explain to you how all this mistaken idea of 
						denouncing pleasure and praising pain was born and I will give 
						you a complete account of the system, and expound the actual 
						teachings of the great explorer of the truth, the master-builder 
						of human happiness. No one rejects, dislikes, or avoids pleasure 
						itself, because it is pleasure.</p>
				</div>
				<div class="w3l_faq_grid">
					<h3>11. Ut enim ad minima veniam, quis nostrum exercitationem ?</h3>
					<p><b>Ans.</b> But I must explain to you how all this mistaken idea of 
						denouncing pleasure and praising pain was born and I will give 
						you a complete account of the system, and expound the actual 
						teachings of the great explorer of the truth, the master-builder 
						of human happiness. No one rejects, dislikes, or avoids pleasure 
						itself, because it is pleasure.</p>
				</div>
			</div>
		</div>
	</div>
	<!-- //faq -->
<!-- newsletter -->
	<div class="newsletter">
		<div class="container">
			<div class="col-md-6 w3agile_newsletter_left">
				<h3>Newsletter</h3>
				<p>Excepteur sint occaecat cupidatat non proident, sunt.</p>
			</div>
			<div class="col-md-6 w3agile_newsletter_right">
				<form action="#" method="post">
					<input type="email" name="Email" placeholder="Email" required="">
					<input type="submit" value="" />
				</form>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!-- //newsletter -->
	<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="w3_footer_grids">
				<div class="col-md-3 w3_footer_grid">
					<h3>Contact</h3>
					<p>Duis aute irure dolor in reprehenderit in voluptate velit esse.</p>
					<ul class="address">
						<li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>1234k Avenue, 4th block, <span>New York City.</span></li>
						<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:info@example.com">info@example.com</a></li>
						<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>+1234 567 567</li>
					</ul>
				</div>
				<div class="col-md-3 w3_footer_grid">
					<h3>Information</h3>
					<ul class="info"> 
						<li><a href="about.php">About Us</a></li>
						<li><a href="mail.php">Contact Us</a></li>
						<li><a href="codes.php">Short Codes</a></li>
						<li><a href="faq.php">FAQ's</a></li>
						<li><a href="products.php">Special Products</a></li>
					</ul>
				</div>
				<div class="col-md-3 w3_footer_grid">
					<h3>Category</h3>
					<ul class="info"> 
						<li><a href="products.php">Mobiles</a></li>
						<li><a href="products1.php">Laptops</a></li>
						<li><a href="products.php">Purifiers</a></li>
						<li><a href="products1.php">Wearables</a></li>
						<li><a href="products2.php">Kitchen</a></li>
					</ul>
				</div>
				<div class="col-md-3 w3_footer_grid">
					<h3>Profile</h3>
					<ul class="info"> 
						<li><a href="index.php">Home</a></li>
						<li><a href="products.php">Today's Deals</a></li>
					</ul>
					<h4>Follow Us</h4>
					<div class="agileits_social_button">
						<ul>
							<li><a href="#" class="facebook"> </a></li>
							<li><a href="#" class="twitter"> </a></li>
							<li><a href="#" class="google"> </a></li>
							<li><a href="#" class="pinterest"> </a></li>
						</ul>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="footer-copy">
			<div class="footer-copy1">
				<div class="footer-copy-pos">
					<a href="#home1" class="scroll"><img src="images/arrow.png" alt=" " class="img-responsive" /></a>
				</div>
			</div>
			<div class="container">
				<p>&copy; 2017 Electronic Store. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
			</div>
		</div>
	</div>
	<!-- //footer -->  
	<!-- cart-js -->
	<script src="js/minicart.js"></script>
	<script>
        w3ls.render();

        w3ls.cart.on('w3sb_checkout', function (evt) {
        	var items, len, i;

        	if (this.subtotal() > 0) {
        		items = this.items();

        		for (i = 0, len = items.length; i < len; i++) { 
        		}
        	}
        });
    </script>  
	<!-- //cart-js --> 
</body>
</html>