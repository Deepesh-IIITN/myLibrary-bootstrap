<?php
session_start();
if(isset($_POST['mylibrary-signup-fname']))
{
$fname=$_POST['mylibrary-signup-fname'];
$lname=$_POST['mylibrary-signup-lname'];
$college=$_POST['mylibrary-signup-college'];
$roll=$_POST['mylibrary-signup-roll-no'];
$email=$_POST['mylibrary-signup-email'];
$password=$_POST['mylibrary-signup-password'];
$cpassword=$_POST['mylibrary-signup-cpassword'];
$dob=$_POST['mylibrary-signup-birthday'];
$gender=$_POST['mylibrary-signup-gender'];
$uid=$_POST['mylibrary-signup-lid'];
include("connection.php");
$query="INSERT INTO `students`(`first_name`, `last_name`, `college`, `Roll_no`, `email`, `password`, `birthday`, `gender`, `uid`) VALUES ('$fname','$lname','$college','$roll','$email','$password','$dob','$gender','$uid')";
$run=mysqli_query($con,$query);
if($run==TRUE)
{

	$query1="SELECT * FROM students WHERE email='$email';";
	$run1=mysqli_query($con,$query1);
	$data=mysqli_fetch_assoc($run1);
	$str=strval($data['id']);
	$str="s".$fname."".$str;
	$sql = "CREATE TABLE $str (
            id INT(50) AUTO_INCREMENT PRIMARY KEY,
            bookno INT(30) NOT NULL,
			reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";
$run1=mysqli_query($con,$sql);
?>
<script type="text/javascript">
alert("Registered successfully");
window.location.href = "index.php";
</script>
<?php
}
else
{
	?>
<script type="text/javascript">
     alert("Registration has failed.");
</script>
<?php
}
}
else
{
	header('location:index.php');
}
?>