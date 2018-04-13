<?php
//redirect
function redirect($path)
{
	header('location:'. $path);
	} 
//find admin
function find_admin()
{
	if(!isset($_SESSION['admin']))
	{
		//if the admin session is not set (i.e. the user is not logged in) redirect to the login page
		redirect('..\login.php');
	}
	else{
		$mainuser=$_SESSION['admin'];
		return $mainuser;
		}
}

//create a function to retrieve id the matching name 
	function get_id($name)
	{
		global $conn;
		$sql = 'SELECT id FROM admin WHERE name = :name';
		$statement = $conn->prepare($sql);
		$statement->bindValue(':name', $name);
		$statement->execute();
		$result = $statement->fetchAll();
		$statement->closeCursor();	
		return $result;	
	}
//create a function to retrieve id for count the matching name 
	function get_id_count($name)
	{
		global $conn;
		$sql = 'SELECT * FROM admin WHERE name = :name';
		$statement = $conn->prepare($sql);
		$statement->bindValue(':name', $name);
		$statement->execute();
		$result = $statement->fetchAll();
		$statement->closeCursor();
		$count = $statement->rowCount();	
		return $count;	
	}	
//create a function to retrieve the matching name and password
	function login($name, $password)
	{
		global $conn;
		$sql = 'SELECT * FROM admin WHERE name = :name AND password = :password';
		$statement = $conn->prepare($sql);
		$statement->bindValue(':name', $name);
		$statement->bindValue(':password', $password);
		$statement->execute();
		$result = $statement->fetchAll();
		$statement->closeCursor();
		$count = $statement->rowCount();	
		return $count;	
	}
//create a function to retrieve admin info with the matching name and password
	function admin($name, $password)
	{
		global $conn;
		$sql = 'SELECT * FROM admin WHERE name = :name AND password = :password';
		$statement = $conn->prepare($sql);
		$statement->bindValue(':name', $name);
		$statement->bindValue(':password', $password);
		$statement->execute();
		$result = $statement->fetchAll();
		$statement->closeCursor();	
		return $result;
	}
	
	//create a function to add a new style properties and contents
	function apply($backgroundColor, $backgroundAbout, $backgroundWorks, $paragraphColor, $headingColor, $paragraphFont, $aboutText, $contactAddress, $contactPhone, $contactEmail, $slider1Video, $slider1Link, $slider2Video, $slider2Link, $date , $flag ,$admin)
	{
		global $conn;
		$sql = "INSERT INTO murderbird (backgroundColor, backgroundAbout, backgroundWorks, paragraphColor, headingColor, paragraphFont, aboutText, contactAddress, contactPhone, contactEmail, slider1Video, slider1Link,slider2Video, slider2Link,date , flag , admin) VALUES (:backgroundColor,  :backgroundAbout, :backgroundWorks, :paragraphColor, :headingColor, :paragraphFont, :aboutText, :contactAddress, :contactPhone, :contactEmail, :slider1Video, :slider1Link, :slider2Video, :slider2Link, :date, :flag, :admin)";
		$statement = $conn->prepare($sql);
		$statement->bindValue(':backgroundColor', $backgroundColor);
		$statement->bindValue(':backgroundAbout', $backgroundAbout);
		$statement->bindValue(':backgroundWorks', $backgroundWorks);		
		$statement->bindValue(':paragraphColor', $paragraphColor);
		$statement->bindValue(':headingColor', $headingColor);
		$statement->bindValue(':paragraphFont', $paragraphFont);
		$statement->bindValue(':aboutText', $aboutText);
		$statement->bindValue(':contactAddress', $contactAddress);
		$statement->bindValue(':contactPhone', $contactPhone);
		$statement->bindValue(':contactEmail', $contactEmail);
		$statement->bindValue(':slider1Video', $slider1Video);
		$statement->bindValue(':slider1Link', $slider1Link);
		$statement->bindValue(':slider2Video', $slider2Video);
		$statement->bindValue(':slider2Link', $slider2Link);
		$statement->bindValue(':date', $date);
		$statement->bindValue(':flag', $flag);
		$statement->bindValue(':admin', $admin);
		$result = $statement->execute();
		$statement->closeCursor();
		return $result;			
	}
	
	//create a function to add a new admin
	function add_user($name, $email, $password)
	{
		global $conn;
		$sql = "INSERT INTO admin (name, email, password) VALUES (:name,  :email, :password)";
		$statement = $conn->prepare($sql);
		$statement->bindValue(':name', $name);
		$statement->bindValue(':email', $email);
		$statement->bindValue(':password', $password);
		$result = $statement->execute();
		$statement->closeCursor();
		return $result;			
	}	
//create a function to set flag to false if new styles info is added
	function flag_false()
	{
		global $conn;
		$sql = 'UPDATE murderbird SET flag=false WHERE flag = true';
		$statement = $conn->prepare($sql);
		$statement->execute();
		$result = $statement->fetchAll();
		$statement->closeCursor();	
		return $result;
	}
//create a function to retrieve  styles info if flag is true means the current style is active
	function flag()
	{
		global $conn;
		$sql = 'SELECT * FROM murderbird WHERE flag = true';
		$statement = $conn->prepare($sql);
		$statement->execute();
		$result = $statement->fetchAll();
		$statement->closeCursor();	
		return $result;
	}		

?>