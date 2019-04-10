<?php
    session_start();
    include('config.php');
    if($_SERVER["REQUEST_METHOD"]==="POST"){
        $rec_id=$_SESSION['username'];
        $student_id= $_POST['student_applied'];
        $vac_id=$_POST['vacancy_applied'];
        $amt=$_POST['offer-amt'];


        $sql="SELECT * FROM offer_sent WHERE vac_id='$vac_id';";
        $result=mysqli_query($link,$sql);

        if(mysqli_num_rows($result)==0){
            $sql="INSERT INTO offer_sent(vac_id,student_id,rec_id,offer_amt) VALUES('$vac_id','$student_id','$rec_id','$amt');";
            $result=mysqli_query($link,$sql);
            if($result){
                $message="ok";
                echo json_encode($message);
            }else{
                $message=$sql;
                echo json_encode($sql);
            }

            echo json_encode($sql);
        }
        else{
            $message="SENT";
            echo json_encode($message);

        }
    }
?>
