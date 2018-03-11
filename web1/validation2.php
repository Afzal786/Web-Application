<?php
session_start();
$username=$_POST['username'];
$pass=$_POST['password'];
include("demo.php");
$Query="Select *from signup where email='$username' and pass='$pass' "; 

			$dbresult=mysqli_query($con,$Query);
			$num=mysqli_num_rows($dbresult);
			if($num==1){
				$_SESSION['username']=$username;
				header('location:http://localhost/test/web1/login22.php');				
			}
			else{
				header('location:http://localhost/test/web1/login2.php');
			}
?>