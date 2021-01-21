<?php 
require_once 'supportive_php/connection.php';
?>

<?php

/*
	$sql_one = 'SELECT * FROM news Where ID = 1';
	$display_one = mysqli_query ($conn,$sql_one);
	$news_one = mysqli_fetch_all($display_one, MYSQLI_ASSOC);
	
	$sql_two = 'SELECT * FROM news Where ID = 2';
	$display_two = mysqli_query ($conn,$sql_two);
	$news_two = mysqli_fetch_all($display_two, MYSQLI_ASSOC);
	
	
	$sql_three = 'SELECT * FROM news Where ID = 3';
	$display_three = mysqli_query ($conn,$sql_three);
	$news_three = mysqli_fetch_all($display_three, MYSQLI_ASSOC);
	
	
	$sql_four  = 'SELECT * FROM news Where ID = 4';
	$display_four = mysqli_query ($conn,$sql_four);
	$news_four = mysqli_fetch_all($display_four, MYSQLI_ASSOC);
	
	$sql_post = 'SELECT * FROM post';
	$display_post = mysqli_query ($conn,$sql_post);
	$posts = mysqli_fetch_all($display_post,MYSQLI_ASSOC);
	*/
	
	$sql_one = 'SELECT * FROM activities Where consequence = 1';
	$display_one = mysqli_query ($conn,$sql_one);
	$activities = mysqli_fetch_all($display_one, MYSQLI_ASSOC);
	
	
	mysqli_close($conn);
?>

<!DOCTYPE HTML>
<html>
<head>
<title>Meet you</title>
<link rel="shortcut icon" href="./images/1234.ico" />
<!---css--->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!---css--->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Real Space Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!---js--->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/ownwork.js"></script>
<!---js--->
<!---fonts-->
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=PT+Sans:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Righteous' rel='stylesheet' type='text/css'>
<!---fonts-->
<script src="js/responsiveslides.min.js"></script>
	 <script>
		$(function () {
		  $("#slider").responsiveSlides({
			auto:true,
			nav: false,
			speed: 500,
			namespace: "callbacks",
			pager:true,
		  });
		});
	</script>
<link href="css/owl.carousel.css" rel="stylesheet">
<script src="js/owl.carousel.js"></script>
	<script>
		$(document).ready(function() {
		$("#owl-demo").owlCarousel({
			items : 1,
			lazyLoad : true,
			autoPlay : true,
			navigation : false,
			navigationText :  false,
			pagination : true,
		});
		});
	</script>

