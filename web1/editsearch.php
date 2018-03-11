


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
			<h2>Edit Details</h2>
			</div>
			<div class="clearfix"></div>
			



<div align="center"></div>
<p align="center" class="style1" style="margin:20px"><a href="index.php" class="style2">Go Back</a></p>   
<table width="754" border="0" align="center" cellpadding="0" cellspacing="2" style="background-color:silver">
  <tr>
    <td width="750" height="18" align="center" valign="top" class="yellow"><span class="yellow"></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr class="white">
    <td align="left" valign="top" class="white"><table width="99%" border="0" align="center" cellpadding="5" cellspacing="0">
      <tr>
        <td valign="top">&nbsp;</td>
        <td valign="top"><table width="98%" border="0" cellspacing="2" class="text_black">
          <tr valign="top">
            
            <td width="50%" align="right" class="gray">     </td>
          </tr>
          <tr>
            <td colspan="3" class="text_black">           </td>
            </tr>
          <tr class="text_black">
            <td colspan="3">
			<br /><br />
			<?php
			$searchall=$_POST['searchall'];
			
			include("demo.php");
			
			$Query="SELECT * from batch2003 where En_no = '$searchall' ";
			$dbresult=mysqli_query($con,$Query);
			
			

			if(mysqli_num_rows($dbresult) >0)
				{
					while($row=mysqli_fetch_row($dbresult))
					{
					
				echo "<form method=post name=f1 action='editsave.php'>";

				echo "Enrollment no  :  " . "$row[0]  <br><br><br>";
				echo "<font color = red> Enrollment No. can't changed </font> :  " . "<input name = editEn_no id = editEn_no readonly  type='hidden' value = '$row[0]'><br><br><br>";
				echo "Name  :  " . "$row[1]  <br><br><br>";
				echo "<font color = red> Edit Name </font> :  " . "<input name = editname id = editname type = text value = '$row[1]'><br><br><br>";
				
				echo "Discipline  :  " . "$row[2] <br><br><br>";
				
				echo "<font color = red> Edit Discipline </font> :  ";
				
				echo "<select name='editdiscipline' id = 'editdiscipline'><option  value='$row[2]'>$row[2]</option><option value='Electronics and Communications Engineering'>Electronics and Communications Engineering</option><option value='Computer Science Engineering'>Computer Science Engineering</option><option value='Information Technology'>Information Technology</option><option value='Bio Informatics'>Bio Informatics</option><option value='Civil Engineering'>Civil Engineering</option><option value='Bio Technology'>Bio Technology</option><option value='Physics'>Physics</option><option value='Professional Development'>Professional Development</option><option value='Maths'>Maths</option></select> <br><br><br>";
				
				


				
			
				
				
				echo "Father's Name  :  " . "$row[3]  <br><br><br>";
				echo "<font color = red> Edit Father's Name </font> :  " . "<input name = f_name id = f_name type = text value = '$row[3]'><br><br><br>";
				echo "Semester  :  " . "$row[5]  <br><br><br>";
					echo "<font color = red> Edit Semester </font> :  ";
					echo "<select name='editsemester' id = 'editsemester'><option  value='$row[5]'>$row[5]<option value='First'>First</option>
                                <option value='Second'>Second</option>
                                <option value='Third'>Third</option>
                                <option value='Fourth'>Fourth</option>
                                <option value='Fifth'>Fifth</option>
                                <option value='Sixth'>Sixth</option>
                                <option value='Seventh'>Seventh</option>
                                <option value='Eighth'>Eighth</option></select> <br><br><br>";
					
					
					
				echo "Description  :  " . "$row[4]  <br><br><br>";
				echo "<font color = red> Edit Description </font> :  " . "<textarea name = desc id = desc cols = 30 rows = 7 >$row[4]</textarea><br><br><br>";
				echo "Image  :  " . "$row[6] ";
				 $val6=$row[6]; 
        echo "<img src = '$val6' height = 100 width = 100><br><br><br>";
		echo "<font color = red> Your Image is saved with the same name as your Enrollment number. If Your Image is not correct or is not appearing, please check the extension and file name manually within Images folder</font> <br><br><br>";
                echo "<input type=submit value=Submit>";
echo "</form>";
				}	
			
			}	
				
			
			else
			{
				
			}	
			
			
		
			
			
				
					?>
			
			
			
			&nbsp;</td>
            </tr>
          <tr class="text_black">
            <td colspan="2">&nbsp;</td>
            </tr>
          
        </table>
        <p align="justify" class="text_black_huge">&nbsp;</p>
          <p align="justify" class="text_black_huge">&nbsp;</p>          </td>
      </tr>
    </table>      </td>
  </tr>
  <tr class="black">
    <td align="center" valign="top" class="text_white">&nbsp;</td>
  </tr>
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