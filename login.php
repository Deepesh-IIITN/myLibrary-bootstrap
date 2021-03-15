<?php
session_start();
error_reporting(0);
if($_SESSION['lid']==true)
{
	header('location:librarian.php');	
}
else
{
	if($_SESSION['stu_id']==true)
    {
	   header('location:student.php');	
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
        integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="icon" href="images/favicon.png">
    <title>myLibrary | Login</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
</head>
<style>
.card {
    margin: auto;
}
</style>

<body>
    <div class="container my-5 py-5">
        <div class="row">
            <div class="col-lg-12">
                <div class="card" style="width: 22rem;">
                    <div class="card-body">
                        <h5 class="card-title text-center">Login</h5>
                        <hr>
                        <form name="student-form" id="student-form" action="studentlogin.php" method="post">

                            <div class="form-group">
                                <label for="mylibrary-login-email">Email address</label>
                                <input type="email" name="mylibrary-login-email" class="form-control"
                                    id="mylibrary-login-email" placeholder="Enter email">
                            </div>
                            <div class="form-group">
                                <label for="mylibrary-login-password">Password</label>
                                <input type="password" name="mylibrary-login-password" class="form-control"
                                    id="mylibrary-login-password" placeholder="Enter Password">
                            </div>

                            <button type="submit" class="btn btn-primary w-100">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>