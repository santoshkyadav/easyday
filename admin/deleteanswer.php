<?php
$question_id=$_REQUEST['id'];
//echo $question_id;
include("connection.php");
$query="delete from tbl_answer where question_id='$question_id'";
$res=mysql_query($query);
if($res==1)
{
	$query1="delete from tbl_question where question_id='$question_id'";
	mysql_query($query1);
	header("location:discussion.php");
}


?>