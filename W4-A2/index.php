<?php
	require_once ("bookManager.php");
?>

<html lang="en">

<head>
    <title>WEB 205 - W4-A2</title>
    <meta charset="UTF-8">

	<!-- BOOTSTRAP CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
	<br>
	<form action="createBooks.php" method="POST" class="form-inline col-lg-6 offset-lg-3">
		<label class="sr-only" for="titleFormInput">title</label>
		<input type="text" class="form-control mb-2 mr-sm-2" id="title" name="title" placeholder="Book Title">

		<label class="sr-only" for="subjectFormInput">Subject</label>
		<input type="text" class="form-control mb-2 mr-sm-2" id="subject" name="subject" placeholder="Subject">

		<label class="sr-only" for="ratingFormInput">Rating</label>
		<input type="number" class="form-control mb-2 mr-sm-2" id="rating" name="rating" placeholder="Rating">

		<button type="submit" class="btn btn-primary mb-2">Save</button>
	</form>

	<?php
 		$query = new BookManager();

		echo "<table id='web-205' class='table'>";
    
		echo "<tr>";
			echo "<th>Id</th>";
			echo "<th>Title</th>";
			echo "<th>Subject</th>";
			echo "<th>Rating</th>";
			echo "<th>Action</th>";
		echo "</tr>";

		$books = $query->get_books();

		foreach ($books as $row) {
			echo "<tr>";
				echo "<td>" . $row['id'] . "</td>";
				echo "<td>" . $row['title'] . "</td>";
				echo "<td>" . $row['subject'] . "</td>";
				echo "<td>" . $row['rating'] . "</td>";
				echo "<td><button class='btn btn-danger mb-2' disabled>Delete</button></td>";
			echo "</tr>";
		}
	?>
</body>
</html>