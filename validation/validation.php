<?php 
session_start();
header('location:login.php');
	$conn=mysqli_connect("localhost","root","","validation");
     $name=$_POST['username'];
     $pass=$_POST['password'];
     $sql="select * from user where username='$name'&& password='$pass'";
     $result=mysqli_query($conn,$sql);
     $num=mysqli_num_rows($result);
     if($num==1){
     	header('location:home.php');
     }
     else{
     	header('location:login.php');
     }

 ?>