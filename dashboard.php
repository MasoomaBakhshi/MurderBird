<?php
	//retrieve the functions
	include('controller/db_connection.php');
	require('controller/functions_messages.php');
	require('controller/functions.php');
	session_start();
	//if admin is logged in
	$admin=find_admin();
	?>
<!DOCTYPE html>
<html>
<head>

  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->  
  <meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
  <title>MurderBird Admin</title>

  <!-- Mobile Specific Metas
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <!-- favicon
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  
  <link rel="shortcut icon" href="assests/images/favicon.png" type="image/x-icon">
  <link rel="icon" href="assests/images/favicon.png" type="image/x-icon">

  <!-- FONTs
  ––––––––––––––––––––––––––––––––––––––--->
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Ramabhadra" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Archivo+Black" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Concert+One" rel="stylesheet">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

  <!-- Styles
  –––––––––––––––––––––––––––––––––––––––––––––––––– --> 
  <!-- Latest compiled and minified CSS of bootstrap-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link href="style/normalize.css" rel="stylesheet" type="text/css"/>
  <link href="style/Skeleton.css" rel="stylesheet" type="text/css"/>
  <link href="style/styles.css" rel="stylesheet" type="text/css"/>
  
  <!-- javascripts
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="  crossorigin="anonymous"></script>
    
    <!-- Latest compiled and minified JavaScript for bootstrap -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> 
  
</head>
<body>
	<form action="controller/logout.php" ><input style="margin:30px; background-color:#ffffff" class="btn btn-danger" type="submit" value="Logout"/></form>
	<div id="adminSect">
		<!---------------logo---------------------->  
    	<div class="admin-logo"><a href="index.php"><img src="assests/images/logo_Ex.png" alt="MurderBird" title="MurderBird"/></a><h2>Admin Dashboard</h2></div><hr/>
        <div class="section">
        	 <?php echo user_message(); echo user_welcome();?>
             <div class="btn btn-danger" class="col-sm-6"><a href="admin.php" title="Change Style">Change Style <span class="glyphicon glyphicon-edit"></span></a></div> </br></br></br>
             <div class="btn btn-danger" class="col-sm-6"><a href="add_user.php" title="Add User">Add Admin   <span class="glyphicon glyphicon-plus"></span></a></div>
		</div>  
   </div>
<script src="codes/default_funcions.js" type="text/javascript" ></script>  
</body>
</html>		 