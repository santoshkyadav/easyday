<?php
session_start(); 
$question_id=$_REQUEST['id'];
//echo $question_id;
$answer=$_POST['answer'];
//echo $answer;
include("connection.php");
$email=$_SESSION['email'];
$query1="select name from tbl_register where email='$email'";
$res1=mysql_query($query1);
if($row=mysql_fetch_array($res1,MYSQL_BOTH))
{
	$name=$row['name'];
}
if($answer=="")
{
echo "<script>alert('Please put a valid answer : ');window.location.href='reply.php';</script>";	
}
else
{
	
$query="insert into tbl_answer(question_id,answer,posted_by,date) values('$question_id','$answer','$name',curdate())";
mysql_query($query);
echo "<script>alert('Your answer is posted : ');window.location.href='discussion.php';</script>";
}
?>