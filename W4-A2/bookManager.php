<?php
	require_once ("connectionDB.php");

    class BookManager{

        function get_books() {
		    $sql = "SELECT id, title,subject, rating FROM books";

            $instance = new connectionDB();
            $conn = $instance->getConnection();
            $books = $conn->query($sql);

            return $books;
        }

        function create_books($title, $subject , $rating) {
		    $sql = "INSERT into books (title,subject, rating) values ('$title','$subject', '$rating')";

            $instance = new connectionDB();
            $conn = $instance->getConnection();
            $books = $conn->query($sql);

            return $books;
        }

        function delete_books() {
            return null;
        }

    }

?>