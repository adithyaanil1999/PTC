<?php
    session_start();
    $message="";
    include('config.php');
    if($_SERVER["REQUEST_METHOD"]==="POST"){

        $student_id=$_SESSION['username'];
        $vacancy= $_POST['vacany_applied'];

        $sql="SELECT * from approval_students WHERE app_student='$student_id' AND app_vac='$vacancy';";
        $result=mysqli_query($link,$sql);
        // echo json_encode($sql);
        
       if(mysqli_num_rows($result)==0){
            $sql = "INSERT INTO approval_students(app_student,app_vac) VALUES ('$student_id','$vacancy');";
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
        else
        {
            $message="ok";
            echo json_encode($message);

        }
    }
    // echo json_encode($message);

?>
