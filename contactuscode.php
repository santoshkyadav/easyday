<?php
$name=$_POST['name'];
//echo $name;
$email=$_POST['email'];
//echo $email;
$mobile=$_POST['mobile'];
//echo $mobile;
$message=$_POST['text'];
//echo $message;
include("connection.php");
$query="insert into tbl_contact (name,email,mobile,message,date) values('$name','$email','$mobile','$message',curdate())";
mysql_query($query);
echo "<script>alert('Your Complain successfully Submitted');window.location.href='contactus.php';</script>";
?>