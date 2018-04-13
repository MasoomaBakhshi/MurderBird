<?php
	//retrieve the functions
	include('controller/db_connection.php');
	require('controller/functions_messages.php');
	require('controller/functions.php');
	session_start();
	$admin=find_admin();
	$result=flag();
	foreach($result as $row){  
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
    	<div class="admin-logo"><a href="index.php"><img src="assests/images/logo_Ex.png" alt="MurderBird" title="MurderBird"/></a><h2>Admin DashBoard</h2></div>
        <div class="section">
        	 <?php echo user_message(); echo user_welcome(); ?>
            <form action="controller/apply_process.php" class="form-horizontal" method="post" onsubmit="return checksubmit()" enctype="multipart/form-data">   
                      <div class="form-group">
                        <label class="col-sm-4 control-label">Date</label>
                        <div class="col-sm-6">
                          <?php echo  date("Y/m/d h:i:sa") ?><input type="hidden" class="form-control" name="date" value="<?php echo  date("Y/m/d h:i:sa") ?>">
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <label class="col-sm-4 control-label">Admin Name</label>
                        <div class="col-sm-6">
                          <?php echo $_SESSION['admin']; ?><input type="hidden" class="form-control" name="admin" value="<?php echo $_SESSION['admin-id']; ?>">
                        </div>
                      </div>
               <hr/>
             <h4>Slider</h4>
               
                      <div class="form-group">
                        <label class="col-sm-4 control-label">Slider1 Video</label>
                        <div class="col-sm-6">
                           <?php echo $row['slider1Video']; ?><input type="file" name="slider1Video"  class="form-control"  value="<?php echo $row['slider1Video']; ?>" >
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <label class="col-sm-4 control-label">Slider1 Iframe Video Link</label>
                        <div class="col-sm-6">
                         	<?php echo $row['slider1Link']; ?><input type="url" class="form-control" name="slider1Link" value="<?php echo $row['slider1Link']; ?>" onchange="checkurl(this)">
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <label class="col-sm-4 control-label">Slider2 Video</label>
                        <div class="col-sm-6">
                          <?php echo $row['slider2Video']; ?><input type="file" name="slider2Video" class="form-control"  value="<?php echo $row['slider2Video']; ?>">
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <label class="col-sm-4 control-label">Slider2 Iframe Video Link</label>
                        <div class="col-sm-6">
                          <?php echo $row['slider2Link']; ?><input type="url" class="form-control" name="slider2Link" value="<?php echo $row['slider2Link']; ?>" onchange="checkurl(this)">
                        </div>
                      </div>
            <hr/>                   
            <h4>Background Styles</h4>
                      
                      <div class="form-group">
                        <label class="col-sm-4 control-label">Background Color</label>
                        <div class="col-sm-6">
                          <input type="color" name="backgroundColor" class="form-control"  value="<?php echo $row['backgroundColor']; ?>">
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <label class="col-sm-4 control-label">Background Image of About us Page</label>
                        <div class="col-sm-6">
                          <?php echo $row['backgroundAbout']; ?><input type="file" name="backgroundAbout"  class="form-control" value="<?php echo $row['backgroundAbout']; ?>">
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <label class="col-sm-4 control-label">Background Image of Works Section Page</label>
                        <div class="col-sm-6">
                          <?php echo $row['backgroundWorks']; ?><input type="file" name="backgroundWorks" class="form-control" value="<?php echo $row['backgroundWorks']; ?>">
                        </div>
                      </div>
            <hr/>
            <h4>Typography</h4>
                        
                      <div class="form-group">
                        <label class="col-sm-4 control-label">Headings Colors</label>
                        <div class="col-sm-6">
                          <input type="color" name="headingColor" class="form-control"  value="<?php echo $row['headingColor']; ?>">
                        </div>
                      </div> 
                      
                      <div class="form-group">
                        <label class="col-sm-4 control-label">Paragraph Color</label>
                        <div class="col-sm-6">
                          <input type="color" name="paragraphColor" class="form-control"  value="<?php echo $row['paragraphColor']; ?>">
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <label class="col-sm-4 control-label">Paragraph Font Size</label>
                        <div class="col-sm-6">
                          <input type="text" name="paragraphFont" onChange="checkfont(this)" class="form-control"  value="<?php echo $row['paragraphFont']; ?>">
                        </div>
                      </div>
               <hr/> 
            <h4>Contents</h4>
              
                      <div class="form-group">
                        <label class="col-sm-4 control-label">Contact Address</label>
                        <div class="col-sm-6">
                          <input type="text" name="contactAddress" onChange="checkaddress(this)" class="form-control"  value="<?php echo $row['contactAddress']; ?>">
                        </div>
                      </div> 
                      
                      <div class="form-group">
                        <label class="col-sm-4 control-label">Contact Email</label>
                        <div class="col-sm-6">
                          <input type="text" name="contactEmail" onChange="checkmail(this)" class="form-control"  value="<?php echo $row['contactEmail']; ?>">
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <label class="col-sm-4 control-label">Contact Phone</label>
                        <div class="col-sm-6">
                          <input type="text" name="contactPhone" onChange="checkpone(this)" class="form-control"  value="<?php echo $row['contactPhone']; ?>">
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <label class="col-sm-4 control-label">About Text</label>
                        <div class="col-sm-6">
                          <textarea rows="3" type="text" class="form-control" name="aboutText" value="<?php echo $row['aboutText']; ?>" onchange="checkdesciption(this)"><?php echo $row['aboutText']; ?></textarea>
                        </div>
                      </div>
                     
                    <hr/> 
                    <div id="alert" class="danger"></div>
                    
                    <div class="form-group">
                    <div class="col-sm-12">
                      <button type="submit" class="btn btn-default">Apply</button>
                    </div>
                  	</div>  
           		<?php } ?> 
             </form>        
      </div>  
   </div>
<script src="codes/default_funcions.js" type="text/javascript" ></script>  
</body>
</html>