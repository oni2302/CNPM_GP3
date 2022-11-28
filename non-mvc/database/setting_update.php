<?php

    include "database.php";

    include "session.php";

    $email = $_POST['email'];

    $user = $_POST;

    $gender = $_POST['gender'];

    $birth = date("Y-m-d",strtotime($user['birthday']));

    $sql = 'update user set _ho="'.$user['fname'].'",_ten="'.$user['lname'].'",_gender='.$gender.',_birth="'.$birth.'",_phone="'.$user['phone']. '"where _email="'.$email.'";';

    $query = mysqli_query($conn,$sql);

    

    $sql = "select * from user where _email='$email'";

    $query = mysqli_query($conn,$sql);

    $data = mysqli_fetch_assoc($query);

    $_SESSION['user'] = $data;

    header('location: ../pages/settings.php');

?>