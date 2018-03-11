



<!DOCTYPE html>
<html lang="en">
<head>
<title> Student Information System| </title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Educative Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/font-awesome.css" rel="stylesheet"> 

<!--web-fonts-->
<link href="//fonts.googleapis.com/css?family=Open+Sans:400,600,700,800" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
<!--//web-fonts-->
<!--//fonts-->
<!-- js -->
</head>
<body>
<!-- banner -->
	<div class="banner" id="home">
		<!-- header -->
		<header>
			<div class="container">

			<!-- navigation -->
			<nav class="navbar navbar-default">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>				  
				<div class="w3-logo">
					<h1><a href="index.html">Student Information System</a></h1>
					
					</div><div>
					<label></label>
                    </div>
					</div>
                 
				<!-- Collect the nav links, forms, and other content for toggling -->
		            
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				  <ul class="nav navbar-nav">
				  <li><p>&nbsp;</p></li>
				  <li><br/></li>
					<li><a class="active" href="index.php">Home</a></li>
					<li class="dropdown">
					  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Admin<span class="caret"></span></a>
					  <ul class="dropdown-menu">
						<li><a href="adminin.php">Add</a></li>
						<li><a href="adminedit.php">Update</a></li>
						<li><a href="DeleteEdit.php">Delete one</a></li>
                        <li><a href="DeleteEdit1.php">Delete more</a></li>						
					  </ul>
					</li>
					<li><a href="gallery.php">Add Account</a></li>
					<li class="dropdown">
					  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Info<span class="caret"></span></a>
					  <ul class="dropdown-menu">
							<li><a href="showdetails.php">Eno</a></li>
						<li><a href="Namewiseshowdetails.php">Name</a></li>
						<li><a href="disciplain.php">Branch</a></li>
						<li><a href="discipline_semester.php">Branch and Year</a></li>
						<li><a href="page.php">All info</a></li>
					  </ul>
					</li>
					<li><a href="contact.php">Contact</a></li>
					<li class="dropdown">
					  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Login<span class="caret"></span></a>
					  <ul class="dropdown-menu">
							<li><a href="login1.php">ADMIN</a></li>
						<li><a href="login2.php">USER</a></li>
					  </ul>
				  </ul> <ul align="right"><form action = search.php method="post" name="form1" class="menu" id="form1">
                        <label></label>
                      <label>
                      <input name="searchall" type="text" placeholder="enrollment Number" class="searchall" size="25" maxlength="200" />
                      <input name="Search" type="submit" class="menu" id="Search" value="Search" />
                      </label>
            </form></ul> 
				</div> 
			</nav>
			<div class="clearfix"></div>
		<!-- //navigation -->
			</div>
		</header>
	<!-- //header -->
	<!-- banner-text -->
		<div class="banner-text"> 
			<div class="callbacks_container">
				<ul class="rslides" id="slider3">
					<li>
						<div class="slider-info">
							<h3>Fast Access to database</h3>
							<h4> Information for all</h4>
						
						</div>
					</li>
					<li>
					
						<div class="slider-info">
							 <h3>high Security </h3>
							<h4> Make the best choice for your Storage</h4>
							
						   
						</div>
					</li>
					<li>
						
						<div class="slider-info">
							 <h3>Turning your attempts into outcomes</h3>
							<h4> Successful career starts with good education</h4>
							
						   
						</div>
					</li>
					<li>
						
						<div class="slider-info">
							 <h3>Preparing for successful future</h3>
							<h4> Make the best choice for your search</h4>
						   
						</div>
					</li>

				</ul>
				
			</div>
			<div class="clearfix"></div>	
		</div>
	</div>


<!--sign-up-section-->
	<div class="signup" id="signup">
		<div class="container">
		<div class="head-top-w3ls"><i class="fa fa-graduation-cap" aria-hidden="true"></i></div>
			<h5 class="title-w3">Store Information</h5>
			<p>Find out how to get involved in programs of students include add account ,view and edit account.</p>
			<div class="button2">
			<h5><a href="#" data-toggle="modal" data-target="#myModal2">Register Now</a></h5>
				</div>
			</div>
			<!-- Modal1 -->
			<div class="modal fade" id="myModal2" tabindex="-1" role="dialog">
				<div class="modal-dialog" role="document">
				<!-- Modal content-->
					<div class="modal-content abt-w3l">
							<div class="modal-header">
								<button type="button" class="close clo1" data-dismiss="modal">&times;</button>
									<h4>Register</h4>
									<form action="Register.php" method="post" class="mod2">
										<ul>
											<li class="text">Name :</li>
											<li class="agileits-main"><input name="name" type="text" required></li>
										</ul>
										<ul>
											<li class="text">Gender  :  </li>
											<li class="agileits-main"><input name="Gender" type="text" required></li>
										</ul>
										<ul>
											<li class="text">Father Name  :  </li>
											<li class="agileits-main"><input name="Father_name" type="text" required></li>
										</ul>
										<ul>
											<li class="text">mobile no  :  </li>
											<li class="agileits-main"><input name="mobile" type="text" required></li>
										</ul>
										<ul>
											<li class="text">Email :  </li>
											<li class="agileits-main"><input name="E_mail" type="email" required></li>
										</ul>
										<ul>
											<li class="text">Password  :  </li>
											<li class="agileits-main"><input name="Password" id="password" type="password" required></li>
										</ul>
										<ul>
											<li class="text">Confirm Password  :  </li>
											<li class="agileits-main"><input name="Confirm Password" id="confirm_password" type="password" required></li>
										</ul>
										<div class="clear"></div>
										<div class="agile-submit">
											<input type="submit" value="submit" class="pure-button-primary">
										</div>
									</form>

							</div>
						</div>
					</div>
				 </div>
				<!-- //Modal1 -->
 </div>
