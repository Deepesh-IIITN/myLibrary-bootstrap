<?php
session_start();
if(isset($_POST['book-no']))
{
$bookno=$_POST['book-no'];
$name=$_SESSION['sname'];
$roll=$_SESSION['rn'];
$email=$_SESSION['email'];
$str1=$_SESSION['string'];
include("connection.php");
$str1=strtolower($str1);
$query1="INSERT INTO `$str1`(`bookno`) VALUES ('$bookno')";
$run1=mysqli_query($con,$query1);
$temp=strval($_SESSION['lid']);
$temp1=$_SESSION['lname'];
$str2="t".$temp1."".$temp;
$variable="Issue";
$str2=strtolower($str2);
$query2="INSERT INTO `$str2`(`bookno`, `name`, `roll`, `email` ,`request_type`) VALUES ('$bookno','$name','$roll','$email','$variable')";
$run2=mysqli_query($con,$query2);
$str3="ti".$temp1."".$temp;
$str3=strtolower($str3);
$query3="INSERT INTO `$str3`(`bookno`, `name`, `roll`, `email`) VALUES ('$bookno','$name','$roll','$email')";
$run3=mysqli_query($con,$query3);

if($run1==TRUE && $run2==TRUE && $run3==TRUE)
{ 
 	header('location:librarian.php');
}
else
{
    ?> <p style="color:red">Something Went Wrong!</p><?php
}
}
else
{
	header('location:index.php');
}		
?>