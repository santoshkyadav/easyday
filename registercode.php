<?php
session_start();
$name=$_POST['name'];
//echo $name;

$fname=$_POST['fname'];
//echo $fname;

$gender=$_POST['gender'];
//echo $gender;

$dob=$_POST['dob'];
//echo $dob;

$email=$_POST['email'];
//echo $email;

$password=$_POST['password'];
//echo $password;
$confirm=$_POST['confirm'];
//echo $confirm;
$mobile=$_POST['mobile'];
//echo $mobile;
$address=$_POST['address'];
//echo $address;
$city=$_POST['city'];
//echo $city;
$pin=$_POST['pin'];
//echo $pin;
include("connection.php");
if($name==""||$fname==""||$gender==""||$email==""||$password==""||$confirm==""||$dob==""||$mobile==""||$address==""||$city==""||$pin=="")
{
	echo "<script>alert('Plz select all fields');window.location.href='register.php';</script>";
	//header("location:register.php");
}
else
{
$query1="select * from tbl_register where email='$email' || mobile='$mobile'";
$res=mysql_query($query1);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
	echo "<script>alert('You are Already Registered');window.location.href='register.php';</script>";
//header("location:register.php");	
}
else
{
	if($password==$confirm)
	{
$query2="insert into tbl_register(name,fname,gender,dob,email,password,mobile,address,city,pin,date) values('$name','$fname','$gender','$dob','$email','$password','$mobile','$address','$city','$pin',curdate())";
	}
	else
	{
		
		echo "<script>alert('Did not match password');window.location.href='register.php';</script>";
		//header("location:register.php");
	}
$res=mysql_query($query2);
if($res==1)
{
		
	echo "<script>alert('Registration Successfully ');window.location.href='login.php';</script>";
	//header("location:login.php");
}
else
{
	echo "<script>alert('Registration Unsuccessfully ');window.location.href='register.php';</script>";
	header("register.php");
}

}
}



?>