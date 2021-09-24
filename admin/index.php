<?php
error_reporting(0);
$msg=$_REQUEST['msg'];
if($msg==1)
{
	//echo "Invalid UserId Or Password";
	echo "<script>alert('Invalid UserId Or Password');</script>";

}
if($msg==2)
{
	//echo "Plz Login First";
	echo "<script>alert('Plz Login First ');</script>";
}
if($msg==3)
{
	//echo "Plz Login First";
	echo "<script>alert('Logout Successfully ');</script>";
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

<!-- End Of Menu code-->

<div class="row" style="padding-top:25px;background:#e1e1e1;min-height:660px;padding-top:90px;">
<div class="col-sm-12">
<div class="col-sm-2"></div>
<div class="col-sm-8 panel panel-body hvr hvr-pulse" style="border:1px solid teal;font-size:18px;padding-top:10px;">
<ol class="breadcrumb" style="background:#e1e1e1;">
  <li style="font-size:25px;font-family:cursor;min-height:50px;text-align:center;line-height:50px;padding-left:40%;color:#404040;"><i>Admin Login </i></li>
</ol>
<form action="adminlogincode.php" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1" style="font-size:18px;font-family:cursor;">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" name="email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1" style="font-size:18px;font-family:cursor;">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
  </div>
  
  <div class="checkbox">
    <label style="font-size:18px;font-family:cursor;">
     <input type="checkbox"> Remember me
    </label>
  </div>
  <button type="submit" class="btn btn-default navbar-btn btn-block btn-lg" style="color:#404040;font-family:cursor;font-size:20px;background:#e1e1e1;">Log In</button>
   <a href="#" style="text-decoration:none;"><button type="submit" class="btn btn-default navbar-btn btn-block btn-lg" style="font-family:cursor;font-size:20px;">Forgotten your password?</button></a>
   <a href="../index.php" style="text-decoration:none;"><input type="button" value="Back to Home"class="btn btn-default navbar-btn btn-block btn-lg" style="font-family:cursor;font-size:20px;"></button></a>
</form>
</div>

</div>
</div>


</div>

</body>
</html>