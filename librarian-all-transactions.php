<?php
session_start();
error_reporting(0);
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
    <link rel="icon" href="images/favicon.png">
    <title>d-library | All Translations</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
</head>
<style>
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
    max-height: 800px;
}
</style>

<body>
    <?php
       $all_transactions = "active";
       $home="";
       $issued_books="";
       $profile="";
       $logout="";
       include("librarian-navbar.php");
    ?>
    <div class="container my-5 py-5">
        <div class="row">
            <div class="col-lg-12">
                <div class="transaction">

                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Book No.</th>
                                    <th>Student Name</th>
                                    <th>Student Roll No</th>
                                    <th>Student Email</th>
                                    <th>Request Type</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i=1;
                                $temp=strval($_SESSION['lid']);
                                $temp1=$_SESSION['lname'];
                                $str2="t".$temp1."".$temp;
                                $str2=strtolower($str2);
                                include("connection.php");
                                $query="SELECT * FROM $str2 ORDER BY reg_date DESC";
                                $run=mysqli_query($con,$query);
                                if($run==TRUE)
                                {
                                while($data=mysqli_fetch_assoc($run))
                                {
                                ?>

                                <tr>
                                    <td>
                                        <?php echo $i;$i=$i+1;?>
                                    </td>
                                    <td>
                                        <?php print($data['bookno']);?>
                                    </td>
                                    <td>
                                        <?php print($data['name']);?>
                                    </td>
                                    <td>
                                        <?php print($data['roll']);?>
                                    </td>
                                    <td>
                                        <?php print($data['email']);?>
                                    </td>
                                    <td>
                                        <?php print($data['request_type']);?>
                                    </td>
                                    <td>
                                        <?php print($data['reg_date']);?>
                                    </td>
                                </tr>

                                <?php 
                                }
                                }
                                ?>
                            </tbody>
                        </table>
                        <?php
                        if($i==1)
                        {
                            echo "<p class='text-center' style='color:red'>No Transaction Yet</p>";
                        }
                        ?>
                    </div>
                </div>

            </div>
        </div>
    </div>
</body>

</html>