


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
			<h2>Branch and semester Wise</h2>
			</div>
			<div class="clearfix"></div>
			

<br/><br/>

<p align="center" class="text_black_bold"><a href="index.php">Go Back </a></p>


<div align="center"></div>
<table width="754" border="0" align="center" cellpadding="0" cellspacing="2">
  <tr>
    <td width="750" height="18" align="center" valign="top" class="yellow"><span class="yellow"></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr class="white">
    <td height="15" align="left" valign="top" class="text_black_huge"> 
      <p align="center">      
      <p align="center">      
      <p align="center">
  <tr><td class="text_black_bold"><div align="center"></div></td>
  </tr>
	<tr><td>
      <?php 
    @ $rpp;        //Records Per Page 
    @ $cps;        //Current Page Starting row number 
    @ $lps;        //Last Page Starting row number 
    @ $a;        //will be used to print the starting row number that is shown in the page 
    @ $b;         //will be used to print the ending row number that is shown in the page 
    ///////////////////////////////////////////////////////////////////////////////// 
    //Database connection 
    ///////////////////////////////////////////////////////////////////////////////// 
   include ('demo.php');
    ///////////////////////////////////////////////////////////////////////////////// 

    ///////////////////////////////////////////////////////////////////////////////// 
    //Following IF Statement is used to make sure when the page is loaded for the 
    //first time, Current Page's Starting row number is 0, i.e. 1st row from the 
    //table is being printed. It will change as the user will click on next. 
    /////////////////////////////////////////////////////////////////////////////////    
    if(empty($_GET["cps"])) 
    { 
        $cps = "0"; 
    } 
    else 
    { 
        $cps = $_GET["cps"]; 
    } 
    ///////////////////////////////////////////////////////////////////////////////// 

    $a = $cps+1; 

    $rpp = "10"; 

    $lps = $cps - $rpp; //Calculating the starting row number for previous page 

    ///////////////////////////////////////////////////////////////////////////////// 
    //Following IF Statement is used to make sure whether a link to Previous page is 
    //needed or not. If the user is viewing the first set of data then the link will 
    //be disabled, if on the next set then it will carry the $lps in its link and 
    //enable the link 
    if ($cps <> 0) 
    { 
        $prv =  "<a href='page.php?cps=$lps'>Previous</a>"; 
    } 
    else    
    { 
        $prv =  "<font color='cccccc' size =2>Previous</font>"; 
    } 
    ///////////////////////////////////////////////////////////////////////////////// 

    ///////////////////////////////////////////////////////////////////////////////// 
    //Following SQL Statement uses SQL_CALC_FOUND_ROWS function to calculate total 
    //number of rows found by the query excluding the limit function added at the 
    //end of the SQL statement. This is followed by second query with FOUND_ROWS() 
    //function which actually gives out the number of rows found. 
    ///////////////////////////////////////////////////////////////////////////////// 
    $q="Select SQL_CALC_FOUND_ROWS * from batch2003 limit $cps, $rpp"; 
    $rs=mysqli_query($con,$q) or die(mysqli_error()); 
    $nr = mysqli_num_rows($rs); //Number of rows found with LIMIT in action 

    $q0="Select FOUND_ROWS()"; 
    $rs0=mysqli_query($con,$q0) or die(mysqli_error()); 
    $row0=mysqli_fetch_array($rs0); 
    $nr0 = $row0["FOUND_ROWS()"]; //Number of rows found without LIMIT in action 

    ///////////////////////////////////////////////////////////////////////////////// 
    //Following IF Statement is used to determine whether the user has reached the 
    //last page of the records. For example, if we have 27 rows to print and we show 
    //10 rows per page, then on the third and the last page it will show seven rows 
    //and will say at the top that SHOWING RECORDS FROM 21 to 27. If the following 
    //validator is not used then it shows SHOWING RECORDS FROM 21 to 30. 
    /////////////////////////////////////////////////////////////////////////////////    
    if (($nr0 < 10) || ($nr < 10)) 
    { 
           $b = $nr0; 
		   if($b===0)
		   $a=$a-1;
    } 
    else 
    { 
        $b = ($cps) + $rpp; 
    } 
    ///////////////////////////////////////////////////////////////////////////////// 

    ?>
      <br />

      <table border="1" cellpadding="4" cellspacing="1" width="20%" align="center">
        <tr>
          <td align="left" colspan="2"><b><font face="verdana" size="1" color="#9999CC"><?php echo "$nr0 Records Found"; ?></font></b></td>
        </tr>
        <tr>
          <td align='left' colspan="2"><b><font face="verdana" size="1" color="#9999CC"><?php echo "Showing Records from $a to $b"; ?></font></b></td>
        </tr>
        <tr>
          <td align='center' bgcolor="#000080" class="dark_yellow"><span class="style7"><font face="verdana" color="#FFFFFF">S.No.</font></span></td>
          <td align='center' bgcolor="#000080" class="dark_yellow"><span class="style7"><font face="verdana" color="#FFFFFF">En_no</font></span></td>
          <td align='center' bgcolor="#000080" class="dark_yellow"><span class="style7"><font face="verdana" color="#FFFFFF">Name</font></span></td>
          <td align='center' bgcolor="#000080" class="dark_yellow"><span class="style7"><font face="verdana" color="#FFFFFF">Discipline</font></span></td>
          <td align='center' bgcolor="#000080" class="dark_yellow"><span class="style7"><font face="verdana" color="#FFFFFF">Father's Name</font></span></td>
          <td align='center' bgcolor="#000080" class="dark_yellow"><span class="style7"><font face="verdana" color="#FFFFFF">Description</font></span></td>
          <td align='center' bgcolor="#000080" class="dark_yellow"><span class="style7"><font face="verdana" color="#FFFFFF">Semester</font></span></td>
		   <td align='center' bgcolor="#000080" class="dark_yellow"><span class="style7"><font face="verdana" color="#FFFFFF">Image</font></span></td>
        </tr>
        <?php 
    while ($row=mysqli_fetch_array($rs)) 
    { 
        ///////////////////////////////////////////////////////////////////////////////// 
        //This is used to show the serial number on the page as well as to count it up 
        //so that we can get the next page's starting row number when it exits the while 
        //loop after fullfilling the above SQL criteria. 
        ///////////////////////////////////////////////////////////////////////////////// 
        $cps = $cps +1; 

        $val=$row["En_no"]; 
        echo "<tr><td align='center' bgcolor='#7FDBFF' class='AQUA'><font face=verdana size = 2>$cps</font></td><td align='center' bgcolor='#7FDBFF' class='AQUA'><font face=verdana size = 2>$val</font></td>";  
		$val1=$row["Name"]; 
        echo "<td align='center' bgcolor='#7FDBFF' class='AQUA'><font face=verdana size = 2>$val1</font></td>";
		$val2=$row["Discipline"]; 
        echo "<td align='center' bgcolor='#7FDBFF' class='AQUA'><font face=verdana size = 2>$val2</font></td>";
		$val3=$row["Fathers_Name"]; 
        echo "<td align='center' bgcolor='#7FDBFF' class='AQUA'><font face=verdana size = 2>$val3</font></td>";
		$val4=$row["Description"]; 
        echo "<td align='center' bgcolor='#7FDBFF' class='AQUA'><font face=verdana size = 2>$val4</font></td>";
		 $val5=$row["Semester"];
        echo "<td align='center' bgcolor='#7FDBFF' class='AQUA'><font face=verdana size = 2>$val5</font></td>";
		 $val6=$row["Image"]; 
        echo "<td align='center' bgcolor='#7FDBFF' class='AQUA'><font face=verdana><img src = '$val6' height = 100 width = 100></font></td></tr>";
		echo "<tr  bgcolor = '#C0C0C0'><td colspan = 8> <hr color = '#FFCC00' /></td></tr>";
		
    } 
    
    echo "<tr><td align='right' colspan=3>$prv"; 

    ///////////////////////////////////////////////////////////////////////////////// 
    //Following IF Statement is used to determine whether the Next link will be 
    //enabled or disabled. If the user has reached the last page of the record, then 
    //the Next link will be disabled. 
    ///////////////////////////////////////////////////////////////////////////////// 
    if ($cps == $nr0) 
    {      
        echo "  |  <font color='CCCCCC' size = 2>Next</font>"; 
    } 
    else 
    { 
        if ($nr0 > 5) 
        { 
            echo "  |  <a href='page.php?cps=$cps&lps=$lps'>Next</a>"; 
        } 
    } 
    ///////////////////////////////////////////////////////////////////////////////// 
   ?>
   
        </tr>
      </table>
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