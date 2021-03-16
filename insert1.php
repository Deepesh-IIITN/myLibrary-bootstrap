<?php
session_start();
if(isset($_POST['mylibrary-signup-fname']))
{
$fname=$_POST['mylibrary-signup-fname'];
$lname=$_POST['mylibrary-signup-lname'];
$college=$_POST['mylibrary-signup-college'];
$email=$_POST['mylibrary-signup-email'];
$password=$_POST['mylibrary-signup-password'];
$cpassword=$_POST['mylibrary-signup-cpassword'];
$dob=$_POST['mylibrary-signup-birthday'];
$gender=$_POST['mylibrary-signup-gender'];
// $con = mysqli_connect('localhost','root','','library');
include("connection.php");
$query="INSERT INTO `teachers`(`first_name`, `last_name`, `college`, `birthday`, `email`, `password`, `gender`) VALUES ('$fname','$lname','$college','$dob','$email','$password','$gender')";
$run=mysqli_query($con,$query);
if($run==TRUE)
{
	$query1="SELECT * FROM `teachers` WHERE email='$email';";
	$run1=mysqli_query($con,$query1);
	$data=mysqli_fetch_assoc($run1);
	$str=strval($data['id']);
	$str1="ti".$fname."".$str;
	$str="t".$fname."".$str;
	$str=strtolower($str);
	$sql = "CREATE TABLE $str (
            id INT(50) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            bookno VARCHAR(30) NOT NULL,
            name VARCHAR(30) NOT NULL,
			roll VARCHAR(30),
            email VARCHAR(30),
			request_type VARCHAR(30),
			reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";
    $str1=strtolower($str1);
	$sql1 = "CREATE TABLE $str1 (
            id INT(50) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            bookno VARCHAR(30) NOT NULL,
            name VARCHAR(30) NOT NULL,
			roll VARCHAR(30),
            email VARCHAR(30),
			reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";
$con->query($sql);
$con->query($sql1);
	?>
	<script type="text/javascript">alert("Registered successfully");
     window.location.href="index.php";</script>
	<?php
}
else
{
	?>
	<script type="text/javascript">alert("Registration has failed.");
     window.location.href="index.php";</script>
	<?php
}
}
else
{
	header('location:index.php');
}
?>