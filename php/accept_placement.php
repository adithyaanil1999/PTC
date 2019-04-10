<?php
    session_start();
    include('config.php');
    if($_SERVER["REQUEST_METHOD"]==="POST"){
        $offer_id= $_POST['offer_id'];
        $comp=$_POST['offer_comp'];
        $username = $_SESSION['username'];
        $sql = "UPDATE offer_sent SET offer_status='ACCEPTED' WHERE student_id='$username';";
        $result=mysqli_query($link,$sql);
        $sql="UPDATE user_student SET student_placement_status='PLACED'WHERE student_id='$username';";
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
