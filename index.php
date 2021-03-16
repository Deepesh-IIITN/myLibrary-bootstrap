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
    <title>myLibrary</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
</head>
<style>
.card {
    margin: auto;
}
</style>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="">myLibrary</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <hr>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login.php">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="signup.php">Signup</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container my-5 py-5">
        <div class="row">
            <div class="col-lg-6 py-lg-5 py-md-2 px-lg-5 text-lg-left text-center">
                <h2 class="mt-lg-5 pt-lg-4">Welcome to myLibrary</h2>
                <h5>India's largest Library Managemenet System</h5>
                <p>Here a Librarian can manage transactions of books (Issue, Re-issue, Return).</p>
            </div>
            <div class="col-lg-6 my-md-2 py-lg-5 py-md-2 pr-lg-5 pr-md-0">
                <img class="img-fluid" src="images/library.jpeg" alt="">
            </div>
        </div>
    </div>
    <div class="bg-light">
        <div class="container my-5">
            <h2 class="mt-5 py-5 text-center"> Services </h2>
            <div class="row">
                <div class="col-lg-4 col-md-6 py-4">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="images/service-1.jpg" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text"> Librarian can issue, re-issue and return books.</p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 py-4">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="images/service-2.jpg" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text"> Librarian can keep records of all transactions with dates.</p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 py-4">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="images/service-3.jpg" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">It will save the time for each query(issue, re-issue, return).</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>