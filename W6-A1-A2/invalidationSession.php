<?php
    session_start();
    
    $_SESSION['loggedin'] = false;
    $_SESSION["error_message"] = "Session finalized!";

    header('Location: index.php');
?>