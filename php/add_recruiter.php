<?php
    session_start();
    include('config.php');
    if($_SERVER["REQUEST_METHOD"]==="POST"){

        $rec_id=$_SESSION['username-reg'];
        $name= $_POST['name'];
        $comp_name = $_POST['comp_name'];

        $sql = "INSERT INTO user_recruiter(rec_id,rec_name,rec_comp,rec_approved_status) 
        VALUES ('$rec_id','$name','$comp_name','PENDING');";
        echo $sql;
        $result=mysqli_query($link,$sql);
        if($result){
            $message="ok";
            // echo json_encode($message);
        }else{
            // $message=$sql;
            // echo json_encode($sql);
        }
    }
?>
