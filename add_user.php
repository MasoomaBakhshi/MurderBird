<?php
	//retrieve the functions
	include('controller/db_connection.php');
	require('controller/functions_messages.php');
	require('controller/functions.php');
	session_start();
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
	<form action="dashboard.php" ><input style="margin:30px; background-color:#ffffff" class="btn btn-danger" type="submit" value="Back"/></form>
	<div id="adminSect">
		<!---------------logo---------------------->  
    	<div class="admin-logo"><a href="index.php"><img src="assests/images/logo_Ex.png" alt="MurderBird" title="MurderBird"/></a><h2>Add Admin</h2></div>
        <div class="section">
        	<div id="alert" class="danger"></div> <?php echo user_message();?>
	    	<form action="controller/add_user_process.php" class="form-horizontal" method="post" onsubmit="return checksubmit()"  enctype="multipart/form-data">   
                  <div class="form-group">
                    <label class="col-sm-3 control-label" required>Name</label>
                    <div class="col-sm-7">
                      <input type="text" name="name" onChange="checkname(this)" class="form-control" placeholder="Name" required>
                    </div>
                  </div>
                  
                                    
                 <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Email</label>
                    <div class="col-sm-7">
                      <input type="email" name="email" class="form-control" onchange="checkmail(this)" id="inputEmail3" placeholder="Eamil" required>
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label for="inputPassword3" class="col-sm-3 control-label">Password</label>
                    <div class="col-sm-7">
                      <input type="password" name="passowrd" onchange="checkpassword(this)" class="form-control" id="inputPassword3" placeholder="Password" required>
                    </div>
                  </div>
                  
                                    
                  <div class="form-group">
                    <div class="col-sm-10" >
                      <button type="submit" name="add-user" class="btn btn-default">Add Admin</button>
                    </div>
                  </div>                  
                </form>
        </div>  
   </div>
<script src="codes/default_funcions.js" type="text/javascript" ></script>  
</body>
</html>		 