<?php
    redirectToIndex();
    
    function redirectToIndex(){
        if($_SERVER['REQUEST_METHOD'] === "GET")
        {
            header('Location: ../index.php');
            exit;   
        }
    }
?>