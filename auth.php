<?php
include "database.php";
$sql = "CREATE TABLE users (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(30) NOT NULL,
email VARCHAR(50),
password VARCHAR(60),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

$db=new database();
if(isset($_POST['register'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
$sql="INSERT INTO users(name,email,password) VALUES('$name','$email','$password')";
if($db->query($sql)){
    session_start();
    $_SESSION["alert"]="Registered Successfully";
    header("location:index.php");
}
else{
    echo mysqli_error($db->connection);
}
}
if(isset($_POST['login'])){
    $email=$_POST['username'];
    $password=$_POST['password'];
    $sql="SELECT * FROM users WHERE(email='$email' AND password='$password')";
    if($db->query($sql)){
        session_start();
        echo "Login successfull";
        $_SESSION["isLogin"]=true;
        $_SESSION["userdata"]=$db->query($sql)->fetch_assoc();
        echo "<pre>";
print_r($_SESSION["userdata"]);
        header("location:dashboard.php");
    }
    else{
        echo mysqli_error($db->connection);
    }
}
?>