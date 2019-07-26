<!DOCTYPE html>
<html lang="en">
<head>
  <title>BluePRA_Security</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <link href="form/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="form/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css" />
<link href="form/css/style.css" rel="stylesheet" type="text/css" />

<style>
@import url('https://fonts.googleapis.com/css?family=Advent+Pro');
</style>
<!--css for registration form-->
<style>
#regForm {
  background-color: #ffffff;
  margin: 100px auto;
  font-family: advent pro;
  padding: 40px;
  width: 80%;
  min-width: 300px;
}

h1 {
  text-align: center;  
}

input {
  padding: 10px;
  width: 100%;
  font-size: 17px;
  font-family: Advent Pro;
  border: 1px solid #aaaaaa;
}

/* Mark input boxes that gets an error on validation: */
input.invalid {
  background-color: #ffdddd;
}

/* Hide all steps by default: */
.tab {
  display: none;
}

button {
  background-color: #b70101;
  color: #ffffff;
  border: none;
  padding:20px 20px;
  font-size: 17px;
  font-family: Advent Pro;
  cursor: pointer;
}

button:hover {
  opacity: 0.8;
}

#prevBtn {
  background-color: #b70101;
}

/* Make circles that indicate the steps of the form: */
.step {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbbbbb;
  border: none;  
  border-radius: 50%;
  display: inline-block;
  opacity: 0.5;
}

.step.active {
  opacity: 1;
}

/* Mark the steps that are finished and valid: */
.step.finish {
  background-color: #4CAF50;
}
</style>
<!--end of css registration form-->
<style>
    body,html{
      height:100%;

    }
    .bg{

      background-image:url(images/image11.jpg);
      background-repeat: no-repeat;
      height:100%;
      background-position:center;
      background-size: cover;
      background-opacity:0.10;
      background-color: black;
       background-attachment: fixed;


    }

    div.transbox {
  margin: 30px;
 
  border: 1px solid black;
  opacity: 0.8;
   background-color: #4F5A58;
  filter: alpha(opacity=60); /* For IE8 and earlier */
}

div.transbox p {
  margin: 5%;
  font-weight: bold;
 color: white;
}
  </style>

   <style>
  /* Make the image fully responsive */
  .carousel-inner img {
      width: 40%;
      height: 40%;
  }
  </style>

</head>
<body class="bg">

  <div class="container">
  <div class="jumbotron bg-transparent">
    <div class="row">
      <div class="col-sm-3"><h2 style="color:white;">
      <h2><a href="index.html" style="font-family: 'Advent Pro', sans-serif; color:#FEFEFE; font-weight: bolder; text-shadow: 0 0 20px, 0 0 20px;">BluePRA_Security</a></h2>
      </div>
      <div class="col-sm-3"></div>
      <div class="col-sm-6">
    <nav class="navbar navbar-expand-md bg-transparent navbar-dark">
  <a class="navbar-brand" style="font-family: 'Advent Pro', sans-serif; color:#FEFEFE; font-weight: bolder; text-shadow: 0 0 20px, 0 0 20px;" href="index.html">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" style="font-family: 'Advent Pro', sans-serif; color:#FEFEFE; font-weight: bolder; text-shadow: 0 0 20px, 0 0 20px;" href="loginentrance.php">Entrance</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" style="font-family: 'Advent Pro', sans-serif; color:#FEFEFE; font-weight: bolder; text-shadow: 0 0 20px, 0 0 20px;" href="oops.html">Library</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" style="font-family: 'Advent Pro', sans-serif; color:#FEFEFE; font-weight: bolder; text-shadow: 0 0 20px, 0 0 20px;" href="oops.html">Sports</a>
      </li>   
       <li class="nav-item">
        <a class="nav-link" style="font-family: 'Advent Pro', sans-serif; color:#FEFEFE; font-weight: bolder; text-shadow: 0 0 20px, 0 0 20px;" href="oops.html">About</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" style="font-family: 'Advent Pro', sans-serif; color:#FEFEFE; font-weight: bolder; text-shadow: 0 0 20px, 0 0 20px;" href="oops.html">Contact</a>
      </li> 
          <li>
     <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-family: 'Advent Pro', sans-serif; color:#FEFEFE; font-weight: bolder; text-shadow: 0 0 20px, 0 0 20px;">
          +NEW
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="registration.html" style="font-family: 'Advent Pro', sans-serif; color:#b70101; font-weight: bolder; text-shadow: 0 0 20px, 0 0 20px;">Entrance</a>
          <a class="dropdown-item" href="oops.html" style="font-family: 'Advent Pro', sans-serif; color:#b70101; font-weight: bolder; text-shadow: 0 0 20px, 0 0 20px;">Library</a>
          <a class="dropdown-item" href="oops.html" style="font-family: 'Advent Pro', sans-serif; color:#b70101; font-weight: bolder; text-shadow: 0 0 20px, 0 0 20px;">Sport</a>
          <a class="dropdown-item" href="oops.html" style="font-family: 'Advent Pro', sans-serif; color:#b70101; font-weight: bolder; text-shadow: 0 0 20px, 0 0 20px;">NITK Cop.</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="oops.html" style="font-family: 'Advent Pro', sans-serif; color:#b70101; font-weight: bolder; text-shadow: 0 0 20px, 0 0 20px;">Something else here</a>
        </div>
      </li>
    </li>
    </ul>
  </div>  
