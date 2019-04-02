<?php
    session_start();
    include('config.php');
    $message="";
    $username=$_SESSION['username'];
    $sql  = "SELECT * FROM vacancy_listing WHERE vacancy_recruiter_id='$username';";
    $result=mysqli_query($link,$sql);
    $row=mysqli_fetch_assoc($result);
    $num=mysqli_num_rows($result);

    if($num!==0)
    {   
        $message="YES";
        // echo json_encode($sql);
        echo json_encode(array(message=>$message,desc=>$row['vacancy_desc'],cgpa=>$row['vacancy_cgpa'],skill=>$row['vacancy_skills_req'],loc=>$row['vacancy_location']));
    }
    else
    {
        $message="NO";
        echo json_encode($message);
    }


?>