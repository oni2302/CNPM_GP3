<?php
    include "database.php";
    $email = $_POST['email'];
    $password = $_POST['password'];
    $pass = password_hash($password,PASSWORD_DEFAULT);
    $sql = "insert into user(_email,_password,_role) values ('$email','$pass','KH')";
    $query = mysqli_query($conn,$sql);
?>