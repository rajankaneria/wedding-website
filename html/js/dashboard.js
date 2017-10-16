//$('.carousel.carousel-slider').carousel({fullWidth: true});
$(function(){



	/*HOW WE MET*/

	$('#img-top').on("mouseover", function(e){
		$('#how-we-met-content').fadeIn(1500);
		/*setInterval(howWeMet, 5000);*/
	});

	$('#img-top').on("click", function(e){
		$('#how-we-met-content').fadeIn(1500);
		/*setInterval(howWeMet, 5000);*/
	});

	$('#img-top').on("mouseleave", function() {
	   $('#how-we-met-content').fadeOut(1000);
	});

	/*function howWeMet(){
		$('#how-we-met-content').slideUp();
	}
*/
	/*setInterval(myTimer, 1000);*/



$('.modal').modal();

/*===== Date Initialization =======*/
	$('.datepicker').pickadate({
	    selectMonths: true, // Creates a dropdown to control month
	    selectYears: 15, // Creates a dropdown of 15 years to control year,
	    today: 'Today',
	    clear: 'Clear',
	    close: 'Ok',
	    closeOnSelect: false // Close upon selecting a date,
	  });
/*========  Time Picker ===============*/

  $('.timepicker').pickatime({
    default: 'now', // Set default time: 'now', '1:30AM', '16:30'
    fromnow: 0,       // set default time to * milliseconds from now (using with default = 'now')
    twelvehour: true, // Use AM/PM or 24-hour format
    donetext: 'OK', // text for done-button
    cleartext: 'Clear', // text for clear-button
    canceltext: 'Cancel', // Text for cancel-button
    autoclose: false, // automatic close timepicker
    ampmclickable: true, // make AM PM clickable
    aftershow: function(){} //Function for after opening timepicker
  });



setInterval(function() { makeTimer(); }, 1000);

$('.button-collapse').sideNav({
      menuWidth: 250, // Default is 300
      edge: 'left', // Choose the horizontal origin
      closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
      draggable: true, // Choose whether you can drag to open on touch screens,
      onOpen: function(el) { /* Do Stuff*/ }, // A function to be called when sideNav is opened
      onClose: function(el) { /* Do Stuff*/ }, // A function to be called when sideNav is closed
    }
  );

  $('.carousel.carousel-slider').carousel({fullWidth: true});

  $('.family-img img').materialbox();


  /*==== Scroll to Div =====*/

    $('#scrollHome').click(function() {
	  $('html, body').animate({
	    scrollTop: $("div#home").offset().top-90
		});
	});

	$('#scrollCouple').click(function() {
	  $('html, body').animate({
	    scrollTop: $("div#couple").offset().top
		});
	});

	$('#scrollProgram').click(function() {
	  $('html, body').animate({
	    scrollTop: $("div#program").offset().top -20
		});
	});

	$('#scrollKey_person').click(function() {
	  $('html, body').animate({
	    scrollTop: $("div#key_person").offset().top - 50
		});
	});


	$('#scrollGallery').click(function() {
	  $('html, body').animate({
	    scrollTop: $("div#gallery").offset().top - 50
		});
	});


	/*SCROLL Navigation*/

	$(window).scroll(function() {
	    if ($(this).scrollTop() > 100) /* .header-top height */ {
	      $('nav').addClass('fixed');
	      $('nav').removeClass('nav-fixed');
	      /*$('.wild-title').css('margin-left', '0');*/
	    } else {
	      $('nav').removeClass('fixed');
	      /*$('.wild-title').css('margin-left', '-300px');*/
	    }
    });



	/*============ RSVP Form ===========================*/

	/*============ Gallery ===================*/
	  $('.EventGallery #lightgallery').lightGallery({
	    pager: true
	  });

	  $('.eventButtons a').on("click", function(){
	  	$('.eventButtons a').removeClass('active');
	 	$(this).addClass('active');
	  });
		
	$('.eventButtons a').on("click", function(){
	 	var title = $(this).attr('id');
	 	console.log(title);
	 	$('.EventGallery').hide();
	 	$("#"+title+'-box').fadeIn(1000);
	});


	/*============= Mobile Gallery ================*/
	$('.eventButtons-mobile a').on("click", function(){
	  	$('.eventButtons-mobile a').removeClass('active');
	 	$(this).addClass('active');
	  });
		
	$('.eventButtons-mobile a').on("click", function(){
	 	var Mgallery = $(this).attr('id');
	 	console.log(Mgallery);
	 	$('.EventGallery-mobile').removeClass('active-gallery');
	 	$("#"+Mgallery+'-box-mobile').addClass('active-gallery');
	});
    

	/*Multiple Select Box*/

	 $('select').material_select();

});



function makeTimer() {

	var dateString = $("#weddingDate").val();
	var endTime = new Date(dateString);			
	endTime = (Date.parse(endTime) / 1000);
			var now = new Date();
			now = (Date.parse(now) / 1000);

			var timeLeft = endTime - now - 5;

			var days = Math.floor(timeLeft / 86400); 
			var hours = Math.floor((timeLeft - (days * 86400)) / 3600);
			var minutes = Math.floor((timeLeft - (days * 86400) - (hours * 3600 )) / 60);
			var seconds = Math.floor((timeLeft - (days * 86400) - (hours * 3600) - (minutes * 60)));
 

			$("#days").html(days);
			$("#hours").html(hours);
			$("#minutes").html(minutes);
			$("#seconds").html(seconds);		
	}



  
    