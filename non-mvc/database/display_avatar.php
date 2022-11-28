<?php
include "database.php";
include "session.php";
    $user = $_SESSION['user'];
    if($user['avt_location']!=NULL){
        $location = $user['avt_location'];
        echo "<img class=\"rounded avatar-xl\" src=\"$location\" alt=\"change avatar\">";
    }else{
        echo '<img class="rounded avatar-xl" src="../assets/img/team/profile-picture-3.jpg" alt="change avatar">';
    }
    
?>