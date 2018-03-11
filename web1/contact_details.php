<!DOCTYPE html>
<html lang="en">
<head>
<title>Admin area</title>
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
<script>
function put() 
{
var x, y, z,e,f;
x = document.form['En_no'].value;
e='.jpg';
z='Images/';
document.form['img'].value =  z+x+e;

}


</script>
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
						<li><a href="DeleteEdit.php">Delete</a></li>						
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
			<h2>Enter Details</h2>
			</div>
			<div class="clearfix"></div>
			






<div align="center"></div>
<table width="754" border="0" align="center" cellpadding="0" cellspacing="2">
  <tr>
    <td width="750" height="18" align="center" valign="top" class="yellow"><span class="yellow"></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr class="white">
    <td align="left" valign="top" class="white"><table width="99%" border="0" align="center" cellpadding="5" cellspacing="0">
      <tr>
        <td width="4%" valign="top">&nbsp;</td>
        <td width="96%" align="left" valign="top">
		
		<div style="background-color:light blue;">
		
			  <?php
			include("demo.php");
			
						
			$f_name=$_POST['f_name'];
			$l_name=$_POST['l_name'];
			$email=$_POST['email'];
			$subject=$_POST['subject'];
			$msg=$_POST['message'];
			
			

			$Query="INSERT INTO contact  VALUES ( '$f_name','$l_name','$email','$subject','$msg');"; 

			$dbresult=mysqli_query($con,$Query);

			if($dbresult)
			{
				echo "<p class=\"text_black\">Thankyou for submitting the Detail.<br><br>";			
			}
			else
			{
				echo "<p class=\"text_black\">Some problem occured. Please try again <br><br>";
				
			}
?>
			</div>	
				   <!-- contact -->
	<div class="contact-agile">
		<div class="faq">
			
			<div class="container">
				<div class="col-md-3 location-agileinfo">
					<div class="icon-w3">
						<span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
					</div>
					<h3>Address</h3>
					<h4>Rajouri Garden</h4>
					<h4>New Delhi,</h4>
					<h4>India.</h4>
				</div>
				<div class="col-md-3 call-agileits">
					<div class="icon-w3">
						<span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
					</div>
					<h3>Call</h3>
					<h4>+91847573632</h4>
					<h4>+98543747328</h4>
					<h4>+91737488347</h4>
				</div>
				<div class="col-md-3 mail-wthree">
					<div class="icon-w3">
						<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
					</div>
					<h3>Email</h3>
					<h4><a href="mailto:info@example.com">example1@mail.com</a></h4>
					<h4><a href="mailto:info@example.com">example2@mail.com</a></h4>
					<h4><a href="mailto:info@example.com">example3@mail.com</a></h4>
				</div>
				<div class="col-md-3 social-w3l">
					<div class="icon-w3">
						<span class="glyphicon glyphicon-user" aria-hidden="true"></span>
					</div>
					<h3>Social media</h3>
					<ul>
						<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i><span class="text">Facebook</span></a></li>
						<li class="twt"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i><span class="text">Twitter</span></a></li>
						<li class="ggp"><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i><span class="text">Google+</span></a></li>	
					</ul>
				</div>
				<div class="clearfix"></div>
				<form action="contact_details.php" method="post">
					<input type="text" name="f_name" placeholder="FIRST NAME" required="">
					<input type="text" name="l_name" placeholder="LAST NAME" required="">
					<input type="email" name="email" placeholder="EMAIL" required="">
					<input type="text" name="subject" placeholder="SUBJECT" required="">
					<textarea  name="message" placeholder="YOUR MESSAGE" required=""></textarea>
					<input type="submit" value="SEND MESSAGE">
				</form>
			</div>
		</div>
	</div>
	<div class="map-w3-agileits">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6147597.273763374!2d8.084369138346274!3d41.20528240044405!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12d4fe82448dd203%3A0xe22cf55c24635e6f!2sItaly!5e0!3m2!1sen!2sin!4v1476877496594"></iframe>
	</div>
<!-- //contact -->
				    
			
                    <p>&nbsp;</p></td>
        </tr>
            
            </table>          
    </td></tr>
</table>      
		</table>
		
			<!-- Footer -->

			<div class="copyright-wthree">
				<p>Student Info . All Rights Reserved | <a href="#"> studentinfo@gmail.com </a></p>
			</div>
<!-- //Footer -->

		
			
<!-- //banner -->


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