<?php
$name=$_POST['name'];
//echo $name;
//echo "<br/>";
$fname=$_POST['fname'];
//echo $fname;
//echo "<br/>";
$gender=$_POST['gender'];
//echo $gender;
//echo "<br/>";
$dob=$_POST['dob'];
//echo $dob;
//echo "<br/>";
$email=$_POST['email'];
//echo $email;
//echo "<br/>";
$password=$_POST['password'];
//echo $password
$address=$_POST['address'];
//echo $address;
//echo "<br/>";
$mobile=$_POST['mobile'];
//echo $mobile;
//echo "<br/>";
$city=$_POST['city'];
//echo $city;
//echo "<br/>";
$address=$_POST['address'];
//echo $address;
//echo "<br/>";
$pin=$_POST['pin'];
//echo $pin;
include("connection.php");
$query="update tbl_register set name='$name',fname='$fname',gender='$gender',dob='$dob',email='$email',password='$password',address='$address',mobile='$mobile',city='$city',address='$address',pin='$pin' where email='$email'";
mysql_query($query);
echo "<script>alert('Update Successfully : ');window.location.href='updateprofile.php';</script>";

?>