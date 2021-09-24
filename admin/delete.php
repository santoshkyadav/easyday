<?php
$id=$_REQUEST['id'];
//echo $id;
include("connection.php");
$query="delete from tbl_category where category_id='$id'";
$res=mysql_query($query);
header("location:addcategory.php");
?>