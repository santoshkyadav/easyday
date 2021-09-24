<?php
$op=$_POST['op'];
//echo $op;
$np=$_POST['np'];
//echo $np;
$cnp=$_POST['cnp'];
//echo $cnp;
include("connection.php");
$query="select * from tbl_admin";
$res=mysql_query($query);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
	$password=$row['password'];
}
if($op==$password)
{
	if($op==$np)
	{
	echo "<script>alert('Old Password and New Password are Same ');window.location.href='changepassword.php';</script>";
	
	}
	else if($np==$cnp)
	{
		$query="update tbl_admin set password='$np' where password='$op'";
		mysql_query($query);
		echo "<script>alert('Password Updated Successfully ');window.location.href='index.php';</script>";
		
	}
	else
	{
		echo "<script>alert('New Password and Confirm password are not match ');window.location.href='changepassword.php';</script>";
	}
}
else
	{
		echo "<script>alert('Invalid Old Password ');window.location.href='changepassword.php';</script>";
	}
?>