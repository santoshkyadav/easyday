<?php
session_start();
if($_SESSION['user']=="")
{
	session_destroy();
	header("Location:index.php?msg=2");
}
include("connection.php");
$query="select * from tbl_admin";
$res=mysql_query($query);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
	$email=$row['username'];
?>
<html>
<head>
<title>Online Shopping</title>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
<link href="images/f2.png" rel="icon"/>
<link href="css/css/bootstrap.min.css"rel="stylesheet"/>
<link href="css/css/font-awesome.min.css"rel="stylesheet"/>
<link href="css/css/bootstrap-theme.min.css"rel="stylesheet"/>
<script src="js/js/jquery-2.1.0.min.js"></script>
<script src="js/js/bootstrap.js"></script>
<script>
$(document).ready(function(){
	  //alert("OK");
	   
	  });
</script>

<style>

</style>
</head>
<body>
<div class="container-fluid">
<div class="row" style="border:1px solid #bcbcbc;">
<!--Header-->
<div class="col-sm-12 header" id="head" style="padding:0px;;min-height:80px;" >
<div class="col-sm-2 part1" style="padding:0px;min-height:80px;border-right:1px solid #ffc1c1;">
<img src="../images/logo.png" style="height:80px;width:100%;" border-right:1px solid #ffc1c1;/>
</div>
<div class="col-sm-4 part2" style="padding:0px;min-height:80px;background:#e1e1e1;border-right:1px solid #ffc1c1;border-right:1px solid #ffc1c1;">
<h2 style="text-align:center;color:#404040;text-shadow:2px 3px 3px ;font-family:cursor;">Welcome To Admin Zone</h2>
</div>
<div class="col-sm-5 part2" style="padding:0px;min-height:80px;background:#e1e1e1;border-right:1px solid #ffc1c1;border-right:1px solid #ffc1c1;">
<h2 style="text-align:center;color:#404040;text-shadow:2px 3px 3px ;font-family:cursor;">Your Username : <span style="color:#4a4aff;"><?php echo $row['username'];?></span></h2>
</div>
<div class="col-sm-1 part3" style="padding:0px;min-height:80px;background:#e1e1e1;">
<img src="../images/adminicon.png" height="80px" width="100%"/>
</div>
</div>
<!--End Header-->
</div>
<div class="row" style="padding-top:20px;">
<div class="col-sm-12 menu" style="padding:0px;">
<nav class="navbar navbar-default" >
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav" style="font-size:20px;padding-left:20px;">
	  <li ><a href="adminprofile.php" >Home</a></li>
	  <li ><a href="addcategory.php" >Add Category</a></li>
	  <li><a href="addproduct.php">Add Product</a></li>
       <li><a href="viewproduct.php" >View Product</a></li>
        <li><a href="viewuser.php">View Users</a></li>
		<li><a href="viewcontactus.php">View Contact Us Details</a></li>
		<li><a href="viewcart.php">View Cart</a></li>
		<li><a href="viewsoldproduct.php">View Sold Products</a></li>
		<li><a href="addnotification.php">Add Notification</a></li>
		<li><a href="discussion.php">Discussion Forum</a></li>
		<li><a href="changepassword.php">Change Password</a></li>
		<li><a href="logout.php">Log Out</a></li>
		
        
      </ul>
      
	  
	  
	  
	  
      
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</div>
</div>
<!-- End Of Menu code-->
<div class="row">
<div class="col-sm-12">

<div class="col-sm-3 panel panel-body hvr hvr-pulse" style="border:1px solid teal;font-size:18px;min-height:304px;background:#e1e1e1;">
<img src="../images/adminlogo.jpg" height="200px" width="80%" style="padding-top:20px;padding-left:20px;"/>
</div>
<div class="col-sm-9 panel panel-body hvr hvr-pulse" style="border:1px solid teal;font-size:18px;min-height:300px;background:#e1e1e1;">
<p style="text-align:center;font-family:cursor;font-size:20px;color:#0000ff;"><i>Admin Rules</i></p>
<p style="text-align:justify;font-family:cursor;font-size:18px;">Role based administration allows you to provide the right envoy access to apecified team members. Anyone with an employeee record can be assigned an envoy admin role. Envoy's admin roles fall into two categories:-</br>Global permission and location-based permission .<br/>
1. Administrators with global permissions have access to information and/or setting that affect all of your location<br/>
2. Administrators with location-based-roles have access to information and/or setting for specified location.
</p>
<p style="text-align:justify;font-family:cursor;font-size:20px;color:#0000ff;"><i>Benefits of using Admin rules : -</i></p>
<p style="text-align:justify;font-family:cursor;font-size:18px;">1. Protect your data and setting by granting access to the right employees.<br/>
2. Create a flexible team structure to meet your business needs.
 </p>
</div>
</div>
</div>





<!-- End th ecode-->
<?php
}
?>

<!--Footer Code-->
<div class="row">
<div class="col-sm-12 footer" style="background:#3a3a3a;min-height:100px;">
<div class="col-sm-6">
<p style="color:white;padding-left:30px;line-height:100px;font-size:20px;">&copy;2019</p>
</div>
<div class="col-sm-6">
<p style="color:white;text-align:center;line-height:100px;font-size:20px;">Developed By : Santosh Kumar Yadav</p>
</div>

</div>

</div>
</div>
</div>
</body>
</html>