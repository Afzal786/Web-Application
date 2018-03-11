
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
					<li><br/></li><li><br/></li><li><br/></li><li><br/></li><li><br/></li>
				 	<li><a class="active" href="logout.php">log out</a></li>
		
				
				</div><!-- /.navbar-collapse -->
				 
			</nav>
			</div>
			</header>
			</div>
			
	
  <tr class="white">
    <td align="left" valign="top" class="white"><table width="99%" border="0" align="center" cellpadding="5" cellspacing="0">
      <tr>
        <td width="4%" valign="top">&nbsp;</td>
        <td width="96%" align="left" valign="top">
		
		<div style="background-color:yellow;">
		
		<?php
			
         session_start();
		if(!isset($_SESSION['username']))
		header('location:http://localhost/test/web1/login1.php');
			
		include("demo.php");
			
				$no=$_POST['no'];
				$name=$_POST['name'];
       			$branch=$_POST['branch'];
       			$sem=$_POST['sem'];
				$s1=$_POST['s1'];
				$s2=$_POST['s2'];
				$s3=$_POST['s3'];
				$s4=$_POST['s4'];
				$s5=$_POST['s5'];
				$s6=$_POST['s6'];
				$a1=$_POST['a1'];
                $a2=$_POST['a2'];
				$a3=$_POST['a3'];
				$a4=$_POST['a4'];
				$a5=$_POST['a5'];
				$a6=$_POST['a6'];
				
			  
				
			
				$Query="INSERT INTO details VALUES ('$no','$name','$branch','$sem','$s1','$s2','$s3','$s4','$s5','$s6','$a1','$a2','$a3','$a4','$a5','$a6');"; 

			$dbresult=mysqli_query($con,$Query);
            if($dbresult)
			{
				echo "<p class=\"text_black\">Thankyou for Registering.<br><br>";			
			}
			else
			{
				echo "<p class=\"text_black\">Some problem occured. Please try again <br><br>";
				
			}
				?>
			
			
			
			
			
			
			
			
			
			<div align="center">
	<form id="form" name="form" method="post" action= 'feed1.php' >
	<table width="55%"  style="margin:20px;margin-left:20px;margin-right:20px;padding:30px;background-color:silver;" border="0" cellpadding="2" cellspacing="0px" class="text_black" >                   
                        <tr>
                          <td height="355"><table width="95%" border="0" cellspacing="20px" cellpadding="2">
                            <tr >
                              <td>Enrollment No </td>
                              <td><input name="no" type="text" class="menu" id="En_no" required maxlength="255" " /></td>
                            </tr>
                            <tr>
                              <td width="50%">Name</td>
                              <td><input name="name" type="text" required class="menu" id="name" maxlength="255" /></td>
                            </tr>
                            <tr>
                              <td>Branch</td>
                              <td><label>
                                <select name="branch" required class="menu">
								  <option value=""selected="selected"></option>
                                  <option value="Electronics and Communications Engineering">Electronics and Communications Engineering</option>
                                  <option value="Computer Science Engineering" >Computer Science Engineering</option>
                                  <option value="Information Technology">Information Technology</option>
                                  <option value="Bio Informatics">Bio Informatics</option>
                                  <option value="Civil Engineering">Civil Engineering</option>
                                  <option value="Bio Technology">Bio Technology</option>
                                  <option value="Physics">Physics</option>
                                  <option value="Professional Development">Professional Development</option>
                                  <option value="Maths">Maths</option>
                                </select>
                                </label></td>
                            </tr>
                     
                            <tr>
                              <td align="left" valign="top">Semester</td>
                              <td><select name="sem" class="menu" id="semester">
							     <option></option>
                                <option>First</option>
                                <option>Second</option>
                                <option>Third</option>
                                <option>Fourth</option>
                                <option>Fifth</option>
                                <option>Sixth</option>
                                <option>Seventh</option>
                                <option>Eighth</option>
                                                            </select></td>
                            </tr>
							 <tr >
                              <td>Subject 1 </td>
                              <td><input name="s1" type="text" class="menu" id="En_no" required maxlength="255"  /></td>
                            </tr> <tr >
                              <td>Subject 2 </td>
                              <td><input name="s2" type="text" class="menu" id="En_no" required maxlength="255"  /></td>
                            </tr> <tr >
                              <td>Subject 3 </td>
                              <td><input name="s3" type="text" class="menu" id="En_no" required maxlength="255"  /></td>
                            </tr> <tr >
                              <td>Subject 4 </td>
                              <td><input name="s4" type="text" class="menu" id="En_no" required maxlength="255"  /></td>
                            </tr> <tr >
                              <td>Subject 5 </td>
                              <td><input name="s5" type="text" class="menu" id="En_no" required maxlength="255"  /></td>
                            </tr> <tr >
                              <td>Subject 6 </td>
                              <td><input name="s6" type="text" class="menu" id="En_no" required maxlength="255"  /></td>
                            </tr> <tr >
                              <td>Attendance in sub 1 </td>
                              <td><input name="a1" type="text" class="menu" id="En_no" required maxlength="255"  /></td>
                            </tr>
							<tr >
                              <td>Attendance in sub 2 </td>
                              <td><input name="a2" type="text" class="menu" id="En_no" required maxlength="255"  /></td>
                            </tr><tr >
                              <td>Attendance in sub 3 </td>
                              <td><input name="a3" type="text" class="menu" id="En_no" required maxlength="255"  /></td>
                            </tr><tr >
                              <td>Attendance in sub 4 </td>
                              <td><input name="a4" type="text" class="menu" id="En_no" required maxlength="255"  /></td>
                            </tr><tr >
                              <td>Attendance in sub 5 </td>
                              <td><input name="a5" type="text" class="menu" id="En_no" required maxlength="255"  /></td>
                            </tr><tr >
                              <td>Attendance in sub 6 </td>
                              <td><input name="a6" type="text" class="menu" id="En_no" required maxlength="255"  /></td>
                            </tr>
                          
                            <tr>
							
							
							</tr>
                            </table>
                            <br />
                   
                            <div class="agile-submit">
											<input type="submit" value="submit" class="pure-button pure-button-primary">
											<div class="agile-submit">
											<input type="reset" value="Reset" reset></td>
                        </tr>
                  </table>
	
	</div>
	</div>
	</form>
	<a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //smooth scrolling -->

	<!-- Footer -->

			<div class="copyright-wthree">
				<p>Student Info . All Rights Reserved | <a href="#"> studentinfo@gmail.com </a></p>
			</div>
<!-- //Footer -->
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