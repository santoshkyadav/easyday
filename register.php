<?php
//error_reporting(0);

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
<div class="row" >
<!--Header-->
<div class="col-sm-12 header" id="head" style="padding:0px;;min-height:80px;" >
<div class="col-sm-2 part1" style="padding:0px;min-height:80px;">
<img src="Images/logo.png" style="height:80px;width:100%;"/>
</div>
<div class="col-sm-8 part2" style="padding:0px;min-height:80px;background:#e1e1e1;">
<h1 style="text-align:center;color:#404040;text-shadow:2px 3px 3px ;font-family:cursor;">Welcome To Easy day</h1>
</div>
<div class="col-sm-2 part3" style="padding:0px;min-height:80px;background:#e1e1e1;">
<a href="#" style="text-shadow:2px 3px 3px ;font-family:cursor;color:#404040;"></a>
</div>
</div>
<!--End Header-->
</div>
<div class="row" >
<div class="col-sm-12 menu" style="padding:0px;">
<nav class="navbar navbar-default">
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
      <ul class="nav navbar-nav" style="font-size:20px;">
	  <li ><a href="index.php" >Home</a></li>
	  <li><a href="aboutus.php">About Us</a></li>
       <li><a href="register.php" >Register</a></li>
        <li><a href="login.php">Login</a></li>
		<li><a href="product.php">Product</a></li>
		
        
      </ul>
      <form class="navbar-form navbar-left" role="search" style="font-size:20px;padding-left:15%;">
        <div class="form-group" >
          <input type="text" class="form-control" placeholder="Search" style="width:350px;font-size:18px;">
        </div>
        <button type="submit" class="btn btn-default" style="font-size:15px;background:#ff7d7d;color:white;">Submit</button>
		
      </form>
	  
        
	  <ul class="nav navbar-nav navbar-right" style="font-size:20px;">
        <li><a href="contactus.php" >Contact Us</a></li>
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
<!-- product heading-->
<div class="row" style="padding-top:25px;background:#e1e1e1;">
<div class="col-sm-12">
<div class="col-sm-2"></div>
<div class="col-sm-8 panel panel-body hvr hvr-pulse" style="border:1px solid teal;font-size:18px;padding-top:10px;">
<ol class="breadcrumb" style="background:#e1e1e1;">
  <li style="font-size:25px;font-family:cursor;min-height:50px;text-align:center;line-height:50px;padding-left:40%;"><i>Registration Form</i></li>
 
</ol>
<div class="col-sm-12">
<form action="registercode.php" method="post">
<label style="font-size:18px;font-family:cursor;">Name</label>
<input type="text" class="form-control" placeholder="Enter Name" name="name"/>
<label style="font-size:18px;font-family:cursor;">Father Name</label>
<input type="text" class="form-control" placeholder="Enter Father Name" name="fname"/>
<label style="font-size:18px;font-family:cursor;">Gender</label>
<div class="radio-inline">
<label style="font-size:18px;font-family:cursor;" ><input type="radio" value="male" name="gender" />Male</label>
</div>
<div class="radio-inline">
<label style="font-size:18px;font-family:cursor;"><input type="radio" value="female" name="gender" />Female</label>
</div>
<br/>
<label style="font-size:18px;font-family:cursor;">Date Of Birth</label>
<input type="date" class="form-control" name="dob"/>
<label style="font-size:18px;font-family:cursor;">Email</label>
<input type="email" class="form-control" name="email" placeholder="someone@gmail.com"/>
<label style="font-size:18px;font-family:cursor;">Password</label>
<input type="password" class="form-control" name="password" placeholder="Enter Password"/>
<label style="font-size:18px;font-family:cursor;">Confirm Password</label>
<input type="password" class="form-control" name="confirm" placeholder="Confirm  Password"/>
<label style="font-size:18px;font-family:cursor;">Mobile No</label>
<input type="number" class="form-control" name="mobile" placeholder="Enter Mobile No"/>
<label style="font-size:18px;font-family:cursor;">Address</label>
<textarea class="form-control" name="address" placeholder="Enter Address here"></textarea>
<label style="font-size:18px;font-family:cursor;">Select City</label>
<select class="form-control" name="city">
<option value="" >Select Any City</option>
<option value="Gonda">Gonda</option>
<option value="Lko">Lko</option>
<option value="Delhi">Delhi</option>
<option value="Patna">Patna</option>
<option value="Varanshi">Varanshi</option>
</select>
<label style="font-size:18px;font-family:cursor;">Pin Code</label>
<input type="number" class="form-control" name="pin" placeholder="Enter Pin Code"/>
<input type="submit" class="btn btn-default navbar-btn btn-block btn-lg" style="color:#404040;font-family:cursor;font-size:20px;background:#e1e1e1;"/>
<a href="login.php" style="text-decoration:none;"><input type="button" value="Sign In"class="btn btn-default navbar-btn btn-block btn-lg" style="color:#404040;font-family:cursor;font-size:20px;background:#e1e1e1;"/></a>
</form>
</div>
</div>

