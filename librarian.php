<?php
session_start();
// error_reporting(0);
if($_SESSION['lid']==false)
{
	header('location:index.php');	
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
    <link rel="icon" href="images/favicon2.png">
    <title>d-library | Librarian</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
</head>
<style>
.card {
    margin: auto;
}

.transaction .table {
    -webkit-border-horizontal-spacing: 20px;
    -webkit-border-vertical-spacing: 20px;
}

.transaction .table tbody td {
    font-family: 'Montserrat', sans-serif;
    padding: 20px;
    font-size: 15px;
}

.transaction .table tr {
    text-align: center;
}

.transaction .table tr th {
    text-align: center;
    background: #272c33;
    color: white;
}

.transaction .table-responsive {
    overflow-y: auto;
    max-height: 390px;
}

.stu_info {
    padding: 1rem;
    border: 1px solid lightgrey;
    margin: auto;
}
</style>
<!------------------------------------- Profile Page ------------------------------------------->
<style>
.profile {
    border: 1px solid #e0e0e0;
}

.profile img {
    height: 130px;
    width: 130px;
    border-radius: 50%;
    margin-top: 40px;
    border: 1px solid lightgrey;

}

.profile table {
    margin-top: 50px;
}
</style>

<body>
    <?php
       $home="active";
       $issued_books="";
       $all_transactions="";
       $profile="";
       $logout="";
       include("librarian-navbar.php");
    ?>
    <div>
        <div class="container my-5">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="stu_info d-flex">
                                <div class="m-auto">
                                    <form class="form-inline"
                                        action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                                        <label for="email">Student Roll No: </label>
                                        <input type="text" class="form-control mx-sm-2 my-sm-0 my-3 "
                                            placeholder="Ex: bt18cse086" name="student-roll" required>
                                        <button type="submit" class="btn btn-dark">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['student-roll'])) 
                    { 
                        include("connection.php");
                        $stu_roll =$_POST['student-roll'];
                        $lid=$_SESSION['lid'];
                        $query="SELECT * FROM students WHERE uid = '$lid' AND Roll_no ='$stu_roll'";
                        $run=mysqli_query($con,$query);
                        $num=mysqli_num_rows($run);
                        if($num>0)
                        {
                            $data=mysqli_fetch_assoc($run);
                            $id=$data['id'];
                            $name=$data['first_name'];
                            $_SESSION['sname']=$data['first_name']." ".$data['last_name'];
                            $_SESSION['rn']=$data['Roll_no'];
                            $_SESSION['email']=$data['email'];
                            $_SESSION['f_name']=$data['first_name'];
                            $_SESSION['s_id']=$data['id'];
                        }
                        else
                        {
                            echo "<p class='text-center' style='color:red;'> Student is not registered </p>";
    
                            unset($_SESSION['f_name']);
                            unset($_SESSION['s_id']);
                            unset($_SESSION['string']);
                            unset($_SESSION['sname']);
                            unset($_SESSION['rn']);
                            unset($_SESSION['email']);
                        }
                        
                    }
                            ?>
                    
                    <!--  -->
                    <?php 
                    if(isset($_SESSION['s_id']))
                    {
                    include("connection.php");
                    $id=$_SESSION['s_id'];
                    $query="SELECT * FROM students WHERE id='$id'";
                    $run=mysqli_query($con,$query);
                    $data=mysqli_fetch_assoc($run);
                    ?>
                    <div class="profile my-5">
                        <div class="row">
                            <div class="col-lg-4">
                                <center>
                                    <img src="data:image/jpeg;base64,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"
                                        class="img-responsive" alt="Deepesh Kurmi">

                                    <p style="margin-top:15px;font-size:17px;"><u>Deepesh</u> &nbsp <u>Kurmi</u></p>

                                </center>
                            </div>
                            <div class="col-lg-8" style="border-left:2px solid #e0e0e0;">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <p><b>Name</b><br><?php print($data['first_name']." ".$data['last_name']);?>
                                                <p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p><b>Email</b><br><?php print($data['email']);?>
                                                <p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p><b>Enrollment No.</b><br><?php print($data['Roll_no']);?>
                                                <p>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!--  -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="transaction">
                                <?php
                                        $id=$_SESSION['s_id'];
                                        $name=$_SESSION['f_name'];
                                        $str=strval($id);
                                        $str="s".$name."".$str;
                                        // echo $str;
                                        $str=strtolower($str);
                                        $_SESSION['string']=$str;
                                        $query="SELECT * FROM $str";
                                        $run=mysqli_query($con ,$query);
                                        // echo $run;
                                        ?>

                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Book No.</th>
                                                <th>Date</th>
                                                <th>Return Book</th>
                                                <th>Re-issue Book</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                $i=1;
                                                while( $run==true && mysqli_num_rows($run)>0 && $data=mysqli_fetch_assoc($run))
                                                {
                                                ?>
                                            <tr>
                                                <td> <?php echo $i;$i=$i+1;?> </td>
                                                <td> <?php print($data['bookno']);?> </td>
                                                <td> <?php print($data['reg_date']);?> </td>
                                                <td style="padding:10px;">
                                                    <?php
                                                            $str1="";
                                                            $str1=strval($data['bookno']);
                                                            $str1="return_book.php?book="."".$str1;
                                                            echo "<a href='$str1' >Return</a>";
                                                            ?>

                                                </td>
                                                <td style="padding:10px;">
                                                    <?php
                                                            $str1="";
                                                            $str1=strval($data['bookno']);
                                                            $str1="re_issue_book.php?book="."".$str1;
                                                            echo "<a href='$str1' >Re-issue</a>";
                                                            ?>

                                                </td>
                                            </tr>
                                            <?php
                                                }
                                                if($i==1)
                                                {
                                                    ?>
                                            <tr>
                                                <td colspan="5">
                                                    <p style="color:red;text-align:center">No Book Issued</p>
                                                </td>
                                            </tr>
                                            <?php
                                                }
                                                ?>
                                           
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="stu_info d-flex">
                                <div class="m-auto">
                                    <form class="form-inline" action="issue_book.php" method="post">
                                        <label for="book-no">Issue Book: </label>
                                        <input type="text" class="form-control mx-sm-2 my-sm-0 my-3 "
                                            placeholder="Book No." name="book-no" id="book-no" required>
                                        <button type="submit" class="btn btn-dark">Issue</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                   <?php 
                    }
                   ?>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
