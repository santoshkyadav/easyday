<?php
$pname=$_POST['pname'];
//echo $pname;
//echo "<br/ >";
$category_id=$_POST['category'];
//echo $category_id;
$cprice=$_POST['cprice'];
//echo $cprice;
//echo "<br/ >";
$sprice=$_POST['sprice'];
//echo $sprice;


$discount=$_POST['discount'];
//echo $discount;

$percentage=($sprice*$discount)/100.0;
//echo $percentage;
$selling_price=($sprice-$percentage);
//echo $selling_price;
//echo "<br/ >";
$piecess=$_POST['piecess'];
//echo $piecess;
//echo "<br/ >";
$filename=$_FILES['file']['name'];
//echo $filename;
//echo "<br/ >";

$filetype=$_FILES['file']['type'];
//echo $filetype;
//echo "<br/ >";

$filesize=$_FILES['file']['size'];
//echo $filesize;
//echo "<br/ >";
$tmp_name=$_FILES['file']['tmp_name'];
//echo $tmp_name;
//echo "<br/ >";
$location="upload/";

$description=$_POST['description'];
//echo $description;
//echo "<br/ >";
$description=$_POST['description'];
//echo $description;
$expirydate=$_POST['expirydate'];
//echo $expirydate;
//echo "<br/ >";
include("connection.php");
$query="insert into tbl_product(name,category_id,cprice,sprice,after_discount_price,discount,piecess,filename,description,expirydate,date) values('$pname','$category_id','$cprice','$sprice','$selling_price','$discount','$piecess','$filename','$description','$expirydate',curdate())";
mysql_query($query);
move_uploaded_file($tmp_name,$location.$filename);
echo "<script>alert('Product Added');window.location.href='addproduct.php';</script>";
?>