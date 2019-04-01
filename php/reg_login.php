<?php
    session_start();
    include('config.php');
    if($_SERVER["REQUEST_METHOD"]==="POST"){
        $message="";
        $username= $_POST['username_reg'];
        $_SESSION['username-reg']=$username;
        $password = md5($_POST['password_reg']);
        $usertype = $_POST['type-user'];
        $sql = "INSERT INTO login_table(username,userpass,usertype) VALUES ('$username','$password','$usertype');";
        // echo $sql;
        $result=mysqli_query($link,$sql);
        
        $message="ok";
        echo json_encode("ok");
    }
?>