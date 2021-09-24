<?php
session_start();
echo "<script>alert('$msg')</script>";
$email=$_POST['email'];
//echo $email;
$password=$_POST['password'];
//echo $password;
include("connection.php");

$query="select *  from tbl_register where email='$email' and password='$password'";
$res=mysql_query($query);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
	$_SESSION['userid']=$row['register_id'];
	$_SESSION['email']=$email;
	header("Location:userprofile.php");
}
else
	{
		echo "<script>alert('Invalid email or password')</script>";
		header("location:login.php?msg=1");
	}
?>