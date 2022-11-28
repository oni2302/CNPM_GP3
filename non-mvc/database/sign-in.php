<?php
include "database.php";
include "session.php";
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "select `user`.*,`avatar`.location as avt_location,`cover`.location as cover_location 
    from user 
    left join image as `avatar` on avatar = `avatar`.image_id
    left join image as `cover` on cover = `cover`.image_id
    where _email='$email' ";
    $query = mysqli_query($conn,$sql);
    $data = mysqli_fetch_assoc($query);
    $checkEmail = mysqli_num_rows($query);
    if($checkEmail>=1){
        $checkPass = password_verify($password, $data['_password']);
        var_dump($checkPass);
        if($checkPass){
            $_SESSION['user'] = $data;
            header('location: ../pages/settings.php');
        }
        else{
            echo "Password k dung";
        }
    }
    else{
        echo "Email khong ton tai";
    }
?>