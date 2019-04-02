<?php
    session_start();
    include('config.php');
    if($_SERVER["REQUEST_METHOD"]==="POST"){
        $user_id=$_SESSION['username'];
        $cgpa= $_POST['cgpa-min'];
        $skills=$_POST['skills_req'];
        $loc=$_POST['location'];
        $desc = rtrim($_POST['listing_desc']);

        $sql1="SELECT rec_comp from user_recruiter WHERE rec_id='$user_id';";
        $result=mysqli_query($link,$sql1);
        $row=mysqli_fetch_assoc($result);
        $comp=$row['rec_comp'];
        

        $sql = "INSERT INTO vacancy_listing(vacancy_recruiter_id,vacancy_desc,vacancy_comp,vacancy_cgpa,vacancy_skills_req,vacancy_location) 
        VALUES ('$user_id','$desc','$comp',$cgpa,'$skills','$loc');";
        // echo $sql;
        $result=mysqli_query($link,$sql);
        if($result){
            $message="ok";
            echo json_encode($message);
        }else{
            $message=$sql;
            echo json_encode($sql);
        }
    }
?>