</nav>
      </div>
    </div>


</div>
<br>
<div class="container text-center">
<div class="row content">
  <div class="col-sm-3">
    <div class="second">
       <h5 style="color: #FEFEFE; font-family: advent pro;font-size: 22PX">"For happiness one needs security, but joy can spring like a flower even from the cliffs of despair"<br>-Anne Morrow Lindbergh</h5>
    </div>
  </div>
  <div class="col-sm-6">
 <div id="demo" class="carousel slide" data-ride="carousel">
  
  <!-- scan qr -->
<div>
    <strong style="font-family: 'Advent Pro'; color:white; font-weight: bolder; font-size: 20px;">SCAN YOUR QR CODE</strong>    
  </div>
  <br>
<form class="form-horizontal" action="" method="post"  id="reg_form">
  <div class="form-group">
        <label class="col-md-4 control-label" style="font-family: 'Advent Pro', sans-serif; color:white; font-weight: bolder; text-shadow: 0 0 20px, 0 0 30px;">QR/BARCODE</label>
        <div class="col-md-6  inputGroupContainer">
          <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-qrcode"></i></span>
            <input name="qr" placeholder="QR/BARCODE" class="form-control"  type="text">
          </div>
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-4 control-label"></label>
        <div class="col-md-4">
          <button type="submit" name="login" class="btn btn-warning" style="font-family: 'Advent Pro', sans-serif; color:white; font-weight: bolder; text-shadow: 0 0 20px, 0 0 20px;">Login<span class="glyphicon glyphicon-send"></span></button>
        </div>
      </div>
  <!-- end of login qr-->
</div>
</div>
  <div class="col-sm-3">
  <h1 style="font-family: 'Advent Pro', sans-serif; color:#FEFEFE; font-weight: bolder; font-size: 50px;">Why we are Best?</h1>
    <p style="font-family: 'Advent Pro', sans-serif; color:#FEFEFE;font-size: 12PX">We are here to provide you the best solution to secure you and your property with MODERN TECHNOLOGY to know more about us just access us on this website to know little bit, NOW the main  thing is that we believe in more making of relation instead of making customers</p>
    </div>
</div>
 </div>
</div>`
<footer class="container text-center">
 <span class="fa fa-twitter" style="font-size:25px;color:#FEFEFE"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <span class="fa fa-google-plus" style="font-size:25px;color:#FEFEFE"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <span class="fa fa-facebook" style="font-size:25px;color:#FEFEFE"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <span class="fa fa-instagram" style="font-size:25px;color:#FEFEFE"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <span class="fa fa-linkedin" style="font-size:25px;color:#FEFEFE"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</footer>
</body>
</html>

<?php
session_start();
$link=mysqli_connect("localhost","root","","blueprasecurity") or die("unable to connect");

if(isset($_POST['login']))
{
  $qr=$_POST['qr'];
$query="select count(qr) from adduser where qr='$qr'";

$result=mysqli_query($link,$query);
$row=mysqli_fetch_row($result);
if($row[0]==1)
{
  header("location:entrancereg.php");
$_SESSION['qr']=$_POST['qr'];
}
else
{
  echo "<script>alert('OOPS! WRONG QR/BAR CODE OR SCAN AGAIN')</script>";
}
}
?>