<?php
session_start();
include("connection.php");
if($_SESSION['email']=="")
{
	session_destroy();
	header("location:login.php");
}
$query="select * from tbl_register";
$res=mysql_query($query);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
	$name=$row['name'];

}
?>
<html>
<head>
<title>Online Shopping</title>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	
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
<div class="row">
<!--Header-->
<div class="col-sm-12 header" id="head" style="padding:0px;;min-height:80px;" >
<div class="col-sm-2 part1" style="padding:0px;min-height:80px;">
<img src="Images/logo.png" style="height:80px;width:100%;"/>
</div>
<div class="col-sm-6 part2" style="padding:0px;min-height:80px;background:#e1e1e1;">
<h1 style="text-align:center;color:#404040;text-shadow:2px 3px 3px ;font-family:cursor;"> Welcome :  <?php echo $name;?></h1>
</div>
<div class="col-sm-4 part2" style="padding:0px;min-height:80px;background:#e1e1e1;">
<h3 style="text-align:center;"><a href="cart.php" style="text-decoration:none;color:#404040;font-family:cursor;"><i>Cart()</i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="order.php" style="text-decoration:none;color:#404040;font-family:cursor;"><i>Orders</i></a></h3>
</div>

</div>
<!--End Header-->
</div>
<div class="row">
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
	  <li ><a href="userprofile.php" >Home</a></li>
	  <li><a href="mycart.php">My Cart</a></li>
       <li><a href="updateprofile.php" >Update Profile</a></li>
        <li><a href="changepassword.php">Change Password</a></li>
		<li><a href="myoffer.php">My Offers</a></li>
		<li><a href="discussion.php">Discussion Forum</a></li>
	
		<li><a href="logout.php">Logout</a></li>
		
        
      
	  <form class="navbar-form navbar-left" role="search" style="font-size:18px;padding-left:20px;">
        <div class="form-group" >
          <input type="text" class="form-control" placeholder="Search" >
        </div>
        <button type="submit" class="btn btn-default " style="background:#ff7d7d;color:white;font-size:16px;">Submit</button>
      </form>
	  </ul>
      
	  
	  
	  
	  
      
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</div>
</div>
<!-- End Of Menu code-->

<!-- slider code-->
<div class="row">
<div class="col-sm-12 slider" style="padding:0px;min-height:300px;">
<div id="carousel-example-generic" style="background-color:#ffffff;" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="images/show5.jpeg" alt="..." style="height:300px;width:100%;" >
      <div class="carousel-caption">
        ...
      </div>
    </div>
	
   
	<div class="item">
      <img src="Images/p2.jpeg" alt="..." style="height:300px;width:100%;">
      <div class="carousel-caption">
        ...
      </div>
    </div>
	
    ...
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
</div>
<!-- End Of slider code-->

<!-- end of product heading-->

<div class="row" style="padding-top:20px;">
<div class="col-sm-12 parent"  style="padding:0px;background:#e1e1e1;color:black;">
<div class="col-sm-12">
<div class="row">
<div class="col-sm-12 product">
<div class="col-sm-2">
</div>
<div class="col-sm-8 panel panel-body hvr hvr-pulse" style="border:1px solid teal;font-size:18px;padding-top:10px;">
<ol class="breadcrumb" style="background:#e1e1e1;border:1px solid;">
  <li style="font-size:25px;font-family:cursor;min-height:50px;text-align:center;line-height:50px;padding-left:40%;"><i>My Offers</i></li>
</ol>

</div>
<div class="col-sm-2">
</div>
  </div>
  </div>
</div>
</div>
<!-- End of parent    -->

<!-- go to top on the page    -->
<div class="row" style="padding-top:20px;">
<div class="col-sm-12" style="padding:0px;min-height:50px;background:#e1e1e1;">
<p ><a href="#head" style="text-decoration:none;color:#404040;font-family:cursor;"><h3 style="text-align:center;margin-top:5px;">Go to top</h3></a></p>
</div>
</div>

<!-- End th ecode-->


<!--Footer Code-->
<div class="row" style="padding-top:20px;">
<div class="col-sm-12 footer" style="background:#3a3a3a;min-height:200px;">

