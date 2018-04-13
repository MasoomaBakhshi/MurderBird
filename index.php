<?php
	include ('controller/db_connection.php');
	include ('controller/functions_messages.php');
	include ('controller/functions.php');
	session_start();
	$result=flag();
	foreach($result as $row){  
	?>
<!DOCTYPE html>
<html>
<head>

  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->  
  <meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
  <title>MurderBird</title>

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
  <!---------Modified Styles by admin-------->
  <style>
  	p,strong{
		font-size:<?php echo $row['paragraphFont']; ?>;
		color:<?php echo $row['paragraphColor']; ?>;
		}
	h1,h2,h3,h4,h5,h6{
		color:<?php echo $row['headingColor']; ?>;
		}
  	#aboutSect{
		background-image:url(assests/images/<?php echo $row['backgroundAbout']; ?>);
		}
	#worksSect{
		background-image:url(assests/images/<?php echo $row['backgroundWorks']; ?>);
		}	
  </style>
  <!-- javascripts
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="  crossorigin="anonymous"></script>
    
    <!-- Latest compiled and minified JavaScript for bootstrap -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> 
  
</head>

<body>


  <!-- home player
  ––––––––––––––––––––––––––––––––––––––--->
    
      <div id="Openplayer">
          <div id="exit1" class="visible-desktop"><span id="control" class="glyphicon glyphicon-remove"></span></div>
          <iframe src="<?php echo $row['slider1Link']; ?>" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
      </div>

  <!-- header Sect
  ––––––––––––––––––––––––––––––––––––––--->
	
      <div id="headerSect">
          <!---------------video background----------------------->	
          <video id="videohead" poster="assests/images/background.jpg" autoplay loop>
              <source src="assests/videos/<?php echo $row['slider1Video']; ?>" type="video/mp4">
          </video>
        
          <!---------------reddish background----------------------->
          <div id="red">
          </div>
          <!---------------logo---------------------->  
          <div class="logo"><img src="assests/images/logo_Ex.png" alt="MurderBird" title="MurderBird"/>
          <div class="btn-play">Play</div></div>
         <!--- <div class="logo-show"><img src="images/logo_Ex.png"/></div>--->
          
          <!---------------player Controller---------------------->  
          <ul class="videoControl"> 
              <li><div id="state" class="visible-desktop"><span id="control" class="glyphicon glyphicon-play"></span></div></li>
              <li><div id="voice" class="visible-desktop"><span id="control" class="glyphicon glyphicon-volume-up"></span></div></li>
          </ul>
          
          <!---------------videos slider---------------------->     
         <ul class="nav"></li>
              <li><div frameSource="<?php echo $row['slider1Link']; ?>" place="assests/videos/<?php echo $row['slider1Video']; ?>" id="show1"></div></li>
              <li><div frameSource="<?php echo $row['slider2Link']; ?>" place="assests/videos/<?php echo $row['slider2Video']; ?>" id="show2"></div></li>
          </ul>
          
          <!---------------side bar menu---------------------->          
          <div class="side-bar" >
              <div id="home-side"><span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span><p id="para1" >About</p></div>
              <div id="work-side"><span class="glyphicon glyphicon-film" aria-hidden="true"></span><p id="para2" >Works</p></div>
              <div id="contact-side"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span><p id="para3" >Contact</p></div>
              <div id="login-side"><a href="login.php"><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span></a><p id="para4" >Log In</p></div>
           </div>   
      </div>

  <!-- aboutSect
  ––––––––––––––––––––––––––––––––––––––--->
    
      <div id="aboutSect">
          
          <!---------------exit---------------------->  	
          <div id="exit" class="visible-desktop"><span id="control" class="glyphicon glyphicon-remove"></span></div>
          
          <!---------------intro of company---------------------->  
          <div class="intro">
              <div class="des-logo"><img src="assests/images/logo_Ex.png"/ title="MurderBird" alt="MurderBird"></div>
              <strong>Welcome to Murder Bird.</strong><p><p><?php echo $row['aboutText']; ?></p>
              <strong>Ross McLennan and Daniel Marsden are the award-winning creatives at the head of Murder Bird. </strong></p>
              
              <!---------------services---------------------->  
              <div class="row">
                  <div class="service serv1" class="col-sm-4"><img src="assests/images/ross.jpg" alt="Ross McLennan" title="Ross McLennan"/><h4>Ross McLennan</h4></div>
                  <div class="service serv2" class="col-sm-4"><img src="assests/images/daniel.jpg" alt="Daniel Marsden" title="Daniel Marsden"/><h4>Daniel Marsden</h4></div>
              </div> 
          </div>                
      </div>

  <!-- Contact Sect
  ––––––––––––––––––––––––––––––––––––––--->
    
      <div id="contactSect">
          
          <!---------------exit---------------------->  
          <div id="exit3" class="visible-desktop"><span id="control" class="glyphicon glyphicon-remove"></span></div>
          
          <!---------------Welcome loader---------------------->   
          <div class="loader">
            <span>W</span>
            <span>E</span>
            <span>L</span>
            <span>C</span>
            <span>O</span>
            <span>M</span>
            <span>E</span>
            
            <div class="covers">
              <span></span>
              <span></span>
              <span></span>
              <span></span>
              <span></span>
              <span></span>
              <span></span>
            </div>
          </div>
          
          <!---------------logo---------------------->  
          <div class="contact-logo"><img src="assests/images/logo_Ex.png" alt="MurderBird" title="MurderBird"/></div>
          <hr/>
          
          <!---------------contact info---------------------->  
          <div id="contactDetail"> 
          <p><strong>Email: </strong><?php echo $row['contactEmail']; ?></p><p><strong>Call: </strong><?php echo $row['contactPhone']; ?></p><strong>Mail: </strong><?php echo $row['contactAddress']; ?></p>
          <hr/>
          <!---------------scoial media---------------------->     
          <ul class="contact-nav"></li>
              <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
              
              <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
              
              <li><a href="#"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
              
              <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
          </ul> 
      </div>
    </div>

  <!-- worksect
  ––––––––––––––––––––––––––––––––––––––--->
 
   <div id="workSect"> 	
      <!---------------exit---------------------->  
      <div id="exit4" class="visible-desktop"><span id="control" class="glyphicon glyphicon-remove"></span></div>
      <!---------------logo---------------------->  
      <div class="work-logo"><img src="assests/images/logo_Ex.png" alt="MurderBird" title="MurderBird"/></div>
      <!---------------works detail---------------------->  
      <h4>Category 1</h4>
      <!---------------viemo videos---------------------->  
      <div id="badge" class="works">         
          <div class="vimeoBadge horizontal">
          <script src="https://vimeo.com/user4873521/badgeo/?script=1&badge_layout=horizontal&badge_quantity=200&badge_size=200&badge_stream=all&show_titles=yes&badge_album=2962470">			        </script>
      </div>    
      <!---------------more option--------------------->          
      <h6 class="more">Load More...</h6> 
  </div>
  
  
   </div>

  <!-- workSect player
  ––––––––––––––––––––––––––––––––––––––---> 
    <div id="workPlayer">
          <div id="exit5" class="visible-desktop"><span class="glyphicon glyphicon-remove"></span></div>
          <iframe src="" width="640" height="351" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
    </div>

  <!-- default javascript
  ––––––––––––––––––––––––––––––––––––––--->   
<script src="codes/script.js" type="text/javascript"></script>
<?php } ?> 
</body>
</html>