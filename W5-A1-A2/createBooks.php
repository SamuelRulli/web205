<?php
	require_once ("connectionDB.php");
	require_once ("bookManager.php");

    $title   = $_POST['title'];
    $subject = $_POST['subject'];
    $rating  = $_POST['rating']; 

    $instance = new connectionDB();
    $conn     = $instance->getConnection();


    $data = [
        'title'   => $title,
        'subject' => $subject,
        'rating'  => $rating,
    ];

    $__insertTable = new BookManager();
    
    $__insertTable->create_books($data);

    header('Location: index.php');

?>