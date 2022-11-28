<?php
    
    $host = "sql206.epizy.com";
        $username = "epiz_32879381";
        $password = "oqe1FtVfMdBNx";
        $db = "epiz_32879381_oni";
    $charset = 'utf8';

    $test = true;
    if($test){
        $host = "127.0.0.1";
        $username = "root";
        $password = "";
        $db = "oni";
    }
    


    global $conn;
    $conn = mysqli_connect($host,$username,$password);
    mysqli_set_charset($conn, $charset);
    if(!$conn){
        die('Couldn not connect: ' . mysqli_error($conn));
    }
    mysqli_select_db($conn,$db);
?>