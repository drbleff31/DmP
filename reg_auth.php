<?php
header('Content-Type: text/html; charset=utf-8');

$mysqli = mysqli_connect("localhost", "tucqfdxu_0540", "12345678", "tucqfdxu_0540");
if ($mysqli == false){
    print("error");
    }else{
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    
    $result = $mysqli->query("SELECT * FROM `users` WHERE `email` = '$email' AND `pass` = '$pass'");
    
    if ($result->num_rows > 0){
        print("ok");
    } else {
        // $mysqli->query("INSERT INTO `users`(`name`, `lastname`, `email`, `pass`) VALUES ('$name', '$lastname', '$email', '$pass')");
        print("не положено");
        }
    }
?>