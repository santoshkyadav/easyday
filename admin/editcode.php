<?php
$id=$_REQUEST['id'];
//echo $id;

$categoryname=$_POST['category'];
echo $categoryname;
include("connection.php");
$query="update tbl_category set categoryname='$categoryname' where category_id='$id'";
mysql_query($query);
header("location:addcategory.php");
?>