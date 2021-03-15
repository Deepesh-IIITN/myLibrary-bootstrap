<?php
session_start();
if(isset($_POST['mylibrary-login-email']) && isset($_POST['mylibrary-login-password']))
{
	$email=$_POST['mylibrary-login-email'];
	$password=$_POST['mylibrary-login-password'];
	$flag=0;
	include("connection.php");
	$query="SELECT * FROM `students`";
	$query1="SELECT * FROM `teachers`";
	$run1=mysqli_query($con,$query1);
	$run=mysqli_query($con,$query);
	if($run==TRUE || $run1==TRUE)
	{
		while($data=mysqli_fetch_assoc($run))
		{
			if($email==$data['email'] && $password==$data['password'])
			{
				$_SESSION['stu_name']=$data['first_name'];
				$_SESSION['stu_id']=$data['id'];
				$_SESSION['stu_email']=$data['email'];
				echo "<script>window.location = 'student.php';</script>";
				$flag=1;
				exit();
			}
		}
		while($data=mysqli_fetch_assoc($run1))
		{
			if($email==$data['email'] && $password==$data['password'])
			{
				$_SESSION['lid']=$data['id'];
				$_SESSION['lname']=$data['first_name'];
				$_SESSION['liname']=$data['first_name']." ".$data['last_name'];
				$_SESSION['lemail']=$data['email'];
				$_SESSION['lcollege']=$data['college'];
				$_SESSION['lbd']=$data['birthday'];
				$str="";
				$str=strval($data['id']);
				$str=$data['first_name'].$str;
				$_SESSION['t_string']="t".$str;
				$_SESSION['ti_string']="ti".$str;
				echo "<script>window.location = 'librarian.php';</script>";
				exit();
			}
		}
	}
	else
	{
		echo"<script> alert('login Failed');</script>";
		$flag=2;
	}
	if($flag==0)
	{
		echo"<script>alert('Email or Password is incorrect');</script>";
		echo "<script>window.location = 'index.php';</script>";
	}
}
?>