
<!DOCTYPE html>
<html lang="en">
<head>
<title>Educative an education Category Flat Bootstrap Responsive website Template | Icons :: w3layouts</title>
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
	<div class="banner about-banner-w3ls " id="home">

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
					<br/>
                 
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				  <ul class="nav navbar-nav">
				  <li><p>&nbsp;</p></li>
				   
					<br/>
				  
					<li><a class="active" href="editadmin.php">Edit details</a></li>
					<li><a class="active" href="feed.php">Feed details</a></li>
					<li><a class="active" href="#">Contact details</a></li>
					<li><br/></li><li><br/></li><li><br/></li><li><br/></li><li><br/></li>
				 	<li><a class="active" href="logout.php">log out</a></li>
		
				
				</div><!-- /.navbar-collapse -->
				 
			</nav>
			</div>
			</header>
	<!-- //header -->
		<?php

		session_start();
		if(!isset($_SESSION['username']))
		header('location:http://localhost/test/web1/login1.php');
		
		?><h1 align="center" style="margin-top:50px;color:red"> Hi, <?php
		echo $_SESSION['username'];
		?></h1>
	<?php	?>
		
		</div>
		
	
<!-- mid -->
<?php
include("demo.php");
$Query="SELECT * from contact ";
			$dbresult=mysqli_query($con,$Query);
			
			

			if(mysqli_num_rows($dbresult) >0)
				{
					while($row=mysqli_fetch_row($dbresult))
					{
					
				
                echo "<br/>";
				echo "First Name  :  " . "$row[0]  <br><br><br>";
				echo "Last Name  :  " . "$row[1]  <br><br><br>";
				
				echo "Email Id  :  " . "$row[2] <br><br><br>";
				echo "Subject :  " . "$row[3]  <br><br><br>";
				echo "Message :  " . "$row[4]  <br><br><br>";
					
				echo "---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------<br/>";
				
				}	
			
			}	
			?>
<!-- //banner -->
<br/><br/><br/><br/>
<!-- Footer -->

			<div class="copyright-wthree">
				<p>Student Info . All Rights Reserved | <a href="#"> studentinfo@gmail.com </a></p>
			</div>
<!-- //Footer -->

	<a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //smooth scrolling -->

	
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>



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