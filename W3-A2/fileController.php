<?php
    require_once('fileService.php');  

    $fileController = new fileService();

    $fileController->save($_POST['textInput']);

    header('Location: index.php');
?> 