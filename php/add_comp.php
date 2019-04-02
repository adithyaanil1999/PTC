<?php
    session_start();
    include('config.php');
    if($_SERVER["REQUEST_METHOD"]==="POST"){
        $name= $_POST['comp_name'];
        $desc = rtrim($_POST['comp_desc_reg']);

        $sql = "INSERT INTO company(comp_name,comp_desc) 
        VALUES ('$name','$desc');";
        echo $sql;
        $result=mysqli_query($link,$sql);
        if($result){
            $message="ok";
            echo json_encode($message);
        }else{
            // $message=$sql;
            // echo json_encode($sql);
        }
    }
?>
