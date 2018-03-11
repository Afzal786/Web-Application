
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
	<?php

		session_start();
		if(!isset($_SESSION['username']))
		header('location:http://localhost/test/web1/login2.php');
	$user=$_SESSION['username'];
?>
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
				  
					
					<li><a class="active" href="view.php">view details</a></li>
					<li><br/></li><li><br/></li><li><br/></li><li><br/></li><li><br/></li>
				 	<li><a class="active" href="logout.php">log out</a></li>
		
				
				</div><!-- /.navbar-collapse -->
				 
			</nav>
			</div>
			</header>
			<h2 align="center">User Account<h2>
	<!-- //header -->
	</div>

		
		<div align="center"> 
		
	<div  style="background-color:skyblue;width:800px;margin-top:17px;padding:10px"   >

		<?php	


include("demo.php");
                  
				 
			$Query1="select * from join1 where name='$user';";
               $dbresult1=mysqli_query($con,$Query1);   
			   $row1=mysqli_fetch_row($dbresult1);
		      	
				$Query="select * from details where eno=$row1[0];";
               $dbresult=mysqli_query($con,$Query);                  
				if(mysqli_num_rows($dbresult) >0)
				{
					while($row=mysqli_fetch_row($dbresult))
					{
					
				echo "<label style='background-color:red'>About</label><br/><br/>";
				
				echo "Eno  :  " . "$row[0]  <br><br>";
   				echo "Name  :  " . "$row[1] <br><br>";
				echo "Branch  :  " . "$row[2]  <br><br>";
				echo "semester  :  " . "$row[3]  <br><br>";
				echo "Marks in Subject 1  :  " . "$row[4]  <br><br>";
                echo "Marks in Subject 2  :  " . "$row[5]  <br><br>";
				echo "Marks in Subject 3  :  " . "$row[6]  <br><br>";
				echo "Marks in Subject 4  :  " . "$row[7]  <br><br>";
				echo "Marks in Subject 5  :  " . "$row[8]  <br><br>"; 				
				echo "Marks in Subject 6  :  " . "$row[9]  <br><br>";
				echo "Attendance in Subject 1  :  " . "$row[10]  <br><br>";
				echo "Attendance in Subject 2  :  " . "$row[11]  <br><br>";
				echo "Attendance in Subject 3  :  " . "$row[12]  <br><br>";
				echo "Attendance in Subject 4  :  " . "$row[13]  <br><br>";
				echo "Attendance in Subject 5  :  " . "$row[14]  <br><br>";
				echo "Attendance in Subject 6  :  " . "$row[15]  <br><br>";
				$sum=$row[4]+$row[5]+$row[6]+$row[7]+$row[8]+$row[9];
				$per=$sum/6;
				
				}
				}				
				
				?>
<!-- mid -->

	
			
	</div>
</div>
	

<div style="background-color:red;height:20px">
		</div>
		
		<br/><br/><br/>
		
		<h4>Percentage : </h4>
		<br/>
		<br/>
		<div class="progress">
  <div class="progress-bar" role="progressbar" aria-valuenow="70"
  aria-valuemin="0" aria-valuemax="100" style="width: <?php echo"$per"."%"?>">
    <?php echo"$per"."%" ?>
  </div>
</div>
		
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