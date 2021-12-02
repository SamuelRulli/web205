<html lang="en">

<head>
    <title>WEB 205 - W4-A2</title>
    <meta charset="UTF-8">

	<!-- BOOTSTRAP CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
	<?php
		//________ Connect DataBase
		$userDB    ='root';
		$passwordDB='mysql';
		$dataBase  ='web-205';
		$host      ='localhost';

		//$connectDB = new mysqli($host, $userDB, $passwordDB, $dataBase);

		$connectDB = mysqli_connect($host, $userDB, $passwordDB, $dataBase);

		// Check connection
		echo "<script>console.log( " . mysqli_connect_errno() . ");</script>";

		if (mysqli_connect_errno()) {
			echo "Failed to connect to MySQL: " . mysqli_connect_error();
			exit();
		}

		$sql = "SELECT id, title,subject, rating FROM books";

		if($resultSet = mysqli_query($connectDB, $sql)){

			echo "<table id='web-205' class='table'>";

				echo "<tr>";
					echo "<th>Id</th>";
					echo "<th>Title</th>";
					echo "<th>Subject</th>";
					echo "<th>Rating</th>";
				echo "</tr>";

				if(mysqli_num_rows($resultSet) > 0){
					while($row = mysqli_fetch_array($resultSet)){
						echo "<tr>";
							echo "<td>" . $row['id'] . "</td>";
							echo "<td>" . $row['title'] . "</td>";
							echo "<td>" . $row['subject'] . "</td>";
							echo "<td>" . $row['rating'] . "</td>";
						echo "</tr>";
					}
				}else{
					echo "<td>No books to result list</td>";
				}

			echo "</table>";
		}else{
			echo "<td>No books to result list</td>";
		}


	?>
</body>
</html>