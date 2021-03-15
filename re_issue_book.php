<?php 
session_start();
if(isset($_GET['book']))
{
$str1=$_SESSION['string'];
$bookno = $_GET['book'];
$name=$_SESSION['sname'];
$roll=$_SESSION['rn'];
$email=$_SESSION['email'];

include("connection.php");
date_default_timezone_set("Asia/Kolkata");
$var=date("Y-m-d H:i:s");
$str1=strtolower($str1);
$query ="UPDATE $str1 SET reg_date='$var' WHERE bookno='$bookno'";
$run=mysqli_query($con,$query);

$temp=strval($_SESSION['lid']);
$temp1=$_SESSION['lname'];
$str2="t".$temp1."".$temp;
$variable="Re-issue";
$str2=strtolower($str2);
$query2="INSERT INTO `$str2`(`bookno`, `name`, `roll`, `email` ,`request_type`) VALUES ('$bookno','$name','$roll','$email','$variable')";
$run2=mysqli_query($con,$query2);

$str3="ti".$temp1."".$temp;
$str3=strtolower($str3);
$query3="UPDATE $str3 SET  reg_date='$var' WHERE bookno='$bookno' AND email='$email'";
$run3=mysqli_query($con,$query3);


if($run==TRUE && $run2==TRUE && $run3==TRUE)
{ 
   header('location:librarian.php');
}
else
{
	echo "<center><h2 style='color:red;'>Something Went Wrong !!!</h2></center>";	
}
}
else
{
	header('location:index.php');
}
?>