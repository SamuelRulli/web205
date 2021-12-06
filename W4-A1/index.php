<html lang="en">

<head>
    <title>WEB 205 - W4-A1</title>
    <meta charset="UTF-8">
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

		echo "<script>console.log('Connect Successful');</script>";

	?>
</body>
</html>