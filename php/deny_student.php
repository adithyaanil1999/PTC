<?php
    session_start();
    include('config.php');
    $student=$_POST['student_applied'];

    $sql="UPDATE approval_students SET app_status = 'DENIED' WHERE app_student = '$student';";
    $result=mysqli_query($link,$sql);

    $message="ok";

    echo json_encode($message);

?>