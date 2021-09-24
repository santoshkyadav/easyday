<?php
session_start();
$product_id=$_REQUEST['id'];
//echo $product_id;
$register_id=$_SESSION['userid'];
//echo $register_id;
include("connection.php");
$query="select * from tbl_product where product_id='$product_id'";
$res=mysql_query($query);
while($row=mysql_fetch_array($res,MYSQL_BOTH))
{
	$sprice=$row['sprice'];
	$piecess=$row['piecess'];
	$filename=$row['filename'];
	$filename=$row['date'];
}
$query1="insert into tbl_cart(product_id,price,piecess,userid,date) values('$product_id','$sprice','$piecess','$register_id',curdate())";
mysql_query($query1);
echo "<script>alert('Add Your Product');window.location.href='userprofile.php';</script>";
?>