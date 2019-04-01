<?php
    session_start();
    $message="";
    include('config.php');
    if($_SERVER["REQUEST_METHOD"]==="POST"){

        $student_id=$_SESSION['username-reg'];
        $name= $_POST['name'];
        $branch = $_POST['branch'];
        $cgpa = $_POST['cgpa'];
        $obj = $_POST['student-obj'];
        $pro_skills = $_POST['student-pro-skills'];
        $per_skills = $_POST['student-per-skills'];

        $sql = "INSERT INTO user_student(student_id,student_name,student_branch,student_cgpa,student_obj,student_prof_skills,student_pers_skills,student_placement_status,student_approved_status) 
        VALUES ('$student_id','$name','$branch','$cgpa','$obj','$pro_skills','$per_skills','NOTPLACED','PENDING');";
        echo $sql;
        $result=mysqli_query($link,$sql);
        if($result){
            $message="ok";
        }else{
            // $message=$sql;
            // echo json_encode($sql);
        }
    }
    echo json_encode($message);

?>
