<?php
		 $host= "localhost";
			$username = "root";
			$password = "";
			$dbname = "masoomab_murderbird";
			try
	{
		$conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
	}
	catch(PDOException $e)
	{
		$_SESSION['error'] = $e->getMessage();
		exit();
	}
	?>