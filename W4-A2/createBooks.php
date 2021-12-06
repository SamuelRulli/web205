<?php
	require_once ("connectionDB.php");

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

    $sql = "INSERT into books (title,subject, rating) values (:title,:subject,:rating)";
    $stmt= $conn->prepare($sql)->execute($data);

    header('Location: index.php');

?>