</head>
<body>
	
			<div class="header-section">
				<div class="container">
					<div class="head-top">
						<div class="email">
						<ul>
							<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i>Email: <a href="mailto:info@example.com">info@example.com</a> </li>
						</ul>
						</div>
						<div class="clearfix"></div>
					</div>
					<nav class="navbar navbar-default">
					<!---Brand and toggle get grouped for better mobile display--->
						<div class="navbar-header">
							<div class="navbar-brand">
								<h1><a href="index.php"><span>Meet </span>You~</a></h1>
							</div>
						</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav">
								<li><a href="index.php">Home</a></li>
								<li class="active"><a href="blog.php">Activities<span class="sr-only">(current)</span></a></li>
								<li>
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Find The One<span class="caret"></span></a>
									<ul class="dropdown-menu">
										<li><a href="male.php">Him</a></li>
										<li><a href="female.php">Her</a></
									</ul>
								</li>
							</ul>
							<li><a href="contact.php">Contact</a></li>
							<div class="clearfix"></div>
						</div>
						
					</nav>
				</div>
			</div>
		<!---header--->
		<!---header--->
		<!---banner--->
		<div class="banner-section">
			<div class="container">
				<h2>Activities</h2>
			</div>
		</div>
		<!---banner--->
		<div class="content">
			<div class="blog-section">
				<div class="container">
					<div class="blog-grids">
						<div class="col-md-9 blog-grid">
							<div class="blog">
								<h3><a id="newone" href="single.html"></a></h3>
								<p id="newonedate"></p>
								<?php foreach ($activities as $activity_one) { ?>
									<h3><?php echo htmlspecialchars($activity_one['title']); ?></h3>
									<p><?php echo htmlspecialchars($activity_one['update_date']); ?></p>
									<a href="single.html"><img src="images/newfour.jpg" class="img-responsive" alt=""/></a>
									<p><?php echo htmlspecialchars($activity_one['description']); ?></p>
								<a href="single.html" class="button5 hvr-shutter-out-horizontal">Read More</a>
								<?php } ?>
							</div>
							<div class="blog blog2">
								<h3><a id="newtwo" href="single.html"></a></h3>
								<p id="newtwodate"></p>
								<a href="single.html"><img src="images/newone.jpg" class="img-responsive" alt=""/></a>
								<p id="newtwodes"></p>
								<a href="single.html" class="button5 hvr-shutter-out-horizontal">Read More</a>
							</div>
							<div class="blog">
								<h3><a id="newthree" href="single.html"></a></h3>
								<p id="newthreedate"></p>
								<a href="single.html"><img src="images/newtwo.jpg" class="img-responsive" alt=""/></a>
								<p id="newthreedes"></p>
								<a href="single.html" class="button5 hvr-shutter-out-horizontal">Read More</a>
							</div>
							<div class="clearfix"></div>
							<div class="blog">
								<h3><a id="newfour" href="single.html"></a></h3>
								<p id="newfourdate"></p>
								<a href="single.html"><img src="images/newthree.jpg" class="img-responsive" alt=""/></a>
								<p id="newfourdes"></p>
								<a href="single.html" class="button5 hvr-shutter-out-horizontal">Read More</a>
							</div>
						</div>
						<div class="col-md-3 blog-grid1">
							<div class="categ">
							<h3>Categories</h3>
							<ul>
							<li><a href="#">News</a></li>
		  						<li><a href="#">Activities</a></li>
		  						<li><a href="#">Successed cases</a></li>
		  						<li><a href="#">Notification</a></li>
							</ul>
							</div>
							<div class="feature">
								<h4>Introduction</h4>
								<div class="feature-top">
								<img src="images/s4.jpg" class="img-responsive" alt="/">
										<h5>News</h5>
										<p>On time update news <a href="#">Know More</a></p>
								</div>
								<div class="feature-top top2">
								<img src="images/s3.jpg" class="img-responsive" alt="/">
										<h5>Activtities</h5>
										<p>activties <a href="#">Know More</a></p>
								</div>
								<div class="feature-top top2">
								<img src="images/s5.jpg" class="img-responsive" alt="/">
										<h5>successed cases</h5>
										<p>successed cases<a href="#">Know More</a></p>
								</div>
								<div class="feature-top top2">
								<img src="images/s6.jpg" class="img-responsive" alt="/">
										<h5>Notification</h5>
										<p>System Notification <a href="#">Know More</a></p>
								</div>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div>
			<!---footer--->
					<div class="footer-section">
						<div class="container">
							<div class="footer-grids">
								<div class="col-md-3 footer-grid">
									<h4>About Meet you</h4>
									<p id="aboutMeSub"></p>
								</div>
								<div class="col-md-3 footer-grid">
									<h4>Recent Posts</h4>
									<ul>
										<li><a href="#" id="postOne"></a></li>
										<li><a href="#" id="postTwo"></a></li>
										<li><a href="#" id="postThree"></a></li>
										<li><a href="#" id="postFour"></a></li>
										<li><a href="#" id="postFive"></a></li>
										<li><a id="postSix" href="#"></a></li>
									</ul>
								</div>
								<div class="col-md-3 footer-grid">
									<h4>Useful links</h4>
									<ul>
										<li><a href="terms.html">Terms of Use</a></li>
										<li><a href="privacy.html">Privacy Policy</a></li>
										<li><a href="contact.html">Contact Support </a></li>
										<li><a href="faqs.html">FAQs</a></li>
									</ul>
								</div>
								<div class="col-md-3 footer-grid">
									<h4>Get In Touch</h4>
									<p id= "TouchOne"></p>
									<p id= "TouchTwo"></p>
									<p id= "TouchThree"></p>
									<p id= "TouchFou"><a href="#"> @mail.com</a></p>
								</div>
							<div class="clearfix"> </div>
							</div>

						</div>
					</div>
			<!---footer--->
			<!--copy-->
					<div class="copy-section">
						<div class="container">
							<p id= "copyright_main"></p>
						</div>
					</div>
			<!--copy-->

</body>
</html>