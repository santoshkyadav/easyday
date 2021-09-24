<?php
$id=$_REQUEST['id'];
echo $id;
include("connection.php");
$query="select * from tbl_category where category_id='$id'";
$res=mysql_query($query);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
?>
<html>
<head>
<title></title>
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
<div class="col-sm-8 part2" style="padding:0px;min-height:80px;background:#e1e1e1;">
<h1 style="text-align:center;color:#404040;text-shadow:2px 3px 3px ;font-family:cursor;">Welcome To Admin Zone</h1>
</div>
<div class="col-sm-2 part3" style="padding:0px;min-height:80px;background:#e1e1e1;">
<img src="images/admin2.png" height="80px" width="100%"/>
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
      <ul class="nav navbar-nav" style="font-size:20px;">
	  <li ><a href="addcatagory.php" >Add Catagory</a></li>
	  <li><a href="addproduct.php">Add Product</a></li>
       <li><a href="viewproduct.php" >View Product</a></li>
        <li><a href="viewuser.php">View Users</a></li>
		<li><a href="viewcontact.php">View Contact Us Details</a></li>
		
        
      </ul>
      
	  
	  
	  
	  
      
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</div>
</div>
<!-- End Of Menu code-->

<div class="row" style="padding-top:25px;background:#e1e1e1;min-height:360px;padding-top:50px;">
<div class="col-sm-12">
<div class="col-sm-2"></div>
<div class="col-sm-8 panel panel-body hvr hvr-pulse" style="border:1px solid teal;font-size:18px;padding-top:25px;">
<ol class="breadcrumb" style="background:#9595ff;">
  <li style="font-size:25px;font-family:cursor;min-height:50px;text-align:center;line-height:50px;padding-left:40%;"><i>Edit Catagory</i></li>
</ol>
<form action="editcode.php?id=<?php echo $row['category_id'];?>" method="post">


  <div class="form-group">
    <label for="exampleInputEmail1" style="font-size:18px;font-family:cursor;">Catagory Name</label>
    <input type="text" class="form-control"  value="<?php echo $row['categoryname'];?>" name="category">
  </div>
  
  
  
  <button type="submit" class="btn btn-default navbar-btn btn-lg btn-block" style="color:white;font-family:cursor;font-size:20px;background:#7575ff;">Update</button>
   
</form>
<?php
}
?>
</div>

</div>
</div>





<!-- End th ecode-->


<!--Footer Code-->
<div class="row" style="padding-top:20px;">
<div class="col-sm-12 footer" style="background:#3a3a3a;min-height:100px;">
<div class="col-sm-6">

</div>
<div class="col-sm-6">
<p style="color:white;min-height:100px;font-size:20px;">Developed By : Santosh Kumar Yadav</p>
</div>




</div>
</div>
</div>
</body>
</html>