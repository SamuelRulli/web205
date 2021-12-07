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

        function create_books($data) {
            
		    $sql = "INSERT into books (title,subject, rating) values ('$data[title]','$data[subject]', '$data[rating]')";

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