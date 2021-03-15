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
    <title>myLibrary | Signup</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
</head>
<style>
.card {
    margin: auto;
    width: 22rem;
}

@media screen and (max-width:991px) {
    .card {
        width: 18rem;
    }
}

select option {
    font-size: 11px;
}
</style>

<body>
    <div class="container my-5 py-5">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-center">Sign up</h5>
                        <hr>
                        <!-- Student Form -->
                        <div id="student-form-div">
                            <div class="text-center">
                                <button id="student-button" type="button" class="btn btn-primary">Student</button>
                                <button id="librarian-button" type="button" class="btn">Librarian</button>
                            </div>
                            <hr>
                            <h6 class="text-center"> Student Form </h6>
                            <form name="student-form" id="student-form" action="insert2.php" method="post">
                                <div class="form-group">
                                    <label for="mylibrary-signup-fname">First Name</label>
                                    <input type="text" name="mylibrary-signup-fname" class="form-control"
                                        id="mylibrary-signup-fname" placeholder="Enter First name">
                                </div>
                                <div class="form-group">
                                    <label for="mylibrary-signup-lname">Last Name</label>
                                    <input type="text" name="mylibrary-signup-lname" class="form-control"
                                        id="mylibrary-signup-lname" placeholder="Enter Last name">
                                </div>
                                <div class="form-group">
                                    <label for="mylibrary-signup-college">College Name</label>
                                    <select class="form-control" id='mylibrary-signup-college'
                                        name="mylibrary-signup-college" required>
                                        <option value='none' selected disabled hidden>College name</option>
                                        <option value='Other College'>Other College</option>
                                        <option value='INDIAN INSTITUTE OF INFORMATION TECHNOLOGY,NAGPUR'>INDIAN
                                            INSTITUTE OF INFORMATION TECHNOLOGY,NAGPUR</option>
                                        <option value='VISVESVARAYA NATIONAL INSTITUTE OF TECHNOLOGY,NAGPUR'>
                                            VISVESVARAYA NATIONAL INSTITUTE OF TECHNOLOGY,NAGPUR</option>
                                        <option value='SHRI RAMDEOBABA COLLEGE OF ENGINEERING AND MANAGEMENT,NAGPUR'>
                                            SHRI RAMDEOBABA COLLEGE OF ENGINEERING AND MANAGEMENT,NAGPUR</option>
                                        <option value='ITM COLLEGE OF ENGINEERING,NAGPUR'>ITM COLLEGE OF
                                            ENGINEERING,NAGPUR</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="mylibrary-signup-roll-no">Enrollment Number</label>
                                    <input type="text" name="mylibrary-signup-roll-no" class="form-control"
                                        id="mylibrary-signup-roll-no" placeholder="College / School Roll No.">
                                </div>
                                <div class="form-group">
                                    <label for="mylibrary-signup-email">Email address</label>
                                    <input type="email" name="mylibrary-signup-email" class="form-control"
                                        id="mylibrary-signup-email" placeholder="Enter email">
                                </div>
                                <div class="form-group">
                                    <label for="mylibrary-signup-password">Password</label>
                                    <input type="password" name="mylibrary-signup-password" class="form-control"
                                        id="mylibrary-signup-password" placeholder="Enter Password">
                                </div>
                                <div class="form-group">
                                    <label for="mylibrary-signup-cpassword">Confirm Password</label>
                                    <input type="password" name="mylibrary-signup-cpassword" class="form-control"
                                        id="mylibrary-signup-cpassword" placeholder="Enter Confirm Password">
                                </div>
                                <div class="form-group">
                                    <label for="mylibrary-signup-birthday">Birthday</label>
                                    <input type="date" name="mylibrary-signup-birthday" class="form-control"
                                        id="mylibrary-signup-birthday">
                                </div>
                                <div class="form-group">
                                    <label>Gender:</label>
                                    <input type="radio" name="mylibrary-signup-gender" value="female" checked="checked"> Female
                                    <input type="radio" name="mylibrary-signup-gender" value="male"> Male
                                </div>
                                <div class="form-group">
                                    <label for="mylibrary-signup-lid">Librarian ID</label>
                                    <input type="text" name="mylibrary-signup-lid" class="form-control"
                                        id="mylibrary-signup-lid" placeholder="Enter Librarian UID">
                                </div>
                                <button type="submit" class="btn btn-primary w-100">Submit</button>
                            </form>
                        </div>
                        <!--  -->

                        <!-- Librarian Form -->
                        <div id="librarian-form-div">
                            <div class="text-center">
                                <button id="student-button1" type="button" class="btn">Student</button>
                                <button id="librarian-button1" type="button" class="btn btn-primary">Librarian</button>
                            </div>
                            <hr>
                            <h6 class="text-center"> Librarian Form </h6>
                            <form name="librarian-form" id="librarian-form" action="insert1.php" method="post">
                                <div class="form-group">
                                    <label for="mylibrary-signup-fname">First Name</label>
                                    <input type="text" name="mylibrary-signup-fname" class="form-control"
                                        id="mylibrary-signup-fname" placeholder="Enter First name">
                                </div>
                                <div class="form-group">
                                    <label for="mylibrary-signup-lname">Last Name</label>
                                    <input type="text" name="mylibrary-signup-lname" class="form-control"
                                        id="mylibrary-signup-lname" placeholder="Enter Last name">
                                </div>
                                <div class="form-group">
                                    <label for="mylibrary-signup-college">College Name</label>
                                    <select class="form-control" id='mylibrary-signup-college'
                                        name="mylibrary-signup-college" required>
                                        <option value='none' selected disabled hidden>College name</option>
                                        <option value='Other College'>Other College</option>
                                        <option value='INDIAN INSTITUTE OF INFORMATION TECHNOLOGY,NAGPUR'>INDIAN
                                            INSTITUTE OF INFORMATION TECHNOLOGY,NAGPUR</option>
                                        <option value='VISVESVARAYA NATIONAL INSTITUTE OF TECHNOLOGY,NAGPUR'>
                                            VISVESVARAYA NATIONAL INSTITUTE OF TECHNOLOGY,NAGPUR</option>
                                        <option value='SHRI RAMDEOBABA COLLEGE OF ENGINEERING AND MANAGEMENT,NAGPUR'>
                                            SHRI RAMDEOBABA COLLEGE OF ENGINEERING AND MANAGEMENT,NAGPUR</option>
                                        <option value='ITM COLLEGE OF ENGINEERING,NAGPUR'>ITM COLLEGE OF
                                            ENGINEERING,NAGPUR</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="mylibrary-signup-email">Email address</label>
                                    <input type="email" name="mylibrary-signup-email" class="form-control"
                                        id="mylibrary-signup-email" placeholder="Enter email">
                                </div>
                                <div class="form-group">
                                    <label for="mylibrary-signup-password">Password</label>
                                    <input type="password" name="mylibrary-signup-password" class="form-control"
                                        id="mylibrary-signup-password" placeholder="Enter Password">
                                </div>
                                <div class="form-group">
                                    <label for="mylibrary-signup-cpassword">Confirm Password</label>
                                    <input type="password" name="mylibrary-signup-cpassword" class="form-control"
                                        id="mylibrary-signup-cpassword" placeholder="Enter Confirm Password">
                                </div>
                                <div class="form-group">
                                    <label for="mylibrary-signup-birthday">Birthday</label>
                                    <input type="date" name="mylibrary-signup-birthday" class="form-control"
                                        id="mylibrary-signup-birthday">
                                </div>
                                <div class="form-group">
                                    <label>Gender:</label>
                                    <input type="radio" name="mylibrary-signup-gender" value="female" checked="checked"> Female
                                    <input type="radio" name="mylibrary-signup-gender" value="male"> Male
                                </div>

                                <button type="submit" class="btn btn-primary w-100">Submit</button>
                            </form>
                        </div>
                        <!--  -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
    $("#librarian-form-div").hide();

    $("#student-button").on("click", function() {
        $("#librarian-form-div").hide();
        $("#student-form-div").show();
    });

    $("#librarian-button").on("click", function() {
        $("#librarian-form-div").show();
        $("#student-form-div").hide();
    });
    $("#student-button1").on("click", function() {
        $("#librarian-form-div").hide();
        $("#student-form-div").show();
    });

    $("#librarian-button1").on("click", function() {
        $("#librarian-form-div").show();
        $("#student-form-div").hide();
    });
    </script>
</body>

</html>