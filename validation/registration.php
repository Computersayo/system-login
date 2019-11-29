<?php 
session_start();
header('location:login.php');
	$conn=mysqli_connect("localhost","root","","validation");
     $name=$_POST['username'];
     $pass=$_POST['password'];
     $sql="select * from user where username='$name'";
     $result=mysqli_query($conn,$sql);
     $num=mysqli_num_rows($result);
     if($num==1){
     	echo "username already taken";
     }
     else{
     	$reg=("insert into user(username,password) values('$name','$pass')");
     		mysqli_query($conn,$reg);
     		echo "registration successful";
     }

 ?>