<?php
session_start();
if($_SESSION["isLogin"]==false){
header("location:index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>dashboard</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css'/>
</head>
<body class="bg-primary">
    <div class="container-fluid">
        <div class="row mt-5 text-center">
            <div class="col-10 mx-auto">
                <div class="card">
                    <div class="card-body">
                        <h2>Welcome <?=$_SESSION["userdata"]["name"]?></h2>
                        <a class="btn btn-danger float-right" href="<?php session_destroy();?>" role="button">Logout</a>
                        <table class="table table-bordered">
                            <tr>
                                <td>Name</td>
                                <td><?=$_SESSION["userdata"]["name"]?></td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td><?=$_SESSION["userdata"]["email"]?></td>
                            </tr>
                            <tr>
                                <td>Registration Date</td>
                                <td><?=$_SESSION["userdata"]["reg_date"]?></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>
</html>

