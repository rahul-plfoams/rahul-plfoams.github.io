<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register/login</title>
    <link rel='stylesheet'
        href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css' />
</head>

<body class="bg-primary">
    <div class="row mt-5">
        <div class="col-4 mx-auto">
            <div class="card border-danger p-5 rounded">
                <div class="card-body">
                    <h4 class="card-title">Login</h4>
                    <form action="auth.php" method="post">
                        <div class="form-group">
                            <label for="username">Email</label>
                            <input type="text" name="username" id="username" class="form-control" placeholder="E-mail"
                                aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password" class="form-control"
                                placeholder="Password" aria-describedby="helpId">
                        </div>
                        <button type="submit" name="login" class="btn btn-primary float-left">Login</button>
                        <a href="register.php" class="btn btn-danger float-right" role="button">Register</a>
                    </form>

                </div>

                <?php if(isset($_SESSION["alert"])):?>
                <div>
                    <div class="alert alert-success" role="alert">
                        <?=$_SESSION["alert"]?>
                    </div>
                </div>
                <?php endif;?>
            </div>
        </div>
    </div>
</body>

</html>