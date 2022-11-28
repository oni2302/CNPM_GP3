<?php
    include 'database.php';
    include 'session.php';

    if(isset($_SESSION['user'])){
        $user = $_SESSION['user'];
    }
    if(ISSET($_POST['save'])){
        $file_name = $_FILES['image']['name'];
        $file_temp = $_FILES['image']['tmp_name'];
        $file_size = $_FILES['image']['size'];
        if($file_size < 50000000){
            $file = explode('.', $file_name);
            $end = end($file);
            $allowed_ext = array('png', 'jpg');
            if(in_array($end, $allowed_ext)){
                $name = date("Ymd").time();
                $email = $user['_email'];
                $location = '../image/'.$name.".".$end;
                if($_SESSION['user']['avt_location']==NULL){
                    if(move_uploaded_file($file_temp, $location)){
                    mysqli_query($conn, "INSERT INTO `image` VALUES('', '$name', '$location','1','$email')") or die(mysqli_error());
                    echo "<script>alert('Image uploaded')</script>";
                    $_SESSION['user']['avt_location'] = $location;
                    header('location: ../pages/settings.php');
                    }
                }
                else{
                    if(move_uploaded_file($file_temp, $location)){
                        $avatar =$_SESSION['user']['avatar'];
                        unlink($_SESSION['user']['avt_location']);
                        mysqli_query($conn, "UPDATE `image` set location = '$location' where image_id = $avatar") or die(mysqli_error());
                        echo "<script>alert('Image updated')</script>";
                        header('location: ../pages/settings.php');
                        $_SESSION['user']['avt_location'] = $location;
                    }
                    
                }
                
            }else{
                echo "<script>alert('Wrong video format')</script>";
                header('location: ../pages/settings.php');
            }
        }else{
            echo "<script>alert('File too large to upload')</script>";
            header('location: ../pages/settings.php');
        }
    }
?>