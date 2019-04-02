<?php
    session_start();
    include('config.php');
    $username=$_SESSION['username'];

    $sql="DELETE FROM login_table WHERE username='$username';";
    $result=mysqli_query($link,$sql);

    $message=$sql;

    echo json_encode($message);

?>