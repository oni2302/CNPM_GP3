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
                if(move_uploaded_file($file_temp, $location)){
                    mysqli_query($conn, "INSERT INTO `image` VALUES('', '$name', '$location','2','$email')") or die(mysqli_error());
                    echo "<script>alert('Video Uploaded')</script>";
                    echo "<script>window.location = 'index.php'</script>";
                }
            }else{
                echo "<script>alert('Wrong video format')</script>";
                echo "<script>window.location = 'index.php'</script>";
            }
        }else{
            echo "<script>alert('File too large to upload')</script>";
            echo "<script>window.location = 'index.php'</script>";
        }
    }
?>