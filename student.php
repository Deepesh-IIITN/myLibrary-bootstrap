<?php 
session_start();
error_reporting(0);
if(!isset($_SESSION['stu_id']))
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
    <link rel="icon" href="images/favicon.png">
    <title>myLibrary | Student</title>
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
</style>

<body>
    <?php
       include("student-navbar.php");
    ?>
    <div>
        <div class="container my-5">
            <div class="row">
                <div class="col-lg-4 my-5">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="images/user.jpg" alt="Card image cap">
                        <div class="card-body">
                            <?php
                            include("connection.php");
                            $stu_email =$_SESSION['stu_email'];
                            $query="SELECT * FROM students WHERE email='$stu_email'";
                            $run=mysqli_query($con,$query);
                            $data=mysqli_fetch_assoc($run);
                            ?>
                            <p class="card-text"><b>Name: </b>
                                <?php print($data['first_name']." ".$data['last_name']);?></p>
                            <p class="card-text"><b>Enrollment No: </b> <?php print($data['Roll_no']);?></p>
                            <p class="card-text"><b>Email: </b> <?php print($data['email']);?></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 my-5">
                    <div class="transaction">
                        <?php
                        $id=$_SESSION['stu_id'];
                        $name=$_SESSION['stu_name'];
                        $str=strval($id);
                        $str="s".$name."".$str;
                        $str=strtolower($str);
                        $query="SELECT * FROM `$str`";
                        $run=mysqli_query($con ,$query);
						?>
                        <h3 class="text-center">
                            <u>Issued Books</u>
                        </h3>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Book No.</th>
                                        <th>Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                $i=1;
                                while($data=mysqli_fetch_assoc($run))
                                {
                                ?>
                                    <tr>
                                        <td> <?php echo $i;$i=$i+1;?> </td>
                                        <td> <?php print($data['bookno']);?> </td>
                                        <td> <?php print($data['reg_date']);?> </td>
                                    </tr>
                                    <?php
						        }
                                if($i==1)
                                {
                                    ?>
                                    <tr>
                                        <td colspan="3">
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
        </div>
    </div>

</body>

</html>