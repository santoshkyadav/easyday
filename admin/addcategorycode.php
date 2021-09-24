<?php
$categoryname=$_POST['category'];
//echo $categoryname;
include("connection.php");
$query="insert into tbl_category(categoryname,date) values('$categoryname',curdate())";
$res=mysql_query($query);
if($res==1)
{
	header("location:addcategory.php");
}
else
{
	header("location:addcategory.php");
}



?>