<?php
    session_start();
    include('config.php');
    $message="";
    $username=$_SESSION['username'];
    $sql  = "SELECT `rec_approved_status`,`rec_denied_desc` FROM `user_recruiter` WHERE `rec_id`='$username'";
    $result=mysqli_query($link,$sql);
    $row=mysqli_fetch_assoc($result);
    
    
    echo json_encode(array(status=>$row['rec_approved_status'],desc=>$row['rec_denied_desc']));

?>