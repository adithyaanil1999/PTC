<?php
    session_start();
    include('config.php');
    $message="";
    if($_SERVER["REQUEST_METHOD"]==="POST"){
        $user_id=$_POST['user-id'];
        $user_status=$_POST['user-status'];
        $user_desc=$_POST['user-deny-desc'];
        
        if(preg_match("/^[1-9]{2}[B,M][A-Z]{2}[0-9]{4}$/",$user_id))
        {
            //student
            $sql="UPDATE user_student
                SET student_approved_status='$user_status',student_denined_desc='$user_desc' 
                WHERE student_id='$user_id';";
            $result=mysqli_query($link,$sql);
            if($result){
                $message="ok";
            }
            else
            {
                $message=$sql;
            }      
        }
        else
        {
            $sql="UPDATE user_recruiter
            SET rec_approved_status='$user_status',rec_denied_desc='$user_desc' 
            WHERE rec_id='$user_id';";
            $result=mysqli_query($link,$sql);
            if($result){
                $message="ok";
            }
            else
            {
                $message=$sql;
            }   
            
        }
        // $message="recruiter";
        echo json_encode($message);
        
    }
?>