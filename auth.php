<?php
 session_start();
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
    if($db->query($sql)->num_rows===0){
$_SESSION["alert"]="Login or password wrong";
        header("location:index.php");
    }
    else{
        
        echo "Login successfull";
        $_SESSION["isLogin"]=true;
        $_SESSION["userdata"]=$db->query($sql)->fetch_assoc();
        header("location:dashboard.php");
    }
}
?>