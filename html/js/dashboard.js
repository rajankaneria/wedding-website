//$('.carousel.carousel-slider').carousel({fullWidth: true});
$(function(){

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
	    scrollTop: $("div#home").offset().top
		});
	});

	$('#scrollCouple').click(function() {
	  $('html, body').animate({
	    scrollTop: $("div#couple").offset().top
		});
	});

	$('#scrollProgram').click(function() {
	  $('html, body').animate({
	    scrollTop: $("div#program").offset().top
		});
	});

	$('#scrollKey_person').click(function() {
	  $('html, body').animate({
	    scrollTop: $("div#key_person").offset().top
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



  
    