<!--//sign-up-section-->
<!-- gallery -->
<div class="gallery" id="gallery">
<div class="container">
<div class="head-top-w3ls"><i class="fa fa-graduation-cap" aria-hidden="true"></i></div>
			<h5 class="title-w3">gallery</h5>
			<ul id="flexiselDemo1">			
				<li>
					<div class="wthree_testimonials_grid_main">
						
								<img src="images/p1.jpg" alt=" " class="img-responsive" />
								<h6>Make the best choice for your education</h6>
					</div>
				</li>
				<li>
					<div class="wthree_testimonials_grid_main">
						
								<img src="images/p2.jpg" alt=" " class="img-responsive" />
								<h6>Make the best choice for your education</h6>
					</div>
				</li>
				<li>
					<div class="wthree_testimonials_grid_main">
					
								<img src="images/p3.jpg" alt=" " class="img-responsive" />
								<h6>Make the best choice for your education</h6>
					</div>
				</li>
				<li>
					<div class="wthree_testimonials_grid_main">
					
								<img src="images/p4.jpg" alt=" " class="img-responsive" />
								<h6>Make the best choice for your education</h6>
					</div>
				</li>
				<li>
					<div class="wthree_testimonials_grid_main">
					
								<img src="images/p5.jpg" alt=" " class="img-responsive" />
								<h6>Make the best choice for your education</h6>
					</div>
				</li>
			</ul>
			
</div>
</div>
	<!-- //gallery -->
<!-- Footer -->

			<div class="copyright-wthree">
				<p>Student Info . All Rights Reserved | <a href="#"> studentinfo@gmail.com </a></p>
			</div>
<!-- //Footer -->

	<a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //smooth scrolling -->

	
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<script src="js/responsiveslides.min.js"></script>
							<script>
								// You can also use "$(window).load(function() {"
								$(function () {
								  // Slideshow 4
								  $("#slider3").responsiveSlides({
									auto: true,
									pager:true,
									nav:false,
									speed: 500,
									namespace: "callbacks",
									before: function () {
									  $('.events').append("<li>before event fired.</li>");
									},
									after: function () {
									  $('.events').append("<li>after event fired.</li>");
									}
								  });
							
								});
							 </script>
							 
							 
							 <script>
								// You can also use "$(window).load(function() {"
								$(function () {
								  // Slideshow 4
								  $("#slider1").responsiveSlides({
									auto: true,
									pager:false,
									nav:true,
									speed: 500,
									namespace: "callbacks",
									before: function () {
									  $('.events').append("<li>before event fired.</li>");
									},
									after: function () {
									  $('.events').append("<li>after event fired.</li>");
									}
								  });
							
								});
							 </script>
<!--gallery-->

<script type="text/javascript">
							$(window).load(function() {
								$("#flexiselDemo1").flexisel({
									visibleItems:3,
									animationSpeed: 1000,
									autoPlay: true,
									autoPlaySpeed: 3000,    		
									pauseOnHover: true,
									enableResponsiveBreakpoints: true,
									responsiveBreakpoints: { 
										portrait: { 
											changePoint:480,
											visibleItems: 1
										}, 
										landscape: { 
											changePoint:640,
											visibleItems:2
										},
										tablet: { 
											changePoint:768,
											visibleItems: 2
										}
									}
								});
								
							});
					</script>
					<script type="text/javascript" src="js/jquery.flexisel.js"></script>
<!--gallery-->



 <!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->
<!--js for bootstrap working-->
	<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->


<!-- script-for-menu -->
					<script>					
						$("span.menu").click(function(){
							$(".top-nav ul").slideToggle("slow" , function(){
							});
						});
					</script>
					<!-- script-for-menu -->

</body>
</html>