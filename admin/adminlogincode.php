<?php
Session_start();
$username=$_POST['email'];
//echo $username;

$password=$_POST['password'];
//echo $password;
include("connection.php");
$query="select username,password from tbl_admin where username='$username' and password='$password'";
$res=mysql_query($query);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
	$_SESSION['user']=$username;
header("location:adminprofile.php");	
}
else
{
	header("location:index.php?msg=1");
}

?>