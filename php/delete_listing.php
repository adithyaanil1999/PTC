<?php
    session_start();
    include('config.php');
    $username=$_SESSION['username'];

    $sql="DELETE FROM vacancy_listing WHERE vacancy_recruiter_id='$username';";
    $result=mysqli_query($link,$sql);

    $message="ok";

    echo json_encode($message);

?>