<!--part First-->
<div class="col-sm-3 header1" style="color:white;text-align:center;font-size:15px;text-align:justify;font-family:cursor;">
<h4 style="font-family:cursor;padding-top:25px;">Get To Know Us</h4>
<a href="#" style="text-decoration:none;color:white;">Career</a>
<br/>
<a href="#" style="text-decoration:none;color:white;">About Easy Day</a>
<br/>
<a href="#" style="text-decoration:none;color:white;">Investor Relationships</a>
</div>
<!--End -->
<!--part 2-->
<div class="col-sm-3 header2"  style="color:white;text-align:center;font-size:15px;text-align:justify;font-family:cursor;">
<h4 style="font-family:cursor;padding-top:25px;">Let Us Help You</h4>
<a href="#" style="text-decoration:none;color:white;">Payments</a><br/>
<a href="#" style="text-decoration:none;color:white;">Your account</a><br/>
<a href="#" style="text-decoration:none;color:white;">Your Orders</a><br/>
<a href="#" style="text-decoration:none;color:white;">Return& Replacements</a><br/>
<a href="#" style="text-decoration:none;color:white;">Help</a>

</div>
<!--End part 2-->
<!--part3-->
<div class="col-sm-3 header3"  style="color:white;text-align:center;font-size:15px;text-align:justify;font-family:cursor;">
<div class="row">
<div class="col-sm-12">
<h4 style="font-family:cursor;padding-top:25px;">Connect With Us</h4>
<div class="col-sm-6">
<a href="#" style="text-decoration:none;color:white;">Facebook</a><br/>
<a href="#" style="text-decoration:none;color:white;">Twitter</a><br/>
<a href="#" style="text-decoration:none;color:white;">Instagram</a><br/>
<a href="#" style="text-decoration:none;color:white;">Whatsapp</a><br/>
<a href="#" style="text-decoration:none;color:white;">Phone</a><br/>
<a href="#" style="text-decoration:none;color:white;">Email</a><br/>
</div>
<div class="col-sm-6">
<a href=""><div class="fa fa-facebook" style="font-size:20px;color:white;text-shadow:2px 2px 3px red;"></div></a><br/>
<a href=""><div class="fa fa-twitter" style="font-size:20px;color:white;text-shadow:2px 2px 3px red;"></div></a><br/>
<a href=""><div class="fa fa-instagram" style="font-size:20px;color:white;text-shadow:2px 2px 3px red;"></div></a><br/>
<a href=""><div class="fa fa-whatsapp" style="font-size:20px;color:white;text-shadow:2px 2px 3px red;"></div></a><br/>
<a href=""><div class="fa fa-phone" style="font-size:20px;color:white;text-shadow:2px 2px 3px red;"></div></a><br/>
<a href=""><div class="fa fa-envelope" style="font-size:20px;color:white;text-shadow:2px 2px 3px red;"></div></a><br/>
</div>
</div>
</div>
</div>
<!--End part3-->
<!--part4-->
<div class="col-sm-3 header1" style="color:white;text-align:center;font-size:15px;text-align:justify;font-family:cursor;padding-left:100px;">
<h4 style="font-family:cursor;padding-top:25px;">Policy</h4>
<a href="#" style="color:white;text-align:center;font-size:15pxfont-family:cursor;text-decoration:none;">Return Policy</a>
<br/>
<a href="#" style="color:white;text-align:center;font-size:15px;text-align:justify;font-family:cursor;text-decoration:none;">Term Of Use</a>
<br/>
<a href="#" style="color:white;text-align:center;font-size:15px;text-align:justify;font-family:cursor;text-decoration:none;">Security</a><br/>
<a href="#" style="color:white;text-align:center;font-size:15px;text-align:justify;font-family:cursor;text-decoration:none;">Privacy</a><br/>
<a href="#" style="color:white;text-align:center;font-size:15px;text-align:justify;font-family:cursor;text-decoration:none;">Sitemap</a><br/>
</div>
<!--End part4-->
</div>
</div>
<!--End of Footer Code-->
</div>

</body>
</html>