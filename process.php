<?php
$db=new mysqli("localhost","root","","login");
$username =$_POST['user'];
$password =$_POST['pass'];

$username =stripcslashes($username);
$password = stripcslashes($password);


$username = mysqli_real_escape_string($db,$username);
$password = mysqli_real_escape_string($db,$password);


$result = mysqli_query($db,"select * from users where username = '$username' 
and password ='$password'") or die ("failed to query database".mysql_error());
$row = mysqli_fetch_array($result);
if($row['username']==$username && $row['password']== $password){
	
	echo "login suceess welcome".$row['username'];
	"<script> window.location.assign('p4.html'); </script>";
}else{
	echo "failed to login";
}




?>