</div>
</div>
<!-- end of product heading-->

<!-- End of parent    -->

<!-- go to top on the page    -->
<div class="row" style="padding-top:20px;">
<div class="col-sm-12" style="padding:0px;min-height:50px;background:#e1e1e1;">
<p ><a href="#head" style="text-decoration:none;color:#404040;font-family:cursor;"><h3 style="text-align:center;margin-top:5px;">Back to top</h3></a></p>
</div>
</div>

<!-- End th ecode-->


<!--Footer Code-->
<div class="row" style="padding-top:20px;">
<div class="col-sm-12 footer" style="background:#3a3a3a;min-height:200px;">

<!--part First-->
<div class="col-sm-3 header1" style="color:white;text-align:center;font-size:15px;text-align:justify;font-family:cursor;">
<h4 style="font-family:cursor;padding-top:25px;">Get To Know Us</h4>
<a href="#" style="color:white;text-align:center;font-size:15px;text-align:justify;font-family:cursor;text-decoration:none;">Career</a>
<br/>
<a href="#" style="color:white;text-align:center;font-size:15px;text-align:justify;font-family:cursor;text-decoration:none;">About Easy Day</a>
<br/>
<a href="#" style="color:white;text-align:center;font-size:15px;text-align:justify;font-family:cursor;text-decoration:none;">Investor Relationships</a>
</div>
<!--End -->
<!--part 2-->
<div class="col-sm-3 header2"  style="color:white;text-align:center;font-size:15px;text-align:justify;font-family:cursor;">
<h4 style="font-family:cursor;padding-top:25px;">Let Us Help You</h4>
<a href="#" style="color:white;text-align:center;font-size:15px;text-align:justify;font-family:cursor;text-decoration:none;">Payments</a><br/>
<a href="#" style="color:white;text-align:center;font-size:15px;text-align:justify;font-family:cursor;text-decoration:none;">Your account</a><br/>
<a href="#" style="color:white;text-align:center;font-size:15px;text-align:justify;font-family:cursor;text-decoration:none;">Your Orders</a><br/>
<a href="#" style="color:white;text-align:center;font-size:15px;text-align:justify;font-family:cursor;text-decoration:none;">Return& Replacements</a><br/>
<a href="#" style="color:white;text-align:center;font-size:15px;text-align:justify;font-family:cursor;text-decoration:none;">Help</a>

</div>
<!--End part 2-->
<!--part3-->
<div class="col-sm-3 header3"  style="color:white;text-align:center;font-size:15px;text-align:justify;font-family:cursor;">
<h4 style="font-family:cursor;padding-top:25px;">Connect With Us</h4>
<div class="row">
<div class="col-sm-12">
<div class="col-sm-6">
<a href="#" style="color:white;text-align:center;font-size:15px;text-align:justify;font-family:cursor;text-decoration:none;">Facebook</a><br/>
<a href="#" style="color:white;text-align:center;font-size:15px;text-align:justify;font-family:cursor;text-decoration:none;">Twitter</a><br/>
<a href="#" style="color:white;text-align:center;font-size:15px;text-align:justify;font-family:cursor;text-decoration:none;">Instagram</a><br/>
<a href="#" style="color:white;text-align:center;font-size:15px;text-align:justify;font-family:cursor;text-decoration:none;">Whatsapp</a><br/>
<a href="#" style="color:white;text-align:center;font-size:15px;text-align:justify;font-family:cursor;text-decoration:none;">Phone</a><br/>
<a href="#" style="color:white;text-align:center;font-size:15px;text-align:justify;font-family:cursor;text-decoration:none;">Email</a><br/>
</div>
<div class="col-sm-6">
<a href=""><div class="fa fa-facebook" style="font-size:20px;color:white;text-shadow:2px 2px 3px red;;"></div></a><br/>
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