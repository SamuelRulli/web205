<?php
    require_once('calculate.php');  

    session_start();

    // INSTANCE CLASS CALCULATE   
    $calc = new calculate();

    $result_str = $result = '';

    if (isset($_POST['unit-submit'])) {
        $units = $_POST['units'];

        if (!empty($units)) {
            $result = $calc->set_value_bill($units);
            $result_str = 'Total amount of ' . $units . ' - ' . $result;
        }

        $_SESSION["result_str"] =  $result_str;
        
        header('Location: index.php');
    }
?>