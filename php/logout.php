<?php
    session_start();
    if(session_destroy())
    {
        header("url=index.php");
    } 
?>