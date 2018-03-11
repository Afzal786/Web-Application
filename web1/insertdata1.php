


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
			  $f=$_FILES['myfile'];
			  move_uploaded_file($f['tmp_name'],"images/".$f['name']);
			  
			  
			include("demo.php");
			
						
			$En_no=$_POST['En_no'];
			$name=$_POST['name'];
			$discipline=$_POST['discipline'];
			$F_name=$_POST['F_name'];
			$semester=$_POST['semester'];
			$description=$_POST['description'];
			$Image=$_POST['img'];
			echo "$En_no";
			echo "$name";
			echo "$Image";

			$Query="INSERT INTO batch2003 (En_no,Name,Discipline,Fathers_Name,Description,Semester,Image) VALUES ( '$En_no','$name','$discipline','$F_name','$description','$semester','$Image');"; 
             
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
				   <form id="form" name="form" method="post" action= 'insertdata1.php' enctype="multipart/form-data"> 
			  		    
			  
			  
          <table width="95%" border="0" cellpadding="2" cellspacing="2" class="text_black">
            <tr class="yellow" style="background-color:#87CEFA;">
              <td><p> Welcome Administrator  </p>
                </td>
            </tr>
            <tr>
              <td height="20px"><p>&nbsp;</p>
           
                <table width="95%" style="margin:20px;padding:30px;background-color:silver;" border="0" cellpadding="2" cellspacing="0px" class="text_black" >                   
                        <tr>
                          <td height="355"><table width="95%" border="0" cellspacing="20px" cellpadding="2">
						     <tr >
                              <td>Upload image </td>
                              <td><input name="myfile" type="file" class="menu"  required maxlength="255"  /></td>
                            </tr>
                            <tr >
                              <td>Enrollment No </td>
                              <td><input name="En_no" type="text" class="menu" id="En_no" required maxlength="255" onchange = "put();" /></td>
                            </tr>
                            <tr>
                              <td width="50%">Name</td>
                              <td><input name="name" type="text" required class="menu" id="name" maxlength="255" /></td>
                            </tr>
                            <tr>
                              <td>Discipline</td>
                              <td><label>
                                <select name="discipline" required class="menu">
								 <option value="Electronics and Communications Engineering" selected="selected">Select</option>
                                  <option value="Electronics and Communications Engineering" >Electronics and Communications Engineering</option>
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
                              <td>Father's Name </td>
                              <td><input name="F_name" type="text" required class="menu" id="F_name" maxlength="255" /></td>
                            </tr>
                            <tr>
                              <td align="left" valign="top">Semester</td>
                              <td><select name="semester" class="menu" id="semester">
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
                            <tr>
                              <td align="left" valign="top">Description</td>
							  <td><textarea name="description" cols="30" rows="7" class="menu" id="description"></textarea></td>
                            </tr>
                            <tr>
                              <td align="left" valign="top">Image</td>
                                <td><input name = "img" id = "img" class = "menu" type = "text"  maxlength="255" readonly="true" /> </td>
                            </tr>
                            </table>
                            <br />
                        
						  <br />
                            <p>
                              
                            </p></td>
                        </tr>
                  </table>
				  <label>
                                <input name="Submit4" type="submit" class="menu" value="Add This Data" />
                              </label>
                              <label>
                                <input name="Submit23" type="reset" class="menu" value="Reset" />
                              </label>
                </form>
				    
			
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