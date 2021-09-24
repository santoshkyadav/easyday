<?php
session_start();
$question=$_POST['discussion'];
//echo $discussion;
include("connection.php");
$email=$_SESSION['email'];
$query1="select name from tbl_register where email='$email'";
$res1=mysql_query($query1);
if($row=mysql_fetch_array($res1,MYSQL_BOTH))
{
	$name=$row['name'];
}
if($question=="")
{
echo "<script>alert('Please Enter any Question : ');window.location.href='discussion.php'</script>";	
}
else
{
$query="insert into tbl_question(question,asked_by,date) values('$question','$name',curdate())";
mysql_query($query);
echo "<script>alert('Your Quertion Posted : ');window.location.href='discussion.php'</script>";
}
?>