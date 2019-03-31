<?php
    session_start();
    include('config.php');
    if($_SERVER["REQUEST_METHOD"]==="POST"){

        $username= $_POST['username_log'];
        $password = $_POST['password_log'];
        $sql = "SELECT username,usertype FROM login_table where username='$username' and userpass='$password';";
        $result=mysqli_query($link,$sql);
        if($result){
            if(mysqli_num_rows($result)!=0){
                $row=mysqli_fetch_assoc($result);
                if($row['usertype']==='S'){
                    $message="ok";
                    $_SESSION['username']=$username;
                    $location="student.php";
                    echo json_encode(array(message=>$message,loc=>$location));
                }else if($row['usertype']==='R'){
                    $message="ok";
                    $_SESSION['username']=$username;
                    $location="recruiter.php";
                    echo json_encode(array(message=>$message,loc=>$location));
                }else if($row['usertype']==='A'){
                    $message="ok";
                    $_SESSION['username']=$username;
                    $location="admin.php";
                    echo json_encode(array(message=>$message,loc=>$location));
                }
            }else{
                $message=$sql;
                echo json_encode($sql);
            }
        }else{
            die('error'.mysqli_error($link));
        }
    }
?>
