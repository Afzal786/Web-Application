<?php
session_start();
$username=$_POST['username'];
$pass=$_POST['password'];
include("demo.php");
$Query="Select *from administrator where name='$username' and password='$pass' "; 

			$dbresult=mysqli_query($con,$Query);
			$num=mysqli_num_rows($dbresult);
			if($num==1){
				$_SESSION['username']=$username;
				header('location:http://localhost/test/web1/login11.php');				
			}
			else{
				header('location:http://localhost/test/web1/login1.php');
			}
?>