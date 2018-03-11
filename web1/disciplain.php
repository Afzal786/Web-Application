


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
function showmenu(elmnt)
{
document.getElementById(elmnt).style.visibility="visible"
}
function hidemenu(elmnt)
{
document.getElementById(elmnt).style.visibility="hidden"
}
function verify() 
{

   var cname;
   with(window.document.form1)
   {
      cname    = searchname;
	  }
	  if(cname.value == '')
	  {
   
      alert('Please enter your name');
     cname.focus();
      return false;
   }
   }

</script>
</head>
<body>
<!-- banner -->
	<div class="banner about-banner-w3ls " id="home">
		<!-- header -->
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
					  <a href="index.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Info<span class="caret"></span></a>
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
			<h2>Branch Wise</h2>
			</div>
			<div class="clearfix"></div>
			





<div align="center"></div>
<br/>
 <p align="center" class="text_black_bold"><a href="index.php">Go Back</a> </p>
<br/>   
<table width="754" border="0" align="center" cellpadding="0" cellspacing="2">
  <tr>
    <td width="750" height="18" align="center" valign="top" class="yellow"><span class="yellow"></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr class="white">
    <td align="center" valign="top" class="text_black_huge">
     
      <form id="form1" name="form1" method="post" action= <?php $_SERVER['PHP_SELF']; ?>>
        
		<label>Disc
		 <?php 
// initialize or capture variable 
$disc = !isset($_POST['select'])? NULL : $_POST['select']; 

?> 

        <select name="select" id="select">
		   <option>Select</option>
          <option>Computer Science Engineering</option>
          <option>Information Technology</option>
          <option>Maths</option>
          <option>Civil Engineering</option>
          <option>Electronics and Communications</option>
          <option>Bio Informatics</option>
          <option>Professional Development</option>
		   <option>Physics</option>
          <option>Bio Technology</option>
        </select>
		<input type="submit" name="submit" value="Go..."> 

        </label> 
       
		
      </form>
    
	<?php
	
echo $disc;

	


	

include ('demo.php');
if($disc =='')
			{
			echo 'Please select the related field';
			return false;
			}
$Query="SELECT * from batch2003 where Discipline = '" .$disc."'";
$dbresult=mysqli_query($con,$Query);

if(mysqli_num_rows($dbresult) >0)
{
echo "<table width='90%' border='4' style='background-color:silver' align='center' cellpadding='2' cellspacing='2' class='text_black'>";
echo "              <tr align=\"center\" valign=\"top\" bgcolor=\"orange\" class='yellow'>";
echo "                 <td bgcolor='orange' class=\"yellow\">Enrollment no</td>";
echo "                 <td>Name</td>";
echo "                 <td>Discipline</td>";
echo "                 <td>Father's Name</td>";
echo "                 <td>Semester</td>";
echo "                 <td>Description</td>";
echo "                 <td>Image</td>";
echo "               </tr>";

while($row=mysqli_fetch_row($dbresult))
{
echo "<tr class=\"gray\">";
                echo " <td style='padding:28px;' width='20%'>".$row[0]."</td>                ";
                echo " <td width='27%'>".$row[1]."</td>                ";
                echo " <td width='18%'>".$row[2]."</td>                ";
                echo " <td width='35%'>".$row[3]."</td>                ";
				echo " <td width='35%'>".$row[5]."</td>                ";
				echo " <td width='35%'>".$row[4]."</td>                ";
				 $val6=$row[6]; 
        echo "<td><img src = '$val6' height = 100 width = 100></td>    ";
				
                echo "</tr>";
}
echo"</table>";
}
else {
	
	echo "<br/>No Record Found";
	
}		//if case ends here
?>
  <tr class="black">
    <td align="center" valign="top" class="text_white">&nbsp;</td>
  </tr>
  	

</table>
		
	


		
			
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
			<!-- Footer -->
<br/> <br/> <br/> <br/> <br/>
			<div class="copyright-wthree">
				<p>Student Info . All Rights Reserved | <a href="#"> studentinfo@gmail.com </a></p>
			</div>
<!-- //Footer -->
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