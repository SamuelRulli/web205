<?php

    require_once ("connectionDB.php");

    session_start();

    $instance = new connectionDB();
    $conn     = $instance->getConnection();

    $login = _checkLogin($conn);

    if($login == true){

        if (! empty($_POST["remember"])) {
             _setSessionCookie();
        }

        $_SESSION['loggedin'] = true;
        $_SESSION["error_message"] = "Welcome!";

        header('Location: portal.php');
    }else{
        $_SESSION['loggedin'] = false;
        $_SESSION["error_message"] = "wrong user or password!";
        _deleteSessionCookie();
        header('Location: index.php');
    }

    function _setSessionCookie(){
        setcookie("email", $_POST["email"], time()+ 60,'/'); // expires after 60 seconds
    }

    function _deleteSessionCookie(){
        setcookie("email", $_POST["email"], time() - 360,'/');
    }

    function _checkLogin($conn){
        $sql = "SELECT status FROM login WHERE email='" . $_POST['email'] . "' AND password='" . $_POST['password']."'";
        $instance = new connectionDB();
        $conn = $instance->getConnection();

        foreach ($conn->query($sql) as $row) {
            $response = $row['status'];
        }

        return $response;
    }

?>