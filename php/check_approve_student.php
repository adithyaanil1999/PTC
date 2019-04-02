<?php
    session_start();
    include('config.php');
    $message="";
    $username=$_SESSION['username'];
    $sql  = "SELECT `student_approved_status`,`student_denined_desc` FROM `user_student` WHERE `student_id`='$username'";
    $result=mysqli_query($link,$sql);
    $row=mysqli_fetch_assoc($result);
    
    
    echo json_encode(array(status=>$row['student_approved_status'],desc=>$row['student_denined_desc']));

?>