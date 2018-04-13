// JavaScript Document
/*
Index
1. play and pause function
2. mute and unmute function
3. HeaderSect display
	. play video through viemo player
	. change background video
	. Side nav links
4. 	aboutSect display
	. animate logo
	. animate services
	. exit or close
5. 	WorkSect display
	. animate logo
	. animate videos
	. Viemo Video iframe player gets URL of each videos
	. exit or close
6. 	contactSect display
	. display function
	. exit or close			
*/ 
var wScroll = $(window).scrollTop();//take window top position while scrolling

$(document).ready(function () {
	$('.vimeoBadge .clip').addClass('col-md-4');
	////////////////headerSect//////////////////
	//play and pause function
    $('#state').on('click', function () 
	{
			
 		var music = document.getElementById('videohead');	
        var icons = $('#state > span');
       // $('#videohead').toggleClass('fade');
        if (music.paused) {
            $('#videohead').get(0).play();//play the video
            icons.removeClass('glyphicon-pause').addClass('glyphicon-play');//change pause icon to play icon
        } else {
            $('#videohead').get(0).pause();//pause video
            icons.removeClass('glyphicon-play').addClass('glyphicon-pause');// change play to pause icon
        }
    });
	
	//sound control function
	$('#voice').on('click', function () 
	{
			
 		var music = document.getElementById('videohead');	
        var icons = $('#voice > span');
        if (music.muted==true) //if audio is mute
		{
			music.muted = false;//unmute audio
            icons.removeClass('glyphicon glyphicon-volume-off').addClass('glyphicon glyphicon-volume-up');//change volume off to volume up icon
        } 
		else
		{
			music.muted = true;//mute audio
            icons.removeClass('glyphicon glyphicon-volume-up').addClass('glyphicon glyphicon-volume-off');//change volume up to off icon
        }
    });
	
	////////////////aboutSect//////////////////
	//Company's info section appear function
	$('#home').on('click', function () 
	{
				  
							  
		$("#aboutSect").fadeTo("slow",1,function(){$("#aboutSect").css("width","100%");});//slide aboutSect
		 
		if($('.intro').is(":visible") == true)// when company's info become visible
		{
			$(".des-logo").addClass('show');//animate logo by adding clas	
		// $(".intro p").addClass('show');
			//$('.intro p').addClass('show');		
				  
			 $('.service').each(function(i)// for each services
			 {	
			  setTimeout(function(){
				$('.service').eq(i).addClass('is-showing');	
			  }, (700 * (Math.exp(i * 0.30))) - 3000);  });// animate after specific duration
		}
  	});
	
	//play button click function
	$('.btn-play').on('click', function () {
		
			
            $('#videohead').get(0).pause();	//pause background video		  
			$('#state > span').removeClass('glyphicon-play').addClass('glyphicon-pause');	//change icon			  
			$("#Openplayer").fadeTo("slow",1,function(){$("#Openplayer").css({'transform':'scale(1,1)'});});//open iframe's player
		 
	  });
		//exit of player
		 $('#exit1').on('click', function () 
			{ 
				$('#Openplayer iframe').attr('src', $('#Openplayer iframe').attr('src')); 								  
				$("#Openplayer").fadeTo("slow",0,function(){$("#Openplayer").css("transform","scale(0,0)")});//close player
			});
	
	//change background 1st video function		
	$("#show1").click(function(e) {
					
			var source=$(this).attr("frameSource");//store frameSource's attribute's value
			var place=$(this).attr("place");//store place's attribute's value	
			$('#videohead source').attr('src', place);//change video's source
			$('#Openplayer iframe').attr('src', source);//change iframe's source
			$("#videohead").fadeTo("slow",1,function(){$("#videohead")[0].load();});//load new video
			$(this).css( "background-color", "#800000" );
			$("#show2").css( "background-color", "rgba(128,0,0,0)" );	//change color of slide controller	
        });
		
	//change background 1st video function		
	$("#show2").click(function(e) {
					
			var source=$(this).attr("frameSource");
			var place=$(this).attr("place");	
			$('#videohead source').attr('src', place);
			$('#Openplayer iframe').attr('src', source);
			$("#videohead").fadeTo("slow",1,function(){$("#videohead")[0].load();});//load new video
			$(this).css( "background-color", "#800000" );
			$("#show1").css( "background-color", "rgba(128,0,0,0)" );		
        });	
		
		//exit function foe headerSect player	
		$('#exit').on('click', function () 
		{
			$('.service').removeClass('is-showing');	
			$('.des-logo').removeClass('show');	  								  
			$("#aboutSect").fadeTo("slow",0,function(){$("#aboutSect").css("width","0%")});
		
		});
	
	//////////////////////////////////
	//slide and open aboutSect	
	$('#home-side').on('click', function () 
	{	
		$("#aboutSect").fadeTo("slow",1,function(){$("#aboutSect").css("width","100%");});//change width to 100%
		
		if($('.intro').is(":visible") == true)// when info became visible
		{
		
		    $(".des-logo").addClass('show');//animate logo
		     $('.service').each(function(i)//animate each services
    				 {	
    				  setTimeout(function(){
    					$('.service').eq(i).addClass('is-showing');	
    				  }, (700 * (Math.exp(i * 0.30))) - 3000);  });
    				  console.log($('.intro').offset().top + ($(window).height() /2.4));
		}
  	});
	
	///////////////workSect///////////////////
	//Slide and display workSect	
	$('#work-side').on('click', function () {		  
							  
			$("#workSect").fadeTo("fast",1,function(){$("#workSect").css({'width':'100%'});});//change width to 100%
			if($('#workSect').is(":visible") == true)//when content's get visible
			{
			  $('.work-logo').addClass('worklogoShow');	//animate logo	
			  setTimeout(function(){//animate each video
				  $('.works').addClass('showWorks');	
				}, (700 * (Math.exp(0.30))) - 3000); 
			}
		 
	  		});
			
		//exit of workSect	
		 $('#exit4').on('click', function () 
			{  	
				$('.work-logo').removeClass('worklogoShow');//remove log
				$('.works').removeClass('showWorks');//remove works							  
				$(".vimeoBadge").css("height","350px");//make height to intially defined							  
				$("#workSect").fadeTo("slow",0,function(){$("#workSect").css("width","0%")});//close workSect
			});
		
		//more to show function		
		$('.more').on('click', function () 
			{ 	
							  
				$(".vimeoBadge").css("height","100%");//increase the height to show all contents
			});	
							
	//show each viemo's video on iframe		
	$('.vimeoBadge a').on('click', function (evt) {
			evt.preventDefault();//disable redirect
			var web=$(this).attr('href');//get the attribute "href" of video link
			var url = web.substr(this.href.lastIndexOf('/') + -4);// take substring of video's id			
            $('#videohead').get(0).pause();	//pause the background video	  
			$('#state > span').removeClass('glyphicon-play').addClass('glyphicon-pause');//change icon
			$("#workPlayer iframe").attr('src', 'https://player.vimeo.com/video/'+url+'?color=800000&byline=0&portrait=0');//send new URL in iframe player
			$("#workPlayer").fadeTo("slow",1,function(){$("#workPlayer").css("width","100%");}); //display iframe
			//$("#workPlayer").css("width","100%");	
		 
	  });
		 //exit iframe player of workSect	
		 $('#exit5').on('click', function () 
			{ 	 
				$('#workPlayer iframe').attr('src', $('#workPlayer iframe').attr('src')); //reset the ifarme source								  
				$("#workPlayer").fadeTo("slow",0,function(){$("#workPlayer").css("width","0");});//hide div
			});
		
		////////////////contactSect//////////////////	
		//Show contactSect	
		$('#contact-side').on('click', function () {			  
			if ( $(window).width() > 400) 
			{      
  			    $("#contactSect").fadeTo("slow",1,function(){$("#contactSect").css({'width':'400px'});});//show contact through slide by increasing width
			}
			else
			{       
  			    $("#contactSect").fadeTo("slow",1,function(){$("#contactSect").css({'width':'100%'});});//show contact through slide by increasing width
			
			}
		 
	  		});
		
		//exit the contactSect	
		 $('#exit3').on('click', function () 
			{ 
				  								  
				$("#contactSect").fadeTo("slow",0,function(){$("#contactSect").css("width","0%")});
			});	
	
	
	

		
});


