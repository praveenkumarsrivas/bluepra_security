<?php
$link=mysqli_connect("localhost","root","","blueprasecurity") or die("unable to connect");
//mysqli_select_db($link,"blueprasecurity") or die("no db found");

if(isset($_POST['submit']))
{
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
$phone=$_POST['phone'];
$dob=$_POST['dob'];
$city=$_POST['city'];
$state=$_POST['state'];
$zip=$_POST['zip'];
$email=$_POST['email'];
$dept=$_POST['dept'];
$design=$_POST['design'];
$regno=$_POST['regno'];
$pic=$_POST['pic'];
$block=$_POST['block'];
$room=$_POST['room'];
$course	=$_POST['course'];
$batch=$_POST['batch'];
$qr=$_POST['qr'];

$query="insert into adduser(fname,lname,phone,dob,city,state,zip,email,dept,design,qr,pic,block,room,course,batch,regno) values('$fname','$lname','$phone','$dob','$city','$state','$zip','$email','$dept','$design','$qr','$pic','$block','$room','$course','$batch','$regno')";
echo $query;
$run=mysqli_query($link,$query);

if($run)
{
	header("location:msg.html");
}
else
{
	echo "error:".mysqli_error($link);
}
}


?>